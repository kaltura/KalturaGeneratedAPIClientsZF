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
class Kaltura_Client_ComcastMrssDistribution_Type_ComcastMrssDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaComcastMrssDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileId))
			$this->metadataProfileId = (int)$jsonObject->metadataProfileId;
		if(!is_null($xml) && count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(!is_null($jsonObject) && isset($jsonObject->feedUrl))
			$this->feedUrl = (string)$jsonObject->feedUrl;
		if(!is_null($xml) && count($xml->feedTitle))
			$this->feedTitle = (string)$xml->feedTitle;
		if(!is_null($jsonObject) && isset($jsonObject->feedTitle))
			$this->feedTitle = (string)$jsonObject->feedTitle;
		if(!is_null($xml) && count($xml->feedLink))
			$this->feedLink = (string)$xml->feedLink;
		if(!is_null($jsonObject) && isset($jsonObject->feedLink))
			$this->feedLink = (string)$jsonObject->feedLink;
		if(!is_null($xml) && count($xml->feedDescription))
			$this->feedDescription = (string)$xml->feedDescription;
		if(!is_null($jsonObject) && isset($jsonObject->feedDescription))
			$this->feedDescription = (string)$jsonObject->feedDescription;
		if(!is_null($xml) && count($xml->feedLastBuildDate))
			$this->feedLastBuildDate = (string)$xml->feedLastBuildDate;
		if(!is_null($jsonObject) && isset($jsonObject->feedLastBuildDate))
			$this->feedLastBuildDate = (string)$jsonObject->feedLastBuildDate;
		if(!is_null($xml) && count($xml->itemLink))
			$this->itemLink = (string)$xml->itemLink;
		if(!is_null($jsonObject) && isset($jsonObject->itemLink))
			$this->itemLink = (string)$jsonObject->itemLink;
		if(!is_null($xml) && count($xml->cPlatformTvSeries))
		{
			if(empty($xml->cPlatformTvSeries))
				$this->cPlatformTvSeries = array();
			else
				$this->cPlatformTvSeries = Kaltura_Client_ParseUtils::unmarshalArray($xml->cPlatformTvSeries, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->cPlatformTvSeries))
		{
			if(empty($jsonObject->cPlatformTvSeries))
				$this->cPlatformTvSeries = array();
			else
				$this->cPlatformTvSeries = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->cPlatformTvSeries, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->cPlatformTvSeriesField))
			$this->cPlatformTvSeriesField = (string)$xml->cPlatformTvSeriesField;
		if(!is_null($jsonObject) && isset($jsonObject->cPlatformTvSeriesField))
			$this->cPlatformTvSeriesField = (string)$jsonObject->cPlatformTvSeriesField;
		if(!is_null($xml) && count($xml->shouldIncludeCuePoints))
		{
			if(!empty($xml->shouldIncludeCuePoints) && ((int) $xml->shouldIncludeCuePoints === 1 || strtolower((string)$xml->shouldIncludeCuePoints) === 'true'))
				$this->shouldIncludeCuePoints = true;
			else
				$this->shouldIncludeCuePoints = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldIncludeCuePoints))
		{
			if(!empty($jsonObject->shouldIncludeCuePoints) && ((int) $jsonObject->shouldIncludeCuePoints === 1 || strtolower((string)$jsonObject->shouldIncludeCuePoints) === 'true'))
				$this->shouldIncludeCuePoints = true;
			else
				$this->shouldIncludeCuePoints = false;
		}
		if(!is_null($xml) && count($xml->shouldIncludeCaptions))
		{
			if(!empty($xml->shouldIncludeCaptions) && ((int) $xml->shouldIncludeCaptions === 1 || strtolower((string)$xml->shouldIncludeCaptions) === 'true'))
				$this->shouldIncludeCaptions = true;
			else
				$this->shouldIncludeCaptions = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldIncludeCaptions))
		{
			if(!empty($jsonObject->shouldIncludeCaptions) && ((int) $jsonObject->shouldIncludeCaptions === 1 || strtolower((string)$jsonObject->shouldIncludeCaptions) === 'true'))
				$this->shouldIncludeCaptions = true;
			else
				$this->shouldIncludeCaptions = false;
		}
		if(!is_null($xml) && count($xml->shouldAddThumbExtension))
		{
			if(!empty($xml->shouldAddThumbExtension) && ((int) $xml->shouldAddThumbExtension === 1 || strtolower((string)$xml->shouldAddThumbExtension) === 'true'))
				$this->shouldAddThumbExtension = true;
			else
				$this->shouldAddThumbExtension = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldAddThumbExtension))
		{
			if(!empty($jsonObject->shouldAddThumbExtension) && ((int) $jsonObject->shouldAddThumbExtension === 1 || strtolower((string)$jsonObject->shouldAddThumbExtension) === 'true'))
				$this->shouldAddThumbExtension = true;
			else
				$this->shouldAddThumbExtension = false;
		}
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedTitle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedLastBuildDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemLink = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $cPlatformTvSeries;

	/**
	 * 
	 *
	 * @var string
	 */
	public $cPlatformTvSeriesField = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $shouldIncludeCuePoints = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $shouldIncludeCaptions = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $shouldAddThumbExtension = null;


}

