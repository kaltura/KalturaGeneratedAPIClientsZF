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
class Kaltura_Client_Type_CategoryEntry extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryEntry';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->categoryId))
			$this->categoryId = (int)$xml->categoryId;
		if(!is_null($jsonObject) && isset($jsonObject->categoryId))
			$this->categoryId = (int)$jsonObject->categoryId;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->categoryFullIds))
			$this->categoryFullIds = (string)$xml->categoryFullIds;
		if(!is_null($jsonObject) && isset($jsonObject->categoryFullIds))
			$this->categoryFullIds = (string)$jsonObject->categoryFullIds;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->creatorUserId))
			$this->creatorUserId = (string)$xml->creatorUserId;
		if(!is_null($jsonObject) && isset($jsonObject->creatorUserId))
			$this->creatorUserId = (string)$jsonObject->creatorUserId;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $categoryId = null;

	/**
	 * entry id
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * The full ids of the Category
	 *
	 * @var string
	 * @readonly
	 */
	public $categoryFullIds = null;

	/**
	 * CategroyEntry status
	 *
	 * @var Kaltura_Client_Enum_CategoryEntryStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * CategroyEntry creator puser ID
	 *
	 * @var string
	 * @readonly
	 */
	public $creatorUserId = null;


}

