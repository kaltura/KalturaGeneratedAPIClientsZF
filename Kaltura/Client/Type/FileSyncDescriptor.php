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
class Kaltura_Client_Type_FileSyncDescriptor extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFileSyncDescriptor';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fileSyncLocalPath))
			$this->fileSyncLocalPath = (string)$xml->fileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->fileSyncLocalPath))
			$this->fileSyncLocalPath = (string)$jsonObject->fileSyncLocalPath;
		if(!is_null($xml) && count($xml->fileEncryptionKey))
			$this->fileEncryptionKey = (string)$xml->fileEncryptionKey;
		if(!is_null($jsonObject) && isset($jsonObject->fileEncryptionKey))
			$this->fileEncryptionKey = (string)$jsonObject->fileEncryptionKey;
		if(!is_null($xml) && count($xml->fileSyncRemoteUrl))
			$this->fileSyncRemoteUrl = (string)$xml->fileSyncRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->fileSyncRemoteUrl))
			$this->fileSyncRemoteUrl = (string)$jsonObject->fileSyncRemoteUrl;
		if(!is_null($xml) && count($xml->fileSyncObjectSubType))
			$this->fileSyncObjectSubType = (int)$xml->fileSyncObjectSubType;
		if(!is_null($jsonObject) && isset($jsonObject->fileSyncObjectSubType))
			$this->fileSyncObjectSubType = (int)$jsonObject->fileSyncObjectSubType;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $fileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileEncryptionKey = null;

	/**
	 * The translated path as used by the scheduler
	 *
	 * @var string
	 */
	public $fileSyncRemoteUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSyncObjectSubType = null;


}

