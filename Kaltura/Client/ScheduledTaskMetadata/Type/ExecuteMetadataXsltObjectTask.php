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
class Kaltura_Client_ScheduledTaskMetadata_Type_ExecuteMetadataXsltObjectTask extends Kaltura_Client_ScheduledTask_Type_ObjectTask
{
	public function getKalturaObjectType()
	{
		return 'KalturaExecuteMetadataXsltObjectTask';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileId))
			$this->metadataProfileId = (int)$jsonObject->metadataProfileId;
		if(!is_null($xml) && count($xml->metadataObjectType))
			$this->metadataObjectType = (string)$xml->metadataObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->metadataObjectType))
			$this->metadataObjectType = (string)$jsonObject->metadataObjectType;
		if(!is_null($xml) && count($xml->xslt))
			$this->xslt = (string)$xml->xslt;
		if(!is_null($jsonObject) && isset($jsonObject->xslt))
			$this->xslt = (string)$jsonObject->xslt;
	}
	/**
	 * Metadata profile id to lookup the metadata object
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * Metadata object type to lookup the metadata object
	 *
	 * @var Kaltura_Client_Metadata_Enum_MetadataObjectType
	 */
	public $metadataObjectType = null;

	/**
	 * The XSLT to execute
	 *
	 * @var string
	 */
	public $xslt = null;


}

