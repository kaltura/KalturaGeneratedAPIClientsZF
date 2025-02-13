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
abstract class Kaltura_Client_CuePoint_Type_CuePointBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCuePointBaseFilter';
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
		if(!is_null($xml) && count($xml->cuePointTypeEqual))
			$this->cuePointTypeEqual = (string)$xml->cuePointTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->cuePointTypeEqual))
			$this->cuePointTypeEqual = (string)$jsonObject->cuePointTypeEqual;
		if(!is_null($xml) && count($xml->cuePointTypeIn))
			$this->cuePointTypeIn = (string)$xml->cuePointTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->cuePointTypeIn))
			$this->cuePointTypeIn = (string)$jsonObject->cuePointTypeIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdEqual))
			$this->entryIdEqual = (string)$jsonObject->entryIdEqual;
		if(!is_null($xml) && count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdIn))
			$this->entryIdIn = (string)$jsonObject->entryIdIn;
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
		if(!is_null($xml) && count($xml->triggeredAtGreaterThanOrEqual))
			$this->triggeredAtGreaterThanOrEqual = (int)$xml->triggeredAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->triggeredAtGreaterThanOrEqual))
			$this->triggeredAtGreaterThanOrEqual = (int)$jsonObject->triggeredAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->triggeredAtLessThanOrEqual))
			$this->triggeredAtLessThanOrEqual = (int)$xml->triggeredAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->triggeredAtLessThanOrEqual))
			$this->triggeredAtLessThanOrEqual = (int)$jsonObject->triggeredAtLessThanOrEqual;
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
		if(!is_null($xml) && count($xml->startTimeGreaterThanOrEqual))
			$this->startTimeGreaterThanOrEqual = (int)$xml->startTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startTimeGreaterThanOrEqual))
			$this->startTimeGreaterThanOrEqual = (int)$jsonObject->startTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->startTimeLessThanOrEqual))
			$this->startTimeLessThanOrEqual = (int)$xml->startTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startTimeLessThanOrEqual))
			$this->startTimeLessThanOrEqual = (int)$jsonObject->startTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->userIdEqual))
			$this->userIdEqual = (string)$jsonObject->userIdEqual;
		if(!is_null($xml) && count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->userIdIn))
			$this->userIdIn = (string)$jsonObject->userIdIn;
		if(!is_null($xml) && count($xml->partnerSortValueEqual))
			$this->partnerSortValueEqual = (int)$xml->partnerSortValueEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueEqual))
			$this->partnerSortValueEqual = (int)$jsonObject->partnerSortValueEqual;
		if(!is_null($xml) && count($xml->partnerSortValueIn))
			$this->partnerSortValueIn = (string)$xml->partnerSortValueIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueIn))
			$this->partnerSortValueIn = (string)$jsonObject->partnerSortValueIn;
		if(!is_null($xml) && count($xml->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$xml->partnerSortValueGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueGreaterThanOrEqual))
			$this->partnerSortValueGreaterThanOrEqual = (int)$jsonObject->partnerSortValueGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$xml->partnerSortValueLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValueLessThanOrEqual))
			$this->partnerSortValueLessThanOrEqual = (int)$jsonObject->partnerSortValueLessThanOrEqual;
		if(!is_null($xml) && count($xml->forceStopEqual))
			$this->forceStopEqual = (int)$xml->forceStopEqual;
		if(!is_null($jsonObject) && isset($jsonObject->forceStopEqual))
			$this->forceStopEqual = (int)$jsonObject->forceStopEqual;
		if(!is_null($xml) && count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameEqual))
			$this->systemNameEqual = (string)$jsonObject->systemNameEqual;
		if(!is_null($xml) && count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameIn))
			$this->systemNameIn = (string)$jsonObject->systemNameIn;
	}
	/**
	 * 
	 *
	 * @var string
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
	 * @var Kaltura_Client_CuePoint_Enum_CuePointType
	 */
	public $cuePointTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $cuePointTypeIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_CuePoint_Enum_CuePointStatus
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
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdIn = null;

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
	 * @var int
	 */
	public $triggeredAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $triggeredAtLessThanOrEqual = null;

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
	public $startTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTimeLessThanOrEqual = null;

	/**
	 * 
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
	 * @var int
	 */
	public $partnerSortValueEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerSortValueIn = null;

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
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $forceStopEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;


}

