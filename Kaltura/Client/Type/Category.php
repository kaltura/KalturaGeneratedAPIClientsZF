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
class Kaltura_Client_Type_Category extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategory';
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
		if(!is_null($xml) && count($xml->parentId))
			$this->parentId = (int)$xml->parentId;
		if(!is_null($jsonObject) && isset($jsonObject->parentId))
			$this->parentId = (int)$jsonObject->parentId;
		if(!is_null($xml) && count($xml->depth))
			$this->depth = (int)$xml->depth;
		if(!is_null($jsonObject) && isset($jsonObject->depth))
			$this->depth = (int)$jsonObject->depth;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->fullName))
			$this->fullName = (string)$xml->fullName;
		if(!is_null($jsonObject) && isset($jsonObject->fullName))
			$this->fullName = (string)$jsonObject->fullName;
		if(!is_null($xml) && count($xml->fullIds))
			$this->fullIds = (string)$xml->fullIds;
		if(!is_null($jsonObject) && isset($jsonObject->fullIds))
			$this->fullIds = (string)$jsonObject->fullIds;
		if(!is_null($xml) && count($xml->entriesCount))
			$this->entriesCount = (int)$xml->entriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->entriesCount))
			$this->entriesCount = (int)$jsonObject->entriesCount;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->appearInList))
			$this->appearInList = (int)$xml->appearInList;
		if(!is_null($jsonObject) && isset($jsonObject->appearInList))
			$this->appearInList = (int)$jsonObject->appearInList;
		if(!is_null($xml) && count($xml->privacy))
			$this->privacy = (int)$xml->privacy;
		if(!is_null($jsonObject) && isset($jsonObject->privacy))
			$this->privacy = (int)$jsonObject->privacy;
		if(!is_null($xml) && count($xml->inheritanceType))
			$this->inheritanceType = (int)$xml->inheritanceType;
		if(!is_null($jsonObject) && isset($jsonObject->inheritanceType))
			$this->inheritanceType = (int)$jsonObject->inheritanceType;
		if(!is_null($xml) && count($xml->userJoinPolicy))
			$this->userJoinPolicy = (int)$xml->userJoinPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->userJoinPolicy))
			$this->userJoinPolicy = (int)$jsonObject->userJoinPolicy;
		if(!is_null($xml) && count($xml->defaultPermissionLevel))
			$this->defaultPermissionLevel = (int)$xml->defaultPermissionLevel;
		if(!is_null($jsonObject) && isset($jsonObject->defaultPermissionLevel))
			$this->defaultPermissionLevel = (int)$jsonObject->defaultPermissionLevel;
		if(!is_null($xml) && count($xml->owner))
			$this->owner = (string)$xml->owner;
		if(!is_null($jsonObject) && isset($jsonObject->owner))
			$this->owner = (string)$jsonObject->owner;
		if(!is_null($xml) && count($xml->directEntriesCount))
			$this->directEntriesCount = (int)$xml->directEntriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->directEntriesCount))
			$this->directEntriesCount = (int)$jsonObject->directEntriesCount;
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
		if(!is_null($xml) && count($xml->contributionPolicy))
			$this->contributionPolicy = (int)$xml->contributionPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->contributionPolicy))
			$this->contributionPolicy = (int)$jsonObject->contributionPolicy;
		if(!is_null($xml) && count($xml->membersCount))
			$this->membersCount = (int)$xml->membersCount;
		if(!is_null($jsonObject) && isset($jsonObject->membersCount))
			$this->membersCount = (int)$jsonObject->membersCount;
		if(!is_null($xml) && count($xml->pendingMembersCount))
			$this->pendingMembersCount = (int)$xml->pendingMembersCount;
		if(!is_null($jsonObject) && isset($jsonObject->pendingMembersCount))
			$this->pendingMembersCount = (int)$jsonObject->pendingMembersCount;
		if(!is_null($xml) && count($xml->privacyContext))
			$this->privacyContext = (string)$xml->privacyContext;
		if(!is_null($jsonObject) && isset($jsonObject->privacyContext))
			$this->privacyContext = (string)$jsonObject->privacyContext;
		if(!is_null($xml) && count($xml->privacyContexts))
			$this->privacyContexts = (string)$xml->privacyContexts;
		if(!is_null($jsonObject) && isset($jsonObject->privacyContexts))
			$this->privacyContexts = (string)$jsonObject->privacyContexts;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->inheritedParentId))
			$this->inheritedParentId = (int)$xml->inheritedParentId;
		if(!is_null($jsonObject) && isset($jsonObject->inheritedParentId))
			$this->inheritedParentId = (int)$jsonObject->inheritedParentId;
		if(!is_null($xml) && count($xml->partnerSortValue))
			$this->partnerSortValue = (int)$xml->partnerSortValue;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValue))
			$this->partnerSortValue = (int)$jsonObject->partnerSortValue;
		if(!is_null($xml) && count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(!is_null($jsonObject) && isset($jsonObject->partnerData))
			$this->partnerData = (string)$jsonObject->partnerData;
		if(!is_null($xml) && count($xml->defaultOrderBy))
			$this->defaultOrderBy = (string)$xml->defaultOrderBy;
		if(!is_null($jsonObject) && isset($jsonObject->defaultOrderBy))
			$this->defaultOrderBy = (string)$jsonObject->defaultOrderBy;
		if(!is_null($xml) && count($xml->directSubCategoriesCount))
			$this->directSubCategoriesCount = (int)$xml->directSubCategoriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->directSubCategoriesCount))
			$this->directSubCategoriesCount = (int)$jsonObject->directSubCategoriesCount;
		if(!is_null($xml) && count($xml->moderation))
			$this->moderation = (int)$xml->moderation;
		if(!is_null($jsonObject) && isset($jsonObject->moderation))
			$this->moderation = (int)$jsonObject->moderation;
		if(!is_null($xml) && count($xml->pendingEntriesCount))
			$this->pendingEntriesCount = (int)$xml->pendingEntriesCount;
		if(!is_null($jsonObject) && isset($jsonObject->pendingEntriesCount))
			$this->pendingEntriesCount = (int)$jsonObject->pendingEntriesCount;
		if(!is_null($xml) && count($xml->isAggregationCategory))
			$this->isAggregationCategory = (int)$xml->isAggregationCategory;
		if(!is_null($jsonObject) && isset($jsonObject->isAggregationCategory))
			$this->isAggregationCategory = (int)$jsonObject->isAggregationCategory;
		if(!is_null($xml) && count($xml->aggregationCategories))
			$this->aggregationCategories = (string)$xml->aggregationCategories;
		if(!is_null($jsonObject) && isset($jsonObject->aggregationCategories))
			$this->aggregationCategories = (string)$jsonObject->aggregationCategories;
		if(!is_null($xml) && count($xml->adminTags))
			$this->adminTags = (string)$xml->adminTags;
		if(!is_null($jsonObject) && isset($jsonObject->adminTags))
			$this->adminTags = (string)$jsonObject->adminTags;
	}
	/**
	 * The id of the Category
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $parentId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $depth = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The name of the Category. 
	 * 	 The following characters are not allowed: '<', '>', ','
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * The full name of the Category
	 *
	 * @var string
	 * @readonly
	 */
	public $fullName = null;

	/**
	 * The full ids of the Category
	 *
	 * @var string
	 * @readonly
	 */
	public $fullIds = null;

	/**
	 * Number of entries in this Category (including child categories)
	 *
	 * @var int
	 * @readonly
	 */
	public $entriesCount = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Category description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Category tags
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * If category will be returned for list action.
	 *
	 * @var Kaltura_Client_Enum_AppearInListType
	 */
	public $appearInList = null;

	/**
	 * defines the privacy of the entries that assigned to this category
	 *
	 * @var Kaltura_Client_Enum_PrivacyType
	 */
	public $privacy = null;

	/**
	 * If Category members are inherited from parent category or set manualy.
	 *
	 * @var Kaltura_Client_Enum_InheritanceType
	 */
	public $inheritanceType = null;

	/**
	 * Who can ask to join this category
	 *
	 * @var Kaltura_Client_Enum_UserJoinPolicyType
	 * @readonly
	 */
	public $userJoinPolicy = null;

	/**
	 * Default permissionLevel for new users
	 *
	 * @var Kaltura_Client_Enum_CategoryUserPermissionLevel
	 */
	public $defaultPermissionLevel = null;

	/**
	 * Category Owner (User id)
	 *
	 * @var string
	 */
	public $owner = null;

	/**
	 * Number of entries that belong to this category directly
	 *
	 * @var int
	 * @readonly
	 */
	public $directEntriesCount = null;

	/**
	 * Category external id, controlled and managed by the partner.
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * who can assign entries to this category
	 *
	 * @var Kaltura_Client_Enum_ContributionPolicyType
	 */
	public $contributionPolicy = null;

	/**
	 * Number of active members for this category
	 *
	 * @var int
	 * @readonly
	 */
	public $membersCount = null;

	/**
	 * Number of pending members for this category
	 *
	 * @var int
	 * @readonly
	 */
	public $pendingMembersCount = null;

	/**
	 * Set privacy context for search entries that assiged to private and public categories. the entries will be private if the search context is set with those categories.
	 *
	 * @var string
	 */
	public $privacyContext = null;

	/**
	 * comma separated parents that defines a privacyContext for search
	 *
	 * @var string
	 * @readonly
	 */
	public $privacyContexts = null;

	/**
	 * Status
	 *
	 * @var Kaltura_Client_Enum_CategoryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The category id that this category inherit its members and members permission (for contribution and join)
	 *
	 * @var int
	 * @readonly
	 */
	public $inheritedParentId = null;

	/**
	 * Can be used to store various partner related data as a numeric value
	 *
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * Can be used to store various partner related data as a string
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * Enable client side applications to define how to sort the category child categories
	 *
	 * @var Kaltura_Client_Enum_CategoryOrderBy
	 */
	public $defaultOrderBy = null;

	/**
	 * Number of direct children categories
	 *
	 * @var int
	 * @readonly
	 */
	public $directSubCategoriesCount = null;

	/**
	 * Moderation to add entries to this category by users that are not of permission level Manager or Moderator.
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $moderation = null;

	/**
	 * Nunber of pending moderation entries
	 *
	 * @var int
	 * @readonly
	 */
	public $pendingEntriesCount = null;

	/**
	 * Flag indicating that the category is an aggregation category
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isAggregationCategory = null;

	/**
	 * List of aggregation channels the category belongs to
	 *
	 * @var string
	 */
	public $aggregationCategories = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminTags = null;


}

