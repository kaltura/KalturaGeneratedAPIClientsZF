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
class Kaltura_Client_Type_SchedulerWorker extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSchedulerWorker';
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
		if(!is_null($xml) && count($xml->configuredId))
			$this->configuredId = (int)$xml->configuredId;
		if(!is_null($jsonObject) && isset($jsonObject->configuredId))
			$this->configuredId = (int)$jsonObject->configuredId;
		if(!is_null($xml) && count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerId))
			$this->schedulerId = (int)$jsonObject->schedulerId;
		if(!is_null($xml) && count($xml->schedulerConfiguredId))
			$this->schedulerConfiguredId = (int)$xml->schedulerConfiguredId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerConfiguredId))
			$this->schedulerConfiguredId = (int)$jsonObject->schedulerConfiguredId;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->typeName))
			$this->typeName = (string)$xml->typeName;
		if(!is_null($jsonObject) && isset($jsonObject->typeName))
			$this->typeName = (string)$jsonObject->typeName;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->statuses))
		{
			if(empty($xml->statuses))
				$this->statuses = array();
			else
				$this->statuses = Kaltura_Client_ParseUtils::unmarshalArray($xml->statuses, "KalturaSchedulerStatus");
		}
		if(!is_null($jsonObject) && isset($jsonObject->statuses))
		{
			if(empty($jsonObject->statuses))
				$this->statuses = array();
			else
				$this->statuses = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->statuses, "KalturaSchedulerStatus");
		}
		if(!is_null($xml) && count($xml->configs))
		{
			if(empty($xml->configs))
				$this->configs = array();
			else
				$this->configs = Kaltura_Client_ParseUtils::unmarshalArray($xml->configs, "KalturaSchedulerConfig");
		}
		if(!is_null($jsonObject) && isset($jsonObject->configs))
		{
			if(empty($jsonObject->configs))
				$this->configs = array();
			else
				$this->configs = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->configs, "KalturaSchedulerConfig");
		}
		if(!is_null($xml) && count($xml->lockedJobs))
		{
			if(empty($xml->lockedJobs))
				$this->lockedJobs = array();
			else
				$this->lockedJobs = Kaltura_Client_ParseUtils::unmarshalArray($xml->lockedJobs, "KalturaBatchJob");
		}
		if(!is_null($jsonObject) && isset($jsonObject->lockedJobs))
		{
			if(empty($jsonObject->lockedJobs))
				$this->lockedJobs = array();
			else
				$this->lockedJobs = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->lockedJobs, "KalturaBatchJob");
		}
		if(!is_null($xml) && count($xml->avgWait))
			$this->avgWait = (int)$xml->avgWait;
		if(!is_null($jsonObject) && isset($jsonObject->avgWait))
			$this->avgWait = (int)$jsonObject->avgWait;
		if(!is_null($xml) && count($xml->avgWork))
			$this->avgWork = (int)$xml->avgWork;
		if(!is_null($jsonObject) && isset($jsonObject->avgWork))
			$this->avgWork = (int)$jsonObject->avgWork;
		if(!is_null($xml) && count($xml->lastStatus))
			$this->lastStatus = (int)$xml->lastStatus;
		if(!is_null($jsonObject) && isset($jsonObject->lastStatus))
			$this->lastStatus = (int)$jsonObject->lastStatus;
		if(!is_null($xml) && count($xml->lastStatusStr))
			$this->lastStatusStr = (string)$xml->lastStatusStr;
		if(!is_null($jsonObject) && isset($jsonObject->lastStatusStr))
			$this->lastStatusStr = (string)$jsonObject->lastStatusStr;
	}
	/**
	 * The id of the Worker
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id as configured in the batch config
	 *
	 * @var int
	 */
	public $configuredId = null;

	/**
	 * The id of the Scheduler
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * The id of the scheduler as configured in the batch config
	 *
	 * @var int
	 */
	public $schedulerConfiguredId = null;

	/**
	 * The worker type
	 *
	 * @var Kaltura_Client_Enum_BatchJobType
	 */
	public $type = null;

	/**
	 * The friendly name of the type
	 *
	 * @var string
	 */
	public $typeName = null;

	/**
	 * The scheduler name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Array of the last statuses
	 *
	 * @var Kaltura_Client_Type_SchedulerStatus[]
	 */
	public $statuses;

	/**
	 * Array of the last configs
	 *
	 * @var Kaltura_Client_Type_SchedulerConfig[]
	 */
	public $configs;

	/**
	 * Array of jobs that locked to this worker
	 *
	 * @var Kaltura_Client_Type_BatchJob[]
	 */
	public $lockedJobs;

	/**
	 * Avarage time between creation and queue time
	 *
	 * @var int
	 */
	public $avgWait = null;

	/**
	 * Avarage time between queue time end finish time
	 *
	 * @var int
	 */
	public $avgWork = null;

	/**
	 * last status time
	 *
	 * @var int
	 */
	public $lastStatus = null;

	/**
	 * last status formated
	 *
	 * @var string
	 */
	public $lastStatusStr = null;


}

