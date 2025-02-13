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
class Kaltura_Client_ContentDistribution_Type_GenericDistributionProfileAction extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericDistributionProfileAction';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (int)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->serverUrl))
			$this->serverUrl = (string)$xml->serverUrl;
		if(!is_null($jsonObject) && isset($jsonObject->serverUrl))
			$this->serverUrl = (string)$jsonObject->serverUrl;
		if(!is_null($xml) && count($xml->serverPath))
			$this->serverPath = (string)$xml->serverPath;
		if(!is_null($jsonObject) && isset($jsonObject->serverPath))
			$this->serverPath = (string)$jsonObject->serverPath;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->ftpPassiveMode))
		{
			if(!empty($xml->ftpPassiveMode) && ((int) $xml->ftpPassiveMode === 1 || strtolower((string)$xml->ftpPassiveMode) === 'true'))
				$this->ftpPassiveMode = true;
			else
				$this->ftpPassiveMode = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ftpPassiveMode))
		{
			if(!empty($jsonObject->ftpPassiveMode) && ((int) $jsonObject->ftpPassiveMode === 1 || strtolower((string)$jsonObject->ftpPassiveMode) === 'true'))
				$this->ftpPassiveMode = true;
			else
				$this->ftpPassiveMode = false;
		}
		if(!is_null($xml) && count($xml->httpFieldName))
			$this->httpFieldName = (string)$xml->httpFieldName;
		if(!is_null($jsonObject) && isset($jsonObject->httpFieldName))
			$this->httpFieldName = (string)$jsonObject->httpFieldName;
		if(!is_null($xml) && count($xml->httpFileName))
			$this->httpFileName = (string)$xml->httpFileName;
		if(!is_null($jsonObject) && isset($jsonObject->httpFileName))
			$this->httpFileName = (string)$jsonObject->httpFileName;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $ftpPassiveMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $httpFieldName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $httpFileName = null;


}

