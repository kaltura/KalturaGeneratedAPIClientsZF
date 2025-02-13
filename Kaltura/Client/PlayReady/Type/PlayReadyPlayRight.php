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
class Kaltura_Client_PlayReady_Type_PlayReadyPlayRight extends Kaltura_Client_PlayReady_Type_PlayReadyRight
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayReadyPlayRight';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->analogVideoOPL))
			$this->analogVideoOPL = (int)$xml->analogVideoOPL;
		if(!is_null($jsonObject) && isset($jsonObject->analogVideoOPL))
			$this->analogVideoOPL = (int)$jsonObject->analogVideoOPL;
		if(!is_null($xml) && count($xml->analogVideoOutputProtectionList))
		{
			if(empty($xml->analogVideoOutputProtectionList))
				$this->analogVideoOutputProtectionList = array();
			else
				$this->analogVideoOutputProtectionList = Kaltura_Client_ParseUtils::unmarshalArray($xml->analogVideoOutputProtectionList, "KalturaPlayReadyAnalogVideoOPIdHolder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->analogVideoOutputProtectionList))
		{
			if(empty($jsonObject->analogVideoOutputProtectionList))
				$this->analogVideoOutputProtectionList = array();
			else
				$this->analogVideoOutputProtectionList = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->analogVideoOutputProtectionList, "KalturaPlayReadyAnalogVideoOPIdHolder");
		}
		if(!is_null($xml) && count($xml->compressedDigitalAudioOPL))
			$this->compressedDigitalAudioOPL = (int)$xml->compressedDigitalAudioOPL;
		if(!is_null($jsonObject) && isset($jsonObject->compressedDigitalAudioOPL))
			$this->compressedDigitalAudioOPL = (int)$jsonObject->compressedDigitalAudioOPL;
		if(!is_null($xml) && count($xml->compressedDigitalVideoOPL))
			$this->compressedDigitalVideoOPL = (int)$xml->compressedDigitalVideoOPL;
		if(!is_null($jsonObject) && isset($jsonObject->compressedDigitalVideoOPL))
			$this->compressedDigitalVideoOPL = (int)$jsonObject->compressedDigitalVideoOPL;
		if(!is_null($xml) && count($xml->digitalAudioOutputProtectionList))
		{
			if(empty($xml->digitalAudioOutputProtectionList))
				$this->digitalAudioOutputProtectionList = array();
			else
				$this->digitalAudioOutputProtectionList = Kaltura_Client_ParseUtils::unmarshalArray($xml->digitalAudioOutputProtectionList, "KalturaPlayReadyDigitalAudioOPIdHolder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->digitalAudioOutputProtectionList))
		{
			if(empty($jsonObject->digitalAudioOutputProtectionList))
				$this->digitalAudioOutputProtectionList = array();
			else
				$this->digitalAudioOutputProtectionList = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->digitalAudioOutputProtectionList, "KalturaPlayReadyDigitalAudioOPIdHolder");
		}
		if(!is_null($xml) && count($xml->uncompressedDigitalAudioOPL))
			$this->uncompressedDigitalAudioOPL = (int)$xml->uncompressedDigitalAudioOPL;
		if(!is_null($jsonObject) && isset($jsonObject->uncompressedDigitalAudioOPL))
			$this->uncompressedDigitalAudioOPL = (int)$jsonObject->uncompressedDigitalAudioOPL;
		if(!is_null($xml) && count($xml->uncompressedDigitalVideoOPL))
			$this->uncompressedDigitalVideoOPL = (int)$xml->uncompressedDigitalVideoOPL;
		if(!is_null($jsonObject) && isset($jsonObject->uncompressedDigitalVideoOPL))
			$this->uncompressedDigitalVideoOPL = (int)$jsonObject->uncompressedDigitalVideoOPL;
		if(!is_null($xml) && count($xml->firstPlayExpiration))
			$this->firstPlayExpiration = (int)$xml->firstPlayExpiration;
		if(!is_null($jsonObject) && isset($jsonObject->firstPlayExpiration))
			$this->firstPlayExpiration = (int)$jsonObject->firstPlayExpiration;
		if(!is_null($xml) && count($xml->playEnablers))
		{
			if(empty($xml->playEnablers))
				$this->playEnablers = array();
			else
				$this->playEnablers = Kaltura_Client_ParseUtils::unmarshalArray($xml->playEnablers, "KalturaPlayReadyPlayEnablerHolder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->playEnablers))
		{
			if(empty($jsonObject->playEnablers))
				$this->playEnablers = array();
			else
				$this->playEnablers = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->playEnablers, "KalturaPlayReadyPlayEnablerHolder");
		}
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_PlayReady_Enum_PlayReadyAnalogVideoOPL
	 */
	public $analogVideoOPL = null;

	/**
	 * 
	 *
	 * @var array of KalturaPlayReadyAnalogVideoOPIdHolder
	 */
	public $analogVideoOutputProtectionList;

	/**
	 * 
	 *
	 * @var Kaltura_Client_PlayReady_Enum_PlayReadyDigitalAudioOPL
	 */
	public $compressedDigitalAudioOPL = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_PlayReady_Enum_PlayReadyCompressedDigitalVideoOPL
	 */
	public $compressedDigitalVideoOPL = null;

	/**
	 * 
	 *
	 * @var array of KalturaPlayReadyDigitalAudioOPIdHolder
	 */
	public $digitalAudioOutputProtectionList;

	/**
	 * 
	 *
	 * @var Kaltura_Client_PlayReady_Enum_PlayReadyDigitalAudioOPL
	 */
	public $uncompressedDigitalAudioOPL = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_PlayReady_Enum_PlayReadyUncompressedDigitalVideoOPL
	 */
	public $uncompressedDigitalVideoOPL = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $firstPlayExpiration = null;

	/**
	 * 
	 *
	 * @var array of KalturaPlayReadyPlayEnablerHolder
	 */
	public $playEnablers;


}

