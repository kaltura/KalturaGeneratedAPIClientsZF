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
class Kaltura_Client_ZoomDropFolder_Type_ZoomMeetingMetadata extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomMeetingMetadata';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->uuid))
			$this->uuid = (string)$xml->uuid;
		if(!is_null($jsonObject) && isset($jsonObject->uuid))
			$this->uuid = (string)$jsonObject->uuid;
		if(!is_null($xml) && count($xml->meetingId))
			$this->meetingId = (string)$xml->meetingId;
		if(!is_null($jsonObject) && isset($jsonObject->meetingId))
			$this->meetingId = (string)$jsonObject->meetingId;
		if(!is_null($xml) && count($xml->accountId))
			$this->accountId = (string)$xml->accountId;
		if(!is_null($jsonObject) && isset($jsonObject->accountId))
			$this->accountId = (string)$jsonObject->accountId;
		if(!is_null($xml) && count($xml->hostId))
			$this->hostId = (string)$xml->hostId;
		if(!is_null($jsonObject) && isset($jsonObject->hostId))
			$this->hostId = (string)$jsonObject->hostId;
		if(!is_null($xml) && count($xml->topic))
			$this->topic = (string)$xml->topic;
		if(!is_null($jsonObject) && isset($jsonObject->topic))
			$this->topic = (string)$jsonObject->topic;
		if(!is_null($xml) && count($xml->meetingStartTime))
			$this->meetingStartTime = (string)$xml->meetingStartTime;
		if(!is_null($jsonObject) && isset($jsonObject->meetingStartTime))
			$this->meetingStartTime = (string)$jsonObject->meetingStartTime;
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $uuid = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $meetingId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $accountId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $topic = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $meetingStartTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Vendor_Enum_RecordingType
	 */
	public $type = null;


}

