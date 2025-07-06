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
class Kaltura_Client_Vendor_Type_ZoomIntegrationSetting extends Kaltura_Client_Vendor_Type_IntegrationSetting
{
	public function getKalturaObjectType()
	{
		return 'KalturaZoomIntegrationSetting';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->zoomCategory))
			$this->zoomCategory = (string)$xml->zoomCategory;
		if(!is_null($jsonObject) && isset($jsonObject->zoomCategory))
			$this->zoomCategory = (string)$jsonObject->zoomCategory;
		if(!is_null($xml) && count($xml->enableRecordingUpload))
			$this->enableRecordingUpload = (int)$xml->enableRecordingUpload;
		if(!is_null($jsonObject) && isset($jsonObject->enableRecordingUpload))
			$this->enableRecordingUpload = (int)$jsonObject->enableRecordingUpload;
		if(!is_null($xml) && count($xml->zoomUserMatchingMode))
			$this->zoomUserMatchingMode = (int)$xml->zoomUserMatchingMode;
		if(!is_null($jsonObject) && isset($jsonObject->zoomUserMatchingMode))
			$this->zoomUserMatchingMode = (int)$jsonObject->zoomUserMatchingMode;
		if(!is_null($xml) && count($xml->zoomUserPostfix))
			$this->zoomUserPostfix = (string)$xml->zoomUserPostfix;
		if(!is_null($jsonObject) && isset($jsonObject->zoomUserPostfix))
			$this->zoomUserPostfix = (string)$jsonObject->zoomUserPostfix;
		if(!is_null($xml) && count($xml->zoomWebinarCategory))
			$this->zoomWebinarCategory = (string)$xml->zoomWebinarCategory;
		if(!is_null($jsonObject) && isset($jsonObject->zoomWebinarCategory))
			$this->zoomWebinarCategory = (string)$jsonObject->zoomWebinarCategory;
		if(!is_null($xml) && count($xml->enableWebinarUploads))
			$this->enableWebinarUploads = (int)$xml->enableWebinarUploads;
		if(!is_null($jsonObject) && isset($jsonObject->enableWebinarUploads))
			$this->enableWebinarUploads = (int)$jsonObject->enableWebinarUploads;
		if(!is_null($xml) && count($xml->enableZoomTranscription))
			$this->enableZoomTranscription = (int)$xml->enableZoomTranscription;
		if(!is_null($jsonObject) && isset($jsonObject->enableZoomTranscription))
			$this->enableZoomTranscription = (int)$jsonObject->enableZoomTranscription;
		if(!is_null($xml) && count($xml->zoomAccountDescription))
			$this->zoomAccountDescription = (string)$xml->zoomAccountDescription;
		if(!is_null($jsonObject) && isset($jsonObject->zoomAccountDescription))
			$this->zoomAccountDescription = (string)$jsonObject->zoomAccountDescription;
		if(!is_null($xml) && count($xml->optOutGroupNames))
			$this->optOutGroupNames = (string)$xml->optOutGroupNames;
		if(!is_null($jsonObject) && isset($jsonObject->optOutGroupNames))
			$this->optOutGroupNames = (string)$jsonObject->optOutGroupNames;
		if(!is_null($xml) && count($xml->optInGroupNames))
			$this->optInGroupNames = (string)$xml->optInGroupNames;
		if(!is_null($jsonObject) && isset($jsonObject->optInGroupNames))
			$this->optInGroupNames = (string)$jsonObject->optInGroupNames;
		if(!is_null($xml) && count($xml->groupParticipationType))
			$this->groupParticipationType = (int)$xml->groupParticipationType;
		if(!is_null($jsonObject) && isset($jsonObject->groupParticipationType))
			$this->groupParticipationType = (int)$jsonObject->groupParticipationType;
		if(!is_null($xml) && count($xml->handleCohostsMode))
			$this->handleCohostsMode = (int)$xml->handleCohostsMode;
		if(!is_null($jsonObject) && isset($jsonObject->handleCohostsMode))
			$this->handleCohostsMode = (int)$jsonObject->handleCohostsMode;
		if(!is_null($xml) && count($xml->handleAlternativeHostsMode))
			$this->handleAlternativeHostsMode = (int)$xml->handleAlternativeHostsMode;
		if(!is_null($jsonObject) && isset($jsonObject->handleAlternativeHostsMode))
			$this->handleAlternativeHostsMode = (int)$jsonObject->handleAlternativeHostsMode;
		if(!is_null($xml) && count($xml->userSearchMethod))
			$this->userSearchMethod = (int)$xml->userSearchMethod;
		if(!is_null($jsonObject) && isset($jsonObject->userSearchMethod))
			$this->userSearchMethod = (int)$jsonObject->userSearchMethod;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomCategory = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableRecordingUpload = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Vendor_Enum_ZoomUsersMatching
	 */
	public $zoomUserMatchingMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomUserPostfix = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomWebinarCategory = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableWebinarUploads = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableZoomTranscription = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $zoomAccountDescription = null;

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
	 * @var Kaltura_Client_Enum_ZoomGroupParticipationType
	 */
	public $groupParticipationType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Vendor_Enum_HandleParticipantsMode
	 */
	public $handleCohostsMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Vendor_Enum_HandleParticipantsMode
	 */
	public $handleAlternativeHostsMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Vendor_Enum_ZoomUsersSearchMethod
	 */
	public $userSearchMethod = null;


}

