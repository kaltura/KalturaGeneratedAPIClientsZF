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
class Kaltura_Client_Type_Playlist extends Kaltura_Client_Type_BaseEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaylist';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->playlistContent))
			$this->playlistContent = (string)$xml->playlistContent;
		if(!is_null($jsonObject) && isset($jsonObject->playlistContent))
			$this->playlistContent = (string)$jsonObject->playlistContent;
		if(!is_null($xml) && count($xml->filters))
		{
			if(empty($xml->filters))
				$this->filters = array();
			else
				$this->filters = Kaltura_Client_ParseUtils::unmarshalArray($xml->filters, "KalturaMediaEntryFilterForPlaylist");
		}
		if(!is_null($jsonObject) && isset($jsonObject->filters))
		{
			if(empty($jsonObject->filters))
				$this->filters = array();
			else
				$this->filters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->filters, "KalturaMediaEntryFilterForPlaylist");
		}
		if(!is_null($xml) && count($xml->totalResults))
			$this->totalResults = (int)$xml->totalResults;
		if(!is_null($jsonObject) && isset($jsonObject->totalResults))
			$this->totalResults = (int)$jsonObject->totalResults;
		if(!is_null($xml) && count($xml->playlistType))
			$this->playlistType = (int)$xml->playlistType;
		if(!is_null($jsonObject) && isset($jsonObject->playlistType))
			$this->playlistType = (int)$jsonObject->playlistType;
		if(!is_null($xml) && count($xml->plays))
			$this->plays = (int)$xml->plays;
		if(!is_null($jsonObject) && isset($jsonObject->plays))
			$this->plays = (int)$jsonObject->plays;
		if(!is_null($xml) && count($xml->views))
			$this->views = (int)$xml->views;
		if(!is_null($jsonObject) && isset($jsonObject->views))
			$this->views = (int)$jsonObject->views;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (int)$jsonObject->duration;
		if(!is_null($xml) && count($xml->executeUrl))
			$this->executeUrl = (string)$xml->executeUrl;
		if(!is_null($jsonObject) && isset($jsonObject->executeUrl))
			$this->executeUrl = (string)$jsonObject->executeUrl;
	}
	/**
	 * Content of the playlist - 
	 * 	 XML if the playlistType is dynamic 
	 * 	 text if the playlistType is static 
	 * 	 url if the playlistType is mRss
	 *
	 * @var string
	 */
	public $playlistContent = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_MediaEntryFilterForPlaylist[]
	 */
	public $filters;

	/**
	 * Maximum count of results to be returned in playlist execution
	 *
	 * @var int
	 */
	public $totalResults = null;

	/**
	 * Type of playlist
	 *
	 * @var Kaltura_Client_Enum_PlaylistType
	 * @insertonly
	 */
	public $playlistType = null;

	/**
	 * Number of plays
	 *
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * Number of views
	 *
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * The duration in seconds
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * The url for this playlist
	 *
	 * @var string
	 * @readonly
	 */
	public $executeUrl = null;


}

