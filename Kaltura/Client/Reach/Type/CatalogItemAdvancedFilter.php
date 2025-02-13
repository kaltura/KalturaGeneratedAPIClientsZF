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
class Kaltura_Client_Reach_Type_CatalogItemAdvancedFilter extends Kaltura_Client_Type_SearchItem
{
	public function getKalturaObjectType()
	{
		return 'KalturaCatalogItemAdvancedFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->serviceTypeEqual))
			$this->serviceTypeEqual = (int)$xml->serviceTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->serviceTypeEqual))
			$this->serviceTypeEqual = (int)$jsonObject->serviceTypeEqual;
		if(!is_null($xml) && count($xml->serviceTypeIn))
			$this->serviceTypeIn = (string)$xml->serviceTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->serviceTypeIn))
			$this->serviceTypeIn = (string)$jsonObject->serviceTypeIn;
		if(!is_null($xml) && count($xml->serviceFeatureEqual))
			$this->serviceFeatureEqual = (int)$xml->serviceFeatureEqual;
		if(!is_null($jsonObject) && isset($jsonObject->serviceFeatureEqual))
			$this->serviceFeatureEqual = (int)$jsonObject->serviceFeatureEqual;
		if(!is_null($xml) && count($xml->serviceFeatureIn))
			$this->serviceFeatureIn = (string)$xml->serviceFeatureIn;
		if(!is_null($jsonObject) && isset($jsonObject->serviceFeatureIn))
			$this->serviceFeatureIn = (string)$jsonObject->serviceFeatureIn;
		if(!is_null($xml) && count($xml->turnAroundTimeEqual))
			$this->turnAroundTimeEqual = (int)$xml->turnAroundTimeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->turnAroundTimeEqual))
			$this->turnAroundTimeEqual = (int)$jsonObject->turnAroundTimeEqual;
		if(!is_null($xml) && count($xml->turnAroundTimeIn))
			$this->turnAroundTimeIn = (string)$xml->turnAroundTimeIn;
		if(!is_null($jsonObject) && isset($jsonObject->turnAroundTimeIn))
			$this->turnAroundTimeIn = (string)$jsonObject->turnAroundTimeIn;
		if(!is_null($xml) && count($xml->sourceLanguageEqual))
			$this->sourceLanguageEqual = (string)$xml->sourceLanguageEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sourceLanguageEqual))
			$this->sourceLanguageEqual = (string)$jsonObject->sourceLanguageEqual;
		if(!is_null($xml) && count($xml->targetLanguageEqual))
			$this->targetLanguageEqual = (string)$xml->targetLanguageEqual;
		if(!is_null($jsonObject) && isset($jsonObject->targetLanguageEqual))
			$this->targetLanguageEqual = (string)$jsonObject->targetLanguageEqual;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceType
	 */
	public $serviceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceTypeIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceFeature
	 */
	public $serviceFeatureEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceFeatureIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceTurnAroundTime
	 */
	public $turnAroundTimeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $turnAroundTimeIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_CatalogItemLanguage
	 */
	public $sourceLanguageEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_CatalogItemLanguage
	 */
	public $targetLanguageEqual = null;


}

