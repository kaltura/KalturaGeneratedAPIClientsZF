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
class Kaltura_Client_SystemPartner_Type_SystemPartnerUsageItem extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSystemPartnerUsageItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->partnerName))
			$this->partnerName = (string)$xml->partnerName;
		if(!is_null($jsonObject) && isset($jsonObject->partnerName))
			$this->partnerName = (string)$jsonObject->partnerName;
		if(!is_null($xml) && count($xml->partnerStatus))
			$this->partnerStatus = (int)$xml->partnerStatus;
		if(!is_null($jsonObject) && isset($jsonObject->partnerStatus))
			$this->partnerStatus = (int)$jsonObject->partnerStatus;
		if(!is_null($xml) && count($xml->partnerPackage))
			$this->partnerPackage = (int)$xml->partnerPackage;
		if(!is_null($jsonObject) && isset($jsonObject->partnerPackage))
			$this->partnerPackage = (int)$jsonObject->partnerPackage;
		if(!is_null($xml) && count($xml->partnerCreatedAt))
			$this->partnerCreatedAt = (int)$xml->partnerCreatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->partnerCreatedAt))
			$this->partnerCreatedAt = (int)$jsonObject->partnerCreatedAt;
		if(!is_null($xml) && count($xml->views))
			$this->views = (int)$xml->views;
		if(!is_null($jsonObject) && isset($jsonObject->views))
			$this->views = (int)$jsonObject->views;
		if(!is_null($xml) && count($xml->plays))
			$this->plays = (int)$xml->plays;
		if(!is_null($jsonObject) && isset($jsonObject->plays))
			$this->plays = (int)$jsonObject->plays;
		if(!is_null($xml) && count($xml->entriesCount))
			$this->entriesCount = (int)$xml->entriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->entriesCount))
			$this->entriesCount = (int)$jsonObject->entriesCount;
		if(!is_null($xml) && count($xml->totalEntriesCount))
			$this->totalEntriesCount = (int)$xml->totalEntriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->totalEntriesCount))
			$this->totalEntriesCount = (int)$jsonObject->totalEntriesCount;
		if(!is_null($xml) && count($xml->videoEntriesCount))
			$this->videoEntriesCount = (int)$xml->videoEntriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->videoEntriesCount))
			$this->videoEntriesCount = (int)$jsonObject->videoEntriesCount;
		if(!is_null($xml) && count($xml->imageEntriesCount))
			$this->imageEntriesCount = (int)$xml->imageEntriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->imageEntriesCount))
			$this->imageEntriesCount = (int)$jsonObject->imageEntriesCount;
		if(!is_null($xml) && count($xml->audioEntriesCount))
			$this->audioEntriesCount = (int)$xml->audioEntriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->audioEntriesCount))
			$this->audioEntriesCount = (int)$jsonObject->audioEntriesCount;
		if(!is_null($xml) && count($xml->mixEntriesCount))
			$this->mixEntriesCount = (int)$xml->mixEntriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->mixEntriesCount))
			$this->mixEntriesCount = (int)$jsonObject->mixEntriesCount;
		if(!is_null($xml) && count($xml->bandwidth))
			$this->bandwidth = (float)$xml->bandwidth;
		if(!is_null($jsonObject) && isset($jsonObject->bandwidth))
			$this->bandwidth = (float)$jsonObject->bandwidth;
		if(!is_null($xml) && count($xml->totalStorage))
			$this->totalStorage = (float)$xml->totalStorage;
		if(!is_null($jsonObject) && isset($jsonObject->totalStorage))
			$this->totalStorage = (float)$jsonObject->totalStorage;
		if(!is_null($xml) && count($xml->storage))
			$this->storage = (float)$xml->storage;
		if(!is_null($jsonObject) && isset($jsonObject->storage))
			$this->storage = (float)$jsonObject->storage;
		if(!is_null($xml) && count($xml->peakStorage))
			$this->peakStorage = (float)$xml->peakStorage;
		if(!is_null($jsonObject) && isset($jsonObject->peakStorage))
			$this->peakStorage = (float)$jsonObject->peakStorage;
		if(!is_null($xml) && count($xml->avgStorage))
			$this->avgStorage = (float)$xml->avgStorage;
		if(!is_null($jsonObject) && isset($jsonObject->avgStorage))
			$this->avgStorage = (float)$jsonObject->avgStorage;
		if(!is_null($xml) && count($xml->combinedBandwidthStorage))
			$this->combinedBandwidthStorage = (float)$xml->combinedBandwidthStorage;
		if(!is_null($jsonObject) && isset($jsonObject->combinedBandwidthStorage))
			$this->combinedBandwidthStorage = (float)$jsonObject->combinedBandwidthStorage;
		if(!is_null($xml) && count($xml->deletedStorage))
			$this->deletedStorage = (float)$xml->deletedStorage;
		if(!is_null($jsonObject) && isset($jsonObject->deletedStorage))
			$this->deletedStorage = (float)$jsonObject->deletedStorage;
		if(!is_null($xml) && count($xml->transcodingUsage))
			$this->transcodingUsage = (float)$xml->transcodingUsage;
		if(!is_null($jsonObject) && isset($jsonObject->transcodingUsage))
			$this->transcodingUsage = (float)$jsonObject->transcodingUsage;
	}
	/**
	 * Partner ID
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * Partner name
	 *
	 * @var string
	 */
	public $partnerName = null;

	/**
	 * Partner status
	 *
	 * @var Kaltura_Client_Enum_PartnerStatus
	 */
	public $partnerStatus = null;

	/**
	 * Partner package
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * Partner creation date (Unix timestamp)
	 *
	 * @var int
	 */
	public $partnerCreatedAt = null;

	/**
	 * Number of player loads in the specific date range
	 *
	 * @var int
	 */
	public $views = null;

	/**
	 * Number of plays in the specific date range
	 *
	 * @var int
	 */
	public $plays = null;

	/**
	 * Number of new entries created during specific date range
	 *
	 * @var int
	 */
	public $entriesCount = null;

	/**
	 * Total number of entries
	 *
	 * @var int
	 */
	public $totalEntriesCount = null;

	/**
	 * Number of new video entries created during specific date range
	 *
	 * @var int
	 */
	public $videoEntriesCount = null;

	/**
	 * Number of new image entries created during specific date range
	 *
	 * @var int
	 */
	public $imageEntriesCount = null;

	/**
	 * Number of new audio entries created during specific date range
	 *
	 * @var int
	 */
	public $audioEntriesCount = null;

	/**
	 * Number of new mix entries created during specific date range
	 *
	 * @var int
	 */
	public $mixEntriesCount = null;

	/**
	 * The total bandwidth usage during the given date range (in MB)
	 *
	 * @var float
	 */
	public $bandwidth = null;

	/**
	 * The total storage consumption (in MB)
	 *
	 * @var float
	 */
	public $totalStorage = null;

	/**
	 * The change in storage consumption (new uploads) during the given date range (in MB)
	 *
	 * @var float
	 */
	public $storage = null;

	/**
	 * The peak amount of storage consumption during the given date range for the specific publisher
	 *
	 * @var float
	 */
	public $peakStorage = null;

	/**
	 * The average amount of storage consumption during the given date range for the specific publisher
	 *
	 * @var float
	 */
	public $avgStorage = null;

	/**
	 * The combined amount of bandwidth and storage consumed during the given date range for the specific publisher
	 *
	 * @var float
	 */
	public $combinedBandwidthStorage = null;

	/**
	 * Amount of deleted storage in MB
	 *
	 * @var float
	 */
	public $deletedStorage = null;

	/**
	 * Amount of transcoding usage in MB
	 *
	 * @var float
	 */
	public $transcodingUsage = null;


}

