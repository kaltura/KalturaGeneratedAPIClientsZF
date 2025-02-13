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
class Kaltura_Client_FreewheelGenericDistribution_Type_FreewheelGenericDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaFreewheelGenericDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->apikey))
			$this->apikey = (string)$xml->apikey;
		if(!is_null($jsonObject) && isset($jsonObject->apikey))
			$this->apikey = (string)$jsonObject->apikey;
		if(!is_null($xml) && count($xml->email))
			$this->email = (string)$xml->email;
		if(!is_null($jsonObject) && isset($jsonObject->email))
			$this->email = (string)$jsonObject->email;
		if(!is_null($xml) && count($xml->sftpPass))
			$this->sftpPass = (string)$xml->sftpPass;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPass))
			$this->sftpPass = (string)$jsonObject->sftpPass;
		if(!is_null($xml) && count($xml->sftpLogin))
			$this->sftpLogin = (string)$xml->sftpLogin;
		if(!is_null($jsonObject) && isset($jsonObject->sftpLogin))
			$this->sftpLogin = (string)$jsonObject->sftpLogin;
		if(!is_null($xml) && count($xml->contentOwner))
			$this->contentOwner = (string)$xml->contentOwner;
		if(!is_null($jsonObject) && isset($jsonObject->contentOwner))
			$this->contentOwner = (string)$jsonObject->contentOwner;
		if(!is_null($xml) && count($xml->upstreamVideoId))
			$this->upstreamVideoId = (string)$xml->upstreamVideoId;
		if(!is_null($jsonObject) && isset($jsonObject->upstreamVideoId))
			$this->upstreamVideoId = (string)$jsonObject->upstreamVideoId;
		if(!is_null($xml) && count($xml->upstreamNetworkName))
			$this->upstreamNetworkName = (string)$xml->upstreamNetworkName;
		if(!is_null($jsonObject) && isset($jsonObject->upstreamNetworkName))
			$this->upstreamNetworkName = (string)$jsonObject->upstreamNetworkName;
		if(!is_null($xml) && count($xml->upstreamNetworkId))
			$this->upstreamNetworkId = (string)$xml->upstreamNetworkId;
		if(!is_null($jsonObject) && isset($jsonObject->upstreamNetworkId))
			$this->upstreamNetworkId = (string)$jsonObject->upstreamNetworkId;
		if(!is_null($xml) && count($xml->categoryId))
			$this->categoryId = (string)$xml->categoryId;
		if(!is_null($jsonObject) && isset($jsonObject->categoryId))
			$this->categoryId = (string)$jsonObject->categoryId;
		if(!is_null($xml) && count($xml->replaceGroup))
		{
			if(!empty($xml->replaceGroup) && ((int) $xml->replaceGroup === 1 || strtolower((string)$xml->replaceGroup) === 'true'))
				$this->replaceGroup = true;
			else
				$this->replaceGroup = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->replaceGroup))
		{
			if(!empty($jsonObject->replaceGroup) && ((int) $jsonObject->replaceGroup === 1 || strtolower((string)$jsonObject->replaceGroup) === 'true'))
				$this->replaceGroup = true;
			else
				$this->replaceGroup = false;
		}
		if(!is_null($xml) && count($xml->replaceAirDates))
		{
			if(!empty($xml->replaceAirDates) && ((int) $xml->replaceAirDates === 1 || strtolower((string)$xml->replaceAirDates) === 'true'))
				$this->replaceAirDates = true;
			else
				$this->replaceAirDates = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->replaceAirDates))
		{
			if(!empty($jsonObject->replaceAirDates) && ((int) $jsonObject->replaceAirDates === 1 || strtolower((string)$jsonObject->replaceAirDates) === 'true'))
				$this->replaceAirDates = true;
			else
				$this->replaceAirDates = false;
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $apikey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $email = null;

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
	public $sftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentOwner = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $upstreamVideoId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $upstreamNetworkName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $upstreamNetworkId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $replaceGroup = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $replaceAirDates = null;


}

