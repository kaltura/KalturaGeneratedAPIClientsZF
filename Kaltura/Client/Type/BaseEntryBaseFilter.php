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
abstract class Kaltura_Client_Type_BaseEntryBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseEntryBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idEqual))
			$this->idEqual = (string)$xml->idEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idEqual))
			$this->idEqual = (string)$jsonObject->idEqual;
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->idNotIn))
			$this->idNotIn = (string)$xml->idNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->idNotIn))
			$this->idNotIn = (string)$jsonObject->idNotIn;
		if(!is_null($xml) && count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(!is_null($jsonObject) && isset($jsonObject->nameLike))
			$this->nameLike = (string)$jsonObject->nameLike;
		if(!is_null($xml) && count($xml->nameMultiLikeOr))
			$this->nameMultiLikeOr = (string)$xml->nameMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->nameMultiLikeOr))
			$this->nameMultiLikeOr = (string)$jsonObject->nameMultiLikeOr;
		if(!is_null($xml) && count($xml->nameMultiLikeAnd))
			$this->nameMultiLikeAnd = (string)$xml->nameMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->nameMultiLikeAnd))
			$this->nameMultiLikeAnd = (string)$jsonObject->nameMultiLikeAnd;
		if(!is_null($xml) && count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->nameEqual))
			$this->nameEqual = (string)$jsonObject->nameEqual;
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdIn))
			$this->partnerIdIn = (string)$jsonObject->partnerIdIn;
		if(!is_null($xml) && count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->userIdEqual))
			$this->userIdEqual = (string)$jsonObject->userIdEqual;
		if(!is_null($xml) && count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->userIdIn))
			$this->userIdIn = (string)$jsonObject->userIdIn;
		if(!is_null($xml) && count($xml->userIdNotIn))
			$this->userIdNotIn = (string)$xml->userIdNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->userIdNotIn))
			$this->userIdNotIn = (string)$jsonObject->userIdNotIn;
		if(!is_null($xml) && count($xml->creatorIdEqual))
			$this->creatorIdEqual = (string)$xml->creatorIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->creatorIdEqual))
			$this->creatorIdEqual = (string)$jsonObject->creatorIdEqual;
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
		if(!is_null($xml) && count($xml->adminTagsLike))
			$this->adminTagsLike = (string)$xml->adminTagsLike;
		if(!is_null($jsonObject) && isset($jsonObject->adminTagsLike))
			$this->adminTagsLike = (string)$jsonObject->adminTagsLike;
		if(!is_null($xml) && count($xml->adminTagsMultiLikeOr))
			$this->adminTagsMultiLikeOr = (string)$xml->adminTagsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->adminTagsMultiLikeOr))
			$this->adminTagsMultiLikeOr = (string)$jsonObject->adminTagsMultiLikeOr;
		if(!is_null($xml) && count($xml->adminTagsMultiLikeAnd))
			$this->adminTagsMultiLikeAnd = (string)$xml->adminTagsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->adminTagsMultiLikeAnd))
			$this->adminTagsMultiLikeAnd = (string)$jsonObject->adminTagsMultiLikeAnd;
		if(!is_null($xml) && count($xml->categoriesMatchAnd))
			$this->categoriesMatchAnd = (string)$xml->categoriesMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesMatchAnd))
			$this->categoriesMatchAnd = (string)$jsonObject->categoriesMatchAnd;
		if(!is_null($xml) && count($xml->categoriesMatchOr))
			$this->categoriesMatchOr = (string)$xml->categoriesMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesMatchOr))
			$this->categoriesMatchOr = (string)$jsonObject->categoriesMatchOr;
		if(!is_null($xml) && count($xml->categoriesNotContains))
			$this->categoriesNotContains = (string)$xml->categoriesNotContains;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesNotContains))
			$this->categoriesNotContains = (string)$jsonObject->categoriesNotContains;
		if(!is_null($xml) && count($xml->categoriesIdsMatchAnd))
			$this->categoriesIdsMatchAnd = (string)$xml->categoriesIdsMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesIdsMatchAnd))
			$this->categoriesIdsMatchAnd = (string)$jsonObject->categoriesIdsMatchAnd;
		if(!is_null($xml) && count($xml->categoriesIdsMatchOr))
			$this->categoriesIdsMatchOr = (string)$xml->categoriesIdsMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesIdsMatchOr))
			$this->categoriesIdsMatchOr = (string)$jsonObject->categoriesIdsMatchOr;
		if(!is_null($xml) && count($xml->categoriesIdsNotContains))
			$this->categoriesIdsNotContains = (string)$xml->categoriesIdsNotContains;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesIdsNotContains))
			$this->categoriesIdsNotContains = (string)$jsonObject->categoriesIdsNotContains;
		if(!is_null($xml) && count($xml->categoriesIdsEmpty))
			$this->categoriesIdsEmpty = (int)$xml->categoriesIdsEmpty;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesIdsEmpty))
			$this->categoriesIdsEmpty = (int)$jsonObject->categoriesIdsEmpty;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (string)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (string)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusNotEqual))
			$this->statusNotEqual = (string)$xml->statusNotEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusNotEqual))
			$this->statusNotEqual = (string)$jsonObject->statusNotEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->statusNotIn))
			$this->statusNotIn = (string)$xml->statusNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusNotIn))
			$this->statusNotIn = (string)$jsonObject->statusNotIn;
		if(!is_null($xml) && count($xml->moderationStatusEqual))
			$this->moderationStatusEqual = (int)$xml->moderationStatusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->moderationStatusEqual))
			$this->moderationStatusEqual = (int)$jsonObject->moderationStatusEqual;
		if(!is_null($xml) && count($xml->moderationStatusNotEqual))
			$this->moderationStatusNotEqual = (int)$xml->moderationStatusNotEqual;
		if(!is_null($jsonObject) && isset($jsonObject->moderationStatusNotEqual))
			$this->moderationStatusNotEqual = (int)$jsonObject->moderationStatusNotEqual;
		if(!is_null($xml) && count($xml->moderationStatusIn))
			$this->moderationStatusIn = (string)$xml->moderationStatusIn;
		if(!is_null($jsonObject) && isset($jsonObject->moderationStatusIn))
			$this->moderationStatusIn = (string)$jsonObject->moderationStatusIn;
		if(!is_null($xml) && count($xml->moderationStatusNotIn))
			$this->moderationStatusNotIn = (string)$xml->moderationStatusNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->moderationStatusNotIn))
			$this->moderationStatusNotIn = (string)$jsonObject->moderationStatusNotIn;
		if(!is_null($xml) && count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->typeEqual))
			$this->typeEqual = (string)$jsonObject->typeEqual;
		if(!is_null($xml) && count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(!is_null($jsonObject) && isset($jsonObject->typeIn))
			$this->typeIn = (string)$jsonObject->typeIn;
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
		if(!is_null($xml) && count($xml->rankLessThanOrEqual))
			$this->rankLessThanOrEqual = (float)$xml->rankLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->rankLessThanOrEqual))
			$this->rankLessThanOrEqual = (float)$jsonObject->rankLessThanOrEqual;
		if(!is_null($xml) && count($xml->rankGreaterThanOrEqual))
			$this->rankGreaterThanOrEqual = (float)$xml->rankGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->rankGreaterThanOrEqual))
			$this->rankGreaterThanOrEqual = (float)$jsonObject->rankGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->totalRankLessThanOrEqual))
			$this->totalRankLessThanOrEqual = (int)$xml->totalRankLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->totalRankLessThanOrEqual))
			$this->totalRankLessThanOrEqual = (int)$jsonObject->totalRankLessThanOrEqual;
		if(!is_null($xml) && count($xml->totalRankGreaterThanOrEqual))
			$this->totalRankGreaterThanOrEqual = (int)$xml->totalRankGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->totalRankGreaterThanOrEqual))
			$this->totalRankGreaterThanOrEqual = (int)$jsonObject->totalRankGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->groupIdEqual))
			$this->groupIdEqual = (int)$xml->groupIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->groupIdEqual))
			$this->groupIdEqual = (int)$jsonObject->groupIdEqual;
		if(!is_null($xml) && count($xml->searchTextMatchAnd))
			$this->searchTextMatchAnd = (string)$xml->searchTextMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->searchTextMatchAnd))
			$this->searchTextMatchAnd = (string)$jsonObject->searchTextMatchAnd;
		if(!is_null($xml) && count($xml->searchTextMatchOr))
			$this->searchTextMatchOr = (string)$xml->searchTextMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->searchTextMatchOr))
			$this->searchTextMatchOr = (string)$jsonObject->searchTextMatchOr;
		if(!is_null($xml) && count($xml->accessControlIdEqual))
			$this->accessControlIdEqual = (int)$xml->accessControlIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->accessControlIdEqual))
			$this->accessControlIdEqual = (int)$jsonObject->accessControlIdEqual;
		if(!is_null($xml) && count($xml->accessControlIdIn))
			$this->accessControlIdIn = (string)$xml->accessControlIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->accessControlIdIn))
			$this->accessControlIdIn = (string)$jsonObject->accessControlIdIn;
		if(!is_null($xml) && count($xml->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$xml->startDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$jsonObject->startDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->startDateLessThanOrEqual))
			$this->startDateLessThanOrEqual = (int)$xml->startDateLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startDateLessThanOrEqual))
			$this->startDateLessThanOrEqual = (int)$jsonObject->startDateLessThanOrEqual;
		if(!is_null($xml) && count($xml->startDateGreaterThanOrEqualOrNull))
			$this->startDateGreaterThanOrEqualOrNull = (int)$xml->startDateGreaterThanOrEqualOrNull;
		if(!is_null($jsonObject) && isset($jsonObject->startDateGreaterThanOrEqualOrNull))
			$this->startDateGreaterThanOrEqualOrNull = (int)$jsonObject->startDateGreaterThanOrEqualOrNull;
		if(!is_null($xml) && count($xml->startDateLessThanOrEqualOrNull))
			$this->startDateLessThanOrEqualOrNull = (int)$xml->startDateLessThanOrEqualOrNull;
		if(!is_null($jsonObject) && isset($jsonObject->startDateLessThanOrEqualOrNull))
			$this->startDateLessThanOrEqualOrNull = (int)$jsonObject->startDateLessThanOrEqualOrNull;
		if(!is_null($xml) && count($xml->endDateGreaterThanOrEqual))
			$this->endDateGreaterThanOrEqual = (int)$xml->endDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endDateGreaterThanOrEqual))
			$this->endDateGreaterThanOrEqual = (int)$jsonObject->endDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$xml->endDateLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$jsonObject->endDateLessThanOrEqual;
		if(!is_null($xml) && count($xml->endDateGreaterThanOrEqualOrNull))
			$this->endDateGreaterThanOrEqualOrNull = (int)$xml->endDateGreaterThanOrEqualOrNull;
		if(!is_null($jsonObject) && isset($jsonObject->endDateGreaterThanOrEqualOrNull))
			$this->endDateGreaterThanOrEqualOrNull = (int)$jsonObject->endDateGreaterThanOrEqualOrNull;
		if(!is_null($xml) && count($xml->endDateLessThanOrEqualOrNull))
			$this->endDateLessThanOrEqualOrNull = (int)$xml->endDateLessThanOrEqualOrNull;
		if(!is_null($jsonObject) && isset($jsonObject->endDateLessThanOrEqualOrNull))
			$this->endDateLessThanOrEqualOrNull = (int)$jsonObject->endDateLessThanOrEqualOrNull;
		if(!is_null($xml) && count($xml->referenceIdEqual))
			$this->referenceIdEqual = (string)$xml->referenceIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->referenceIdEqual))
			$this->referenceIdEqual = (string)$jsonObject->referenceIdEqual;
		if(!is_null($xml) && count($xml->referenceIdIn))
			$this->referenceIdIn = (string)$xml->referenceIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->referenceIdIn))
			$this->referenceIdIn = (string)$jsonObject->referenceIdIn;
		if(!is_null($xml) && count($xml->replacingEntryIdEqual))
			$this->replacingEntryIdEqual = (string)$xml->replacingEntryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->replacingEntryIdEqual))
			$this->replacingEntryIdEqual = (string)$jsonObject->replacingEntryIdEqual;
		if(!is_null($xml) && count($xml->replacingEntryIdIn))
			$this->replacingEntryIdIn = (string)$xml->replacingEntryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->replacingEntryIdIn))
			$this->replacingEntryIdIn = (string)$jsonObject->replacingEntryIdIn;
		if(!is_null($xml) && count($xml->replacedEntryIdEqual))
			$this->replacedEntryIdEqual = (string)$xml->replacedEntryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->replacedEntryIdEqual))
			$this->replacedEntryIdEqual = (string)$jsonObject->replacedEntryIdEqual;
		if(!is_null($xml) && count($xml->replacedEntryIdIn))
			$this->replacedEntryIdIn = (string)$xml->replacedEntryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->replacedEntryIdIn))
			$this->replacedEntryIdIn = (string)$jsonObject->replacedEntryIdIn;
		if(!is_null($xml) && count($xml->replacementStatusEqual))
			$this->replacementStatusEqual = (string)$xml->replacementStatusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->replacementStatusEqual))
			$this->replacementStatusEqual = (string)$jsonObject->replacementStatusEqual;
		if(!is_null($xml) && count($xml->replacementStatusIn))
			$this->replacementStatusIn = (string)$xml->replacementStatusIn;
		if(!is_null($jsonObject) && isset($jsonObject->replacementStatusIn))
			$this->replacementStatusIn = (string)$jsonObject->replacementStatusIn;
		if(!is_null($xml) && count($xml->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$xml->partnerSortValueGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$jsonObject->partnerSortValueGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$xml->partnerSortValueLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$jsonObject->partnerSortValueLessThanOrEqual;
		if(!is_null($xml) && count($xml->rootEntryIdEqual))
			$this->rootEntryIdEqual = (string)$xml->rootEntryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->rootEntryIdEqual))
			$this->rootEntryIdEqual = (string)$jsonObject->rootEntryIdEqual;
		if(!is_null($xml) && count($xml->rootEntryIdIn))
			$this->rootEntryIdIn = (string)$xml->rootEntryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->rootEntryIdIn))
			$this->rootEntryIdIn = (string)$jsonObject->rootEntryIdIn;
		if(!is_null($xml) && count($xml->parentEntryIdEqual))
			$this->parentEntryIdEqual = (string)$xml->parentEntryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parentEntryIdEqual))
			$this->parentEntryIdEqual = (string)$jsonObject->parentEntryIdEqual;
		if(!is_null($xml) && count($xml->entitledUsersEditMatchAnd))
			$this->entitledUsersEditMatchAnd = (string)$xml->entitledUsersEditMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersEditMatchAnd))
			$this->entitledUsersEditMatchAnd = (string)$jsonObject->entitledUsersEditMatchAnd;
		if(!is_null($xml) && count($xml->entitledUsersEditMatchOr))
			$this->entitledUsersEditMatchOr = (string)$xml->entitledUsersEditMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersEditMatchOr))
			$this->entitledUsersEditMatchOr = (string)$jsonObject->entitledUsersEditMatchOr;
		if(!is_null($xml) && count($xml->entitledUsersPublishMatchAnd))
			$this->entitledUsersPublishMatchAnd = (string)$xml->entitledUsersPublishMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersPublishMatchAnd))
			$this->entitledUsersPublishMatchAnd = (string)$jsonObject->entitledUsersPublishMatchAnd;
		if(!is_null($xml) && count($xml->entitledUsersPublishMatchOr))
			$this->entitledUsersPublishMatchOr = (string)$xml->entitledUsersPublishMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersPublishMatchOr))
			$this->entitledUsersPublishMatchOr = (string)$jsonObject->entitledUsersPublishMatchOr;
		if(!is_null($xml) && count($xml->entitledUsersViewMatchAnd))
			$this->entitledUsersViewMatchAnd = (string)$xml->entitledUsersViewMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersViewMatchAnd))
			$this->entitledUsersViewMatchAnd = (string)$jsonObject->entitledUsersViewMatchAnd;
		if(!is_null($xml) && count($xml->entitledUsersViewMatchOr))
			$this->entitledUsersViewMatchOr = (string)$xml->entitledUsersViewMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->entitledUsersViewMatchOr))
			$this->entitledUsersViewMatchOr = (string)$jsonObject->entitledUsersViewMatchOr;
		if(!is_null($xml) && count($xml->tagsNameMultiLikeOr))
			$this->tagsNameMultiLikeOr = (string)$xml->tagsNameMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->tagsNameMultiLikeOr))
			$this->tagsNameMultiLikeOr = (string)$jsonObject->tagsNameMultiLikeOr;
		if(!is_null($xml) && count($xml->tagsAdminTagsMultiLikeOr))
			$this->tagsAdminTagsMultiLikeOr = (string)$xml->tagsAdminTagsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->tagsAdminTagsMultiLikeOr))
			$this->tagsAdminTagsMultiLikeOr = (string)$jsonObject->tagsAdminTagsMultiLikeOr;
		if(!is_null($xml) && count($xml->tagsAdminTagsNameMultiLikeOr))
			$this->tagsAdminTagsNameMultiLikeOr = (string)$xml->tagsAdminTagsNameMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->tagsAdminTagsNameMultiLikeOr))
			$this->tagsAdminTagsNameMultiLikeOr = (string)$jsonObject->tagsAdminTagsNameMultiLikeOr;
		if(!is_null($xml) && count($xml->tagsNameMultiLikeAnd))
			$this->tagsNameMultiLikeAnd = (string)$xml->tagsNameMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->tagsNameMultiLikeAnd))
			$this->tagsNameMultiLikeAnd = (string)$jsonObject->tagsNameMultiLikeAnd;
		if(!is_null($xml) && count($xml->tagsAdminTagsMultiLikeAnd))
			$this->tagsAdminTagsMultiLikeAnd = (string)$xml->tagsAdminTagsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->tagsAdminTagsMultiLikeAnd))
			$this->tagsAdminTagsMultiLikeAnd = (string)$jsonObject->tagsAdminTagsMultiLikeAnd;
		if(!is_null($xml) && count($xml->tagsAdminTagsNameMultiLikeAnd))
			$this->tagsAdminTagsNameMultiLikeAnd = (string)$xml->tagsAdminTagsNameMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->tagsAdminTagsNameMultiLikeAnd))
			$this->tagsAdminTagsNameMultiLikeAnd = (string)$jsonObject->tagsAdminTagsNameMultiLikeAnd;
		if(!is_null($xml) && count($xml->displayInSearchEqual))
			$this->displayInSearchEqual = (int)$xml->displayInSearchEqual;
		if(!is_null($jsonObject) && isset($jsonObject->displayInSearchEqual))
			$this->displayInSearchEqual = (int)$jsonObject->displayInSearchEqual;
		if(!is_null($xml) && count($xml->displayInSearchIn))
			$this->displayInSearchIn = (string)$xml->displayInSearchIn;
		if(!is_null($jsonObject) && isset($jsonObject->displayInSearchIn))
			$this->displayInSearchIn = (string)$jsonObject->displayInSearchIn;
	}
	/**
	 * This filter should be in use for retrieving only a specific entry (identified by its entryId).
	 *
	 * @var string
	 */
	public $idEqual = null;

	/**
	 * This filter should be in use for retrieving few specific entries (string should include comma separated list of entryId strings).
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
	 * This filter should be in use for retrieving specific entries. It should include only one string to search for in entry names (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry names, while applying an OR logic to retrieve entries that contain at least one input string (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $nameMultiLikeOr = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry names, while applying an AND logic to retrieve entries that contain all input strings (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $nameMultiLikeAnd = null;

	/**
	 * This filter should be in use for retrieving entries with a specific name.
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * This filter should be in use for retrieving only entries which were uploaded by/assigned to users of a specific Kaltura Partner (identified by Partner ID).
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * This filter should be in use for retrieving only entries within Kaltura network which were uploaded by/assigned to users of few Kaltura Partners  (string should include comma separated list of PartnerIDs)
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * This filter parameter should be in use for retrieving only entries, uploaded by/assigned to a specific user (identified by user Id).
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdNotIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $creatorIdEqual = null;

	/**
	 * This filter should be in use for retrieving specific entries. It should include only one string to search for in entry tags (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, while applying an OR logic to retrieve entries that contain at least one input string (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, while applying an AND logic to retrieve entries that contain all input strings (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * This filter should be in use for retrieving specific entries. It should include only one string to search for in entry tags set by an ADMIN user (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $adminTagsLike = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, set by an ADMIN user, while applying an OR logic to retrieve entries that contain at least one input string (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $adminTagsMultiLikeOr = null;

	/**
	 * This filter should be in use for retrieving specific entries. It could include few (comma separated) strings for searching in entry tags, set by an ADMIN user, while applying an AND logic to retrieve entries that contain all input strings (no wildcards, spaces are treated as part of the string).
	 *
	 * @var string
	 */
	public $adminTagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesMatchAnd = null;

	/**
	 * All entries within these categories or their child categories.
	 *
	 * @var string
	 */
	public $categoriesMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesNotContains = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesIdsMatchAnd = null;

	/**
	 * All entries of the categories, excluding their child categories.
	 * 	 To include entries of the child categories, use categoryAncestorIdIn, or categoriesMatchOr.
	 *
	 * @var string
	 */
	public $categoriesIdsMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesIdsNotContains = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $categoriesIdsEmpty = null;

	/**
	 * This filter should be in use for retrieving only entries, at a specific {
	 *
	 * @var Kaltura_Client_Enum_EntryStatus
	 */
	public $statusEqual = null;

	/**
	 * This filter should be in use for retrieving only entries, not at a specific {
	 *
	 * @var Kaltura_Client_Enum_EntryStatus
	 */
	public $statusNotEqual = null;

	/**
	 * This filter should be in use for retrieving only entries, at few specific {
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * This filter should be in use for retrieving only entries, not at few specific {
	 *
	 * @var string
	 */
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EntryModerationStatus
	 */
	public $moderationStatusEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EntryModerationStatus
	 */
	public $moderationStatusNotEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $moderationStatusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $moderationStatusNotIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EntryType
	 */
	public $typeEqual = null;

	/**
	 * This filter should be in use for retrieving entries of few {
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * This filter parameter should be in use for retrieving only entries which were created at Kaltura system after a specific time/date (standard timestamp format).
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * This filter parameter should be in use for retrieving only entries which were created at Kaltura system before a specific time/date (standard timestamp format).
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
	 * @var float
	 */
	public $rankLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $rankGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $totalRankLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $totalRankGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $groupIdEqual = null;

	/**
	 * This filter should be in use for retrieving specific entries while search match the input string within all of the following metadata attributes: name, description, tags, adminTags.
	 *
	 * @var string
	 */
	public $searchTextMatchAnd = null;

	/**
	 * This filter should be in use for retrieving specific entries while search match the input string within at least one of the following metadata attributes: name, description, tags, adminTags.
	 *
	 * @var string
	 */
	public $searchTextMatchOr = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accessControlIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $accessControlIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateGreaterThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startDateLessThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateGreaterThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDateLessThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacingEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacingEntryIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacedEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacedEntryIdIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EntryReplacementStatus
	 */
	public $replacementStatusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $replacementStatusIn = null;

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
	public $rootEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rootEntryIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersEditMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersEditMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersPublishMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersPublishMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersViewMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitledUsersViewMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsNameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsAdminTagsNameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_EntryDisplayInSearchType
	 */
	public $displayInSearchEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $displayInSearchIn = null;


}

