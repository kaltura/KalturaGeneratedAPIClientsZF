<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platforms allow them to do with
// text.
//
// Copyright (C) 2006-2023  Kaltura Inc.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <http://www.gnu.org/licenses/>.
//
// @ignore
// ===================================================================================================

/**
 * @package Kaltura
 * @subpackage Client
 */
class Kaltura_Client_EventNotification_Type_EventNotificationTemplate extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEventNotificationTemplate';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->manualDispatchEnabled))
		{
			if(!empty($xml->manualDispatchEnabled) && ((int) $xml->manualDispatchEnabled === 1 || strtolower((string)$xml->manualDispatchEnabled) === 'true'))
				$this->manualDispatchEnabled = true;
			else
				$this->manualDispatchEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->manualDispatchEnabled))
		{
			if(!empty($jsonObject->manualDispatchEnabled) && ((int) $jsonObject->manualDispatchEnabled === 1 || strtolower((string)$jsonObject->manualDispatchEnabled) === 'true'))
				$this->manualDispatchEnabled = true;
			else
				$this->manualDispatchEnabled = false;
		}
		if(!is_null($xml) && count($xml->automaticDispatchEnabled))
		{
			if(!empty($xml->automaticDispatchEnabled) && ((int) $xml->automaticDispatchEnabled === 1 || strtolower((string)$xml->automaticDispatchEnabled) === 'true'))
				$this->automaticDispatchEnabled = true;
			else
				$this->automaticDispatchEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->automaticDispatchEnabled))
		{
			if(!empty($jsonObject->automaticDispatchEnabled) && ((int) $jsonObject->automaticDispatchEnabled === 1 || strtolower((string)$jsonObject->automaticDispatchEnabled) === 'true'))
				$this->automaticDispatchEnabled = true;
			else
				$this->automaticDispatchEnabled = false;
		}
		if(!is_null($xml) && count($xml->eventType))
			$this->eventType = (string)$xml->eventType;
		if(!is_null($jsonObject) && isset($jsonObject->eventType))
			$this->eventType = (string)$jsonObject->eventType;
		if(!is_null($xml) && count($xml->eventObjectType))
			$this->eventObjectType = (string)$xml->eventObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->eventObjectType))
			$this->eventObjectType = (string)$jsonObject->eventObjectType;
		if(!is_null($xml) && count($xml->eventConditions))
		{
			if(empty($xml->eventConditions))
				$this->eventConditions = array();
			else
				$this->eventConditions = Kaltura_Client_ParseUtils::unmarshalArray($xml->eventConditions, "KalturaCondition");
		}
		if(!is_null($jsonObject) && isset($jsonObject->eventConditions))
		{
			if(empty($jsonObject->eventConditions))
				$this->eventConditions = array();
			else
				$this->eventConditions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->eventConditions, "KalturaCondition");
		}
		if(!is_null($xml) && count($xml->contentParameters))
		{
			if(empty($xml->contentParameters))
				$this->contentParameters = array();
			else
				$this->contentParameters = Kaltura_Client_ParseUtils::unmarshalArray($xml->contentParameters, "KalturaEventNotificationParameter");
		}
		if(!is_null($jsonObject) && isset($jsonObject->contentParameters))
		{
			if(empty($jsonObject->contentParameters))
				$this->contentParameters = array();
			else
				$this->contentParameters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->contentParameters, "KalturaEventNotificationParameter");
		}
		if(!is_null($xml) && count($xml->userParameters))
		{
			if(empty($xml->userParameters))
				$this->userParameters = array();
			else
				$this->userParameters = Kaltura_Client_ParseUtils::unmarshalArray($xml->userParameters, "KalturaEventNotificationParameter");
		}
		if(!is_null($jsonObject) && isset($jsonObject->userParameters))
		{
			if(empty($jsonObject->userParameters))
				$this->userParameters = array();
			else
				$this->userParameters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->userParameters, "KalturaEventNotificationParameter");
		}
		if(!is_null($xml) && count($xml->eventDelayedCondition))
			$this->eventDelayedCondition = (int)$xml->eventDelayedCondition;
		if(!is_null($jsonObject) && isset($jsonObject->eventDelayedCondition))
			$this->eventDelayedCondition = (int)$jsonObject->eventDelayedCondition;
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_EventNotification_Enum_EventNotificationTemplateType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_EventNotification_Enum_EventNotificationTemplateStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Define that the template could be dispatched manually from the API
	 *
	 * @var bool
	 */
	public $manualDispatchEnabled = null;

	/**
	 * Define that the template could be dispatched automatically by the system
	 *
	 * @var bool
	 */
	public $automaticDispatchEnabled = null;

	/**
	 * Define the event that should trigger this notification
	 *
	 * @var Kaltura_Client_EventNotification_Enum_EventNotificationEventType
	 */
	public $eventType = null;

	/**
	 * Define the object that raised the event that should trigger this notification
	 *
	 * @var Kaltura_Client_EventNotification_Enum_EventNotificationEventObjectType
	 */
	public $eventObjectType = null;

	/**
	 * Define the conditions that cause this notification to be triggered
	 *
	 * @var Kaltura_Client_Type_Condition[]
	 */
	public $eventConditions;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var Kaltura_Client_EventNotification_Type_EventNotificationParameter[]
	 */
	public $contentParameters;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var Kaltura_Client_EventNotification_Type_EventNotificationParameter[]
	 */
	public $userParameters;

	/**
	 * Event batch job will be delayed until specific condition criteria is met
	 *
	 * @var Kaltura_Client_EventNotification_Enum_EventNotificationDelayedCondition
	 */
	public $eventDelayedCondition = null;


}

