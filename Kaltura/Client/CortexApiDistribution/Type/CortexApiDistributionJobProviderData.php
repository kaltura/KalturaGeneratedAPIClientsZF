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
class Kaltura_Client_CortexApiDistribution_Type_CortexApiDistributionJobProviderData extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCortexApiDistributionJobProviderData';
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
		if(!is_null($xml) && count($xml->captionsInfo))
		{
			if(empty($xml->captionsInfo))
				$this->captionsInfo = array();
			else
				$this->captionsInfo = Kaltura_Client_ParseUtils::unmarshalArray($xml->captionsInfo, "KalturaCortexApiCaptionDistributionInfo");
		}
		if(!is_null($jsonObject) && isset($jsonObject->captionsInfo))
		{
			if(empty($jsonObject->captionsInfo))
				$this->captionsInfo = array();
			else
				$this->captionsInfo = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->captionsInfo, "KalturaCortexApiCaptionDistributionInfo");
		}
		if(!is_null($xml) && count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(!is_null($jsonObject) && isset($jsonObject->mediaType))
			$this->mediaType = (int)$jsonObject->mediaType;
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
	 * @var Kaltura_Client_CortexApiDistribution_Type_CortexApiCaptionDistributionInfo[]
	 */
	public $captionsInfo;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_MediaType
	 */
	public $mediaType = null;


}

