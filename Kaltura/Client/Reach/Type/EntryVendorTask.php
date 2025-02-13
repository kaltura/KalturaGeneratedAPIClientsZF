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
class Kaltura_Client_Reach_Type_EntryVendorTask extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryVendorTask';
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
		if(!is_null($xml) && count($xml->vendorPartnerId))
			$this->vendorPartnerId = (int)$xml->vendorPartnerId;
		if(!is_null($jsonObject) && isset($jsonObject->vendorPartnerId))
			$this->vendorPartnerId = (int)$jsonObject->vendorPartnerId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->queueTime))
			$this->queueTime = (int)$xml->queueTime;
		if(!is_null($jsonObject) && isset($jsonObject->queueTime))
			$this->queueTime = (int)$jsonObject->queueTime;
		if(!is_null($xml) && count($xml->finishTime))
			$this->finishTime = (int)$xml->finishTime;
		if(!is_null($jsonObject) && isset($jsonObject->finishTime))
			$this->finishTime = (int)$jsonObject->finishTime;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->reachProfileId))
			$this->reachProfileId = (int)$xml->reachProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->reachProfileId))
			$this->reachProfileId = (int)$jsonObject->reachProfileId;
		if(!is_null($xml) && count($xml->catalogItemId))
			$this->catalogItemId = (int)$xml->catalogItemId;
		if(!is_null($jsonObject) && isset($jsonObject->catalogItemId))
			$this->catalogItemId = (int)$jsonObject->catalogItemId;
		if(!is_null($xml) && count($xml->price))
			$this->price = (float)$xml->price;
		if(!is_null($jsonObject) && isset($jsonObject->price))
			$this->price = (float)$jsonObject->price;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->moderatingUser))
			$this->moderatingUser = (string)$xml->moderatingUser;
		if(!is_null($jsonObject) && isset($jsonObject->moderatingUser))
			$this->moderatingUser = (string)$jsonObject->moderatingUser;
		if(!is_null($xml) && count($xml->errDescription))
			$this->errDescription = (string)$xml->errDescription;
		if(!is_null($jsonObject) && isset($jsonObject->errDescription))
			$this->errDescription = (string)$jsonObject->errDescription;
		if(!is_null($xml) && count($xml->accessKey))
			$this->accessKey = (string)$xml->accessKey;
		if(!is_null($jsonObject) && isset($jsonObject->accessKey))
			$this->accessKey = (string)$jsonObject->accessKey;
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->notes))
			$this->notes = (string)$xml->notes;
		if(!is_null($jsonObject) && isset($jsonObject->notes))
			$this->notes = (string)$jsonObject->notes;
		if(!is_null($xml) && count($xml->dictionary))
			$this->dictionary = (string)$xml->dictionary;
		if(!is_null($jsonObject) && isset($jsonObject->dictionary))
			$this->dictionary = (string)$jsonObject->dictionary;
		if(!is_null($xml) && count($xml->context))
			$this->context = (string)$xml->context;
		if(!is_null($jsonObject) && isset($jsonObject->context))
			$this->context = (string)$jsonObject->context;
		if(!is_null($xml) && count($xml->accuracy))
			$this->accuracy = (int)$xml->accuracy;
		if(!is_null($jsonObject) && isset($jsonObject->accuracy))
			$this->accuracy = (int)$jsonObject->accuracy;
		if(!is_null($xml) && count($xml->outputObjectId))
			$this->outputObjectId = (string)$xml->outputObjectId;
		if(!is_null($jsonObject) && isset($jsonObject->outputObjectId))
			$this->outputObjectId = (string)$jsonObject->outputObjectId;
		if(!is_null($xml) && count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(!is_null($jsonObject) && isset($jsonObject->partnerData))
			$this->partnerData = (string)$jsonObject->partnerData;
		if(!is_null($xml) && count($xml->creationMode))
			$this->creationMode = (int)$xml->creationMode;
		if(!is_null($jsonObject) && isset($jsonObject->creationMode))
			$this->creationMode = (int)$jsonObject->creationMode;
		if(!is_null($xml) && count($xml->taskJobData) && !empty($xml->taskJobData))
			$this->taskJobData = Kaltura_Client_ParseUtils::unmarshalObject($xml->taskJobData, "KalturaVendorTaskData");
		if(!is_null($jsonObject) && isset($jsonObject->taskJobData) && !empty($jsonObject->taskJobData))
			$this->taskJobData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->taskJobData, "KalturaVendorTaskData");
		if(!is_null($xml) && count($xml->expectedFinishTime))
			$this->expectedFinishTime = (int)$xml->expectedFinishTime;
		if(!is_null($jsonObject) && isset($jsonObject->expectedFinishTime))
			$this->expectedFinishTime = (int)$jsonObject->expectedFinishTime;
		if(!is_null($xml) && count($xml->serviceType))
			$this->serviceType = (int)$xml->serviceType;
		if(!is_null($jsonObject) && isset($jsonObject->serviceType))
			$this->serviceType = (int)$jsonObject->serviceType;
		if(!is_null($xml) && count($xml->serviceFeature))
			$this->serviceFeature = (int)$xml->serviceFeature;
		if(!is_null($jsonObject) && isset($jsonObject->serviceFeature))
			$this->serviceFeature = (int)$jsonObject->serviceFeature;
		if(!is_null($xml) && count($xml->turnAroundTime))
			$this->turnAroundTime = (int)$xml->turnAroundTime;
		if(!is_null($jsonObject) && isset($jsonObject->turnAroundTime))
			$this->turnAroundTime = (int)$jsonObject->turnAroundTime;
		if(!is_null($xml) && count($xml->externalTaskId))
			$this->externalTaskId = (string)$xml->externalTaskId;
		if(!is_null($jsonObject) && isset($jsonObject->externalTaskId))
			$this->externalTaskId = (string)$jsonObject->externalTaskId;
	}
	/**
	 * 
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
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $vendorPartnerId = null;

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
	 * @readonly
	 */
	public $queueTime = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $finishTime = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_EntryVendorTaskStatus
	 */
	public $status = null;

	/**
	 * The profile id from which this task base config is taken from
	 *
	 * @var int
	 * @insertonly
	 */
	public $reachProfileId = null;

	/**
	 * The catalog item Id containing the task description
	 *
	 * @var int
	 * @insertonly
	 */
	public $catalogItemId = null;

	/**
	 * The charged price to execute this task
	 *
	 * @var float
	 * @readonly
	 */
	public $price = null;

	/**
	 * The ID of the user who created this task
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The user ID that approved this task for execution (in case moderation is requested)
	 *
	 * @var string
	 * @readonly
	 */
	public $moderatingUser = null;

	/**
	 * Err description provided by provider in case job execution has failed
	 *
	 * @var string
	 */
	public $errDescription = null;

	/**
	 * Access key generated by Kaltura to allow vendors to ingest the end result to the destination
	 *
	 * @var string
	 * @readonly
	 */
	public $accessKey = null;

	/**
	 * Vendor generated by Kaltura representing the entry vendor task version correlated to the entry version
	 *
	 * @var string
	 * @readonly
	 */
	public $version = null;

	/**
	 * User generated notes that should be taken into account by the vendor while executing the task
	 *
	 * @var string
	 */
	public $notes = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $dictionary = null;

	/**
	 * Task context
	 *
	 * @var string
	 */
	public $context = null;

	/**
	 * Task result accuracy percentage
	 *
	 * @var int
	 */
	public $accuracy = null;

	/**
	 * Task main object generated by executing the task
	 *
	 * @var string
	 */
	public $outputObjectId = null;

	/**
	 * Json object containing extra task data required by the requester
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Task creation mode
	 *
	 * @var Kaltura_Client_Reach_Enum_EntryVendorTaskCreationMode
	 * @readonly
	 */
	public $creationMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Type_VendorTaskData
	 */
	public $taskJobData;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $expectedFinishTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceType
	 * @readonly
	 */
	public $serviceType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceFeature
	 * @readonly
	 */
	public $serviceFeature = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceTurnAroundTime
	 * @readonly
	 */
	public $turnAroundTime = null;

	/**
	 * The vendor's task internal Id
	 *
	 * @var string
	 */
	public $externalTaskId = null;


}

