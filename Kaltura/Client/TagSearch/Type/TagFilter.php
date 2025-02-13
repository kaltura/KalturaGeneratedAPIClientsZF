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
class Kaltura_Client_TagSearch_Type_TagFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaTagFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->objectTypeEqual))
			$this->objectTypeEqual = (string)$xml->objectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->objectTypeEqual))
			$this->objectTypeEqual = (string)$jsonObject->objectTypeEqual;
		if(!is_null($xml) && count($xml->objectTypeIn))
			$this->objectTypeIn = (string)$xml->objectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->objectTypeIn))
			$this->objectTypeIn = (string)$jsonObject->objectTypeIn;
		if(!is_null($xml) && count($xml->tagEqual))
			$this->tagEqual = (string)$xml->tagEqual;
		if(!is_null($jsonObject) && isset($jsonObject->tagEqual))
			$this->tagEqual = (string)$jsonObject->tagEqual;
		if(!is_null($xml) && count($xml->tagStartsWith))
			$this->tagStartsWith = (string)$xml->tagStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->tagStartsWith))
			$this->tagStartsWith = (string)$jsonObject->tagStartsWith;
		if(!is_null($xml) && count($xml->instanceCountEqual))
			$this->instanceCountEqual = (int)$xml->instanceCountEqual;
		if(!is_null($jsonObject) && isset($jsonObject->instanceCountEqual))
			$this->instanceCountEqual = (int)$jsonObject->instanceCountEqual;
		if(!is_null($xml) && count($xml->instanceCountIn))
			$this->instanceCountIn = (int)$xml->instanceCountIn;
		if(!is_null($jsonObject) && isset($jsonObject->instanceCountIn))
			$this->instanceCountIn = (int)$jsonObject->instanceCountIn;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_TaggedObjectType
	 */
	public $objectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagStartsWith = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $instanceCountEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $instanceCountIn = null;


}

