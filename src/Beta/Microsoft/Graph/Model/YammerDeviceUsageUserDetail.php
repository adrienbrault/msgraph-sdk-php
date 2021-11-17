<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* YammerDeviceUsageUserDetail File
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
* YammerDeviceUsageUserDetail class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class YammerDeviceUsageUserDetail extends Entity
{
    /**
    * Gets the displayName
    *
    * @return string|null The displayName
    */
    public function getDisplayName()
    {
        if (array_key_exists("displayName", $this->_propDict)) {
            return $this->_propDict["displayName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the displayName
    *
    * @param string $val The displayName
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setDisplayName($val)
    {
        $this->_propDict["displayName"] = $val;
        return $this;
    }
    
    /**
    * Gets the lastActivityDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The lastActivityDate
    */
    public function getLastActivityDate()
    {
        if (array_key_exists("lastActivityDate", $this->_propDict)) {
            if (is_a($this->_propDict["lastActivityDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["lastActivityDate"])) {
                return $this->_propDict["lastActivityDate"];
            } else {
                $this->_propDict["lastActivityDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["lastActivityDate"]);
                return $this->_propDict["lastActivityDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the lastActivityDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The lastActivityDate
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setLastActivityDate($val)
    {
        $this->_propDict["lastActivityDate"] = $val;
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
    * @return YammerDeviceUsageUserDetail
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
    * @return YammerDeviceUsageUserDetail
    */
    public function setReportRefreshDate($val)
    {
        $this->_propDict["reportRefreshDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the stateChangeDate
    *
    * @return \Microsoft\Graph\Core\Models\Date|null The stateChangeDate
    */
    public function getStateChangeDate()
    {
        if (array_key_exists("stateChangeDate", $this->_propDict)) {
            if (is_a($this->_propDict["stateChangeDate"], "\Microsoft\Graph\Core\Models\Date") || is_null($this->_propDict["stateChangeDate"])) {
                return $this->_propDict["stateChangeDate"];
            } else {
                $this->_propDict["stateChangeDate"] = new \Microsoft\Graph\Core\Models\Date($this->_propDict["stateChangeDate"]);
                return $this->_propDict["stateChangeDate"];
            }
        }
        return null;
    }
    
    /**
    * Sets the stateChangeDate
    *
    * @param \Microsoft\Graph\Core\Models\Date $val The stateChangeDate
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setStateChangeDate($val)
    {
        $this->_propDict["stateChangeDate"] = $val;
        return $this;
    }
    
    /**
    * Gets the usedAndroidPhone
    *
    * @return bool|null The usedAndroidPhone
    */
    public function getUsedAndroidPhone()
    {
        if (array_key_exists("usedAndroidPhone", $this->_propDict)) {
            return $this->_propDict["usedAndroidPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedAndroidPhone
    *
    * @param bool $val The usedAndroidPhone
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUsedAndroidPhone($val)
    {
        $this->_propDict["usedAndroidPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usediPad
    *
    * @return bool|null The usediPad
    */
    public function getUsediPad()
    {
        if (array_key_exists("usediPad", $this->_propDict)) {
            return $this->_propDict["usediPad"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usediPad
    *
    * @param bool $val The usediPad
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUsediPad($val)
    {
        $this->_propDict["usediPad"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usediPhone
    *
    * @return bool|null The usediPhone
    */
    public function getUsediPhone()
    {
        if (array_key_exists("usediPhone", $this->_propDict)) {
            return $this->_propDict["usediPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usediPhone
    *
    * @param bool $val The usediPhone
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUsediPhone($val)
    {
        $this->_propDict["usediPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedOthers
    *
    * @return bool|null The usedOthers
    */
    public function getUsedOthers()
    {
        if (array_key_exists("usedOthers", $this->_propDict)) {
            return $this->_propDict["usedOthers"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedOthers
    *
    * @param bool $val The usedOthers
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUsedOthers($val)
    {
        $this->_propDict["usedOthers"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWeb
    *
    * @return bool|null The usedWeb
    */
    public function getUsedWeb()
    {
        if (array_key_exists("usedWeb", $this->_propDict)) {
            return $this->_propDict["usedWeb"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWeb
    *
    * @param bool $val The usedWeb
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUsedWeb($val)
    {
        $this->_propDict["usedWeb"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the usedWindowsPhone
    *
    * @return bool|null The usedWindowsPhone
    */
    public function getUsedWindowsPhone()
    {
        if (array_key_exists("usedWindowsPhone", $this->_propDict)) {
            return $this->_propDict["usedWindowsPhone"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the usedWindowsPhone
    *
    * @param bool $val The usedWindowsPhone
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUsedWindowsPhone($val)
    {
        $this->_propDict["usedWindowsPhone"] = boolval($val);
        return $this;
    }
    
    /**
    * Gets the userPrincipalName
    *
    * @return string|null The userPrincipalName
    */
    public function getUserPrincipalName()
    {
        if (array_key_exists("userPrincipalName", $this->_propDict)) {
            return $this->_propDict["userPrincipalName"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userPrincipalName
    *
    * @param string $val The userPrincipalName
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUserPrincipalName($val)
    {
        $this->_propDict["userPrincipalName"] = $val;
        return $this;
    }
    
    /**
    * Gets the userState
    *
    * @return string|null The userState
    */
    public function getUserState()
    {
        if (array_key_exists("userState", $this->_propDict)) {
            return $this->_propDict["userState"];
        } else {
            return null;
        }
    }
    
    /**
    * Sets the userState
    *
    * @param string $val The userState
    *
    * @return YammerDeviceUsageUserDetail
    */
    public function setUserState($val)
    {
        $this->_propDict["userState"] = $val;
        return $this;
    }
    
}
