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
class Kaltura_Client_WebexDropFolder_Type_WebexDropFolder extends Kaltura_Client_DropFolder_Type_DropFolder
{
	public function getKalturaObjectType()
	{
		return 'KalturaWebexDropFolder';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->webexUserId))
			$this->webexUserId = (string)$xml->webexUserId;
		if(!is_null($jsonObject) && isset($jsonObject->webexUserId))
			$this->webexUserId = (string)$jsonObject->webexUserId;
		if(!is_null($xml) && count($xml->webexPassword))
			$this->webexPassword = (string)$xml->webexPassword;
		if(!is_null($jsonObject) && isset($jsonObject->webexPassword))
			$this->webexPassword = (string)$jsonObject->webexPassword;
		if(!is_null($xml) && count($xml->webexSiteId))
			$this->webexSiteId = (int)$xml->webexSiteId;
		if(!is_null($jsonObject) && isset($jsonObject->webexSiteId))
			$this->webexSiteId = (int)$jsonObject->webexSiteId;
		if(!is_null($xml) && count($xml->webexPartnerId))
			$this->webexPartnerId = (string)$xml->webexPartnerId;
		if(!is_null($jsonObject) && isset($jsonObject->webexPartnerId))
			$this->webexPartnerId = (string)$jsonObject->webexPartnerId;
		if(!is_null($xml) && count($xml->webexServiceUrl))
			$this->webexServiceUrl = (string)$xml->webexServiceUrl;
		if(!is_null($jsonObject) && isset($jsonObject->webexServiceUrl))
			$this->webexServiceUrl = (string)$jsonObject->webexServiceUrl;
		if(!is_null($xml) && count($xml->webexHostIdMetadataFieldName))
			$this->webexHostIdMetadataFieldName = (string)$xml->webexHostIdMetadataFieldName;
		if(!is_null($jsonObject) && isset($jsonObject->webexHostIdMetadataFieldName))
			$this->webexHostIdMetadataFieldName = (string)$jsonObject->webexHostIdMetadataFieldName;
		if(!is_null($xml) && count($xml->deleteFromRecycleBin))
		{
			if(!empty($xml->deleteFromRecycleBin) && ((int) $xml->deleteFromRecycleBin === 1 || strtolower((string)$xml->deleteFromRecycleBin) === 'true'))
				$this->deleteFromRecycleBin = true;
			else
				$this->deleteFromRecycleBin = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->deleteFromRecycleBin))
		{
			if(!empty($jsonObject->deleteFromRecycleBin) && ((int) $jsonObject->deleteFromRecycleBin === 1 || strtolower((string)$jsonObject->deleteFromRecycleBin) === 'true'))
				$this->deleteFromRecycleBin = true;
			else
				$this->deleteFromRecycleBin = false;
		}
		if(!is_null($xml) && count($xml->webexServiceType))
			$this->webexServiceType = (string)$xml->webexServiceType;
		if(!is_null($jsonObject) && isset($jsonObject->webexServiceType))
			$this->webexServiceType = (string)$jsonObject->webexServiceType;
		if(!is_null($xml) && count($xml->webexSiteName))
			$this->webexSiteName = (string)$xml->webexSiteName;
		if(!is_null($jsonObject) && isset($jsonObject->webexSiteName))
			$this->webexSiteName = (string)$jsonObject->webexSiteName;
		if(!is_null($xml) && count($xml->deleteFromTimestamp))
			$this->deleteFromTimestamp = (int)$xml->deleteFromTimestamp;
		if(!is_null($jsonObject) && isset($jsonObject->deleteFromTimestamp))
			$this->deleteFromTimestamp = (int)$jsonObject->deleteFromTimestamp;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $webexUserId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexPassword = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $webexSiteId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexPartnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexServiceUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexHostIdMetadataFieldName = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $deleteFromRecycleBin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexServiceType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $webexSiteName = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deleteFromTimestamp = null;


}

