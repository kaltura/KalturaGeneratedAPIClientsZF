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
abstract class Kaltura_Client_Type_CategoryUserBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryUserBaseFilter';
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
		if(!is_null($xml) && count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->userIdEqual))
			$this->userIdEqual = (string)$jsonObject->userIdEqual;
		if(!is_null($xml) && count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->userIdIn))
			$this->userIdIn = (string)$jsonObject->userIdIn;
		if(!is_null($xml) && count($xml->permissionLevelEqual))
			$this->permissionLevelEqual = (int)$xml->permissionLevelEqual;
		if(!is_null($jsonObject) && isset($jsonObject->permissionLevelEqual))
			$this->permissionLevelEqual = (int)$jsonObject->permissionLevelEqual;
		if(!is_null($xml) && count($xml->permissionLevelIn))
			$this->permissionLevelIn = (string)$xml->permissionLevelIn;
		if(!is_null($jsonObject) && isset($jsonObject->permissionLevelIn))
			$this->permissionLevelIn = (string)$jsonObject->permissionLevelIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updateMethodEqual))
			$this->updateMethodEqual = (int)$xml->updateMethodEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updateMethodEqual))
			$this->updateMethodEqual = (int)$jsonObject->updateMethodEqual;
		if(!is_null($xml) && count($xml->updateMethodIn))
			$this->updateMethodIn = (string)$xml->updateMethodIn;
		if(!is_null($jsonObject) && isset($jsonObject->updateMethodIn))
			$this->updateMethodIn = (string)$jsonObject->updateMethodIn;
		if(!is_null($xml) && count($xml->categoryFullIdsStartsWith))
			$this->categoryFullIdsStartsWith = (string)$xml->categoryFullIdsStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->categoryFullIdsStartsWith))
			$this->categoryFullIdsStartsWith = (string)$jsonObject->categoryFullIdsStartsWith;
		if(!is_null($xml) && count($xml->categoryFullIdsEqual))
			$this->categoryFullIdsEqual = (string)$xml->categoryFullIdsEqual;
		if(!is_null($jsonObject) && isset($jsonObject->categoryFullIdsEqual))
			$this->categoryFullIdsEqual = (string)$jsonObject->categoryFullIdsEqual;
		if(!is_null($xml) && count($xml->permissionNamesMatchAnd))
			$this->permissionNamesMatchAnd = (string)$xml->permissionNamesMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->permissionNamesMatchAnd))
			$this->permissionNamesMatchAnd = (string)$jsonObject->permissionNamesMatchAnd;
		if(!is_null($xml) && count($xml->permissionNamesMatchOr))
			$this->permissionNamesMatchOr = (string)$xml->permissionNamesMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->permissionNamesMatchOr))
			$this->permissionNamesMatchOr = (string)$jsonObject->permissionNamesMatchOr;
		if(!is_null($xml) && count($xml->permissionNamesNotContains))
			$this->permissionNamesNotContains = (string)$xml->permissionNamesNotContains;
		if(!is_null($jsonObject) && isset($jsonObject->permissionNamesNotContains))
			$this->permissionNamesNotContains = (string)$jsonObject->permissionNamesNotContains;
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
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_CategoryUserPermissionLevel
	 */
	public $permissionLevelEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissionLevelIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_CategoryUserStatus
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
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_UpdateMethodType
	 */
	public $updateMethodEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateMethodIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryFullIdsStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryFullIdsEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissionNamesMatchAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissionNamesMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $permissionNamesNotContains = null;


}

