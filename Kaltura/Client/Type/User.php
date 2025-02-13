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
class Kaltura_Client_Type_User extends Kaltura_Client_Type_BaseUser
{
	public function getKalturaObjectType()
	{
		return 'KalturaUser';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
		if(!is_null($xml) && count($xml->dateOfBirth))
			$this->dateOfBirth = (int)$xml->dateOfBirth;
		if(!is_null($jsonObject) && isset($jsonObject->dateOfBirth))
			$this->dateOfBirth = (int)$jsonObject->dateOfBirth;
		if(!is_null($xml) && count($xml->gender))
			$this->gender = (int)$xml->gender;
		if(!is_null($jsonObject) && isset($jsonObject->gender))
			$this->gender = (int)$jsonObject->gender;
		if(!is_null($xml) && count($xml->isAdmin))
		{
			if(!empty($xml->isAdmin) && ((int) $xml->isAdmin === 1 || strtolower((string)$xml->isAdmin) === 'true'))
				$this->isAdmin = true;
			else
				$this->isAdmin = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isAdmin))
		{
			if(!empty($jsonObject->isAdmin) && ((int) $jsonObject->isAdmin === 1 || strtolower((string)$jsonObject->isAdmin) === 'true'))
				$this->isAdmin = true;
			else
				$this->isAdmin = false;
		}
		if(!is_null($xml) && count($xml->isGuest))
		{
			if(!empty($xml->isGuest) && ((int) $xml->isGuest === 1 || strtolower((string)$xml->isGuest) === 'true'))
				$this->isGuest = true;
			else
				$this->isGuest = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isGuest))
		{
			if(!empty($jsonObject->isGuest) && ((int) $jsonObject->isGuest === 1 || strtolower((string)$jsonObject->isGuest) === 'true'))
				$this->isGuest = true;
			else
				$this->isGuest = false;
		}
		if(!is_null($xml) && count($xml->roleIds))
			$this->roleIds = (string)$xml->roleIds;
		if(!is_null($jsonObject) && isset($jsonObject->roleIds))
			$this->roleIds = (string)$jsonObject->roleIds;
		if(!is_null($xml) && count($xml->roleNames))
			$this->roleNames = (string)$xml->roleNames;
		if(!is_null($jsonObject) && isset($jsonObject->roleNames))
			$this->roleNames = (string)$jsonObject->roleNames;
		if(!is_null($xml) && count($xml->isAccountOwner))
		{
			if(!empty($xml->isAccountOwner) && ((int) $xml->isAccountOwner === 1 || strtolower((string)$xml->isAccountOwner) === 'true'))
				$this->isAccountOwner = true;
			else
				$this->isAccountOwner = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isAccountOwner))
		{
			if(!empty($jsonObject->isAccountOwner) && ((int) $jsonObject->isAccountOwner === 1 || strtolower((string)$jsonObject->isAccountOwner) === 'true'))
				$this->isAccountOwner = true;
			else
				$this->isAccountOwner = false;
		}
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->firstName))
			$this->firstName = (string)$xml->firstName;
		if(!is_null($jsonObject) && isset($jsonObject->firstName))
			$this->firstName = (string)$jsonObject->firstName;
		if(!is_null($xml) && count($xml->lastName))
			$this->lastName = (string)$xml->lastName;
		if(!is_null($jsonObject) && isset($jsonObject->lastName))
			$this->lastName = (string)$jsonObject->lastName;
		if(!is_null($xml) && count($xml->loginEnabled))
		{
			if(!empty($xml->loginEnabled) && ((int) $xml->loginEnabled === 1 || strtolower((string)$xml->loginEnabled) === 'true'))
				$this->loginEnabled = true;
			else
				$this->loginEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->loginEnabled))
		{
			if(!empty($jsonObject->loginEnabled) && ((int) $jsonObject->loginEnabled === 1 || strtolower((string)$jsonObject->loginEnabled) === 'true'))
				$this->loginEnabled = true;
			else
				$this->loginEnabled = false;
		}
		if(!is_null($xml) && count($xml->registrationInfo))
			$this->registrationInfo = (string)$xml->registrationInfo;
		if(!is_null($jsonObject) && isset($jsonObject->registrationInfo))
			$this->registrationInfo = (string)$jsonObject->registrationInfo;
		if(!is_null($xml) && count($xml->attendanceInfo))
			$this->attendanceInfo = (string)$xml->attendanceInfo;
		if(!is_null($jsonObject) && isset($jsonObject->attendanceInfo))
			$this->attendanceInfo = (string)$jsonObject->attendanceInfo;
		if(!is_null($xml) && count($xml->title))
			$this->title = (string)$xml->title;
		if(!is_null($jsonObject) && isset($jsonObject->title))
			$this->title = (string)$jsonObject->title;
		if(!is_null($xml) && count($xml->company))
			$this->company = (string)$xml->company;
		if(!is_null($jsonObject) && isset($jsonObject->company))
			$this->company = (string)$jsonObject->company;
		if(!is_null($xml) && count($xml->ksPrivileges))
			$this->ksPrivileges = (string)$xml->ksPrivileges;
		if(!is_null($jsonObject) && isset($jsonObject->ksPrivileges))
			$this->ksPrivileges = (string)$jsonObject->ksPrivileges;
		if(!is_null($xml) && count($xml->encryptedSeed))
			$this->encryptedSeed = (string)$xml->encryptedSeed;
		if(!is_null($jsonObject) && isset($jsonObject->encryptedSeed))
			$this->encryptedSeed = (string)$jsonObject->encryptedSeed;
		if(!is_null($xml) && count($xml->isSsoExcluded))
		{
			if(!empty($xml->isSsoExcluded) && ((int) $xml->isSsoExcluded === 1 || strtolower((string)$xml->isSsoExcluded) === 'true'))
				$this->isSsoExcluded = true;
			else
				$this->isSsoExcluded = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSsoExcluded))
		{
			if(!empty($jsonObject->isSsoExcluded) && ((int) $jsonObject->isSsoExcluded === 1 || strtolower((string)$jsonObject->isSsoExcluded) === 'true'))
				$this->isSsoExcluded = true;
			else
				$this->isSsoExcluded = false;
		}
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_UserType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dateOfBirth = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_Gender
	 */
	public $gender = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isAdmin = null;

	/**
	 * 
	 *
	 * @var bool
	 * @insertonly
	 */
	public $isGuest = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $roleIds = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $roleNames = null;

	/**
	 * 
	 *
	 * @var bool
	 * @insertonly
	 */
	public $isAccountOwner = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $lastName = null;

	/**
	 * 
	 *
	 * @var bool
	 * @insertonly
	 */
	public $loginEnabled = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $registrationInfo = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $attendanceInfo = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $company = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ksPrivileges = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $encryptedSeed = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isSsoExcluded = null;

	/**
	 * This field should be sent instead of the id field whenever you want to work with hashed user ids
	 *
	 * @var string
	 * @insertonly
	 */
	public $externalId = null;


}

