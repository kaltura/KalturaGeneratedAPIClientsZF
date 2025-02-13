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
class Kaltura_Client_ConfMaps_Type_ConfMaps extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConfMaps';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->content))
			$this->content = (string)$xml->content;
		if(!is_null($jsonObject) && isset($jsonObject->content))
			$this->content = (string)$jsonObject->content;
		if(!is_null($xml) && count($xml->rawData))
			$this->rawData = (string)$xml->rawData;
		if(!is_null($jsonObject) && isset($jsonObject->rawData))
			$this->rawData = (string)$jsonObject->rawData;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->isEditable))
		{
			if(!empty($xml->isEditable) && ((int) $xml->isEditable === 1 || strtolower((string)$xml->isEditable) === 'true'))
				$this->isEditable = true;
			else
				$this->isEditable = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isEditable))
		{
			if(!empty($jsonObject->isEditable) && ((int) $jsonObject->isEditable === 1 || strtolower((string)$jsonObject->isEditable) === 'true'))
				$this->isEditable = true;
			else
				$this->isEditable = false;
		}
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->relatedHost))
			$this->relatedHost = (string)$xml->relatedHost;
		if(!is_null($jsonObject) && isset($jsonObject->relatedHost))
			$this->relatedHost = (string)$jsonObject->relatedHost;
		if(!is_null($xml) && count($xml->version))
			$this->version = (int)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (int)$jsonObject->version;
		if(!is_null($xml) && count($xml->sourceLocation))
			$this->sourceLocation = (string)$xml->sourceLocation;
		if(!is_null($jsonObject) && isset($jsonObject->sourceLocation))
			$this->sourceLocation = (string)$jsonObject->sourceLocation;
		if(!is_null($xml) && count($xml->remarks))
			$this->remarks = (string)$xml->remarks;
		if(!is_null($jsonObject) && isset($jsonObject->remarks))
			$this->remarks = (string)$jsonObject->remarks;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->changeDescription))
			$this->changeDescription = (string)$xml->changeDescription;
		if(!is_null($jsonObject) && isset($jsonObject->changeDescription))
			$this->changeDescription = (string)$jsonObject->changeDescription;
	}
	/**
	 * Name of the map
	 *
	 * @var string
	 * @insertonly
	 */
	public $name = null;

	/**
	 * Ini file content
	 *
	 * @var string
	 */
	public $content = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rawData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * IsEditable - true / false
	 *
	 * @var bool
	 * @readonly
	 */
	public $isEditable = null;

	/**
	 * Time of the last update
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Regex that represent the host/s that this map affect
	 *
	 * @var string
	 */
	public $relatedHost = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ConfMapsSourceLocation
	 * @insertonly
	 */
	public $sourceLocation = null;

	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $remarks = null;

	/**
	 * map status
	 *
	 * @var Kaltura_Client_ConfMaps_Enum_ConfMapsStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $changeDescription = null;


}

