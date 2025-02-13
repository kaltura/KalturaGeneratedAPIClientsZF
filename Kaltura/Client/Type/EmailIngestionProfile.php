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
class Kaltura_Client_Type_EmailIngestionProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEmailIngestionProfile';
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
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->emailAddress))
			$this->emailAddress = (string)$xml->emailAddress;
		if(!is_null($jsonObject) && isset($jsonObject->emailAddress))
			$this->emailAddress = (string)$jsonObject->emailAddress;
		if(!is_null($xml) && count($xml->mailboxId))
			$this->mailboxId = (string)$xml->mailboxId;
		if(!is_null($jsonObject) && isset($jsonObject->mailboxId))
			$this->mailboxId = (string)$jsonObject->mailboxId;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->conversionProfile2Id))
			$this->conversionProfile2Id = (int)$xml->conversionProfile2Id;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfile2Id))
			$this->conversionProfile2Id = (int)$jsonObject->conversionProfile2Id;
		if(!is_null($xml) && count($xml->moderationStatus))
			$this->moderationStatus = (int)$xml->moderationStatus;
		if(!is_null($jsonObject) && isset($jsonObject->moderationStatus))
			$this->moderationStatus = (int)$jsonObject->moderationStatus;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (string)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (string)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->defaultCategory))
			$this->defaultCategory = (string)$xml->defaultCategory;
		if(!is_null($jsonObject) && isset($jsonObject->defaultCategory))
			$this->defaultCategory = (string)$jsonObject->defaultCategory;
		if(!is_null($xml) && count($xml->defaultUserId))
			$this->defaultUserId = (string)$xml->defaultUserId;
		if(!is_null($jsonObject) && isset($jsonObject->defaultUserId))
			$this->defaultUserId = (string)$jsonObject->defaultUserId;
		if(!is_null($xml) && count($xml->defaultTags))
			$this->defaultTags = (string)$xml->defaultTags;
		if(!is_null($jsonObject) && isset($jsonObject->defaultTags))
			$this->defaultTags = (string)$jsonObject->defaultTags;
		if(!is_null($xml) && count($xml->defaultAdminTags))
			$this->defaultAdminTags = (string)$xml->defaultAdminTags;
		if(!is_null($jsonObject) && isset($jsonObject->defaultAdminTags))
			$this->defaultAdminTags = (string)$jsonObject->defaultAdminTags;
		if(!is_null($xml) && count($xml->maxAttachmentSizeKbytes))
			$this->maxAttachmentSizeKbytes = (int)$xml->maxAttachmentSizeKbytes;
		if(!is_null($jsonObject) && isset($jsonObject->maxAttachmentSizeKbytes))
			$this->maxAttachmentSizeKbytes = (int)$jsonObject->maxAttachmentSizeKbytes;
		if(!is_null($xml) && count($xml->maxAttachmentsPerMail))
			$this->maxAttachmentsPerMail = (int)$xml->maxAttachmentsPerMail;
		if(!is_null($jsonObject) && isset($jsonObject->maxAttachmentsPerMail))
			$this->maxAttachmentsPerMail = (int)$jsonObject->maxAttachmentsPerMail;
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
	 * @var string
	 */
	public $name = null;

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
	public $emailAddress = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mailboxId = null;

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
	 * @var int
	 */
	public $conversionProfile2Id = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EntryModerationStatus
	 */
	public $moderationStatus = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EmailIngestionProfileStatus
	 * @readonly
	 */
	public $status = null;

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
	 */
	public $defaultCategory = null;

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
	 */
	public $defaultTags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultAdminTags = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxAttachmentSizeKbytes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxAttachmentsPerMail = null;


}

