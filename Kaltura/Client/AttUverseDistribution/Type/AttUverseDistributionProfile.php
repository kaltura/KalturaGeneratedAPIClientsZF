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
class Kaltura_Client_AttUverseDistribution_Type_AttUverseDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaAttUverseDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(!is_null($jsonObject) && isset($jsonObject->feedUrl))
			$this->feedUrl = (string)$jsonObject->feedUrl;
		if(!is_null($xml) && count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->ftpHost))
			$this->ftpHost = (string)$jsonObject->ftpHost;
		if(!is_null($xml) && count($xml->ftpUsername))
			$this->ftpUsername = (string)$xml->ftpUsername;
		if(!is_null($jsonObject) && isset($jsonObject->ftpUsername))
			$this->ftpUsername = (string)$jsonObject->ftpUsername;
		if(!is_null($xml) && count($xml->ftpPassword))
			$this->ftpPassword = (string)$xml->ftpPassword;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPassword))
			$this->ftpPassword = (string)$jsonObject->ftpPassword;
		if(!is_null($xml) && count($xml->ftpPath))
			$this->ftpPath = (string)$xml->ftpPath;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPath))
			$this->ftpPath = (string)$jsonObject->ftpPath;
		if(!is_null($xml) && count($xml->channelTitle))
			$this->channelTitle = (string)$xml->channelTitle;
		if(!is_null($jsonObject) && isset($jsonObject->channelTitle))
			$this->channelTitle = (string)$jsonObject->channelTitle;
		if(!is_null($xml) && count($xml->flavorAssetFilenameXslt))
			$this->flavorAssetFilenameXslt = (string)$xml->flavorAssetFilenameXslt;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetFilenameXslt))
			$this->flavorAssetFilenameXslt = (string)$jsonObject->flavorAssetFilenameXslt;
		if(!is_null($xml) && count($xml->thumbnailAssetFilenameXslt))
			$this->thumbnailAssetFilenameXslt = (string)$xml->thumbnailAssetFilenameXslt;
		if(!is_null($jsonObject) && isset($jsonObject->thumbnailAssetFilenameXslt))
			$this->thumbnailAssetFilenameXslt = (string)$jsonObject->thumbnailAssetFilenameXslt;
		if(!is_null($xml) && count($xml->assetFilenameXslt))
			$this->assetFilenameXslt = (string)$xml->assetFilenameXslt;
		if(!is_null($jsonObject) && isset($jsonObject->assetFilenameXslt))
			$this->assetFilenameXslt = (string)$jsonObject->assetFilenameXslt;
	}
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
	public $ftpHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelTitle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetFilenameXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailAssetFilenameXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetFilenameXslt = null;


}

