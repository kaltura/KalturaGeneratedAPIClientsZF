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
class Kaltura_Client_Type_BulkUploadJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->uploadedBy))
			$this->uploadedBy = (string)$xml->uploadedBy;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedBy))
			$this->uploadedBy = (string)$jsonObject->uploadedBy;
		if(!is_null($xml) && count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileId))
			$this->conversionProfileId = (int)$jsonObject->conversionProfileId;
		if(!is_null($xml) && count($xml->resultsFileLocalPath))
			$this->resultsFileLocalPath = (string)$xml->resultsFileLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->resultsFileLocalPath))
			$this->resultsFileLocalPath = (string)$jsonObject->resultsFileLocalPath;
		if(!is_null($xml) && count($xml->resultsFileUrl))
			$this->resultsFileUrl = (string)$xml->resultsFileUrl;
		if(!is_null($jsonObject) && isset($jsonObject->resultsFileUrl))
			$this->resultsFileUrl = (string)$jsonObject->resultsFileUrl;
		if(!is_null($xml) && count($xml->numOfEntries))
			$this->numOfEntries = (int)$xml->numOfEntries;
		if(!is_null($jsonObject) && isset($jsonObject->numOfEntries))
			$this->numOfEntries = (int)$jsonObject->numOfEntries;
		if(!is_null($xml) && count($xml->numOfObjects))
			$this->numOfObjects = (int)$xml->numOfObjects;
		if(!is_null($jsonObject) && isset($jsonObject->numOfObjects))
			$this->numOfObjects = (int)$jsonObject->numOfObjects;
		if(!is_null($xml) && count($xml->filePath))
			$this->filePath = (string)$xml->filePath;
		if(!is_null($jsonObject) && isset($jsonObject->filePath))
			$this->filePath = (string)$jsonObject->filePath;
		if(!is_null($xml) && count($xml->bulkUploadObjectType))
			$this->bulkUploadObjectType = (string)$xml->bulkUploadObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadObjectType))
			$this->bulkUploadObjectType = (string)$jsonObject->bulkUploadObjectType;
		if(!is_null($xml) && count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(!is_null($jsonObject) && isset($jsonObject->fileName))
			$this->fileName = (string)$jsonObject->fileName;
		if(!is_null($xml) && count($xml->objectData) && !empty($xml->objectData))
			$this->objectData = Kaltura_Client_ParseUtils::unmarshalObject($xml->objectData, "KalturaBulkUploadObjectData");
		if(!is_null($jsonObject) && isset($jsonObject->objectData) && !empty($jsonObject->objectData))
			$this->objectData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->objectData, "KalturaBulkUploadObjectData");
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->emailRecipients))
			$this->emailRecipients = (string)$xml->emailRecipients;
		if(!is_null($jsonObject) && isset($jsonObject->emailRecipients))
			$this->emailRecipients = (string)$jsonObject->emailRecipients;
		if(!is_null($xml) && count($xml->numOfErrorObjects))
			$this->numOfErrorObjects = (int)$xml->numOfErrorObjects;
		if(!is_null($jsonObject) && isset($jsonObject->numOfErrorObjects))
			$this->numOfErrorObjects = (int)$jsonObject->numOfErrorObjects;
		if(!is_null($xml) && count($xml->privileges))
			$this->privileges = (string)$xml->privileges;
		if(!is_null($jsonObject) && isset($jsonObject->privileges))
			$this->privileges = (string)$jsonObject->privileges;
	}
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The screen name of the user
	 *
	 * @var string
	 * @readonly
	 */
	public $uploadedBy = null;

	/**
	 * Selected profile id for all bulk entries
	 *
	 * @var int
	 * @readonly
	 */
	public $conversionProfileId = null;

	/**
	 * Created by the API
	 *
	 * @var string
	 * @readonly
	 */
	public $resultsFileLocalPath = null;

	/**
	 * Created by the API
	 *
	 * @var string
	 * @readonly
	 */
	public $resultsFileUrl = null;

	/**
	 * Number of created entries
	 *
	 * @var int
	 * @readonly
	 */
	public $numOfEntries = null;

	/**
	 * Number of created objects
	 *
	 * @var int
	 * @readonly
	 */
	public $numOfObjects = null;

	/**
	 * The bulk upload file path
	 *
	 * @var string
	 * @readonly
	 */
	public $filePath = null;

	/**
	 * Type of object for bulk upload
	 *
	 * @var Kaltura_Client_Enum_BulkUploadObjectType
	 * @readonly
	 */
	public $bulkUploadObjectType = null;

	/**
	 * Friendly name of the file, used to be recognized later in the logs.
	 *
	 * @var string
	 */
	public $fileName = null;

	/**
	 * Data pertaining to the objects being uploaded
	 *
	 * @var Kaltura_Client_Type_BulkUploadObjectData
	 * @readonly
	 */
	public $objectData;

	/**
	 * Type of bulk upload
	 *
	 * @var Kaltura_Client_Enum_BulkUploadType
	 * @readonly
	 */
	public $type = null;

	/**
	 * Recipients of the email for bulk upload success/failure
	 *
	 * @var string
	 */
	public $emailRecipients = null;

	/**
	 * Number of objects that finished on error status
	 *
	 * @var int
	 */
	public $numOfErrorObjects = null;

	/**
	 * privileges for the job
	 *
	 * @var string
	 */
	public $privileges = null;


}

