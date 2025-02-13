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
class Kaltura_Client_Beacon_Type_Beacon extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBeacon';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->indexType))
			$this->indexType = (string)$xml->indexType;
		if(!is_null($jsonObject) && isset($jsonObject->indexType))
			$this->indexType = (string)$jsonObject->indexType;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->relatedObjectType))
			$this->relatedObjectType = (string)$xml->relatedObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectType))
			$this->relatedObjectType = (string)$jsonObject->relatedObjectType;
		if(!is_null($xml) && count($xml->eventType))
			$this->eventType = (string)$xml->eventType;
		if(!is_null($jsonObject) && isset($jsonObject->eventType))
			$this->eventType = (string)$jsonObject->eventType;
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->privateData))
			$this->privateData = (string)$xml->privateData;
		if(!is_null($jsonObject) && isset($jsonObject->privateData))
			$this->privateData = (string)$jsonObject->privateData;
		if(!is_null($xml) && count($xml->rawData))
			$this->rawData = (string)$xml->rawData;
		if(!is_null($jsonObject) && isset($jsonObject->rawData))
			$this->rawData = (string)$jsonObject->rawData;
	}
	/**
	 * Beacon id
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Beacon indexType
	 *
	 * @var string
	 * @readonly
	 */
	public $indexType = null;

	/**
	 * Beacon update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * The object which this beacon belongs to
	 *
	 * @var Kaltura_Client_Beacon_Enum_BeaconObjectTypes
	 */
	public $relatedObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $eventType = null;

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
	public $privateData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rawData = null;


}

