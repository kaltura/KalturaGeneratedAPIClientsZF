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
class Kaltura_Client_VerizonVcastDistribution_Type_VerizonVcastDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaVerizonVcastDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ftpHost))
			$this->ftpHost = (string)$xml->ftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->ftpHost))
			$this->ftpHost = (string)$jsonObject->ftpHost;
		if(!is_null($xml) && count($xml->ftpLogin))
			$this->ftpLogin = (string)$xml->ftpLogin;
		if(!is_null($jsonObject) && isset($jsonObject->ftpLogin))
			$this->ftpLogin = (string)$jsonObject->ftpLogin;
		if(!is_null($xml) && count($xml->ftpPass))
			$this->ftpPass = (string)$xml->ftpPass;
		if(!is_null($jsonObject) && isset($jsonObject->ftpPass))
			$this->ftpPass = (string)$jsonObject->ftpPass;
		if(!is_null($xml) && count($xml->providerName))
			$this->providerName = (string)$xml->providerName;
		if(!is_null($jsonObject) && isset($jsonObject->providerName))
			$this->providerName = (string)$jsonObject->providerName;
		if(!is_null($xml) && count($xml->providerId))
			$this->providerId = (string)$xml->providerId;
		if(!is_null($jsonObject) && isset($jsonObject->providerId))
			$this->providerId = (string)$jsonObject->providerId;
		if(!is_null($xml) && count($xml->entitlement))
			$this->entitlement = (string)$xml->entitlement;
		if(!is_null($jsonObject) && isset($jsonObject->entitlement))
			$this->entitlement = (string)$jsonObject->entitlement;
		if(!is_null($xml) && count($xml->priority))
			$this->priority = (string)$xml->priority;
		if(!is_null($jsonObject) && isset($jsonObject->priority))
			$this->priority = (string)$jsonObject->priority;
		if(!is_null($xml) && count($xml->allowStreaming))
			$this->allowStreaming = (string)$xml->allowStreaming;
		if(!is_null($jsonObject) && isset($jsonObject->allowStreaming))
			$this->allowStreaming = (string)$jsonObject->allowStreaming;
		if(!is_null($xml) && count($xml->streamingPriceCode))
			$this->streamingPriceCode = (string)$xml->streamingPriceCode;
		if(!is_null($jsonObject) && isset($jsonObject->streamingPriceCode))
			$this->streamingPriceCode = (string)$jsonObject->streamingPriceCode;
		if(!is_null($xml) && count($xml->allowDownload))
			$this->allowDownload = (string)$xml->allowDownload;
		if(!is_null($jsonObject) && isset($jsonObject->allowDownload))
			$this->allowDownload = (string)$jsonObject->allowDownload;
		if(!is_null($xml) && count($xml->downloadPriceCode))
			$this->downloadPriceCode = (string)$xml->downloadPriceCode;
		if(!is_null($jsonObject) && isset($jsonObject->downloadPriceCode))
			$this->downloadPriceCode = (string)$jsonObject->downloadPriceCode;
	}
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
	public $ftpPass = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $providerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entitlement = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $priority = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowStreaming = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $streamingPriceCode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowDownload = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $downloadPriceCode = null;


}

