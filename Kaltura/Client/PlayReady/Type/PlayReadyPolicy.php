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
class Kaltura_Client_PlayReady_Type_PlayReadyPolicy extends Kaltura_Client_Drm_Type_DrmPolicy
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayReadyPolicy';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->gracePeriod))
			$this->gracePeriod = (int)$xml->gracePeriod;
		if(!is_null($jsonObject) && isset($jsonObject->gracePeriod))
			$this->gracePeriod = (int)$jsonObject->gracePeriod;
		if(!is_null($xml) && count($xml->licenseRemovalPolicy))
			$this->licenseRemovalPolicy = (int)$xml->licenseRemovalPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->licenseRemovalPolicy))
			$this->licenseRemovalPolicy = (int)$jsonObject->licenseRemovalPolicy;
		if(!is_null($xml) && count($xml->licenseRemovalDuration))
			$this->licenseRemovalDuration = (int)$xml->licenseRemovalDuration;
		if(!is_null($jsonObject) && isset($jsonObject->licenseRemovalDuration))
			$this->licenseRemovalDuration = (int)$jsonObject->licenseRemovalDuration;
		if(!is_null($xml) && count($xml->minSecurityLevel))
			$this->minSecurityLevel = (int)$xml->minSecurityLevel;
		if(!is_null($jsonObject) && isset($jsonObject->minSecurityLevel))
			$this->minSecurityLevel = (int)$jsonObject->minSecurityLevel;
		if(!is_null($xml) && count($xml->rights))
		{
			if(empty($xml->rights))
				$this->rights = array();
			else
				$this->rights = Kaltura_Client_ParseUtils::unmarshalArray($xml->rights, "KalturaPlayReadyRight");
		}
		if(!is_null($jsonObject) && isset($jsonObject->rights))
		{
			if(empty($jsonObject->rights))
				$this->rights = array();
			else
				$this->rights = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->rights, "KalturaPlayReadyRight");
		}
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $gracePeriod = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_PlayReady_Enum_PlayReadyLicenseRemovalPolicy
	 */
	public $licenseRemovalPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $licenseRemovalDuration = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_PlayReady_Enum_PlayReadyMinimumLicenseSecurityLevel
	 */
	public $minSecurityLevel = null;

	/**
	 * 
	 *
	 * @var array of KalturaPlayReadyRight
	 */
	public $rights;


}

