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
class Kaltura_Client_Type_BaseEntryFilter extends Kaltura_Client_Type_BaseEntryBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseEntryFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->freeText))
			$this->freeText = (string)$xml->freeText;
		if(!is_null($jsonObject) && isset($jsonObject->freeText))
			$this->freeText = (string)$jsonObject->freeText;
		if(!is_null($xml) && count($xml->excludedFreeTextGroups))
			$this->excludedFreeTextGroups = (string)$xml->excludedFreeTextGroups;
		if(!is_null($jsonObject) && isset($jsonObject->excludedFreeTextGroups))
			$this->excludedFreeTextGroups = (string)$jsonObject->excludedFreeTextGroups;
		if(!is_null($xml) && count($xml->descriptionLike))
			$this->descriptionLike = (string)$xml->descriptionLike;
		if(!is_null($jsonObject) && isset($jsonObject->descriptionLike))
			$this->descriptionLike = (string)$jsonObject->descriptionLike;
		if(!is_null($xml) && count($xml->isRoot))
			$this->isRoot = (int)$xml->isRoot;
		if(!is_null($jsonObject) && isset($jsonObject->isRoot))
			$this->isRoot = (int)$jsonObject->isRoot;
		if(!is_null($xml) && count($xml->categoriesFullNameIn))
			$this->categoriesFullNameIn = (string)$xml->categoriesFullNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesFullNameIn))
			$this->categoriesFullNameIn = (string)$jsonObject->categoriesFullNameIn;
		if(!is_null($xml) && count($xml->categoryAncestorIdIn))
			$this->categoryAncestorIdIn = (string)$xml->categoryAncestorIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->categoryAncestorIdIn))
			$this->categoryAncestorIdIn = (string)$jsonObject->categoryAncestorIdIn;
		if(!is_null($xml) && count($xml->redirectFromEntryId))
			$this->redirectFromEntryId = (string)$xml->redirectFromEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->redirectFromEntryId))
			$this->redirectFromEntryId = (string)$jsonObject->redirectFromEntryId;
		if(!is_null($xml) && count($xml->conversionProfileIdEqual))
			$this->conversionProfileIdEqual = (int)$xml->conversionProfileIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileIdEqual))
			$this->conversionProfileIdEqual = (int)$jsonObject->conversionProfileIdEqual;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $freeText = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $excludedFreeTextGroups = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionLike = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isRoot = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoriesFullNameIn = null;

	/**
	 * All entries within this categoy or in child categories
	 *
	 * @var string
	 */
	public $categoryAncestorIdIn = null;

	/**
	 * The id of the original entry
	 *
	 * @var string
	 */
	public $redirectFromEntryId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileIdEqual = null;


}

