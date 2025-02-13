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
class Kaltura_Client_ContentDistribution_Type_ContentDistributionSearchItem extends Kaltura_Client_Type_SearchItem
{
	public function getKalturaObjectType()
	{
		return 'KalturaContentDistributionSearchItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->noDistributionProfiles))
		{
			if(!empty($xml->noDistributionProfiles) && ((int) $xml->noDistributionProfiles === 1 || strtolower((string)$xml->noDistributionProfiles) === 'true'))
				$this->noDistributionProfiles = true;
			else
				$this->noDistributionProfiles = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->noDistributionProfiles))
		{
			if(!empty($jsonObject->noDistributionProfiles) && ((int) $jsonObject->noDistributionProfiles === 1 || strtolower((string)$jsonObject->noDistributionProfiles) === 'true'))
				$this->noDistributionProfiles = true;
			else
				$this->noDistributionProfiles = false;
		}
		if(!is_null($xml) && count($xml->distributionProfileId))
			$this->distributionProfileId = (int)$xml->distributionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->distributionProfileId))
			$this->distributionProfileId = (int)$jsonObject->distributionProfileId;
		if(!is_null($xml) && count($xml->distributionSunStatus))
			$this->distributionSunStatus = (int)$xml->distributionSunStatus;
		if(!is_null($jsonObject) && isset($jsonObject->distributionSunStatus))
			$this->distributionSunStatus = (int)$jsonObject->distributionSunStatus;
		if(!is_null($xml) && count($xml->entryDistributionFlag))
			$this->entryDistributionFlag = (int)$xml->entryDistributionFlag;
		if(!is_null($jsonObject) && isset($jsonObject->entryDistributionFlag))
			$this->entryDistributionFlag = (int)$jsonObject->entryDistributionFlag;
		if(!is_null($xml) && count($xml->entryDistributionStatus))
			$this->entryDistributionStatus = (int)$xml->entryDistributionStatus;
		if(!is_null($jsonObject) && isset($jsonObject->entryDistributionStatus))
			$this->entryDistributionStatus = (int)$jsonObject->entryDistributionStatus;
		if(!is_null($xml) && count($xml->hasEntryDistributionValidationErrors))
		{
			if(!empty($xml->hasEntryDistributionValidationErrors) && ((int) $xml->hasEntryDistributionValidationErrors === 1 || strtolower((string)$xml->hasEntryDistributionValidationErrors) === 'true'))
				$this->hasEntryDistributionValidationErrors = true;
			else
				$this->hasEntryDistributionValidationErrors = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->hasEntryDistributionValidationErrors))
		{
			if(!empty($jsonObject->hasEntryDistributionValidationErrors) && ((int) $jsonObject->hasEntryDistributionValidationErrors === 1 || strtolower((string)$jsonObject->hasEntryDistributionValidationErrors) === 'true'))
				$this->hasEntryDistributionValidationErrors = true;
			else
				$this->hasEntryDistributionValidationErrors = false;
		}
		if(!is_null($xml) && count($xml->entryDistributionValidationErrors))
			$this->entryDistributionValidationErrors = (string)$xml->entryDistributionValidationErrors;
		if(!is_null($jsonObject) && isset($jsonObject->entryDistributionValidationErrors))
			$this->entryDistributionValidationErrors = (string)$jsonObject->entryDistributionValidationErrors;
	}
	/**
	 * 
	 *
	 * @var bool
	 */
	public $noDistributionProfiles = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $distributionProfileId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionSunStatus
	 */
	public $distributionSunStatus = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionFlag
	 */
	public $entryDistributionFlag = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionStatus
	 */
	public $entryDistributionStatus = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $hasEntryDistributionValidationErrors = null;

	/**
	 * Comma seperated validation error types
	 *
	 * @var string
	 */
	public $entryDistributionValidationErrors = null;


}

