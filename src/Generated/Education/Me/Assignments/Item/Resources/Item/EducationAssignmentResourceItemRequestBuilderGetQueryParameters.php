<?php

namespace Microsoft\Graph\Education\Me\Assignments\Item\Resources\Item;

use Microsoft\Kiota\Abstractions\QueryParameter;

class EducationAssignmentResourceItemRequestBuilderGetQueryParameters 
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
