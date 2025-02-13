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
class Kaltura_Client_Type_DeliveryProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeliveryProfile';
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
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
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
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->streamerType))
			$this->streamerType = (string)$xml->streamerType;
		if(!is_null($jsonObject) && isset($jsonObject->streamerType))
			$this->streamerType = (string)$jsonObject->streamerType;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->hostName))
			$this->hostName = (string)$xml->hostName;
		if(!is_null($jsonObject) && isset($jsonObject->hostName))
			$this->hostName = (string)$jsonObject->hostName;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->recognizer) && !empty($xml->recognizer))
			$this->recognizer = Kaltura_Client_ParseUtils::unmarshalObject($xml->recognizer, "KalturaUrlRecognizer");
		if(!is_null($jsonObject) && isset($jsonObject->recognizer) && !empty($jsonObject->recognizer))
			$this->recognizer = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->recognizer, "KalturaUrlRecognizer");
		if(!is_null($xml) && count($xml->tokenizer) && !empty($xml->tokenizer))
			$this->tokenizer = Kaltura_Client_ParseUtils::unmarshalObject($xml->tokenizer, "KalturaUrlTokenizer");
		if(!is_null($jsonObject) && isset($jsonObject->tokenizer) && !empty($jsonObject->tokenizer))
			$this->tokenizer = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->tokenizer, "KalturaUrlTokenizer");
		if(!is_null($xml) && count($xml->isDefault))
			$this->isDefault = (int)$xml->isDefault;
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
			$this->isDefault = (int)$jsonObject->isDefault;
		if(!is_null($xml) && count($xml->parentId))
			$this->parentId = (int)$xml->parentId;
		if(!is_null($jsonObject) && isset($jsonObject->parentId))
			$this->parentId = (int)$jsonObject->parentId;
		if(!is_null($xml) && count($xml->mediaProtocols))
			$this->mediaProtocols = (string)$xml->mediaProtocols;
		if(!is_null($jsonObject) && isset($jsonObject->mediaProtocols))
			$this->mediaProtocols = (string)$jsonObject->mediaProtocols;
		if(!is_null($xml) && count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(!is_null($jsonObject) && isset($jsonObject->priority))
			$this->priority = (int)$jsonObject->priority;
		if(!is_null($xml) && count($xml->extraParams))
			$this->extraParams = (string)$xml->extraParams;
		if(!is_null($jsonObject) && isset($jsonObject->extraParams))
			$this->extraParams = (string)$jsonObject->extraParams;
		if(!is_null($xml) && count($xml->supplementaryAssetsFilter) && !empty($xml->supplementaryAssetsFilter))
			$this->supplementaryAssetsFilter = Kaltura_Client_ParseUtils::unmarshalObject($xml->supplementaryAssetsFilter, "KalturaAssetFilter");
		if(!is_null($jsonObject) && isset($jsonObject->supplementaryAssetsFilter) && !empty($jsonObject->supplementaryAssetsFilter))
			$this->supplementaryAssetsFilter = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->supplementaryAssetsFilter, "KalturaAssetFilter");
		if(!is_null($xml) && count($xml->enforceDeliveriesSupport))
			$this->enforceDeliveriesSupport = (string)$xml->enforceDeliveriesSupport;
		if(!is_null($jsonObject) && isset($jsonObject->enforceDeliveriesSupport))
			$this->enforceDeliveriesSupport = (string)$jsonObject->enforceDeliveriesSupport;
	}
	/**
	 * The id of the Delivery
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * The name of the Delivery
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * Delivery type
	 *
	 * @var Kaltura_Client_Enum_DeliveryProfileType
	 */
	public $type = null;

	/**
	 * System name of the delivery
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * The description of the Delivery
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Creation time as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Update time as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PlaybackProtocol
	 */
	public $streamerType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * the host part of the url
	 *
	 * @var string
	 * @readonly
	 */
	public $hostName = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_DeliveryStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_UrlRecognizer
	 */
	public $recognizer;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_UrlTokenizer
	 */
	public $tokenizer;

	/**
	 * True if this is the systemwide default for the protocol
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $isDefault = null;

	/**
	 * the object from which this object was cloned (or 0)
	 *
	 * @var int
	 * @readonly
	 */
	public $parentId = null;

	/**
	 * Comma separated list of supported media protocols. f.i. rtmpe
	 *
	 * @var string
	 */
	public $mediaProtocols = null;

	/**
	 * priority used for ordering similar delivery profiles
	 *
	 * @var int
	 */
	public $priority = null;

	/**
	 * Extra query string parameters that should be added to the url
	 *
	 * @var string
	 */
	public $extraParams = null;

	/**
	 * A filter that can be used to include additional assets in the URL (e.g. captions)
	 *
	 * @var Kaltura_Client_Type_AssetFilter
	 */
	public $supplementaryAssetsFilter;

	/**
	 * 
	 *
	 * @var string
	 */
	public $enforceDeliveriesSupport = null;


}

