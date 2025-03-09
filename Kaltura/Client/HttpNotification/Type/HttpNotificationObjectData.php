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
class Kaltura_Client_HttpNotification_Type_HttpNotificationObjectData extends Kaltura_Client_HttpNotification_Type_HttpNotificationData
{
	public function getKalturaObjectType()
	{
		return 'KalturaHttpNotificationObjectData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->apiObjectType))
			$this->apiObjectType = (string)$xml->apiObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->apiObjectType))
			$this->apiObjectType = (string)$jsonObject->apiObjectType;
		if(!is_null($xml) && count($xml->format))
			$this->format = (int)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (int)$jsonObject->format;
		if(!is_null($xml) && count($xml->ignoreNull))
		{
			if(!empty($xml->ignoreNull) && ((int) $xml->ignoreNull === 1 || strtolower((string)$xml->ignoreNull) === 'true'))
				$this->ignoreNull = true;
			else
				$this->ignoreNull = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ignoreNull))
		{
			if(!empty($jsonObject->ignoreNull) && ((int) $jsonObject->ignoreNull === 1 || strtolower((string)$jsonObject->ignoreNull) === 'true'))
				$this->ignoreNull = true;
			else
				$this->ignoreNull = false;
		}
		if(!is_null($xml) && count($xml->code))
			$this->code = (string)$xml->code;
		if(!is_null($jsonObject) && isset($jsonObject->code))
			$this->code = (string)$jsonObject->code;
		if(!is_null($xml) && count($xml->dataStringReplacements))
		{
			if(empty($xml->dataStringReplacements))
				$this->dataStringReplacements = array();
			else
				$this->dataStringReplacements = Kaltura_Client_ParseUtils::unmarshalArray($xml->dataStringReplacements, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dataStringReplacements))
		{
			if(empty($jsonObject->dataStringReplacements))
				$this->dataStringReplacements = array();
			else
				$this->dataStringReplacements = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dataStringReplacements, "KalturaKeyValue");
		}
	}
	/**
	 * Kaltura API object type
	 *
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Data format
	 *
	 * @var Kaltura_Client_Enum_ResponseType
	 */
	public $format = null;

	/**
	 * Ignore null attributes during serialization
	 *
	 * @var bool
	 */
	public $ignoreNull = null;

	/**
	 * PHP code
	 *
	 * @var string
	 */
	public $code = null;

	/**
	 * An array of pattern-replacement pairs used for data string regex replacements
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $dataStringReplacements;


}

