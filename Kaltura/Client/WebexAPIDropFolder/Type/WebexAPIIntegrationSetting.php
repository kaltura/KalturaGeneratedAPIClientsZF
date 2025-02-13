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
class Kaltura_Client_WebexAPIDropFolder_Type_WebexAPIIntegrationSetting extends Kaltura_Client_Vendor_Type_IntegrationSetting
{
	public function getKalturaObjectType()
	{
		return 'KalturaWebexAPIIntegrationSetting';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->webexCategory))
			$this->webexCategory = (string)$xml->webexCategory;
		if(!is_null($jsonObject) && isset($jsonObject->webexCategory))
			$this->webexCategory = (string)$jsonObject->webexCategory;
		if(!is_null($xml) && count($xml->enableRecordingUpload))
			$this->enableRecordingUpload = (int)$xml->enableRecordingUpload;
		if(!is_null($jsonObject) && isset($jsonObject->enableRecordingUpload))
			$this->enableRecordingUpload = (int)$jsonObject->enableRecordingUpload;
		if(!is_null($xml) && count($xml->enableTranscription))
			$this->enableTranscription = (int)$xml->enableTranscription;
		if(!is_null($jsonObject) && isset($jsonObject->enableTranscription))
			$this->enableTranscription = (int)$jsonObject->enableTranscription;
		if(!is_null($xml) && count($xml->userMatchingMode))
			$this->userMatchingMode = (int)$xml->userMatchingMode;
		if(!is_null($jsonObject) && isset($jsonObject->userMatchingMode))
			$this->userMatchingMode = (int)$jsonObject->userMatchingMode;
		if(!is_null($xml) && count($xml->userPostfix))
			$this->userPostfix = (string)$xml->userPostfix;
		if(!is_null($jsonObject) && isset($jsonObject->userPostfix))
			$this->userPostfix = (string)$jsonObject->userPostfix;
		if(!is_null($xml) && count($xml->webexAccountDescription))
			$this->webexAccountDescription = (string)$xml->webexAccountDescription;
		if(!is_null($jsonObject) && isset($jsonObject->webexAccountDescription))
			$this->webexAccountDescription = (string)$jsonObject->webexAccountDescription;
		if(!is_null($xml) && count($xml->groupParticipationType))
			$this->groupParticipationType = (int)$xml->groupParticipationType;
		if(!is_null($jsonObject) && isset($jsonObject->groupParticipationType))
			$this->groupParticipationType = (int)$jsonObject->groupParticipationType;
		if(!is_null($xml) && count($xml->optOutGroupNames))
			$this->optOutGroupNames = (string)$xml->optOutGroupNames;
		if(!is_null($jsonObject) && isset($jsonObject->optOutGroupNames))
			$this->optOutGroupNames = (string)$jsonObject->optOutGroupNames;
		if(!is_null($xml) && count($xml->optInGroupNames))
			$this->optInGroupNames = (string)$xml->optInGroupNames;
		if(!is_null($jsonObject) && isset($jsonObject->optInGroupNames))
			$this->optInGroupNames = (string)$jsonObject->optInGroupNames;
		if(!is_null($xml) && count($xml->siteUrl))
			$this->siteUrl = (string)$xml->siteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->siteUrl))
			$this->siteUrl = (string)$jsonObject->siteUrl;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $webexCategory = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableRecordingUpload = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableTranscription = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_WebexAPIDropFolder_Enum_WebexAPIUsersMatching
	 */
	public $userMatchingMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userPostfix = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexAccountDescription = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_WebexAPIDropFolder_Enum_WebexAPIGroupParticipationType
	 */
	public $groupParticipationType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $optOutGroupNames = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $optInGroupNames = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $siteUrl = null;


}

