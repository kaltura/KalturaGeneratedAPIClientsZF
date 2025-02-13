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
class Kaltura_Client_Type_ControlPanelCommand extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaControlPanelCommand';
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
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->createdBy))
			$this->createdBy = (string)$xml->createdBy;
		if(!is_null($jsonObject) && isset($jsonObject->createdBy))
			$this->createdBy = (string)$jsonObject->createdBy;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->updatedBy))
			$this->updatedBy = (string)$xml->updatedBy;
		if(!is_null($jsonObject) && isset($jsonObject->updatedBy))
			$this->updatedBy = (string)$jsonObject->updatedBy;
		if(!is_null($xml) && count($xml->createdById))
			$this->createdById = (int)$xml->createdById;
		if(!is_null($jsonObject) && isset($jsonObject->createdById))
			$this->createdById = (int)$jsonObject->createdById;
		if(!is_null($xml) && count($xml->schedulerId))
			$this->schedulerId = (int)$xml->schedulerId;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerId))
			$this->schedulerId = (int)$jsonObject->schedulerId;
		if(!is_null($xml) && count($xml->workerId))
			$this->workerId = (int)$xml->workerId;
		if(!is_null($jsonObject) && isset($jsonObject->workerId))
			$this->workerId = (int)$jsonObject->workerId;
		if(!is_null($xml) && count($xml->workerConfiguredId))
			$this->workerConfiguredId = (int)$xml->workerConfiguredId;
		if(!is_null($jsonObject) && isset($jsonObject->workerConfiguredId))
			$this->workerConfiguredId = (int)$jsonObject->workerConfiguredId;
		if(!is_null($xml) && count($xml->workerName))
			$this->workerName = (int)$xml->workerName;
		if(!is_null($jsonObject) && isset($jsonObject->workerName))
			$this->workerName = (int)$jsonObject->workerName;
		if(!is_null($xml) && count($xml->batchIndex))
			$this->batchIndex = (int)$xml->batchIndex;
		if(!is_null($jsonObject) && isset($jsonObject->batchIndex))
			$this->batchIndex = (int)$jsonObject->batchIndex;
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
		if(!is_null($xml) && count($xml->targetType))
			$this->targetType = (int)$xml->targetType;
		if(!is_null($jsonObject) && isset($jsonObject->targetType))
			$this->targetType = (int)$jsonObject->targetType;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->cause))
			$this->cause = (string)$xml->cause;
		if(!is_null($jsonObject) && isset($jsonObject->cause))
			$this->cause = (string)$jsonObject->cause;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
		if(!is_null($jsonObject) && isset($jsonObject->errorDescription))
			$this->errorDescription = (string)$jsonObject->errorDescription;
	}
	/**
	 * The id of the Category
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Creator name
	 *
	 * @var string
	 */
	public $createdBy = null;

	/**
	 * Update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Updater name
	 *
	 * @var string
	 */
	public $updatedBy = null;

	/**
	 * Creator id
	 *
	 * @var int
	 */
	public $createdById = null;

	/**
	 * The id of the scheduler that the command refers to
	 *
	 * @var int
	 */
	public $schedulerId = null;

	/**
	 * The id of the scheduler worker that the command refers to
	 *
	 * @var int
	 */
	public $workerId = null;

	/**
	 * The id of the scheduler worker as configured in the ini file
	 *
	 * @var int
	 */
	public $workerConfiguredId = null;

	/**
	 * The name of the scheduler worker that the command refers to
	 *
	 * @var int
	 */
	public $workerName = null;

	/**
	 * The index of the batch process that the command refers to
	 *
	 * @var int
	 */
	public $batchIndex = null;

	/**
	 * The command type - stop / start / config
	 *
	 * @var Kaltura_Client_Enum_ControlPanelCommandType
	 */
	public $type = null;

	/**
	 * The command target type - data center / scheduler / job / job type
	 *
	 * @var Kaltura_Client_Enum_ControlPanelCommandTargetType
	 */
	public $targetType = null;

	/**
	 * The command status
	 *
	 * @var Kaltura_Client_Enum_ControlPanelCommandStatus
	 */
	public $status = null;

	/**
	 * The reason for the command
	 *
	 * @var string
	 */
	public $cause = null;

	/**
	 * Command description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Error description
	 *
	 * @var string
	 */
	public $errorDescription = null;


}

