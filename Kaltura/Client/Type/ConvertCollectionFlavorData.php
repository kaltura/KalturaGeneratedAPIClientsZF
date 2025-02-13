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
class Kaltura_Client_Type_ConvertCollectionFlavorData extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertCollectionFlavorData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->flavorParamsOutputId))
			$this->flavorParamsOutputId = (int)$xml->flavorParamsOutputId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsOutputId))
			$this->flavorParamsOutputId = (int)$jsonObject->flavorParamsOutputId;
		if(!is_null($xml) && count($xml->readyBehavior))
			$this->readyBehavior = (int)$xml->readyBehavior;
		if(!is_null($jsonObject) && isset($jsonObject->readyBehavior))
			$this->readyBehavior = (int)$jsonObject->readyBehavior;
		if(!is_null($xml) && count($xml->videoBitrate))
			$this->videoBitrate = (int)$xml->videoBitrate;
		if(!is_null($jsonObject) && isset($jsonObject->videoBitrate))
			$this->videoBitrate = (int)$jsonObject->videoBitrate;
		if(!is_null($xml) && count($xml->audioBitrate))
			$this->audioBitrate = (int)$xml->audioBitrate;
		if(!is_null($jsonObject) && isset($jsonObject->audioBitrate))
			$this->audioBitrate = (int)$jsonObject->audioBitrate;
		if(!is_null($xml) && count($xml->destFileSyncLocalPath))
			$this->destFileSyncLocalPath = (string)$xml->destFileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->destFileSyncLocalPath))
			$this->destFileSyncLocalPath = (string)$jsonObject->destFileSyncLocalPath;
		if(!is_null($xml) && count($xml->destFileSyncRemoteUrl))
			$this->destFileSyncRemoteUrl = (string)$xml->destFileSyncRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->destFileSyncRemoteUrl))
			$this->destFileSyncRemoteUrl = (string)$jsonObject->destFileSyncRemoteUrl;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsOutputId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $readyBehavior = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $videoBitrate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $audioBitrate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncRemoteUrl = null;


}

