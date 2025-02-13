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
class Kaltura_Client_Type_LiveChannelSegment extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveChannelSegment';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->channelId))
			$this->channelId = (string)$xml->channelId;
		if(!is_null($jsonObject) && isset($jsonObject->channelId))
			$this->channelId = (string)$jsonObject->channelId;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->triggerType))
			$this->triggerType = (string)$xml->triggerType;
		if(!is_null($jsonObject) && isset($jsonObject->triggerType))
			$this->triggerType = (string)$jsonObject->triggerType;
		if(!is_null($xml) && count($xml->triggerSegmentId))
			$this->triggerSegmentId = (string)$xml->triggerSegmentId;
		if(!is_null($jsonObject) && isset($jsonObject->triggerSegmentId))
			$this->triggerSegmentId = (string)$jsonObject->triggerSegmentId;
		if(!is_null($xml) && count($xml->startTime))
			$this->startTime = (float)$xml->startTime;
		if(!is_null($jsonObject) && isset($jsonObject->startTime))
			$this->startTime = (float)$jsonObject->startTime;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (float)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (float)$jsonObject->duration;
	}
	/**
	 * Unique identifier
	 *
	 * @var bigint
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
	 * Segment creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Segment update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Segment name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Segment description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Segment tags
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Segment could be associated with the main stream, as additional stream or as overlay
	 *
	 * @var Kaltura_Client_Enum_LiveChannelSegmentType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_LiveChannelSegmentStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Live channel id
	 *
	 * @var string
	 */
	public $channelId = null;

	/**
	 * Entry id to be played
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * Segment start time trigger type
	 *
	 * @var Kaltura_Client_Enum_LiveChannelSegmentTriggerType
	 */
	public $triggerType = null;

	/**
	 * Live channel segment that the trigger relates to
	 *
	 * @var bigint
	 */
	public $triggerSegmentId = null;

	/**
	 * Segment play start time, in mili-seconds, according to trigger type
	 *
	 * @var float
	 */
	public $startTime = null;

	/**
	 * Segment play duration time, in mili-seconds
	 *
	 * @var float
	 */
	public $duration = null;


}

