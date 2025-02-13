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
abstract class Kaltura_Client_Type_ConversionProfileAssetParamsBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaConversionProfileAssetParamsBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->conversionProfileIdEqual))
			$this->conversionProfileIdEqual = (int)$xml->conversionProfileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileIdEqual))
			$this->conversionProfileIdEqual = (int)$jsonObject->conversionProfileIdEqual;
		if(!is_null($xml) && count($xml->conversionProfileIdIn))
			$this->conversionProfileIdIn = (string)$xml->conversionProfileIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileIdIn))
			$this->conversionProfileIdIn = (string)$jsonObject->conversionProfileIdIn;
		if(!is_null($xml) && count($xml->assetParamsIdEqual))
			$this->assetParamsIdEqual = (int)$xml->assetParamsIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->assetParamsIdEqual))
			$this->assetParamsIdEqual = (int)$jsonObject->assetParamsIdEqual;
		if(!is_null($xml) && count($xml->assetParamsIdIn))
			$this->assetParamsIdIn = (string)$xml->assetParamsIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->assetParamsIdIn))
			$this->assetParamsIdIn = (string)$jsonObject->assetParamsIdIn;
		if(!is_null($xml) && count($xml->readyBehaviorEqual))
			$this->readyBehaviorEqual = (int)$xml->readyBehaviorEqual;
		if(!is_null($jsonObject) && isset($jsonObject->readyBehaviorEqual))
			$this->readyBehaviorEqual = (int)$jsonObject->readyBehaviorEqual;
		if(!is_null($xml) && count($xml->readyBehaviorIn))
			$this->readyBehaviorIn = (string)$xml->readyBehaviorIn;
		if(!is_null($jsonObject) && isset($jsonObject->readyBehaviorIn))
			$this->readyBehaviorIn = (string)$jsonObject->readyBehaviorIn;
		if(!is_null($xml) && count($xml->originEqual))
			$this->originEqual = (int)$xml->originEqual;
		if(!is_null($jsonObject) && isset($jsonObject->originEqual))
			$this->originEqual = (int)$jsonObject->originEqual;
		if(!is_null($xml) && count($xml->originIn))
			$this->originIn = (string)$xml->originIn;
		if(!is_null($jsonObject) && isset($jsonObject->originIn))
			$this->originIn = (string)$jsonObject->originIn;
		if(!is_null($xml) && count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameEqual))
			$this->systemNameEqual = (string)$jsonObject->systemNameEqual;
		if(!is_null($xml) && count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameIn))
			$this->systemNameIn = (string)$jsonObject->systemNameIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $conversionProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $assetParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsIdIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_FlavorReadyBehaviorType
	 */
	public $readyBehaviorEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $readyBehaviorIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_AssetParamsOrigin
	 */
	public $originEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $originIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;


}

