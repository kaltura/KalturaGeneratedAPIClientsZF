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
abstract class Kaltura_Client_Vendor_Type_IntegrationSetting extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaIntegrationSetting';
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
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->defaultUserId))
			$this->defaultUserId = (string)$xml->defaultUserId;
		if(!is_null($jsonObject) && isset($jsonObject->defaultUserId))
			$this->defaultUserId = (string)$jsonObject->defaultUserId;
		if(!is_null($xml) && count($xml->accountId))
			$this->accountId = (string)$xml->accountId;
		if(!is_null($jsonObject) && isset($jsonObject->accountId))
			$this->accountId = (string)$jsonObject->accountId;
		if(!is_null($xml) && count($xml->createUserIfNotExist))
			$this->createUserIfNotExist = (int)$xml->createUserIfNotExist;
		if(!is_null($jsonObject) && isset($jsonObject->createUserIfNotExist))
			$this->createUserIfNotExist = (int)$jsonObject->createUserIfNotExist;
		if(!is_null($xml) && count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileId))
			$this->conversionProfileId = (int)$jsonObject->conversionProfileId;
		if(!is_null($xml) && count($xml->handleParticipantsMode))
			$this->handleParticipantsMode = (int)$xml->handleParticipantsMode;
		if(!is_null($jsonObject) && isset($jsonObject->handleParticipantsMode))
			$this->handleParticipantsMode = (int)$jsonObject->handleParticipantsMode;
		if(!is_null($xml) && count($xml->deletionPolicy))
			$this->deletionPolicy = (int)$xml->deletionPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->deletionPolicy))
			$this->deletionPolicy = (int)$jsonObject->deletionPolicy;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (string)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (string)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (string)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (string)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->enableMeetingUpload))
			$this->enableMeetingUpload = (int)$xml->enableMeetingUpload;
		if(!is_null($jsonObject) && isset($jsonObject->enableMeetingUpload))
			$this->enableMeetingUpload = (int)$jsonObject->enableMeetingUpload;
		if(!is_null($xml) && count($xml->enableMeetingChat))
			$this->enableMeetingChat = (int)$xml->enableMeetingChat;
		if(!is_null($jsonObject) && isset($jsonObject->enableMeetingChat))
			$this->enableMeetingChat = (int)$jsonObject->enableMeetingChat;
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
	 * @var Kaltura_Client_Vendor_Enum_VendorIntegrationStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultUserId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $accountId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $createUserIfNotExist = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Vendor_Enum_HandleParticipantsMode
	 */
	public $handleParticipantsMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $deletionPolicy = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $updatedAt = null;

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
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableMeetingUpload = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableMeetingChat = null;


}

