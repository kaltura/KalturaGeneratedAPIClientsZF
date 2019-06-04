<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_BulkUploadCsv_Type_BulkUploadCsvJobData extends Kaltura_Client_Type_BulkUploadJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadCsvJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->csvVersion))
			$this->csvVersion = (int)$xml->csvVersion;
		if(count($xml->columns))
		{
			if(empty($xml->columns))
				$this->columns = array();
			else
				$this->columns = Kaltura_Client_ParseUtils::unmarshalArray($xml->columns, "KalturaString");
		}
		if(count($xml->processObjectId))
			$this->processObjectId = (string)$xml->processObjectId;
		if(count($xml->processObjectType))
			$this->processObjectType = (string)$xml->processObjectType;
	}
	/**
	 * The version of the csv file
	 *
	 * @var Kaltura_Client_BulkUploadCsv_Enum_BulkUploadCsvVersion
	 * @readonly
	 */
	public $csvVersion = null;

	/**
	 * Array containing CSV headers
	 *
	 * @var array of KalturaString
	 */
	public $columns;

	/**
	 * The object in process
	 *
	 * @var string
	 */
	public $processObjectId = null;

	/**
	 * The type of the object in process
	 *
	 * @var string
	 */
	public $processObjectType = null;


}

