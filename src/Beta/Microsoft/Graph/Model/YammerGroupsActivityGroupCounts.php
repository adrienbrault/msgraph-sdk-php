<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YammerGroupsActivityGroupCounts File
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
* YammerGroupsActivityGroupCounts class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YammerGroupsActivityGroupCounts extends Entity
{
    /**
    * Gets the active
    *
    * @return int|null The active
    */
    public function getActive()
    {
        if (array_key_exists("active", $this->_propDict)) {
            return $this->_propDict["active"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the active
    *
    * @param int $val The active
    *
    * @return YammerGroupsActivityGroupCounts
    */
    public function setActive($val)
    {
        $this->_propDict["active"] = intval($val);
        return $this;
    }
    
    /**
    * Gets the reportDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The reportDate
    */
    public function getReportDate()
    {
        if (array_key_exists("reportDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["reportDate"])) {
                return $this->_propDict["reportDate"];
            } else {
                $this->_propDict["reportDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["reportDate"]);
                return $this->_propDict["reportDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The reportDate
    *
    * @return YammerGroupsActivityGroupCounts
    */
    public function setReportDate($val)
    {
        $this->_propDict["reportDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportPeriod
    *
    * @return string|null The reportPeriod
    */
    public function getReportPeriod()
    {
        if (array_key_exists("reportPeriod", $this->_propDict)) {
            return $this->_propDict["reportPeriod"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the reportPeriod
    *
    * @param string $val The reportPeriod
    *
    * @return YammerGroupsActivityGroupCounts
    */
    public function setReportPeriod($val)
    {
        $this->_propDict["reportPeriod"] = $val;
        return $this;
    }
    
    /**
    * Gets the reportRefreshDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The reportRefreshDate
    */
    public function getReportRefreshDate()
    {
        if (array_key_exists("reportRefreshDate", $this->_propDict)) {
            if (is_a($this->_propDict["reportRefreshDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["reportRefreshDate"])) {
                return $this->_propDict["reportRefreshDate"];
            } else {
                $this->_propDict["reportRefreshDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["reportRefreshDate"]);
                return $this->_propDict["reportRefreshDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the reportRefreshDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The reportRefreshDate
    *
    * @return YammerGroupsActivityGroupCounts
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the total
    *
    * @return int|null The total
    */
    public function getTotal()
    {
        if (array_key_exists("total", $this->_propDict)) {
            return $this->_propDict["total"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the total
    *
    * @param int $val The total
    *
    * @return YammerGroupsActivityGroupCounts
    */
    public function setTotal($val)
    {
        $this->_propDict["total"] = intval($val);
        return $this;
    }
    
}
