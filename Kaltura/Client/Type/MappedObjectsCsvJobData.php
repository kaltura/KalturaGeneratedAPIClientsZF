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
abstract class Kaltura_Client_Type_MappedObjectsCsvJobData extends Kaltura_Client_Type_ExportCsvJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaMappedObjectsCsvJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->metadataProfileId))
			$this->metadataProfileId = (int)$xml->metadataProfileId;
		if(count($xml->additionalFields))
		{
			if(empty($xml->additionalFields))
				$this->additionalFields = array();
			else
				$this->additionalFields = Kaltura_Client_ParseUtils::unmarshalArray($xml->additionalFields, "KalturaCsvAdditionalFieldInfo");
		}
		if(count($xml->mappedFields))
		{
			if(empty($xml->mappedFields))
				$this->mappedFields = array();
			else
				$this->mappedFields = Kaltura_Client_ParseUtils::unmarshalArray($xml->mappedFields, "KalturaKeyValue");
		}
		if(count($xml->options) && !empty($xml->options))
			$this->options = Kaltura_Client_ParseUtils::unmarshalObject($xml->options, "KalturaExportToCsvOptions");
	}
	/**
	 * The metadata profile we should look the xpath in
	 *
	 * @var int
	 */
	public $metadataProfileId = null;

	/**
	 * The xpath to look in the metadataProfileId  and the wanted csv field name
	 *
	 * @var array of KalturaCsvAdditionalFieldInfo
	 */
	public $additionalFields;

	/**
	 * Array of header names and their mapped user fields
	 *
	 * @var array of KalturaKeyValue
	 */
	public $mappedFields;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ExportToCsvOptions
	 */
	public $options;


}

