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
class Kaltura_Client_YahooDistribution_Type_YahooDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaYahooDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ftpPath))
			$this->ftpPath = (string)$xml->ftpPath;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPath))
			$this->ftpPath = (string)$jsonObject->ftpPath;
		if(!is_null($xml) && count($xml->ftpUsername))
			$this->ftpUsername = (string)$xml->ftpUsername;
		if(!is_null($jsonObject) && isset($jsonObject->ftpUsername))
			$this->ftpUsername = (string)$jsonObject->ftpUsername;
		if(!is_null($xml) && count($xml->ftpPassword))
			$this->ftpPassword = (string)$xml->ftpPassword;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPassword))
			$this->ftpPassword = (string)$jsonObject->ftpPassword;
		if(!is_null($xml) && count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->ftpHost))
			$this->ftpHost = (string)$jsonObject->ftpHost;
		if(!is_null($xml) && count($xml->contactTelephone))
			$this->contactTelephone = (string)$xml->contactTelephone;
		if(!is_null($jsonObject) && isset($jsonObject->contactTelephone))
			$this->contactTelephone = (string)$jsonObject->contactTelephone;
		if(!is_null($xml) && count($xml->contactEmail))
			$this->contactEmail = (string)$xml->contactEmail;
		if(!is_null($jsonObject) && isset($jsonObject->contactEmail))
			$this->contactEmail = (string)$jsonObject->contactEmail;
		if(!is_null($xml) && count($xml->processFeed))
			$this->processFeed = (int)$xml->processFeed;
		if(!is_null($jsonObject) && isset($jsonObject->processFeed))
			$this->processFeed = (int)$jsonObject->processFeed;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ftpPassword = null;

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
	public $contactTelephone = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contactEmail = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_YahooDistribution_Enum_YahooDistributionProcessFeedActionStatus
	 */
	public $processFeed = null;


}

