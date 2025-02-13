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
abstract class Kaltura_Client_CuePoint_Type_CuePoint extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCuePoint';
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
		if(!is_null($xml) && count($xml->intId))
			$this->intId = (string)$xml->intId;
		if(!is_null($jsonObject) && isset($jsonObject->intId))
			$this->intId = (string)$jsonObject->intId;
		if(!is_null($xml) && count($xml->cuePointType))
			$this->cuePointType = (string)$xml->cuePointType;
		if(!is_null($jsonObject) && isset($jsonObject->cuePointType))
			$this->cuePointType = (string)$jsonObject->cuePointType;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->triggeredAt))
			$this->triggeredAt = (int)$xml->triggeredAt;
		if(!is_null($jsonObject) && isset($jsonObject->triggeredAt))
			$this->triggeredAt = (int)$jsonObject->triggeredAt;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->startTime))
			$this->startTime = (int)$xml->startTime;
		if(!is_null($jsonObject) && isset($jsonObject->startTime))
			$this->startTime = (int)$jsonObject->startTime;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(!is_null($jsonObject) && isset($jsonObject->partnerData))
			$this->partnerData = (string)$jsonObject->partnerData;
		if(!is_null($xml) && count($xml->partnerSortValue))
			$this->partnerSortValue = (int)$xml->partnerSortValue;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValue))
			$this->partnerSortValue = (int)$jsonObject->partnerSortValue;
		if(!is_null($xml) && count($xml->forceStop))
			$this->forceStop = (int)$xml->forceStop;
		if(!is_null($jsonObject) && isset($jsonObject->forceStop))
			$this->forceStop = (int)$jsonObject->forceStop;
		if(!is_null($xml) && count($xml->thumbOffset))
			$this->thumbOffset = (int)$xml->thumbOffset;
		if(!is_null($jsonObject) && isset($jsonObject->thumbOffset))
			$this->thumbOffset = (int)$jsonObject->thumbOffset;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->isMomentary))
		{
			if(!empty($xml->isMomentary) && ((int) $xml->isMomentary === 1 || strtolower((string)$xml->isMomentary) === 'true'))
				$this->isMomentary = true;
			else
				$this->isMomentary = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isMomentary))
		{
			if(!empty($jsonObject->isMomentary) && ((int) $jsonObject->isMomentary === 1 || strtolower((string)$jsonObject->isMomentary) === 'true'))
				$this->isMomentary = true;
			else
				$this->isMomentary = false;
		}
		if(!is_null($xml) && count($xml->copiedFrom))
			$this->copiedFrom = (string)$xml->copiedFrom;
		if(!is_null($jsonObject) && isset($jsonObject->copiedFrom))
			$this->copiedFrom = (string)$jsonObject->copiedFrom;
	}
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var bigint
	 * @readonly
	 */
	public $intId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_CuePoint_Enum_CuePointType
	 * @readonly
	 */
	public $cuePointType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_CuePoint_Enum_CuePointStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $entryId = null;

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
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $triggeredAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Start time in milliseconds
	 *
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $forceStop = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $thumbOffset = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isMomentary = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $copiedFrom = null;


}

