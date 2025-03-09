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
class Kaltura_Client_Type_Scheduler extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduler';
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
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->host))
			$this->host = (string)$xml->host;
		if(!is_null($jsonObject) && isset($jsonObject->host))
			$this->host = (string)$jsonObject->host;
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
		if(!is_null($xml) && count($xml->workers))
		{
			if(empty($xml->workers))
				$this->workers = array();
			else
				$this->workers = Kaltura_Client_ParseUtils::unmarshalArray($xml->workers, "KalturaSchedulerWorker");
		}
		if(!is_null($jsonObject) && isset($jsonObject->workers))
		{
			if(empty($jsonObject->workers))
				$this->workers = array();
			else
				$this->workers = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->workers, "KalturaSchedulerWorker");
		}
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
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
	 * The id of the Scheduler
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
	 * The scheduler name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The host name
	 *
	 * @var string
	 */
	public $host = null;

	/**
	 * Array of the last statuses
	 *
	 * @var Kaltura_Client_Type_SchedulerStatus[]
	 * @readonly
	 */
	public $statuses;

	/**
	 * Array of the last configs
	 *
	 * @var Kaltura_Client_Type_SchedulerConfig[]
	 * @readonly
	 */
	public $configs;

	/**
	 * Array of the workers
	 *
	 * @var Kaltura_Client_Type_SchedulerWorker[]
	 * @readonly
	 */
	public $workers;

	/**
	 * creation time
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * last status time
	 *
	 * @var int
	 * @readonly
	 */
	public $lastStatus = null;

	/**
	 * last status formated
	 *
	 * @var string
	 * @readonly
	 */
	public $lastStatusStr = null;


}

