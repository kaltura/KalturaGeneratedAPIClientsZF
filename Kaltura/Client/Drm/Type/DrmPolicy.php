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
class Kaltura_Client_Drm_Type_DrmPolicy extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDrmPolicy';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->provider))
			$this->provider = (string)$xml->provider;
		if(!is_null($jsonObject) && isset($jsonObject->provider))
			$this->provider = (string)$jsonObject->provider;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->scenario))
			$this->scenario = (string)$xml->scenario;
		if(!is_null($jsonObject) && isset($jsonObject->scenario))
			$this->scenario = (string)$jsonObject->scenario;
		if(!is_null($xml) && count($xml->licenseType))
			$this->licenseType = (string)$xml->licenseType;
		if(!is_null($jsonObject) && isset($jsonObject->licenseType))
			$this->licenseType = (string)$jsonObject->licenseType;
		if(!is_null($xml) && count($xml->licenseExpirationPolicy))
			$this->licenseExpirationPolicy = (int)$xml->licenseExpirationPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->licenseExpirationPolicy))
			$this->licenseExpirationPolicy = (int)$jsonObject->licenseExpirationPolicy;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (int)$jsonObject->duration;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->licenseParams))
		{
			if(empty($xml->licenseParams))
				$this->licenseParams = array();
			else
				$this->licenseParams = Kaltura_Client_ParseUtils::unmarshalArray($xml->licenseParams, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->licenseParams))
		{
			if(empty($jsonObject->licenseParams))
				$this->licenseParams = array();
			else
				$this->licenseParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->licenseParams, "KalturaKeyValue");
		}
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmProviderType
	 */
	public $provider = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmPolicyStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmLicenseScenario
	 */
	public $scenario = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmLicenseType
	 */
	public $licenseType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Drm_Enum_DrmLicenseExpirationPolicy
	 */
	public $licenseExpirationPolicy = null;

	/**
	 * Duration in days the license is effective
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $licenseParams;


}

