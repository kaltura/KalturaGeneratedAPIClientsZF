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
class Kaltura_Client_FacebookDistribution_Type_FacebookDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaFacebookDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$xml->apiAuthorizeUrl;
		if(!is_null($jsonObject) && isset($jsonObject->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$jsonObject->apiAuthorizeUrl;
		if(!is_null($xml) && count($xml->pageId))
			$this->pageId = (string)$xml->pageId;
		if(!is_null($jsonObject) && isset($jsonObject->pageId))
			$this->pageId = (string)$jsonObject->pageId;
		if(!is_null($xml) && count($xml->pageAccessToken))
			$this->pageAccessToken = (string)$xml->pageAccessToken;
		if(!is_null($jsonObject) && isset($jsonObject->pageAccessToken))
			$this->pageAccessToken = (string)$jsonObject->pageAccessToken;
		if(!is_null($xml) && count($xml->userAccessToken))
			$this->userAccessToken = (string)$xml->userAccessToken;
		if(!is_null($jsonObject) && isset($jsonObject->userAccessToken))
			$this->userAccessToken = (string)$jsonObject->userAccessToken;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->permissions))
			$this->permissions = (string)$xml->permissions;
		if(!is_null($jsonObject) && isset($jsonObject->permissions))
			$this->permissions = (string)$jsonObject->permissions;
		if(!is_null($xml) && count($xml->reRequestPermissions))
			$this->reRequestPermissions = (int)$xml->reRequestPermissions;
		if(!is_null($jsonObject) && isset($jsonObject->reRequestPermissions))
			$this->reRequestPermissions = (int)$jsonObject->reRequestPermissions;
	}
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
	public $pageId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pageAccessToken = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userAccessToken = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissions = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $reRequestPermissions = null;


}

