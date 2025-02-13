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
class Kaltura_Client_Widevine_Type_WidevineRepositorySyncJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaWidevineRepositorySyncJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->syncMode))
			$this->syncMode = (int)$xml->syncMode;
		if(!is_null($jsonObject) && isset($jsonObject->syncMode))
			$this->syncMode = (int)$jsonObject->syncMode;
		if(!is_null($xml) && count($xml->wvAssetIds))
			$this->wvAssetIds = (string)$xml->wvAssetIds;
		if(!is_null($jsonObject) && isset($jsonObject->wvAssetIds))
			$this->wvAssetIds = (string)$jsonObject->wvAssetIds;
		if(!is_null($xml) && count($xml->modifiedAttributes))
			$this->modifiedAttributes = (string)$xml->modifiedAttributes;
		if(!is_null($jsonObject) && isset($jsonObject->modifiedAttributes))
			$this->modifiedAttributes = (string)$jsonObject->modifiedAttributes;
		if(!is_null($xml) && count($xml->monitorSyncCompletion))
			$this->monitorSyncCompletion = (int)$xml->monitorSyncCompletion;
		if(!is_null($jsonObject) && isset($jsonObject->monitorSyncCompletion))
			$this->monitorSyncCompletion = (int)$jsonObject->monitorSyncCompletion;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Widevine_Enum_WidevineRepositorySyncMode
	 */
	public $syncMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $wvAssetIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $modifiedAttributes = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $monitorSyncCompletion = null;


}

