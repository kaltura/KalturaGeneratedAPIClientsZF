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
class Kaltura_Client_Type_SchedulerConfig extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSchedulerConfig';
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
		if(!is_null($xml) && count($xml->createdBy))
			$this->createdBy = (string)$xml->createdBy;
		if(!is_null($jsonObject) && isset($jsonObject->createdBy))
			$this->createdBy = (string)$jsonObject->createdBy;
		if(!is_null($xml) && count($xml->updatedBy))
			$this->updatedBy = (string)$xml->updatedBy;
		if(!is_null($jsonObject) && isset($jsonObject->updatedBy))
			$this->updatedBy = (string)$jsonObject->updatedBy;
		if(!is_null($xml) && count($xml->commandId))
			$this->commandId = (string)$xml->commandId;
		if(!is_null($jsonObject) && isset($jsonObject->commandId))
			$this->commandId = (string)$jsonObject->commandId;
		if(!is_null($xml) && count($xml->commandStatus))
			$this->commandStatus = (string)$xml->commandStatus;
		if(!is_null($jsonObject) && isset($jsonObject->commandStatus))
			$this->commandStatus = (string)$jsonObject->commandStatus;
		if(!is_null($xml) && count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerId))
			$this->schedulerId = (int)$jsonObject->schedulerId;
		if(!is_null($xml) && count($xml->schedulerConfiguredId))
			$this->schedulerConfiguredId = (int)$xml->schedulerConfiguredId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerConfiguredId))
			$this->schedulerConfiguredId = (int)$jsonObject->schedulerConfiguredId;
		if(!is_null($xml) && count($xml->schedulerName))
			$this->schedulerName = (string)$xml->schedulerName;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerName))
			$this->schedulerName = (string)$jsonObject->schedulerName;
		if(!is_null($xml) && count($xml->workerId))
			$this->workerId = (int)$xml->workerId;
		if(!is_null($jsonObject) && isset($jsonObject->workerId))
			$this->workerId = (int)$jsonObject->workerId;
		if(!is_null($xml) && count($xml->workerConfiguredId))
			$this->workerConfiguredId = (int)$xml->workerConfiguredId;
		if(!is_null($jsonObject) && isset($jsonObject->workerConfiguredId))
			$this->workerConfiguredId = (int)$jsonObject->workerConfiguredId;
		if(!is_null($xml) && count($xml->workerName))
			$this->workerName = (string)$xml->workerName;
		if(!is_null($jsonObject) && isset($jsonObject->workerName))
			$this->workerName = (string)$jsonObject->workerName;
		if(!is_null($xml) && count($xml->variable))
			$this->variable = (string)$xml->variable;
		if(!is_null($jsonObject) && isset($jsonObject->variable))
			$this->variable = (string)$jsonObject->variable;
		if(!is_null($xml) && count($xml->variablePart))
			$this->variablePart = (string)$xml->variablePart;
		if(!is_null($jsonObject) && isset($jsonObject->variablePart))
			$this->variablePart = (string)$jsonObject->variablePart;
		if(!is_null($xml) && count($xml->value))
			$this->value = (string)$xml->value;
		if(!is_null($jsonObject) && isset($jsonObject->value))
			$this->value = (string)$jsonObject->value;
	}
	/**
	 * The id of the Category
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Creator name
	 *
	 * @var string
	 */
	public $createdBy = null;

	/**
	 * Updater name
	 *
	 * @var string
	 */
	public $updatedBy = null;

	/**
	 * Id of the control panel command that created this config item
	 *
	 * @var string
	 */
	public $commandId = null;

	/**
	 * The status of the control panel command
	 *
	 * @var string
	 */
	public $commandStatus = null;

	/**
	 * The id of the scheduler
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * The configured id of the scheduler
	 *
	 * @var int
	 */
	public $schedulerConfiguredId = null;

	/**
	 * The name of the scheduler
	 *
	 * @var string
	 */
	public $schedulerName = null;

	/**
	 * The id of the job worker
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * The configured id of the job worker
	 *
	 * @var int
	 */
	public $workerConfiguredId = null;

	/**
	 * The name of the job worker
	 *
	 * @var string
	 */
	public $workerName = null;

	/**
	 * The name of the variable
	 *
	 * @var string
	 */
	public $variable = null;

	/**
	 * The part of the variable
	 *
	 * @var string
	 */
	public $variablePart = null;

	/**
	 * The value of the variable
	 *
	 * @var string
	 */
	public $value = null;


}

