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
abstract class Kaltura_Client_Type_CategoryBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idEqual))
			$this->idEqual = (int)$jsonObject->idEqual;
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->idNotIn))
			$this->idNotIn = (string)$xml->idNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->idNotIn))
			$this->idNotIn = (string)$jsonObject->idNotIn;
		if(!is_null($xml) && count($xml->parentIdEqual))
			$this->parentIdEqual = (int)$xml->parentIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdEqual))
			$this->parentIdEqual = (int)$jsonObject->parentIdEqual;
		if(!is_null($xml) && count($xml->parentIdIn))
			$this->parentIdIn = (string)$xml->parentIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdIn))
			$this->parentIdIn = (string)$jsonObject->parentIdIn;
		if(!is_null($xml) && count($xml->depthEqual))
			$this->depthEqual = (int)$xml->depthEqual;
		if(!is_null($jsonObject) && isset($jsonObject->depthEqual))
			$this->depthEqual = (int)$jsonObject->depthEqual;
		if(!is_null($xml) && count($xml->fullNameEqual))
			$this->fullNameEqual = (string)$xml->fullNameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fullNameEqual))
			$this->fullNameEqual = (string)$jsonObject->fullNameEqual;
		if(!is_null($xml) && count($xml->fullNameStartsWith))
			$this->fullNameStartsWith = (string)$xml->fullNameStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->fullNameStartsWith))
			$this->fullNameStartsWith = (string)$jsonObject->fullNameStartsWith;
		if(!is_null($xml) && count($xml->fullNameIn))
			$this->fullNameIn = (string)$xml->fullNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->fullNameIn))
			$this->fullNameIn = (string)$jsonObject->fullNameIn;
		if(!is_null($xml) && count($xml->fullIdsEqual))
			$this->fullIdsEqual = (string)$xml->fullIdsEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fullIdsEqual))
			$this->fullIdsEqual = (string)$jsonObject->fullIdsEqual;
		if(!is_null($xml) && count($xml->fullIdsStartsWith))
			$this->fullIdsStartsWith = (string)$xml->fullIdsStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->fullIdsStartsWith))
			$this->fullIdsStartsWith = (string)$jsonObject->fullIdsStartsWith;
		if(!is_null($xml) && count($xml->fullIdsMatchOr))
			$this->fullIdsMatchOr = (string)$xml->fullIdsMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->fullIdsMatchOr))
			$this->fullIdsMatchOr = (string)$jsonObject->fullIdsMatchOr;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(!is_null($jsonObject) && isset($jsonObject->tagsLike))
			$this->tagsLike = (string)$jsonObject->tagsLike;
		if(!is_null($xml) && count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$jsonObject->tagsMultiLikeOr;
		if(!is_null($xml) && count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$jsonObject->tagsMultiLikeAnd;
		if(!is_null($xml) && count($xml->appearInListEqual))
			$this->appearInListEqual = (int)$xml->appearInListEqual;
		if(!is_null($jsonObject) && isset($jsonObject->appearInListEqual))
			$this->appearInListEqual = (int)$jsonObject->appearInListEqual;
		if(!is_null($xml) && count($xml->privacyEqual))
			$this->privacyEqual = (int)$xml->privacyEqual;
		if(!is_null($jsonObject) && isset($jsonObject->privacyEqual))
			$this->privacyEqual = (int)$jsonObject->privacyEqual;
		if(!is_null($xml) && count($xml->privacyIn))
			$this->privacyIn = (string)$xml->privacyIn;
		if(!is_null($jsonObject) && isset($jsonObject->privacyIn))
			$this->privacyIn = (string)$jsonObject->privacyIn;
		if(!is_null($xml) && count($xml->inheritanceTypeEqual))
			$this->inheritanceTypeEqual = (int)$xml->inheritanceTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->inheritanceTypeEqual))
			$this->inheritanceTypeEqual = (int)$jsonObject->inheritanceTypeEqual;
		if(!is_null($xml) && count($xml->inheritanceTypeIn))
			$this->inheritanceTypeIn = (string)$xml->inheritanceTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->inheritanceTypeIn))
			$this->inheritanceTypeIn = (string)$jsonObject->inheritanceTypeIn;
		if(!is_null($xml) && count($xml->referenceIdEqual))
			$this->referenceIdEqual = (string)$xml->referenceIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->referenceIdEqual))
			$this->referenceIdEqual = (string)$jsonObject->referenceIdEqual;
		if(!is_null($xml) && count($xml->referenceIdEmpty))
			$this->referenceIdEmpty = (int)$xml->referenceIdEmpty;
		if(!is_null($jsonObject) && isset($jsonObject->referenceIdEmpty))
			$this->referenceIdEmpty = (int)$jsonObject->referenceIdEmpty;
		if(!is_null($xml) && count($xml->contributionPolicyEqual))
			$this->contributionPolicyEqual = (int)$xml->contributionPolicyEqual;
		if(!is_null($jsonObject) && isset($jsonObject->contributionPolicyEqual))
			$this->contributionPolicyEqual = (int)$jsonObject->contributionPolicyEqual;
		if(!is_null($xml) && count($xml->membersCountGreaterThanOrEqual))
			$this->membersCountGreaterThanOrEqual = (int)$xml->membersCountGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->membersCountGreaterThanOrEqual))
			$this->membersCountGreaterThanOrEqual = (int)$jsonObject->membersCountGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->membersCountLessThanOrEqual))
			$this->membersCountLessThanOrEqual = (int)$xml->membersCountLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->membersCountLessThanOrEqual))
			$this->membersCountLessThanOrEqual = (int)$jsonObject->membersCountLessThanOrEqual;
		if(!is_null($xml) && count($xml->pendingMembersCountGreaterThanOrEqual))
			$this->pendingMembersCountGreaterThanOrEqual = (int)$xml->pendingMembersCountGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->pendingMembersCountGreaterThanOrEqual))
			$this->pendingMembersCountGreaterThanOrEqual = (int)$jsonObject->pendingMembersCountGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->pendingMembersCountLessThanOrEqual))
			$this->pendingMembersCountLessThanOrEqual = (int)$xml->pendingMembersCountLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->pendingMembersCountLessThanOrEqual))
			$this->pendingMembersCountLessThanOrEqual = (int)$jsonObject->pendingMembersCountLessThanOrEqual;
		if(!is_null($xml) && count($xml->privacyContextEqual))
			$this->privacyContextEqual = (string)$xml->privacyContextEqual;
		if(!is_null($jsonObject) && isset($jsonObject->privacyContextEqual))
			$this->privacyContextEqual = (string)$jsonObject->privacyContextEqual;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->inheritedParentIdEqual))
			$this->inheritedParentIdEqual = (int)$xml->inheritedParentIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->inheritedParentIdEqual))
			$this->inheritedParentIdEqual = (int)$jsonObject->inheritedParentIdEqual;
		if(!is_null($xml) && count($xml->inheritedParentIdIn))
			$this->inheritedParentIdIn = (string)$xml->inheritedParentIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->inheritedParentIdIn))
			$this->inheritedParentIdIn = (string)$jsonObject->inheritedParentIdIn;
		if(!is_null($xml) && count($xml->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$xml->partnerSortValueGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$jsonObject->partnerSortValueGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$xml->partnerSortValueLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$jsonObject->partnerSortValueLessThanOrEqual;
		if(!is_null($xml) && count($xml->aggregationCategoriesMultiLikeOr))
			$this->aggregationCategoriesMultiLikeOr = (string)$xml->aggregationCategoriesMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->aggregationCategoriesMultiLikeOr))
			$this->aggregationCategoriesMultiLikeOr = (string)$jsonObject->aggregationCategoriesMultiLikeOr;
		if(!is_null($xml) && count($xml->aggregationCategoriesMultiLikeAnd))
			$this->aggregationCategoriesMultiLikeAnd = (string)$xml->aggregationCategoriesMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->aggregationCategoriesMultiLikeAnd))
			$this->aggregationCategoriesMultiLikeAnd = (string)$jsonObject->aggregationCategoriesMultiLikeAnd;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $parentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $depthEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullNameStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullIdsEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullIdsStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullIdsMatchOr = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_AppearInListType
	 */
	public $appearInListEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PrivacyType
	 */
	public $privacyEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privacyIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_InheritanceType
	 */
	public $inheritanceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $inheritanceTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceIdEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $referenceIdEmpty = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ContributionPolicyType
	 */
	public $contributionPolicyEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $membersCountGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $membersCountLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $pendingMembersCountGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $pendingMembersCountLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privacyContextEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_CategoryStatus
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
	 * @var int
	 */
	public $inheritedParentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $inheritedParentIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerSortValueGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerSortValueLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $aggregationCategoriesMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $aggregationCategoriesMultiLikeAnd = null;


}

