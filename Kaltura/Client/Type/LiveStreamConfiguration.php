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
class Kaltura_Client_Type_LiveStreamConfiguration extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStreamConfiguration';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (string)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->publishUrl))
			$this->publishUrl = (string)$xml->publishUrl;
		if(!is_null($jsonObject) && isset($jsonObject->publishUrl))
			$this->publishUrl = (string)$jsonObject->publishUrl;
		if(!is_null($xml) && count($xml->backupUrl))
			$this->backupUrl = (string)$xml->backupUrl;
		if(!is_null($jsonObject) && isset($jsonObject->backupUrl))
			$this->backupUrl = (string)$jsonObject->backupUrl;
		if(!is_null($xml) && count($xml->streamName))
			$this->streamName = (string)$xml->streamName;
		if(!is_null($jsonObject) && isset($jsonObject->streamName))
			$this->streamName = (string)$jsonObject->streamName;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PlaybackProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $publishUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $backupUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $streamName = null;


}

