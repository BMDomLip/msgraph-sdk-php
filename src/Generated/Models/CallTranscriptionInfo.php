<?php

namespace Microsoft\Graph\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class CallTranscriptionInfo implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var DateTime|null $lastModifiedDateTime The state modified time in UTC.
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var CallTranscriptionState|null $state Possible values are: notStarted, active, inactive.
    */
    private ?CallTranscriptionState $state = null;
    
    /**
     * Instantiates a new callTranscriptionInfo and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return CallTranscriptionInfo
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): CallTranscriptionInfo {
        return new CallTranscriptionInfo();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'state' => function (ParseNode $n) use ($o) { $o->setState($n->getEnumValue(CallTranscriptionState::class)); },
        ];
    }

    /**
     * Gets the lastModifiedDateTime property value. The state modified time in UTC.
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the state property value. Possible values are: notStarted, active, inactive.
     * @return CallTranscriptionState|null
    */
    public function getState(): ?CallTranscriptionState {
        return $this->state;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('state', $this->state);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. The state modified time in UTC.
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the state property value. Possible values are: notStarted, active, inactive.
     *  @param CallTranscriptionState|null $value Value to set for the state property.
    */
    public function setState(?CallTranscriptionState $value ): void {
        $this->state = $value;
    }

}
