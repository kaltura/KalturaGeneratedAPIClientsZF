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
class Kaltura_Client_Type_LiveStats extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStats';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->audience))
			$this->audience = (int)$xml->audience;
		if(!is_null($jsonObject) && isset($jsonObject->audience))
			$this->audience = (int)$jsonObject->audience;
		if(!is_null($xml) && count($xml->dvrAudience))
			$this->dvrAudience = (int)$xml->dvrAudience;
		if(!is_null($jsonObject) && isset($jsonObject->dvrAudience))
			$this->dvrAudience = (int)$jsonObject->dvrAudience;
		if(!is_null($xml) && count($xml->avgBitrate))
			$this->avgBitrate = (float)$xml->avgBitrate;
		if(!is_null($jsonObject) && isset($jsonObject->avgBitrate))
			$this->avgBitrate = (float)$jsonObject->avgBitrate;
		if(!is_null($xml) && count($xml->bufferTime))
			$this->bufferTime = (int)$xml->bufferTime;
		if(!is_null($jsonObject) && isset($jsonObject->bufferTime))
			$this->bufferTime = (int)$jsonObject->bufferTime;
		if(!is_null($xml) && count($xml->plays))
			$this->plays = (int)$xml->plays;
		if(!is_null($jsonObject) && isset($jsonObject->plays))
			$this->plays = (int)$jsonObject->plays;
		if(!is_null($xml) && count($xml->secondsViewed))
			$this->secondsViewed = (int)$xml->secondsViewed;
		if(!is_null($jsonObject) && isset($jsonObject->secondsViewed))
			$this->secondsViewed = (int)$jsonObject->secondsViewed;
		if(!is_null($xml) && count($xml->startEvent))
			$this->startEvent = (string)$xml->startEvent;
		if(!is_null($jsonObject) && isset($jsonObject->startEvent))
			$this->startEvent = (string)$jsonObject->startEvent;
		if(!is_null($xml) && count($xml->timestamp))
			$this->timestamp = (int)$xml->timestamp;
		if(!is_null($jsonObject) && isset($jsonObject->timestamp))
			$this->timestamp = (int)$jsonObject->timestamp;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $audience = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dvrAudience = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $avgBitrate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $bufferTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $plays = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $secondsViewed = null;

	/**
	 * 
	 *
	 * @var bigint
	 */
	public $startEvent = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $timestamp = null;


}

