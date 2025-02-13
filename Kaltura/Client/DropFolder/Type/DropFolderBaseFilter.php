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
abstract class Kaltura_Client_DropFolder_Type_DropFolderBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolderBaseFilter';
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
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdIn))
			$this->partnerIdIn = (string)$jsonObject->partnerIdIn;
		if(!is_null($xml) && count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(!is_null($jsonObject) && isset($jsonObject->nameLike))
			$this->nameLike = (string)$jsonObject->nameLike;
		if(!is_null($xml) && count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->typeEqual))
			$this->typeEqual = (string)$jsonObject->typeEqual;
		if(!is_null($xml) && count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(!is_null($jsonObject) && isset($jsonObject->typeIn))
			$this->typeIn = (string)$jsonObject->typeIn;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->conversionProfileIdEqual))
			$this->conversionProfileIdEqual = (int)$xml->conversionProfileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileIdEqual))
			$this->conversionProfileIdEqual = (int)$jsonObject->conversionProfileIdEqual;
		if(!is_null($xml) && count($xml->conversionProfileIdIn))
			$this->conversionProfileIdIn = (string)$xml->conversionProfileIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileIdIn))
			$this->conversionProfileIdIn = (string)$jsonObject->conversionProfileIdIn;
		if(!is_null($xml) && count($xml->dcEqual))
			$this->dcEqual = (int)$xml->dcEqual;
		if(!is_null($jsonObject) && isset($jsonObject->dcEqual))
			$this->dcEqual = (int)$jsonObject->dcEqual;
		if(!is_null($xml) && count($xml->dcIn))
			$this->dcIn = (string)$xml->dcIn;
		if(!is_null($jsonObject) && isset($jsonObject->dcIn))
			$this->dcIn = (string)$jsonObject->dcIn;
		if(!is_null($xml) && count($xml->pathEqual))
			$this->pathEqual = (string)$xml->pathEqual;
		if(!is_null($jsonObject) && isset($jsonObject->pathEqual))
			$this->pathEqual = (string)$jsonObject->pathEqual;
		if(!is_null($xml) && count($xml->pathLike))
			$this->pathLike = (string)$xml->pathLike;
		if(!is_null($jsonObject) && isset($jsonObject->pathLike))
			$this->pathLike = (string)$jsonObject->pathLike;
		if(!is_null($xml) && count($xml->fileHandlerTypeEqual))
			$this->fileHandlerTypeEqual = (string)$xml->fileHandlerTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->fileHandlerTypeEqual))
			$this->fileHandlerTypeEqual = (string)$jsonObject->fileHandlerTypeEqual;
		if(!is_null($xml) && count($xml->fileHandlerTypeIn))
			$this->fileHandlerTypeIn = (string)$xml->fileHandlerTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->fileHandlerTypeIn))
			$this->fileHandlerTypeIn = (string)$jsonObject->fileHandlerTypeIn;
		if(!is_null($xml) && count($xml->fileNamePatternsLike))
			$this->fileNamePatternsLike = (string)$xml->fileNamePatternsLike;
		if(!is_null($jsonObject) && isset($jsonObject->fileNamePatternsLike))
			$this->fileNamePatternsLike = (string)$jsonObject->fileNamePatternsLike;
		if(!is_null($xml) && count($xml->fileNamePatternsMultiLikeOr))
			$this->fileNamePatternsMultiLikeOr = (string)$xml->fileNamePatternsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->fileNamePatternsMultiLikeOr))
			$this->fileNamePatternsMultiLikeOr = (string)$jsonObject->fileNamePatternsMultiLikeOr;
		if(!is_null($xml) && count($xml->fileNamePatternsMultiLikeAnd))
			$this->fileNamePatternsMultiLikeAnd = (string)$xml->fileNamePatternsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->fileNamePatternsMultiLikeAnd))
			$this->fileNamePatternsMultiLikeAnd = (string)$jsonObject->fileNamePatternsMultiLikeAnd;
		if(!is_null($xml) && count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(!is_null($jsonObject) && isset($jsonObject->tagsLike))
			$this->tagsLike = (string)$jsonObject->tagsLike;
		if(!is_null($xml) && count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$jsonObject->tagsMultiLikeOr;
		if(!is_null($xml) && count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$jsonObject->tagsMultiLikeAnd;
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
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderType
	 */
	public $typeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderStatus
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
	 * @var int
	 */
	public $conversionProfileIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $conversionProfileIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pathLike = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderFileHandlerType
	 */
	public $fileHandlerTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileHandlerTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileNamePatternsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderErrorCode
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

