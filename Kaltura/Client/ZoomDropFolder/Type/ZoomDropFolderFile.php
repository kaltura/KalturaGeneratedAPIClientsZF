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
class Kaltura_Client_ZoomDropFolder_Type_ZoomDropFolderFile extends Kaltura_Client_DropFolder_Type_DropFolderFile
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomDropFolderFile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->meetingMetadata) && !empty($xml->meetingMetadata))
			$this->meetingMetadata = Kaltura_Client_ParseUtils::unmarshalObject($xml->meetingMetadata, "KalturaZoomMeetingMetadata");
		if(!is_null($jsonObject) && isset($jsonObject->meetingMetadata) && !empty($jsonObject->meetingMetadata))
			$this->meetingMetadata = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->meetingMetadata, "KalturaZoomMeetingMetadata");
		if(!is_null($xml) && count($xml->recordingFile) && !empty($xml->recordingFile))
			$this->recordingFile = Kaltura_Client_ParseUtils::unmarshalObject($xml->recordingFile, "KalturaZoomRecordingFile");
		if(!is_null($jsonObject) && isset($jsonObject->recordingFile) && !empty($jsonObject->recordingFile))
			$this->recordingFile = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->recordingFile, "KalturaZoomRecordingFile");
		if(!is_null($xml) && count($xml->parentEntryId))
			$this->parentEntryId = (string)$xml->parentEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->parentEntryId))
			$this->parentEntryId = (string)$jsonObject->parentEntryId;
		if(!is_null($xml) && count($xml->isParentEntry))
		{
			if(!empty($xml->isParentEntry) && ((int) $xml->isParentEntry === 1 || strtolower((string)$xml->isParentEntry) === 'true'))
				$this->isParentEntry = true;
			else
				$this->isParentEntry = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isParentEntry))
		{
			if(!empty($jsonObject->isParentEntry) && ((int) $jsonObject->isParentEntry === 1 || strtolower((string)$jsonObject->isParentEntry) === 'true'))
				$this->isParentEntry = true;
			else
				$this->isParentEntry = false;
		}
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ZoomDropFolder_Type_ZoomMeetingMetadata
	 */
	public $meetingMetadata;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ZoomDropFolder_Type_ZoomRecordingFile
	 */
	public $recordingFile;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentEntryId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isParentEntry = null;


}

