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
class Kaltura_Client_YouTubeDistribution_Type_YouTubeDistributionJobProviderData extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaYouTubeDistributionJobProviderData';
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
		if(!is_null($xml) && count($xml->thumbAssetId))
			$this->thumbAssetId = (string)$xml->thumbAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetId))
			$this->thumbAssetId = (string)$jsonObject->thumbAssetId;
		if(!is_null($xml) && count($xml->captionAssetIds))
			$this->captionAssetIds = (string)$xml->captionAssetIds;
		if(!is_null($jsonObject) && isset($jsonObject->captionAssetIds))
			$this->captionAssetIds = (string)$jsonObject->captionAssetIds;
		if(!is_null($xml) && count($xml->sftpDirectory))
			$this->sftpDirectory = (string)$xml->sftpDirectory;
		if(!is_null($jsonObject) && isset($jsonObject->sftpDirectory))
			$this->sftpDirectory = (string)$jsonObject->sftpDirectory;
		if(!is_null($xml) && count($xml->sftpMetadataFilename))
			$this->sftpMetadataFilename = (string)$xml->sftpMetadataFilename;
		if(!is_null($jsonObject) && isset($jsonObject->sftpMetadataFilename))
			$this->sftpMetadataFilename = (string)$jsonObject->sftpMetadataFilename;
		if(!is_null($xml) && count($xml->currentPlaylists))
			$this->currentPlaylists = (string)$xml->currentPlaylists;
		if(!is_null($jsonObject) && isset($jsonObject->currentPlaylists))
			$this->currentPlaylists = (string)$jsonObject->currentPlaylists;
		if(!is_null($xml) && count($xml->newPlaylists))
			$this->newPlaylists = (string)$xml->newPlaylists;
		if(!is_null($jsonObject) && isset($jsonObject->newPlaylists))
			$this->newPlaylists = (string)$jsonObject->newPlaylists;
		if(!is_null($xml) && count($xml->submitXml))
			$this->submitXml = (string)$xml->submitXml;
		if(!is_null($jsonObject) && isset($jsonObject->submitXml))
			$this->submitXml = (string)$jsonObject->submitXml;
		if(!is_null($xml) && count($xml->updateXml))
			$this->updateXml = (string)$xml->updateXml;
		if(!is_null($jsonObject) && isset($jsonObject->updateXml))
			$this->updateXml = (string)$jsonObject->updateXml;
		if(!is_null($xml) && count($xml->deleteXml))
			$this->deleteXml = (string)$xml->deleteXml;
		if(!is_null($jsonObject) && isset($jsonObject->deleteXml))
			$this->deleteXml = (string)$jsonObject->deleteXml;
		if(!is_null($xml) && count($xml->googleClientId))
			$this->googleClientId = (string)$xml->googleClientId;
		if(!is_null($jsonObject) && isset($jsonObject->googleClientId))
			$this->googleClientId = (string)$jsonObject->googleClientId;
		if(!is_null($xml) && count($xml->googleClientSecret))
			$this->googleClientSecret = (string)$xml->googleClientSecret;
		if(!is_null($jsonObject) && isset($jsonObject->googleClientSecret))
			$this->googleClientSecret = (string)$jsonObject->googleClientSecret;
		if(!is_null($xml) && count($xml->googleTokenData))
			$this->googleTokenData = (string)$xml->googleTokenData;
		if(!is_null($jsonObject) && isset($jsonObject->googleTokenData))
			$this->googleTokenData = (string)$jsonObject->googleTokenData;
		if(!is_null($xml) && count($xml->captionsCsvMap))
			$this->captionsCsvMap = (string)$xml->captionsCsvMap;
		if(!is_null($jsonObject) && isset($jsonObject->captionsCsvMap))
			$this->captionsCsvMap = (string)$jsonObject->captionsCsvMap;
		if(!is_null($xml) && count($xml->submitCsvMap))
			$this->submitCsvMap = (string)$xml->submitCsvMap;
		if(!is_null($jsonObject) && isset($jsonObject->submitCsvMap))
			$this->submitCsvMap = (string)$jsonObject->submitCsvMap;
		if(!is_null($xml) && count($xml->updateCsvMap))
			$this->updateCsvMap = (string)$xml->updateCsvMap;
		if(!is_null($jsonObject) && isset($jsonObject->updateCsvMap))
			$this->updateCsvMap = (string)$jsonObject->updateCsvMap;
		if(!is_null($xml) && count($xml->deleteVideoIds))
			$this->deleteVideoIds = (string)$xml->deleteVideoIds;
		if(!is_null($jsonObject) && isset($jsonObject->deleteVideoIds))
			$this->deleteVideoIds = (string)$jsonObject->deleteVideoIds;
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
	 * @var string
	 */
	public $thumbAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAssetIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpDirectory = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpMetadataFilename = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $currentPlaylists = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $newPlaylists = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $submitXml = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateXml = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deleteXml = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $googleClientId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $googleClientSecret = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $googleTokenData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionsCsvMap = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $submitCsvMap = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateCsvMap = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deleteVideoIds = null;


}

