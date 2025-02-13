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
class Kaltura_Client_Type_UserEntryFilter extends Kaltura_Client_Type_UserEntryBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserEntryFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->userIdEqualCurrent))
			$this->userIdEqualCurrent = (int)$xml->userIdEqualCurrent;
		if(!is_null($jsonObject) && isset($jsonObject->userIdEqualCurrent))
			$this->userIdEqualCurrent = (int)$jsonObject->userIdEqualCurrent;
		if(!is_null($xml) && count($xml->isAnonymous))
			$this->isAnonymous = (int)$xml->isAnonymous;
		if(!is_null($jsonObject) && isset($jsonObject->isAnonymous))
			$this->isAnonymous = (int)$jsonObject->isAnonymous;
		if(!is_null($xml) && count($xml->privacyContextEqual))
			$this->privacyContextEqual = (string)$xml->privacyContextEqual;
		if(!is_null($jsonObject) && isset($jsonObject->privacyContextEqual))
			$this->privacyContextEqual = (string)$jsonObject->privacyContextEqual;
		if(!is_null($xml) && count($xml->privacyContextIn))
			$this->privacyContextIn = (string)$xml->privacyContextIn;
		if(!is_null($jsonObject) && isset($jsonObject->privacyContextIn))
			$this->privacyContextIn = (string)$jsonObject->privacyContextIn;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $userIdEqualCurrent = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isAnonymous = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privacyContextEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privacyContextIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;


}

