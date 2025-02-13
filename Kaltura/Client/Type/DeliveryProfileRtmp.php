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
class Kaltura_Client_Type_DeliveryProfileRtmp extends Kaltura_Client_Type_DeliveryProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeliveryProfileRtmp';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->enforceRtmpe))
		{
			if(!empty($xml->enforceRtmpe) && ((int) $xml->enforceRtmpe === 1 || strtolower((string)$xml->enforceRtmpe) === 'true'))
				$this->enforceRtmpe = true;
			else
				$this->enforceRtmpe = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enforceRtmpe))
		{
			if(!empty($jsonObject->enforceRtmpe) && ((int) $jsonObject->enforceRtmpe === 1 || strtolower((string)$jsonObject->enforceRtmpe) === 'true'))
				$this->enforceRtmpe = true;
			else
				$this->enforceRtmpe = false;
		}
		if(!is_null($xml) && count($xml->prefix))
			$this->prefix = (string)$xml->prefix;
		if(!is_null($jsonObject) && isset($jsonObject->prefix))
			$this->prefix = (string)$jsonObject->prefix;
	}
	/**
	 * enforceRtmpe
	 *
	 * @var bool
	 */
	public $enforceRtmpe = null;

	/**
	 * a prefix that is added to all stream urls (replaces storageProfile::rtmpPrefix)
	 *
	 * @var string
	 */
	public $prefix = null;


}

