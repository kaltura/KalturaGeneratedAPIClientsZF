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
abstract class Kaltura_Client_Type_ThumbParamsOutputBaseFilter extends Kaltura_Client_Type_ThumbParamsFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaThumbParamsOutputBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->thumbParamsIdEqual))
			$this->thumbParamsIdEqual = (int)$xml->thumbParamsIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->thumbParamsIdEqual))
			$this->thumbParamsIdEqual = (int)$jsonObject->thumbParamsIdEqual;
		if(!is_null($xml) && count($xml->thumbParamsVersionEqual))
			$this->thumbParamsVersionEqual = (string)$xml->thumbParamsVersionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->thumbParamsVersionEqual))
			$this->thumbParamsVersionEqual = (string)$jsonObject->thumbParamsVersionEqual;
		if(!is_null($xml) && count($xml->thumbAssetIdEqual))
			$this->thumbAssetIdEqual = (string)$xml->thumbAssetIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetIdEqual))
			$this->thumbAssetIdEqual = (string)$jsonObject->thumbAssetIdEqual;
		if(!is_null($xml) && count($xml->thumbAssetVersionEqual))
			$this->thumbAssetVersionEqual = (string)$xml->thumbAssetVersionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetVersionEqual))
			$this->thumbAssetVersionEqual = (string)$jsonObject->thumbAssetVersionEqual;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $thumbParamsIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbParamsVersionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetVersionEqual = null;


}

