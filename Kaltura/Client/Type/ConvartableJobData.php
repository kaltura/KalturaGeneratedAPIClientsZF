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
class Kaltura_Client_Type_ConvartableJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvartableJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->srcFileSyncLocalPath))
			$this->srcFileSyncLocalPath = (string)$xml->srcFileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->srcFileSyncLocalPath))
			$this->srcFileSyncLocalPath = (string)$jsonObject->srcFileSyncLocalPath;
		if(!is_null($xml) && count($xml->actualSrcFileSyncLocalPath))
			$this->actualSrcFileSyncLocalPath = (string)$xml->actualSrcFileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->actualSrcFileSyncLocalPath))
			$this->actualSrcFileSyncLocalPath = (string)$jsonObject->actualSrcFileSyncLocalPath;
		if(!is_null($xml) && count($xml->srcFileSyncRemoteUrl))
			$this->srcFileSyncRemoteUrl = (string)$xml->srcFileSyncRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->srcFileSyncRemoteUrl))
			$this->srcFileSyncRemoteUrl = (string)$jsonObject->srcFileSyncRemoteUrl;
		if(!is_null($xml) && count($xml->srcFileSyncs))
		{
			if(empty($xml->srcFileSyncs))
				$this->srcFileSyncs = array();
			else
				$this->srcFileSyncs = Kaltura_Client_ParseUtils::unmarshalArray($xml->srcFileSyncs, "KalturaSourceFileSyncDescriptor");
		}
		if(!is_null($jsonObject) && isset($jsonObject->srcFileSyncs))
		{
			if(empty($jsonObject->srcFileSyncs))
				$this->srcFileSyncs = array();
			else
				$this->srcFileSyncs = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->srcFileSyncs, "KalturaSourceFileSyncDescriptor");
		}
		if(!is_null($xml) && count($xml->engineVersion))
			$this->engineVersion = (int)$xml->engineVersion;
		if(!is_null($jsonObject) && isset($jsonObject->engineVersion))
			$this->engineVersion = (int)$jsonObject->engineVersion;
		if(!is_null($xml) && count($xml->flavorParamsOutputId))
			$this->flavorParamsOutputId = (int)$xml->flavorParamsOutputId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsOutputId))
			$this->flavorParamsOutputId = (int)$jsonObject->flavorParamsOutputId;
		if(!is_null($xml) && count($xml->flavorParamsOutput) && !empty($xml->flavorParamsOutput))
			$this->flavorParamsOutput = Kaltura_Client_ParseUtils::unmarshalObject($xml->flavorParamsOutput, "KalturaFlavorParamsOutput");
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsOutput) && !empty($jsonObject->flavorParamsOutput))
			$this->flavorParamsOutput = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->flavorParamsOutput, "KalturaFlavorParamsOutput");
		if(!is_null($xml) && count($xml->mediaInfoId))
			$this->mediaInfoId = (int)$xml->mediaInfoId;
		if(!is_null($jsonObject) && isset($jsonObject->mediaInfoId))
			$this->mediaInfoId = (int)$jsonObject->mediaInfoId;
		if(!is_null($xml) && count($xml->currentOperationSet))
			$this->currentOperationSet = (int)$xml->currentOperationSet;
		if(!is_null($jsonObject) && isset($jsonObject->currentOperationSet))
			$this->currentOperationSet = (int)$jsonObject->currentOperationSet;
		if(!is_null($xml) && count($xml->currentOperationIndex))
			$this->currentOperationIndex = (int)$xml->currentOperationIndex;
		if(!is_null($jsonObject) && isset($jsonObject->currentOperationIndex))
			$this->currentOperationIndex = (int)$jsonObject->currentOperationIndex;
		if(!is_null($xml) && count($xml->pluginData))
		{
			if(empty($xml->pluginData))
				$this->pluginData = array();
			else
				$this->pluginData = Kaltura_Client_ParseUtils::unmarshalArray($xml->pluginData, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->pluginData))
		{
			if(empty($jsonObject->pluginData))
				$this->pluginData = array();
			else
				$this->pluginData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->pluginData, "KalturaKeyValue");
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * The translated path as used by the scheduler
	 *
	 * @var string
	 */
	public $actualSrcFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncRemoteUrl = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_SourceFileSyncDescriptor[]
	 */
	public $srcFileSyncs;

	/**
	 * 
	 *
	 * @var int
	 */
	public $engineVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsOutputId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_FlavorParamsOutput
	 */
	public $flavorParamsOutput;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaInfoId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $currentOperationSet = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $currentOperationIndex = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $pluginData;


}

