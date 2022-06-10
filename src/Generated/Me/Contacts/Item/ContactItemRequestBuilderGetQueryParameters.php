<?php

namespace Microsoft\Graph\Me\Contacts\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class ContactItemRequestBuilderGetQueryParameters 
{
    /**
     * @QueryParameter("%24select")
     * @var array<string>|null $select Select properties to be returned
    */
    public ?array $select = null;
    
}
