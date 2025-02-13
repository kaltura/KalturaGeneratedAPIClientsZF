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
abstract class Kaltura_Client_Type_MediaEntryBaseFilter extends Kaltura_Client_Type_PlayableEntryFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaEntryBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->mediaTypeEqual))
			$this->mediaTypeEqual = (int)$xml->mediaTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->mediaTypeEqual))
			$this->mediaTypeEqual = (int)$jsonObject->mediaTypeEqual;
		if(!is_null($xml) && count($xml->mediaTypeIn))
			$this->mediaTypeIn = (string)$xml->mediaTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->mediaTypeIn))
			$this->mediaTypeIn = (string)$jsonObject->mediaTypeIn;
		if(!is_null($xml) && count($xml->sourceTypeEqual))
			$this->sourceTypeEqual = (string)$xml->sourceTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sourceTypeEqual))
			$this->sourceTypeEqual = (string)$jsonObject->sourceTypeEqual;
		if(!is_null($xml) && count($xml->sourceTypeNotEqual))
			$this->sourceTypeNotEqual = (string)$xml->sourceTypeNotEqual;
		if(!is_null($jsonObject) && isset($jsonObject->sourceTypeNotEqual))
			$this->sourceTypeNotEqual = (string)$jsonObject->sourceTypeNotEqual;
		if(!is_null($xml) && count($xml->sourceTypeIn))
			$this->sourceTypeIn = (string)$xml->sourceTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->sourceTypeIn))
			$this->sourceTypeIn = (string)$jsonObject->sourceTypeIn;
		if(!is_null($xml) && count($xml->sourceTypeNotIn))
			$this->sourceTypeNotIn = (string)$xml->sourceTypeNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->sourceTypeNotIn))
			$this->sourceTypeNotIn = (string)$jsonObject->sourceTypeNotIn;
		if(!is_null($xml) && count($xml->mediaDateGreaterThanOrEqual))
			$this->mediaDateGreaterThanOrEqual = (int)$xml->mediaDateGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->mediaDateGreaterThanOrEqual))
			$this->mediaDateGreaterThanOrEqual = (int)$jsonObject->mediaDateGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->mediaDateLessThanOrEqual))
			$this->mediaDateLessThanOrEqual = (int)$xml->mediaDateLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->mediaDateLessThanOrEqual))
			$this->mediaDateLessThanOrEqual = (int)$jsonObject->mediaDateLessThanOrEqual;
		if(!is_null($xml) && count($xml->flavorParamsIdsMatchOr))
			$this->flavorParamsIdsMatchOr = (string)$xml->flavorParamsIdsMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsIdsMatchOr))
			$this->flavorParamsIdsMatchOr = (string)$jsonObject->flavorParamsIdsMatchOr;
		if(!is_null($xml) && count($xml->flavorParamsIdsMatchAnd))
			$this->flavorParamsIdsMatchAnd = (string)$xml->flavorParamsIdsMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsIdsMatchAnd))
			$this->flavorParamsIdsMatchAnd = (string)$jsonObject->flavorParamsIdsMatchAnd;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_MediaType
	 */
	public $mediaTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mediaTypeIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_SourceType
	 */
	public $sourceTypeEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_SourceType
	 */
	public $sourceTypeNotEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceTypeNotIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaDateGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaDateLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsIdsMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsIdsMatchAnd = null;


}

