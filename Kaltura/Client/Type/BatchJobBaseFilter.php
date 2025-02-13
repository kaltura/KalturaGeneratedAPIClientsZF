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
abstract class Kaltura_Client_Type_BatchJobBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBatchJobBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idEqual))
			$this->idEqual = (string)$xml->idEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idEqual))
			$this->idEqual = (string)$jsonObject->idEqual;
		if(!is_null($xml) && count($xml->idGreaterThanOrEqual))
			$this->idGreaterThanOrEqual = (string)$xml->idGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idGreaterThanOrEqual))
			$this->idGreaterThanOrEqual = (string)$jsonObject->idGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdIn))
			$this->partnerIdIn = (string)$jsonObject->partnerIdIn;
		if(!is_null($xml) && count($xml->partnerIdNotIn))
			$this->partnerIdNotIn = (string)$xml->partnerIdNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdNotIn))
			$this->partnerIdNotIn = (string)$jsonObject->partnerIdNotIn;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->executionAttemptsGreaterThanOrEqual))
			$this->executionAttemptsGreaterThanOrEqual = (int)$xml->executionAttemptsGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->executionAttemptsGreaterThanOrEqual))
			$this->executionAttemptsGreaterThanOrEqual = (int)$jsonObject->executionAttemptsGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->executionAttemptsLessThanOrEqual))
			$this->executionAttemptsLessThanOrEqual = (int)$xml->executionAttemptsLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->executionAttemptsLessThanOrEqual))
			$this->executionAttemptsLessThanOrEqual = (int)$jsonObject->executionAttemptsLessThanOrEqual;
		if(!is_null($xml) && count($xml->lockVersionGreaterThanOrEqual))
			$this->lockVersionGreaterThanOrEqual = (int)$xml->lockVersionGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->lockVersionGreaterThanOrEqual))
			$this->lockVersionGreaterThanOrEqual = (int)$jsonObject->lockVersionGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->lockVersionLessThanOrEqual))
			$this->lockVersionLessThanOrEqual = (int)$xml->lockVersionLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->lockVersionLessThanOrEqual))
			$this->lockVersionLessThanOrEqual = (int)$jsonObject->lockVersionLessThanOrEqual;
		if(!is_null($xml) && count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdEqual))
			$this->entryIdEqual = (string)$jsonObject->entryIdEqual;
		if(!is_null($xml) && count($xml->jobTypeEqual))
			$this->jobTypeEqual = (string)$xml->jobTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->jobTypeEqual))
			$this->jobTypeEqual = (string)$jsonObject->jobTypeEqual;
		if(!is_null($xml) && count($xml->jobTypeIn))
			$this->jobTypeIn = (string)$xml->jobTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->jobTypeIn))
			$this->jobTypeIn = (string)$jsonObject->jobTypeIn;
		if(!is_null($xml) && count($xml->jobTypeNotIn))
			$this->jobTypeNotIn = (string)$xml->jobTypeNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->jobTypeNotIn))
			$this->jobTypeNotIn = (string)$jsonObject->jobTypeNotIn;
		if(!is_null($xml) && count($xml->jobSubTypeEqual))
			$this->jobSubTypeEqual = (int)$xml->jobSubTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->jobSubTypeEqual))
			$this->jobSubTypeEqual = (int)$jsonObject->jobSubTypeEqual;
		if(!is_null($xml) && count($xml->jobSubTypeIn))
			$this->jobSubTypeIn = (string)$xml->jobSubTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->jobSubTypeIn))
			$this->jobSubTypeIn = (string)$jsonObject->jobSubTypeIn;
		if(!is_null($xml) && count($xml->jobSubTypeNotIn))
			$this->jobSubTypeNotIn = (string)$xml->jobSubTypeNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->jobSubTypeNotIn))
			$this->jobSubTypeNotIn = (string)$jsonObject->jobSubTypeNotIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->statusNotIn))
			$this->statusNotIn = (string)$xml->statusNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusNotIn))
			$this->statusNotIn = (string)$jsonObject->statusNotIn;
		if(!is_null($xml) && count($xml->priorityGreaterThanOrEqual))
			$this->priorityGreaterThanOrEqual = (int)$xml->priorityGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->priorityGreaterThanOrEqual))
			$this->priorityGreaterThanOrEqual = (int)$jsonObject->priorityGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->priorityLessThanOrEqual))
			$this->priorityLessThanOrEqual = (int)$xml->priorityLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->priorityLessThanOrEqual))
			$this->priorityLessThanOrEqual = (int)$jsonObject->priorityLessThanOrEqual;
		if(!is_null($xml) && count($xml->priorityEqual))
			$this->priorityEqual = (int)$xml->priorityEqual;
		if(!is_null($jsonObject) && isset($jsonObject->priorityEqual))
			$this->priorityEqual = (int)$jsonObject->priorityEqual;
		if(!is_null($xml) && count($xml->priorityIn))
			$this->priorityIn = (string)$xml->priorityIn;
		if(!is_null($jsonObject) && isset($jsonObject->priorityIn))
			$this->priorityIn = (string)$jsonObject->priorityIn;
		if(!is_null($xml) && count($xml->priorityNotIn))
			$this->priorityNotIn = (string)$xml->priorityNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->priorityNotIn))
			$this->priorityNotIn = (string)$jsonObject->priorityNotIn;
		if(!is_null($xml) && count($xml->batchVersionGreaterThanOrEqual))
			$this->batchVersionGreaterThanOrEqual = (int)$xml->batchVersionGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->batchVersionGreaterThanOrEqual))
			$this->batchVersionGreaterThanOrEqual = (int)$jsonObject->batchVersionGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->batchVersionLessThanOrEqual))
			$this->batchVersionLessThanOrEqual = (int)$xml->batchVersionLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->batchVersionLessThanOrEqual))
			$this->batchVersionLessThanOrEqual = (int)$jsonObject->batchVersionLessThanOrEqual;
		if(!is_null($xml) && count($xml->batchVersionEqual))
			$this->batchVersionEqual = (int)$xml->batchVersionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->batchVersionEqual))
			$this->batchVersionEqual = (int)$jsonObject->batchVersionEqual;
		if(!is_null($xml) && count($xml->queueTimeGreaterThanOrEqual))
			$this->queueTimeGreaterThanOrEqual = (int)$xml->queueTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->queueTimeGreaterThanOrEqual))
			$this->queueTimeGreaterThanOrEqual = (int)$jsonObject->queueTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->queueTimeLessThanOrEqual))
			$this->queueTimeLessThanOrEqual = (int)$xml->queueTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->queueTimeLessThanOrEqual))
			$this->queueTimeLessThanOrEqual = (int)$jsonObject->queueTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->finishTimeGreaterThanOrEqual))
			$this->finishTimeGreaterThanOrEqual = (int)$xml->finishTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->finishTimeGreaterThanOrEqual))
			$this->finishTimeGreaterThanOrEqual = (int)$jsonObject->finishTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->finishTimeLessThanOrEqual))
			$this->finishTimeLessThanOrEqual = (int)$xml->finishTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->finishTimeLessThanOrEqual))
			$this->finishTimeLessThanOrEqual = (int)$jsonObject->finishTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->errTypeEqual))
			$this->errTypeEqual = (int)$xml->errTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->errTypeEqual))
			$this->errTypeEqual = (int)$jsonObject->errTypeEqual;
		if(!is_null($xml) && count($xml->errTypeIn))
			$this->errTypeIn = (string)$xml->errTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->errTypeIn))
			$this->errTypeIn = (string)$jsonObject->errTypeIn;
		if(!is_null($xml) && count($xml->errTypeNotIn))
			$this->errTypeNotIn = (string)$xml->errTypeNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->errTypeNotIn))
			$this->errTypeNotIn = (string)$jsonObject->errTypeNotIn;
		if(!is_null($xml) && count($xml->errNumberEqual))
			$this->errNumberEqual = (int)$xml->errNumberEqual;
		if(!is_null($jsonObject) && isset($jsonObject->errNumberEqual))
			$this->errNumberEqual = (int)$jsonObject->errNumberEqual;
		if(!is_null($xml) && count($xml->errNumberIn))
			$this->errNumberIn = (string)$xml->errNumberIn;
		if(!is_null($jsonObject) && isset($jsonObject->errNumberIn))
			$this->errNumberIn = (string)$jsonObject->errNumberIn;
		if(!is_null($xml) && count($xml->errNumberNotIn))
			$this->errNumberNotIn = (string)$xml->errNumberNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->errNumberNotIn))
			$this->errNumberNotIn = (string)$jsonObject->errNumberNotIn;
		if(!is_null($xml) && count($xml->estimatedEffortLessThan))
			$this->estimatedEffortLessThan = (int)$xml->estimatedEffortLessThan;
		if(!is_null($jsonObject) && isset($jsonObject->estimatedEffortLessThan))
			$this->estimatedEffortLessThan = (int)$jsonObject->estimatedEffortLessThan;
		if(!is_null($xml) && count($xml->estimatedEffortGreaterThan))
			$this->estimatedEffortGreaterThan = (int)$xml->estimatedEffortGreaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->estimatedEffortGreaterThan))
			$this->estimatedEffortGreaterThan = (int)$jsonObject->estimatedEffortGreaterThan;
		if(!is_null($xml) && count($xml->urgencyLessThanOrEqual))
			$this->urgencyLessThanOrEqual = (int)$xml->urgencyLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->urgencyLessThanOrEqual))
			$this->urgencyLessThanOrEqual = (int)$jsonObject->urgencyLessThanOrEqual;
		if(!is_null($xml) && count($xml->urgencyGreaterThanOrEqual))
			$this->urgencyGreaterThanOrEqual = (int)$xml->urgencyGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->urgencyGreaterThanOrEqual))
			$this->urgencyGreaterThanOrEqual = (int)$jsonObject->urgencyGreaterThanOrEqual;
	}
	/**
	 * 
	 *
	 * @var bigint
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var bigint
	 */
	public $idGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $executionAttemptsGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $executionAttemptsLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lockVersionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lockVersionLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobType
	 */
	public $jobTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobTypeNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $jobSubTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobSubTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $jobSubTypeNotIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $priorityIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $priorityNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchVersionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchVersionLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $batchVersionEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $queueTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $queueTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobErrorTypes
	 */
	public $errTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errTypeNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $errNumberEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errNumberIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errNumberNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $estimatedEffortLessThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $estimatedEffortGreaterThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $urgencyLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $urgencyGreaterThanOrEqual = null;


}

