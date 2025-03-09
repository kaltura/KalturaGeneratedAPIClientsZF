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
class Kaltura_Client_ScheduledTask_Type_ScheduledTaskProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduledTaskProfile';
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
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->objectFilterEngineType))
			$this->objectFilterEngineType = (string)$xml->objectFilterEngineType;
		if(!is_null($jsonObject) && isset($jsonObject->objectFilterEngineType))
			$this->objectFilterEngineType = (string)$jsonObject->objectFilterEngineType;
		if(!is_null($xml) && count($xml->objectFilter) && !empty($xml->objectFilter))
			$this->objectFilter = Kaltura_Client_ParseUtils::unmarshalObject($xml->objectFilter, "KalturaFilter");
		if(!is_null($jsonObject) && isset($jsonObject->objectFilter) && !empty($jsonObject->objectFilter))
			$this->objectFilter = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->objectFilter, "KalturaFilter");
		if(!is_null($xml) && count($xml->objectTasks))
		{
			if(empty($xml->objectTasks))
				$this->objectTasks = array();
			else
				$this->objectTasks = Kaltura_Client_ParseUtils::unmarshalArray($xml->objectTasks, "KalturaObjectTask");
		}
		if(!is_null($jsonObject) && isset($jsonObject->objectTasks))
		{
			if(empty($jsonObject->objectTasks))
				$this->objectTasks = array();
			else
				$this->objectTasks = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->objectTasks, "KalturaObjectTask");
		}
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->lastExecutionStartedAt))
			$this->lastExecutionStartedAt = (int)$xml->lastExecutionStartedAt;
		if(!is_null($jsonObject) && isset($jsonObject->lastExecutionStartedAt))
			$this->lastExecutionStartedAt = (int)$jsonObject->lastExecutionStartedAt;
		if(!is_null($xml) && count($xml->maxTotalCountAllowed))
			$this->maxTotalCountAllowed = (int)$xml->maxTotalCountAllowed;
		if(!is_null($jsonObject) && isset($jsonObject->maxTotalCountAllowed))
			$this->maxTotalCountAllowed = (int)$jsonObject->maxTotalCountAllowed;
	}
	/**
	 * 
	 *
	 * @var int
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
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ScheduledTask_Enum_ScheduledTaskProfileStatus
	 */
	public $status = null;

	/**
	 * The type of engine to use to list objects using the given "objectFilter"
	 *
	 * @var Kaltura_Client_ScheduledTask_Enum_ObjectFilterEngineType
	 */
	public $objectFilterEngineType = null;

	/**
	 * A filter object (inherits KalturaFilter) that is used to list objects for scheduled tasks
	 *
	 * @var Kaltura_Client_Type_Filter
	 */
	public $objectFilter;

	/**
	 * A list of tasks to execute on the founded objects
	 *
	 * @var Kaltura_Client_ScheduledTask_Type_ObjectTask[]
	 */
	public $objectTasks;

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
	 */
	public $lastExecutionStartedAt = null;

	/**
	 * The maximum number of result count allowed to be processed by this profile per execution
	 *
	 * @var int
	 */
	public $maxTotalCountAllowed = null;


}

