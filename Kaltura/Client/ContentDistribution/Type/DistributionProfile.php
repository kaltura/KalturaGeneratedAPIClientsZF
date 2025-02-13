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
abstract class Kaltura_Client_ContentDistribution_Type_DistributionProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDistributionProfile';
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
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->providerType))
			$this->providerType = (string)$xml->providerType;
		if(!is_null($jsonObject) && isset($jsonObject->providerType))
			$this->providerType = (string)$jsonObject->providerType;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->submitEnabled))
			$this->submitEnabled = (int)$xml->submitEnabled;
		if(!is_null($jsonObject) && isset($jsonObject->submitEnabled))
			$this->submitEnabled = (int)$jsonObject->submitEnabled;
		if(!is_null($xml) && count($xml->updateEnabled))
			$this->updateEnabled = (int)$xml->updateEnabled;
		if(!is_null($jsonObject) && isset($jsonObject->updateEnabled))
			$this->updateEnabled = (int)$jsonObject->updateEnabled;
		if(!is_null($xml) && count($xml->deleteEnabled))
			$this->deleteEnabled = (int)$xml->deleteEnabled;
		if(!is_null($jsonObject) && isset($jsonObject->deleteEnabled))
			$this->deleteEnabled = (int)$jsonObject->deleteEnabled;
		if(!is_null($xml) && count($xml->reportEnabled))
			$this->reportEnabled = (int)$xml->reportEnabled;
		if(!is_null($jsonObject) && isset($jsonObject->reportEnabled))
			$this->reportEnabled = (int)$jsonObject->reportEnabled;
		if(!is_null($xml) && count($xml->autoCreateFlavors))
			$this->autoCreateFlavors = (string)$xml->autoCreateFlavors;
		if(!is_null($jsonObject) && isset($jsonObject->autoCreateFlavors))
			$this->autoCreateFlavors = (string)$jsonObject->autoCreateFlavors;
		if(!is_null($xml) && count($xml->autoCreateThumb))
			$this->autoCreateThumb = (string)$xml->autoCreateThumb;
		if(!is_null($jsonObject) && isset($jsonObject->autoCreateThumb))
			$this->autoCreateThumb = (string)$jsonObject->autoCreateThumb;
		if(!is_null($xml) && count($xml->optionalFlavorParamsIds))
			$this->optionalFlavorParamsIds = (string)$xml->optionalFlavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->optionalFlavorParamsIds))
			$this->optionalFlavorParamsIds = (string)$jsonObject->optionalFlavorParamsIds;
		if(!is_null($xml) && count($xml->requiredFlavorParamsIds))
			$this->requiredFlavorParamsIds = (string)$xml->requiredFlavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->requiredFlavorParamsIds))
			$this->requiredFlavorParamsIds = (string)$jsonObject->requiredFlavorParamsIds;
		if(!is_null($xml) && count($xml->optionalThumbDimensions))
		{
			if(empty($xml->optionalThumbDimensions))
				$this->optionalThumbDimensions = array();
			else
				$this->optionalThumbDimensions = Kaltura_Client_ParseUtils::unmarshalArray($xml->optionalThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($jsonObject) && isset($jsonObject->optionalThumbDimensions))
		{
			if(empty($jsonObject->optionalThumbDimensions))
				$this->optionalThumbDimensions = array();
			else
				$this->optionalThumbDimensions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->optionalThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($xml) && count($xml->requiredThumbDimensions))
		{
			if(empty($xml->requiredThumbDimensions))
				$this->requiredThumbDimensions = array();
			else
				$this->requiredThumbDimensions = Kaltura_Client_ParseUtils::unmarshalArray($xml->requiredThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($jsonObject) && isset($jsonObject->requiredThumbDimensions))
		{
			if(empty($jsonObject->requiredThumbDimensions))
				$this->requiredThumbDimensions = array();
			else
				$this->requiredThumbDimensions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->requiredThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($xml) && count($xml->optionalAssetDistributionRules))
		{
			if(empty($xml->optionalAssetDistributionRules))
				$this->optionalAssetDistributionRules = array();
			else
				$this->optionalAssetDistributionRules = Kaltura_Client_ParseUtils::unmarshalArray($xml->optionalAssetDistributionRules, "KalturaAssetDistributionRule");
		}
		if(!is_null($jsonObject) && isset($jsonObject->optionalAssetDistributionRules))
		{
			if(empty($jsonObject->optionalAssetDistributionRules))
				$this->optionalAssetDistributionRules = array();
			else
				$this->optionalAssetDistributionRules = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->optionalAssetDistributionRules, "KalturaAssetDistributionRule");
		}
		if(!is_null($xml) && count($xml->requiredAssetDistributionRules))
		{
			if(empty($xml->requiredAssetDistributionRules))
				$this->requiredAssetDistributionRules = array();
			else
				$this->requiredAssetDistributionRules = Kaltura_Client_ParseUtils::unmarshalArray($xml->requiredAssetDistributionRules, "KalturaAssetDistributionRule");
		}
		if(!is_null($jsonObject) && isset($jsonObject->requiredAssetDistributionRules))
		{
			if(empty($jsonObject->requiredAssetDistributionRules))
				$this->requiredAssetDistributionRules = array();
			else
				$this->requiredAssetDistributionRules = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->requiredAssetDistributionRules, "KalturaAssetDistributionRule");
		}
		if(!is_null($xml) && count($xml->sunriseDefaultOffset))
			$this->sunriseDefaultOffset = (int)$xml->sunriseDefaultOffset;
		if(!is_null($jsonObject) && isset($jsonObject->sunriseDefaultOffset))
			$this->sunriseDefaultOffset = (int)$jsonObject->sunriseDefaultOffset;
		if(!is_null($xml) && count($xml->sunsetDefaultOffset))
			$this->sunsetDefaultOffset = (int)$xml->sunsetDefaultOffset;
		if(!is_null($jsonObject) && isset($jsonObject->sunsetDefaultOffset))
			$this->sunsetDefaultOffset = (int)$jsonObject->sunsetDefaultOffset;
		if(!is_null($xml) && count($xml->recommendedStorageProfileForDownload))
			$this->recommendedStorageProfileForDownload = (int)$xml->recommendedStorageProfileForDownload;
		if(!is_null($jsonObject) && isset($jsonObject->recommendedStorageProfileForDownload))
			$this->recommendedStorageProfileForDownload = (int)$jsonObject->recommendedStorageProfileForDownload;
		if(!is_null($xml) && count($xml->recommendedDcForDownload))
			$this->recommendedDcForDownload = (int)$xml->recommendedDcForDownload;
		if(!is_null($jsonObject) && isset($jsonObject->recommendedDcForDownload))
			$this->recommendedDcForDownload = (int)$jsonObject->recommendedDcForDownload;
		if(!is_null($xml) && count($xml->recommendedDcForExecute))
			$this->recommendedDcForExecute = (int)$xml->recommendedDcForExecute;
		if(!is_null($jsonObject) && isset($jsonObject->recommendedDcForExecute))
			$this->recommendedDcForExecute = (int)$jsonObject->recommendedDcForExecute;
		if(!is_null($xml) && count($xml->distributeTrigger))
			$this->distributeTrigger = (int)$xml->distributeTrigger;
		if(!is_null($jsonObject) && isset($jsonObject->distributeTrigger))
			$this->distributeTrigger = (int)$jsonObject->distributeTrigger;
		if(!is_null($xml) && count($xml->supportImageEntry))
		{
			if(!empty($xml->supportImageEntry) && ((int) $xml->supportImageEntry === 1 || strtolower((string)$xml->supportImageEntry) === 'true'))
				$this->supportImageEntry = true;
			else
				$this->supportImageEntry = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->supportImageEntry))
		{
			if(!empty($jsonObject->supportImageEntry) && ((int) $jsonObject->supportImageEntry === 1 || strtolower((string)$jsonObject->supportImageEntry) === 'true'))
				$this->supportImageEntry = true;
			else
				$this->supportImageEntry = false;
		}
	}
	/**
	 * Auto generated unique id
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Profile creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Profile last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

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
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProviderType
	 * @insertonly
	 */
	public $providerType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProfileActionStatus
	 */
	public $submitEnabled = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProfileActionStatus
	 */
	public $updateEnabled = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProfileActionStatus
	 */
	public $deleteEnabled = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProfileActionStatus
	 */
	public $reportEnabled = null;

	/**
	 * Comma separated flavor params ids that should be auto converted
	 *
	 * @var string
	 */
	public $autoCreateFlavors = null;

	/**
	 * Comma separated thumbnail params ids that should be auto generated
	 *
	 * @var string
	 */
	public $autoCreateThumb = null;

	/**
	 * Comma separated flavor params ids that should be submitted if ready
	 *
	 * @var string
	 */
	public $optionalFlavorParamsIds = null;

	/**
	 * Comma separated flavor params ids that required to be ready before submission
	 *
	 * @var string
	 */
	public $requiredFlavorParamsIds = null;

	/**
	 * Thumbnail dimensions that should be submitted if ready
	 *
	 * @var array of KalturaDistributionThumbDimensions
	 */
	public $optionalThumbDimensions;

	/**
	 * Thumbnail dimensions that required to be readt before submission
	 *
	 * @var array of KalturaDistributionThumbDimensions
	 */
	public $requiredThumbDimensions;

	/**
	 * Asset Distribution Rules for assets that should be submitted if ready
	 *
	 * @var array of KalturaAssetDistributionRule
	 */
	public $optionalAssetDistributionRules;

	/**
	 * Assets Asset Distribution Rules for assets that are required to be ready before submission
	 *
	 * @var array of KalturaAssetDistributionRule
	 */
	public $requiredAssetDistributionRules;

	/**
	 * If entry distribution sunrise not specified that will be the default since entry creation time, in seconds
	 *
	 * @var int
	 */
	public $sunriseDefaultOffset = null;

	/**
	 * If entry distribution sunset not specified that will be the default since entry creation time, in seconds
	 *
	 * @var int
	 */
	public $sunsetDefaultOffset = null;

	/**
	 * The best external storage to be used to download the asset files from
	 *
	 * @var int
	 */
	public $recommendedStorageProfileForDownload = null;

	/**
	 * The best Kaltura data center to be used to download the asset files to
	 *
	 * @var int
	 */
	public $recommendedDcForDownload = null;

	/**
	 * The best Kaltura data center to be used to execute the distribution job
	 *
	 * @var int
	 */
	public $recommendedDcForExecute = null;

	/**
	 * The event that trigger the automatic distribute
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributeTrigger
	 */
	public $distributeTrigger = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $supportImageEntry = null;


}

