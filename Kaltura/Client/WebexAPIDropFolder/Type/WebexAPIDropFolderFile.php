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
class Kaltura_Client_WebexAPIDropFolder_Type_WebexAPIDropFolderFile extends Kaltura_Client_DropFolder_Type_DropFolderFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaWebexAPIDropFolderFile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->recordingId))
			$this->recordingId = (string)$xml->recordingId;
		if(!is_null($jsonObject) && isset($jsonObject->recordingId))
			$this->recordingId = (string)$jsonObject->recordingId;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->contentUrl))
			$this->contentUrl = (string)$xml->contentUrl;
		if(!is_null($jsonObject) && isset($jsonObject->contentUrl))
			$this->contentUrl = (string)$jsonObject->contentUrl;
		if(!is_null($xml) && count($xml->urlExpiry))
			$this->urlExpiry = (int)$xml->urlExpiry;
		if(!is_null($jsonObject) && isset($jsonObject->urlExpiry))
			$this->urlExpiry = (int)$jsonObject->urlExpiry;
		if(!is_null($xml) && count($xml->fileExtension))
			$this->fileExtension = (string)$xml->fileExtension;
		if(!is_null($jsonObject) && isset($jsonObject->fileExtension))
			$this->fileExtension = (string)$jsonObject->fileExtension;
		if(!is_null($xml) && count($xml->meetingId))
			$this->meetingId = (string)$xml->meetingId;
		if(!is_null($jsonObject) && isset($jsonObject->meetingId))
			$this->meetingId = (string)$jsonObject->meetingId;
		if(!is_null($xml) && count($xml->recordingStartTime))
			$this->recordingStartTime = (int)$xml->recordingStartTime;
		if(!is_null($jsonObject) && isset($jsonObject->recordingStartTime))
			$this->recordingStartTime = (int)$jsonObject->recordingStartTime;
		if(!is_null($xml) && count($xml->hostEmail))
			$this->hostEmail = (string)$xml->hostEmail;
		if(!is_null($jsonObject) && isset($jsonObject->hostEmail))
			$this->hostEmail = (string)$jsonObject->hostEmail;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $recordingId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $urlExpiry = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileExtension = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $meetingId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $recordingStartTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostEmail = null;


}

