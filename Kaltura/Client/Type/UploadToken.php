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
class Kaltura_Client_Type_UploadToken extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUploadToken';
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
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->fileName))
			$this->fileName = (string)$xml->fileName;
		if(!is_null($jsonObject) && isset($jsonObject->fileName))
			$this->fileName = (string)$jsonObject->fileName;
		if(!is_null($xml) && count($xml->fileSize))
			$this->fileSize = (float)$xml->fileSize;
		if(!is_null($jsonObject) && isset($jsonObject->fileSize))
			$this->fileSize = (float)$jsonObject->fileSize;
		if(!is_null($xml) && count($xml->uploadedFileSize))
			$this->uploadedFileSize = (float)$xml->uploadedFileSize;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedFileSize))
			$this->uploadedFileSize = (float)$jsonObject->uploadedFileSize;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->uploadUrl))
			$this->uploadUrl = (string)$xml->uploadUrl;
		if(!is_null($jsonObject) && isset($jsonObject->uploadUrl))
			$this->uploadUrl = (string)$jsonObject->uploadUrl;
		if(!is_null($xml) && count($xml->autoFinalize))
			$this->autoFinalize = (int)$xml->autoFinalize;
		if(!is_null($jsonObject) && isset($jsonObject->autoFinalize))
			$this->autoFinalize = (int)$jsonObject->autoFinalize;
		if(!is_null($xml) && count($xml->attachedObjectType))
			$this->attachedObjectType = (string)$xml->attachedObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->attachedObjectType))
			$this->attachedObjectType = (string)$jsonObject->attachedObjectType;
		if(!is_null($xml) && count($xml->attachedObjectId))
			$this->attachedObjectId = (string)$xml->attachedObjectId;
		if(!is_null($jsonObject) && isset($jsonObject->attachedObjectId))
			$this->attachedObjectId = (string)$jsonObject->attachedObjectId;
	}
	/**
	 * Upload token unique ID
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Partner ID of the upload token
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * User id for the upload token
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * Status of the upload token
	 *
	 * @var Kaltura_Client_Enum_UploadTokenStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Name of the file for the upload token, can be empty when the upload token is created and will be updated internally after the file is uploaded
	 *
	 * @var string
	 * @insertonly
	 */
	public $fileName = null;

	/**
	 * File size in bytes, can be empty when the upload token is created and will be updated internally after the file is uploaded
	 *
	 * @var float
	 * @insertonly
	 */
	public $fileSize = null;

	/**
	 * Uploaded file size in bytes, can be used to identify how many bytes were uploaded before resuming
	 *
	 * @var float
	 * @readonly
	 */
	public $uploadedFileSize = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Upload url - to explicitly determine to which domain to address the uploadToken->upload call
	 *
	 * @var string
	 * @readonly
	 */
	public $uploadUrl = null;

	/**
	 * autoFinalize - Should the upload be finalized once the file size on disk matches the file size reported when adding the upload token.
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @insertonly
	 */
	public $autoFinalize = null;

	/**
	 * The type of the object this token is attached to.
	 *
	 * @var string
	 * @readonly
	 */
	public $attachedObjectType = null;

	/**
	 * The id of the object this token is attached to.
	 *
	 * @var string
	 * @readonly
	 */
	public $attachedObjectId = null;


}

