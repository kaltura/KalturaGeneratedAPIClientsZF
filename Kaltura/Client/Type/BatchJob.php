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
class Kaltura_Client_Type_BatchJob extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBatchJob';
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
		if(!is_null($xml) && count($xml->deletedAt))
			$this->deletedAt = (int)$xml->deletedAt;
		if(!is_null($jsonObject) && isset($jsonObject->deletedAt))
			$this->deletedAt = (int)$jsonObject->deletedAt;
		if(!is_null($xml) && count($xml->lockExpiration))
			$this->lockExpiration = (int)$xml->lockExpiration;
		if(!is_null($jsonObject) && isset($jsonObject->lockExpiration))
			$this->lockExpiration = (int)$jsonObject->lockExpiration;
		if(!is_null($xml) && count($xml->executionAttempts))
			$this->executionAttempts = (int)$xml->executionAttempts;
		if(!is_null($jsonObject) && isset($jsonObject->executionAttempts))
			$this->executionAttempts = (int)$jsonObject->executionAttempts;
		if(!is_null($xml) && count($xml->lockVersion))
			$this->lockVersion = (int)$xml->lockVersion;
		if(!is_null($jsonObject) && isset($jsonObject->lockVersion))
			$this->lockVersion = (int)$jsonObject->lockVersion;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->entryName))
			$this->entryName = (string)$xml->entryName;
		if(!is_null($jsonObject) && isset($jsonObject->entryName))
			$this->entryName = (string)$jsonObject->entryName;
		if(!is_null($xml) && count($xml->jobType))
			$this->jobType = (string)$xml->jobType;
		if(!is_null($jsonObject) && isset($jsonObject->jobType))
			$this->jobType = (string)$jsonObject->jobType;
		if(!is_null($xml) && count($xml->jobSubType))
			$this->jobSubType = (int)$xml->jobSubType;
		if(!is_null($jsonObject) && isset($jsonObject->jobSubType))
			$this->jobSubType = (int)$jsonObject->jobSubType;
		if(!is_null($xml) && count($xml->data) && !empty($xml->data))
			$this->data = Kaltura_Client_ParseUtils::unmarshalObject($xml->data, "KalturaJobData");
		if(!is_null($jsonObject) && isset($jsonObject->data) && !empty($jsonObject->data))
			$this->data = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->data, "KalturaJobData");
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->abort))
			$this->abort = (int)$xml->abort;
		if(!is_null($jsonObject) && isset($jsonObject->abort))
			$this->abort = (int)$jsonObject->abort;
		if(!is_null($xml) && count($xml->checkAgainTimeout))
			$this->checkAgainTimeout = (int)$xml->checkAgainTimeout;
		if(!is_null($jsonObject) && isset($jsonObject->checkAgainTimeout))
			$this->checkAgainTimeout = (int)$jsonObject->checkAgainTimeout;
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(!is_null($jsonObject) && isset($jsonObject->priority))
			$this->priority = (int)$jsonObject->priority;
		if(!is_null($xml) && count($xml->history))
		{
			if(empty($xml->history))
				$this->history = array();
			else
				$this->history = Kaltura_Client_ParseUtils::unmarshalArray($xml->history, "KalturaBatchHistoryData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->history))
		{
			if(empty($jsonObject->history))
				$this->history = array();
			else
				$this->history = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->history, "KalturaBatchHistoryData");
		}
		if(!is_null($xml) && count($xml->bulkJobId))
			$this->bulkJobId = (int)$xml->bulkJobId;
		if(!is_null($jsonObject) && isset($jsonObject->bulkJobId))
			$this->bulkJobId = (int)$jsonObject->bulkJobId;
		if(!is_null($xml) && count($xml->batchVersion))
			$this->batchVersion = (int)$xml->batchVersion;
		if(!is_null($jsonObject) && isset($jsonObject->batchVersion))
			$this->batchVersion = (int)$jsonObject->batchVersion;
		if(!is_null($xml) && count($xml->parentJobId))
			$this->parentJobId = (int)$xml->parentJobId;
		if(!is_null($jsonObject) && isset($jsonObject->parentJobId))
			$this->parentJobId = (int)$jsonObject->parentJobId;
		if(!is_null($xml) && count($xml->rootJobId))
			$this->rootJobId = (int)$xml->rootJobId;
		if(!is_null($jsonObject) && isset($jsonObject->rootJobId))
			$this->rootJobId = (int)$jsonObject->rootJobId;
		if(!is_null($xml) && count($xml->queueTime))
			$this->queueTime = (int)$xml->queueTime;
		if(!is_null($jsonObject) && isset($jsonObject->queueTime))
			$this->queueTime = (int)$jsonObject->queueTime;
		if(!is_null($xml) && count($xml->finishTime))
			$this->finishTime = (int)$xml->finishTime;
		if(!is_null($jsonObject) && isset($jsonObject->finishTime))
			$this->finishTime = (int)$jsonObject->finishTime;
		if(!is_null($xml) && count($xml->errType))
			$this->errType = (int)$xml->errType;
		if(!is_null($jsonObject) && isset($jsonObject->errType))
			$this->errType = (int)$jsonObject->errType;
		if(!is_null($xml) && count($xml->errNumber))
			$this->errNumber = (int)$xml->errNumber;
		if(!is_null($jsonObject) && isset($jsonObject->errNumber))
			$this->errNumber = (int)$jsonObject->errNumber;
		if(!is_null($xml) && count($xml->estimatedEffort))
			$this->estimatedEffort = (int)$xml->estimatedEffort;
		if(!is_null($jsonObject) && isset($jsonObject->estimatedEffort))
			$this->estimatedEffort = (int)$jsonObject->estimatedEffort;
		if(!is_null($xml) && count($xml->urgency))
			$this->urgency = (int)$xml->urgency;
		if(!is_null($jsonObject) && isset($jsonObject->urgency))
			$this->urgency = (int)$jsonObject->urgency;
		if(!is_null($xml) && count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerId))
			$this->schedulerId = (int)$jsonObject->schedulerId;
		if(!is_null($xml) && count($xml->workerId))
			$this->workerId = (int)$xml->workerId;
		if(!is_null($jsonObject) && isset($jsonObject->workerId))
			$this->workerId = (int)$jsonObject->workerId;
		if(!is_null($xml) && count($xml->batchIndex))
			$this->batchIndex = (int)$xml->batchIndex;
		if(!is_null($jsonObject) && isset($jsonObject->batchIndex))
			$this->batchIndex = (int)$jsonObject->batchIndex;
		if(!is_null($xml) && count($xml->lastSchedulerId))
			$this->lastSchedulerId = (int)$xml->lastSchedulerId;
		if(!is_null($jsonObject) && isset($jsonObject->lastSchedulerId))
			$this->lastSchedulerId = (int)$jsonObject->lastSchedulerId;
		if(!is_null($xml) && count($xml->lastWorkerId))
			$this->lastWorkerId = (int)$xml->lastWorkerId;
		if(!is_null($jsonObject) && isset($jsonObject->lastWorkerId))
			$this->lastWorkerId = (int)$jsonObject->lastWorkerId;
		if(!is_null($xml) && count($xml->dc))
			$this->dc = (int)$xml->dc;
		if(!is_null($jsonObject) && isset($jsonObject->dc))
			$this->dc = (int)$jsonObject->dc;
		if(!is_null($xml) && count($xml->jobObjectId))
			$this->jobObjectId = (string)$xml->jobObjectId;
		if(!is_null($jsonObject) && isset($jsonObject->jobObjectId))
			$this->jobObjectId = (string)$jsonObject->jobObjectId;
		if(!is_null($xml) && count($xml->jobObjectType))
			$this->jobObjectType = (int)$xml->jobObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->jobObjectType))
			$this->jobObjectType = (int)$jsonObject->jobObjectType;
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
	public $deletedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lockExpiration = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $executionAttempts = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lockVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryName = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobType
	 * @readonly
	 */
	public $jobType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $jobSubType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_JobData
	 */
	public $data;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $abort = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $checkAgainTimeout = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priority = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_BatchHistoryData[]
	 */
	public $history;

	/**
	 * The id of the bulk upload job that initiated this job
	 *
	 * @var int
	 */
	public $bulkJobId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchVersion = null;

	/**
	 * When one job creates another - the parent should set this parentJobId to be its own id.
	 *
	 * @var int
	 */
	public $parentJobId = null;

	/**
	 * The id of the root parent job
	 *
	 * @var int
	 */
	public $rootJobId = null;

	/**
	 * The time that the job was pulled from the queue
	 *
	 * @var int
	 */
	public $queueTime = null;

	/**
	 * The time that the job was finished or closed as failed
	 *
	 * @var int
	 */
	public $finishTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobErrorTypes
	 */
	public $errType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $errNumber = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $estimatedEffort = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $urgency = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchIndex = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastSchedulerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastWorkerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobObjectId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $jobObjectType = null;


}

