<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* AuthenticationContext File
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
* AuthenticationContext class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class AuthenticationContext extends Entity
{

    /**
    * Gets the detail
    *
    * @return AuthenticationContextDetail|null The detail
    */
    public function getDetail()
    {
        if (array_key_exists("detail", $this->_propDict)) {
            if (is_a($this->_propDict["detail"], "\Beta\Microsoft\Graph\Model\AuthenticationContextDetail") || is_null($this->_propDict["detail"])) {
                return $this->_propDict["detail"];
            } else {
                $this->_propDict["detail"] = new AuthenticationContextDetail($this->_propDict["detail"]);
                return $this->_propDict["detail"];
            }
        }
        return null;
    }

    /**
    * Sets the detail
    *
    * @param AuthenticationContextDetail $val The value to assign to the detail
    *
    * @return AuthenticationContext The AuthenticationContext
    */
    public function setDetail($val)
    {
        $this->_propDict["detail"] = $val;
         return $this;
    }
    /**
    * Gets the id
    *
    * @return string|null The id
    */
    public function getId()
    {
        if (array_key_exists("id", $this->_propDict)) {
            return $this->_propDict["id"];
        } else {
            return null;
        }
    }

    /**
    * Sets the id
    *
    * @param string $val The value of the id
    *
    * @return AuthenticationContext
    */
    public function setId($val)
    {
        $this->_propDict["id"] = $val;
        return $this;
    }
}
