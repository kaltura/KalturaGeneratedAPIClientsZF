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
abstract class Kaltura_Client_Schedule_Type_ScheduleEventBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEventBaseFilter';
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
		if(!is_null($xml) && count($xml->parentIdNotIn))
			$this->parentIdNotIn = (string)$xml->parentIdNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdNotIn))
			$this->parentIdNotIn = (string)$jsonObject->parentIdNotIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$xml->startDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startDateGreaterThanOrEqual))
			$this->startDateGreaterThanOrEqual = (int)$jsonObject->startDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->startDateLessThanOrEqual))
			$this->startDateLessThanOrEqual = (int)$xml->startDateLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startDateLessThanOrEqual))
			$this->startDateLessThanOrEqual = (int)$jsonObject->startDateLessThanOrEqual;
		if(!is_null($xml) && count($xml->endDateGreaterThanOrEqual))
			$this->endDateGreaterThanOrEqual = (int)$xml->endDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endDateGreaterThanOrEqual))
			$this->endDateGreaterThanOrEqual = (int)$jsonObject->endDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$xml->endDateLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endDateLessThanOrEqual))
			$this->endDateLessThanOrEqual = (int)$jsonObject->endDateLessThanOrEqual;
		if(!is_null($xml) && count($xml->referenceIdEqual))
			$this->referenceIdEqual = (string)$xml->referenceIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->referenceIdEqual))
			$this->referenceIdEqual = (string)$jsonObject->referenceIdEqual;
		if(!is_null($xml) && count($xml->referenceIdIn))
			$this->referenceIdIn = (string)$xml->referenceIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->referenceIdIn))
			$this->referenceIdIn = (string)$jsonObject->referenceIdIn;
		if(!is_null($xml) && count($xml->ownerIdEqual))
			$this->ownerIdEqual = (string)$xml->ownerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->ownerIdEqual))
			$this->ownerIdEqual = (string)$jsonObject->ownerIdEqual;
		if(!is_null($xml) && count($xml->ownerIdIn))
			$this->ownerIdIn = (string)$xml->ownerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->ownerIdIn))
			$this->ownerIdIn = (string)$jsonObject->ownerIdIn;
		if(!is_null($xml) && count($xml->priorityEqual))
			$this->priorityEqual = (int)$xml->priorityEqual;
		if(!is_null($jsonObject) && isset($jsonObject->priorityEqual))
			$this->priorityEqual = (int)$jsonObject->priorityEqual;
		if(!is_null($xml) && count($xml->priorityIn))
			$this->priorityIn = (string)$xml->priorityIn;
		if(!is_null($jsonObject) && isset($jsonObject->priorityIn))
			$this->priorityIn = (string)$jsonObject->priorityIn;
		if(!is_null($xml) && count($xml->priorityGreaterThanOrEqual))
			$this->priorityGreaterThanOrEqual = (int)$xml->priorityGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->priorityGreaterThanOrEqual))
			$this->priorityGreaterThanOrEqual = (int)$jsonObject->priorityGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->priorityLessThanOrEqual))
			$this->priorityLessThanOrEqual = (int)$xml->priorityLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->priorityLessThanOrEqual))
			$this->priorityLessThanOrEqual = (int)$jsonObject->priorityLessThanOrEqual;
		if(!is_null($xml) && count($xml->recurrenceTypeEqual))
			$this->recurrenceTypeEqual = (int)$xml->recurrenceTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->recurrenceTypeEqual))
			$this->recurrenceTypeEqual = (int)$jsonObject->recurrenceTypeEqual;
		if(!is_null($xml) && count($xml->recurrenceTypeIn))
			$this->recurrenceTypeIn = (string)$xml->recurrenceTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->recurrenceTypeIn))
			$this->recurrenceTypeIn = (string)$jsonObject->recurrenceTypeIn;
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
	 * @var string
	 */
	public $parentIdNotIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Enum_ScheduleEventStatus
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
	public $ownerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $priorityIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priorityLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Enum_ScheduleEventRecurrenceType
	 */
	public $recurrenceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recurrenceTypeIn = null;

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


}

