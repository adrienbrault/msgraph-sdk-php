<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* UserSettings File
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
* UserSettings class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class UserSettings extends Entity
{
    /**
    * Gets the contributionToContentDiscoveryAsOrganizationDisabled
    * Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
    *
    * @return bool|null The contributionToContentDiscoveryAsOrganizationDisabled
    */
    public function getContributionToContentDiscoveryAsOrganizationDisabled()
    {
        if (array_key_exists("contributionToContentDiscoveryAsOrganizationDisabled", $this->_propDict)) {
            return $this->_propDict["contributionToContentDiscoveryAsOrganizationDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contributionToContentDiscoveryAsOrganizationDisabled
    * Reflects the Office Delve organization level setting. When set to true, the organization doesn't have access to Office Delve. This setting is read-only and can only be changed by administrators in the SharePoint admin center.
    *
    * @param bool $val The contributionToContentDiscoveryAsOrganizationDisabled
    *
    * @return UserSettings
    */
    public function setContributionToContentDiscoveryAsOrganizationDisabled($val)
    {
        $this->_propDict["contributionToContentDiscoveryAsOrganizationDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the contributionToContentDiscoveryDisabled
    * When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
    *
    * @return bool|null The contributionToContentDiscoveryDisabled
    */
    public function getContributionToContentDiscoveryDisabled()
    {
        if (array_key_exists("contributionToContentDiscoveryDisabled", $this->_propDict)) {
            return $this->_propDict["contributionToContentDiscoveryDisabled"];
        } else {
            return null;
        }
    }

    /**
    * Sets the contributionToContentDiscoveryDisabled
    * When set to true, documents in the user's Office Delve are disabled. Users can control this setting in Office Delve.
    *
    * @param bool $val The contributionToContentDiscoveryDisabled
    *
    * @return UserSettings
    */
    public function setContributionToContentDiscoveryDisabled($val)
    {
        $this->_propDict["contributionToContentDiscoveryDisabled"] = boolval($val);
        return $this;
    }

    /**
    * Gets the itemInsights
    * The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
    *
    * @return UserInsightsSettings|null The itemInsights
    */
    public function getItemInsights()
    {
        if (array_key_exists("itemInsights", $this->_propDict)) {
            if (is_a($this->_propDict["itemInsights"], "\Beta\Microsoft\Graph\Model\UserInsightsSettings") || is_null($this->_propDict["itemInsights"])) {
                return $this->_propDict["itemInsights"];
            } else {
                $this->_propDict["itemInsights"] = new UserInsightsSettings($this->_propDict["itemInsights"]);
                return $this->_propDict["itemInsights"];
            }
        }
        return null;
    }

    /**
    * Sets the itemInsights
    * The user's settings for the visibility of meeting hour insights, and insights derived between a user and other items in Microsoft 365, such as documents or sites. Get userInsightsSettings through this navigation property.
    *
    * @param UserInsightsSettings $val The itemInsights
    *
    * @return UserSettings
    */
    public function setItemInsights($val)
    {
        $this->_propDict["itemInsights"] = $val;
        return $this;
    }

    /**
    * Gets the regionalAndLanguageSettings
    * The user's preferences for languages, regional locale and date/time formatting.
    *
    * @return RegionalAndLanguageSettings|null The regionalAndLanguageSettings
    */
    public function getRegionalAndLanguageSettings()
    {
        if (array_key_exists("regionalAndLanguageSettings", $this->_propDict)) {
            if (is_a($this->_propDict["regionalAndLanguageSettings"], "\Beta\Microsoft\Graph\Model\RegionalAndLanguageSettings") || is_null($this->_propDict["regionalAndLanguageSettings"])) {
                return $this->_propDict["regionalAndLanguageSettings"];
            } else {
                $this->_propDict["regionalAndLanguageSettings"] = new RegionalAndLanguageSettings($this->_propDict["regionalAndLanguageSettings"]);
                return $this->_propDict["regionalAndLanguageSettings"];
            }
        }
        return null;
    }

    /**
    * Sets the regionalAndLanguageSettings
    * The user's preferences for languages, regional locale and date/time formatting.
    *
    * @param RegionalAndLanguageSettings $val The regionalAndLanguageSettings
    *
    * @return UserSettings
    */
    public function setRegionalAndLanguageSettings($val)
    {
        $this->_propDict["regionalAndLanguageSettings"] = $val;
        return $this;
    }

    /**
    * Gets the shiftPreferences
    * The shift preferences for the user.
    *
    * @return ShiftPreferences|null The shiftPreferences
    */
    public function getShiftPreferences()
    {
        if (array_key_exists("shiftPreferences", $this->_propDict)) {
            if (is_a($this->_propDict["shiftPreferences"], "\Beta\Microsoft\Graph\Model\ShiftPreferences") || is_null($this->_propDict["shiftPreferences"])) {
                return $this->_propDict["shiftPreferences"];
            } else {
                $this->_propDict["shiftPreferences"] = new ShiftPreferences($this->_propDict["shiftPreferences"]);
                return $this->_propDict["shiftPreferences"];
            }
        }
        return null;
    }

    /**
    * Sets the shiftPreferences
    * The shift preferences for the user.
    *
    * @param ShiftPreferences $val The shiftPreferences
    *
    * @return UserSettings
    */
    public function setShiftPreferences($val)
    {
        $this->_propDict["shiftPreferences"] = $val;
        return $this;
    }

}
