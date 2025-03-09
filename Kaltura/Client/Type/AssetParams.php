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
class Kaltura_Client_Type_AssetParams extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAssetParams';
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
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->isSystemDefault))
			$this->isSystemDefault = (int)$xml->isSystemDefault;
		if(!is_null($jsonObject) && isset($jsonObject->isSystemDefault))
			$this->isSystemDefault = (int)$jsonObject->isSystemDefault;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->requiredPermissions))
		{
			if(empty($xml->requiredPermissions))
				$this->requiredPermissions = array();
			else
				$this->requiredPermissions = Kaltura_Client_ParseUtils::unmarshalArray($xml->requiredPermissions, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->requiredPermissions))
		{
			if(empty($jsonObject->requiredPermissions))
				$this->requiredPermissions = array();
			else
				$this->requiredPermissions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->requiredPermissions, "KalturaString");
		}
		if(!is_null($xml) && count($xml->sourceRemoteStorageProfileId))
			$this->sourceRemoteStorageProfileId = (int)$xml->sourceRemoteStorageProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->sourceRemoteStorageProfileId))
			$this->sourceRemoteStorageProfileId = (int)$jsonObject->sourceRemoteStorageProfileId;
		if(!is_null($xml) && count($xml->remoteStorageProfileIds))
			$this->remoteStorageProfileIds = (int)$xml->remoteStorageProfileIds;
		if(!is_null($jsonObject) && isset($jsonObject->remoteStorageProfileIds))
			$this->remoteStorageProfileIds = (int)$jsonObject->remoteStorageProfileIds;
		if(!is_null($xml) && count($xml->mediaParserType))
			$this->mediaParserType = (string)$xml->mediaParserType;
		if(!is_null($jsonObject) && isset($jsonObject->mediaParserType))
			$this->mediaParserType = (string)$jsonObject->mediaParserType;
		if(!is_null($xml) && count($xml->sourceAssetParamsIds))
			$this->sourceAssetParamsIds = (string)$xml->sourceAssetParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->sourceAssetParamsIds))
			$this->sourceAssetParamsIds = (string)$jsonObject->sourceAssetParamsIds;
	}
	/**
	 * The id of the Flavor Params
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * The name of the Flavor Params
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Flavor Params
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * The description of the Flavor Params
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * True if those Flavor Params are part of system defaults
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $isSystemDefault = null;

	/**
	 * The Flavor Params tags are used to identify the flavor for different usage (e.g. web, hd, mobile)
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * Array of partner permisison names that required for using this asset params
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $requiredPermissions;

	/**
	 * Id of remote storage profile that used to get the source, zero indicates Kaltura data center
	 *
	 * @var int
	 */
	public $sourceRemoteStorageProfileId = null;

	/**
	 * Comma seperated ids of remote storage profiles that the flavor distributed to, the distribution done by the conversion engine
	 *
	 * @var int
	 */
	public $remoteStorageProfileIds = null;

	/**
	 * Media parser type to be used for post-conversion validation
	 *
	 * @var Kaltura_Client_Enum_MediaParserType
	 */
	public $mediaParserType = null;

	/**
	 * Comma seperated ids of source flavor params this flavor is created from
	 *
	 * @var string
	 */
	public $sourceAssetParamsIds = null;


}

