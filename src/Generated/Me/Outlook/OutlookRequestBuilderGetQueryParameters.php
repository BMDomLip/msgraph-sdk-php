<?php

namespace Microsoft\Graph\Me\Outlook;

use Microsoft\Kiota\Abstractions\QueryParameter;

class OutlookRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
