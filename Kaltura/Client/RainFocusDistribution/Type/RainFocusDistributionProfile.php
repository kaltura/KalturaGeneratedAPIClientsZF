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
class Kaltura_Client_RainFocusDistribution_Type_RainFocusDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaRainFocusDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->oauthTokenUrl))
			$this->oauthTokenUrl = (string)$xml->oauthTokenUrl;
		if(!is_null($jsonObject) && isset($jsonObject->oauthTokenUrl))
			$this->oauthTokenUrl = (string)$jsonObject->oauthTokenUrl;
		if(!is_null($xml) && count($xml->videoPublishEndpointUrl))
			$this->videoPublishEndpointUrl = (string)$xml->videoPublishEndpointUrl;
		if(!is_null($jsonObject) && isset($jsonObject->videoPublishEndpointUrl))
			$this->videoPublishEndpointUrl = (string)$jsonObject->videoPublishEndpointUrl;
		if(!is_null($xml) && count($xml->oauthScope))
			$this->oauthScope = (string)$xml->oauthScope;
		if(!is_null($jsonObject) && isset($jsonObject->oauthScope))
			$this->oauthScope = (string)$jsonObject->oauthScope;
		if(!is_null($xml) && count($xml->clientId))
			$this->clientId = (string)$xml->clientId;
		if(!is_null($jsonObject) && isset($jsonObject->clientId))
			$this->clientId = (string)$jsonObject->clientId;
		if(!is_null($xml) && count($xml->clientSecretPrimary))
			$this->clientSecretPrimary = (string)$xml->clientSecretPrimary;
		if(!is_null($jsonObject) && isset($jsonObject->clientSecretPrimary))
			$this->clientSecretPrimary = (string)$jsonObject->clientSecretPrimary;
		if(!is_null($xml) && count($xml->clientSecretSecondary))
			$this->clientSecretSecondary = (string)$xml->clientSecretSecondary;
		if(!is_null($jsonObject) && isset($jsonObject->clientSecretSecondary))
			$this->clientSecretSecondary = (string)$jsonObject->clientSecretSecondary;
		if(!is_null($xml) && count($xml->activeSecret))
			$this->activeSecret = (string)$xml->activeSecret;
		if(!is_null($jsonObject) && isset($jsonObject->activeSecret))
			$this->activeSecret = (string)$jsonObject->activeSecret;
		if(!is_null($xml) && count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(!is_null($jsonObject) && isset($jsonObject->mediaType))
			$this->mediaType = (int)$jsonObject->mediaType;
		if(!is_null($xml) && count($xml->playerId))
			$this->playerId = (string)$xml->playerId;
		if(!is_null($jsonObject) && isset($jsonObject->playerId))
			$this->playerId = (string)$jsonObject->playerId;
		if(!is_null($xml) && count($xml->metadataProfileId))
			$this->metadataProfileId = (string)$xml->metadataProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileId))
			$this->metadataProfileId = (string)$jsonObject->metadataProfileId;
		if(!is_null($xml) && count($xml->metadataFieldNames))
			$this->metadataFieldNames = (string)$xml->metadataFieldNames;
		if(!is_null($jsonObject) && isset($jsonObject->metadataFieldNames))
			$this->metadataFieldNames = (string)$jsonObject->metadataFieldNames;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $oauthTokenUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $videoPublishEndpointUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $oauthScope = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientSecretPrimary = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientSecretSecondary = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $activeSecret = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $playerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataFieldNames = null;


}

