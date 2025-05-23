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
class Kaltura_Client_Type_PlayerDeliveryType extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayerDeliveryType';
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
		if(!is_null($xml) && count($xml->label))
			$this->label = (string)$xml->label;
		if(!is_null($jsonObject) && isset($jsonObject->label))
			$this->label = (string)$jsonObject->label;
		if(!is_null($xml) && count($xml->flashvars))
		{
			if(empty($xml->flashvars))
				$this->flashvars = array();
			else
				$this->flashvars = Kaltura_Client_ParseUtils::unmarshalArray($xml->flashvars, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->flashvars))
		{
			if(empty($jsonObject->flashvars))
				$this->flashvars = array();
			else
				$this->flashvars = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->flashvars, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->minVersion))
			$this->minVersion = (string)$xml->minVersion;
		if(!is_null($jsonObject) && isset($jsonObject->minVersion))
			$this->minVersion = (string)$jsonObject->minVersion;
		if(!is_null($xml) && count($xml->enabledByDefault))
		{
			if(!empty($xml->enabledByDefault) && ((int) $xml->enabledByDefault === 1 || strtolower((string)$xml->enabledByDefault) === 'true'))
				$this->enabledByDefault = true;
			else
				$this->enabledByDefault = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enabledByDefault))
		{
			if(!empty($jsonObject->enabledByDefault) && ((int) $jsonObject->enabledByDefault === 1 || strtolower((string)$jsonObject->enabledByDefault) === 'true'))
				$this->enabledByDefault = true;
			else
				$this->enabledByDefault = false;
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $flashvars;

	/**
	 * 
	 *
	 * @var string
	 */
	public $minVersion = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $enabledByDefault = null;


}

