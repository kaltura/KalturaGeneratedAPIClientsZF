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
abstract class Kaltura_Client_Metadata_Type_MetadataProfileBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetadataProfileBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idEqual))
			$this->idEqual = (int)$jsonObject->idEqual;
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->metadataObjectTypeEqual))
			$this->metadataObjectTypeEqual = (string)$xml->metadataObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->metadataObjectTypeEqual))
			$this->metadataObjectTypeEqual = (string)$jsonObject->metadataObjectTypeEqual;
		if(!is_null($xml) && count($xml->metadataObjectTypeIn))
			$this->metadataObjectTypeIn = (string)$xml->metadataObjectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->metadataObjectTypeIn))
			$this->metadataObjectTypeIn = (string)$jsonObject->metadataObjectTypeIn;
		if(!is_null($xml) && count($xml->versionEqual))
			$this->versionEqual = (int)$xml->versionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->versionEqual))
			$this->versionEqual = (int)$jsonObject->versionEqual;
		if(!is_null($xml) && count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->nameEqual))
			$this->nameEqual = (string)$jsonObject->nameEqual;
		if(!is_null($xml) && count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameEqual))
			$this->systemNameEqual = (string)$jsonObject->systemNameEqual;
		if(!is_null($xml) && count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameIn))
			$this->systemNameIn = (string)$jsonObject->systemNameIn;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->createModeEqual))
			$this->createModeEqual = (int)$xml->createModeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createModeEqual))
			$this->createModeEqual = (int)$jsonObject->createModeEqual;
		if(!is_null($xml) && count($xml->createModeNotEqual))
			$this->createModeNotEqual = (int)$xml->createModeNotEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createModeNotEqual))
			$this->createModeNotEqual = (int)$jsonObject->createModeNotEqual;
		if(!is_null($xml) && count($xml->createModeIn))
			$this->createModeIn = (string)$xml->createModeIn;
		if(!is_null($jsonObject) && isset($jsonObject->createModeIn))
			$this->createModeIn = (string)$jsonObject->createModeIn;
		if(!is_null($xml) && count($xml->createModeNotIn))
			$this->createModeNotIn = (string)$xml->createModeNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->createModeNotIn))
			$this->createModeNotIn = (string)$jsonObject->createModeNotIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Metadata_Enum_MetadataObjectType
	 */
	public $metadataObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Metadata_Enum_MetadataProfileStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Metadata_Enum_MetadataProfileCreateMode
	 */
	public $createModeEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Metadata_Enum_MetadataProfileCreateMode
	 */
	public $createModeNotEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $createModeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $createModeNotIn = null;


}

