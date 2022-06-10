<?php

namespace Microsoft\Graph\Teams\Item\Schedule\TimeOffRequests\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class TimeOffRequestItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
