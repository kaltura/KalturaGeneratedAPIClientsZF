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
class Kaltura_Client_DoubleClickDistribution_Type_DoubleClickDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaDoubleClickDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
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
		if(!is_null($xml) && count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(!is_null($jsonObject) && isset($jsonObject->feedUrl))
			$this->feedUrl = (string)$jsonObject->feedUrl;
		if(!is_null($xml) && count($xml->cuePointsProvider))
			$this->cuePointsProvider = (string)$xml->cuePointsProvider;
		if(!is_null($jsonObject) && isset($jsonObject->cuePointsProvider))
			$this->cuePointsProvider = (string)$jsonObject->cuePointsProvider;
		if(!is_null($xml) && count($xml->itemsPerPage))
			$this->itemsPerPage = (string)$xml->itemsPerPage;
		if(!is_null($jsonObject) && isset($jsonObject->itemsPerPage))
			$this->itemsPerPage = (string)$jsonObject->itemsPerPage;
		if(!is_null($xml) && count($xml->ignoreSchedulingInFeed))
		{
			if(!empty($xml->ignoreSchedulingInFeed) && ((int) $xml->ignoreSchedulingInFeed === 1 || strtolower((string)$xml->ignoreSchedulingInFeed) === 'true'))
				$this->ignoreSchedulingInFeed = true;
			else
				$this->ignoreSchedulingInFeed = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ignoreSchedulingInFeed))
		{
			if(!empty($jsonObject->ignoreSchedulingInFeed) && ((int) $jsonObject->ignoreSchedulingInFeed === 1 || strtolower((string)$jsonObject->ignoreSchedulingInFeed) === 'true'))
				$this->ignoreSchedulingInFeed = true;
			else
				$this->ignoreSchedulingInFeed = false;
		}
	}
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
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $cuePointsProvider = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemsPerPage = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $ignoreSchedulingInFeed = null;


}

