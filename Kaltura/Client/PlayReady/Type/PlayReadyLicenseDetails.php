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
class Kaltura_Client_PlayReady_Type_PlayReadyLicenseDetails extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayReadyLicenseDetails';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->policy) && !empty($xml->policy))
			$this->policy = Kaltura_Client_ParseUtils::unmarshalObject($xml->policy, "KalturaPlayReadyPolicy");
		if(!is_null($jsonObject) && isset($jsonObject->policy) && !empty($jsonObject->policy))
			$this->policy = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->policy, "KalturaPlayReadyPolicy");
		if(!is_null($xml) && count($xml->beginDate))
			$this->beginDate = (int)$xml->beginDate;
		if(!is_null($jsonObject) && isset($jsonObject->beginDate))
			$this->beginDate = (int)$jsonObject->beginDate;
		if(!is_null($xml) && count($xml->expirationDate))
			$this->expirationDate = (int)$xml->expirationDate;
		if(!is_null($jsonObject) && isset($jsonObject->expirationDate))
			$this->expirationDate = (int)$jsonObject->expirationDate;
		if(!is_null($xml) && count($xml->removalDate))
			$this->removalDate = (int)$xml->removalDate;
		if(!is_null($jsonObject) && isset($jsonObject->removalDate))
			$this->removalDate = (int)$jsonObject->removalDate;
	}
	/**
	 * PlayReady policy object
	 *
	 * @var Kaltura_Client_PlayReady_Type_PlayReadyPolicy
	 */
	public $policy;

	/**
	 * License begin date
	 *
	 * @var int
	 */
	public $beginDate = null;

	/**
	 * License expiration date
	 *
	 * @var int
	 */
	public $expirationDate = null;

	/**
	 * License removal date
	 *
	 * @var int
	 */
	public $removalDate = null;


}

