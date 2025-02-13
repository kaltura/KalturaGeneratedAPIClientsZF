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
abstract class Kaltura_Client_BusinessProcessNotification_Type_BusinessProcessNotificationTemplate extends Kaltura_Client_EventNotification_Type_EventNotificationTemplate
{
	public function getKalturaObjectType()
	{
		return 'KalturaBusinessProcessNotificationTemplate';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->serverId))
			$this->serverId = (int)$xml->serverId;
		if(!is_null($jsonObject) && isset($jsonObject->serverId))
			$this->serverId = (int)$jsonObject->serverId;
		if(!is_null($xml) && count($xml->processId))
			$this->processId = (string)$xml->processId;
		if(!is_null($jsonObject) && isset($jsonObject->processId))
			$this->processId = (string)$jsonObject->processId;
		if(!is_null($xml) && count($xml->mainObjectCode))
			$this->mainObjectCode = (string)$xml->mainObjectCode;
		if(!is_null($jsonObject) && isset($jsonObject->mainObjectCode))
			$this->mainObjectCode = (string)$jsonObject->mainObjectCode;
	}
	/**
	 * Define the integrated BPM server id
	 *
	 * @var int
	 */
	public $serverId = null;

	/**
	 * Define the integrated BPM process id
	 *
	 * @var string
	 */
	public $processId = null;

	/**
	 * Code to load the main triggering object
	 *
	 * @var string
	 */
	public $mainObjectCode = null;


}

