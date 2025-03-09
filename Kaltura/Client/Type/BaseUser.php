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
class Kaltura_Client_Type_BaseUser extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseUser';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->screenName))
			$this->screenName = (string)$xml->screenName;
		if(!is_null($jsonObject) && isset($jsonObject->screenName))
			$this->screenName = (string)$jsonObject->screenName;
		if(!is_null($xml) && count($xml->fullName))
			$this->fullName = (string)$xml->fullName;
		if(!is_null($jsonObject) && isset($jsonObject->fullName))
			$this->fullName = (string)$jsonObject->fullName;
		if(!is_null($xml) && count($xml->email))
			$this->email = (string)$xml->email;
		if(!is_null($jsonObject) && isset($jsonObject->email))
			$this->email = (string)$jsonObject->email;
		if(!is_null($xml) && count($xml->country))
			$this->country = (string)$xml->country;
		if(!is_null($jsonObject) && isset($jsonObject->country))
			$this->country = (string)$jsonObject->country;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->city))
			$this->city = (string)$xml->city;
		if(!is_null($jsonObject) && isset($jsonObject->city))
			$this->city = (string)$jsonObject->city;
		if(!is_null($xml) && count($xml->zip))
			$this->zip = (string)$xml->zip;
		if(!is_null($jsonObject) && isset($jsonObject->zip))
			$this->zip = (string)$jsonObject->zip;
		if(!is_null($xml) && count($xml->thumbnailUrl))
			$this->thumbnailUrl = (string)$xml->thumbnailUrl;
		if(!is_null($jsonObject) && isset($jsonObject->thumbnailUrl))
			$this->thumbnailUrl = (string)$jsonObject->thumbnailUrl;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->adminTags))
			$this->adminTags = (string)$xml->adminTags;
		if(!is_null($jsonObject) && isset($jsonObject->adminTags))
			$this->adminTags = (string)$jsonObject->adminTags;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(!is_null($jsonObject) && isset($jsonObject->partnerData))
			$this->partnerData = (string)$jsonObject->partnerData;
		if(!is_null($xml) && count($xml->indexedPartnerDataInt))
			$this->indexedPartnerDataInt = (int)$xml->indexedPartnerDataInt;
		if(!is_null($jsonObject) && isset($jsonObject->indexedPartnerDataInt))
			$this->indexedPartnerDataInt = (int)$jsonObject->indexedPartnerDataInt;
		if(!is_null($xml) && count($xml->indexedPartnerDataString))
			$this->indexedPartnerDataString = (string)$xml->indexedPartnerDataString;
		if(!is_null($jsonObject) && isset($jsonObject->indexedPartnerDataString))
			$this->indexedPartnerDataString = (string)$jsonObject->indexedPartnerDataString;
		if(!is_null($xml) && count($xml->storageSize))
			$this->storageSize = (int)$xml->storageSize;
		if(!is_null($jsonObject) && isset($jsonObject->storageSize))
			$this->storageSize = (int)$jsonObject->storageSize;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->lastLoginTime))
			$this->lastLoginTime = (int)$xml->lastLoginTime;
		if(!is_null($jsonObject) && isset($jsonObject->lastLoginTime))
			$this->lastLoginTime = (int)$jsonObject->lastLoginTime;
		if(!is_null($xml) && count($xml->statusUpdatedAt))
			$this->statusUpdatedAt = (int)$xml->statusUpdatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->statusUpdatedAt))
			$this->statusUpdatedAt = (int)$jsonObject->statusUpdatedAt;
		if(!is_null($xml) && count($xml->deletedAt))
			$this->deletedAt = (int)$xml->deletedAt;
		if(!is_null($jsonObject) && isset($jsonObject->deletedAt))
			$this->deletedAt = (int)$jsonObject->deletedAt;
		if(!is_null($xml) && count($xml->allowedPartnerIds))
			$this->allowedPartnerIds = (string)$xml->allowedPartnerIds;
		if(!is_null($jsonObject) && isset($jsonObject->allowedPartnerIds))
			$this->allowedPartnerIds = (string)$jsonObject->allowedPartnerIds;
		if(!is_null($xml) && count($xml->allowedPartnerPackages))
			$this->allowedPartnerPackages = (string)$xml->allowedPartnerPackages;
		if(!is_null($jsonObject) && isset($jsonObject->allowedPartnerPackages))
			$this->allowedPartnerPackages = (string)$jsonObject->allowedPartnerPackages;
		if(!is_null($xml) && count($xml->userMode))
			$this->userMode = (int)$xml->userMode;
		if(!is_null($jsonObject) && isset($jsonObject->userMode))
			$this->userMode = (int)$jsonObject->userMode;
		if(!is_null($xml) && count($xml->capabilities))
		{
			if(empty($xml->capabilities))
				$this->capabilities = array();
			else
				$this->capabilities = Kaltura_Client_ParseUtils::unmarshalArray($xml->capabilities, "KalturaUserCapability");
		}
		if(!is_null($jsonObject) && isset($jsonObject->capabilities))
		{
			if(empty($jsonObject->capabilities))
				$this->capabilities = array();
			else
				$this->capabilities = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->capabilities, "KalturaUserCapability");
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $screenName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $country = null;

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
	public $city = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zip = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Admin tags can be updated only by using an admin session
	 *
	 * @var string
	 */
	public $adminTags = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_UserStatus
	 */
	public $status = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Can be used to store various partner related data as a string
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $indexedPartnerDataInt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $indexedPartnerDataString = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $storageSize = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_LanguageCode
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lastLoginTime = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $statusUpdatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $deletedAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowedPartnerIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowedPartnerPackages = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_UserMode
	 */
	public $userMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_UserCapability[]
	 */
	public $capabilities;


}

