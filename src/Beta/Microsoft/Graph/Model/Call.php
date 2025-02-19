<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* Call File
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
* Call class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright (c) Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @link      https://graph.microsoft.com
*/
class Call extends Entity
{

     /**
     * Gets the activeModalities
    * The list of active modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data. Read-only.
     *
     * @return array|null The activeModalities
     */
    public function getActiveModalities()
    {
        if (array_key_exists("activeModalities", $this->_propDict)) {
           return $this->_propDict["activeModalities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the activeModalities
    * The list of active modalities. Possible values are: unknown, audio, video, videoBasedScreenSharing, data. Read-only.
    *
    * @param Modality[] $val The activeModalities
    *
    * @return Call
    */
    public function setActiveModalities($val)
    {
        $this->_propDict["activeModalities"] = $val;
        return $this;
    }

    /**
    * Gets the answeredBy
    * The participant that answered the call. Read-only.
    *
    * @return ParticipantInfo|null The answeredBy
    */
    public function getAnsweredBy()
    {
        if (array_key_exists("answeredBy", $this->_propDict)) {
            if (is_a($this->_propDict["answeredBy"], "\Beta\Microsoft\Graph\Model\ParticipantInfo") || is_null($this->_propDict["answeredBy"])) {
                return $this->_propDict["answeredBy"];
            } else {
                $this->_propDict["answeredBy"] = new ParticipantInfo($this->_propDict["answeredBy"]);
                return $this->_propDict["answeredBy"];
            }
        }
        return null;
    }

    /**
    * Sets the answeredBy
    * The participant that answered the call. Read-only.
    *
    * @param ParticipantInfo $val The answeredBy
    *
    * @return Call
    */
    public function setAnsweredBy($val)
    {
        $this->_propDict["answeredBy"] = $val;
        return $this;
    }

    /**
    * Gets the callbackUri
    * The callback URL on which callbacks will be delivered. Must be https.
    *
    * @return string|null The callbackUri
    */
    public function getCallbackUri()
    {
        if (array_key_exists("callbackUri", $this->_propDict)) {
            return $this->_propDict["callbackUri"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callbackUri
    * The callback URL on which callbacks will be delivered. Must be https.
    *
    * @param string $val The callbackUri
    *
    * @return Call
    */
    public function setCallbackUri($val)
    {
        $this->_propDict["callbackUri"] = $val;
        return $this;
    }

    /**
    * Gets the callChainId
    * A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
    *
    * @return string|null The callChainId
    */
    public function getCallChainId()
    {
        if (array_key_exists("callChainId", $this->_propDict)) {
            return $this->_propDict["callChainId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callChainId
    * A unique identifier for all the participant calls in a conference or a unique identifier for two participant calls in a P2P call.  This needs to be copied over from Microsoft.Graph.Call.CallChainId.
    *
    * @param string $val The callChainId
    *
    * @return Call
    */
    public function setCallChainId($val)
    {
        $this->_propDict["callChainId"] = $val;
        return $this;
    }

    /**
    * Gets the callOptions
    *
    * @return CallOptions|null The callOptions
    */
    public function getCallOptions()
    {
        if (array_key_exists("callOptions", $this->_propDict)) {
            if (is_a($this->_propDict["callOptions"], "\Beta\Microsoft\Graph\Model\CallOptions") || is_null($this->_propDict["callOptions"])) {
                return $this->_propDict["callOptions"];
            } else {
                $this->_propDict["callOptions"] = new CallOptions($this->_propDict["callOptions"]);
                return $this->_propDict["callOptions"];
            }
        }
        return null;
    }

    /**
    * Sets the callOptions
    *
    * @param CallOptions $val The callOptions
    *
    * @return Call
    */
    public function setCallOptions($val)
    {
        $this->_propDict["callOptions"] = $val;
        return $this;
    }


     /**
     * Gets the callRoutes
    * The routing information on how the call was retargeted. Read-only.
     *
     * @return array|null The callRoutes
     */
    public function getCallRoutes()
    {
        if (array_key_exists("callRoutes", $this->_propDict)) {
           return $this->_propDict["callRoutes"];
        } else {
            return null;
        }
    }

    /**
    * Sets the callRoutes
    * The routing information on how the call was retargeted. Read-only.
    *
    * @param CallRoute[] $val The callRoutes
    *
    * @return Call
    */
    public function setCallRoutes($val)
    {
        $this->_propDict["callRoutes"] = $val;
        return $this;
    }

    /**
    * Gets the chatInfo
    * The chat information. Required information for meeting scenarios.
    *
    * @return ChatInfo|null The chatInfo
    */
    public function getChatInfo()
    {
        if (array_key_exists("chatInfo", $this->_propDict)) {
            if (is_a($this->_propDict["chatInfo"], "\Beta\Microsoft\Graph\Model\ChatInfo") || is_null($this->_propDict["chatInfo"])) {
                return $this->_propDict["chatInfo"];
            } else {
                $this->_propDict["chatInfo"] = new ChatInfo($this->_propDict["chatInfo"]);
                return $this->_propDict["chatInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the chatInfo
    * The chat information. Required information for meeting scenarios.
    *
    * @param ChatInfo $val The chatInfo
    *
    * @return Call
    */
    public function setChatInfo($val)
    {
        $this->_propDict["chatInfo"] = $val;
        return $this;
    }

    /**
    * Gets the direction
    * The direction of the call. The possible value are incoming or outgoing. Read-only.
    *
    * @return CallDirection|null The direction
    */
    public function getDirection()
    {
        if (array_key_exists("direction", $this->_propDict)) {
            if (is_a($this->_propDict["direction"], "\Beta\Microsoft\Graph\Model\CallDirection") || is_null($this->_propDict["direction"])) {
                return $this->_propDict["direction"];
            } else {
                $this->_propDict["direction"] = new CallDirection($this->_propDict["direction"]);
                return $this->_propDict["direction"];
            }
        }
        return null;
    }

    /**
    * Sets the direction
    * The direction of the call. The possible value are incoming or outgoing. Read-only.
    *
    * @param CallDirection $val The direction
    *
    * @return Call
    */
    public function setDirection($val)
    {
        $this->_propDict["direction"] = $val;
        return $this;
    }

    /**
    * Gets the incomingContext
    * The context associated with an incoming call. Read-only. Server generated.
    *
    * @return IncomingContext|null The incomingContext
    */
    public function getIncomingContext()
    {
        if (array_key_exists("incomingContext", $this->_propDict)) {
            if (is_a($this->_propDict["incomingContext"], "\Beta\Microsoft\Graph\Model\IncomingContext") || is_null($this->_propDict["incomingContext"])) {
                return $this->_propDict["incomingContext"];
            } else {
                $this->_propDict["incomingContext"] = new IncomingContext($this->_propDict["incomingContext"]);
                return $this->_propDict["incomingContext"];
            }
        }
        return null;
    }

    /**
    * Sets the incomingContext
    * The context associated with an incoming call. Read-only. Server generated.
    *
    * @param IncomingContext $val The incomingContext
    *
    * @return Call
    */
    public function setIncomingContext($val)
    {
        $this->_propDict["incomingContext"] = $val;
        return $this;
    }

    /**
    * Gets the mediaConfig
    * The media configuration. Required information for creating peer to peer calls or joining meetings.
    *
    * @return MediaConfig|null The mediaConfig
    */
    public function getMediaConfig()
    {
        if (array_key_exists("mediaConfig", $this->_propDict)) {
            if (is_a($this->_propDict["mediaConfig"], "\Beta\Microsoft\Graph\Model\MediaConfig") || is_null($this->_propDict["mediaConfig"])) {
                return $this->_propDict["mediaConfig"];
            } else {
                $this->_propDict["mediaConfig"] = new MediaConfig($this->_propDict["mediaConfig"]);
                return $this->_propDict["mediaConfig"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaConfig
    * The media configuration. Required information for creating peer to peer calls or joining meetings.
    *
    * @param MediaConfig $val The mediaConfig
    *
    * @return Call
    */
    public function setMediaConfig($val)
    {
        $this->_propDict["mediaConfig"] = $val;
        return $this;
    }

    /**
    * Gets the mediaState
    * Read-only. The call media state.
    *
    * @return CallMediaState|null The mediaState
    */
    public function getMediaState()
    {
        if (array_key_exists("mediaState", $this->_propDict)) {
            if (is_a($this->_propDict["mediaState"], "\Beta\Microsoft\Graph\Model\CallMediaState") || is_null($this->_propDict["mediaState"])) {
                return $this->_propDict["mediaState"];
            } else {
                $this->_propDict["mediaState"] = new CallMediaState($this->_propDict["mediaState"]);
                return $this->_propDict["mediaState"];
            }
        }
        return null;
    }

    /**
    * Sets the mediaState
    * Read-only. The call media state.
    *
    * @param CallMediaState $val The mediaState
    *
    * @return Call
    */
    public function setMediaState($val)
    {
        $this->_propDict["mediaState"] = $val;
        return $this;
    }

    /**
    * Gets the meetingCapability
    * Contains the capabilities of a meeting. Read-only.
    *
    * @return MeetingCapability|null The meetingCapability
    */
    public function getMeetingCapability()
    {
        if (array_key_exists("meetingCapability", $this->_propDict)) {
            if (is_a($this->_propDict["meetingCapability"], "\Beta\Microsoft\Graph\Model\MeetingCapability") || is_null($this->_propDict["meetingCapability"])) {
                return $this->_propDict["meetingCapability"];
            } else {
                $this->_propDict["meetingCapability"] = new MeetingCapability($this->_propDict["meetingCapability"]);
                return $this->_propDict["meetingCapability"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingCapability
    * Contains the capabilities of a meeting. Read-only.
    *
    * @param MeetingCapability $val The meetingCapability
    *
    * @return Call
    */
    public function setMeetingCapability($val)
    {
        $this->_propDict["meetingCapability"] = $val;
        return $this;
    }

    /**
    * Gets the meetingInfo
    * The meeting information. Required information for meeting scenarios.
    *
    * @return MeetingInfo|null The meetingInfo
    */
    public function getMeetingInfo()
    {
        if (array_key_exists("meetingInfo", $this->_propDict)) {
            if (is_a($this->_propDict["meetingInfo"], "\Beta\Microsoft\Graph\Model\MeetingInfo") || is_null($this->_propDict["meetingInfo"])) {
                return $this->_propDict["meetingInfo"];
            } else {
                $this->_propDict["meetingInfo"] = new MeetingInfo($this->_propDict["meetingInfo"]);
                return $this->_propDict["meetingInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the meetingInfo
    * The meeting information. Required information for meeting scenarios.
    *
    * @param MeetingInfo $val The meetingInfo
    *
    * @return Call
    */
    public function setMeetingInfo($val)
    {
        $this->_propDict["meetingInfo"] = $val;
        return $this;
    }

    /**
    * Gets the myParticipantId
    *
    * @return string|null The myParticipantId
    */
    public function getMyParticipantId()
    {
        if (array_key_exists("myParticipantId", $this->_propDict)) {
            return $this->_propDict["myParticipantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the myParticipantId
    *
    * @param string $val The myParticipantId
    *
    * @return Call
    */
    public function setMyParticipantId($val)
    {
        $this->_propDict["myParticipantId"] = $val;
        return $this;
    }


     /**
     * Gets the requestedModalities
     *
     * @return array|null The requestedModalities
     */
    public function getRequestedModalities()
    {
        if (array_key_exists("requestedModalities", $this->_propDict)) {
           return $this->_propDict["requestedModalities"];
        } else {
            return null;
        }
    }

    /**
    * Sets the requestedModalities
    *
    * @param Modality[] $val The requestedModalities
    *
    * @return Call
    */
    public function setRequestedModalities($val)
    {
        $this->_propDict["requestedModalities"] = $val;
        return $this;
    }

    /**
    * Gets the resultInfo
    *
    * @return ResultInfo|null The resultInfo
    */
    public function getResultInfo()
    {
        if (array_key_exists("resultInfo", $this->_propDict)) {
            if (is_a($this->_propDict["resultInfo"], "\Beta\Microsoft\Graph\Model\ResultInfo") || is_null($this->_propDict["resultInfo"])) {
                return $this->_propDict["resultInfo"];
            } else {
                $this->_propDict["resultInfo"] = new ResultInfo($this->_propDict["resultInfo"]);
                return $this->_propDict["resultInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the resultInfo
    *
    * @param ResultInfo $val The resultInfo
    *
    * @return Call
    */
    public function setResultInfo($val)
    {
        $this->_propDict["resultInfo"] = $val;
        return $this;
    }

    /**
    * Gets the ringingTimeoutInSeconds
    *
    * @return int|null The ringingTimeoutInSeconds
    */
    public function getRingingTimeoutInSeconds()
    {
        if (array_key_exists("ringingTimeoutInSeconds", $this->_propDict)) {
            return $this->_propDict["ringingTimeoutInSeconds"];
        } else {
            return null;
        }
    }

    /**
    * Sets the ringingTimeoutInSeconds
    *
    * @param int $val The ringingTimeoutInSeconds
    *
    * @return Call
    */
    public function setRingingTimeoutInSeconds($val)
    {
        $this->_propDict["ringingTimeoutInSeconds"] = intval($val);
        return $this;
    }


     /**
     * Gets the routingPolicies
     *
     * @return array|null The routingPolicies
     */
    public function getRoutingPolicies()
    {
        if (array_key_exists("routingPolicies", $this->_propDict)) {
           return $this->_propDict["routingPolicies"];
        } else {
            return null;
        }
    }

    /**
    * Sets the routingPolicies
    *
    * @param RoutingPolicy[] $val The routingPolicies
    *
    * @return Call
    */
    public function setRoutingPolicies($val)
    {
        $this->_propDict["routingPolicies"] = $val;
        return $this;
    }

    /**
    * Gets the source
    *
    * @return ParticipantInfo|null The source
    */
    public function getSource()
    {
        if (array_key_exists("source", $this->_propDict)) {
            if (is_a($this->_propDict["source"], "\Beta\Microsoft\Graph\Model\ParticipantInfo") || is_null($this->_propDict["source"])) {
                return $this->_propDict["source"];
            } else {
                $this->_propDict["source"] = new ParticipantInfo($this->_propDict["source"]);
                return $this->_propDict["source"];
            }
        }
        return null;
    }

    /**
    * Sets the source
    *
    * @param ParticipantInfo $val The source
    *
    * @return Call
    */
    public function setSource($val)
    {
        $this->_propDict["source"] = $val;
        return $this;
    }

    /**
    * Gets the state
    *
    * @return CallState|null The state
    */
    public function getState()
    {
        if (array_key_exists("state", $this->_propDict)) {
            if (is_a($this->_propDict["state"], "\Beta\Microsoft\Graph\Model\CallState") || is_null($this->_propDict["state"])) {
                return $this->_propDict["state"];
            } else {
                $this->_propDict["state"] = new CallState($this->_propDict["state"]);
                return $this->_propDict["state"];
            }
        }
        return null;
    }

    /**
    * Sets the state
    *
    * @param CallState $val The state
    *
    * @return Call
    */
    public function setState($val)
    {
        $this->_propDict["state"] = $val;
        return $this;
    }

    /**
    * Gets the subject
    *
    * @return string|null The subject
    */
    public function getSubject()
    {
        if (array_key_exists("subject", $this->_propDict)) {
            return $this->_propDict["subject"];
        } else {
            return null;
        }
    }

    /**
    * Sets the subject
    *
    * @param string $val The subject
    *
    * @return Call
    */
    public function setSubject($val)
    {
        $this->_propDict["subject"] = $val;
        return $this;
    }


     /**
     * Gets the targets
     *
     * @return array|null The targets
     */
    public function getTargets()
    {
        if (array_key_exists("targets", $this->_propDict)) {
           return $this->_propDict["targets"];
        } else {
            return null;
        }
    }

    /**
    * Sets the targets
    *
    * @param InvitationParticipantInfo[] $val The targets
    *
    * @return Call
    */
    public function setTargets($val)
    {
        $this->_propDict["targets"] = $val;
        return $this;
    }

    /**
    * Gets the tenantId
    *
    * @return string|null The tenantId
    */
    public function getTenantId()
    {
        if (array_key_exists("tenantId", $this->_propDict)) {
            return $this->_propDict["tenantId"];
        } else {
            return null;
        }
    }

    /**
    * Sets the tenantId
    *
    * @param string $val The tenantId
    *
    * @return Call
    */
    public function setTenantId($val)
    {
        $this->_propDict["tenantId"] = $val;
        return $this;
    }

    /**
    * Gets the terminationReason
    *
    * @return string|null The terminationReason
    */
    public function getTerminationReason()
    {
        if (array_key_exists("terminationReason", $this->_propDict)) {
            return $this->_propDict["terminationReason"];
        } else {
            return null;
        }
    }

    /**
    * Sets the terminationReason
    *
    * @param string $val The terminationReason
    *
    * @return Call
    */
    public function setTerminationReason($val)
    {
        $this->_propDict["terminationReason"] = $val;
        return $this;
    }

    /**
    * Gets the toneInfo
    *
    * @return ToneInfo|null The toneInfo
    */
    public function getToneInfo()
    {
        if (array_key_exists("toneInfo", $this->_propDict)) {
            if (is_a($this->_propDict["toneInfo"], "\Beta\Microsoft\Graph\Model\ToneInfo") || is_null($this->_propDict["toneInfo"])) {
                return $this->_propDict["toneInfo"];
            } else {
                $this->_propDict["toneInfo"] = new ToneInfo($this->_propDict["toneInfo"]);
                return $this->_propDict["toneInfo"];
            }
        }
        return null;
    }

    /**
    * Sets the toneInfo
    *
    * @param ToneInfo $val The toneInfo
    *
    * @return Call
    */
    public function setToneInfo($val)
    {
        $this->_propDict["toneInfo"] = $val;
        return $this;
    }

    /**
    * Gets the transcription
    * The transcription information for the call. Read-only.
    *
    * @return CallTranscriptionInfo|null The transcription
    */
    public function getTranscription()
    {
        if (array_key_exists("transcription", $this->_propDict)) {
            if (is_a($this->_propDict["transcription"], "\Beta\Microsoft\Graph\Model\CallTranscriptionInfo") || is_null($this->_propDict["transcription"])) {
                return $this->_propDict["transcription"];
            } else {
                $this->_propDict["transcription"] = new CallTranscriptionInfo($this->_propDict["transcription"]);
                return $this->_propDict["transcription"];
            }
        }
        return null;
    }

    /**
    * Sets the transcription
    * The transcription information for the call. Read-only.
    *
    * @param CallTranscriptionInfo $val The transcription
    *
    * @return Call
    */
    public function setTranscription($val)
    {
        $this->_propDict["transcription"] = $val;
        return $this;
    }


     /**
     * Gets the audioRoutingGroups
    * Read-only. Nullable.
     *
     * @return array|null The audioRoutingGroups
     */
    public function getAudioRoutingGroups()
    {
        if (array_key_exists("audioRoutingGroups", $this->_propDict)) {
           return $this->_propDict["audioRoutingGroups"];
        } else {
            return null;
        }
    }

    /**
    * Sets the audioRoutingGroups
    * Read-only. Nullable.
    *
    * @param AudioRoutingGroup[] $val The audioRoutingGroups
    *
    * @return Call
    */
    public function setAudioRoutingGroups($val)
    {
        $this->_propDict["audioRoutingGroups"] = $val;
        return $this;
    }


     /**
     * Gets the operations
    * Read-only. Nullable.
     *
     * @return array|null The operations
     */
    public function getOperations()
    {
        if (array_key_exists("operations", $this->_propDict)) {
           return $this->_propDict["operations"];
        } else {
            return null;
        }
    }

    /**
    * Sets the operations
    * Read-only. Nullable.
    *
    * @param CommsOperation[] $val The operations
    *
    * @return Call
    */
    public function setOperations($val)
    {
        $this->_propDict["operations"] = $val;
        return $this;
    }


     /**
     * Gets the participants
    * Read-only. Nullable.
     *
     * @return array|null The participants
     */
    public function getParticipants()
    {
        if (array_key_exists("participants", $this->_propDict)) {
           return $this->_propDict["participants"];
        } else {
            return null;
        }
    }

    /**
    * Sets the participants
    * Read-only. Nullable.
    *
    * @param Participant[] $val The participants
    *
    * @return Call
    */
    public function setParticipants($val)
    {
        $this->_propDict["participants"] = $val;
        return $this;
    }

}
