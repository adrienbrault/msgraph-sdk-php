<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationMethodsRoot File
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
* AuthenticationMethodsRoot class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationMethodsRoot extends Entity
{

     /**
     * Gets the userRegistrationDetails
     *
     * @return array|null The userRegistrationDetails
     */
    public function getUserRegistrationDetails()
    {
        if (array_key_exists("userRegistrationDetails", $this->_propDict)) {
           return $this->_propDict["userRegistrationDetails"];
        } else {
            return null;
        }
    }

    /**
    * Sets the userRegistrationDetails
    *
    * @param UserRegistrationDetails[] $val The userRegistrationDetails
    *
    * @return AuthenticationMethodsRoot
    */
    public function setUserRegistrationDetails($val)
    {
        $this->_propDict["userRegistrationDetails"] = $val;
        return $this;
    }

}
