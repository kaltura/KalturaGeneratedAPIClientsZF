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
abstract class Kaltura_Client_Type_CategoryEntryBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryEntryBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->categoryIdEqual))
			$this->categoryIdEqual = (int)$xml->categoryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->categoryIdEqual))
			$this->categoryIdEqual = (int)$jsonObject->categoryIdEqual;
		if(!is_null($xml) && count($xml->categoryIdIn))
			$this->categoryIdIn = (string)$xml->categoryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->categoryIdIn))
			$this->categoryIdIn = (string)$jsonObject->categoryIdIn;
		if(!is_null($xml) && count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdEqual))
			$this->entryIdEqual = (string)$jsonObject->entryIdEqual;
		if(!is_null($xml) && count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdIn))
			$this->entryIdIn = (string)$jsonObject->entryIdIn;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->categoryFullIdsStartsWith))
			$this->categoryFullIdsStartsWith = (string)$xml->categoryFullIdsStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->categoryFullIdsStartsWith))
			$this->categoryFullIdsStartsWith = (string)$jsonObject->categoryFullIdsStartsWith;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->creatorUserIdEqual))
			$this->creatorUserIdEqual = (string)$xml->creatorUserIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->creatorUserIdEqual))
			$this->creatorUserIdEqual = (string)$jsonObject->creatorUserIdEqual;
		if(!is_null($xml) && count($xml->creatorUserIdIn))
			$this->creatorUserIdIn = (string)$xml->creatorUserIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->creatorUserIdIn))
			$this->creatorUserIdIn = (string)$jsonObject->creatorUserIdIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $categoryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryFullIdsStartsWith = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_CategoryEntryStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $creatorUserIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $creatorUserIdIn = null;


}

