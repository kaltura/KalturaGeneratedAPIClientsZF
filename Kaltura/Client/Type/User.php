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
class Kaltura_Client_Type_User extends Kaltura_Client_Type_BaseUser
{
	public function getKalturaObjectType()
	{
		return 'KalturaUser';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->type))
			$this->type = (int)$xml->type;
		if(count($xml->dateOfBirth))
			$this->dateOfBirth = (int)$xml->dateOfBirth;
		if(count($xml->gender))
			$this->gender = (int)$xml->gender;
		if(count($xml->isAdmin))
		{
			if(!empty($xml->isAdmin) && ((int) $xml->isAdmin === 1 || strtolower((string)$xml->isAdmin) === 'true'))
				$this->isAdmin = true;
			else
				$this->isAdmin = false;
		}
		if(count($xml->roleIds))
			$this->roleIds = (string)$xml->roleIds;
		if(count($xml->roleNames))
			$this->roleNames = (string)$xml->roleNames;
		if(count($xml->isAccountOwner))
		{
			if(!empty($xml->isAccountOwner) && ((int) $xml->isAccountOwner === 1 || strtolower((string)$xml->isAccountOwner) === 'true'))
				$this->isAccountOwner = true;
			else
				$this->isAccountOwner = false;
		}
		if(count($xml->password))
			$this->password = (string)$xml->password;
		if(count($xml->firstName))
			$this->firstName = (string)$xml->firstName;
		if(count($xml->lastName))
			$this->lastName = (string)$xml->lastName;
		if(count($xml->loginEnabled))
		{
			if(!empty($xml->loginEnabled) && ((int) $xml->loginEnabled === 1 || strtolower((string)$xml->loginEnabled) === 'true'))
				$this->loginEnabled = true;
			else
				$this->loginEnabled = false;
		}
		if(count($xml->registrationInfo))
			$this->registrationInfo = (string)$xml->registrationInfo;
		if(count($xml->attendanceInfo))
			$this->attendanceInfo = (string)$xml->attendanceInfo;
		if(count($xml->title))
			$this->title = (string)$xml->title;
		if(count($xml->company))
			$this->company = (string)$xml->company;
		if(count($xml->ksPrivileges))
			$this->ksPrivileges = (string)$xml->ksPrivileges;
		if(count($xml->encryptedSeed))
			$this->encryptedSeed = (string)$xml->encryptedSeed;
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


}

