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
class Kaltura_Client_DropFolder_Type_DropFolder extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolder';
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
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileId))
			$this->conversionProfileId = (int)$jsonObject->conversionProfileId;
		if(!is_null($xml) && count($xml->dc))
			$this->dc = (int)$xml->dc;
		if(!is_null($jsonObject) && isset($jsonObject->dc))
			$this->dc = (int)$jsonObject->dc;
		if(!is_null($xml) && count($xml->path))
			$this->path = (string)$xml->path;
		if(!is_null($jsonObject) && isset($jsonObject->path))
			$this->path = (string)$jsonObject->path;
		if(!is_null($xml) && count($xml->fileSizeCheckInterval))
			$this->fileSizeCheckInterval = (int)$xml->fileSizeCheckInterval;
		if(!is_null($jsonObject) && isset($jsonObject->fileSizeCheckInterval))
			$this->fileSizeCheckInterval = (int)$jsonObject->fileSizeCheckInterval;
		if(!is_null($xml) && count($xml->fileDeletePolicy))
			$this->fileDeletePolicy = (int)$xml->fileDeletePolicy;
		if(!is_null($jsonObject) && isset($jsonObject->fileDeletePolicy))
			$this->fileDeletePolicy = (int)$jsonObject->fileDeletePolicy;
		if(!is_null($xml) && count($xml->fileDeleteRegex))
			$this->fileDeleteRegex = (string)$xml->fileDeleteRegex;
		if(!is_null($jsonObject) && isset($jsonObject->fileDeleteRegex))
			$this->fileDeleteRegex = (string)$jsonObject->fileDeleteRegex;
		if(!is_null($xml) && count($xml->autoFileDeleteDays))
			$this->autoFileDeleteDays = (int)$xml->autoFileDeleteDays;
		if(!is_null($jsonObject) && isset($jsonObject->autoFileDeleteDays))
			$this->autoFileDeleteDays = (int)$jsonObject->autoFileDeleteDays;
		if(!is_null($xml) && count($xml->fileHandlerType))
			$this->fileHandlerType = (string)$xml->fileHandlerType;
		if(!is_null($jsonObject) && isset($jsonObject->fileHandlerType))
			$this->fileHandlerType = (string)$jsonObject->fileHandlerType;
		if(!is_null($xml) && count($xml->fileNamePatterns))
			$this->fileNamePatterns = (string)$xml->fileNamePatterns;
		if(!is_null($jsonObject) && isset($jsonObject->fileNamePatterns))
			$this->fileNamePatterns = (string)$jsonObject->fileNamePatterns;
		if(!is_null($xml) && count($xml->fileHandlerConfig) && !empty($xml->fileHandlerConfig))
			$this->fileHandlerConfig = Kaltura_Client_ParseUtils::unmarshalObject($xml->fileHandlerConfig, "KalturaDropFolderFileHandlerConfig");
		if(!is_null($jsonObject) && isset($jsonObject->fileHandlerConfig) && !empty($jsonObject->fileHandlerConfig))
			$this->fileHandlerConfig = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->fileHandlerConfig, "KalturaDropFolderFileHandlerConfig");
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->errorCode))
			$this->errorCode = (string)$xml->errorCode;
		if(!is_null($jsonObject) && isset($jsonObject->errorCode))
			$this->errorCode = (string)$jsonObject->errorCode;
		if(!is_null($xml) && count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
		if(!is_null($jsonObject) && isset($jsonObject->errorDescription))
			$this->errorDescription = (string)$jsonObject->errorDescription;
		if(!is_null($xml) && count($xml->ignoreFileNamePatterns))
			$this->ignoreFileNamePatterns = (string)$xml->ignoreFileNamePatterns;
		if(!is_null($jsonObject) && isset($jsonObject->ignoreFileNamePatterns))
			$this->ignoreFileNamePatterns = (string)$jsonObject->ignoreFileNamePatterns;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->lastAccessedAt))
			$this->lastAccessedAt = (int)$xml->lastAccessedAt;
		if(!is_null($jsonObject) && isset($jsonObject->lastAccessedAt))
			$this->lastAccessedAt = (int)$jsonObject->lastAccessedAt;
		if(!is_null($xml) && count($xml->incremental))
		{
			if(!empty($xml->incremental) && ((int) $xml->incremental === 1 || strtolower((string)$xml->incremental) === 'true'))
				$this->incremental = true;
			else
				$this->incremental = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->incremental))
		{
			if(!empty($jsonObject->incremental) && ((int) $jsonObject->incremental === 1 || strtolower((string)$jsonObject->incremental) === 'true'))
				$this->incremental = true;
			else
				$this->incremental = false;
		}
		if(!is_null($xml) && count($xml->lastFileTimestamp))
			$this->lastFileTimestamp = (int)$xml->lastFileTimestamp;
		if(!is_null($jsonObject) && isset($jsonObject->lastFileTimestamp))
			$this->lastFileTimestamp = (int)$jsonObject->lastFileTimestamp;
		if(!is_null($xml) && count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileId))
			$this->metadataProfileId = (int)$jsonObject->metadataProfileId;
		if(!is_null($xml) && count($xml->categoriesMetadataFieldName))
			$this->categoriesMetadataFieldName = (string)$xml->categoriesMetadataFieldName;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesMetadataFieldName))
			$this->categoriesMetadataFieldName = (string)$jsonObject->categoriesMetadataFieldName;
		if(!is_null($xml) && count($xml->enforceEntitlement))
		{
			if(!empty($xml->enforceEntitlement) && ((int) $xml->enforceEntitlement === 1 || strtolower((string)$xml->enforceEntitlement) === 'true'))
				$this->enforceEntitlement = true;
			else
				$this->enforceEntitlement = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enforceEntitlement))
		{
			if(!empty($jsonObject->enforceEntitlement) && ((int) $jsonObject->enforceEntitlement === 1 || strtolower((string)$jsonObject->enforceEntitlement) === 'true'))
				$this->enforceEntitlement = true;
			else
				$this->enforceEntitlement = false;
		}
		if(!is_null($xml) && count($xml->shouldValidateKS))
		{
			if(!empty($xml->shouldValidateKS) && ((int) $xml->shouldValidateKS === 1 || strtolower((string)$xml->shouldValidateKS) === 'true'))
				$this->shouldValidateKS = true;
			else
				$this->shouldValidateKS = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldValidateKS))
		{
			if(!empty($jsonObject->shouldValidateKS) && ((int) $jsonObject->shouldValidateKS === 1 || strtolower((string)$jsonObject->shouldValidateKS) === 'true'))
				$this->shouldValidateKS = true;
			else
				$this->shouldValidateKS = false;
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
	 * @insertonly
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
	public $description = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $path = null;

	/**
	 * The amount of time, in seconds, that should pass so that a file with no change in size will be treated as "finished uploading to folder"
	 *
	 * @var int
	 */
	public $fileSizeCheckInterval = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderFileDeletePolicy
	 */
	public $fileDeletePolicy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileDeleteRegex = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $autoFileDeleteDays = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderFileHandlerType
	 */
	public $fileHandlerType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatterns = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Type_DropFolderFileHandlerConfig
	 */
	public $fileHandlerConfig;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderErrorCode
	 */
	public $errorCode = null;

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
	public $ignoreFileNamePatterns = null;

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
	public $lastAccessedAt = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $incremental = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastFileTimestamp = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesMetadataFieldName = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $enforceEntitlement = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $shouldValidateKS = null;


}

