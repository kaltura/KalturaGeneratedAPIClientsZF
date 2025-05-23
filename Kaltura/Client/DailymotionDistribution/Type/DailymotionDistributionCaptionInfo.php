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
class Kaltura_Client_DailymotionDistribution_Type_DailymotionDistributionCaptionInfo extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDailymotionDistributionCaptionInfo';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->filePath))
			$this->filePath = (string)$xml->filePath;
		if(!is_null($jsonObject) && isset($jsonObject->filePath))
			$this->filePath = (string)$jsonObject->filePath;
		if(!is_null($xml) && count($xml->remoteId))
			$this->remoteId = (string)$xml->remoteId;
		if(!is_null($jsonObject) && isset($jsonObject->remoteId))
			$this->remoteId = (string)$jsonObject->remoteId;
		if(!is_null($xml) && count($xml->action))
			$this->action = (int)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (int)$jsonObject->action;
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (string)$jsonObject->assetId;
		if(!is_null($xml) && count($xml->format))
			$this->format = (int)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (int)$jsonObject->format;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $filePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DailymotionDistribution_Enum_DailymotionDistributionCaptionAction
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DailymotionDistribution_Enum_DailymotionDistributionCaptionFormat
	 */
	public $format = null;


}

