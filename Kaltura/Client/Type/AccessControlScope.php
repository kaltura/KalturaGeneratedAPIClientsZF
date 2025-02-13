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
class Kaltura_Client_Type_AccessControlScope extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAccessControlScope';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->referrer))
			$this->referrer = (string)$xml->referrer;
		if(!is_null($jsonObject) && isset($jsonObject->referrer))
			$this->referrer = (string)$jsonObject->referrer;
		if(!is_null($xml) && count($xml->ip))
			$this->ip = (string)$xml->ip;
		if(!is_null($jsonObject) && isset($jsonObject->ip))
			$this->ip = (string)$jsonObject->ip;
		if(!is_null($xml) && count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(!is_null($jsonObject) && isset($jsonObject->ks))
			$this->ks = (string)$jsonObject->ks;
		if(!is_null($xml) && count($xml->userAgent))
			$this->userAgent = (string)$xml->userAgent;
		if(!is_null($jsonObject) && isset($jsonObject->userAgent))
			$this->userAgent = (string)$jsonObject->userAgent;
		if(!is_null($xml) && count($xml->time))
			$this->time = (int)$xml->time;
		if(!is_null($jsonObject) && isset($jsonObject->time))
			$this->time = (int)$jsonObject->time;
		if(!is_null($xml) && count($xml->contexts))
		{
			if(empty($xml->contexts))
				$this->contexts = array();
			else
				$this->contexts = Kaltura_Client_ParseUtils::unmarshalArray($xml->contexts, "KalturaAccessControlContextTypeHolder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->contexts))
		{
			if(empty($jsonObject->contexts))
				$this->contexts = array();
			else
				$this->contexts = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->contexts, "KalturaAccessControlContextTypeHolder");
		}
		if(!is_null($xml) && count($xml->hashes))
		{
			if(empty($xml->hashes))
				$this->hashes = array();
			else
				$this->hashes = Kaltura_Client_ParseUtils::unmarshalArray($xml->hashes, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->hashes))
		{
			if(empty($jsonObject->hashes))
				$this->hashes = array();
			else
				$this->hashes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->hashes, "KalturaKeyValue");
		}
	}
	/**
	 * URL to be used to test domain conditions.
	 *
	 * @var string
	 */
	public $referrer = null;

	/**
	 * IP to be used to test geographic location conditions.
	 *
	 * @var string
	 */
	public $ip = null;

	/**
	 * Kaltura session to be used to test session and user conditions.
	 *
	 * @var string
	 */
	public $ks = null;

	/**
	 * Browser or client application to be used to test agent conditions.
	 *
	 * @var string
	 */
	public $userAgent = null;

	/**
	 * Unix timestamp (In seconds) to be used to test entry scheduling, keep null to use now.
	 *
	 * @var int
	 */
	public $time = null;

	/**
	 * Indicates what contexts should be tested. No contexts means any context.
	 *
	 * @var array of KalturaAccessControlContextTypeHolder
	 */
	public $contexts;

	/**
	 * Array of hashes to pass to the access control profile scope
	 *
	 * @var array of KalturaKeyValue
	 */
	public $hashes;


}

