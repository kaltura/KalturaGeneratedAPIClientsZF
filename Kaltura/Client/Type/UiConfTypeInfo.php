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
class Kaltura_Client_Type_UiConfTypeInfo extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUiConfTypeInfo';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
		if(!is_null($xml) && count($xml->versions))
		{
			if(empty($xml->versions))
				$this->versions = array();
			else
				$this->versions = Kaltura_Client_ParseUtils::unmarshalArray($xml->versions, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->versions))
		{
			if(empty($jsonObject->versions))
				$this->versions = array();
			else
				$this->versions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->versions, "KalturaString");
		}
		if(!is_null($xml) && count($xml->directory))
			$this->directory = (string)$xml->directory;
		if(!is_null($jsonObject) && isset($jsonObject->directory))
			$this->directory = (string)$jsonObject->directory;
		if(!is_null($xml) && count($xml->filename))
			$this->filename = (string)$xml->filename;
		if(!is_null($jsonObject) && isset($jsonObject->filename))
			$this->filename = (string)$jsonObject->filename;
	}
	/**
	 * UiConf Type
	 *
	 * @var Kaltura_Client_Enum_UiConfObjType
	 */
	public $type = null;

	/**
	 * Available versions
	 *
	 * @var array of KalturaString
	 */
	public $versions;

	/**
	 * The direcotry this type is saved at
	 *
	 * @var string
	 */
	public $directory = null;

	/**
	 * Filename for this UiConf type
	 *
	 * @var string
	 */
	public $filename = null;


}

