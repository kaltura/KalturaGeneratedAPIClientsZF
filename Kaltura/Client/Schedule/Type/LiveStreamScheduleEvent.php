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
class Kaltura_Client_Schedule_Type_LiveStreamScheduleEvent extends Kaltura_Client_Schedule_Type_BaseLiveScheduleEvent
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStreamScheduleEvent';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->sourceEntryId))
			$this->sourceEntryId = (string)$xml->sourceEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->sourceEntryId))
			$this->sourceEntryId = (string)$jsonObject->sourceEntryId;
		if(!is_null($xml) && count($xml->projectedAudience))
			$this->projectedAudience = (int)$xml->projectedAudience;
		if(!is_null($jsonObject) && isset($jsonObject->projectedAudience))
			$this->projectedAudience = (int)$jsonObject->projectedAudience;
		if(!is_null($xml) && count($xml->preStartTime))
			$this->preStartTime = (int)$xml->preStartTime;
		if(!is_null($jsonObject) && isset($jsonObject->preStartTime))
			$this->preStartTime = (int)$jsonObject->preStartTime;
		if(!is_null($xml) && count($xml->postEndTime))
			$this->postEndTime = (int)$xml->postEndTime;
		if(!is_null($jsonObject) && isset($jsonObject->postEndTime))
			$this->postEndTime = (int)$jsonObject->postEndTime;
		if(!is_null($xml) && count($xml->preStartEntryId))
			$this->preStartEntryId = (string)$xml->preStartEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->preStartEntryId))
			$this->preStartEntryId = (string)$jsonObject->preStartEntryId;
		if(!is_null($xml) && count($xml->postEndEntryId))
			$this->postEndEntryId = (string)$xml->postEndEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->postEndEntryId))
			$this->postEndEntryId = (string)$jsonObject->postEndEntryId;
		if(!is_null($xml) && count($xml->isContentInterruptible))
		{
			if(!empty($xml->isContentInterruptible) && ((int) $xml->isContentInterruptible === 1 || strtolower((string)$xml->isContentInterruptible) === 'true'))
				$this->isContentInterruptible = true;
			else
				$this->isContentInterruptible = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isContentInterruptible))
		{
			if(!empty($jsonObject->isContentInterruptible) && ((int) $jsonObject->isContentInterruptible === 1 || strtolower((string)$jsonObject->isContentInterruptible) === 'true'))
				$this->isContentInterruptible = true;
			else
				$this->isContentInterruptible = false;
		}
		if(!is_null($xml) && count($xml->liveFeatures))
		{
			if(empty($xml->liveFeatures))
				$this->liveFeatures = array();
			else
				$this->liveFeatures = Kaltura_Client_ParseUtils::unmarshalArray($xml->liveFeatures, "KalturaLiveFeature");
		}
		if(!is_null($jsonObject) && isset($jsonObject->liveFeatures))
		{
			if(empty($jsonObject->liveFeatures))
				$this->liveFeatures = array();
			else
				$this->liveFeatures = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->liveFeatures, "KalturaLiveFeature");
		}
	}
	/**
	 * The entry ID of the source entry (for simulive)
	 *
	 * @var string
	 */
	public $sourceEntryId = null;

	/**
	 * Defines the expected audience.
	 *
	 * @var int
	 */
	public $projectedAudience = null;

	/**
	 * The time relative time before the startTime considered as preStart time
	 *
	 * @var int
	 */
	public $preStartTime = null;

	/**
	 * The time relative time before the endTime considered as postEnd time
	 *
	 * @var int
	 */
	public $postEndTime = null;

	/**
	 * The entry id of the pre start entry
	 *
	 * @var string
	 */
	public $preStartEntryId = null;

	/**
	 * The entry id of the post end entry
	 *
	 * @var string
	 */
	public $postEndEntryId = null;

	/**
	 * Detect whether "real" live can interrupt to the "main" content
	 *
	 * @var bool
	 */
	public $isContentInterruptible = null;

	/**
	 * list of live features that apply to the event
	 *
	 * @var Kaltura_Client_Schedule_Type_LiveFeature[]
	 */
	public $liveFeatures;


}

