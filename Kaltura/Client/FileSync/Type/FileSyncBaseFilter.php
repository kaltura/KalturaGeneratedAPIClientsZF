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
abstract class Kaltura_Client_FileSync_Type_FileSyncBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaFileSyncBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->fileObjectTypeEqual))
			$this->fileObjectTypeEqual = (string)$xml->fileObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fileObjectTypeEqual))
			$this->fileObjectTypeEqual = (string)$jsonObject->fileObjectTypeEqual;
		if(!is_null($xml) && count($xml->fileObjectTypeIn))
			$this->fileObjectTypeIn = (string)$xml->fileObjectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->fileObjectTypeIn))
			$this->fileObjectTypeIn = (string)$jsonObject->fileObjectTypeIn;
		if(!is_null($xml) && count($xml->objectIdEqual))
			$this->objectIdEqual = (string)$xml->objectIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdEqual))
			$this->objectIdEqual = (string)$jsonObject->objectIdEqual;
		if(!is_null($xml) && count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdIn))
			$this->objectIdIn = (string)$jsonObject->objectIdIn;
		if(!is_null($xml) && count($xml->versionEqual))
			$this->versionEqual = (string)$xml->versionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->versionEqual))
			$this->versionEqual = (string)$jsonObject->versionEqual;
		if(!is_null($xml) && count($xml->versionIn))
			$this->versionIn = (string)$xml->versionIn;
		if(!is_null($jsonObject) && isset($jsonObject->versionIn))
			$this->versionIn = (string)$jsonObject->versionIn;
		if(!is_null($xml) && count($xml->objectSubTypeEqual))
			$this->objectSubTypeEqual = (int)$xml->objectSubTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->objectSubTypeEqual))
			$this->objectSubTypeEqual = (int)$jsonObject->objectSubTypeEqual;
		if(!is_null($xml) && count($xml->objectSubTypeIn))
			$this->objectSubTypeIn = (string)$xml->objectSubTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->objectSubTypeIn))
			$this->objectSubTypeIn = (string)$jsonObject->objectSubTypeIn;
		if(!is_null($xml) && count($xml->dcEqual))
			$this->dcEqual = (string)$xml->dcEqual;
		if(!is_null($jsonObject) && isset($jsonObject->dcEqual))
			$this->dcEqual = (string)$jsonObject->dcEqual;
		if(!is_null($xml) && count($xml->dcIn))
			$this->dcIn = (string)$xml->dcIn;
		if(!is_null($jsonObject) && isset($jsonObject->dcIn))
			$this->dcIn = (string)$jsonObject->dcIn;
		if(!is_null($xml) && count($xml->originalEqual))
			$this->originalEqual = (int)$xml->originalEqual;
		if(!is_null($jsonObject) && isset($jsonObject->originalEqual))
			$this->originalEqual = (int)$jsonObject->originalEqual;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->readyAtGreaterThanOrEqual))
			$this->readyAtGreaterThanOrEqual = (int)$xml->readyAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->readyAtGreaterThanOrEqual))
			$this->readyAtGreaterThanOrEqual = (int)$jsonObject->readyAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->readyAtLessThanOrEqual))
			$this->readyAtLessThanOrEqual = (int)$xml->readyAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->readyAtLessThanOrEqual))
			$this->readyAtLessThanOrEqual = (int)$jsonObject->readyAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->syncTimeGreaterThanOrEqual))
			$this->syncTimeGreaterThanOrEqual = (int)$xml->syncTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->syncTimeGreaterThanOrEqual))
			$this->syncTimeGreaterThanOrEqual = (int)$jsonObject->syncTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->syncTimeLessThanOrEqual))
			$this->syncTimeLessThanOrEqual = (int)$xml->syncTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->syncTimeLessThanOrEqual))
			$this->syncTimeLessThanOrEqual = (int)$jsonObject->syncTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->fileTypeEqual))
			$this->fileTypeEqual = (int)$xml->fileTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fileTypeEqual))
			$this->fileTypeEqual = (int)$jsonObject->fileTypeEqual;
		if(!is_null($xml) && count($xml->fileTypeIn))
			$this->fileTypeIn = (string)$xml->fileTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->fileTypeIn))
			$this->fileTypeIn = (string)$jsonObject->fileTypeIn;
		if(!is_null($xml) && count($xml->linkedIdEqual))
			$this->linkedIdEqual = (int)$xml->linkedIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->linkedIdEqual))
			$this->linkedIdEqual = (int)$jsonObject->linkedIdEqual;
		if(!is_null($xml) && count($xml->linkCountGreaterThanOrEqual))
			$this->linkCountGreaterThanOrEqual = (int)$xml->linkCountGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->linkCountGreaterThanOrEqual))
			$this->linkCountGreaterThanOrEqual = (int)$jsonObject->linkCountGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->linkCountLessThanOrEqual))
			$this->linkCountLessThanOrEqual = (int)$xml->linkCountLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->linkCountLessThanOrEqual))
			$this->linkCountLessThanOrEqual = (int)$jsonObject->linkCountLessThanOrEqual;
		if(!is_null($xml) && count($xml->fileSizeGreaterThanOrEqual))
			$this->fileSizeGreaterThanOrEqual = (float)$xml->fileSizeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fileSizeGreaterThanOrEqual))
			$this->fileSizeGreaterThanOrEqual = (float)$jsonObject->fileSizeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->fileSizeLessThanOrEqual))
			$this->fileSizeLessThanOrEqual = (float)$xml->fileSizeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fileSizeLessThanOrEqual))
			$this->fileSizeLessThanOrEqual = (float)$jsonObject->fileSizeLessThanOrEqual;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_FileSyncObjectType
	 */
	public $fileObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $objectSubTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectSubTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dcEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $originalEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $readyAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $readyAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $syncTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $syncTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_FileSync_Enum_FileSyncStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_FileSync_Enum_FileSyncType
	 */
	public $fileTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileTypeIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $linkedIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $linkCountGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $linkCountLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $fileSizeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $fileSizeLessThanOrEqual = null;


}

