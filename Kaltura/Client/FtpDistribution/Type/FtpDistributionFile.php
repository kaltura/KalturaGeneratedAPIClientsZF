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
class Kaltura_Client_FtpDistribution_Type_FtpDistributionFile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFtpDistributionFile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (string)$jsonObject->assetId;
		if(!is_null($xml) && count($xml->filename))
			$this->filename = (string)$xml->filename;
		if(!is_null($jsonObject) && isset($jsonObject->filename))
			$this->filename = (string)$jsonObject->filename;
		if(!is_null($xml) && count($xml->contents))
			$this->contents = (string)$xml->contents;
		if(!is_null($jsonObject) && isset($jsonObject->contents))
			$this->contents = (string)$jsonObject->contents;
		if(!is_null($xml) && count($xml->localFilePath))
			$this->localFilePath = (string)$xml->localFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->localFilePath))
			$this->localFilePath = (string)$jsonObject->localFilePath;
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->hash))
			$this->hash = (string)$xml->hash;
		if(!is_null($jsonObject) && isset($jsonObject->hash))
			$this->hash = (string)$jsonObject->hash;
	}
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
	public $filename = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contents = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $localFilePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hash = null;


}

