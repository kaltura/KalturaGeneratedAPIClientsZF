<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(count($xml->desciption))
			$this->desciption = (string)$xml->desciption;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(count($xml->storageUrl))
			$this->storageUrl = (string)$xml->storageUrl;
		if(count($xml->storageBaseDir))
			$this->storageBaseDir = (string)$xml->storageBaseDir;
		if(count($xml->storageUsername))
			$this->storageUsername = (string)$xml->storageUsername;
		if(count($xml->storagePassword))
			$this->storagePassword = (string)$xml->storagePassword;
		if(count($xml->storageFtpPassiveMode))
		{
			if(!empty($xml->storageFtpPassiveMode) && ((int) $xml->storageFtpPassiveMode === 1 || strtolower((string)$xml->storageFtpPassiveMode) === 'true'))
				$this->storageFtpPassiveMode = true;
			else
				$this->storageFtpPassiveMode = false;
		}
		if(count($xml->minFileSize))
			$this->minFileSize = (int)$xml->minFileSize;
		if(count($xml->maxFileSize))
			$this->maxFileSize = (int)$xml->maxFileSize;
		if(count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(count($xml->maxConcurrentConnections))
			$this->maxConcurrentConnections = (int)$xml->maxConcurrentConnections;
		if(count($xml->pathManagerClass))
			$this->pathManagerClass = (string)$xml->pathManagerClass;
		if(count($xml->pathManagerParams))
		{
			if(empty($xml->pathManagerParams))
				$this->pathManagerParams = array();
			else
				$this->pathManagerParams = Kaltura_Client_ParseUtils::unmarshalArray($xml->pathManagerParams, "KalturaKeyValue");
		}
		if(count($xml->trigger))
			$this->trigger = (int)$xml->trigger;
		if(count($xml->deliveryPriority))
			$this->deliveryPriority = (int)$xml->deliveryPriority;
		if(count($xml->deliveryStatus))
			$this->deliveryStatus = (int)$xml->deliveryStatus;
		if(count($xml->readyBehavior))
			$this->readyBehavior = (int)$xml->readyBehavior;
		if(count($xml->allowAutoDelete))
			$this->allowAutoDelete = (int)$xml->allowAutoDelete;
		if(count($xml->createFileLink))
		{
			if(!empty($xml->createFileLink) && ((int) $xml->createFileLink === 1 || strtolower((string)$xml->createFileLink) === 'true'))
				$this->createFileLink = true;
			else
				$this->createFileLink = false;
		}
		if(count($xml->rules))
		{
			if(empty($xml->rules))
				$this->rules = array();
			else
				$this->rules = Kaltura_Client_ParseUtils::unmarshalArray($xml->rules, "KalturaRule");
		}
		if(count($xml->deliveryProfileIds))
		{
			if(empty($xml->deliveryProfileIds))
				$this->deliveryProfileIds = array();
			else
				$this->deliveryProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->deliveryProfileIds, "KalturaKeyValue");
		}
		if(count($xml->privateKey))
			$this->privateKey = (string)$xml->privateKey;
		if(count($xml->publicKey))
			$this->publicKey = (string)$xml->publicKey;
		if(count($xml->passPhrase))
			$this->passPhrase = (string)$xml->passPhrase;
		if(count($xml->shouldExportThumbs))
		{
			if(!empty($xml->shouldExportThumbs) && ((int) $xml->shouldExportThumbs === 1 || strtolower((string)$xml->shouldExportThumbs) === 'true'))
				$this->shouldExportThumbs = true;
			else
				$this->shouldExportThumbs = false;
		}
		if(count($xml->packagerUrl))
			$this->packagerUrl = (string)$xml->packagerUrl;
		if(count($xml->exportPeriodically))
		{
			if(!empty($xml->exportPeriodically) && ((int) $xml->exportPeriodically === 1 || strtolower((string)$xml->exportPeriodically) === 'true'))
				$this->exportPeriodically = true;
			else
				$this->exportPeriodically = false;
		}
		if(count($xml->excludedFlavorParamsIds))
			$this->excludedFlavorParamsIds = (string)$xml->excludedFlavorParamsIds;
		if(count($xml->shouldExportCaptions))
		{
			if(!empty($xml->shouldExportCaptions) && ((int) $xml->shouldExportCaptions === 1 || strtolower((string)$xml->shouldExportCaptions) === 'true'))
				$this->shouldExportCaptions = true;
			else
				$this->shouldExportCaptions = false;
		}
		if(count($xml->excludedEntryTypes))
			$this->excludedEntryTypes = (string)$xml->excludedEntryTypes;
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
	 * @var array of KalturaKeyValue
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
	 * @var array of KalturaRule
	 */
	public $rules;

	/**
	 * Delivery profile ids
	 *
	 * @var array of KalturaKeyValue
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


}

