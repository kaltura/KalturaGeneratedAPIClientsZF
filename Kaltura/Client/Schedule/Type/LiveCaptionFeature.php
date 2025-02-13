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
class Kaltura_Client_Schedule_Type_LiveCaptionFeature extends Kaltura_Client_Schedule_Type_LiveFeature
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveCaptionFeature';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->mediaUrl))
			$this->mediaUrl = (string)$xml->mediaUrl;
		if(!is_null($jsonObject) && isset($jsonObject->mediaUrl))
			$this->mediaUrl = (string)$jsonObject->mediaUrl;
		if(!is_null($xml) && count($xml->mediaKey))
			$this->mediaKey = (string)$xml->mediaKey;
		if(!is_null($jsonObject) && isset($jsonObject->mediaKey))
			$this->mediaKey = (string)$jsonObject->mediaKey;
		if(!is_null($xml) && count($xml->captionUrl))
			$this->captionUrl = (string)$xml->captionUrl;
		if(!is_null($jsonObject) && isset($jsonObject->captionUrl))
			$this->captionUrl = (string)$jsonObject->captionUrl;
		if(!is_null($xml) && count($xml->captionToken))
			$this->captionToken = (string)$xml->captionToken;
		if(!is_null($jsonObject) && isset($jsonObject->captionToken))
			$this->captionToken = (string)$jsonObject->captionToken;
		if(!is_null($xml) && count($xml->inputDelay))
			$this->inputDelay = (int)$xml->inputDelay;
		if(!is_null($jsonObject) && isset($jsonObject->inputDelay))
			$this->inputDelay = (int)$jsonObject->inputDelay;
		if(!is_null($xml) && count($xml->captionFormat))
			$this->captionFormat = (string)$xml->captionFormat;
		if(!is_null($jsonObject) && isset($jsonObject->captionFormat))
			$this->captionFormat = (string)$jsonObject->captionFormat;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $mediaUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mediaKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionToken = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $inputDelay = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionFormat = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $language = null;


}

