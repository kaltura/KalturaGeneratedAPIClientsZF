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
class Kaltura_Client_MetroPcsDistribution_Type_MetroPcsDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetroPcsDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->ftpHost))
			$this->ftpHost = (string)$jsonObject->ftpHost;
		if(!is_null($xml) && count($xml->ftpLogin))
			$this->ftpLogin = (string)$xml->ftpLogin;
		if(!is_null($jsonObject) && isset($jsonObject->ftpLogin))
			$this->ftpLogin = (string)$jsonObject->ftpLogin;
		if(!is_null($xml) && count($xml->ftpPass))
			$this->ftpPass = (string)$xml->ftpPass;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPass))
			$this->ftpPass = (string)$jsonObject->ftpPass;
		if(!is_null($xml) && count($xml->ftpPath))
			$this->ftpPath = (string)$xml->ftpPath;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPath))
			$this->ftpPath = (string)$jsonObject->ftpPath;
		if(!is_null($xml) && count($xml->providerName))
			$this->providerName = (string)$xml->providerName;
		if(!is_null($jsonObject) && isset($jsonObject->providerName))
			$this->providerName = (string)$jsonObject->providerName;
		if(!is_null($xml) && count($xml->providerId))
			$this->providerId = (string)$xml->providerId;
		if(!is_null($jsonObject) && isset($jsonObject->providerId))
			$this->providerId = (string)$jsonObject->providerId;
		if(!is_null($xml) && count($xml->copyright))
			$this->copyright = (string)$xml->copyright;
		if(!is_null($jsonObject) && isset($jsonObject->copyright))
			$this->copyright = (string)$jsonObject->copyright;
		if(!is_null($xml) && count($xml->entitlements))
			$this->entitlements = (string)$xml->entitlements;
		if(!is_null($jsonObject) && isset($jsonObject->entitlements))
			$this->entitlements = (string)$jsonObject->entitlements;
		if(!is_null($xml) && count($xml->rating))
			$this->rating = (string)$xml->rating;
		if(!is_null($jsonObject) && isset($jsonObject->rating))
			$this->rating = (string)$jsonObject->rating;
		if(!is_null($xml) && count($xml->itemType))
			$this->itemType = (string)$xml->itemType;
		if(!is_null($jsonObject) && isset($jsonObject->itemType))
			$this->itemType = (string)$jsonObject->itemType;
	}
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
	public $ftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPass = null;

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
	public $providerName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $copyright = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitlements = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rating = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemType = null;


}

