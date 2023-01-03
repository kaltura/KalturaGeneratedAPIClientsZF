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
// Copyright (C) 2006-2022  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->mediaUrl))
			$this->mediaUrl = (string)$xml->mediaUrl;
		if(count($xml->mediaKey))
			$this->mediaKey = (string)$xml->mediaKey;
		if(count($xml->captionUrl))
			$this->captionUrl = (string)$xml->captionUrl;
		if(count($xml->captionToken))
			$this->captionToken = (string)$xml->captionToken;
		if(count($xml->inputDelay))
			$this->inputDelay = (int)$xml->inputDelay;
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


}

