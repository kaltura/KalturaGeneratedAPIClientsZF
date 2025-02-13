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
class Kaltura_Client_VirtualEvent_Type_VirtualEvent extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaVirtualEvent';
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
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->attendeesGroupIds))
			$this->attendeesGroupIds = (string)$xml->attendeesGroupIds;
		if(!is_null($jsonObject) && isset($jsonObject->attendeesGroupIds))
			$this->attendeesGroupIds = (string)$jsonObject->attendeesGroupIds;
		if(!is_null($xml) && count($xml->adminsGroupIds))
			$this->adminsGroupIds = (string)$xml->adminsGroupIds;
		if(!is_null($jsonObject) && isset($jsonObject->adminsGroupIds))
			$this->adminsGroupIds = (string)$jsonObject->adminsGroupIds;
		if(!is_null($xml) && count($xml->registrationScheduleEventId))
			$this->registrationScheduleEventId = (int)$xml->registrationScheduleEventId;
		if(!is_null($jsonObject) && isset($jsonObject->registrationScheduleEventId))
			$this->registrationScheduleEventId = (int)$jsonObject->registrationScheduleEventId;
		if(!is_null($xml) && count($xml->agendaScheduleEventId))
			$this->agendaScheduleEventId = (int)$xml->agendaScheduleEventId;
		if(!is_null($jsonObject) && isset($jsonObject->agendaScheduleEventId))
			$this->agendaScheduleEventId = (int)$jsonObject->agendaScheduleEventId;
		if(!is_null($xml) && count($xml->mainEventScheduleEventId))
			$this->mainEventScheduleEventId = (int)$xml->mainEventScheduleEventId;
		if(!is_null($jsonObject) && isset($jsonObject->mainEventScheduleEventId))
			$this->mainEventScheduleEventId = (int)$jsonObject->mainEventScheduleEventId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->deletionDueDate))
			$this->deletionDueDate = (int)$xml->deletionDueDate;
		if(!is_null($jsonObject) && isset($jsonObject->deletionDueDate))
			$this->deletionDueDate = (int)$jsonObject->deletionDueDate;
		if(!is_null($xml) && count($xml->registrationFormSchema))
			$this->registrationFormSchema = (string)$xml->registrationFormSchema;
		if(!is_null($jsonObject) && isset($jsonObject->registrationFormSchema))
			$this->registrationFormSchema = (string)$jsonObject->registrationFormSchema;
		if(!is_null($xml) && count($xml->eventUrl))
			$this->eventUrl = (string)$xml->eventUrl;
		if(!is_null($jsonObject) && isset($jsonObject->eventUrl))
			$this->eventUrl = (string)$jsonObject->eventUrl;
		if(!is_null($xml) && count($xml->webhookRegistrationToken))
			$this->webhookRegistrationToken = (string)$xml->webhookRegistrationToken;
		if(!is_null($jsonObject) && isset($jsonObject->webhookRegistrationToken))
			$this->webhookRegistrationToken = (string)$jsonObject->webhookRegistrationToken;
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
	public $description = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_VirtualEvent_Enum_VirtualEventStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $attendeesGroupIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminsGroupIds = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $registrationScheduleEventId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $agendaScheduleEventId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mainEventScheduleEventId = null;

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
	 * 
	 *
	 * @var int
	 */
	public $deletionDueDate = null;

	/**
	 * JSON-Schema of the Registration Form
	 *
	 * @var string
	 */
	public $registrationFormSchema = null;

	/**
	 * The Virtual Event Url
	 *
	 * @var string
	 */
	public $eventUrl = null;

	/**
	 * The Virtual Event WebHook registration token
	 *
	 * @var string
	 */
	public $webhookRegistrationToken = null;


}

