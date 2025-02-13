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
class Kaltura_Client_ContentDistribution_Type_DistributionJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaDistributionJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->distributionProfileId))
			$this->distributionProfileId = (int)$xml->distributionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->distributionProfileId))
			$this->distributionProfileId = (int)$jsonObject->distributionProfileId;
		if(!is_null($xml) && count($xml->distributionProfile) && !empty($xml->distributionProfile))
			$this->distributionProfile = Kaltura_Client_ParseUtils::unmarshalObject($xml->distributionProfile, "KalturaDistributionProfile");
		if(!is_null($jsonObject) && isset($jsonObject->distributionProfile) && !empty($jsonObject->distributionProfile))
			$this->distributionProfile = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->distributionProfile, "KalturaDistributionProfile");
		if(!is_null($xml) && count($xml->entryDistributionId))
			$this->entryDistributionId = (int)$xml->entryDistributionId;
		if(!is_null($jsonObject) && isset($jsonObject->entryDistributionId))
			$this->entryDistributionId = (int)$jsonObject->entryDistributionId;
		if(!is_null($xml) && count($xml->entryDistribution) && !empty($xml->entryDistribution))
			$this->entryDistribution = Kaltura_Client_ParseUtils::unmarshalObject($xml->entryDistribution, "KalturaEntryDistribution");
		if(!is_null($jsonObject) && isset($jsonObject->entryDistribution) && !empty($jsonObject->entryDistribution))
			$this->entryDistribution = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->entryDistribution, "KalturaEntryDistribution");
		if(!is_null($xml) && count($xml->remoteId))
			$this->remoteId = (string)$xml->remoteId;
		if(!is_null($jsonObject) && isset($jsonObject->remoteId))
			$this->remoteId = (string)$jsonObject->remoteId;
		if(!is_null($xml) && count($xml->providerType))
			$this->providerType = (string)$xml->providerType;
		if(!is_null($jsonObject) && isset($jsonObject->providerType))
			$this->providerType = (string)$jsonObject->providerType;
		if(!is_null($xml) && count($xml->providerData) && !empty($xml->providerData))
			$this->providerData = Kaltura_Client_ParseUtils::unmarshalObject($xml->providerData, "KalturaDistributionJobProviderData");
		if(!is_null($jsonObject) && isset($jsonObject->providerData) && !empty($jsonObject->providerData))
			$this->providerData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->providerData, "KalturaDistributionJobProviderData");
		if(!is_null($xml) && count($xml->results))
			$this->results = (string)$xml->results;
		if(!is_null($jsonObject) && isset($jsonObject->results))
			$this->results = (string)$jsonObject->results;
		if(!is_null($xml) && count($xml->sentData))
			$this->sentData = (string)$xml->sentData;
		if(!is_null($jsonObject) && isset($jsonObject->sentData))
			$this->sentData = (string)$jsonObject->sentData;
		if(!is_null($xml) && count($xml->mediaFiles))
		{
			if(empty($xml->mediaFiles))
				$this->mediaFiles = array();
			else
				$this->mediaFiles = Kaltura_Client_ParseUtils::unmarshalArray($xml->mediaFiles, "KalturaDistributionRemoteMediaFile");
		}
		if(!is_null($jsonObject) && isset($jsonObject->mediaFiles))
		{
			if(empty($jsonObject->mediaFiles))
				$this->mediaFiles = array();
			else
				$this->mediaFiles = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->mediaFiles, "KalturaDistributionRemoteMediaFile");
		}
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $distributionProfileId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_DistributionProfile
	 */
	public $distributionProfile;

	/**
	 * 
	 *
	 * @var int
	 */
	public $entryDistributionId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_EntryDistribution
	 */
	public $entryDistribution;

	/**
	 * Id of the media in the remote system
	 *
	 * @var string
	 */
	public $remoteId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProviderType
	 */
	public $providerType = null;

	/**
	 * Additional data that relevant for the provider only
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_DistributionJobProviderData
	 */
	public $providerData;

	/**
	 * The results as returned from the remote destination
	 *
	 * @var string
	 */
	public $results = null;

	/**
	 * The data as sent to the remote destination
	 *
	 * @var string
	 */
	public $sentData = null;

	/**
	 * Stores array of media files that submitted to the destination site
	 * 	 Could be used later for media update
	 *
	 * @var array of KalturaDistributionRemoteMediaFile
	 */
	public $mediaFiles;


}

