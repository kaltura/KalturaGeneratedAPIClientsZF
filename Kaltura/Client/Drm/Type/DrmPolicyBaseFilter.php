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
abstract class Kaltura_Client_Drm_Type_DrmPolicyBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDrmPolicyBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdIn))
			$this->partnerIdIn = (string)$jsonObject->partnerIdIn;
		if(!is_null($xml) && count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(!is_null($jsonObject) && isset($jsonObject->nameLike))
			$this->nameLike = (string)$jsonObject->nameLike;
		if(!is_null($xml) && count($xml->systemNameLike))
			$this->systemNameLike = (string)$xml->systemNameLike;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameLike))
			$this->systemNameLike = (string)$jsonObject->systemNameLike;
		if(!is_null($xml) && count($xml->providerEqual))
			$this->providerEqual = (string)$xml->providerEqual;
		if(!is_null($jsonObject) && isset($jsonObject->providerEqual))
			$this->providerEqual = (string)$jsonObject->providerEqual;
		if(!is_null($xml) && count($xml->providerIn))
			$this->providerIn = (string)$xml->providerIn;
		if(!is_null($jsonObject) && isset($jsonObject->providerIn))
			$this->providerIn = (string)$jsonObject->providerIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->scenarioEqual))
			$this->scenarioEqual = (string)$xml->scenarioEqual;
		if(!is_null($jsonObject) && isset($jsonObject->scenarioEqual))
			$this->scenarioEqual = (string)$jsonObject->scenarioEqual;
		if(!is_null($xml) && count($xml->scenarioIn))
			$this->scenarioIn = (string)$xml->scenarioIn;
		if(!is_null($jsonObject) && isset($jsonObject->scenarioIn))
			$this->scenarioIn = (string)$jsonObject->scenarioIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameLike = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmProviderType
	 */
	public $providerEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmPolicyStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmLicenseScenario
	 */
	public $scenarioEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $scenarioIn = null;


}

