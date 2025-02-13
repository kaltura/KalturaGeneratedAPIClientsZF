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
class Kaltura_Client_ZoomDropFolder_Type_ZoomRecordingFile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomRecordingFile';
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
		if(!is_null($xml) && count($xml->recordingStart))
			$this->recordingStart = (string)$xml->recordingStart;
		if(!is_null($jsonObject) && isset($jsonObject->recordingStart))
			$this->recordingStart = (string)$jsonObject->recordingStart;
		if(!is_null($xml) && count($xml->fileType))
			$this->fileType = (int)$xml->fileType;
		if(!is_null($jsonObject) && isset($jsonObject->fileType))
			$this->fileType = (int)$jsonObject->fileType;
		if(!is_null($xml) && count($xml->downloadUrl))
			$this->downloadUrl = (string)$xml->downloadUrl;
		if(!is_null($jsonObject) && isset($jsonObject->downloadUrl))
			$this->downloadUrl = (string)$jsonObject->downloadUrl;
		if(!is_null($xml) && count($xml->fileExtension))
			$this->fileExtension = (string)$xml->fileExtension;
		if(!is_null($jsonObject) && isset($jsonObject->fileExtension))
			$this->fileExtension = (string)$jsonObject->fileExtension;
		if(!is_null($xml) && count($xml->downloadToken))
			$this->downloadToken = (string)$xml->downloadToken;
		if(!is_null($jsonObject) && isset($jsonObject->downloadToken))
			$this->downloadToken = (string)$jsonObject->downloadToken;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recordingStart = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Vendor_Enum_RecordingFileType
	 */
	public $fileType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $downloadUrl = null;

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
	public $downloadToken = null;


}

