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
class Kaltura_Client_CaptionSearch_Type_CaptionAssetItem extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptionAssetItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->asset) && !empty($xml->asset))
			$this->asset = Kaltura_Client_ParseUtils::unmarshalObject($xml->asset, "KalturaCaptionAsset");
		if(!is_null($jsonObject) && isset($jsonObject->asset) && !empty($jsonObject->asset))
			$this->asset = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->asset, "KalturaCaptionAsset");
		if(!is_null($xml) && count($xml->entry) && !empty($xml->entry))
			$this->entry = Kaltura_Client_ParseUtils::unmarshalObject($xml->entry, "KalturaBaseEntry");
		if(!is_null($jsonObject) && isset($jsonObject->entry) && !empty($jsonObject->entry))
			$this->entry = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->entry, "KalturaBaseEntry");
		if(!is_null($xml) && count($xml->startTime))
			$this->startTime = (int)$xml->startTime;
		if(!is_null($jsonObject) && isset($jsonObject->startTime))
			$this->startTime = (int)$jsonObject->startTime;
		if(!is_null($xml) && count($xml->endTime))
			$this->endTime = (int)$xml->endTime;
		if(!is_null($jsonObject) && isset($jsonObject->endTime))
			$this->endTime = (int)$jsonObject->endTime;
		if(!is_null($xml) && count($xml->content))
			$this->content = (string)$xml->content;
		if(!is_null($jsonObject) && isset($jsonObject->content))
			$this->content = (string)$jsonObject->content;
	}
	/**
	 * The Caption Asset object
	 *
	 * @var Kaltura_Client_Caption_Type_CaptionAsset
	 */
	public $asset;

	/**
	 * The entry object
	 *
	 * @var Kaltura_Client_Type_BaseEntry
	 */
	public $entry;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $content = null;


}

