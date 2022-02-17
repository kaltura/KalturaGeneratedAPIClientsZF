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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class Kaltura_Client_ElasticSearch_Type_ESearchUserOperator extends Kaltura_Client_ElasticSearch_Type_ESearchUserBaseItem
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchUserOperator';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->operator))
			$this->operator = (int)$xml->operator;
		if(count($xml->searchItems))
		{
			if(empty($xml->searchItems))
				$this->searchItems = array();
			else
				$this->searchItems = Kaltura_Client_ParseUtils::unmarshalArray($xml->searchItems, "KalturaESearchUserBaseItem");
		}
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Enum_ESearchOperatorType
	 */
	public $operator = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchUserBaseItem
	 */
	public $searchItems;


}

