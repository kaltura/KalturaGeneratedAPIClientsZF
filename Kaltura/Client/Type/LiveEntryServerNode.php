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
class Kaltura_Client_Type_LiveEntryServerNode extends Kaltura_Client_Type_EntryServerNode
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveEntryServerNode';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->streams))
		{
			if(empty($xml->streams))
				$this->streams = array();
			else
				$this->streams = Kaltura_Client_ParseUtils::unmarshalArray($xml->streams, "KalturaLiveStreamParams");
		}
		if(!is_null($jsonObject) && isset($jsonObject->streams))
		{
			if(empty($jsonObject->streams))
				$this->streams = array();
			else
				$this->streams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->streams, "KalturaLiveStreamParams");
		}
		if(!is_null($xml) && count($xml->recordingInfo))
		{
			if(empty($xml->recordingInfo))
				$this->recordingInfo = array();
			else
				$this->recordingInfo = Kaltura_Client_ParseUtils::unmarshalArray($xml->recordingInfo, "KalturaLiveEntryServerNodeRecordingInfo");
		}
		if(!is_null($jsonObject) && isset($jsonObject->recordingInfo))
		{
			if(empty($jsonObject->recordingInfo))
				$this->recordingInfo = array();
			else
				$this->recordingInfo = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->recordingInfo, "KalturaLiveEntryServerNodeRecordingInfo");
		}
		if(!is_null($xml) && count($xml->isPlayableUser))
		{
			if(!empty($xml->isPlayableUser) && ((int) $xml->isPlayableUser === 1 || strtolower((string)$xml->isPlayableUser) === 'true'))
				$this->isPlayableUser = true;
			else
				$this->isPlayableUser = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isPlayableUser))
		{
			if(!empty($jsonObject->isPlayableUser) && ((int) $jsonObject->isPlayableUser === 1 || strtolower((string)$jsonObject->isPlayableUser) === 'true'))
				$this->isPlayableUser = true;
			else
				$this->isPlayableUser = false;
		}
		if(!is_null($xml) && count($xml->viewMode))
			$this->viewMode = (int)$xml->viewMode;
		if(!is_null($jsonObject) && isset($jsonObject->viewMode))
			$this->viewMode = (int)$jsonObject->viewMode;
		if(!is_null($xml) && count($xml->featuresUpdatedAt))
			$this->featuresUpdatedAt = (int)$xml->featuresUpdatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->featuresUpdatedAt))
			$this->featuresUpdatedAt = (int)$jsonObject->featuresUpdatedAt;
		if(!is_null($xml) && count($xml->viewModeUpdatedAt))
			$this->viewModeUpdatedAt = (int)$xml->viewModeUpdatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->viewModeUpdatedAt))
			$this->viewModeUpdatedAt = (int)$jsonObject->viewModeUpdatedAt;
	}
	/**
	 * parameters of the stream we got
	 *
	 * @var Kaltura_Client_Type_LiveStreamParams[]
	 */
	public $streams;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_LiveEntryServerNodeRecordingInfo[]
	 */
	public $recordingInfo;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isPlayableUser = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ViewMode
	 */
	public $viewMode = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $featuresUpdatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $viewModeUpdatedAt = null;


}

