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
class Kaltura_Client_ElasticSearch_Type_EntryCaptionAdvancedFilter extends Kaltura_Client_Type_SearchItem
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryCaptionAdvancedFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->hasCaption))
			$this->hasCaption = (int)$xml->hasCaption;
		if(!is_null($jsonObject) && isset($jsonObject->hasCaption))
			$this->hasCaption = (int)$jsonObject->hasCaption;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->accuracyGreaterThanOrEqual))
			$this->accuracyGreaterThanOrEqual = (int)$xml->accuracyGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->accuracyGreaterThanOrEqual))
			$this->accuracyGreaterThanOrEqual = (int)$jsonObject->accuracyGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->accuracyLessThanOrEqual))
			$this->accuracyLessThanOrEqual = (int)$xml->accuracyLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->accuracyLessThanOrEqual))
			$this->accuracyLessThanOrEqual = (int)$jsonObject->accuracyLessThanOrEqual;
		if(!is_null($xml) && count($xml->accuracyGreaterThan))
			$this->accuracyGreaterThan = (int)$xml->accuracyGreaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->accuracyGreaterThan))
			$this->accuracyGreaterThan = (int)$jsonObject->accuracyGreaterThan;
		if(!is_null($xml) && count($xml->accuracyLessThan))
			$this->accuracyLessThan = (int)$xml->accuracyLessThan;
		if(!is_null($jsonObject) && isset($jsonObject->accuracyLessThan))
			$this->accuracyLessThan = (int)$jsonObject->accuracyLessThan;
		if(!is_null($xml) && count($xml->usage))
			$this->usage = (string)$xml->usage;
		if(!is_null($jsonObject) && isset($jsonObject->usage))
			$this->usage = (string)$jsonObject->usage;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $hasCaption = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_Language
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accuracyGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accuracyLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accuracyGreaterThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accuracyLessThan = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Caption_Enum_CaptionAssetUsage
	 */
	public $usage = null;


}

