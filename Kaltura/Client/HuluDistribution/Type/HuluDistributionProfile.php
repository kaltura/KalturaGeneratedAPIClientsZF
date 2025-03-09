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
class Kaltura_Client_HuluDistribution_Type_HuluDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaHuluDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->sftpHost))
			$this->sftpHost = (string)$xml->sftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->sftpHost))
			$this->sftpHost = (string)$jsonObject->sftpHost;
		if(!is_null($xml) && count($xml->sftpLogin))
			$this->sftpLogin = (string)$xml->sftpLogin;
		if(!is_null($jsonObject) && isset($jsonObject->sftpLogin))
			$this->sftpLogin = (string)$jsonObject->sftpLogin;
		if(!is_null($xml) && count($xml->sftpPass))
			$this->sftpPass = (string)$xml->sftpPass;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPass))
			$this->sftpPass = (string)$jsonObject->sftpPass;
		if(!is_null($xml) && count($xml->seriesChannel))
			$this->seriesChannel = (string)$xml->seriesChannel;
		if(!is_null($jsonObject) && isset($jsonObject->seriesChannel))
			$this->seriesChannel = (string)$jsonObject->seriesChannel;
		if(!is_null($xml) && count($xml->seriesPrimaryCategory))
			$this->seriesPrimaryCategory = (string)$xml->seriesPrimaryCategory;
		if(!is_null($jsonObject) && isset($jsonObject->seriesPrimaryCategory))
			$this->seriesPrimaryCategory = (string)$jsonObject->seriesPrimaryCategory;
		if(!is_null($xml) && count($xml->seriesAdditionalCategories))
		{
			if(empty($xml->seriesAdditionalCategories))
				$this->seriesAdditionalCategories = array();
			else
				$this->seriesAdditionalCategories = Kaltura_Client_ParseUtils::unmarshalArray($xml->seriesAdditionalCategories, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->seriesAdditionalCategories))
		{
			if(empty($jsonObject->seriesAdditionalCategories))
				$this->seriesAdditionalCategories = array();
			else
				$this->seriesAdditionalCategories = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->seriesAdditionalCategories, "KalturaString");
		}
		if(!is_null($xml) && count($xml->seasonNumber))
			$this->seasonNumber = (string)$xml->seasonNumber;
		if(!is_null($jsonObject) && isset($jsonObject->seasonNumber))
			$this->seasonNumber = (string)$jsonObject->seasonNumber;
		if(!is_null($xml) && count($xml->seasonSynopsis))
			$this->seasonSynopsis = (string)$xml->seasonSynopsis;
		if(!is_null($jsonObject) && isset($jsonObject->seasonSynopsis))
			$this->seasonSynopsis = (string)$jsonObject->seasonSynopsis;
		if(!is_null($xml) && count($xml->seasonTuneInInformation))
			$this->seasonTuneInInformation = (string)$xml->seasonTuneInInformation;
		if(!is_null($jsonObject) && isset($jsonObject->seasonTuneInInformation))
			$this->seasonTuneInInformation = (string)$jsonObject->seasonTuneInInformation;
		if(!is_null($xml) && count($xml->videoMediaType))
			$this->videoMediaType = (string)$xml->videoMediaType;
		if(!is_null($jsonObject) && isset($jsonObject->videoMediaType))
			$this->videoMediaType = (string)$jsonObject->videoMediaType;
		if(!is_null($xml) && count($xml->disableEpisodeNumberCustomValidation))
		{
			if(!empty($xml->disableEpisodeNumberCustomValidation) && ((int) $xml->disableEpisodeNumberCustomValidation === 1 || strtolower((string)$xml->disableEpisodeNumberCustomValidation) === 'true'))
				$this->disableEpisodeNumberCustomValidation = true;
			else
				$this->disableEpisodeNumberCustomValidation = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->disableEpisodeNumberCustomValidation))
		{
			if(!empty($jsonObject->disableEpisodeNumberCustomValidation) && ((int) $jsonObject->disableEpisodeNumberCustomValidation === 1 || strtolower((string)$jsonObject->disableEpisodeNumberCustomValidation) === 'true'))
				$this->disableEpisodeNumberCustomValidation = true;
			else
				$this->disableEpisodeNumberCustomValidation = false;
		}
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (int)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->asperaHost))
			$this->asperaHost = (string)$xml->asperaHost;
		if(!is_null($jsonObject) && isset($jsonObject->asperaHost))
			$this->asperaHost = (string)$jsonObject->asperaHost;
		if(!is_null($xml) && count($xml->asperaLogin))
			$this->asperaLogin = (string)$xml->asperaLogin;
		if(!is_null($jsonObject) && isset($jsonObject->asperaLogin))
			$this->asperaLogin = (string)$jsonObject->asperaLogin;
		if(!is_null($xml) && count($xml->asperaPass))
			$this->asperaPass = (string)$xml->asperaPass;
		if(!is_null($jsonObject) && isset($jsonObject->asperaPass))
			$this->asperaPass = (string)$jsonObject->asperaPass;
		if(!is_null($xml) && count($xml->port))
			$this->port = (int)$xml->port;
		if(!is_null($jsonObject) && isset($jsonObject->port))
			$this->port = (int)$jsonObject->port;
		if(!is_null($xml) && count($xml->passphrase))
			$this->passphrase = (string)$xml->passphrase;
		if(!is_null($jsonObject) && isset($jsonObject->passphrase))
			$this->passphrase = (string)$jsonObject->passphrase;
		if(!is_null($xml) && count($xml->asperaPublicKey))
			$this->asperaPublicKey = (string)$xml->asperaPublicKey;
		if(!is_null($jsonObject) && isset($jsonObject->asperaPublicKey))
			$this->asperaPublicKey = (string)$jsonObject->asperaPublicKey;
		if(!is_null($xml) && count($xml->asperaPrivateKey))
			$this->asperaPrivateKey = (string)$xml->asperaPrivateKey;
		if(!is_null($jsonObject) && isset($jsonObject->asperaPrivateKey))
			$this->asperaPrivateKey = (string)$jsonObject->asperaPrivateKey;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPass = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seriesChannel = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seriesPrimaryCategory = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $seriesAdditionalCategories;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seasonNumber = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seasonSynopsis = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $seasonTuneInInformation = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $videoMediaType = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $disableEpisodeNumberCustomValidation = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $asperaPass = null;

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
	public $passphrase = null;

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


}

