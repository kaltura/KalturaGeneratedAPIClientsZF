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
class Kaltura_Client_DropFolder_Type_DropFolderFile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolderFile';
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
		if(!is_null($xml) && count($xml->dropFolderId))
			$this->dropFolderId = (int)$xml->dropFolderId;
		if(!is_null($jsonObject) && isset($jsonObject->dropFolderId))
			$this->dropFolderId = (int)$jsonObject->dropFolderId;
		if(!is_null($xml) && count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(!is_null($jsonObject) && isset($jsonObject->fileName))
			$this->fileName = (string)$jsonObject->fileName;
		if(!is_null($xml) && count($xml->fileSize))
			$this->fileSize = (float)$xml->fileSize;
		if(!is_null($jsonObject) && isset($jsonObject->fileSize))
			$this->fileSize = (float)$jsonObject->fileSize;
		if(!is_null($xml) && count($xml->fileSizeLastSetAt))
			$this->fileSizeLastSetAt = (int)$xml->fileSizeLastSetAt;
		if(!is_null($jsonObject) && isset($jsonObject->fileSizeLastSetAt))
			$this->fileSizeLastSetAt = (int)$jsonObject->fileSizeLastSetAt;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->parsedSlug))
			$this->parsedSlug = (string)$xml->parsedSlug;
		if(!is_null($jsonObject) && isset($jsonObject->parsedSlug))
			$this->parsedSlug = (string)$jsonObject->parsedSlug;
		if(!is_null($xml) && count($xml->parsedFlavor))
			$this->parsedFlavor = (string)$xml->parsedFlavor;
		if(!is_null($jsonObject) && isset($jsonObject->parsedFlavor))
			$this->parsedFlavor = (string)$jsonObject->parsedFlavor;
		if(!is_null($xml) && count($xml->parsedUserId))
			$this->parsedUserId = (string)$xml->parsedUserId;
		if(!is_null($jsonObject) && isset($jsonObject->parsedUserId))
			$this->parsedUserId = (string)$jsonObject->parsedUserId;
		if(!is_null($xml) && count($xml->leadDropFolderFileId))
			$this->leadDropFolderFileId = (int)$xml->leadDropFolderFileId;
		if(!is_null($jsonObject) && isset($jsonObject->leadDropFolderFileId))
			$this->leadDropFolderFileId = (int)$jsonObject->leadDropFolderFileId;
		if(!is_null($xml) && count($xml->deletedDropFolderFileId))
			$this->deletedDropFolderFileId = (int)$xml->deletedDropFolderFileId;
		if(!is_null($jsonObject) && isset($jsonObject->deletedDropFolderFileId))
			$this->deletedDropFolderFileId = (int)$jsonObject->deletedDropFolderFileId;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->errorCode))
			$this->errorCode = (string)$xml->errorCode;
		if(!is_null($jsonObject) && isset($jsonObject->errorCode))
			$this->errorCode = (string)$jsonObject->errorCode;
		if(!is_null($xml) && count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
		if(!is_null($jsonObject) && isset($jsonObject->errorDescription))
			$this->errorDescription = (string)$jsonObject->errorDescription;
		if(!is_null($xml) && count($xml->lastModificationTime))
			$this->lastModificationTime = (string)$xml->lastModificationTime;
		if(!is_null($jsonObject) && isset($jsonObject->lastModificationTime))
			$this->lastModificationTime = (string)$jsonObject->lastModificationTime;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->uploadStartDetectedAt))
			$this->uploadStartDetectedAt = (int)$xml->uploadStartDetectedAt;
		if(!is_null($jsonObject) && isset($jsonObject->uploadStartDetectedAt))
			$this->uploadStartDetectedAt = (int)$jsonObject->uploadStartDetectedAt;
		if(!is_null($xml) && count($xml->uploadEndDetectedAt))
			$this->uploadEndDetectedAt = (int)$xml->uploadEndDetectedAt;
		if(!is_null($jsonObject) && isset($jsonObject->uploadEndDetectedAt))
			$this->uploadEndDetectedAt = (int)$jsonObject->uploadEndDetectedAt;
		if(!is_null($xml) && count($xml->importStartedAt))
			$this->importStartedAt = (int)$xml->importStartedAt;
		if(!is_null($jsonObject) && isset($jsonObject->importStartedAt))
			$this->importStartedAt = (int)$jsonObject->importStartedAt;
		if(!is_null($xml) && count($xml->importEndedAt))
			$this->importEndedAt = (int)$xml->importEndedAt;
		if(!is_null($jsonObject) && isset($jsonObject->importEndedAt))
			$this->importEndedAt = (int)$jsonObject->importEndedAt;
		if(!is_null($xml) && count($xml->batchJobId))
			$this->batchJobId = (int)$xml->batchJobId;
		if(!is_null($jsonObject) && isset($jsonObject->batchJobId))
			$this->batchJobId = (int)$jsonObject->batchJobId;
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
	 * @var int
	 * @insertonly
	 */
	public $dropFolderId = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $fileName = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $fileSizeLastSetAt = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderFileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderType
	 * @readonly
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlug = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavor = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedUserId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $leadDropFolderFileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deletedDropFolderFileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderFileErrorCode
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
	public $lastModificationTime = null;

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
	public $uploadStartDetectedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadEndDetectedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $importStartedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $importEndedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $batchJobId = null;


}

