<?php

namespace Microsoft\Graph\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AuthenticationMethodsRegistrationCampaignIncludeTarget implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var string|null $id The object identifier of an Azure AD user or group.
    */
    private ?string $id = null;
    
    /**
     * @var string|null $targetedAuthenticationMethod The authentication method that the user is prompted to register. The value must be microsoftAuthenticator.
    */
    private ?string $targetedAuthenticationMethod = null;
    
    /**
     * @var AuthenticationMethodTargetType|null $targetType The type of the authentication method target. Possible values are: user, group, unknownFutureValue.
    */
    private ?AuthenticationMethodTargetType $targetType = null;
    
    /**
     * Instantiates a new authenticationMethodsRegistrationCampaignIncludeTarget and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AuthenticationMethodsRegistrationCampaignIncludeTarget
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AuthenticationMethodsRegistrationCampaignIncludeTarget {
        return new AuthenticationMethodsRegistrationCampaignIncludeTarget();
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
            'id' => function (ParseNode $n) use ($o) { $o->setId($n->getStringValue()); },
            'targetedAuthenticationMethod' => function (ParseNode $n) use ($o) { $o->setTargetedAuthenticationMethod($n->getStringValue()); },
            'targetType' => function (ParseNode $n) use ($o) { $o->setTargetType($n->getEnumValue(AuthenticationMethodTargetType::class)); },
        ];
    }

    /**
     * Gets the id property value. The object identifier of an Azure AD user or group.
     * @return string|null
    */
    public function getId(): ?string {
        return $this->id;
    }

    /**
     * Gets the targetedAuthenticationMethod property value. The authentication method that the user is prompted to register. The value must be microsoftAuthenticator.
     * @return string|null
    */
    public function getTargetedAuthenticationMethod(): ?string {
        return $this->targetedAuthenticationMethod;
    }

    /**
     * Gets the targetType property value. The type of the authentication method target. Possible values are: user, group, unknownFutureValue.
     * @return AuthenticationMethodTargetType|null
    */
    public function getTargetType(): ?AuthenticationMethodTargetType {
        return $this->targetType;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeStringValue('id', $this->id);
        $writer->writeStringValue('targetedAuthenticationMethod', $this->targetedAuthenticationMethod);
        $writer->writeEnumValue('targetType', $this->targetType);
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
     * Sets the id property value. The object identifier of an Azure AD user or group.
     *  @param string|null $value Value to set for the id property.
    */
    public function setId(?string $value ): void {
        $this->id = $value;
    }

    /**
     * Sets the targetedAuthenticationMethod property value. The authentication method that the user is prompted to register. The value must be microsoftAuthenticator.
     *  @param string|null $value Value to set for the targetedAuthenticationMethod property.
    */
    public function setTargetedAuthenticationMethod(?string $value ): void {
        $this->targetedAuthenticationMethod = $value;
    }

    /**
     * Sets the targetType property value. The type of the authentication method target. Possible values are: user, group, unknownFutureValue.
     *  @param AuthenticationMethodTargetType|null $value Value to set for the targetType property.
    */
    public function setTargetType(?AuthenticationMethodTargetType $value ): void {
        $this->targetType = $value;
    }

}
