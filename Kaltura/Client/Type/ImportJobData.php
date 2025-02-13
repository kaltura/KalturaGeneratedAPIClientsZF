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
class Kaltura_Client_Type_ImportJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaImportJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->srcFileUrl))
			$this->srcFileUrl = (string)$xml->srcFileUrl;
		if(!is_null($jsonObject) && isset($jsonObject->srcFileUrl))
			$this->srcFileUrl = (string)$jsonObject->srcFileUrl;
		if(!is_null($xml) && count($xml->destFileLocalPath))
			$this->destFileLocalPath = (string)$xml->destFileLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->destFileLocalPath))
			$this->destFileLocalPath = (string)$jsonObject->destFileLocalPath;
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->fileSize))
			$this->fileSize = (int)$xml->fileSize;
		if(!is_null($jsonObject) && isset($jsonObject->fileSize))
			$this->fileSize = (int)$jsonObject->fileSize;
		if(!is_null($xml) && count($xml->destFileSharedPath))
			$this->destFileSharedPath = (string)$xml->destFileSharedPath;
		if(!is_null($jsonObject) && isset($jsonObject->destFileSharedPath))
			$this->destFileSharedPath = (string)$jsonObject->destFileSharedPath;
		if(!is_null($xml) && count($xml->urlHeaders))
		{
			if(empty($xml->urlHeaders))
				$this->urlHeaders = array();
			else
				$this->urlHeaders = Kaltura_Client_ParseUtils::unmarshalArray($xml->urlHeaders, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->urlHeaders))
		{
			if(empty($jsonObject->urlHeaders))
				$this->urlHeaders = array();
			else
				$this->urlHeaders = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->urlHeaders, "KalturaString");
		}
		if(!is_null($xml) && count($xml->shouldRedirect))
		{
			if(!empty($xml->shouldRedirect) && ((int) $xml->shouldRedirect === 1 || strtolower((string)$xml->shouldRedirect) === 'true'))
				$this->shouldRedirect = true;
			else
				$this->shouldRedirect = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldRedirect))
		{
			if(!empty($jsonObject->shouldRedirect) && ((int) $jsonObject->shouldRedirect === 1 || strtolower((string)$jsonObject->shouldRedirect) === 'true'))
				$this->shouldRedirect = true;
			else
				$this->shouldRedirect = false;
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSharedPath = null;

	/**
	 * 
	 *
	 * @var array of KalturaString
	 */
	public $urlHeaders;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $shouldRedirect = null;


}

