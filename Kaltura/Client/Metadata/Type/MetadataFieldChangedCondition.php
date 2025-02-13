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
class Kaltura_Client_Metadata_Type_MetadataFieldChangedCondition extends Kaltura_Client_Type_MatchCondition
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetadataFieldChangedCondition';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->xPath))
			$this->xPath = (string)$xml->xPath;
		if(!is_null($jsonObject) && isset($jsonObject->xPath))
			$this->xPath = (string)$jsonObject->xPath;
		if(!is_null($xml) && count($xml->profileId))
			$this->profileId = (int)$xml->profileId;
		if(!is_null($jsonObject) && isset($jsonObject->profileId))
			$this->profileId = (int)$jsonObject->profileId;
		if(!is_null($xml) && count($xml->profileSystemName))
			$this->profileSystemName = (string)$xml->profileSystemName;
		if(!is_null($jsonObject) && isset($jsonObject->profileSystemName))
			$this->profileSystemName = (string)$jsonObject->profileSystemName;
		if(!is_null($xml) && count($xml->versionA))
			$this->versionA = (string)$xml->versionA;
		if(!is_null($jsonObject) && isset($jsonObject->versionA))
			$this->versionA = (string)$jsonObject->versionA;
		if(!is_null($xml) && count($xml->versionB))
			$this->versionB = (string)$xml->versionB;
		if(!is_null($jsonObject) && isset($jsonObject->versionB))
			$this->versionB = (string)$jsonObject->versionB;
	}
	/**
	 * May contain the full xpath to the field in three formats
	 * 	 1. Slashed xPath, e.g. /metadata/myElementName
	 * 	 2. Using local-name function, e.g. /[local-name()='metadata']/[local-name()='myElementName']
	 * 	 3. Using only the field name, e.g. myElementName, it will be searched as //myElementName
	 *
	 * @var string
	 */
	public $xPath = null;

	/**
	 * Metadata profile id
	 *
	 * @var int
	 */
	public $profileId = null;

	/**
	 * Metadata profile system name
	 *
	 * @var string
	 */
	public $profileSystemName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionA = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionB = null;


}

