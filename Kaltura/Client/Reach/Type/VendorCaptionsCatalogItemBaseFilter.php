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
abstract class Kaltura_Client_Reach_Type_VendorCaptionsCatalogItemBaseFilter extends Kaltura_Client_Reach_Type_VendorCatalogItemFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaVendorCaptionsCatalogItemBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->sourceLanguageEqual))
			$this->sourceLanguageEqual = (string)$xml->sourceLanguageEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sourceLanguageEqual))
			$this->sourceLanguageEqual = (string)$jsonObject->sourceLanguageEqual;
		if(!is_null($xml) && count($xml->sourceLanguageIn))
			$this->sourceLanguageIn = (string)$xml->sourceLanguageIn;
		if(!is_null($jsonObject) && isset($jsonObject->sourceLanguageIn))
			$this->sourceLanguageIn = (string)$jsonObject->sourceLanguageIn;
		if(!is_null($xml) && count($xml->outputFormatEqual))
			$this->outputFormatEqual = (int)$xml->outputFormatEqual;
		if(!is_null($jsonObject) && isset($jsonObject->outputFormatEqual))
			$this->outputFormatEqual = (int)$jsonObject->outputFormatEqual;
		if(!is_null($xml) && count($xml->outputFormatIn))
			$this->outputFormatIn = (string)$xml->outputFormatIn;
		if(!is_null($jsonObject) && isset($jsonObject->outputFormatIn))
			$this->outputFormatIn = (string)$jsonObject->outputFormatIn;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_CatalogItemLanguage
	 */
	public $sourceLanguageEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceLanguageIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorCatalogItemOutputFormat
	 */
	public $outputFormatEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $outputFormatIn = null;


}

