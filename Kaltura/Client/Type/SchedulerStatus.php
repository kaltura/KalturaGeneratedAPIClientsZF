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
class Kaltura_Client_Type_SchedulerStatus extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSchedulerStatus';
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
		if(!is_null($xml) && count($xml->schedulerConfiguredId))
			$this->schedulerConfiguredId = (int)$xml->schedulerConfiguredId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerConfiguredId))
			$this->schedulerConfiguredId = (int)$jsonObject->schedulerConfiguredId;
		if(!is_null($xml) && count($xml->workerConfiguredId))
			$this->workerConfiguredId = (int)$xml->workerConfiguredId;
		if(!is_null($jsonObject) && isset($jsonObject->workerConfiguredId))
			$this->workerConfiguredId = (int)$jsonObject->workerConfiguredId;
		if(!is_null($xml) && count($xml->workerType))
			$this->workerType = (string)$xml->workerType;
		if(!is_null($jsonObject) && isset($jsonObject->workerType))
			$this->workerType = (string)$jsonObject->workerType;
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
		if(!is_null($xml) && count($xml->value))
			$this->value = (int)$xml->value;
		if(!is_null($jsonObject) && isset($jsonObject->value))
			$this->value = (int)$jsonObject->value;
		if(!is_null($xml) && count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerId))
			$this->schedulerId = (int)$jsonObject->schedulerId;
		if(!is_null($xml) && count($xml->workerId))
			$this->workerId = (int)$xml->workerId;
		if(!is_null($jsonObject) && isset($jsonObject->workerId))
			$this->workerId = (int)$jsonObject->workerId;
	}
	/**
	 * The id of the Category
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The configured id of the scheduler
	 *
	 * @var int
	 */
	public $schedulerConfiguredId = null;

	/**
	 * The configured id of the job worker
	 *
	 * @var int
	 */
	public $workerConfiguredId = null;

	/**
	 * The type of the job worker.
	 *
	 * @var Kaltura_Client_Enum_BatchJobType
	 */
	public $workerType = null;

	/**
	 * The status type
	 *
	 * @var Kaltura_Client_Enum_SchedulerStatusType
	 */
	public $type = null;

	/**
	 * The status value
	 *
	 * @var int
	 */
	public $value = null;

	/**
	 * The id of the scheduler
	 *
	 * @var int
	 * @readonly
	 */
	public $schedulerId = null;

	/**
	 * The id of the worker
	 *
	 * @var int
	 * @readonly
	 */
	public $workerId = null;


}

