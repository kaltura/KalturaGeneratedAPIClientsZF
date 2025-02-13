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
abstract class Kaltura_Client_Group_Type_ESearchAbstractGroupItem extends Kaltura_Client_Group_Type_ESearchGroupBaseItem
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchAbstractGroupItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->searchTerm))
			$this->searchTerm = (string)$xml->searchTerm;
		if(!is_null($jsonObject) && isset($jsonObject->searchTerm))
			$this->searchTerm = (string)$jsonObject->searchTerm;
		if(!is_null($xml) && count($xml->itemType))
			$this->itemType = (int)$xml->itemType;
		if(!is_null($jsonObject) && isset($jsonObject->itemType))
			$this->itemType = (int)$jsonObject->itemType;
		if(!is_null($xml) && count($xml->range) && !empty($xml->range))
			$this->range = Kaltura_Client_ParseUtils::unmarshalObject($xml->range, "KalturaESearchRange");
		if(!is_null($jsonObject) && isset($jsonObject->range) && !empty($jsonObject->range))
			$this->range = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->range, "KalturaESearchRange");
		if(!is_null($xml) && count($xml->addHighlight))
		{
			if(!empty($xml->addHighlight) && ((int) $xml->addHighlight === 1 || strtolower((string)$xml->addHighlight) === 'true'))
				$this->addHighlight = true;
			else
				$this->addHighlight = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->addHighlight))
		{
			if(!empty($jsonObject->addHighlight) && ((int) $jsonObject->addHighlight === 1 || strtolower((string)$jsonObject->addHighlight) === 'true'))
				$this->addHighlight = true;
			else
				$this->addHighlight = false;
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $searchTerm = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Enum_ESearchItemType
	 */
	public $itemType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Type_ESearchRange
	 */
	public $range;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $addHighlight = null;


}

