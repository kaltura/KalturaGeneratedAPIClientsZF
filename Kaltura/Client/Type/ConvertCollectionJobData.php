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
class Kaltura_Client_Type_ConvertCollectionJobData extends Kaltura_Client_Type_ConvartableJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertCollectionJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->destDirLocalPath))
			$this->destDirLocalPath = (string)$xml->destDirLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->destDirLocalPath))
			$this->destDirLocalPath = (string)$jsonObject->destDirLocalPath;
		if(!is_null($xml) && count($xml->destDirRemoteUrl))
			$this->destDirRemoteUrl = (string)$xml->destDirRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->destDirRemoteUrl))
			$this->destDirRemoteUrl = (string)$jsonObject->destDirRemoteUrl;
		if(!is_null($xml) && count($xml->destFileName))
			$this->destFileName = (string)$xml->destFileName;
		if(!is_null($jsonObject) && isset($jsonObject->destFileName))
			$this->destFileName = (string)$jsonObject->destFileName;
		if(!is_null($xml) && count($xml->inputXmlLocalPath))
			$this->inputXmlLocalPath = (string)$xml->inputXmlLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->inputXmlLocalPath))
			$this->inputXmlLocalPath = (string)$jsonObject->inputXmlLocalPath;
		if(!is_null($xml) && count($xml->inputXmlRemoteUrl))
			$this->inputXmlRemoteUrl = (string)$xml->inputXmlRemoteUrl;
		if(!is_null($jsonObject) && isset($jsonObject->inputXmlRemoteUrl))
			$this->inputXmlRemoteUrl = (string)$jsonObject->inputXmlRemoteUrl;
		if(!is_null($xml) && count($xml->commandLinesStr))
			$this->commandLinesStr = (string)$xml->commandLinesStr;
		if(!is_null($jsonObject) && isset($jsonObject->commandLinesStr))
			$this->commandLinesStr = (string)$jsonObject->commandLinesStr;
		if(!is_null($xml) && count($xml->flavors))
		{
			if(empty($xml->flavors))
				$this->flavors = array();
			else
				$this->flavors = Kaltura_Client_ParseUtils::unmarshalArray($xml->flavors, "KalturaConvertCollectionFlavorData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->flavors))
		{
			if(empty($jsonObject->flavors))
				$this->flavors = array();
			else
				$this->flavors = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->flavors, "KalturaConvertCollectionFlavorData");
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $destDirLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destDirRemoteUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $inputXmlLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $inputXmlRemoteUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $commandLinesStr = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ConvertCollectionFlavorData[]
	 */
	public $flavors;


}

