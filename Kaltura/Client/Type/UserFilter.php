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
class Kaltura_Client_Type_UserFilter extends Kaltura_Client_Type_UserBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idOrScreenNameStartsWith))
			$this->idOrScreenNameStartsWith = (string)$xml->idOrScreenNameStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->idOrScreenNameStartsWith))
			$this->idOrScreenNameStartsWith = (string)$jsonObject->idOrScreenNameStartsWith;
		if(!is_null($xml) && count($xml->loginEnabledEqual))
			$this->loginEnabledEqual = (int)$xml->loginEnabledEqual;
		if(!is_null($jsonObject) && isset($jsonObject->loginEnabledEqual))
			$this->loginEnabledEqual = (int)$jsonObject->loginEnabledEqual;
		if(!is_null($xml) && count($xml->roleIdEqual))
			$this->roleIdEqual = (string)$xml->roleIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->roleIdEqual))
			$this->roleIdEqual = (string)$jsonObject->roleIdEqual;
		if(!is_null($xml) && count($xml->roleIdsEqual))
			$this->roleIdsEqual = (string)$xml->roleIdsEqual;
		if(!is_null($jsonObject) && isset($jsonObject->roleIdsEqual))
			$this->roleIdsEqual = (string)$jsonObject->roleIdsEqual;
		if(!is_null($xml) && count($xml->roleIdsIn))
			$this->roleIdsIn = (string)$xml->roleIdsIn;
		if(!is_null($jsonObject) && isset($jsonObject->roleIdsIn))
			$this->roleIdsIn = (string)$jsonObject->roleIdsIn;
		if(!is_null($xml) && count($xml->firstNameOrLastNameStartsWith))
			$this->firstNameOrLastNameStartsWith = (string)$xml->firstNameOrLastNameStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->firstNameOrLastNameStartsWith))
			$this->firstNameOrLastNameStartsWith = (string)$jsonObject->firstNameOrLastNameStartsWith;
		if(!is_null($xml) && count($xml->permissionNamesMultiLikeOr))
			$this->permissionNamesMultiLikeOr = (string)$xml->permissionNamesMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->permissionNamesMultiLikeOr))
			$this->permissionNamesMultiLikeOr = (string)$jsonObject->permissionNamesMultiLikeOr;
		if(!is_null($xml) && count($xml->permissionNamesMultiLikeAnd))
			$this->permissionNamesMultiLikeAnd = (string)$xml->permissionNamesMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->permissionNamesMultiLikeAnd))
			$this->permissionNamesMultiLikeAnd = (string)$jsonObject->permissionNamesMultiLikeAnd;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $idOrScreenNameStartsWith = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $loginEnabledEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $roleIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $roleIdsEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $roleIdsIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $firstNameOrLastNameStartsWith = null;

	/**
	 * Permission names filter expression
	 *
	 * @var string
	 */
	public $permissionNamesMultiLikeOr = null;

	/**
	 * Permission names filter expression
	 *
	 * @var string
	 */
	public $permissionNamesMultiLikeAnd = null;


}

