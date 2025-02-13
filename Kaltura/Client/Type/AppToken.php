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
class Kaltura_Client_Type_AppToken extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAppToken';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->token))
			$this->token = (string)$xml->token;
		if(!is_null($jsonObject) && isset($jsonObject->token))
			$this->token = (string)$jsonObject->token;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->expiry))
			$this->expiry = (int)$xml->expiry;
		if(!is_null($jsonObject) && isset($jsonObject->expiry))
			$this->expiry = (int)$jsonObject->expiry;
		if(!is_null($xml) && count($xml->sessionType))
			$this->sessionType = (int)$xml->sessionType;
		if(!is_null($jsonObject) && isset($jsonObject->sessionType))
			$this->sessionType = (int)$jsonObject->sessionType;
		if(!is_null($xml) && count($xml->sessionUserId))
			$this->sessionUserId = (string)$xml->sessionUserId;
		if(!is_null($jsonObject) && isset($jsonObject->sessionUserId))
			$this->sessionUserId = (string)$jsonObject->sessionUserId;
		if(!is_null($xml) && count($xml->sessionDuration))
			$this->sessionDuration = (int)$xml->sessionDuration;
		if(!is_null($jsonObject) && isset($jsonObject->sessionDuration))
			$this->sessionDuration = (int)$jsonObject->sessionDuration;
		if(!is_null($xml) && count($xml->sessionPrivileges))
			$this->sessionPrivileges = (string)$xml->sessionPrivileges;
		if(!is_null($jsonObject) && isset($jsonObject->sessionPrivileges))
			$this->sessionPrivileges = (string)$jsonObject->sessionPrivileges;
		if(!is_null($xml) && count($xml->hashType))
			$this->hashType = (string)$xml->hashType;
		if(!is_null($jsonObject) && isset($jsonObject->hashType))
			$this->hashType = (string)$jsonObject->hashType;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
	}
	/**
	 * The id of the application token
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * The application token
	 *
	 * @var string
	 * @readonly
	 */
	public $token = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * Creation time as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Update time as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Application token status
	 *
	 * @var Kaltura_Client_Enum_AppTokenStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * Expiry time of current token (unix timestamp in seconds)
	 *
	 * @var int
	 */
	public $expiry = null;

	/**
	 * Type of KS (Kaltura Session) that created using the current token
	 *
	 * @var Kaltura_Client_Enum_SessionType
	 */
	public $sessionType = null;

	/**
	 * User id of KS (Kaltura Session) that created using the current token
	 *
	 * @var string
	 */
	public $sessionUserId = null;

	/**
	 * Expiry duration of KS (Kaltura Session) that created using the current token (in seconds)
	 *
	 * @var int
	 */
	public $sessionDuration = null;

	/**
	 * Comma separated privileges to be applied on KS (Kaltura Session) that created using the current token
	 *
	 * @var string
	 */
	public $sessionPrivileges = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_AppTokenHashType
	 */
	public $hashType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;


}

