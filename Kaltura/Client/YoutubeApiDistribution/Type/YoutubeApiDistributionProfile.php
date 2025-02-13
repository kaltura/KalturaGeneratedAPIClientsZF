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
class Kaltura_Client_YoutubeApiDistribution_Type_YoutubeApiDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaYoutubeApiDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->defaultCategory))
			$this->defaultCategory = (int)$xml->defaultCategory;
		if(!is_null($jsonObject) && isset($jsonObject->defaultCategory))
			$this->defaultCategory = (int)$jsonObject->defaultCategory;
		if(!is_null($xml) && count($xml->allowComments))
			$this->allowComments = (string)$xml->allowComments;
		if(!is_null($jsonObject) && isset($jsonObject->allowComments))
			$this->allowComments = (string)$jsonObject->allowComments;
		if(!is_null($xml) && count($xml->allowEmbedding))
			$this->allowEmbedding = (string)$xml->allowEmbedding;
		if(!is_null($jsonObject) && isset($jsonObject->allowEmbedding))
			$this->allowEmbedding = (string)$jsonObject->allowEmbedding;
		if(!is_null($xml) && count($xml->allowRatings))
			$this->allowRatings = (string)$xml->allowRatings;
		if(!is_null($jsonObject) && isset($jsonObject->allowRatings))
			$this->allowRatings = (string)$jsonObject->allowRatings;
		if(!is_null($xml) && count($xml->allowResponses))
			$this->allowResponses = (string)$xml->allowResponses;
		if(!is_null($jsonObject) && isset($jsonObject->allowResponses))
			$this->allowResponses = (string)$jsonObject->allowResponses;
		if(!is_null($xml) && count($xml->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$xml->apiAuthorizeUrl;
		if(!is_null($jsonObject) && isset($jsonObject->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$jsonObject->apiAuthorizeUrl;
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
		if(!is_null($xml) && count($xml->assumeSuccess))
		{
			if(!empty($xml->assumeSuccess) && ((int) $xml->assumeSuccess === 1 || strtolower((string)$xml->assumeSuccess) === 'true'))
				$this->assumeSuccess = true;
			else
				$this->assumeSuccess = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->assumeSuccess))
		{
			if(!empty($jsonObject->assumeSuccess) && ((int) $jsonObject->assumeSuccess === 1 || strtolower((string)$jsonObject->assumeSuccess) === 'true'))
				$this->assumeSuccess = true;
			else
				$this->assumeSuccess = false;
		}
		if(!is_null($xml) && count($xml->privacyStatus))
			$this->privacyStatus = (string)$xml->privacyStatus;
		if(!is_null($jsonObject) && isset($jsonObject->privacyStatus))
			$this->privacyStatus = (string)$jsonObject->privacyStatus;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defaultCategory = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowComments = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowEmbedding = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowRatings = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowResponses = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $apiAuthorizeUrl = null;

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
	 * @var bool
	 */
	public $assumeSuccess = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privacyStatus = null;


}

