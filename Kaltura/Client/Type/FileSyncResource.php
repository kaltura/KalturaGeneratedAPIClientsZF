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
class Kaltura_Client_Type_FileSyncResource extends Kaltura_Client_Type_ContentResource
{
	public function getKalturaObjectType()
	{
		return 'KalturaFileSyncResource';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fileSyncObjectType))
			$this->fileSyncObjectType = (int)$xml->fileSyncObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->fileSyncObjectType))
			$this->fileSyncObjectType = (int)$jsonObject->fileSyncObjectType;
		if(!is_null($xml) && count($xml->objectSubType))
			$this->objectSubType = (int)$xml->objectSubType;
		if(!is_null($jsonObject) && isset($jsonObject->objectSubType))
			$this->objectSubType = (int)$jsonObject->objectSubType;
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->originEntryId))
			$this->originEntryId = (string)$xml->originEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->originEntryId))
			$this->originEntryId = (string)$jsonObject->originEntryId;
	}
	/**
	 * The object type of the file sync object
	 *
	 * @var int
	 */
	public $fileSyncObjectType = null;

	/**
	 * The object sub-type of the file sync object
	 *
	 * @var int
	 */
	public $objectSubType = null;

	/**
	 * The object id of the file sync object
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * The version of the file sync object
	 *
	 * @var string
	 */
	public $version = null;

	/**
	 * The original entry ID, if exists
	 *
	 * @var string
	 */
	public $originEntryId = null;


}

