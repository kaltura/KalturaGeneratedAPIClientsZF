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
class Kaltura_Client_Type_UrlTokenizer extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaUrlTokenizer';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->window))
			$this->window = (int)$xml->window;
		if(!is_null($jsonObject) && isset($jsonObject->window))
			$this->window = (int)$jsonObject->window;
		if(!is_null($xml) && count($xml->key))
			$this->key = (string)$xml->key;
		if(!is_null($jsonObject) && isset($jsonObject->key))
			$this->key = (string)$jsonObject->key;
		if(!is_null($xml) && count($xml->limitIpAddress))
		{
			if(!empty($xml->limitIpAddress) && ((int) $xml->limitIpAddress === 1 || strtolower((string)$xml->limitIpAddress) === 'true'))
				$this->limitIpAddress = true;
			else
				$this->limitIpAddress = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->limitIpAddress))
		{
			if(!empty($jsonObject->limitIpAddress) && ((int) $jsonObject->limitIpAddress === 1 || strtolower((string)$jsonObject->limitIpAddress) === 'true'))
				$this->limitIpAddress = true;
			else
				$this->limitIpAddress = false;
		}
	}
	/**
	 * Window
	 *
	 * @var int
	 */
	public $window = null;

	/**
	 * key
	 *
	 * @var string
	 */
	public $key = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $limitIpAddress = null;


}

