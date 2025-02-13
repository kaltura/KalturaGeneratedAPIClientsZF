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
class Kaltura_Client_Metadata_Type_TransformMetadataJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaTransformMetadataJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->srcXsl) && !empty($xml->srcXsl))
			$this->srcXsl = Kaltura_Client_ParseUtils::unmarshalObject($xml->srcXsl, "KalturaFileContainer");
		if(!is_null($jsonObject) && isset($jsonObject->srcXsl) && !empty($jsonObject->srcXsl))
			$this->srcXsl = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->srcXsl, "KalturaFileContainer");
		if(!is_null($xml) && count($xml->srcVersion))
			$this->srcVersion = (int)$xml->srcVersion;
		if(!is_null($jsonObject) && isset($jsonObject->srcVersion))
			$this->srcVersion = (int)$jsonObject->srcVersion;
		if(!is_null($xml) && count($xml->destVersion))
			$this->destVersion = (int)$xml->destVersion;
		if(!is_null($jsonObject) && isset($jsonObject->destVersion))
			$this->destVersion = (int)$jsonObject->destVersion;
		if(!is_null($xml) && count($xml->destXsd) && !empty($xml->destXsd))
			$this->destXsd = Kaltura_Client_ParseUtils::unmarshalObject($xml->destXsd, "KalturaFileContainer");
		if(!is_null($jsonObject) && isset($jsonObject->destXsd) && !empty($jsonObject->destXsd))
			$this->destXsd = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->destXsd, "KalturaFileContainer");
		if(!is_null($xml) && count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileId))
			$this->metadataProfileId = (int)$jsonObject->metadataProfileId;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_FileContainer
	 */
	public $srcXsl;

	/**
	 * 
	 *
	 * @var int
	 */
	public $srcVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $destVersion = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_FileContainer
	 */
	public $destXsd;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileId = null;


}

