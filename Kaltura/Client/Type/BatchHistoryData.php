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
class Kaltura_Client_Type_BatchHistoryData extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBatchHistoryData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
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
		if(!is_null($xml) && count($xml->timeStamp))
			$this->timeStamp = (int)$xml->timeStamp;
		if(!is_null($jsonObject) && isset($jsonObject->timeStamp))
			$this->timeStamp = (int)$jsonObject->timeStamp;
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->errType))
			$this->errType = (int)$xml->errType;
		if(!is_null($jsonObject) && isset($jsonObject->errType))
			$this->errType = (int)$jsonObject->errType;
		if(!is_null($xml) && count($xml->errNumber))
			$this->errNumber = (int)$xml->errNumber;
		if(!is_null($jsonObject) && isset($jsonObject->errNumber))
			$this->errNumber = (int)$jsonObject->errNumber;
		if(!is_null($xml) && count($xml->hostName))
			$this->hostName = (string)$xml->hostName;
		if(!is_null($jsonObject) && isset($jsonObject->hostName))
			$this->hostName = (string)$jsonObject->hostName;
		if(!is_null($xml) && count($xml->sessionId))
			$this->sessionId = (string)$xml->sessionId;
		if(!is_null($jsonObject) && isset($jsonObject->sessionId))
			$this->sessionId = (string)$jsonObject->sessionId;
		if(!is_null($xml) && count($xml->schedulerName))
			$this->schedulerName = (string)$xml->schedulerName;
		if(!is_null($jsonObject) && isset($jsonObject->schedulerName))
			$this->schedulerName = (string)$jsonObject->schedulerName;
	}
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
	public $timeStamp = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * 
	 *
	 * @var int
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
	 * @var string
	 */
	public $hostName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sessionId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $schedulerName = null;


}

