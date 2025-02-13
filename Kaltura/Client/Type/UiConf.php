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
class Kaltura_Client_Type_UiConf extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUiConf';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->objType))
			$this->objType = (int)$xml->objType;
		if(!is_null($jsonObject) && isset($jsonObject->objType))
			$this->objType = (int)$jsonObject->objType;
		if(!is_null($xml) && count($xml->objTypeAsString))
			$this->objTypeAsString = (string)$xml->objTypeAsString;
		if(!is_null($jsonObject) && isset($jsonObject->objTypeAsString))
			$this->objTypeAsString = (string)$jsonObject->objTypeAsString;
		if(!is_null($xml) && count($xml->width))
			$this->width = (int)$xml->width;
		if(!is_null($jsonObject) && isset($jsonObject->width))
			$this->width = (int)$jsonObject->width;
		if(!is_null($xml) && count($xml->height))
			$this->height = (int)$xml->height;
		if(!is_null($jsonObject) && isset($jsonObject->height))
			$this->height = (int)$jsonObject->height;
		if(!is_null($xml) && count($xml->htmlParams))
			$this->htmlParams = (string)$xml->htmlParams;
		if(!is_null($jsonObject) && isset($jsonObject->htmlParams))
			$this->htmlParams = (string)$jsonObject->htmlParams;
		if(!is_null($xml) && count($xml->swfUrl))
			$this->swfUrl = (string)$xml->swfUrl;
		if(!is_null($jsonObject) && isset($jsonObject->swfUrl))
			$this->swfUrl = (string)$jsonObject->swfUrl;
		if(!is_null($xml) && count($xml->confFilePath))
			$this->confFilePath = (string)$xml->confFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->confFilePath))
			$this->confFilePath = (string)$jsonObject->confFilePath;
		if(!is_null($xml) && count($xml->confFile))
			$this->confFile = (string)$xml->confFile;
		if(!is_null($jsonObject) && isset($jsonObject->confFile))
			$this->confFile = (string)$jsonObject->confFile;
		if(!is_null($xml) && count($xml->confFileFeatures))
			$this->confFileFeatures = (string)$xml->confFileFeatures;
		if(!is_null($jsonObject) && isset($jsonObject->confFileFeatures))
			$this->confFileFeatures = (string)$jsonObject->confFileFeatures;
		if(!is_null($xml) && count($xml->config))
			$this->config = (string)$xml->config;
		if(!is_null($jsonObject) && isset($jsonObject->config))
			$this->config = (string)$jsonObject->config;
		if(!is_null($xml) && count($xml->confVars))
			$this->confVars = (string)$xml->confVars;
		if(!is_null($jsonObject) && isset($jsonObject->confVars))
			$this->confVars = (string)$jsonObject->confVars;
		if(!is_null($xml) && count($xml->useCdn))
		{
			if(!empty($xml->useCdn) && ((int) $xml->useCdn === 1 || strtolower((string)$xml->useCdn) === 'true'))
				$this->useCdn = true;
			else
				$this->useCdn = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useCdn))
		{
			if(!empty($jsonObject->useCdn) && ((int) $jsonObject->useCdn === 1 || strtolower((string)$jsonObject->useCdn) === 'true'))
				$this->useCdn = true;
			else
				$this->useCdn = false;
		}
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->swfUrlVersion))
			$this->swfUrlVersion = (string)$xml->swfUrlVersion;
		if(!is_null($jsonObject) && isset($jsonObject->swfUrlVersion))
			$this->swfUrlVersion = (string)$jsonObject->swfUrlVersion;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->creationMode))
			$this->creationMode = (int)$xml->creationMode;
		if(!is_null($jsonObject) && isset($jsonObject->creationMode))
			$this->creationMode = (int)$jsonObject->creationMode;
		if(!is_null($xml) && count($xml->html5Url))
			$this->html5Url = (string)$xml->html5Url;
		if(!is_null($jsonObject) && isset($jsonObject->html5Url))
			$this->html5Url = (string)$jsonObject->html5Url;
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->partnerTags))
			$this->partnerTags = (string)$xml->partnerTags;
		if(!is_null($jsonObject) && isset($jsonObject->partnerTags))
			$this->partnerTags = (string)$jsonObject->partnerTags;
		if(!is_null($xml) && count($xml->v2Redirect) && !empty($xml->v2Redirect))
			$this->v2Redirect = Kaltura_Client_ParseUtils::unmarshalObject($xml->v2Redirect, "KalturaUiConfV2Redirect");
		if(!is_null($jsonObject) && isset($jsonObject->v2Redirect) && !empty($jsonObject->v2Redirect))
			$this->v2Redirect = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->v2Redirect, "KalturaUiConfV2Redirect");
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Name of the uiConf, this is not a primary key
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_UiConfObjType
	 */
	public $objType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $objTypeAsString = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $htmlParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $swfUrl = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $confFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confFile = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confFileFeatures = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $config = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $confVars = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $useCdn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $swfUrlVersion = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Entry creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_UiConfCreationMode
	 */
	public $creationMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $html5Url = null;

	/**
	 * UiConf version
	 *
	 * @var string
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerTags = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_UiConfV2Redirect
	 */
	public $v2Redirect;


}

