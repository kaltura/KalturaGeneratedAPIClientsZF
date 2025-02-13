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
abstract class Kaltura_Client_Beacon_Type_BeaconBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBeaconBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->relatedObjectTypeIn))
			$this->relatedObjectTypeIn = (string)$xml->relatedObjectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectTypeIn))
			$this->relatedObjectTypeIn = (string)$jsonObject->relatedObjectTypeIn;
		if(!is_null($xml) && count($xml->relatedObjectTypeEqual))
			$this->relatedObjectTypeEqual = (string)$xml->relatedObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectTypeEqual))
			$this->relatedObjectTypeEqual = (string)$jsonObject->relatedObjectTypeEqual;
		if(!is_null($xml) && count($xml->eventTypeIn))
			$this->eventTypeIn = (string)$xml->eventTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->eventTypeIn))
			$this->eventTypeIn = (string)$jsonObject->eventTypeIn;
		if(!is_null($xml) && count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdIn))
			$this->objectIdIn = (string)$jsonObject->objectIdIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Beacon_Enum_BeaconObjectTypes
	 */
	public $relatedObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $eventTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdIn = null;


}

