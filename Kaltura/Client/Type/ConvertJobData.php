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
class Kaltura_Client_Type_ConvertJobData extends Kaltura_Client_Type_ConvartableJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->destFileSyncLocalPath))
			$this->destFileSyncLocalPath = (string)$xml->destFileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->destFileSyncLocalPath))
			$this->destFileSyncLocalPath = (string)$jsonObject->destFileSyncLocalPath;
		if(!is_null($xml) && count($xml->destFileSyncRemoteUrl))
			$this->destFileSyncRemoteUrl = (string)$xml->destFileSyncRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->destFileSyncRemoteUrl))
			$this->destFileSyncRemoteUrl = (string)$jsonObject->destFileSyncRemoteUrl;
		if(!is_null($xml) && count($xml->logFileSyncLocalPath))
			$this->logFileSyncLocalPath = (string)$xml->logFileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->logFileSyncLocalPath))
			$this->logFileSyncLocalPath = (string)$jsonObject->logFileSyncLocalPath;
		if(!is_null($xml) && count($xml->logFileSyncRemoteUrl))
			$this->logFileSyncRemoteUrl = (string)$xml->logFileSyncRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->logFileSyncRemoteUrl))
			$this->logFileSyncRemoteUrl = (string)$jsonObject->logFileSyncRemoteUrl;
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->remoteMediaId))
			$this->remoteMediaId = (string)$xml->remoteMediaId;
		if(!is_null($jsonObject) && isset($jsonObject->remoteMediaId))
			$this->remoteMediaId = (string)$jsonObject->remoteMediaId;
		if(!is_null($xml) && count($xml->customData))
			$this->customData = (string)$xml->customData;
		if(!is_null($jsonObject) && isset($jsonObject->customData))
			$this->customData = (string)$jsonObject->customData;
		if(!is_null($xml) && count($xml->extraDestFileSyncs))
		{
			if(empty($xml->extraDestFileSyncs))
				$this->extraDestFileSyncs = array();
			else
				$this->extraDestFileSyncs = Kaltura_Client_ParseUtils::unmarshalArray($xml->extraDestFileSyncs, "KalturaDestFileSyncDescriptor");
		}
		if(!is_null($jsonObject) && isset($jsonObject->extraDestFileSyncs))
		{
			if(empty($jsonObject->extraDestFileSyncs))
				$this->extraDestFileSyncs = array();
			else
				$this->extraDestFileSyncs = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->extraDestFileSyncs, "KalturaDestFileSyncDescriptor");
		}
		if(!is_null($xml) && count($xml->engineMessage))
			$this->engineMessage = (string)$xml->engineMessage;
		if(!is_null($jsonObject) && isset($jsonObject->engineMessage))
			$this->engineMessage = (string)$jsonObject->engineMessage;
		if(!is_null($xml) && count($xml->destFileSyncSharedPath))
			$this->destFileSyncSharedPath = (string)$xml->destFileSyncSharedPath;
		if(!is_null($jsonObject) && isset($jsonObject->destFileSyncSharedPath))
			$this->destFileSyncSharedPath = (string)$jsonObject->destFileSyncSharedPath;
		if(!is_null($xml) && count($xml->userCpu))
			$this->userCpu = (int)$xml->userCpu;
		if(!is_null($jsonObject) && isset($jsonObject->userCpu))
			$this->userCpu = (int)$jsonObject->userCpu;
		if(!is_null($xml) && count($xml->estimatedEffort))
			$this->estimatedEffort = (int)$xml->estimatedEffort;
		if(!is_null($jsonObject) && isset($jsonObject->estimatedEffort))
			$this->estimatedEffort = (int)$jsonObject->estimatedEffort;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncRemoteUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $logFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $logFileSyncRemoteUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteMediaId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $customData = null;

	/**
	 * 
	 *
	 * @var array of KalturaDestFileSyncDescriptor
	 */
	public $extraDestFileSyncs;

	/**
	 * 
	 *
	 * @var string
	 */
	public $engineMessage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncSharedPath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $userCpu = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $estimatedEffort = null;


}

