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
class Kaltura_Client_Type_CaptureThumbJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptureThumbJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fileContainer) && !empty($xml->fileContainer))
			$this->fileContainer = Kaltura_Client_ParseUtils::unmarshalObject($xml->fileContainer, "KalturaFileContainer");
		if(!is_null($jsonObject) && isset($jsonObject->fileContainer) && !empty($jsonObject->fileContainer))
			$this->fileContainer = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->fileContainer, "KalturaFileContainer");
		if(!is_null($xml) && count($xml->actualSrcFileSyncLocalPath))
			$this->actualSrcFileSyncLocalPath = (string)$xml->actualSrcFileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->actualSrcFileSyncLocalPath))
			$this->actualSrcFileSyncLocalPath = (string)$jsonObject->actualSrcFileSyncLocalPath;
		if(!is_null($xml) && count($xml->srcFileSyncRemoteUrl))
			$this->srcFileSyncRemoteUrl = (string)$xml->srcFileSyncRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->srcFileSyncRemoteUrl))
			$this->srcFileSyncRemoteUrl = (string)$jsonObject->srcFileSyncRemoteUrl;
		if(!is_null($xml) && count($xml->thumbParamsOutputId))
			$this->thumbParamsOutputId = (int)$xml->thumbParamsOutputId;
		if(!is_null($jsonObject) && isset($jsonObject->thumbParamsOutputId))
			$this->thumbParamsOutputId = (int)$jsonObject->thumbParamsOutputId;
		if(!is_null($xml) && count($xml->thumbAssetId))
			$this->thumbAssetId = (string)$xml->thumbAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetId))
			$this->thumbAssetId = (string)$jsonObject->thumbAssetId;
		if(!is_null($xml) && count($xml->srcAssetId))
			$this->srcAssetId = (string)$xml->srcAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->srcAssetId))
			$this->srcAssetId = (string)$jsonObject->srcAssetId;
		if(!is_null($xml) && count($xml->srcAssetEncryptionKey))
			$this->srcAssetEncryptionKey = (string)$xml->srcAssetEncryptionKey;
		if(!is_null($jsonObject) && isset($jsonObject->srcAssetEncryptionKey))
			$this->srcAssetEncryptionKey = (string)$jsonObject->srcAssetEncryptionKey;
		if(!is_null($xml) && count($xml->srcAssetType))
			$this->srcAssetType = (string)$xml->srcAssetType;
		if(!is_null($jsonObject) && isset($jsonObject->srcAssetType))
			$this->srcAssetType = (string)$jsonObject->srcAssetType;
		if(!is_null($xml) && count($xml->thumbPath))
			$this->thumbPath = (string)$xml->thumbPath;
		if(!is_null($jsonObject) && isset($jsonObject->thumbPath))
			$this->thumbPath = (string)$jsonObject->thumbPath;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_FileContainer
	 */
	public $fileContainer;

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
	 * @var int
	 */
	public $thumbParamsOutputId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcAssetEncryptionKey = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_AssetType
	 */
	public $srcAssetType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbPath = null;


}

