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
abstract class Kaltura_Client_Type_UiConfBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUiConfBaseFilter';
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
		if(!is_null($xml) && count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(!is_null($jsonObject) && isset($jsonObject->nameLike))
			$this->nameLike = (string)$jsonObject->nameLike;
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdIn))
			$this->partnerIdIn = (string)$jsonObject->partnerIdIn;
		if(!is_null($xml) && count($xml->objTypeEqual))
			$this->objTypeEqual = (int)$xml->objTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->objTypeEqual))
			$this->objTypeEqual = (int)$jsonObject->objTypeEqual;
		if(!is_null($xml) && count($xml->objTypeIn))
			$this->objTypeIn = (string)$xml->objTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->objTypeIn))
			$this->objTypeIn = (string)$jsonObject->objTypeIn;
		if(!is_null($xml) && count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$jsonObject->tagsMultiLikeOr;
		if(!is_null($xml) && count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$jsonObject->tagsMultiLikeAnd;
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
		if(!is_null($xml) && count($xml->creationModeEqual))
			$this->creationModeEqual = (int)$xml->creationModeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->creationModeEqual))
			$this->creationModeEqual = (int)$jsonObject->creationModeEqual;
		if(!is_null($xml) && count($xml->creationModeIn))
			$this->creationModeIn = (string)$xml->creationModeIn;
		if(!is_null($jsonObject) && isset($jsonObject->creationModeIn))
			$this->creationModeIn = (string)$jsonObject->creationModeIn;
		if(!is_null($xml) && count($xml->versionEqual))
			$this->versionEqual = (string)$xml->versionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->versionEqual))
			$this->versionEqual = (string)$jsonObject->versionEqual;
		if(!is_null($xml) && count($xml->versionMultiLikeOr))
			$this->versionMultiLikeOr = (string)$xml->versionMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->versionMultiLikeOr))
			$this->versionMultiLikeOr = (string)$jsonObject->versionMultiLikeOr;
		if(!is_null($xml) && count($xml->versionMultiLikeAnd))
			$this->versionMultiLikeAnd = (string)$xml->versionMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->versionMultiLikeAnd))
			$this->versionMultiLikeAnd = (string)$jsonObject->versionMultiLikeAnd;
		if(!is_null($xml) && count($xml->partnerTagsMultiLikeOr))
			$this->partnerTagsMultiLikeOr = (string)$xml->partnerTagsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->partnerTagsMultiLikeOr))
			$this->partnerTagsMultiLikeOr = (string)$jsonObject->partnerTagsMultiLikeOr;
		if(!is_null($xml) && count($xml->partnerTagsMultiLikeAnd))
			$this->partnerTagsMultiLikeAnd = (string)$xml->partnerTagsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->partnerTagsMultiLikeAnd))
			$this->partnerTagsMultiLikeAnd = (string)$jsonObject->partnerTagsMultiLikeAnd;
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
	 * @var string
	 */
	public $nameLike = null;

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
	 * @var Kaltura_Client_Enum_UiConfObjType
	 */
	public $objTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objTypeIn = null;

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
	 * @var Kaltura_Client_Enum_UiConfCreationMode
	 */
	public $creationModeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $creationModeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $versionMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerTagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerTagsMultiLikeAnd = null;


}

