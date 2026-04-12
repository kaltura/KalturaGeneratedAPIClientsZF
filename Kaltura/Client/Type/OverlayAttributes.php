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
class Kaltura_Client_Type_OverlayAttributes extends Kaltura_Client_Type_MediaCompositionAttributes
{
	public function getKalturaObjectType()
	{
		return 'KalturaOverlayAttributes';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->resource) && !empty($xml->resource))
			$this->resource = Kaltura_Client_ParseUtils::unmarshalObject($xml->resource, "KalturaContentResource");
		if(!is_null($jsonObject) && isset($jsonObject->resource) && !empty($jsonObject->resource))
			$this->resource = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->resource, "KalturaContentResource");
		if(!is_null($xml) && count($xml->resourceMediaCompositionAttributesArray))
		{
			if(empty($xml->resourceMediaCompositionAttributesArray))
				$this->resourceMediaCompositionAttributesArray = array();
			else
				$this->resourceMediaCompositionAttributesArray = Kaltura_Client_ParseUtils::unmarshalArray($xml->resourceMediaCompositionAttributesArray, "KalturaMediaCompositionAttributes");
		}
		if(!is_null($jsonObject) && isset($jsonObject->resourceMediaCompositionAttributesArray))
		{
			if(empty($jsonObject->resourceMediaCompositionAttributesArray))
				$this->resourceMediaCompositionAttributesArray = array();
			else
				$this->resourceMediaCompositionAttributesArray = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->resourceMediaCompositionAttributesArray, "KalturaMediaCompositionAttributes");
		}
		if(!is_null($xml) && count($xml->marginsPercentage))
			$this->marginsPercentage = (float)$xml->marginsPercentage;
		if(!is_null($jsonObject) && isset($jsonObject->marginsPercentage))
			$this->marginsPercentage = (float)$jsonObject->marginsPercentage;
		if(!is_null($xml) && count($xml->overlayScalePercentage))
			$this->overlayScalePercentage = (float)$xml->overlayScalePercentage;
		if(!is_null($jsonObject) && isset($jsonObject->overlayScalePercentage))
			$this->overlayScalePercentage = (float)$jsonObject->overlayScalePercentage;
		if(!is_null($xml) && count($xml->overlayPlacement))
			$this->overlayPlacement = (int)$xml->overlayPlacement;
		if(!is_null($jsonObject) && isset($jsonObject->overlayPlacement))
			$this->overlayPlacement = (int)$jsonObject->overlayPlacement;
		if(!is_null($xml) && count($xml->overlayShape))
			$this->overlayShape = (int)$xml->overlayShape;
		if(!is_null($jsonObject) && isset($jsonObject->overlayShape))
			$this->overlayShape = (int)$jsonObject->overlayShape;
		if(!is_null($xml) && count($xml->audioAttributes) && !empty($xml->audioAttributes))
			$this->audioAttributes = Kaltura_Client_ParseUtils::unmarshalObject($xml->audioAttributes, "KalturaAudioAttributes");
		if(!is_null($jsonObject) && isset($jsonObject->audioAttributes) && !empty($jsonObject->audioAttributes))
			$this->audioAttributes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->audioAttributes, "KalturaAudioAttributes");
	}
	/**
	 * Only KalturaEntryResource and KalturaAssetResource are supported
	 *
	 * @var Kaltura_Client_Type_ContentResource
	 */
	public $resource;

	/**
	 * Only KalturaReplaceBackgroundAttributes is supported
	 *
	 * @var Kaltura_Client_Type_MediaCompositionAttributes[]
	 */
	public $resourceMediaCompositionAttributesArray;

	/**
	 * 
	 *
	 * @var float
	 */
	public $marginsPercentage = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $overlayScalePercentage = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_MediaCompositionAlignment
	 */
	public $overlayPlacement = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_OverlayShape
	 */
	public $overlayShape = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_AudioAttributes
	 */
	public $audioAttributes;


}

