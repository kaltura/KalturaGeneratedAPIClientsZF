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
class Kaltura_Client_Type_StorageProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaStorageProfile';
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
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
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
		if(!is_null($xml) && count($xml->desciption))
			$this->desciption = (string)$xml->desciption;
		if(!is_null($jsonObject) && isset($jsonObject->desciption))
			$this->desciption = (string)$jsonObject->desciption;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (string)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->storageUrl))
			$this->storageUrl = (string)$xml->storageUrl;
		if(!is_null($jsonObject) && isset($jsonObject->storageUrl))
			$this->storageUrl = (string)$jsonObject->storageUrl;
		if(!is_null($xml) && count($xml->storageBaseDir))
			$this->storageBaseDir = (string)$xml->storageBaseDir;
		if(!is_null($jsonObject) && isset($jsonObject->storageBaseDir))
			$this->storageBaseDir = (string)$jsonObject->storageBaseDir;
		if(!is_null($xml) && count($xml->pathPrefix))
			$this->pathPrefix = (string)$xml->pathPrefix;
		if(!is_null($jsonObject) && isset($jsonObject->pathPrefix))
			$this->pathPrefix = (string)$jsonObject->pathPrefix;
		if(!is_null($xml) && count($xml->storageUsername))
			$this->storageUsername = (string)$xml->storageUsername;
		if(!is_null($jsonObject) && isset($jsonObject->storageUsername))
			$this->storageUsername = (string)$jsonObject->storageUsername;
		if(!is_null($xml) && count($xml->storagePassword))
			$this->storagePassword = (string)$xml->storagePassword;
		if(!is_null($jsonObject) && isset($jsonObject->storagePassword))
			$this->storagePassword = (string)$jsonObject->storagePassword;
		if(!is_null($xml) && count($xml->storageFtpPassiveMode))
		{
			if(!empty($xml->storageFtpPassiveMode) && ((int) $xml->storageFtpPassiveMode === 1 || strtolower((string)$xml->storageFtpPassiveMode) === 'true'))
				$this->storageFtpPassiveMode = true;
			else
				$this->storageFtpPassiveMode = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->storageFtpPassiveMode))
		{
			if(!empty($jsonObject->storageFtpPassiveMode) && ((int) $jsonObject->storageFtpPassiveMode === 1 || strtolower((string)$jsonObject->storageFtpPassiveMode) === 'true'))
				$this->storageFtpPassiveMode = true;
			else
				$this->storageFtpPassiveMode = false;
		}
		if(!is_null($xml) && count($xml->minFileSize))
			$this->minFileSize = (int)$xml->minFileSize;
		if(!is_null($jsonObject) && isset($jsonObject->minFileSize))
			$this->minFileSize = (int)$jsonObject->minFileSize;
		if(!is_null($xml) && count($xml->maxFileSize))
			$this->maxFileSize = (int)$xml->maxFileSize;
		if(!is_null($jsonObject) && isset($jsonObject->maxFileSize))
			$this->maxFileSize = (int)$jsonObject->maxFileSize;
		if(!is_null($xml) && count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsIds))
			$this->flavorParamsIds = (string)$jsonObject->flavorParamsIds;
		if(!is_null($xml) && count($xml->maxConcurrentConnections))
			$this->maxConcurrentConnections = (int)$xml->maxConcurrentConnections;
		if(!is_null($jsonObject) && isset($jsonObject->maxConcurrentConnections))
			$this->maxConcurrentConnections = (int)$jsonObject->maxConcurrentConnections;
		if(!is_null($xml) && count($xml->pathManagerClass))
			$this->pathManagerClass = (string)$xml->pathManagerClass;
		if(!is_null($jsonObject) && isset($jsonObject->pathManagerClass))
			$this->pathManagerClass = (string)$jsonObject->pathManagerClass;
		if(!is_null($xml) && count($xml->pathManagerParams))
		{
			if(empty($xml->pathManagerParams))
				$this->pathManagerParams = array();
			else
				$this->pathManagerParams = Kaltura_Client_ParseUtils::unmarshalArray($xml->pathManagerParams, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->pathManagerParams))
		{
			if(empty($jsonObject->pathManagerParams))
				$this->pathManagerParams = array();
			else
				$this->pathManagerParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->pathManagerParams, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->trigger))
			$this->trigger = (int)$xml->trigger;
		if(!is_null($jsonObject) && isset($jsonObject->trigger))
			$this->trigger = (int)$jsonObject->trigger;
		if(!is_null($xml) && count($xml->deliveryPriority))
			$this->deliveryPriority = (int)$xml->deliveryPriority;
		if(!is_null($jsonObject) && isset($jsonObject->deliveryPriority))
			$this->deliveryPriority = (int)$jsonObject->deliveryPriority;
		if(!is_null($xml) && count($xml->deliveryStatus))
			$this->deliveryStatus = (int)$xml->deliveryStatus;
		if(!is_null($jsonObject) && isset($jsonObject->deliveryStatus))
			$this->deliveryStatus = (int)$jsonObject->deliveryStatus;
		if(!is_null($xml) && count($xml->readyBehavior))
			$this->readyBehavior = (int)$xml->readyBehavior;
		if(!is_null($jsonObject) && isset($jsonObject->readyBehavior))
			$this->readyBehavior = (int)$jsonObject->readyBehavior;
		if(!is_null($xml) && count($xml->allowAutoDelete))
			$this->allowAutoDelete = (int)$xml->allowAutoDelete;
		if(!is_null($jsonObject) && isset($jsonObject->allowAutoDelete))
			$this->allowAutoDelete = (int)$jsonObject->allowAutoDelete;
		if(!is_null($xml) && count($xml->createFileLink))
		{
			if(!empty($xml->createFileLink) && ((int) $xml->createFileLink === 1 || strtolower((string)$xml->createFileLink) === 'true'))
				$this->createFileLink = true;
			else
				$this->createFileLink = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->createFileLink))
		{
			if(!empty($jsonObject->createFileLink) && ((int) $jsonObject->createFileLink === 1 || strtolower((string)$jsonObject->createFileLink) === 'true'))
				$this->createFileLink = true;
			else
				$this->createFileLink = false;
		}
		if(!is_null($xml) && count($xml->rules))
		{
			if(empty($xml->rules))
				$this->rules = array();
			else
				$this->rules = Kaltura_Client_ParseUtils::unmarshalArray($xml->rules, "KalturaRule");
		}
		if(!is_null($jsonObject) && isset($jsonObject->rules))
		{
			if(empty($jsonObject->rules))
				$this->rules = array();
			else
				$this->rules = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->rules, "KalturaRule");
		}
		if(!is_null($xml) && count($xml->deliveryProfileIds))
		{
			if(empty($xml->deliveryProfileIds))
				$this->deliveryProfileIds = array();
			else
				$this->deliveryProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->deliveryProfileIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->deliveryProfileIds))
		{
			if(empty($jsonObject->deliveryProfileIds))
				$this->deliveryProfileIds = array();
			else
				$this->deliveryProfileIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->deliveryProfileIds, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->privateKey))
			$this->privateKey = (string)$xml->privateKey;
		if(!is_null($jsonObject) && isset($jsonObject->privateKey))
			$this->privateKey = (string)$jsonObject->privateKey;
		if(!is_null($xml) && count($xml->publicKey))
			$this->publicKey = (string)$xml->publicKey;
		if(!is_null($jsonObject) && isset($jsonObject->publicKey))
			$this->publicKey = (string)$jsonObject->publicKey;
		if(!is_null($xml) && count($xml->passPhrase))
			$this->passPhrase = (string)$xml->passPhrase;
		if(!is_null($jsonObject) && isset($jsonObject->passPhrase))
			$this->passPhrase = (string)$jsonObject->passPhrase;
		if(!is_null($xml) && count($xml->port))
			$this->port = (int)$xml->port;
		if(!is_null($jsonObject) && isset($jsonObject->port))
			$this->port = (int)$jsonObject->port;
		if(!is_null($xml) && count($xml->shouldExportThumbs))
		{
			if(!empty($xml->shouldExportThumbs) && ((int) $xml->shouldExportThumbs === 1 || strtolower((string)$xml->shouldExportThumbs) === 'true'))
				$this->shouldExportThumbs = true;
			else
				$this->shouldExportThumbs = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldExportThumbs))
		{
			if(!empty($jsonObject->shouldExportThumbs) && ((int) $jsonObject->shouldExportThumbs === 1 || strtolower((string)$jsonObject->shouldExportThumbs) === 'true'))
				$this->shouldExportThumbs = true;
			else
				$this->shouldExportThumbs = false;
		}
		if(!is_null($xml) && count($xml->packagerUrl))
			$this->packagerUrl = (string)$xml->packagerUrl;
		if(!is_null($jsonObject) && isset($jsonObject->packagerUrl))
			$this->packagerUrl = (string)$jsonObject->packagerUrl;
		if(!is_null($xml) && count($xml->exportPeriodically))
		{
			if(!empty($xml->exportPeriodically) && ((int) $xml->exportPeriodically === 1 || strtolower((string)$xml->exportPeriodically) === 'true'))
				$this->exportPeriodically = true;
			else
				$this->exportPeriodically = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->exportPeriodically))
		{
			if(!empty($jsonObject->exportPeriodically) && ((int) $jsonObject->exportPeriodically === 1 || strtolower((string)$jsonObject->exportPeriodically) === 'true'))
				$this->exportPeriodically = true;
			else
				$this->exportPeriodically = false;
		}
		if(!is_null($xml) && count($xml->excludedFlavorParamsIds))
			$this->excludedFlavorParamsIds = (string)$xml->excludedFlavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->excludedFlavorParamsIds))
			$this->excludedFlavorParamsIds = (string)$jsonObject->excludedFlavorParamsIds;
		if(!is_null($xml) && count($xml->shouldExportCaptions))
		{
			if(!empty($xml->shouldExportCaptions) && ((int) $xml->shouldExportCaptions === 1 || strtolower((string)$xml->shouldExportCaptions) === 'true'))
				$this->shouldExportCaptions = true;
			else
				$this->shouldExportCaptions = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldExportCaptions))
		{
			if(!empty($jsonObject->shouldExportCaptions) && ((int) $jsonObject->shouldExportCaptions === 1 || strtolower((string)$jsonObject->shouldExportCaptions) === 'true'))
				$this->shouldExportCaptions = true;
			else
				$this->shouldExportCaptions = false;
		}
		if(!is_null($xml) && count($xml->excludedEntryTypes))
			$this->excludedEntryTypes = (string)$xml->excludedEntryTypes;
		if(!is_null($jsonObject) && isset($jsonObject->excludedEntryTypes))
			$this->excludedEntryTypes = (string)$jsonObject->excludedEntryTypes;
		if(!is_null($xml) && count($xml->additionalInfo))
		{
			if(empty($xml->additionalInfo))
				$this->additionalInfo = array();
			else
				$this->additionalInfo = Kaltura_Client_ParseUtils::unmarshalArray($xml->additionalInfo, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->additionalInfo))
		{
			if(empty($jsonObject->additionalInfo))
				$this->additionalInfo = array();
			else
				$this->additionalInfo = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->additionalInfo, "KalturaKeyValue");
		}
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
	public $desciption = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_StorageProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_StorageProfileProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageBaseDir = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathPrefix = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storagePassword = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $storageFtpPassiveMode = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $minFileSize = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxFileSize = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxConcurrentConnections = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathManagerClass = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $pathManagerParams;

	/**
	 * No need to create enum for temp field
	 *
	 * @var int
	 */
	public $trigger = null;

	/**
	 * Delivery Priority
	 *
	 * @var int
	 */
	public $deliveryPriority = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_StorageProfileDeliveryStatus
	 */
	public $deliveryStatus = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_StorageProfileReadyBehavior
	 */
	public $readyBehavior = null;

	/**
	 * Flag sugnifying that the storage exported content should be deleted when soure entry is deleted
	 *
	 * @var int
	 */
	public $allowAutoDelete = null;

	/**
	 * Indicates to the local file transfer manager to create a link to the file instead of copying it
	 *
	 * @var bool
	 */
	public $createFileLink = null;

	/**
	 * Holds storage profile export rules
	 *
	 * @var Kaltura_Client_Type_Rule[]
	 */
	public $rules;

	/**
	 * Delivery profile ids
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $deliveryProfileIds;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privateKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $publicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $passPhrase = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $shouldExportThumbs = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $packagerUrl = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $exportPeriodically = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $excludedFlavorParamsIds = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $shouldExportCaptions = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $excludedEntryTypes = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $additionalInfo;


}

