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
class Kaltura_Client_Type_CategoryUserFilter extends Kaltura_Client_Type_CategoryUserBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryUserFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->categoryDirectMembers))
		{
			if(!empty($xml->categoryDirectMembers) && ((int) $xml->categoryDirectMembers === 1 || strtolower((string)$xml->categoryDirectMembers) === 'true'))
				$this->categoryDirectMembers = true;
			else
				$this->categoryDirectMembers = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->categoryDirectMembers))
		{
			if(!empty($jsonObject->categoryDirectMembers) && ((int) $jsonObject->categoryDirectMembers === 1 || strtolower((string)$jsonObject->categoryDirectMembers) === 'true'))
				$this->categoryDirectMembers = true;
			else
				$this->categoryDirectMembers = false;
		}
		if(!is_null($xml) && count($xml->freeText))
			$this->freeText = (string)$xml->freeText;
		if(!is_null($jsonObject) && isset($jsonObject->freeText))
			$this->freeText = (string)$jsonObject->freeText;
		if(!is_null($xml) && count($xml->relatedGroupsByUserId))
			$this->relatedGroupsByUserId = (string)$xml->relatedGroupsByUserId;
		if(!is_null($jsonObject) && isset($jsonObject->relatedGroupsByUserId))
			$this->relatedGroupsByUserId = (string)$jsonObject->relatedGroupsByUserId;
	}
	/**
	 * Return the list of categoryUser that are not inherited from parent category - only the direct categoryUsers.
	 *
	 * @var bool
	 */
	public $categoryDirectMembers = null;

	/**
	 * Free text search on user id or screen name
	 *
	 * @var string
	 */
	public $freeText = null;

	/**
	 * Return a list of categoryUser that related to the userId in this field by groups
	 *
	 * @var string
	 */
	public $relatedGroupsByUserId = null;


}

