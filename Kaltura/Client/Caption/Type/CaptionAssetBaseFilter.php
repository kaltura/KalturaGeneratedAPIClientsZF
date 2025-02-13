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
abstract class Kaltura_Client_Caption_Type_CaptionAssetBaseFilter extends Kaltura_Client_Type_AssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptionAssetBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->captionParamsIdEqual))
			$this->captionParamsIdEqual = (int)$xml->captionParamsIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->captionParamsIdEqual))
			$this->captionParamsIdEqual = (int)$jsonObject->captionParamsIdEqual;
		if(!is_null($xml) && count($xml->captionParamsIdIn))
			$this->captionParamsIdIn = (string)$xml->captionParamsIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->captionParamsIdIn))
			$this->captionParamsIdIn = (string)$jsonObject->captionParamsIdIn;
		if(!is_null($xml) && count($xml->formatEqual))
			$this->formatEqual = (string)$xml->formatEqual;
		if(!is_null($jsonObject) && isset($jsonObject->formatEqual))
			$this->formatEqual = (string)$jsonObject->formatEqual;
		if(!is_null($xml) && count($xml->formatIn))
			$this->formatIn = (string)$xml->formatIn;
		if(!is_null($jsonObject) && isset($jsonObject->formatIn))
			$this->formatIn = (string)$jsonObject->formatIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->statusNotIn))
			$this->statusNotIn = (string)$xml->statusNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusNotIn))
			$this->statusNotIn = (string)$jsonObject->statusNotIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $captionParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionParamsIdIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Caption_Enum_CaptionType
	 */
	public $formatEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $formatIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Caption_Enum_CaptionAssetStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusNotIn = null;


}

