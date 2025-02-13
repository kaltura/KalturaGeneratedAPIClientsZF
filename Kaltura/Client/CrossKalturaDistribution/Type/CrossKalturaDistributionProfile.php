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
class Kaltura_Client_CrossKalturaDistribution_Type_CrossKalturaDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaCrossKalturaDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->targetServiceUrl))
			$this->targetServiceUrl = (string)$xml->targetServiceUrl;
		if(!is_null($jsonObject) && isset($jsonObject->targetServiceUrl))
			$this->targetServiceUrl = (string)$jsonObject->targetServiceUrl;
		if(!is_null($xml) && count($xml->targetAccountId))
			$this->targetAccountId = (int)$xml->targetAccountId;
		if(!is_null($jsonObject) && isset($jsonObject->targetAccountId))
			$this->targetAccountId = (int)$jsonObject->targetAccountId;
		if(!is_null($xml) && count($xml->targetLoginId))
			$this->targetLoginId = (string)$xml->targetLoginId;
		if(!is_null($jsonObject) && isset($jsonObject->targetLoginId))
			$this->targetLoginId = (string)$jsonObject->targetLoginId;
		if(!is_null($xml) && count($xml->targetLoginPassword))
			$this->targetLoginPassword = (string)$xml->targetLoginPassword;
		if(!is_null($jsonObject) && isset($jsonObject->targetLoginPassword))
			$this->targetLoginPassword = (string)$jsonObject->targetLoginPassword;
		if(!is_null($xml) && count($xml->metadataXslt))
			$this->metadataXslt = (string)$xml->metadataXslt;
		if(!is_null($jsonObject) && isset($jsonObject->metadataXslt))
			$this->metadataXslt = (string)$jsonObject->metadataXslt;
		if(!is_null($xml) && count($xml->metadataXpathsTriggerUpdate))
		{
			if(empty($xml->metadataXpathsTriggerUpdate))
				$this->metadataXpathsTriggerUpdate = array();
			else
				$this->metadataXpathsTriggerUpdate = Kaltura_Client_ParseUtils::unmarshalArray($xml->metadataXpathsTriggerUpdate, "KalturaStringValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->metadataXpathsTriggerUpdate))
		{
			if(empty($jsonObject->metadataXpathsTriggerUpdate))
				$this->metadataXpathsTriggerUpdate = array();
			else
				$this->metadataXpathsTriggerUpdate = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->metadataXpathsTriggerUpdate, "KalturaStringValue");
		}
		if(!is_null($xml) && count($xml->distributeCaptions))
		{
			if(!empty($xml->distributeCaptions) && ((int) $xml->distributeCaptions === 1 || strtolower((string)$xml->distributeCaptions) === 'true'))
				$this->distributeCaptions = true;
			else
				$this->distributeCaptions = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->distributeCaptions))
		{
			if(!empty($jsonObject->distributeCaptions) && ((int) $jsonObject->distributeCaptions === 1 || strtolower((string)$jsonObject->distributeCaptions) === 'true'))
				$this->distributeCaptions = true;
			else
				$this->distributeCaptions = false;
		}
		if(!is_null($xml) && count($xml->distributeCuePoints))
		{
			if(!empty($xml->distributeCuePoints) && ((int) $xml->distributeCuePoints === 1 || strtolower((string)$xml->distributeCuePoints) === 'true'))
				$this->distributeCuePoints = true;
			else
				$this->distributeCuePoints = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->distributeCuePoints))
		{
			if(!empty($jsonObject->distributeCuePoints) && ((int) $jsonObject->distributeCuePoints === 1 || strtolower((string)$jsonObject->distributeCuePoints) === 'true'))
				$this->distributeCuePoints = true;
			else
				$this->distributeCuePoints = false;
		}
		if(!is_null($xml) && count($xml->distributeRemoteFlavorAssetContent))
		{
			if(!empty($xml->distributeRemoteFlavorAssetContent) && ((int) $xml->distributeRemoteFlavorAssetContent === 1 || strtolower((string)$xml->distributeRemoteFlavorAssetContent) === 'true'))
				$this->distributeRemoteFlavorAssetContent = true;
			else
				$this->distributeRemoteFlavorAssetContent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->distributeRemoteFlavorAssetContent))
		{
			if(!empty($jsonObject->distributeRemoteFlavorAssetContent) && ((int) $jsonObject->distributeRemoteFlavorAssetContent === 1 || strtolower((string)$jsonObject->distributeRemoteFlavorAssetContent) === 'true'))
				$this->distributeRemoteFlavorAssetContent = true;
			else
				$this->distributeRemoteFlavorAssetContent = false;
		}
		if(!is_null($xml) && count($xml->distributeRemoteThumbAssetContent))
		{
			if(!empty($xml->distributeRemoteThumbAssetContent) && ((int) $xml->distributeRemoteThumbAssetContent === 1 || strtolower((string)$xml->distributeRemoteThumbAssetContent) === 'true'))
				$this->distributeRemoteThumbAssetContent = true;
			else
				$this->distributeRemoteThumbAssetContent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->distributeRemoteThumbAssetContent))
		{
			if(!empty($jsonObject->distributeRemoteThumbAssetContent) && ((int) $jsonObject->distributeRemoteThumbAssetContent === 1 || strtolower((string)$jsonObject->distributeRemoteThumbAssetContent) === 'true'))
				$this->distributeRemoteThumbAssetContent = true;
			else
				$this->distributeRemoteThumbAssetContent = false;
		}
		if(!is_null($xml) && count($xml->distributeRemoteCaptionAssetContent))
		{
			if(!empty($xml->distributeRemoteCaptionAssetContent) && ((int) $xml->distributeRemoteCaptionAssetContent === 1 || strtolower((string)$xml->distributeRemoteCaptionAssetContent) === 'true'))
				$this->distributeRemoteCaptionAssetContent = true;
			else
				$this->distributeRemoteCaptionAssetContent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->distributeRemoteCaptionAssetContent))
		{
			if(!empty($jsonObject->distributeRemoteCaptionAssetContent) && ((int) $jsonObject->distributeRemoteCaptionAssetContent === 1 || strtolower((string)$jsonObject->distributeRemoteCaptionAssetContent) === 'true'))
				$this->distributeRemoteCaptionAssetContent = true;
			else
				$this->distributeRemoteCaptionAssetContent = false;
		}
		if(!is_null($xml) && count($xml->mapAccessControlProfileIds))
		{
			if(empty($xml->mapAccessControlProfileIds))
				$this->mapAccessControlProfileIds = array();
			else
				$this->mapAccessControlProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapAccessControlProfileIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mapAccessControlProfileIds))
		{
			if(empty($jsonObject->mapAccessControlProfileIds))
				$this->mapAccessControlProfileIds = array();
			else
				$this->mapAccessControlProfileIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mapAccessControlProfileIds, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->mapConversionProfileIds))
		{
			if(empty($xml->mapConversionProfileIds))
				$this->mapConversionProfileIds = array();
			else
				$this->mapConversionProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapConversionProfileIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mapConversionProfileIds))
		{
			if(empty($jsonObject->mapConversionProfileIds))
				$this->mapConversionProfileIds = array();
			else
				$this->mapConversionProfileIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mapConversionProfileIds, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->mapMetadataProfileIds))
		{
			if(empty($xml->mapMetadataProfileIds))
				$this->mapMetadataProfileIds = array();
			else
				$this->mapMetadataProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapMetadataProfileIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mapMetadataProfileIds))
		{
			if(empty($jsonObject->mapMetadataProfileIds))
				$this->mapMetadataProfileIds = array();
			else
				$this->mapMetadataProfileIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mapMetadataProfileIds, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->mapStorageProfileIds))
		{
			if(empty($xml->mapStorageProfileIds))
				$this->mapStorageProfileIds = array();
			else
				$this->mapStorageProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapStorageProfileIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mapStorageProfileIds))
		{
			if(empty($jsonObject->mapStorageProfileIds))
				$this->mapStorageProfileIds = array();
			else
				$this->mapStorageProfileIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mapStorageProfileIds, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->mapFlavorParamsIds))
		{
			if(empty($xml->mapFlavorParamsIds))
				$this->mapFlavorParamsIds = array();
			else
				$this->mapFlavorParamsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapFlavorParamsIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mapFlavorParamsIds))
		{
			if(empty($jsonObject->mapFlavorParamsIds))
				$this->mapFlavorParamsIds = array();
			else
				$this->mapFlavorParamsIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mapFlavorParamsIds, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->mapThumbParamsIds))
		{
			if(empty($xml->mapThumbParamsIds))
				$this->mapThumbParamsIds = array();
			else
				$this->mapThumbParamsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapThumbParamsIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mapThumbParamsIds))
		{
			if(empty($jsonObject->mapThumbParamsIds))
				$this->mapThumbParamsIds = array();
			else
				$this->mapThumbParamsIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mapThumbParamsIds, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->mapCaptionParamsIds))
		{
			if(empty($xml->mapCaptionParamsIds))
				$this->mapCaptionParamsIds = array();
			else
				$this->mapCaptionParamsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapCaptionParamsIds, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mapCaptionParamsIds))
		{
			if(empty($jsonObject->mapCaptionParamsIds))
				$this->mapCaptionParamsIds = array();
			else
				$this->mapCaptionParamsIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mapCaptionParamsIds, "KalturaKeyValue");
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $targetServiceUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $targetAccountId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $targetLoginId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $targetLoginPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataXslt = null;

	/**
	 * 
	 *
	 * @var array of KalturaStringValue
	 */
	public $metadataXpathsTriggerUpdate;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeCaptions = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeCuePoints = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeRemoteFlavorAssetContent = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeRemoteThumbAssetContent = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $distributeRemoteCaptionAssetContent = null;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapAccessControlProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapConversionProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapMetadataProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapStorageProfileIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapFlavorParamsIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapThumbParamsIds;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mapCaptionParamsIds;


}

