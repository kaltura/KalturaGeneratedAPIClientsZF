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
class Kaltura_Client_Widevine_Type_WidevineProfile extends Kaltura_Client_Drm_Type_DrmProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaWidevineProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->key))
			$this->key = (string)$xml->key;
		if(!is_null($jsonObject) && isset($jsonObject->key))
			$this->key = (string)$jsonObject->key;
		if(!is_null($xml) && count($xml->iv))
			$this->iv = (string)$xml->iv;
		if(!is_null($jsonObject) && isset($jsonObject->iv))
			$this->iv = (string)$jsonObject->iv;
		if(!is_null($xml) && count($xml->owner))
			$this->owner = (string)$xml->owner;
		if(!is_null($jsonObject) && isset($jsonObject->owner))
			$this->owner = (string)$jsonObject->owner;
		if(!is_null($xml) && count($xml->portal))
			$this->portal = (string)$xml->portal;
		if(!is_null($jsonObject) && isset($jsonObject->portal))
			$this->portal = (string)$jsonObject->portal;
		if(!is_null($xml) && count($xml->maxGop))
			$this->maxGop = (int)$xml->maxGop;
		if(!is_null($jsonObject) && isset($jsonObject->maxGop))
			$this->maxGop = (int)$jsonObject->maxGop;
		if(!is_null($xml) && count($xml->regServerHost))
			$this->regServerHost = (string)$xml->regServerHost;
		if(!is_null($jsonObject) && isset($jsonObject->regServerHost))
			$this->regServerHost = (string)$jsonObject->regServerHost;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $iv = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $owner = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $portal = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxGop = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $regServerHost = null;


}

