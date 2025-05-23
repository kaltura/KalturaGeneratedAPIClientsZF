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
class Kaltura_Client_Type_ExtendingItemMrssParameter extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaExtendingItemMrssParameter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->xpath))
			$this->xpath = (string)$xml->xpath;
		if(!is_null($jsonObject) && isset($jsonObject->xpath))
			$this->xpath = (string)$jsonObject->xpath;
		if(!is_null($xml) && count($xml->identifier) && !empty($xml->identifier))
			$this->identifier = Kaltura_Client_ParseUtils::unmarshalObject($xml->identifier, "KalturaObjectIdentifier");
		if(!is_null($jsonObject) && isset($jsonObject->identifier) && !empty($jsonObject->identifier))
			$this->identifier = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->identifier, "KalturaObjectIdentifier");
		if(!is_null($xml) && count($xml->extensionMode))
			$this->extensionMode = (int)$xml->extensionMode;
		if(!is_null($jsonObject) && isset($jsonObject->extensionMode))
			$this->extensionMode = (int)$jsonObject->extensionMode;
	}
	/**
	 * XPath for the extending item
	 *
	 * @var string
	 */
	public $xpath = null;

	/**
	 * Object identifier
	 *
	 * @var Kaltura_Client_Type_ObjectIdentifier
	 */
	public $identifier;

	/**
	 * Mode of extension - append to MRSS or replace the xpath content.
	 *
	 * @var Kaltura_Client_Enum_MrssExtensionMode
	 */
	public $extensionMode = null;


}

