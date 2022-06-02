<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* EducationFeedbackResourceOutcome File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
namespace Beta\Microsoft\Graph\Model;

/**
* EducationFeedbackResourceOutcome class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class EducationFeedbackResourceOutcome extends EducationOutcome
{
    /**
    * Gets the feedbackResource
    *
    * @return EducationResource|null The feedbackResource
    */
    public function getFeedbackResource()
    {
        if (array_key_exists("feedbackResource", $this->_propDict)) {
            if (is_a($this->_propDict["feedbackResource"], "\Beta\Microsoft\Graph\Model\EducationResource") || is_null($this->_propDict["feedbackResource"])) {
                return $this->_propDict["feedbackResource"];
            } else {
                $this->_propDict["feedbackResource"] = new EducationResource($this->_propDict["feedbackResource"]);
                return $this->_propDict["feedbackResource"];
            }
        }
        return null;
    }

    /**
    * Sets the feedbackResource
    *
    * @param EducationResource $val The feedbackResource
    *
    * @return EducationFeedbackResourceOutcome
    */
    public function setFeedbackResource($val)
    {
        $this->_propDict["feedbackResource"] = $val;
        return $this;
    }

    /**
    * Gets the resourceStatus
    *
    * @return EducationFeedbackResourceOutcomeStatus|null The resourceStatus
    */
    public function getResourceStatus()
    {
        if (array_key_exists("resourceStatus", $this->_propDict)) {
            if (is_a($this->_propDict["resourceStatus"], "\Beta\Microsoft\Graph\Model\EducationFeedbackResourceOutcomeStatus") || is_null($this->_propDict["resourceStatus"])) {
                return $this->_propDict["resourceStatus"];
            } else {
                $this->_propDict["resourceStatus"] = new EducationFeedbackResourceOutcomeStatus($this->_propDict["resourceStatus"]);
                return $this->_propDict["resourceStatus"];
            }
        }
        return null;
    }

    /**
    * Sets the resourceStatus
    *
    * @param EducationFeedbackResourceOutcomeStatus $val The resourceStatus
    *
    * @return EducationFeedbackResourceOutcome
    */
    public function setResourceStatus($val)
    {
        $this->_propDict["resourceStatus"] = $val;
        return $this;
    }

}
