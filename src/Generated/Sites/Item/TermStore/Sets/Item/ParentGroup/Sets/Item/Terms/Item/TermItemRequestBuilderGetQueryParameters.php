<?php

namespace Microsoft\Graph\Sites\Item\TermStore\Sets\Item\ParentGroup\Sets\Item\Terms\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class TermItemRequestBuilderGetQueryParameters 
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
