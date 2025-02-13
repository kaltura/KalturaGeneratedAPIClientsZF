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
class Kaltura_Client_TvinciDistribution_Type_TvinciDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaTvinciDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->ingestUrl))
			$this->ingestUrl = (string)$xml->ingestUrl;
		if(!is_null($jsonObject) && isset($jsonObject->ingestUrl))
			$this->ingestUrl = (string)$jsonObject->ingestUrl;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->tags))
		{
			if(empty($xml->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::unmarshalArray($xml->tags, "KalturaTvinciDistributionTag");
		}
		if(!is_null($jsonObject) && isset($jsonObject->tags))
		{
			if(empty($jsonObject->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->tags, "KalturaTvinciDistributionTag");
		}
		if(!is_null($xml) && count($xml->xsltFile))
			$this->xsltFile = (string)$xml->xsltFile;
		if(!is_null($jsonObject) && isset($jsonObject->xsltFile))
			$this->xsltFile = (string)$jsonObject->xsltFile;
		if(!is_null($xml) && count($xml->innerType))
			$this->innerType = (string)$xml->innerType;
		if(!is_null($jsonObject) && isset($jsonObject->innerType))
			$this->innerType = (string)$jsonObject->innerType;
		if(!is_null($xml) && count($xml->assetsType))
			$this->assetsType = (int)$xml->assetsType;
		if(!is_null($jsonObject) && isset($jsonObject->assetsType))
			$this->assetsType = (int)$jsonObject->assetsType;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $ingestUrl = null;

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
	 * Tags array for Tvinci distribution
	 *
	 * @var array of KalturaTvinciDistributionTag
	 */
	public $tags;

	/**
	 * 
	 *
	 * @var string
	 */
	public $xsltFile = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $innerType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_TvinciDistribution_Enum_TvinciAssetsType
	 */
	public $assetsType = null;


}

