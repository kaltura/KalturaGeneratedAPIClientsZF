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
abstract class Kaltura_Client_ContentDistribution_Type_EntryDistributionBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryDistributionBaseFilter';
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
		if(!is_null($xml) && count($xml->submittedAtGreaterThanOrEqual))
			$this->submittedAtGreaterThanOrEqual = (int)$xml->submittedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->submittedAtGreaterThanOrEqual))
			$this->submittedAtGreaterThanOrEqual = (int)$jsonObject->submittedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->submittedAtLessThanOrEqual))
			$this->submittedAtLessThanOrEqual = (int)$xml->submittedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->submittedAtLessThanOrEqual))
			$this->submittedAtLessThanOrEqual = (int)$jsonObject->submittedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdEqual))
			$this->entryIdEqual = (string)$jsonObject->entryIdEqual;
		if(!is_null($xml) && count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdIn))
			$this->entryIdIn = (string)$jsonObject->entryIdIn;
		if(!is_null($xml) && count($xml->distributionProfileIdEqual))
			$this->distributionProfileIdEqual = (int)$xml->distributionProfileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->distributionProfileIdEqual))
			$this->distributionProfileIdEqual = (int)$jsonObject->distributionProfileIdEqual;
		if(!is_null($xml) && count($xml->distributionProfileIdIn))
			$this->distributionProfileIdIn = (string)$xml->distributionProfileIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->distributionProfileIdIn))
			$this->distributionProfileIdIn = (string)$jsonObject->distributionProfileIdIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->dirtyStatusEqual))
			$this->dirtyStatusEqual = (int)$xml->dirtyStatusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->dirtyStatusEqual))
			$this->dirtyStatusEqual = (int)$jsonObject->dirtyStatusEqual;
		if(!is_null($xml) && count($xml->dirtyStatusIn))
			$this->dirtyStatusIn = (string)$xml->dirtyStatusIn;
		if(!is_null($jsonObject) && isset($jsonObject->dirtyStatusIn))
			$this->dirtyStatusIn = (string)$jsonObject->dirtyStatusIn;
		if(!is_null($xml) && count($xml->sunriseGreaterThanOrEqual))
			$this->sunriseGreaterThanOrEqual = (int)$xml->sunriseGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sunriseGreaterThanOrEqual))
			$this->sunriseGreaterThanOrEqual = (int)$jsonObject->sunriseGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->sunriseLessThanOrEqual))
			$this->sunriseLessThanOrEqual = (int)$xml->sunriseLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sunriseLessThanOrEqual))
			$this->sunriseLessThanOrEqual = (int)$jsonObject->sunriseLessThanOrEqual;
		if(!is_null($xml) && count($xml->sunsetGreaterThanOrEqual))
			$this->sunsetGreaterThanOrEqual = (int)$xml->sunsetGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sunsetGreaterThanOrEqual))
			$this->sunsetGreaterThanOrEqual = (int)$jsonObject->sunsetGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->sunsetLessThanOrEqual))
			$this->sunsetLessThanOrEqual = (int)$xml->sunsetLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sunsetLessThanOrEqual))
			$this->sunsetLessThanOrEqual = (int)$jsonObject->sunsetLessThanOrEqual;
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
	public $submittedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $submittedAtLessThanOrEqual = null;

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
	public $distributionProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $distributionProfileIdIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionStatus
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
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionFlag
	 */
	public $dirtyStatusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dirtyStatusIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunriseGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunriseLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunsetGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sunsetLessThanOrEqual = null;


}

