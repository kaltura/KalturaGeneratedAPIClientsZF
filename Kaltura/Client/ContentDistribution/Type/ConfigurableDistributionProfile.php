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
abstract class Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile extends Kaltura_Client_ContentDistribution_Type_DistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaConfigurableDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fieldConfigArray))
		{
			if(empty($xml->fieldConfigArray))
				$this->fieldConfigArray = array();
			else
				$this->fieldConfigArray = Kaltura_Client_ParseUtils::unmarshalArray($xml->fieldConfigArray, "KalturaDistributionFieldConfig");
		}
		if(!is_null($jsonObject) && isset($jsonObject->fieldConfigArray))
		{
			if(empty($jsonObject->fieldConfigArray))
				$this->fieldConfigArray = array();
			else
				$this->fieldConfigArray = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->fieldConfigArray, "KalturaDistributionFieldConfig");
		}
		if(!is_null($xml) && count($xml->itemXpathsToExtend))
		{
			if(empty($xml->itemXpathsToExtend))
				$this->itemXpathsToExtend = array();
			else
				$this->itemXpathsToExtend = Kaltura_Client_ParseUtils::unmarshalArray($xml->itemXpathsToExtend, "KalturaExtendingItemMrssParameter");
		}
		if(!is_null($jsonObject) && isset($jsonObject->itemXpathsToExtend))
		{
			if(empty($jsonObject->itemXpathsToExtend))
				$this->itemXpathsToExtend = array();
			else
				$this->itemXpathsToExtend = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->itemXpathsToExtend, "KalturaExtendingItemMrssParameter");
		}
		if(!is_null($xml) && count($xml->useCategoryEntries))
		{
			if(!empty($xml->useCategoryEntries) && ((int) $xml->useCategoryEntries === 1 || strtolower((string)$xml->useCategoryEntries) === 'true'))
				$this->useCategoryEntries = true;
			else
				$this->useCategoryEntries = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useCategoryEntries))
		{
			if(!empty($jsonObject->useCategoryEntries) && ((int) $jsonObject->useCategoryEntries === 1 || strtolower((string)$jsonObject->useCategoryEntries) === 'true'))
				$this->useCategoryEntries = true;
			else
				$this->useCategoryEntries = false;
		}
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_DistributionFieldConfig[]
	 */
	public $fieldConfigArray;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ExtendingItemMrssParameter[]
	 */
	public $itemXpathsToExtend;

	/**
	 * When checking custom XSLT conditions using the fieldConfigArray - address only categories associated with the entry via the categoryEntry object
	 *
	 * @var bool
	 */
	public $useCategoryEntries = null;


}

