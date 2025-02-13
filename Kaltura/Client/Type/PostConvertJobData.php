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
class Kaltura_Client_Type_PostConvertJobData extends Kaltura_Client_Type_ConvartableJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaPostConvertJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->flavorAssetEncryptionKey))
			$this->flavorAssetEncryptionKey = (string)$xml->flavorAssetEncryptionKey;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetEncryptionKey))
			$this->flavorAssetEncryptionKey = (string)$jsonObject->flavorAssetEncryptionKey;
		if(!is_null($xml) && count($xml->createThumb))
		{
			if(!empty($xml->createThumb) && ((int) $xml->createThumb === 1 || strtolower((string)$xml->createThumb) === 'true'))
				$this->createThumb = true;
			else
				$this->createThumb = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->createThumb))
		{
			if(!empty($jsonObject->createThumb) && ((int) $jsonObject->createThumb === 1 || strtolower((string)$jsonObject->createThumb) === 'true'))
				$this->createThumb = true;
			else
				$this->createThumb = false;
		}
		if(!is_null($xml) && count($xml->thumbPath))
			$this->thumbPath = (string)$xml->thumbPath;
		if(!is_null($jsonObject) && isset($jsonObject->thumbPath))
			$this->thumbPath = (string)$jsonObject->thumbPath;
		if(!is_null($xml) && count($xml->thumbOffset))
			$this->thumbOffset = (int)$xml->thumbOffset;
		if(!is_null($jsonObject) && isset($jsonObject->thumbOffset))
			$this->thumbOffset = (int)$jsonObject->thumbOffset;
		if(!is_null($xml) && count($xml->thumbHeight))
			$this->thumbHeight = (int)$xml->thumbHeight;
		if(!is_null($jsonObject) && isset($jsonObject->thumbHeight))
			$this->thumbHeight = (int)$jsonObject->thumbHeight;
		if(!is_null($xml) && count($xml->thumbBitrate))
			$this->thumbBitrate = (int)$xml->thumbBitrate;
		if(!is_null($jsonObject) && isset($jsonObject->thumbBitrate))
			$this->thumbBitrate = (int)$jsonObject->thumbBitrate;
		if(!is_null($xml) && count($xml->customData))
			$this->customData = (string)$xml->customData;
		if(!is_null($jsonObject) && isset($jsonObject->customData))
			$this->customData = (string)$jsonObject->customData;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetEncryptionKey = null;

	/**
	 * Indicates if a thumbnail should be created
	 *
	 * @var bool
	 */
	public $createThumb = null;

	/**
	 * The path of the created thumbnail
	 *
	 * @var string
	 */
	public $thumbPath = null;

	/**
	 * The position of the thumbnail in the media file
	 *
	 * @var int
	 */
	public $thumbOffset = null;

	/**
	 * The height of the movie, will be used to comapare if this thumbnail is the best we can have
	 *
	 * @var int
	 */
	public $thumbHeight = null;

	/**
	 * The bit rate of the movie, will be used to comapare if this thumbnail is the best we can have
	 *
	 * @var int
	 */
	public $thumbBitrate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $customData = null;


}

