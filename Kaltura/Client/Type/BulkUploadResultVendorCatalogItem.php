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
class Kaltura_Client_Type_BulkUploadResultVendorCatalogItem extends Kaltura_Client_Type_BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultVendorCatalogItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->vendorCatalogItemId))
			$this->vendorCatalogItemId = (int)$xml->vendorCatalogItemId;
		if(!is_null($jsonObject) && isset($jsonObject->vendorCatalogItemId))
			$this->vendorCatalogItemId = (int)$jsonObject->vendorCatalogItemId;
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
		if(!is_null($xml) && count($xml->serviceFeature))
			$this->serviceFeature = (int)$xml->serviceFeature;
		if(!is_null($jsonObject) && isset($jsonObject->serviceFeature))
			$this->serviceFeature = (int)$jsonObject->serviceFeature;
		if(!is_null($xml) && count($xml->serviceType))
			$this->serviceType = (int)$xml->serviceType;
		if(!is_null($jsonObject) && isset($jsonObject->serviceType))
			$this->serviceType = (int)$jsonObject->serviceType;
		if(!is_null($xml) && count($xml->turnAroundTime))
			$this->turnAroundTime = (int)$xml->turnAroundTime;
		if(!is_null($jsonObject) && isset($jsonObject->turnAroundTime))
			$this->turnAroundTime = (int)$jsonObject->turnAroundTime;
		if(!is_null($xml) && count($xml->sourceLanguage))
			$this->sourceLanguage = (string)$xml->sourceLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->sourceLanguage))
			$this->sourceLanguage = (string)$jsonObject->sourceLanguage;
		if(!is_null($xml) && count($xml->targetLanguage))
			$this->targetLanguage = (string)$xml->targetLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->targetLanguage))
			$this->targetLanguage = (string)$jsonObject->targetLanguage;
		if(!is_null($xml) && count($xml->outputFormat))
			$this->outputFormat = (int)$xml->outputFormat;
		if(!is_null($jsonObject) && isset($jsonObject->outputFormat))
			$this->outputFormat = (int)$jsonObject->outputFormat;
		if(!is_null($xml) && count($xml->enableSpeakerId))
			$this->enableSpeakerId = (int)$xml->enableSpeakerId;
		if(!is_null($jsonObject) && isset($jsonObject->enableSpeakerId))
			$this->enableSpeakerId = (int)$jsonObject->enableSpeakerId;
		if(!is_null($xml) && count($xml->fixedPriceAddons))
			$this->fixedPriceAddons = (int)$xml->fixedPriceAddons;
		if(!is_null($jsonObject) && isset($jsonObject->fixedPriceAddons))
			$this->fixedPriceAddons = (int)$jsonObject->fixedPriceAddons;
		if(!is_null($xml) && count($xml->pricing) && !empty($xml->pricing))
			$this->pricing = Kaltura_Client_ParseUtils::unmarshalObject($xml->pricing, "KalturaVendorCatalogItemPricing");
		if(!is_null($jsonObject) && isset($jsonObject->pricing) && !empty($jsonObject->pricing))
			$this->pricing = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->pricing, "KalturaVendorCatalogItemPricing");
		if(!is_null($xml) && count($xml->flavorParamsId))
			$this->flavorParamsId = (int)$xml->flavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsId))
			$this->flavorParamsId = (int)$jsonObject->flavorParamsId;
		if(!is_null($xml) && count($xml->clearAudioFlavorParamsId))
			$this->clearAudioFlavorParamsId = (int)$xml->clearAudioFlavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->clearAudioFlavorParamsId))
			$this->clearAudioFlavorParamsId = (int)$jsonObject->clearAudioFlavorParamsId;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $vendorCatalogItemId = null;

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
	 * @var Kaltura_Client_Reach_Enum_VendorServiceFeature
	 */
	public $serviceFeature = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceType
	 */
	public $serviceType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceTurnAroundTime
	 */
	public $turnAroundTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_CatalogItemLanguage
	 */
	public $sourceLanguage = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_CatalogItemLanguage
	 */
	public $targetLanguage = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorCatalogItemOutputFormat
	 */
	public $outputFormat = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableSpeakerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fixedPriceAddons = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Type_VendorCatalogItemPricing
	 */
	public $pricing;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $clearAudioFlavorParamsId = null;


}

