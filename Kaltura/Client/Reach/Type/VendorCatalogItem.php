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
abstract class Kaltura_Client_Reach_Type_VendorCatalogItem extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaVendorCatalogItem';
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
		if(!is_null($xml) && count($xml->vendorPartnerId))
			$this->vendorPartnerId = (int)$xml->vendorPartnerId;
		if(!is_null($jsonObject) && isset($jsonObject->vendorPartnerId))
			$this->vendorPartnerId = (int)$jsonObject->vendorPartnerId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->serviceType))
			$this->serviceType = (int)$xml->serviceType;
		if(!is_null($jsonObject) && isset($jsonObject->serviceType))
			$this->serviceType = (int)$jsonObject->serviceType;
		if(!is_null($xml) && count($xml->serviceFeature))
			$this->serviceFeature = (int)$xml->serviceFeature;
		if(!is_null($jsonObject) && isset($jsonObject->serviceFeature))
			$this->serviceFeature = (int)$jsonObject->serviceFeature;
		if(!is_null($xml) && count($xml->turnAroundTime))
			$this->turnAroundTime = (int)$xml->turnAroundTime;
		if(!is_null($jsonObject) && isset($jsonObject->turnAroundTime))
			$this->turnAroundTime = (int)$jsonObject->turnAroundTime;
		if(!is_null($xml) && count($xml->pricing) && !empty($xml->pricing))
			$this->pricing = Kaltura_Client_ParseUtils::unmarshalObject($xml->pricing, "KalturaVendorCatalogItemPricing");
		if(!is_null($jsonObject) && isset($jsonObject->pricing) && !empty($jsonObject->pricing))
			$this->pricing = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->pricing, "KalturaVendorCatalogItemPricing");
		if(!is_null($xml) && count($xml->engineType))
			$this->engineType = (string)$xml->engineType;
		if(!is_null($jsonObject) && isset($jsonObject->engineType))
			$this->engineType = (string)$jsonObject->engineType;
		if(!is_null($xml) && count($xml->sourceLanguage))
			$this->sourceLanguage = (string)$xml->sourceLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->sourceLanguage))
			$this->sourceLanguage = (string)$jsonObject->sourceLanguage;
		if(!is_null($xml) && count($xml->allowResubmission))
		{
			if(!empty($xml->allowResubmission) && ((int) $xml->allowResubmission === 1 || strtolower((string)$xml->allowResubmission) === 'true'))
				$this->allowResubmission = true;
			else
				$this->allowResubmission = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowResubmission))
		{
			if(!empty($jsonObject->allowResubmission) && ((int) $jsonObject->allowResubmission === 1 || strtolower((string)$jsonObject->allowResubmission) === 'true'))
				$this->allowResubmission = true;
			else
				$this->allowResubmission = false;
		}
		if(!is_null($xml) && count($xml->vendorData))
			$this->vendorData = (string)$xml->vendorData;
		if(!is_null($jsonObject) && isset($jsonObject->vendorData))
			$this->vendorData = (string)$jsonObject->vendorData;
		if(!is_null($xml) && count($xml->stage))
			$this->stage = (int)$xml->stage;
		if(!is_null($jsonObject) && isset($jsonObject->stage))
			$this->stage = (int)$jsonObject->stage;
		if(!is_null($xml) && count($xml->lastBulkUpdateId))
			$this->lastBulkUpdateId = (int)$xml->lastBulkUpdateId;
		if(!is_null($jsonObject) && isset($jsonObject->lastBulkUpdateId))
			$this->lastBulkUpdateId = (int)$jsonObject->lastBulkUpdateId;
		if(!is_null($xml) && count($xml->contract))
			$this->contract = (string)$xml->contract;
		if(!is_null($jsonObject) && isset($jsonObject->contract))
			$this->contract = (string)$jsonObject->contract;
		if(!is_null($xml) && count($xml->createdBy))
			$this->createdBy = (string)$xml->createdBy;
		if(!is_null($jsonObject) && isset($jsonObject->createdBy))
			$this->createdBy = (string)$jsonObject->createdBy;
		if(!is_null($xml) && count($xml->notes))
			$this->notes = (string)$xml->notes;
		if(!is_null($jsonObject) && isset($jsonObject->notes))
			$this->notes = (string)$jsonObject->notes;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->defaultReachProfileId))
			$this->defaultReachProfileId = (int)$xml->defaultReachProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->defaultReachProfileId))
			$this->defaultReachProfileId = (int)$jsonObject->defaultReachProfileId;
		if(!is_null($xml) && count($xml->adminTagsToExclude))
			$this->adminTagsToExclude = (string)$xml->adminTagsToExclude;
		if(!is_null($jsonObject) && isset($jsonObject->adminTagsToExclude))
			$this->adminTagsToExclude = (string)$jsonObject->adminTagsToExclude;
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $vendorPartnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemName = null;

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
	 * @var Kaltura_Client_Reach_Enum_VendorCatalogItemStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceType
	 */
	public $serviceType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceFeature
	 * @readonly
	 */
	public $serviceFeature = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceTurnAroundTime
	 */
	public $turnAroundTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Type_VendorCatalogItemPricing
	 */
	public $pricing;

	/**
	 * Property showing the catalog item's engine type, in case a vendor can offer the same service via different engines.
	 *
	 * @var Kaltura_Client_Reach_Enum_ReachVendorEngineType
	 */
	public $engineType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_CatalogItemLanguage
	 */
	public $sourceLanguage = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowResubmission = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vendorData = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorCatalogItemStage
	 */
	public $stage = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastBulkUpdateId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contract = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $createdBy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defaultReachProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminTagsToExclude = null;


}

