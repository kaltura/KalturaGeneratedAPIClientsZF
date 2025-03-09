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
class Kaltura_Client_Type_BulkUpload extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUpload';
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
		if(!is_null($xml) && count($xml->uploadedBy))
			$this->uploadedBy = (string)$xml->uploadedBy;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedBy))
			$this->uploadedBy = (string)$jsonObject->uploadedBy;
		if(!is_null($xml) && count($xml->uploadedByUserId))
			$this->uploadedByUserId = (string)$xml->uploadedByUserId;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedByUserId))
			$this->uploadedByUserId = (string)$jsonObject->uploadedByUserId;
		if(!is_null($xml) && count($xml->uploadedOn))
			$this->uploadedOn = (int)$xml->uploadedOn;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedOn))
			$this->uploadedOn = (int)$jsonObject->uploadedOn;
		if(!is_null($xml) && count($xml->numOfEntries))
			$this->numOfEntries = (int)$xml->numOfEntries;
		if(!is_null($jsonObject) && isset($jsonObject->numOfEntries))
			$this->numOfEntries = (int)$jsonObject->numOfEntries;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->logFileUrl))
			$this->logFileUrl = (string)$xml->logFileUrl;
		if(!is_null($jsonObject) && isset($jsonObject->logFileUrl))
			$this->logFileUrl = (string)$jsonObject->logFileUrl;
		if(!is_null($xml) && count($xml->csvFileUrl))
			$this->csvFileUrl = (string)$xml->csvFileUrl;
		if(!is_null($jsonObject) && isset($jsonObject->csvFileUrl))
			$this->csvFileUrl = (string)$jsonObject->csvFileUrl;
		if(!is_null($xml) && count($xml->bulkFileUrl))
			$this->bulkFileUrl = (string)$xml->bulkFileUrl;
		if(!is_null($jsonObject) && isset($jsonObject->bulkFileUrl))
			$this->bulkFileUrl = (string)$jsonObject->bulkFileUrl;
		if(!is_null($xml) && count($xml->bulkUploadType))
			$this->bulkUploadType = (string)$xml->bulkUploadType;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadType))
			$this->bulkUploadType = (string)$jsonObject->bulkUploadType;
		if(!is_null($xml) && count($xml->results))
		{
			if(empty($xml->results))
				$this->results = array();
			else
				$this->results = Kaltura_Client_ParseUtils::unmarshalArray($xml->results, "KalturaBulkUploadResult");
		}
		if(!is_null($jsonObject) && isset($jsonObject->results))
		{
			if(empty($jsonObject->results))
				$this->results = array();
			else
				$this->results = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->results, "KalturaBulkUploadResult");
		}
		if(!is_null($xml) && count($xml->error))
			$this->error = (string)$xml->error;
		if(!is_null($jsonObject) && isset($jsonObject->error))
			$this->error = (string)$jsonObject->error;
		if(!is_null($xml) && count($xml->errorType))
			$this->errorType = (int)$xml->errorType;
		if(!is_null($jsonObject) && isset($jsonObject->errorType))
			$this->errorType = (int)$jsonObject->errorType;
		if(!is_null($xml) && count($xml->errorNumber))
			$this->errorNumber = (int)$xml->errorNumber;
		if(!is_null($jsonObject) && isset($jsonObject->errorNumber))
			$this->errorNumber = (int)$jsonObject->errorNumber;
		if(!is_null($xml) && count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(!is_null($jsonObject) && isset($jsonObject->fileName))
			$this->fileName = (string)$jsonObject->fileName;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->numOfObjects))
			$this->numOfObjects = (int)$xml->numOfObjects;
		if(!is_null($jsonObject) && isset($jsonObject->numOfObjects))
			$this->numOfObjects = (int)$jsonObject->numOfObjects;
		if(!is_null($xml) && count($xml->bulkUploadObjectType))
			$this->bulkUploadObjectType = (string)$xml->bulkUploadObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadObjectType))
			$this->bulkUploadObjectType = (string)$jsonObject->bulkUploadObjectType;
	}
	/**
	 * 
	 *
	 * @var bigint
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $uploadedBy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $uploadedByUserId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadedOn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numOfEntries = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $logFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $csvFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bulkFileUrl = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BulkUploadType
	 */
	public $bulkUploadType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_BulkUploadResult[]
	 */
	public $results;

	/**
	 * 
	 *
	 * @var string
	 */
	public $error = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobErrorTypes
	 */
	public $errorType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $errorNumber = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileName = null;

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
	public $numOfObjects = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BulkUploadObjectType
	 */
	public $bulkUploadObjectType = null;


}

