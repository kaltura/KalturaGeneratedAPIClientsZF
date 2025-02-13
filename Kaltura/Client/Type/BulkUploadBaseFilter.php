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
abstract class Kaltura_Client_Type_BulkUploadBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->uploadedOnGreaterThanOrEqual))
			$this->uploadedOnGreaterThanOrEqual = (int)$xml->uploadedOnGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedOnGreaterThanOrEqual))
			$this->uploadedOnGreaterThanOrEqual = (int)$jsonObject->uploadedOnGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->uploadedOnLessThanOrEqual))
			$this->uploadedOnLessThanOrEqual = (int)$xml->uploadedOnLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedOnLessThanOrEqual))
			$this->uploadedOnLessThanOrEqual = (int)$jsonObject->uploadedOnLessThanOrEqual;
		if(!is_null($xml) && count($xml->uploadedOnEqual))
			$this->uploadedOnEqual = (int)$xml->uploadedOnEqual;
		if(!is_null($jsonObject) && isset($jsonObject->uploadedOnEqual))
			$this->uploadedOnEqual = (int)$jsonObject->uploadedOnEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->bulkUploadObjectTypeEqual))
			$this->bulkUploadObjectTypeEqual = (string)$xml->bulkUploadObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadObjectTypeEqual))
			$this->bulkUploadObjectTypeEqual = (string)$jsonObject->bulkUploadObjectTypeEqual;
		if(!is_null($xml) && count($xml->bulkUploadObjectTypeIn))
			$this->bulkUploadObjectTypeIn = (string)$xml->bulkUploadObjectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->bulkUploadObjectTypeIn))
			$this->bulkUploadObjectTypeIn = (string)$jsonObject->bulkUploadObjectTypeIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadedOnGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadedOnLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uploadedOnEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BatchJobStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BulkUploadObjectType
	 */
	public $bulkUploadObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bulkUploadObjectTypeIn = null;


}

