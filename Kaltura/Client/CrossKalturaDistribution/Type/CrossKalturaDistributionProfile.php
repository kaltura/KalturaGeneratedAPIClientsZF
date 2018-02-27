<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2018  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->targetServiceUrl))
			$this->targetServiceUrl = (string)$xml->targetServiceUrl;
		if(count($xml->targetAccountId))
			$this->targetAccountId = (int)$xml->targetAccountId;
		if(count($xml->targetLoginId))
			$this->targetLoginId = (string)$xml->targetLoginId;
		if(count($xml->targetLoginPassword))
			$this->targetLoginPassword = (string)$xml->targetLoginPassword;
		if(count($xml->metadataXslt))
			$this->metadataXslt = (string)$xml->metadataXslt;
		if(count($xml->metadataXpathsTriggerUpdate))
		{
			if(empty($xml->metadataXpathsTriggerUpdate))
				$this->metadataXpathsTriggerUpdate = array();
			else
				$this->metadataXpathsTriggerUpdate = Kaltura_Client_ParseUtils::unmarshalArray($xml->metadataXpathsTriggerUpdate, "KalturaStringValue");
		}
		if(count($xml->distributeCaptions))
		{
			if(!empty($xml->distributeCaptions) && ((int) $xml->distributeCaptions === 1 || strtolower((string)$xml->distributeCaptions) === 'true'))
				$this->distributeCaptions = true;
			else
				$this->distributeCaptions = false;
		}
		if(count($xml->distributeCuePoints))
		{
			if(!empty($xml->distributeCuePoints) && ((int) $xml->distributeCuePoints === 1 || strtolower((string)$xml->distributeCuePoints) === 'true'))
				$this->distributeCuePoints = true;
			else
				$this->distributeCuePoints = false;
		}
		if(count($xml->distributeRemoteFlavorAssetContent))
		{
			if(!empty($xml->distributeRemoteFlavorAssetContent) && ((int) $xml->distributeRemoteFlavorAssetContent === 1 || strtolower((string)$xml->distributeRemoteFlavorAssetContent) === 'true'))
				$this->distributeRemoteFlavorAssetContent = true;
			else
				$this->distributeRemoteFlavorAssetContent = false;
		}
		if(count($xml->distributeRemoteThumbAssetContent))
		{
			if(!empty($xml->distributeRemoteThumbAssetContent) && ((int) $xml->distributeRemoteThumbAssetContent === 1 || strtolower((string)$xml->distributeRemoteThumbAssetContent) === 'true'))
				$this->distributeRemoteThumbAssetContent = true;
			else
				$this->distributeRemoteThumbAssetContent = false;
		}
		if(count($xml->distributeRemoteCaptionAssetContent))
		{
			if(!empty($xml->distributeRemoteCaptionAssetContent) && ((int) $xml->distributeRemoteCaptionAssetContent === 1 || strtolower((string)$xml->distributeRemoteCaptionAssetContent) === 'true'))
				$this->distributeRemoteCaptionAssetContent = true;
			else
				$this->distributeRemoteCaptionAssetContent = false;
		}
		if(count($xml->mapAccessControlProfileIds))
		{
			if(empty($xml->mapAccessControlProfileIds))
				$this->mapAccessControlProfileIds = array();
			else
				$this->mapAccessControlProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapAccessControlProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapConversionProfileIds))
		{
			if(empty($xml->mapConversionProfileIds))
				$this->mapConversionProfileIds = array();
			else
				$this->mapConversionProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapConversionProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapMetadataProfileIds))
		{
			if(empty($xml->mapMetadataProfileIds))
				$this->mapMetadataProfileIds = array();
			else
				$this->mapMetadataProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapMetadataProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapStorageProfileIds))
		{
			if(empty($xml->mapStorageProfileIds))
				$this->mapStorageProfileIds = array();
			else
				$this->mapStorageProfileIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapStorageProfileIds, "KalturaKeyValue");
		}
		if(count($xml->mapFlavorParamsIds))
		{
			if(empty($xml->mapFlavorParamsIds))
				$this->mapFlavorParamsIds = array();
			else
				$this->mapFlavorParamsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapFlavorParamsIds, "KalturaKeyValue");
		}
		if(count($xml->mapThumbParamsIds))
		{
			if(empty($xml->mapThumbParamsIds))
				$this->mapThumbParamsIds = array();
			else
				$this->mapThumbParamsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapThumbParamsIds, "KalturaKeyValue");
		}
		if(count($xml->mapCaptionParamsIds))
		{
			if(empty($xml->mapCaptionParamsIds))
				$this->mapCaptionParamsIds = array();
			else
				$this->mapCaptionParamsIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->mapCaptionParamsIds, "KalturaKeyValue");
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

