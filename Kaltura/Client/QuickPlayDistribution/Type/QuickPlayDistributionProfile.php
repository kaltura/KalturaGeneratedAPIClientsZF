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
class Kaltura_Client_QuickPlayDistribution_Type_QuickPlayDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaQuickPlayDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->sftpHost))
			$this->sftpHost = (string)$xml->sftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->sftpHost))
			$this->sftpHost = (string)$jsonObject->sftpHost;
		if(!is_null($xml) && count($xml->sftpLogin))
			$this->sftpLogin = (string)$xml->sftpLogin;
		if(!is_null($jsonObject) && isset($jsonObject->sftpLogin))
			$this->sftpLogin = (string)$jsonObject->sftpLogin;
		if(!is_null($xml) && count($xml->sftpPass))
			$this->sftpPass = (string)$xml->sftpPass;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPass))
			$this->sftpPass = (string)$jsonObject->sftpPass;
		if(!is_null($xml) && count($xml->sftpBasePath))
			$this->sftpBasePath = (string)$xml->sftpBasePath;
		if(!is_null($jsonObject) && isset($jsonObject->sftpBasePath))
			$this->sftpBasePath = (string)$jsonObject->sftpBasePath;
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
		if(!is_null($xml) && count($xml->channelManagingEditor))
			$this->channelManagingEditor = (string)$xml->channelManagingEditor;
		if(!is_null($jsonObject) && isset($jsonObject->channelManagingEditor))
			$this->channelManagingEditor = (string)$jsonObject->channelManagingEditor;
		if(!is_null($xml) && count($xml->channelLanguage))
			$this->channelLanguage = (string)$xml->channelLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->channelLanguage))
			$this->channelLanguage = (string)$jsonObject->channelLanguage;
		if(!is_null($xml) && count($xml->channelImageTitle))
			$this->channelImageTitle = (string)$xml->channelImageTitle;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageTitle))
			$this->channelImageTitle = (string)$jsonObject->channelImageTitle;
		if(!is_null($xml) && count($xml->channelImageWidth))
			$this->channelImageWidth = (string)$xml->channelImageWidth;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageWidth))
			$this->channelImageWidth = (string)$jsonObject->channelImageWidth;
		if(!is_null($xml) && count($xml->channelImageHeight))
			$this->channelImageHeight = (string)$xml->channelImageHeight;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageHeight))
			$this->channelImageHeight = (string)$jsonObject->channelImageHeight;
		if(!is_null($xml) && count($xml->channelImageLink))
			$this->channelImageLink = (string)$xml->channelImageLink;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageLink))
			$this->channelImageLink = (string)$jsonObject->channelImageLink;
		if(!is_null($xml) && count($xml->channelImageUrl))
			$this->channelImageUrl = (string)$xml->channelImageUrl;
		if(!is_null($jsonObject) && isset($jsonObject->channelImageUrl))
			$this->channelImageUrl = (string)$jsonObject->channelImageUrl;
		if(!is_null($xml) && count($xml->channelCopyright))
			$this->channelCopyright = (string)$xml->channelCopyright;
		if(!is_null($jsonObject) && isset($jsonObject->channelCopyright))
			$this->channelCopyright = (string)$jsonObject->channelCopyright;
		if(!is_null($xml) && count($xml->channelGenerator))
			$this->channelGenerator = (string)$xml->channelGenerator;
		if(!is_null($jsonObject) && isset($jsonObject->channelGenerator))
			$this->channelGenerator = (string)$jsonObject->channelGenerator;
		if(!is_null($xml) && count($xml->channelRating))
			$this->channelRating = (string)$xml->channelRating;
		if(!is_null($jsonObject) && isset($jsonObject->channelRating))
			$this->channelRating = (string)$jsonObject->channelRating;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpHost = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPass = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpBasePath = null;

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
	public $channelManagingEditor = null;

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
	public $channelImageTitle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelImageWidth = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelImageHeight = null;

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
	public $channelImageUrl = null;

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
	public $channelGenerator = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $channelRating = null;


}

