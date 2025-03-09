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
class Kaltura_Client_Type_ConcatJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConcatJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->srcFiles))
		{
			if(empty($xml->srcFiles))
				$this->srcFiles = array();
			else
				$this->srcFiles = Kaltura_Client_ParseUtils::unmarshalArray($xml->srcFiles, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->srcFiles))
		{
			if(empty($jsonObject->srcFiles))
				$this->srcFiles = array();
			else
				$this->srcFiles = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->srcFiles, "KalturaString");
		}
		if(!is_null($xml) && count($xml->destFilePath))
			$this->destFilePath = (string)$xml->destFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->destFilePath))
			$this->destFilePath = (string)$jsonObject->destFilePath;
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->offset))
			$this->offset = (float)$xml->offset;
		if(!is_null($jsonObject) && isset($jsonObject->offset))
			$this->offset = (float)$jsonObject->offset;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (float)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (float)$jsonObject->duration;
		if(!is_null($xml) && count($xml->concatenatedDuration))
			$this->concatenatedDuration = (float)$xml->concatenatedDuration;
		if(!is_null($jsonObject) && isset($jsonObject->concatenatedDuration))
			$this->concatenatedDuration = (float)$jsonObject->concatenatedDuration;
		if(!is_null($xml) && count($xml->shouldSort))
		{
			if(!empty($xml->shouldSort) && ((int) $xml->shouldSort === 1 || strtolower((string)$xml->shouldSort) === 'true'))
				$this->shouldSort = true;
			else
				$this->shouldSort = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldSort))
		{
			if(!empty($jsonObject->shouldSort) && ((int) $jsonObject->shouldSort === 1 || strtolower((string)$jsonObject->shouldSort) === 'true'))
				$this->shouldSort = true;
			else
				$this->shouldSort = false;
		}
		if(!is_null($xml) && count($xml->conversionCommands))
		{
			if(empty($xml->conversionCommands))
				$this->conversionCommands = array();
			else
				$this->conversionCommands = Kaltura_Client_ParseUtils::unmarshalArray($xml->conversionCommands, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->conversionCommands))
		{
			if(empty($jsonObject->conversionCommands))
				$this->conversionCommands = array();
			else
				$this->conversionCommands = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->conversionCommands, "KalturaString");
		}
		if(!is_null($xml) && count($xml->multiSource))
		{
			if(!empty($xml->multiSource) && ((int) $xml->multiSource === 1 || strtolower((string)$xml->multiSource) === 'true'))
				$this->multiSource = true;
			else
				$this->multiSource = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->multiSource))
		{
			if(!empty($jsonObject->multiSource) && ((int) $jsonObject->multiSource === 1 || strtolower((string)$jsonObject->multiSource) === 'true'))
				$this->multiSource = true;
			else
				$this->multiSource = false;
		}
	}
	/**
	 * Source files to be concatenated
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $srcFiles;

	/**
	 * Output file
	 *
	 * @var string
	 */
	public $destFilePath = null;

	/**
	 * Flavor asset to be ingested with the output
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * Clipping offset in seconds
	 *
	 * @var float
	 */
	public $offset = null;

	/**
	 * Clipping duration in seconds
	 *
	 * @var float
	 */
	public $duration = null;

	/**
	 * duration of the concated video
	 *
	 * @var float
	 */
	public $concatenatedDuration = null;

	/**
	 * Should Sort the clip parts
	 *
	 * @var bool
	 */
	public $shouldSort = null;

	/**
	 * conversion commands to be applied to source files
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $conversionCommands;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $multiSource = null;


}

