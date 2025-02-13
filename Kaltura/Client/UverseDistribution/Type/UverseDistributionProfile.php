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
class Kaltura_Client_UverseDistribution_Type_UverseDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaUverseDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(!is_null($jsonObject) && isset($jsonObject->feedUrl))
			$this->feedUrl = (string)$jsonObject->feedUrl;
		if(!is_null($xml) && count($xml->channelTitle))
			$this->channelTitle = (string)$xml->channelTitle;
		if(!is_null($jsonObject) && isset($jsonObject->channelTitle))
			$this->channelTitle = (string)$jsonObject->channelTitle;
		if(!is_null($xml) && count($xml->channelLink))
			$this->channelLink = (string)$xml->channelLink;
		if(!is_null($jsonObject) && isset($jsonObject->channelLink))
			$this->channelLink = (string)$jsonObject->channelLink;
		if(!is_null($xml) && count($xml->channelDescription))
			$this->channelDescription = (string)$xml->channelDescription;
		if(!is_null($jsonObject) && isset($jsonObject->channelDescription))
			$this->channelDescription = (string)$jsonObject->channelDescription;
		if(!is_null($xml) && count($xml->channelLanguage))
			$this->channelLanguage = (string)$xml->channelLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->channelLanguage))
			$this->channelLanguage = (string)$jsonObject->channelLanguage;
		if(!is_null($xml) && count($xml->channelCopyright))
			$this->channelCopyright = (string)$xml->channelCopyright;
		if(!is_null($jsonObject) && isset($jsonObject->channelCopyright))
			$this->channelCopyright = (string)$jsonObject->channelCopyright;
		if(!is_null($xml) && count($xml->channelImageTitle))
			$this->channelImageTitle = (string)$xml->channelImageTitle;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageTitle))
			$this->channelImageTitle = (string)$jsonObject->channelImageTitle;
		if(!is_null($xml) && count($xml->channelImageUrl))
			$this->channelImageUrl = (string)$xml->channelImageUrl;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageUrl))
			$this->channelImageUrl = (string)$jsonObject->channelImageUrl;
		if(!is_null($xml) && count($xml->channelImageLink))
			$this->channelImageLink = (string)$xml->channelImageLink;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageLink))
			$this->channelImageLink = (string)$jsonObject->channelImageLink;
		if(!is_null($xml) && count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->ftpHost))
			$this->ftpHost = (string)$jsonObject->ftpHost;
		if(!is_null($xml) && count($xml->ftpLogin))
			$this->ftpLogin = (string)$xml->ftpLogin;
		if(!is_null($jsonObject) && isset($jsonObject->ftpLogin))
			$this->ftpLogin = (string)$jsonObject->ftpLogin;
		if(!is_null($xml) && count($xml->ftpPassword))
			$this->ftpPassword = (string)$xml->ftpPassword;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPassword))
			$this->ftpPassword = (string)$jsonObject->ftpPassword;
	}
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelTitle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelDescription = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelLanguage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelCopyright = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelImageTitle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelImageUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelImageLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPassword = null;


}

