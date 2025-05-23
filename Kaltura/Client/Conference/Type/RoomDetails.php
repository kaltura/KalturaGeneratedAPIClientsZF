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
class Kaltura_Client_Conference_Type_RoomDetails extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRoomDetails';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->serverUrl))
			$this->serverUrl = (string)$xml->serverUrl;
		if(!is_null($jsonObject) && isset($jsonObject->serverUrl))
			$this->serverUrl = (string)$jsonObject->serverUrl;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->token))
			$this->token = (string)$xml->token;
		if(!is_null($jsonObject) && isset($jsonObject->token))
			$this->token = (string)$jsonObject->token;
		if(!is_null($xml) && count($xml->expiry))
			$this->expiry = (int)$xml->expiry;
		if(!is_null($jsonObject) && isset($jsonObject->expiry))
			$this->expiry = (int)$jsonObject->expiry;
		if(!is_null($xml) && count($xml->serverName))
			$this->serverName = (string)$xml->serverName;
		if(!is_null($jsonObject) && isset($jsonObject->serverName))
			$this->serverName = (string)$jsonObject->serverName;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $token = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $expiry = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverName = null;


}

