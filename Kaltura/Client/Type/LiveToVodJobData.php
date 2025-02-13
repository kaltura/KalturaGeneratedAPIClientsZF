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
class Kaltura_Client_Type_LiveToVodJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveToVodJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->vodEntryId))
			$this->vodEntryId = (string)$xml->vodEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->vodEntryId))
			$this->vodEntryId = (string)$jsonObject->vodEntryId;
		if(!is_null($xml) && count($xml->liveEntryId))
			$this->liveEntryId = (string)$xml->liveEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->liveEntryId))
			$this->liveEntryId = (string)$jsonObject->liveEntryId;
		if(!is_null($xml) && count($xml->totalVodDuration))
			$this->totalVodDuration = (float)$xml->totalVodDuration;
		if(!is_null($jsonObject) && isset($jsonObject->totalVodDuration))
			$this->totalVodDuration = (float)$jsonObject->totalVodDuration;
		if(!is_null($xml) && count($xml->lastSegmentDuration))
			$this->lastSegmentDuration = (float)$xml->lastSegmentDuration;
		if(!is_null($jsonObject) && isset($jsonObject->lastSegmentDuration))
			$this->lastSegmentDuration = (float)$jsonObject->lastSegmentDuration;
		if(!is_null($xml) && count($xml->amfArray))
			$this->amfArray = (string)$xml->amfArray;
		if(!is_null($jsonObject) && isset($jsonObject->amfArray))
			$this->amfArray = (string)$jsonObject->amfArray;
		if(!is_null($xml) && count($xml->lastCuePointSyncTime))
			$this->lastCuePointSyncTime = (int)$xml->lastCuePointSyncTime;
		if(!is_null($jsonObject) && isset($jsonObject->lastCuePointSyncTime))
			$this->lastCuePointSyncTime = (int)$jsonObject->lastCuePointSyncTime;
		if(!is_null($xml) && count($xml->lastSegmentDrift))
			$this->lastSegmentDrift = (int)$xml->lastSegmentDrift;
		if(!is_null($jsonObject) && isset($jsonObject->lastSegmentDrift))
			$this->lastSegmentDrift = (int)$jsonObject->lastSegmentDrift;
	}
	/**
	 * $vod Entry Id
	 *
	 * @var string
	 */
	public $vodEntryId = null;

	/**
	 * live Entry Id
	 *
	 * @var string
	 */
	public $liveEntryId = null;

	/**
	 * total VOD Duration
	 *
	 * @var float
	 */
	public $totalVodDuration = null;

	/**
	 * last Segment Duration
	 *
	 * @var float
	 */
	public $lastSegmentDuration = null;

	/**
	 * amf Array File Path
	 *
	 * @var string
	 */
	public $amfArray = null;

	/**
	 * last live to vod sync time
	 *
	 * @var int
	 */
	public $lastCuePointSyncTime = null;

	/**
	 * last segment drift
	 *
	 * @var int
	 */
	public $lastSegmentDrift = null;


}

