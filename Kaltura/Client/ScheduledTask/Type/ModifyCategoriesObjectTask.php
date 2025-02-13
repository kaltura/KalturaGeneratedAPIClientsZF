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
class Kaltura_Client_ScheduledTask_Type_ModifyCategoriesObjectTask extends Kaltura_Client_ScheduledTask_Type_ObjectTask
{
	public function getKalturaObjectType()
	{
		return 'KalturaModifyCategoriesObjectTask';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->addRemoveType))
			$this->addRemoveType = (int)$xml->addRemoveType;
		if(!is_null($jsonObject) && isset($jsonObject->addRemoveType))
			$this->addRemoveType = (int)$jsonObject->addRemoveType;
		if(!is_null($xml) && count($xml->categoryIds))
		{
			if(empty($xml->categoryIds))
				$this->categoryIds = array();
			else
				$this->categoryIds = Kaltura_Client_ParseUtils::unmarshalArray($xml->categoryIds, "KalturaIntegerValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->categoryIds))
		{
			if(empty($jsonObject->categoryIds))
				$this->categoryIds = array();
			else
				$this->categoryIds = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->categoryIds, "KalturaIntegerValue");
		}
	}
	/**
	 * Should the object task add or remove categories?
	 *
	 * @var Kaltura_Client_ScheduledTask_Enum_ScheduledTaskAddOrRemoveType
	 */
	public $addRemoveType = null;

	/**
	 * The list of category ids to add or remove
	 *
	 * @var array of KalturaIntegerValue
	 */
	public $categoryIds;


}

