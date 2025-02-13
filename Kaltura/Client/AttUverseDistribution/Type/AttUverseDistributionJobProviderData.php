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
class Kaltura_Client_AttUverseDistribution_Type_AttUverseDistributionJobProviderData extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaAttUverseDistributionJobProviderData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->filesForDistribution))
		{
			if(empty($xml->filesForDistribution))
				$this->filesForDistribution = array();
			else
				$this->filesForDistribution = Kaltura_Client_ParseUtils::unmarshalArray($xml->filesForDistribution, "KalturaAttUverseDistributionFile");
		}
		if(!is_null($jsonObject) && isset($jsonObject->filesForDistribution))
		{
			if(empty($jsonObject->filesForDistribution))
				$this->filesForDistribution = array();
			else
				$this->filesForDistribution = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->filesForDistribution, "KalturaAttUverseDistributionFile");
		}
		if(!is_null($xml) && count($xml->remoteAssetFileUrls))
			$this->remoteAssetFileUrls = (string)$xml->remoteAssetFileUrls;
		if(!is_null($jsonObject) && isset($jsonObject->remoteAssetFileUrls))
			$this->remoteAssetFileUrls = (string)$jsonObject->remoteAssetFileUrls;
		if(!is_null($xml) && count($xml->remoteThumbnailFileUrls))
			$this->remoteThumbnailFileUrls = (string)$xml->remoteThumbnailFileUrls;
		if(!is_null($jsonObject) && isset($jsonObject->remoteThumbnailFileUrls))
			$this->remoteThumbnailFileUrls = (string)$jsonObject->remoteThumbnailFileUrls;
		if(!is_null($xml) && count($xml->remoteCaptionFileUrls))
			$this->remoteCaptionFileUrls = (string)$xml->remoteCaptionFileUrls;
		if(!is_null($jsonObject) && isset($jsonObject->remoteCaptionFileUrls))
			$this->remoteCaptionFileUrls = (string)$jsonObject->remoteCaptionFileUrls;
	}
	/**
	 * 
	 *
	 * @var array of KalturaAttUverseDistributionFile
	 */
	public $filesForDistribution;

	/**
	 * The remote URL of the video asset that was distributed
	 *
	 * @var string
	 */
	public $remoteAssetFileUrls = null;

	/**
	 * The remote URL of the thumbnail asset that was distributed
	 *
	 * @var string
	 */
	public $remoteThumbnailFileUrls = null;

	/**
	 * The remote URL of the caption asset that was distributed
	 *
	 * @var string
	 */
	public $remoteCaptionFileUrls = null;


}

