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
class Kaltura_Client_FileSync_Type_FileSync extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFileSync';
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
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->fileObjectType))
			$this->fileObjectType = (string)$xml->fileObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->fileObjectType))
			$this->fileObjectType = (string)$jsonObject->fileObjectType;
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->objectSubType))
			$this->objectSubType = (int)$xml->objectSubType;
		if(!is_null($jsonObject) && isset($jsonObject->objectSubType))
			$this->objectSubType = (int)$jsonObject->objectSubType;
		if(!is_null($xml) && count($xml->dc))
			$this->dc = (string)$xml->dc;
		if(!is_null($jsonObject) && isset($jsonObject->dc))
			$this->dc = (string)$jsonObject->dc;
		if(!is_null($xml) && count($xml->original))
			$this->original = (int)$xml->original;
		if(!is_null($jsonObject) && isset($jsonObject->original))
			$this->original = (int)$jsonObject->original;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->readyAt))
			$this->readyAt = (int)$xml->readyAt;
		if(!is_null($jsonObject) && isset($jsonObject->readyAt))
			$this->readyAt = (int)$jsonObject->readyAt;
		if(!is_null($xml) && count($xml->syncTime))
			$this->syncTime = (int)$xml->syncTime;
		if(!is_null($jsonObject) && isset($jsonObject->syncTime))
			$this->syncTime = (int)$jsonObject->syncTime;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->fileType))
			$this->fileType = (int)$xml->fileType;
		if(!is_null($jsonObject) && isset($jsonObject->fileType))
			$this->fileType = (int)$jsonObject->fileType;
		if(!is_null($xml) && count($xml->linkedId))
			$this->linkedId = (int)$xml->linkedId;
		if(!is_null($jsonObject) && isset($jsonObject->linkedId))
			$this->linkedId = (int)$jsonObject->linkedId;
		if(!is_null($xml) && count($xml->linkCount))
			$this->linkCount = (int)$xml->linkCount;
		if(!is_null($jsonObject) && isset($jsonObject->linkCount))
			$this->linkCount = (int)$jsonObject->linkCount;
		if(!is_null($xml) && count($xml->fileRoot))
			$this->fileRoot = (string)$xml->fileRoot;
		if(!is_null($jsonObject) && isset($jsonObject->fileRoot))
			$this->fileRoot = (string)$jsonObject->fileRoot;
		if(!is_null($xml) && count($xml->filePath))
			$this->filePath = (string)$xml->filePath;
		if(!is_null($jsonObject) && isset($jsonObject->filePath))
			$this->filePath = (string)$jsonObject->filePath;
		if(!is_null($xml) && count($xml->fileSize))
			$this->fileSize = (float)$xml->fileSize;
		if(!is_null($jsonObject) && isset($jsonObject->fileSize))
			$this->fileSize = (float)$jsonObject->fileSize;
		if(!is_null($xml) && count($xml->fileUrl))
			$this->fileUrl = (string)$xml->fileUrl;
		if(!is_null($jsonObject) && isset($jsonObject->fileUrl))
			$this->fileUrl = (string)$jsonObject->fileUrl;
		if(!is_null($xml) && count($xml->fileContent))
			$this->fileContent = (string)$xml->fileContent;
		if(!is_null($jsonObject) && isset($jsonObject->fileContent))
			$this->fileContent = (string)$jsonObject->fileContent;
		if(!is_null($xml) && count($xml->fileDiscSize))
			$this->fileDiscSize = (float)$xml->fileDiscSize;
		if(!is_null($jsonObject) && isset($jsonObject->fileDiscSize))
			$this->fileDiscSize = (float)$jsonObject->fileDiscSize;
		if(!is_null($xml) && count($xml->isCurrentDc))
		{
			if(!empty($xml->isCurrentDc) && ((int) $xml->isCurrentDc === 1 || strtolower((string)$xml->isCurrentDc) === 'true'))
				$this->isCurrentDc = true;
			else
				$this->isCurrentDc = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isCurrentDc))
		{
			if(!empty($jsonObject->isCurrentDc) && ((int) $jsonObject->isCurrentDc === 1 || strtolower((string)$jsonObject->isCurrentDc) === 'true'))
				$this->isCurrentDc = true;
			else
				$this->isCurrentDc = false;
		}
		if(!is_null($xml) && count($xml->isDir))
		{
			if(!empty($xml->isDir) && ((int) $xml->isDir === 1 || strtolower((string)$xml->isDir) === 'true'))
				$this->isDir = true;
			else
				$this->isDir = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDir))
		{
			if(!empty($jsonObject->isDir) && ((int) $jsonObject->isDir === 1 || strtolower((string)$jsonObject->isDir) === 'true'))
				$this->isDir = true;
			else
				$this->isDir = false;
		}
		if(!is_null($xml) && count($xml->originalId))
			$this->originalId = (int)$xml->originalId;
		if(!is_null($jsonObject) && isset($jsonObject->originalId))
			$this->originalId = (int)$jsonObject->originalId;
		if(!is_null($xml) && count($xml->srcPath))
			$this->srcPath = (string)$xml->srcPath;
		if(!is_null($jsonObject) && isset($jsonObject->srcPath))
			$this->srcPath = (string)$jsonObject->srcPath;
		if(!is_null($xml) && count($xml->srcEncKey))
			$this->srcEncKey = (string)$xml->srcEncKey;
		if(!is_null($jsonObject) && isset($jsonObject->srcEncKey))
			$this->srcEncKey = (string)$jsonObject->srcEncKey;
		if(!is_null($xml) && count($xml->storageClass))
			$this->storageClass = (string)$xml->storageClass;
		if(!is_null($jsonObject) && isset($jsonObject->storageClass))
			$this->storageClass = (string)$jsonObject->storageClass;
	}
	/**
	 * 
	 *
	 * @var bigint
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
	 * @var Kaltura_Client_Enum_FileSyncObjectType
	 * @readonly
	 */
	public $fileObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $objectSubType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $original = null;

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
	public $readyAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $syncTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_FileSync_Enum_FileSyncStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_FileSync_Enum_FileSyncType
	 * @readonly
	 */
	public $fileType = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $linkedId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $linkCount = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileRoot = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $filePath = null;

	/**
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $fileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $fileContent = null;

	/**
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $fileDiscSize = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isCurrentDc = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDir = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $originalId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcEncKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageClass = null;


}

