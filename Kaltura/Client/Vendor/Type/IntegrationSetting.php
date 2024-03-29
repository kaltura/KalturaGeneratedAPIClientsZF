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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (int)$xml->id;
		if(count($xml->status))
			$this->status = (int)$xml->status;
		if(count($xml->defaultUserId))
			$this->defaultUserId = (string)$xml->defaultUserId;
		if(count($xml->accountId))
			$this->accountId = (string)$xml->accountId;
		if(count($xml->createUserIfNotExist))
			$this->createUserIfNotExist = (int)$xml->createUserIfNotExist;
		if(count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(count($xml->handleParticipantsMode))
			$this->handleParticipantsMode = (int)$xml->handleParticipantsMode;
		if(count($xml->deletionPolicy))
			$this->deletionPolicy = (int)$xml->deletionPolicy;
		if(count($xml->createdAt))
			$this->createdAt = (string)$xml->createdAt;
		if(count($xml->updatedAt))
			$this->updatedAt = (string)$xml->updatedAt;
		if(count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(count($xml->enableMeetingUpload))
			$this->enableMeetingUpload = (int)$xml->enableMeetingUpload;
		if(count($xml->enableMeetingChat))
			$this->enableMeetingChat = (int)$xml->enableMeetingChat;
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

