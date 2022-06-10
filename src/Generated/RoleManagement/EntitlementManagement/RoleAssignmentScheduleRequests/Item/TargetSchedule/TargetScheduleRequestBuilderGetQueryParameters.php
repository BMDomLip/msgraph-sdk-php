<?php

namespace Microsoft\Graph\RoleManagement\EntitlementManagement\RoleAssignmentScheduleRequests\Item\TargetSchedule;

use Microsoft\Kiota\Abstractions\QueryParameter;

class TargetScheduleRequestBuilderGetQueryParameters 
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
