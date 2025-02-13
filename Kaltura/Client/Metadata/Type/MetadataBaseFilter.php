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
abstract class Kaltura_Client_Metadata_Type_MetadataBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetadataBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->metadataProfileIdEqual))
			$this->metadataProfileIdEqual = (int)$xml->metadataProfileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileIdEqual))
			$this->metadataProfileIdEqual = (int)$jsonObject->metadataProfileIdEqual;
		if(!is_null($xml) && count($xml->metadataProfileIdIn))
			$this->metadataProfileIdIn = (string)$xml->metadataProfileIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileIdIn))
			$this->metadataProfileIdIn = (string)$jsonObject->metadataProfileIdIn;
		if(!is_null($xml) && count($xml->metadataProfileVersionEqual))
			$this->metadataProfileVersionEqual = (int)$xml->metadataProfileVersionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileVersionEqual))
			$this->metadataProfileVersionEqual = (int)$jsonObject->metadataProfileVersionEqual;
		if(!is_null($xml) && count($xml->metadataProfileVersionGreaterThanOrEqual))
			$this->metadataProfileVersionGreaterThanOrEqual = (int)$xml->metadataProfileVersionGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileVersionGreaterThanOrEqual))
			$this->metadataProfileVersionGreaterThanOrEqual = (int)$jsonObject->metadataProfileVersionGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->metadataProfileVersionLessThanOrEqual))
			$this->metadataProfileVersionLessThanOrEqual = (int)$xml->metadataProfileVersionLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->metadataProfileVersionLessThanOrEqual))
			$this->metadataProfileVersionLessThanOrEqual = (int)$jsonObject->metadataProfileVersionLessThanOrEqual;
		if(!is_null($xml) && count($xml->metadataObjectTypeEqual))
			$this->metadataObjectTypeEqual = (string)$xml->metadataObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->metadataObjectTypeEqual))
			$this->metadataObjectTypeEqual = (string)$jsonObject->metadataObjectTypeEqual;
		if(!is_null($xml) && count($xml->objectIdEqual))
			$this->objectIdEqual = (string)$xml->objectIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdEqual))
			$this->objectIdEqual = (string)$jsonObject->objectIdEqual;
		if(!is_null($xml) && count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdIn))
			$this->objectIdIn = (string)$jsonObject->objectIdIn;
		if(!is_null($xml) && count($xml->versionEqual))
			$this->versionEqual = (int)$xml->versionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->versionEqual))
			$this->versionEqual = (int)$jsonObject->versionEqual;
		if(!is_null($xml) && count($xml->versionGreaterThanOrEqual))
			$this->versionGreaterThanOrEqual = (int)$xml->versionGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->versionGreaterThanOrEqual))
			$this->versionGreaterThanOrEqual = (int)$jsonObject->versionGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->versionLessThanOrEqual))
			$this->versionLessThanOrEqual = (int)$xml->versionLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->versionLessThanOrEqual))
			$this->versionLessThanOrEqual = (int)$jsonObject->versionLessThanOrEqual;
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
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $metadataProfileVersionLessThanOrEqual = null;

	/**
	 * When null, default is KalturaMetadataObjectType::ENTRY
	 *
	 * @var Kaltura_Client_Metadata_Enum_MetadataObjectType
	 */
	public $metadataObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $versionLessThanOrEqual = null;

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
	 * @var Kaltura_Client_Metadata_Enum_MetadataStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;


}

