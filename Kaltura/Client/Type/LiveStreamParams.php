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
class Kaltura_Client_Type_LiveStreamParams extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStreamParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->bitrate))
			$this->bitrate = (int)$xml->bitrate;
		if(!is_null($jsonObject) && isset($jsonObject->bitrate))
			$this->bitrate = (int)$jsonObject->bitrate;
		if(!is_null($xml) && count($xml->flavorId))
			$this->flavorId = (string)$xml->flavorId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorId))
			$this->flavorId = (string)$jsonObject->flavorId;
		if(!is_null($xml) && count($xml->width))
			$this->width = (int)$xml->width;
		if(!is_null($jsonObject) && isset($jsonObject->width))
			$this->width = (int)$jsonObject->width;
		if(!is_null($xml) && count($xml->height))
			$this->height = (int)$xml->height;
		if(!is_null($jsonObject) && isset($jsonObject->height))
			$this->height = (int)$jsonObject->height;
		if(!is_null($xml) && count($xml->codec))
			$this->codec = (string)$xml->codec;
		if(!is_null($jsonObject) && isset($jsonObject->codec))
			$this->codec = (string)$jsonObject->codec;
		if(!is_null($xml) && count($xml->frameRate))
			$this->frameRate = (int)$xml->frameRate;
		if(!is_null($jsonObject) && isset($jsonObject->frameRate))
			$this->frameRate = (int)$jsonObject->frameRate;
		if(!is_null($xml) && count($xml->keyFrameInterval))
			$this->keyFrameInterval = (float)$xml->keyFrameInterval;
		if(!is_null($jsonObject) && isset($jsonObject->keyFrameInterval))
			$this->keyFrameInterval = (float)$jsonObject->keyFrameInterval;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
	}
	/**
	 * Bit rate of the stream. (i.e. 900)
	 *
	 * @var int
	 */
	public $bitrate = null;

	/**
	 * flavor asset id
	 *
	 * @var string
	 */
	public $flavorId = null;

	/**
	 * Stream's width
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * Stream's height
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * Live stream's codec
	 *
	 * @var string
	 */
	public $codec = null;

	/**
	 * Live stream's farme rate
	 *
	 * @var int
	 */
	public $frameRate = null;

	/**
	 * Live stream's key frame interval
	 *
	 * @var float
	 */
	public $keyFrameInterval = null;

	/**
	 * Live stream's language
	 *
	 * @var string
	 */
	public $language = null;


}

