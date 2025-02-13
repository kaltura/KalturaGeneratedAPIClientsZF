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
class Kaltura_Client_Type_PlaybackSource extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaybackSource';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->deliveryProfileId))
			$this->deliveryProfileId = (string)$xml->deliveryProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->deliveryProfileId))
			$this->deliveryProfileId = (string)$jsonObject->deliveryProfileId;
		if(!is_null($xml) && count($xml->format))
			$this->format = (string)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (string)$jsonObject->format;
		if(!is_null($xml) && count($xml->protocols))
			$this->protocols = (string)$xml->protocols;
		if(!is_null($jsonObject) && isset($jsonObject->protocols))
			$this->protocols = (string)$jsonObject->protocols;
		if(!is_null($xml) && count($xml->flavorIds))
			$this->flavorIds = (string)$xml->flavorIds;
		if(!is_null($jsonObject) && isset($jsonObject->flavorIds))
			$this->flavorIds = (string)$jsonObject->flavorIds;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->drm))
		{
			if(empty($xml->drm))
				$this->drm = array();
			else
				$this->drm = Kaltura_Client_ParseUtils::unmarshalArray($xml->drm, "KalturaDrmPlaybackPluginData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->drm))
		{
			if(empty($jsonObject->drm))
				$this->drm = array();
			else
				$this->drm = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->drm, "KalturaDrmPlaybackPluginData");
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $deliveryProfileId = null;

	/**
	 * source format according to delivery profile streamer type (applehttp, mpegdash etc.)
	 *
	 * @var string
	 */
	public $format = null;

	/**
	 * comma separated string according to deliveryProfile media protocols ('http,https' etc.)
	 *
	 * @var string
	 */
	public $protocols = null;

	/**
	 * comma separated string of flavor ids
	 *
	 * @var string
	 */
	public $flavorIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * drm data object containing relevant license url ,scheme name and certificate
	 *
	 * @var array of KalturaDrmPlaybackPluginData
	 */
	public $drm;


}

