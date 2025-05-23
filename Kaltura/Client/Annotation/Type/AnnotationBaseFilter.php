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
abstract class Kaltura_Client_Annotation_Type_AnnotationBaseFilter extends Kaltura_Client_CuePoint_Type_CuePointFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnnotationBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->parentIdEqual))
			$this->parentIdEqual = (string)$xml->parentIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdEqual))
			$this->parentIdEqual = (string)$jsonObject->parentIdEqual;
		if(!is_null($xml) && count($xml->parentIdIn))
			$this->parentIdIn = (string)$xml->parentIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdIn))
			$this->parentIdIn = (string)$jsonObject->parentIdIn;
		if(!is_null($xml) && count($xml->textLike))
			$this->textLike = (string)$xml->textLike;
		if(!is_null($jsonObject) && isset($jsonObject->textLike))
			$this->textLike = (string)$jsonObject->textLike;
		if(!is_null($xml) && count($xml->textMultiLikeOr))
			$this->textMultiLikeOr = (string)$xml->textMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->textMultiLikeOr))
			$this->textMultiLikeOr = (string)$jsonObject->textMultiLikeOr;
		if(!is_null($xml) && count($xml->textMultiLikeAnd))
			$this->textMultiLikeAnd = (string)$xml->textMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->textMultiLikeAnd))
			$this->textMultiLikeAnd = (string)$jsonObject->textMultiLikeAnd;
		if(!is_null($xml) && count($xml->endTimeGreaterThanOrEqual))
			$this->endTimeGreaterThanOrEqual = (int)$xml->endTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endTimeGreaterThanOrEqual))
			$this->endTimeGreaterThanOrEqual = (int)$jsonObject->endTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->endTimeLessThanOrEqual))
			$this->endTimeLessThanOrEqual = (int)$xml->endTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endTimeLessThanOrEqual))
			$this->endTimeLessThanOrEqual = (int)$jsonObject->endTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->durationGreaterThanOrEqual))
			$this->durationGreaterThanOrEqual = (int)$xml->durationGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->durationGreaterThanOrEqual))
			$this->durationGreaterThanOrEqual = (int)$jsonObject->durationGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->durationLessThanOrEqual))
			$this->durationLessThanOrEqual = (int)$xml->durationLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->durationLessThanOrEqual))
			$this->durationLessThanOrEqual = (int)$jsonObject->durationLessThanOrEqual;
		if(!is_null($xml) && count($xml->isPublicEqual))
			$this->isPublicEqual = (int)$xml->isPublicEqual;
		if(!is_null($jsonObject) && isset($jsonObject->isPublicEqual))
			$this->isPublicEqual = (int)$jsonObject->isPublicEqual;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $textLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $textMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $textMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isPublicEqual = null;


}

