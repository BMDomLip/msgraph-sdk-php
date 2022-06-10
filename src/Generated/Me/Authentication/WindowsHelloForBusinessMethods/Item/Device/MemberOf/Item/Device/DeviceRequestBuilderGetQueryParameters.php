<?php

namespace Microsoft\Graph\Me\Authentication\WindowsHelloForBusinessMethods\Item\Device\MemberOf\Item\Device;

use Microsoft\Kiota\Abstractions\QueryParameter;

class DeviceRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24expand")
     * @var array<string>|null $expand Expand related entities
    */
    public ?array $expand = null;
    
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
