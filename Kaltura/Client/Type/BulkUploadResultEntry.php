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
class Kaltura_Client_Type_BulkUploadResultEntry extends Kaltura_Client_Type_BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultEntry';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->title))
			$this->title = (string)$xml->title;
		if(!is_null($jsonObject) && isset($jsonObject->title))
			$this->title = (string)$jsonObject->title;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->contentType))
			$this->contentType = (string)$xml->contentType;
		if(!is_null($jsonObject) && isset($jsonObject->contentType))
			$this->contentType = (string)$jsonObject->contentType;
		if(!is_null($xml) && count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileId))
			$this->conversionProfileId = (int)$jsonObject->conversionProfileId;
		if(!is_null($xml) && count($xml->accessControlProfileId))
			$this->accessControlProfileId = (int)$xml->accessControlProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->accessControlProfileId))
			$this->accessControlProfileId = (int)$jsonObject->accessControlProfileId;
		if(!is_null($xml) && count($xml->category))
			$this->category = (string)$xml->category;
		if(!is_null($jsonObject) && isset($jsonObject->category))
			$this->category = (string)$jsonObject->category;
		if(!is_null($xml) && count($xml->scheduleStartDate))
			$this->scheduleStartDate = (int)$xml->scheduleStartDate;
		if(!is_null($jsonObject) && isset($jsonObject->scheduleStartDate))
			$this->scheduleStartDate = (int)$jsonObject->scheduleStartDate;
		if(!is_null($xml) && count($xml->scheduleEndDate))
			$this->scheduleEndDate = (int)$xml->scheduleEndDate;
		if(!is_null($jsonObject) && isset($jsonObject->scheduleEndDate))
			$this->scheduleEndDate = (int)$jsonObject->scheduleEndDate;
		if(!is_null($xml) && count($xml->entryStatus))
			$this->entryStatus = (int)$xml->entryStatus;
		if(!is_null($jsonObject) && isset($jsonObject->entryStatus))
			$this->entryStatus = (int)$jsonObject->entryStatus;
		if(!is_null($xml) && count($xml->thumbnailUrl))
			$this->thumbnailUrl = (string)$xml->thumbnailUrl;
		if(!is_null($jsonObject) && isset($jsonObject->thumbnailUrl))
			$this->thumbnailUrl = (string)$jsonObject->thumbnailUrl;
		if(!is_null($xml) && count($xml->thumbnailSaved))
		{
			if(!empty($xml->thumbnailSaved) && ((int) $xml->thumbnailSaved === 1 || strtolower((string)$xml->thumbnailSaved) === 'true'))
				$this->thumbnailSaved = true;
			else
				$this->thumbnailSaved = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->thumbnailSaved))
		{
			if(!empty($jsonObject->thumbnailSaved) && ((int) $jsonObject->thumbnailSaved === 1 || strtolower((string)$jsonObject->thumbnailSaved) === 'true'))
				$this->thumbnailSaved = true;
			else
				$this->thumbnailSaved = false;
		}
		if(!is_null($xml) && count($xml->sshPrivateKey))
			$this->sshPrivateKey = (string)$xml->sshPrivateKey;
		if(!is_null($jsonObject) && isset($jsonObject->sshPrivateKey))
			$this->sshPrivateKey = (string)$jsonObject->sshPrivateKey;
		if(!is_null($xml) && count($xml->sshPublicKey))
			$this->sshPublicKey = (string)$xml->sshPublicKey;
		if(!is_null($jsonObject) && isset($jsonObject->sshPublicKey))
			$this->sshPublicKey = (string)$jsonObject->sshPublicKey;
		if(!is_null($xml) && count($xml->sshKeyPassphrase))
			$this->sshKeyPassphrase = (string)$xml->sshKeyPassphrase;
		if(!is_null($jsonObject) && isset($jsonObject->sshKeyPassphrase))
			$this->sshKeyPassphrase = (string)$jsonObject->sshKeyPassphrase;
		if(!is_null($xml) && count($xml->creatorId))
			$this->creatorId = (string)$xml->creatorId;
		if(!is_null($jsonObject) && isset($jsonObject->creatorId))
			$this->creatorId = (string)$jsonObject->creatorId;
		if(!is_null($xml) && count($xml->entitledUsersEdit))
			$this->entitledUsersEdit = (string)$xml->entitledUsersEdit;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersEdit))
			$this->entitledUsersEdit = (string)$jsonObject->entitledUsersEdit;
		if(!is_null($xml) && count($xml->entitledUsersPublish))
			$this->entitledUsersPublish = (string)$xml->entitledUsersPublish;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersPublish))
			$this->entitledUsersPublish = (string)$jsonObject->entitledUsersPublish;
		if(!is_null($xml) && count($xml->entitledUsersView))
			$this->entitledUsersView = (string)$xml->entitledUsersView;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersView))
			$this->entitledUsersView = (string)$jsonObject->entitledUsersView;
		if(!is_null($xml) && count($xml->ownerId))
			$this->ownerId = (string)$xml->ownerId;
		if(!is_null($jsonObject) && isset($jsonObject->ownerId))
			$this->ownerId = (string)$jsonObject->ownerId;
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
		if(!is_null($xml) && count($xml->templateEntryId))
			$this->templateEntryId = (string)$xml->templateEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryId))
			$this->templateEntryId = (string)$jsonObject->templateEntryId;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $title = null;

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
	 * 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accessControlProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $category = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $scheduleStartDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $scheduleEndDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $entryStatus = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbnailUrl = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $thumbnailSaved = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sshPrivateKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sshPublicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sshKeyPassphrase = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $creatorId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersEdit = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersPublish = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersView = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryId = null;


}

