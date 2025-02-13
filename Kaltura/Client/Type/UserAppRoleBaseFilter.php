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
abstract class Kaltura_Client_Type_UserAppRoleBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserAppRoleBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->appGuidEqual))
			$this->appGuidEqual = (string)$xml->appGuidEqual;
		if(!is_null($jsonObject) && isset($jsonObject->appGuidEqual))
			$this->appGuidEqual = (string)$jsonObject->appGuidEqual;
		if(!is_null($xml) && count($xml->appGuidIn))
			$this->appGuidIn = (string)$xml->appGuidIn;
		if(!is_null($jsonObject) && isset($jsonObject->appGuidIn))
			$this->appGuidIn = (string)$jsonObject->appGuidIn;
		if(!is_null($xml) && count($xml->userRoleIdEqual))
			$this->userRoleIdEqual = (string)$xml->userRoleIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->userRoleIdEqual))
			$this->userRoleIdEqual = (string)$jsonObject->userRoleIdEqual;
		if(!is_null($xml) && count($xml->userRoleIdIn))
			$this->userRoleIdIn = (string)$xml->userRoleIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->userRoleIdIn))
			$this->userRoleIdIn = (string)$jsonObject->userRoleIdIn;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
	}
	/**
	 * The app-registry id to search for
	 *
	 * @var string
	 */
	public $appGuidEqual = null;

	/**
	 * Apps-registries ids csv list
	 *
	 * @var string
	 */
	public $appGuidIn = null;

	/**
	 * The user-role id to search for
	 *
	 * @var string
	 */
	public $userRoleIdEqual = null;

	/**
	 * Users-roles ids csv list
	 *
	 * @var string
	 */
	public $userRoleIdIn = null;

	/**
	 * Unix timestamp
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * Unix timestamp
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * Unix timestamp
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * Unix timestamp
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;


}

