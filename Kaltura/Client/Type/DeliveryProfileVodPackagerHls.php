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
class Kaltura_Client_Type_DeliveryProfileVodPackagerHls extends Kaltura_Client_Type_DeliveryProfileVodPackagerPlayServer
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeliveryProfileVodPackagerHls';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->allowFairplayOffline))
		{
			if(!empty($xml->allowFairplayOffline) && ((int) $xml->allowFairplayOffline === 1 || strtolower((string)$xml->allowFairplayOffline) === 'true'))
				$this->allowFairplayOffline = true;
			else
				$this->allowFairplayOffline = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowFairplayOffline))
		{
			if(!empty($jsonObject->allowFairplayOffline) && ((int) $jsonObject->allowFairplayOffline === 1 || strtolower((string)$jsonObject->allowFairplayOffline) === 'true'))
				$this->allowFairplayOffline = true;
			else
				$this->allowFairplayOffline = false;
		}
		if(!is_null($xml) && count($xml->supportFmp4))
		{
			if(!empty($xml->supportFmp4) && ((int) $xml->supportFmp4 === 1 || strtolower((string)$xml->supportFmp4) === 'true'))
				$this->supportFmp4 = true;
			else
				$this->supportFmp4 = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->supportFmp4))
		{
			if(!empty($jsonObject->supportFmp4) && ((int) $jsonObject->supportFmp4 === 1 || strtolower((string)$jsonObject->supportFmp4) === 'true'))
				$this->supportFmp4 = true;
			else
				$this->supportFmp4 = false;
		}
	}
	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowFairplayOffline = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $supportFmp4 = null;


}

