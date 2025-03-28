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
class Kaltura_Client_Type_StorageExportJobData extends Kaltura_Client_Type_StorageJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaStorageExportJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->force))
		{
			if(!empty($xml->force) && ((int) $xml->force === 1 || strtolower((string)$xml->force) === 'true'))
				$this->force = true;
			else
				$this->force = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->force))
		{
			if(!empty($jsonObject->force) && ((int) $jsonObject->force === 1 || strtolower((string)$jsonObject->force) === 'true'))
				$this->force = true;
			else
				$this->force = false;
		}
		if(!is_null($xml) && count($xml->createLink))
		{
			if(!empty($xml->createLink) && ((int) $xml->createLink === 1 || strtolower((string)$xml->createLink) === 'true'))
				$this->createLink = true;
			else
				$this->createLink = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->createLink))
		{
			if(!empty($jsonObject->createLink) && ((int) $jsonObject->createLink === 1 || strtolower((string)$jsonObject->createLink) === 'true'))
				$this->createLink = true;
			else
				$this->createLink = false;
		}
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (string)$jsonObject->assetId;
		if(!is_null($xml) && count($xml->externalUrl))
			$this->externalUrl = (string)$xml->externalUrl;
		if(!is_null($jsonObject) && isset($jsonObject->externalUrl))
			$this->externalUrl = (string)$jsonObject->externalUrl;
		if(!is_null($xml) && count($xml->port))
			$this->port = (int)$xml->port;
		if(!is_null($jsonObject) && isset($jsonObject->port))
			$this->port = (int)$jsonObject->port;
	}
	/**
	 * 
	 *
	 * @var bool
	 */
	public $force = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $createLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $externalUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $port = null;


}

