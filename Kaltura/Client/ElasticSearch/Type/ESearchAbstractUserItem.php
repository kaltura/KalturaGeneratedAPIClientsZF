<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2020  Kaltura Inc.
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
abstract class Kaltura_Client_ElasticSearch_Type_ESearchAbstractUserItem extends Kaltura_Client_ElasticSearch_Type_ESearchUserBaseItem
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchAbstractUserItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->searchTerm))
			$this->searchTerm = (string)$xml->searchTerm;
		if(count($xml->itemType))
			$this->itemType = (int)$xml->itemType;
		if(count($xml->range) && !empty($xml->range))
			$this->range = Kaltura_Client_ParseUtils::unmarshalObject($xml->range, "KalturaESearchRange");
		if(count($xml->addHighlight))
		{
			if(!empty($xml->addHighlight) && ((int) $xml->addHighlight === 1 || strtolower((string)$xml->addHighlight) === 'true'))
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

