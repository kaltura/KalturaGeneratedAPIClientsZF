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
class Kaltura_Client_ContentDistribution_Type_EntryDistribution extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryDistribution';
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
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->submittedAt))
			$this->submittedAt = (int)$xml->submittedAt;
		if(!is_null($jsonObject) && isset($jsonObject->submittedAt))
			$this->submittedAt = (int)$jsonObject->submittedAt;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->distributionProfileId))
			$this->distributionProfileId = (int)$xml->distributionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->distributionProfileId))
			$this->distributionProfileId = (int)$jsonObject->distributionProfileId;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->sunStatus))
			$this->sunStatus = (int)$xml->sunStatus;
		if(!is_null($jsonObject) && isset($jsonObject->sunStatus))
			$this->sunStatus = (int)$jsonObject->sunStatus;
		if(!is_null($xml) && count($xml->dirtyStatus))
			$this->dirtyStatus = (int)$xml->dirtyStatus;
		if(!is_null($jsonObject) && isset($jsonObject->dirtyStatus))
			$this->dirtyStatus = (int)$jsonObject->dirtyStatus;
		if(!is_null($xml) && count($xml->thumbAssetIds))
			$this->thumbAssetIds = (string)$xml->thumbAssetIds;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetIds))
			$this->thumbAssetIds = (string)$jsonObject->thumbAssetIds;
		if(!is_null($xml) && count($xml->flavorAssetIds))
			$this->flavorAssetIds = (string)$xml->flavorAssetIds;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetIds))
			$this->flavorAssetIds = (string)$jsonObject->flavorAssetIds;
		if(!is_null($xml) && count($xml->assetIds))
			$this->assetIds = (string)$xml->assetIds;
		if(!is_null($jsonObject) && isset($jsonObject->assetIds))
			$this->assetIds = (string)$jsonObject->assetIds;
		if(!is_null($xml) && count($xml->sunrise))
			$this->sunrise = (int)$xml->sunrise;
		if(!is_null($jsonObject) && isset($jsonObject->sunrise))
			$this->sunrise = (int)$jsonObject->sunrise;
		if(!is_null($xml) && count($xml->sunset))
			$this->sunset = (int)$xml->sunset;
		if(!is_null($jsonObject) && isset($jsonObject->sunset))
			$this->sunset = (int)$jsonObject->sunset;
		if(!is_null($xml) && count($xml->remoteId))
			$this->remoteId = (string)$xml->remoteId;
		if(!is_null($jsonObject) && isset($jsonObject->remoteId))
			$this->remoteId = (string)$jsonObject->remoteId;
		if(!is_null($xml) && count($xml->plays))
			$this->plays = (int)$xml->plays;
		if(!is_null($jsonObject) && isset($jsonObject->plays))
			$this->plays = (int)$jsonObject->plays;
		if(!is_null($xml) && count($xml->views))
			$this->views = (int)$xml->views;
		if(!is_null($jsonObject) && isset($jsonObject->views))
			$this->views = (int)$jsonObject->views;
		if(!is_null($xml) && count($xml->validationErrors))
		{
			if(empty($xml->validationErrors))
				$this->validationErrors = array();
			else
				$this->validationErrors = Kaltura_Client_ParseUtils::unmarshalArray($xml->validationErrors, "KalturaDistributionValidationError");
		}
		if(!is_null($jsonObject) && isset($jsonObject->validationErrors))
		{
			if(empty($jsonObject->validationErrors))
				$this->validationErrors = array();
			else
				$this->validationErrors = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->validationErrors, "KalturaDistributionValidationError");
		}
		if(!is_null($xml) && count($xml->errorType))
			$this->errorType = (int)$xml->errorType;
		if(!is_null($jsonObject) && isset($jsonObject->errorType))
			$this->errorType = (int)$jsonObject->errorType;
		if(!is_null($xml) && count($xml->errorNumber))
			$this->errorNumber = (int)$xml->errorNumber;
		if(!is_null($jsonObject) && isset($jsonObject->errorNumber))
			$this->errorNumber = (int)$jsonObject->errorNumber;
		if(!is_null($xml) && count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
		if(!is_null($jsonObject) && isset($jsonObject->errorDescription))
			$this->errorDescription = (string)$jsonObject->errorDescription;
		if(!is_null($xml) && count($xml->hasSubmitResultsLog))
			$this->hasSubmitResultsLog = (int)$xml->hasSubmitResultsLog;
		if(!is_null($jsonObject) && isset($jsonObject->hasSubmitResultsLog))
			$this->hasSubmitResultsLog = (int)$jsonObject->hasSubmitResultsLog;
		if(!is_null($xml) && count($xml->hasSubmitSentDataLog))
			$this->hasSubmitSentDataLog = (int)$xml->hasSubmitSentDataLog;
		if(!is_null($jsonObject) && isset($jsonObject->hasSubmitSentDataLog))
			$this->hasSubmitSentDataLog = (int)$jsonObject->hasSubmitSentDataLog;
		if(!is_null($xml) && count($xml->hasUpdateResultsLog))
			$this->hasUpdateResultsLog = (int)$xml->hasUpdateResultsLog;
		if(!is_null($jsonObject) && isset($jsonObject->hasUpdateResultsLog))
			$this->hasUpdateResultsLog = (int)$jsonObject->hasUpdateResultsLog;
		if(!is_null($xml) && count($xml->hasUpdateSentDataLog))
			$this->hasUpdateSentDataLog = (int)$xml->hasUpdateSentDataLog;
		if(!is_null($jsonObject) && isset($jsonObject->hasUpdateSentDataLog))
			$this->hasUpdateSentDataLog = (int)$jsonObject->hasUpdateSentDataLog;
		if(!is_null($xml) && count($xml->hasDeleteResultsLog))
			$this->hasDeleteResultsLog = (int)$xml->hasDeleteResultsLog;
		if(!is_null($jsonObject) && isset($jsonObject->hasDeleteResultsLog))
			$this->hasDeleteResultsLog = (int)$jsonObject->hasDeleteResultsLog;
		if(!is_null($xml) && count($xml->hasDeleteSentDataLog))
			$this->hasDeleteSentDataLog = (int)$xml->hasDeleteSentDataLog;
		if(!is_null($jsonObject) && isset($jsonObject->hasDeleteSentDataLog))
			$this->hasDeleteSentDataLog = (int)$jsonObject->hasDeleteSentDataLog;
	}
	/**
	 * Auto generated unique id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Entry distribution creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Entry distribution last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Entry distribution submission date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $submittedAt = null;

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
	 * @insertonly
	 */
	public $distributionProfileId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionSunStatus
	 * @readonly
	 */
	public $sunStatus = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_EntryDistributionFlag
	 * @readonly
	 */
	public $dirtyStatus = null;

	/**
	 * Comma separated thumbnail asset ids
	 *
	 * @var string
	 */
	public $thumbAssetIds = null;

	/**
	 * Comma separated flavor asset ids
	 *
	 * @var string
	 */
	public $flavorAssetIds = null;

	/**
	 * Comma separated asset ids
	 *
	 * @var string
	 */
	public $assetIds = null;

	/**
	 * Entry distribution publish time as Unix timestamp (In seconds)
	 *
	 * @var int
	 */
	public $sunrise = null;

	/**
	 * Entry distribution un-publish time as Unix timestamp (In seconds)
	 *
	 * @var int
	 */
	public $sunset = null;

	/**
	 * The id as returned from the distributed destination
	 *
	 * @var string
	 * @readonly
	 */
	public $remoteId = null;

	/**
	 * The plays as retrieved from the remote destination reports
	 *
	 * @var int
	 * @readonly
	 */
	public $plays = null;

	/**
	 * The views as retrieved from the remote destination reports
	 *
	 * @var int
	 * @readonly
	 */
	public $views = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_DistributionValidationError[]
	 */
	public $validationErrors;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobErrorTypes
	 * @readonly
	 */
	public $errorType = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $errorNumber = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $errorDescription = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $hasSubmitResultsLog = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $hasSubmitSentDataLog = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $hasUpdateResultsLog = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $hasUpdateSentDataLog = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $hasDeleteResultsLog = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $hasDeleteSentDataLog = null;


}

