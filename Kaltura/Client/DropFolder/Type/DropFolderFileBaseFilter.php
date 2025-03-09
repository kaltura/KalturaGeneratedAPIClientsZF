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
abstract class Kaltura_Client_DropFolder_Type_DropFolderFileBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolderFileBaseFilter';
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
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->idGreaterThanOrEqual))
			$this->idGreaterThanOrEqual = (int)$xml->idGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idGreaterThanOrEqual))
			$this->idGreaterThanOrEqual = (int)$jsonObject->idGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdIn))
			$this->partnerIdIn = (string)$jsonObject->partnerIdIn;
		if(!is_null($xml) && count($xml->dropFolderIdEqual))
			$this->dropFolderIdEqual = (int)$xml->dropFolderIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->dropFolderIdEqual))
			$this->dropFolderIdEqual = (int)$jsonObject->dropFolderIdEqual;
		if(!is_null($xml) && count($xml->dropFolderIdIn))
			$this->dropFolderIdIn = (string)$xml->dropFolderIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->dropFolderIdIn))
			$this->dropFolderIdIn = (string)$jsonObject->dropFolderIdIn;
		if(!is_null($xml) && count($xml->fileNameEqual))
			$this->fileNameEqual = (string)$xml->fileNameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fileNameEqual))
			$this->fileNameEqual = (string)$jsonObject->fileNameEqual;
		if(!is_null($xml) && count($xml->fileNameIn))
			$this->fileNameIn = (string)$xml->fileNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->fileNameIn))
			$this->fileNameIn = (string)$jsonObject->fileNameIn;
		if(!is_null($xml) && count($xml->fileNameLike))
			$this->fileNameLike = (string)$xml->fileNameLike;
		if(!is_null($jsonObject) && isset($jsonObject->fileNameLike))
			$this->fileNameLike = (string)$jsonObject->fileNameLike;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->statusNotIn))
			$this->statusNotIn = (string)$xml->statusNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusNotIn))
			$this->statusNotIn = (string)$jsonObject->statusNotIn;
		if(!is_null($xml) && count($xml->parsedSlugEqual))
			$this->parsedSlugEqual = (string)$xml->parsedSlugEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parsedSlugEqual))
			$this->parsedSlugEqual = (string)$jsonObject->parsedSlugEqual;
		if(!is_null($xml) && count($xml->parsedSlugIn))
			$this->parsedSlugIn = (string)$xml->parsedSlugIn;
		if(!is_null($jsonObject) && isset($jsonObject->parsedSlugIn))
			$this->parsedSlugIn = (string)$jsonObject->parsedSlugIn;
		if(!is_null($xml) && count($xml->parsedSlugLike))
			$this->parsedSlugLike = (string)$xml->parsedSlugLike;
		if(!is_null($jsonObject) && isset($jsonObject->parsedSlugLike))
			$this->parsedSlugLike = (string)$jsonObject->parsedSlugLike;
		if(!is_null($xml) && count($xml->parsedFlavorEqual))
			$this->parsedFlavorEqual = (string)$xml->parsedFlavorEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parsedFlavorEqual))
			$this->parsedFlavorEqual = (string)$jsonObject->parsedFlavorEqual;
		if(!is_null($xml) && count($xml->parsedFlavorIn))
			$this->parsedFlavorIn = (string)$xml->parsedFlavorIn;
		if(!is_null($jsonObject) && isset($jsonObject->parsedFlavorIn))
			$this->parsedFlavorIn = (string)$jsonObject->parsedFlavorIn;
		if(!is_null($xml) && count($xml->parsedFlavorLike))
			$this->parsedFlavorLike = (string)$xml->parsedFlavorLike;
		if(!is_null($jsonObject) && isset($jsonObject->parsedFlavorLike))
			$this->parsedFlavorLike = (string)$jsonObject->parsedFlavorLike;
		if(!is_null($xml) && count($xml->leadDropFolderFileIdEqual))
			$this->leadDropFolderFileIdEqual = (int)$xml->leadDropFolderFileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->leadDropFolderFileIdEqual))
			$this->leadDropFolderFileIdEqual = (int)$jsonObject->leadDropFolderFileIdEqual;
		if(!is_null($xml) && count($xml->deletedDropFolderFileIdEqual))
			$this->deletedDropFolderFileIdEqual = (int)$xml->deletedDropFolderFileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->deletedDropFolderFileIdEqual))
			$this->deletedDropFolderFileIdEqual = (int)$jsonObject->deletedDropFolderFileIdEqual;
		if(!is_null($xml) && count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdEqual))
			$this->entryIdEqual = (string)$jsonObject->entryIdEqual;
		if(!is_null($xml) && count($xml->errorCodeEqual))
			$this->errorCodeEqual = (string)$xml->errorCodeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->errorCodeEqual))
			$this->errorCodeEqual = (string)$jsonObject->errorCodeEqual;
		if(!is_null($xml) && count($xml->errorCodeIn))
			$this->errorCodeIn = (string)$xml->errorCodeIn;
		if(!is_null($jsonObject) && isset($jsonObject->errorCodeIn))
			$this->errorCodeIn = (string)$jsonObject->errorCodeIn;
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
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $idGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dropFolderIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dropFolderIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNameLike = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderFileStatus
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
	 * @var string
	 */
	public $statusNotIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlugLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedFlavorLike = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $leadDropFolderFileIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deletedDropFolderFileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderFileErrorCode
	 */
	public $errorCodeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $errorCodeIn = null;

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


}

