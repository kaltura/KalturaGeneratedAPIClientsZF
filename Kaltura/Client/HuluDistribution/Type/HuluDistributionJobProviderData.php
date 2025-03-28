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
class Kaltura_Client_HuluDistribution_Type_HuluDistributionJobProviderData extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaHuluDistributionJobProviderData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->videoAssetFilePath))
			$this->videoAssetFilePath = (string)$xml->videoAssetFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->videoAssetFilePath))
			$this->videoAssetFilePath = (string)$jsonObject->videoAssetFilePath;
		if(!is_null($xml) && count($xml->thumbAssetFilePath))
			$this->thumbAssetFilePath = (string)$xml->thumbAssetFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetFilePath))
			$this->thumbAssetFilePath = (string)$jsonObject->thumbAssetFilePath;
		if(!is_null($xml) && count($xml->cuePoints))
		{
			if(empty($xml->cuePoints))
				$this->cuePoints = array();
			else
				$this->cuePoints = Kaltura_Client_ParseUtils::unmarshalArray($xml->cuePoints, "KalturaCuePoint");
		}
		if(!is_null($jsonObject) && isset($jsonObject->cuePoints))
		{
			if(empty($jsonObject->cuePoints))
				$this->cuePoints = array();
			else
				$this->cuePoints = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->cuePoints, "KalturaCuePoint");
		}
		if(!is_null($xml) && count($xml->fileBaseName))
			$this->fileBaseName = (string)$xml->fileBaseName;
		if(!is_null($jsonObject) && isset($jsonObject->fileBaseName))
			$this->fileBaseName = (string)$jsonObject->fileBaseName;
		if(!is_null($xml) && count($xml->captionLocalPaths))
		{
			if(empty($xml->captionLocalPaths))
				$this->captionLocalPaths = array();
			else
				$this->captionLocalPaths = Kaltura_Client_ParseUtils::unmarshalArray($xml->captionLocalPaths, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->captionLocalPaths))
		{
			if(empty($jsonObject->captionLocalPaths))
				$this->captionLocalPaths = array();
			else
				$this->captionLocalPaths = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->captionLocalPaths, "KalturaString");
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $videoAssetFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetFilePath = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_CuePoint_Type_CuePoint[]
	 */
	public $cuePoints;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileBaseName = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $captionLocalPaths;


}

