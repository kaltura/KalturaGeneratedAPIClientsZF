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
class Kaltura_Client_Type_RecalculateResponseProfileCacheJobData extends Kaltura_Client_Type_RecalculateCacheJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaRecalculateResponseProfileCacheJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (string)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->ksType))
			$this->ksType = (int)$xml->ksType;
		if(!is_null($jsonObject) && isset($jsonObject->ksType))
			$this->ksType = (int)$jsonObject->ksType;
		if(!is_null($xml) && count($xml->userRoles))
		{
			if(empty($xml->userRoles))
				$this->userRoles = array();
			else
				$this->userRoles = Kaltura_Client_ParseUtils::unmarshalArray($xml->userRoles, "KalturaIntegerValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->userRoles))
		{
			if(empty($jsonObject->userRoles))
				$this->userRoles = array();
			else
				$this->userRoles = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->userRoles, "KalturaIntegerValue");
		}
		if(!is_null($xml) && count($xml->cachedObjectType))
			$this->cachedObjectType = (string)$xml->cachedObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->cachedObjectType))
			$this->cachedObjectType = (string)$jsonObject->cachedObjectType;
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->startObjectKey))
			$this->startObjectKey = (string)$xml->startObjectKey;
		if(!is_null($jsonObject) && isset($jsonObject->startObjectKey))
			$this->startObjectKey = (string)$jsonObject->startObjectKey;
		if(!is_null($xml) && count($xml->endObjectKey))
			$this->endObjectKey = (string)$xml->endObjectKey;
		if(!is_null($jsonObject) && isset($jsonObject->endObjectKey))
			$this->endObjectKey = (string)$jsonObject->endObjectKey;
	}
	/**
	 * http / https
	 *
	 * @var string
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_SessionType
	 */
	public $ksType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_IntegerValue[]
	 */
	public $userRoles;

	/**
	 * Class name
	 *
	 * @var string
	 */
	public $cachedObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $startObjectKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $endObjectKey = null;


}

