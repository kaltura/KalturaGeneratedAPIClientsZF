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
class Kaltura_Client_Type_BulkUploadResult extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResult';
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
		if(!is_null($xml) && count($xml->bulkUploadJobId))
			$this->bulkUploadJobId = (string)$xml->bulkUploadJobId;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadJobId))
			$this->bulkUploadJobId = (string)$jsonObject->bulkUploadJobId;
		if(!is_null($xml) && count($xml->lineIndex))
			$this->lineIndex = (int)$xml->lineIndex;
		if(!is_null($jsonObject) && isset($jsonObject->lineIndex))
			$this->lineIndex = (int)$jsonObject->lineIndex;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->action))
			$this->action = (string)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (string)$jsonObject->action;
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->objectStatus))
			$this->objectStatus = (int)$xml->objectStatus;
		if(!is_null($jsonObject) && isset($jsonObject->objectStatus))
			$this->objectStatus = (int)$jsonObject->objectStatus;
		if(!is_null($xml) && count($xml->bulkUploadResultObjectType))
			$this->bulkUploadResultObjectType = (string)$xml->bulkUploadResultObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadResultObjectType))
			$this->bulkUploadResultObjectType = (string)$jsonObject->bulkUploadResultObjectType;
		if(!is_null($xml) && count($xml->rowData))
			$this->rowData = (string)$xml->rowData;
		if(!is_null($jsonObject) && isset($jsonObject->rowData))
			$this->rowData = (string)$jsonObject->rowData;
		if(!is_null($xml) && count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(!is_null($jsonObject) && isset($jsonObject->partnerData))
			$this->partnerData = (string)$jsonObject->partnerData;
		if(!is_null($xml) && count($xml->objectErrorDescription))
			$this->objectErrorDescription = (string)$xml->objectErrorDescription;
		if(!is_null($jsonObject) && isset($jsonObject->objectErrorDescription))
			$this->objectErrorDescription = (string)$jsonObject->objectErrorDescription;
		if(!is_null($xml) && count($xml->pluginsData))
		{
			if(empty($xml->pluginsData))
				$this->pluginsData = array();
			else
				$this->pluginsData = Kaltura_Client_ParseUtils::unmarshalArray($xml->pluginsData, "KalturaBulkUploadPluginData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->pluginsData))
		{
			if(empty($jsonObject->pluginsData))
				$this->pluginsData = array();
			else
				$this->pluginsData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->pluginsData, "KalturaBulkUploadPluginData");
		}
		if(!is_null($xml) && count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
		if(!is_null($jsonObject) && isset($jsonObject->errorDescription))
			$this->errorDescription = (string)$jsonObject->errorDescription;
		if(!is_null($xml) && count($xml->errorCode))
			$this->errorCode = (string)$xml->errorCode;
		if(!is_null($jsonObject) && isset($jsonObject->errorCode))
			$this->errorCode = (string)$jsonObject->errorCode;
		if(!is_null($xml) && count($xml->errorType))
			$this->errorType = (int)$xml->errorType;
		if(!is_null($jsonObject) && isset($jsonObject->errorType))
			$this->errorType = (int)$jsonObject->errorType;
	}
	/**
	 * The id of the result
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id of the parent job
	 *
	 * @var bigint
	 */
	public $bulkUploadJobId = null;

	/**
	 * The index of the line in the CSV
	 *
	 * @var int
	 */
	public $lineIndex = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BulkUploadResultStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BulkUploadAction
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $objectStatus = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BulkUploadObjectType
	 */
	public $bulkUploadResultObjectType = null;

	/**
	 * The data as recieved in the csv
	 *
	 * @var string
	 */
	public $rowData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectErrorDescription = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_BulkUploadPluginData[]
	 */
	public $pluginsData;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorDescription = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorCode = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $errorType = null;


}

