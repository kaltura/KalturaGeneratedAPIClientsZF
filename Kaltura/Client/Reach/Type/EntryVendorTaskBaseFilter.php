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
abstract class Kaltura_Client_Reach_Type_EntryVendorTaskBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryVendorTaskBaseFilter';
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
		if(!is_null($xml) && count($xml->vendorPartnerIdEqual))
			$this->vendorPartnerIdEqual = (int)$xml->vendorPartnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->vendorPartnerIdEqual))
			$this->vendorPartnerIdEqual = (int)$jsonObject->vendorPartnerIdEqual;
		if(!is_null($xml) && count($xml->vendorPartnerIdIn))
			$this->vendorPartnerIdIn = (string)$xml->vendorPartnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->vendorPartnerIdIn))
			$this->vendorPartnerIdIn = (string)$jsonObject->vendorPartnerIdIn;
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
		if(!is_null($xml) && count($xml->queueTimeGreaterThanOrEqual))
			$this->queueTimeGreaterThanOrEqual = (int)$xml->queueTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->queueTimeGreaterThanOrEqual))
			$this->queueTimeGreaterThanOrEqual = (int)$jsonObject->queueTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->queueTimeLessThanOrEqual))
			$this->queueTimeLessThanOrEqual = (int)$xml->queueTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->queueTimeLessThanOrEqual))
			$this->queueTimeLessThanOrEqual = (int)$jsonObject->queueTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->finishTimeGreaterThanOrEqual))
			$this->finishTimeGreaterThanOrEqual = (int)$xml->finishTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->finishTimeGreaterThanOrEqual))
			$this->finishTimeGreaterThanOrEqual = (int)$jsonObject->finishTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->finishTimeLessThanOrEqual))
			$this->finishTimeLessThanOrEqual = (int)$xml->finishTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->finishTimeLessThanOrEqual))
			$this->finishTimeLessThanOrEqual = (int)$jsonObject->finishTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdEqual))
			$this->entryIdEqual = (string)$jsonObject->entryIdEqual;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->reachProfileIdEqual))
			$this->reachProfileIdEqual = (int)$xml->reachProfileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->reachProfileIdEqual))
			$this->reachProfileIdEqual = (int)$jsonObject->reachProfileIdEqual;
		if(!is_null($xml) && count($xml->reachProfileIdIn))
			$this->reachProfileIdIn = (string)$xml->reachProfileIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->reachProfileIdIn))
			$this->reachProfileIdIn = (string)$jsonObject->reachProfileIdIn;
		if(!is_null($xml) && count($xml->catalogItemIdEqual))
			$this->catalogItemIdEqual = (int)$xml->catalogItemIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->catalogItemIdEqual))
			$this->catalogItemIdEqual = (int)$jsonObject->catalogItemIdEqual;
		if(!is_null($xml) && count($xml->catalogItemIdIn))
			$this->catalogItemIdIn = (string)$xml->catalogItemIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->catalogItemIdIn))
			$this->catalogItemIdIn = (string)$jsonObject->catalogItemIdIn;
		if(!is_null($xml) && count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->userIdEqual))
			$this->userIdEqual = (string)$jsonObject->userIdEqual;
		if(!is_null($xml) && count($xml->contextEqual))
			$this->contextEqual = (string)$xml->contextEqual;
		if(!is_null($jsonObject) && isset($jsonObject->contextEqual))
			$this->contextEqual = (string)$jsonObject->contextEqual;
		if(!is_null($xml) && count($xml->expectedFinishTimeGreaterThanOrEqual))
			$this->expectedFinishTimeGreaterThanOrEqual = (int)$xml->expectedFinishTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->expectedFinishTimeGreaterThanOrEqual))
			$this->expectedFinishTimeGreaterThanOrEqual = (int)$jsonObject->expectedFinishTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->expectedFinishTimeLessThanOrEqual))
			$this->expectedFinishTimeLessThanOrEqual = (int)$xml->expectedFinishTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->expectedFinishTimeLessThanOrEqual))
			$this->expectedFinishTimeLessThanOrEqual = (int)$jsonObject->expectedFinishTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->entryObjectTypeEqual))
			$this->entryObjectTypeEqual = (int)$xml->entryObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryObjectTypeEqual))
			$this->entryObjectTypeEqual = (int)$jsonObject->entryObjectTypeEqual;
		if(!is_null($xml) && count($xml->entryObjectTypeIn))
			$this->entryObjectTypeIn = (string)$xml->entryObjectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryObjectTypeIn))
			$this->entryObjectTypeIn = (string)$jsonObject->entryObjectTypeIn;
		if(!is_null($xml) && count($xml->entryObjectTypeNotIn))
			$this->entryObjectTypeNotIn = (string)$xml->entryObjectTypeNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryObjectTypeNotIn))
			$this->entryObjectTypeNotIn = (string)$jsonObject->entryObjectTypeNotIn;
	}
	/**
	 * 
	 *
	 * @var bigint
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
	public $vendorPartnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vendorPartnerIdIn = null;

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
	public $queueTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $queueTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $finishTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_EntryVendorTaskStatus
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
	public $reachProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $reachProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $catalogItemIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $catalogItemIdIn = null;

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
	public $contextEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $expectedFinishTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $expectedFinishTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_EntryObjectType
	 */
	public $entryObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryObjectTypeNotIn = null;


}

