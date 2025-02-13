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
class Kaltura_Client_Type_ConvertLiveSegmentJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertLiveSegmentJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (string)$jsonObject->assetId;
		if(!is_null($xml) && count($xml->mediaServerIndex))
			$this->mediaServerIndex = (string)$xml->mediaServerIndex;
		if(!is_null($jsonObject) && isset($jsonObject->mediaServerIndex))
			$this->mediaServerIndex = (string)$jsonObject->mediaServerIndex;
		if(!is_null($xml) && count($xml->fileIndex))
			$this->fileIndex = (int)$xml->fileIndex;
		if(!is_null($jsonObject) && isset($jsonObject->fileIndex))
			$this->fileIndex = (int)$jsonObject->fileIndex;
		if(!is_null($xml) && count($xml->srcFilePath))
			$this->srcFilePath = (string)$xml->srcFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->srcFilePath))
			$this->srcFilePath = (string)$jsonObject->srcFilePath;
		if(!is_null($xml) && count($xml->destFilePath))
			$this->destFilePath = (string)$xml->destFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->destFilePath))
			$this->destFilePath = (string)$jsonObject->destFilePath;
		if(!is_null($xml) && count($xml->endTime))
			$this->endTime = (float)$xml->endTime;
		if(!is_null($jsonObject) && isset($jsonObject->endTime))
			$this->endTime = (float)$jsonObject->endTime;
		if(!is_null($xml) && count($xml->destDataFilePath))
			$this->destDataFilePath = (string)$xml->destDataFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->destDataFilePath))
			$this->destDataFilePath = (string)$jsonObject->destDataFilePath;
	}
	/**
	 * Live stream entry id
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * Primary or secondary media server
	 *
	 * @var Kaltura_Client_Enum_EntryServerNodeType
	 */
	public $mediaServerIndex = null;

	/**
	 * The index of the file within the entry
	 *
	 * @var int
	 */
	public $fileIndex = null;

	/**
	 * The recorded live media
	 *
	 * @var string
	 */
	public $srcFilePath = null;

	/**
	 * The output file
	 *
	 * @var string
	 */
	public $destFilePath = null;

	/**
	 * Duration of the live entry including all recorded segments including the current
	 *
	 * @var float
	 */
	public $endTime = null;

	/**
	 * The data output file
	 *
	 * @var string
	 */
	public $destDataFilePath = null;


}

