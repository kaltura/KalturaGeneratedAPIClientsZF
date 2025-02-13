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
abstract class Kaltura_Client_Schedule_Type_ScheduleEvent extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEvent';
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
		if(!is_null($xml) && count($xml->parentId))
			$this->parentId = (int)$xml->parentId;
		if(!is_null($jsonObject) && isset($jsonObject->parentId))
			$this->parentId = (int)$jsonObject->parentId;
		if(!is_null($xml) && count($xml->summary))
			$this->summary = (string)$xml->summary;
		if(!is_null($jsonObject) && isset($jsonObject->summary))
			$this->summary = (string)$jsonObject->summary;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (int)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (int)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (int)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (int)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
		if(!is_null($xml) && count($xml->linkedTo) && !empty($xml->linkedTo))
			$this->linkedTo = Kaltura_Client_ParseUtils::unmarshalObject($xml->linkedTo, "KalturaLinkedScheduleEvent");
		if(!is_null($jsonObject) && isset($jsonObject->linkedTo) && !empty($jsonObject->linkedTo))
			$this->linkedTo = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->linkedTo, "KalturaLinkedScheduleEvent");
		if(!is_null($xml) && count($xml->linkedBy))
			$this->linkedBy = (string)$xml->linkedBy;
		if(!is_null($jsonObject) && isset($jsonObject->linkedBy))
			$this->linkedBy = (string)$jsonObject->linkedBy;
		if(!is_null($xml) && count($xml->classificationType))
			$this->classificationType = (int)$xml->classificationType;
		if(!is_null($jsonObject) && isset($jsonObject->classificationType))
			$this->classificationType = (int)$jsonObject->classificationType;
		if(!is_null($xml) && count($xml->geoLatitude))
			$this->geoLatitude = (float)$xml->geoLatitude;
		if(!is_null($jsonObject) && isset($jsonObject->geoLatitude))
			$this->geoLatitude = (float)$jsonObject->geoLatitude;
		if(!is_null($xml) && count($xml->geoLongitude))
			$this->geoLongitude = (float)$xml->geoLongitude;
		if(!is_null($jsonObject) && isset($jsonObject->geoLongitude))
			$this->geoLongitude = (float)$jsonObject->geoLongitude;
		if(!is_null($xml) && count($xml->location))
			$this->location = (string)$xml->location;
		if(!is_null($jsonObject) && isset($jsonObject->location))
			$this->location = (string)$jsonObject->location;
		if(!is_null($xml) && count($xml->organizer))
			$this->organizer = (string)$xml->organizer;
		if(!is_null($jsonObject) && isset($jsonObject->organizer))
			$this->organizer = (string)$jsonObject->organizer;
		if(!is_null($xml) && count($xml->ownerId))
			$this->ownerId = (string)$xml->ownerId;
		if(!is_null($jsonObject) && isset($jsonObject->ownerId))
			$this->ownerId = (string)$jsonObject->ownerId;
		if(!is_null($xml) && count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(!is_null($jsonObject) && isset($jsonObject->priority))
			$this->priority = (int)$jsonObject->priority;
		if(!is_null($xml) && count($xml->sequence))
			$this->sequence = (int)$xml->sequence;
		if(!is_null($jsonObject) && isset($jsonObject->sequence))
			$this->sequence = (int)$jsonObject->sequence;
		if(!is_null($xml) && count($xml->recurrenceType))
			$this->recurrenceType = (int)$xml->recurrenceType;
		if(!is_null($jsonObject) && isset($jsonObject->recurrenceType))
			$this->recurrenceType = (int)$jsonObject->recurrenceType;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (int)$jsonObject->duration;
		if(!is_null($xml) && count($xml->contact))
			$this->contact = (string)$xml->contact;
		if(!is_null($jsonObject) && isset($jsonObject->contact))
			$this->contact = (string)$jsonObject->contact;
		if(!is_null($xml) && count($xml->comment))
			$this->comment = (string)$xml->comment;
		if(!is_null($jsonObject) && isset($jsonObject->comment))
			$this->comment = (string)$jsonObject->comment;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->recurrence) && !empty($xml->recurrence))
			$this->recurrence = Kaltura_Client_ParseUtils::unmarshalObject($xml->recurrence, "KalturaScheduleEventRecurrence");
		if(!is_null($jsonObject) && isset($jsonObject->recurrence) && !empty($jsonObject->recurrence))
			$this->recurrence = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->recurrence, "KalturaScheduleEventRecurrence");
	}
	/**
	 * Auto-generated unique identifier
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
	 * @var int
	 * @readonly
	 */
	public $parentId = null;

	/**
	 * Defines a short summary or subject for the event
	 *
	 * @var string
	 */
	public $summary = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Enum_ScheduleEventStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * Contains the Id of the event that influences the timing of this event and the offset of time.
	 *
	 * @var Kaltura_Client_Schedule_Type_LinkedScheduleEvent
	 */
	public $linkedTo;

	/**
	 * An array of Schedule Event Ids that their start time depends on the end of the current.
	 *
	 * @var string
	 */
	public $linkedBy = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Enum_ScheduleEventClassificationType
	 */
	public $classificationType = null;

	/**
	 * Specifies the global position for the activity
	 *
	 * @var float
	 */
	public $geoLatitude = null;

	/**
	 * Specifies the global position for the activity
	 *
	 * @var float
	 */
	public $geoLongitude = null;

	/**
	 * Defines the intended venue for the activity
	 *
	 * @var string
	 */
	public $location = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $organizer = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerId = null;

	/**
	 * The value for the priority field.
	 *
	 * @var int
	 */
	public $priority = null;

	/**
	 * Defines the revision sequence number.
	 *
	 * @var int
	 */
	public $sequence = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Enum_ScheduleEventRecurrenceType
	 */
	public $recurrenceType = null;

	/**
	 * Duration in seconds
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * Used to represent contact information or alternately a reference to contact information.
	 *
	 * @var string
	 */
	public $contact = null;

	/**
	 * Specifies non-processing information intended to provide a comment to the calendar user.
	 *
	 * @var string
	 */
	public $comment = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Type_ScheduleEventRecurrence
	 */
	public $recurrence;


}

