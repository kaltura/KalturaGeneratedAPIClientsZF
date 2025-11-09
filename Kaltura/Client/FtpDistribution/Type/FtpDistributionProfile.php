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
class Kaltura_Client_FtpDistribution_Type_FtpDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaFtpDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (int)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->host))
			$this->host = (string)$xml->host;
		if(!is_null($jsonObject) && isset($jsonObject->host))
			$this->host = (string)$jsonObject->host;
		if(!is_null($xml) && count($xml->port))
			$this->port = (int)$xml->port;
		if(!is_null($jsonObject) && isset($jsonObject->port))
			$this->port = (int)$jsonObject->port;
		if(!is_null($xml) && count($xml->basePath))
			$this->basePath = (string)$xml->basePath;
		if(!is_null($jsonObject) && isset($jsonObject->basePath))
			$this->basePath = (string)$jsonObject->basePath;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->passphrase))
			$this->passphrase = (string)$xml->passphrase;
		if(!is_null($jsonObject) && isset($jsonObject->passphrase))
			$this->passphrase = (string)$jsonObject->passphrase;
		if(!is_null($xml) && count($xml->sftpPublicKey))
			$this->sftpPublicKey = (string)$xml->sftpPublicKey;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPublicKey))
			$this->sftpPublicKey = (string)$jsonObject->sftpPublicKey;
		if(!is_null($xml) && count($xml->sftpPrivateKey))
			$this->sftpPrivateKey = (string)$xml->sftpPrivateKey;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPrivateKey))
			$this->sftpPrivateKey = (string)$jsonObject->sftpPrivateKey;
		if(!is_null($xml) && count($xml->disableMetadata))
		{
			if(!empty($xml->disableMetadata) && ((int) $xml->disableMetadata === 1 || strtolower((string)$xml->disableMetadata) === 'true'))
				$this->disableMetadata = true;
			else
				$this->disableMetadata = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->disableMetadata))
		{
			if(!empty($jsonObject->disableMetadata) && ((int) $jsonObject->disableMetadata === 1 || strtolower((string)$jsonObject->disableMetadata) === 'true'))
				$this->disableMetadata = true;
			else
				$this->disableMetadata = false;
		}
		if(!is_null($xml) && count($xml->metadataXslt))
			$this->metadataXslt = (string)$xml->metadataXslt;
		if(!is_null($jsonObject) && isset($jsonObject->metadataXslt))
			$this->metadataXslt = (string)$jsonObject->metadataXslt;
		if(!is_null($xml) && count($xml->metadataFilenameXslt))
			$this->metadataFilenameXslt = (string)$xml->metadataFilenameXslt;
		if(!is_null($jsonObject) && isset($jsonObject->metadataFilenameXslt))
			$this->metadataFilenameXslt = (string)$jsonObject->metadataFilenameXslt;
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
		if(!is_null($xml) && count($xml->dataContentFilenameXslt))
			$this->dataContentFilenameXslt = (string)$xml->dataContentFilenameXslt;
		if(!is_null($jsonObject) && isset($jsonObject->dataContentFilenameXslt))
			$this->dataContentFilenameXslt = (string)$jsonObject->dataContentFilenameXslt;
		if(!is_null($xml) && count($xml->asperaPublicKey))
			$this->asperaPublicKey = (string)$xml->asperaPublicKey;
		if(!is_null($jsonObject) && isset($jsonObject->asperaPublicKey))
			$this->asperaPublicKey = (string)$jsonObject->asperaPublicKey;
		if(!is_null($xml) && count($xml->asperaPrivateKey))
			$this->asperaPrivateKey = (string)$xml->asperaPrivateKey;
		if(!is_null($jsonObject) && isset($jsonObject->asperaPrivateKey))
			$this->asperaPrivateKey = (string)$jsonObject->asperaPrivateKey;
		if(!is_null($xml) && count($xml->sendMetadataAfterAssets))
		{
			if(!empty($xml->sendMetadataAfterAssets) && ((int) $xml->sendMetadataAfterAssets === 1 || strtolower((string)$xml->sendMetadataAfterAssets) === 'true'))
				$this->sendMetadataAfterAssets = true;
			else
				$this->sendMetadataAfterAssets = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->sendMetadataAfterAssets))
		{
			if(!empty($jsonObject->sendMetadataAfterAssets) && ((int) $jsonObject->sendMetadataAfterAssets === 1 || strtolower((string)$jsonObject->sendMetadataAfterAssets) === 'true'))
				$this->sendMetadataAfterAssets = true;
			else
				$this->sendMetadataAfterAssets = false;
		}
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProtocol
	 * @insertonly
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $host = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $port = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $basePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $passphrase = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPublicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPrivateKey = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $disableMetadata = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataFilenameXslt = null;

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

	/**
	 * 
	 *
	 * @var string
	 */
	public $dataContentFilenameXslt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaPublicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaPrivateKey = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $sendMetadataAfterAssets = null;


}

