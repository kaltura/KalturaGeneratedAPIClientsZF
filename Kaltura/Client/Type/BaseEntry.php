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
class Kaltura_Client_Type_BaseEntry extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseEntry';
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
		if(!is_null($xml) && count($xml->name))
		{
			if(isset($xml->name->item) && count($xml->name->item))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->name, '');
			else
				$this->name = (string)$xml->name;
		}
		if(!is_null($jsonObject) && isset($jsonObject->name))
		{
			if(is_array($jsonObject->name))
				$this->multiLingual_name = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->name, '');
			else
				$this->name = (string)$jsonObject->name;
		}
		if(!is_null($xml) && count($xml->multiLingual_name))
		{
			if(empty($xml->multiLingual_name))
				$this->multiLingual_name = array();
			else
				$this->multiLingual_name = Kaltura_Client_ParseUtils::unmarshalArray($xml->multiLingual_name, "KalturaMultiLingualString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multiLingual_name))
		{
			if(empty($jsonObject->multiLingual_name))
				$this->multiLingual_name = array();
			else
				$this->multiLingual_name = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multiLingual_name, "KalturaMultiLingualString");
		}
		if(!is_null($xml) && count($xml->description))
		{
			if(isset($xml->description->item) && count($xml->description->item))
				$this->multiLingual_description = Kaltura_Client_ParseUtils::unmarshalArray($xml->description, '');
			else
				$this->description = (string)$xml->description;
		}
		if(!is_null($jsonObject) && isset($jsonObject->description))
		{
			if(is_array($jsonObject->description))
				$this->multiLingual_description = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->description, '');
			else
				$this->description = (string)$jsonObject->description;
		}
		if(!is_null($xml) && count($xml->multiLingual_description))
		{
			if(empty($xml->multiLingual_description))
				$this->multiLingual_description = array();
			else
				$this->multiLingual_description = Kaltura_Client_ParseUtils::unmarshalArray($xml->multiLingual_description, "KalturaMultiLingualString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multiLingual_description))
		{
			if(empty($jsonObject->multiLingual_description))
				$this->multiLingual_description = array();
			else
				$this->multiLingual_description = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multiLingual_description, "KalturaMultiLingualString");
		}
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->creatorId))
			$this->creatorId = (string)$xml->creatorId;
		if(!is_null($jsonObject) && isset($jsonObject->creatorId))
			$this->creatorId = (string)$jsonObject->creatorId;
		if(!is_null($xml) && count($xml->tags))
		{
			if(isset($xml->tags->item) && count($xml->tags->item))
				$this->multiLingual_tags = Kaltura_Client_ParseUtils::unmarshalArray($xml->tags, '');
			else
				$this->tags = (string)$xml->tags;
		}
		if(!is_null($jsonObject) && isset($jsonObject->tags))
		{
			if(is_array($jsonObject->tags))
				$this->multiLingual_tags = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->tags, '');
			else
				$this->tags = (string)$jsonObject->tags;
		}
		if(!is_null($xml) && count($xml->multiLingual_tags))
		{
			if(empty($xml->multiLingual_tags))
				$this->multiLingual_tags = array();
			else
				$this->multiLingual_tags = Kaltura_Client_ParseUtils::unmarshalArray($xml->multiLingual_tags, "KalturaMultiLingualString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->multiLingual_tags))
		{
			if(empty($jsonObject->multiLingual_tags))
				$this->multiLingual_tags = array();
			else
				$this->multiLingual_tags = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->multiLingual_tags, "KalturaMultiLingualString");
		}
		if(!is_null($xml) && count($xml->adminTags))
			$this->adminTags = (string)$xml->adminTags;
		if(!is_null($jsonObject) && isset($jsonObject->adminTags))
			$this->adminTags = (string)$jsonObject->adminTags;
		if(!is_null($xml) && count($xml->categories))
			$this->categories = (string)$xml->categories;
		if(!is_null($jsonObject) && isset($jsonObject->categories))
			$this->categories = (string)$jsonObject->categories;
		if(!is_null($xml) && count($xml->categoriesIds))
			$this->categoriesIds = (string)$xml->categoriesIds;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesIds))
			$this->categoriesIds = (string)$jsonObject->categoriesIds;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->moderationStatus))
			$this->moderationStatus = (int)$xml->moderationStatus;
		if(!is_null($jsonObject) && isset($jsonObject->moderationStatus))
			$this->moderationStatus = (int)$jsonObject->moderationStatus;
		if(!is_null($xml) && count($xml->moderationCount))
			$this->moderationCount = (int)$xml->moderationCount;
		if(!is_null($jsonObject) && isset($jsonObject->moderationCount))
			$this->moderationCount = (int)$jsonObject->moderationCount;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->rank))
			$this->rank = (float)$xml->rank;
		if(!is_null($jsonObject) && isset($jsonObject->rank))
			$this->rank = (float)$jsonObject->rank;
		if(!is_null($xml) && count($xml->totalRank))
			$this->totalRank = (int)$xml->totalRank;
		if(!is_null($jsonObject) && isset($jsonObject->totalRank))
			$this->totalRank = (int)$jsonObject->totalRank;
		if(!is_null($xml) && count($xml->votes))
			$this->votes = (int)$xml->votes;
		if(!is_null($jsonObject) && isset($jsonObject->votes))
			$this->votes = (int)$jsonObject->votes;
		if(!is_null($xml) && count($xml->groupId))
			$this->groupId = (int)$xml->groupId;
		if(!is_null($jsonObject) && isset($jsonObject->groupId))
			$this->groupId = (int)$jsonObject->groupId;
		if(!is_null($xml) && count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(!is_null($jsonObject) && isset($jsonObject->partnerData))
			$this->partnerData = (string)$jsonObject->partnerData;
		if(!is_null($xml) && count($xml->downloadUrl))
			$this->downloadUrl = (string)$xml->downloadUrl;
		if(!is_null($jsonObject) && isset($jsonObject->downloadUrl))
			$this->downloadUrl = (string)$jsonObject->downloadUrl;
		if(!is_null($xml) && count($xml->searchText))
			$this->searchText = (string)$xml->searchText;
		if(!is_null($jsonObject) && isset($jsonObject->searchText))
			$this->searchText = (string)$jsonObject->searchText;
		if(!is_null($xml) && count($xml->licenseType))
			$this->licenseType = (int)$xml->licenseType;
		if(!is_null($jsonObject) && isset($jsonObject->licenseType))
			$this->licenseType = (int)$jsonObject->licenseType;
		if(!is_null($xml) && count($xml->version))
			$this->version = (int)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (int)$jsonObject->version;
		if(!is_null($xml) && count($xml->thumbnailUrl))
			$this->thumbnailUrl = (string)$xml->thumbnailUrl;
		if(!is_null($jsonObject) && isset($jsonObject->thumbnailUrl))
			$this->thumbnailUrl = (string)$jsonObject->thumbnailUrl;
		if(!is_null($xml) && count($xml->accessControlId))
			$this->accessControlId = (int)$xml->accessControlId;
		if(!is_null($jsonObject) && isset($jsonObject->accessControlId))
			$this->accessControlId = (int)$jsonObject->accessControlId;
		if(!is_null($xml) && count($xml->startDate))
			$this->startDate = (int)$xml->startDate;
		if(!is_null($jsonObject) && isset($jsonObject->startDate))
			$this->startDate = (int)$jsonObject->startDate;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (int)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (int)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
		if(!is_null($xml) && count($xml->replacingEntryId))
			$this->replacingEntryId = (string)$xml->replacingEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->replacingEntryId))
			$this->replacingEntryId = (string)$jsonObject->replacingEntryId;
		if(!is_null($xml) && count($xml->replacedEntryId))
			$this->replacedEntryId = (string)$xml->replacedEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->replacedEntryId))
			$this->replacedEntryId = (string)$jsonObject->replacedEntryId;
		if(!is_null($xml) && count($xml->replacementStatus))
			$this->replacementStatus = (string)$xml->replacementStatus;
		if(!is_null($jsonObject) && isset($jsonObject->replacementStatus))
			$this->replacementStatus = (string)$jsonObject->replacementStatus;
		if(!is_null($xml) && count($xml->partnerSortValue))
			$this->partnerSortValue = (int)$xml->partnerSortValue;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValue))
			$this->partnerSortValue = (int)$jsonObject->partnerSortValue;
		if(!is_null($xml) && count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileId))
			$this->conversionProfileId = (int)$jsonObject->conversionProfileId;
		if(!is_null($xml) && count($xml->redirectEntryId))
			$this->redirectEntryId = (string)$xml->redirectEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->redirectEntryId))
			$this->redirectEntryId = (string)$jsonObject->redirectEntryId;
		if(!is_null($xml) && count($xml->rootEntryId))
			$this->rootEntryId = (string)$xml->rootEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->rootEntryId))
			$this->rootEntryId = (string)$jsonObject->rootEntryId;
		if(!is_null($xml) && count($xml->parentEntryId))
			$this->parentEntryId = (string)$xml->parentEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->parentEntryId))
			$this->parentEntryId = (string)$jsonObject->parentEntryId;
		if(!is_null($xml) && count($xml->operationAttributes))
		{
			if(empty($xml->operationAttributes))
				$this->operationAttributes = array();
			else
				$this->operationAttributes = Kaltura_Client_ParseUtils::unmarshalArray($xml->operationAttributes, "KalturaOperationAttributes");
		}
		if(!is_null($jsonObject) && isset($jsonObject->operationAttributes))
		{
			if(empty($jsonObject->operationAttributes))
				$this->operationAttributes = array();
			else
				$this->operationAttributes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->operationAttributes, "KalturaOperationAttributes");
		}
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
		if(!is_null($xml) && count($xml->capabilities))
			$this->capabilities = (string)$xml->capabilities;
		if(!is_null($jsonObject) && isset($jsonObject->capabilities))
			$this->capabilities = (string)$jsonObject->capabilities;
		if(!is_null($xml) && count($xml->templateEntryId))
			$this->templateEntryId = (string)$xml->templateEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryId))
			$this->templateEntryId = (string)$jsonObject->templateEntryId;
		if(!is_null($xml) && count($xml->displayInSearch))
			$this->displayInSearch = (int)$xml->displayInSearch;
		if(!is_null($jsonObject) && isset($jsonObject->displayInSearch))
			$this->displayInSearch = (int)$jsonObject->displayInSearch;
		if(!is_null($xml) && count($xml->application))
			$this->application = (string)$xml->application;
		if(!is_null($jsonObject) && isset($jsonObject->application))
			$this->application = (string)$jsonObject->application;
		if(!is_null($xml) && count($xml->applicationVersion))
			$this->applicationVersion = (string)$xml->applicationVersion;
		if(!is_null($jsonObject) && isset($jsonObject->applicationVersion))
			$this->applicationVersion = (string)$jsonObject->applicationVersion;
		if(!is_null($xml) && count($xml->blockAutoTranscript))
		{
			if(!empty($xml->blockAutoTranscript) && ((int) $xml->blockAutoTranscript === 1 || strtolower((string)$xml->blockAutoTranscript) === 'true'))
				$this->blockAutoTranscript = true;
			else
				$this->blockAutoTranscript = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->blockAutoTranscript))
		{
			if(!empty($jsonObject->blockAutoTranscript) && ((int) $jsonObject->blockAutoTranscript === 1 || strtolower((string)$jsonObject->blockAutoTranscript) === 'true'))
				$this->blockAutoTranscript = true;
			else
				$this->blockAutoTranscript = false;
		}
		if(!is_null($xml) && count($xml->defaultLanguage))
			$this->defaultLanguage = (string)$xml->defaultLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->defaultLanguage))
			$this->defaultLanguage = (string)$jsonObject->defaultLanguage;
		if(!is_null($xml) && count($xml->responseLanguage))
			$this->responseLanguage = (string)$xml->responseLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->responseLanguage))
			$this->responseLanguage = (string)$jsonObject->responseLanguage;
	}
	/**
	 * Auto generated 10 characters alphanumeric string
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Entry name (Min 1 chars)
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Entry name (Min 1 chars)
	 *
	 * @var Kaltura_Client_Type_MultiLingualString[]
	 */
	public $multiLingual_name;

	/**
	 * Entry description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Entry description
	 *
	 * @var Kaltura_Client_Type_MultiLingualString[]
	 */
	public $multiLingual_description;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The ID of the user who is the owner of this entry
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * The ID of the user who created this entry
	 *
	 * @var string
	 * @insertonly
	 */
	public $creatorId = null;

	/**
	 * Entry tags
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Entry tags
	 *
	 * @var Kaltura_Client_Type_MultiLingualString[]
	 */
	public $multiLingual_tags;

	/**
	 * Entry admin tags can be updated only by administrators
	 *
	 * @var string
	 */
	public $adminTags = null;

	/**
	 * Comma separated list of full names of categories to which this entry belongs. Only categories that don't have entitlement (privacy context) are listed, to retrieve the full list of categories, use the categoryEntry.list action.
	 *
	 * @var string
	 */
	public $categories = null;

	/**
	 * Comma separated list of ids of categories to which this entry belongs. Only categories that don't have entitlement (privacy context) are listed, to retrieve the full list of categories, use the categoryEntry.list action.
	 *
	 * @var string
	 */
	public $categoriesIds = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EntryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Entry moderation status
	 *
	 * @var Kaltura_Client_Enum_EntryModerationStatus
	 * @readonly
	 */
	public $moderationStatus = null;

	/**
	 * Number of moderation requests waiting for this entry
	 *
	 * @var int
	 * @readonly
	 */
	public $moderationCount = null;

	/**
	 * The type of the entry, this is auto filled by the derived entry object
	 *
	 * @var Kaltura_Client_Enum_EntryType
	 */
	public $type = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Entry update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * The calculated average rank. rank = totalRank / votes
	 *
	 * @var float
	 * @readonly
	 */
	public $rank = null;

	/**
	 * The sum of all rank values submitted to the baseEntry.anonymousRank action
	 *
	 * @var int
	 * @readonly
	 */
	public $totalRank = null;

	/**
	 * A count of all requests made to the baseEntry.anonymousRank action
	 *
	 * @var int
	 * @readonly
	 */
	public $votes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $groupId = null;

	/**
	 * Can be used to store various partner related data as a string
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Download URL for the entry
	 *
	 * @var string
	 * @readonly
	 */
	public $downloadUrl = null;

	/**
	 * Indexed search text for full text search
	 *
	 * @var string
	 * @readonly
	 */
	public $searchText = null;

	/**
	 * License type used for this entry
	 *
	 * @var Kaltura_Client_Enum_LicenseType
	 */
	public $licenseType = null;

	/**
	 * Version of the entry data
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * Thumbnail URL
	 *
	 * @var string
	 * @readonly
	 */
	public $thumbnailUrl = null;

	/**
	 * The Access Control ID assigned to this entry (null when not set, send -1 to remove)
	 *
	 * @var int
	 */
	public $accessControlId = null;

	/**
	 * Entry scheduling start date (null when not set, send -1 to remove)
	 *
	 * @var int
	 */
	public $startDate = null;

	/**
	 * Entry scheduling end date (null when not set, send -1 to remove)
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * Entry external reference id
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * ID of temporary entry that will replace this entry when it's approved and ready for replacement
	 *
	 * @var string
	 * @readonly
	 */
	public $replacingEntryId = null;

	/**
	 * ID of the entry that will be replaced when the replacement approved and this entry is ready
	 *
	 * @var string
	 * @readonly
	 */
	public $replacedEntryId = null;

	/**
	 * Status of the replacement readiness and approval
	 *
	 * @var Kaltura_Client_Enum_EntryReplacementStatus
	 * @readonly
	 */
	public $replacementStatus = null;

	/**
	 * Can be used to store various partner related data as a numeric value
	 *
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * Override the default ingestion profile
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * IF not empty, points to an entry ID the should replace this current entry's id.
	 *
	 * @var string
	 */
	public $redirectEntryId = null;

	/**
	 * ID of source root entry, used for clipped, skipped and cropped entries that created from another entry
	 *
	 * @var string
	 * @readonly
	 */
	public $rootEntryId = null;

	/**
	 * ID of source root entry, used for defining entires association
	 *
	 * @var string
	 */
	public $parentEntryId = null;

	/**
	 * clipping, skipping and cropping attributes that used to create this entry
	 *
	 * @var Kaltura_Client_Type_OperationAttributes[]
	 */
	public $operationAttributes;

	/**
	 * list of user ids that are entitled to edit the entry (no server enforcement) The difference between entitledUsersEdit, entitledUsersPublish and entitledUsersView is applicative only
	 *
	 * @var string
	 */
	public $entitledUsersEdit = null;

	/**
	 * list of user ids that are entitled to publish the entry (no server enforcement) The difference between entitledUsersEdit, entitledUsersPublish and entitledUsersView is applicative only
	 *
	 * @var string
	 */
	public $entitledUsersPublish = null;

	/**
	 * list of user ids that are entitled to view the entry (no server enforcement) The difference between entitledUsersEdit, entitledUsersPublish and entitledUsersView is applicative only
	 *
	 * @var string
	 */
	public $entitledUsersView = null;

	/**
	 * Comma seperated string of the capabilities of the entry. Any capability needed can be added to this list.
	 *
	 * @var string
	 * @readonly
	 */
	public $capabilities = null;

	/**
	 * Template entry id
	 *
	 * @var string
	 * @insertonly
	 */
	public $templateEntryId = null;

	/**
	 * should we display this entry in search
	 *
	 * @var Kaltura_Client_Enum_EntryDisplayInSearchType
	 */
	public $displayInSearch = null;

	/**
	 * Entry application
	 *
	 * @var Kaltura_Client_Enum_EntryApplication
	 * @insertonly
	 */
	public $application = null;

	/**
	 * Entry application version
	 *
	 * @var string
	 * @insertonly
	 */
	public $applicationVersion = null;

	/**
	 * Block auto transcript on Entry
	 *
	 * @var bool
	 */
	public $blockAutoTranscript = null;

	/**
	 * Entry's default language if the entry is multi lingual
	 *
	 * @var string
	 * @readonly
	 */
	public $defaultLanguage = null;

	/**
	 * The language in which the object is returned
	 *
	 * @var string
	 * @readonly
	 */
	public $responseLanguage = null;


}

