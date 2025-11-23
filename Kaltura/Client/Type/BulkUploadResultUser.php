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
class Kaltura_Client_Type_BulkUploadResultUser extends Kaltura_Client_Type_BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultUser';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->screenName))
			$this->screenName = (string)$xml->screenName;
		if(!is_null($jsonObject) && isset($jsonObject->screenName))
			$this->screenName = (string)$jsonObject->screenName;
		if(!is_null($xml) && count($xml->email))
			$this->email = (string)$xml->email;
		if(!is_null($jsonObject) && isset($jsonObject->email))
			$this->email = (string)$jsonObject->email;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->dateOfBirth))
			$this->dateOfBirth = (int)$xml->dateOfBirth;
		if(!is_null($jsonObject) && isset($jsonObject->dateOfBirth))
			$this->dateOfBirth = (int)$jsonObject->dateOfBirth;
		if(!is_null($xml) && count($xml->country))
			$this->country = (string)$xml->country;
		if(!is_null($jsonObject) && isset($jsonObject->country))
			$this->country = (string)$jsonObject->country;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->city))
			$this->city = (string)$xml->city;
		if(!is_null($jsonObject) && isset($jsonObject->city))
			$this->city = (string)$jsonObject->city;
		if(!is_null($xml) && count($xml->zip))
			$this->zip = (string)$xml->zip;
		if(!is_null($jsonObject) && isset($jsonObject->zip))
			$this->zip = (string)$jsonObject->zip;
		if(!is_null($xml) && count($xml->gender))
			$this->gender = (int)$xml->gender;
		if(!is_null($jsonObject) && isset($jsonObject->gender))
			$this->gender = (int)$jsonObject->gender;
		if(!is_null($xml) && count($xml->firstName))
			$this->firstName = (string)$xml->firstName;
		if(!is_null($jsonObject) && isset($jsonObject->firstName))
			$this->firstName = (string)$jsonObject->firstName;
		if(!is_null($xml) && count($xml->lastName))
			$this->lastName = (string)$xml->lastName;
		if(!is_null($jsonObject) && isset($jsonObject->lastName))
			$this->lastName = (string)$jsonObject->lastName;
		if(!is_null($xml) && count($xml->group))
			$this->group = (string)$xml->group;
		if(!is_null($jsonObject) && isset($jsonObject->group))
			$this->group = (string)$jsonObject->group;
		if(!is_null($xml) && count($xml->externalId))
			$this->externalId = (string)$xml->externalId;
		if(!is_null($jsonObject) && isset($jsonObject->externalId))
			$this->externalId = (string)$jsonObject->externalId;
		if(!is_null($xml) && count($xml->capabilities))
			$this->capabilities = (string)$xml->capabilities;
		if(!is_null($jsonObject) && isset($jsonObject->capabilities))
			$this->capabilities = (string)$jsonObject->capabilities;
		if(!is_null($xml) && count($xml->groupUserCreationMode))
			$this->groupUserCreationMode = (int)$xml->groupUserCreationMode;
		if(!is_null($jsonObject) && isset($jsonObject->groupUserCreationMode))
			$this->groupUserCreationMode = (int)$jsonObject->groupUserCreationMode;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $screenName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $email = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dateOfBirth = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $country = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $city = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zip = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $gender = null;

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
	 * @var string
	 */
	public $group = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $externalId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $capabilities = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $groupUserCreationMode = null;


}

