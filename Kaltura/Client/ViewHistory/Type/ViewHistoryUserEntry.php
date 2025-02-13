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
class Kaltura_Client_ViewHistory_Type_ViewHistoryUserEntry extends Kaltura_Client_Type_UserEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaViewHistoryUserEntry';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->playbackContext))
			$this->playbackContext = (string)$xml->playbackContext;
		if(!is_null($jsonObject) && isset($jsonObject->playbackContext))
			$this->playbackContext = (string)$jsonObject->playbackContext;
		if(!is_null($xml) && count($xml->lastTimeReached))
			$this->lastTimeReached = (int)$xml->lastTimeReached;
		if(!is_null($jsonObject) && isset($jsonObject->lastTimeReached))
			$this->lastTimeReached = (int)$jsonObject->lastTimeReached;
		if(!is_null($xml) && count($xml->lastUpdateTime))
			$this->lastUpdateTime = (int)$xml->lastUpdateTime;
		if(!is_null($jsonObject) && isset($jsonObject->lastUpdateTime))
			$this->lastUpdateTime = (int)$jsonObject->lastUpdateTime;
		if(!is_null($xml) && count($xml->playlistLastEntryId))
			$this->playlistLastEntryId = (string)$xml->playlistLastEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->playlistLastEntryId))
			$this->playlistLastEntryId = (string)$jsonObject->playlistLastEntryId;
		if(!is_null($xml) && count($xml->extendedStatus))
			$this->extendedStatus = (string)$xml->extendedStatus;
		if(!is_null($jsonObject) && isset($jsonObject->extendedStatus))
			$this->extendedStatus = (string)$jsonObject->extendedStatus;
	}
	/**
	 * Playback context
	 *
	 * @var string
	 */
	public $playbackContext = null;

	/**
	 * Last playback time reached by user
	 *
	 * @var int
	 */
	public $lastTimeReached = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastUpdateTime = null;

	/**
	 * Property to save last entry ID played in a playlist.
	 *
	 * @var string
	 */
	public $playlistLastEntryId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_UserEntryExtendedStatus
	 */
	public $extendedStatus = null;


}

