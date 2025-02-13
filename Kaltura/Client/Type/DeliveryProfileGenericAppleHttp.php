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
class Kaltura_Client_Type_DeliveryProfileGenericAppleHttp extends Kaltura_Client_Type_DeliveryProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaDeliveryProfileGenericAppleHttp';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->pattern))
			$this->pattern = (string)$xml->pattern;
		if(!is_null($jsonObject) && isset($jsonObject->pattern))
			$this->pattern = (string)$jsonObject->pattern;
		if(!is_null($xml) && count($xml->rendererClass))
			$this->rendererClass = (string)$xml->rendererClass;
		if(!is_null($jsonObject) && isset($jsonObject->rendererClass))
			$this->rendererClass = (string)$jsonObject->rendererClass;
		if(!is_null($xml) && count($xml->manifestRedirect))
			$this->manifestRedirect = (int)$xml->manifestRedirect;
		if(!is_null($jsonObject) && isset($jsonObject->manifestRedirect))
			$this->manifestRedirect = (int)$jsonObject->manifestRedirect;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $pattern = null;

	/**
	 * rendererClass
	 *
	 * @var string
	 */
	public $rendererClass = null;

	/**
	 * Enable to make playManifest redirect to the domain of the delivery profile
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $manifestRedirect = null;


}

