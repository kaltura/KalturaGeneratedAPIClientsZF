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
class Kaltura_Client_CaptionSearch_Type_CaptionAssetItemFilter extends Kaltura_Client_Caption_Type_CaptionAssetFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptionAssetItemFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->contentLike))
			$this->contentLike = (string)$xml->contentLike;
		if(!is_null($jsonObject) && isset($jsonObject->contentLike))
			$this->contentLike = (string)$jsonObject->contentLike;
		if(!is_null($xml) && count($xml->contentMultiLikeOr))
			$this->contentMultiLikeOr = (string)$xml->contentMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->contentMultiLikeOr))
			$this->contentMultiLikeOr = (string)$jsonObject->contentMultiLikeOr;
		if(!is_null($xml) && count($xml->contentMultiLikeAnd))
			$this->contentMultiLikeAnd = (string)$xml->contentMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->contentMultiLikeAnd))
			$this->contentMultiLikeAnd = (string)$jsonObject->contentMultiLikeAnd;
		if(!is_null($xml) && count($xml->partnerDescriptionLike))
			$this->partnerDescriptionLike = (string)$xml->partnerDescriptionLike;
		if(!is_null($jsonObject) && isset($jsonObject->partnerDescriptionLike))
			$this->partnerDescriptionLike = (string)$jsonObject->partnerDescriptionLike;
		if(!is_null($xml) && count($xml->partnerDescriptionMultiLikeOr))
			$this->partnerDescriptionMultiLikeOr = (string)$xml->partnerDescriptionMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->partnerDescriptionMultiLikeOr))
			$this->partnerDescriptionMultiLikeOr = (string)$jsonObject->partnerDescriptionMultiLikeOr;
		if(!is_null($xml) && count($xml->partnerDescriptionMultiLikeAnd))
			$this->partnerDescriptionMultiLikeAnd = (string)$xml->partnerDescriptionMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->partnerDescriptionMultiLikeAnd))
			$this->partnerDescriptionMultiLikeAnd = (string)$jsonObject->partnerDescriptionMultiLikeAnd;
		if(!is_null($xml) && count($xml->languageEqual))
			$this->languageEqual = (string)$xml->languageEqual;
		if(!is_null($jsonObject) && isset($jsonObject->languageEqual))
			$this->languageEqual = (string)$jsonObject->languageEqual;
		if(!is_null($xml) && count($xml->languageIn))
			$this->languageIn = (string)$xml->languageIn;
		if(!is_null($jsonObject) && isset($jsonObject->languageIn))
			$this->languageIn = (string)$jsonObject->languageIn;
		if(!is_null($xml) && count($xml->labelEqual))
			$this->labelEqual = (string)$xml->labelEqual;
		if(!is_null($jsonObject) && isset($jsonObject->labelEqual))
			$this->labelEqual = (string)$jsonObject->labelEqual;
		if(!is_null($xml) && count($xml->labelIn))
			$this->labelIn = (string)$xml->labelIn;
		if(!is_null($jsonObject) && isset($jsonObject->labelIn))
			$this->labelIn = (string)$jsonObject->labelIn;
		if(!is_null($xml) && count($xml->startTimeGreaterThanOrEqual))
			$this->startTimeGreaterThanOrEqual = (int)$xml->startTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startTimeGreaterThanOrEqual))
			$this->startTimeGreaterThanOrEqual = (int)$jsonObject->startTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->startTimeLessThanOrEqual))
			$this->startTimeLessThanOrEqual = (int)$xml->startTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->startTimeLessThanOrEqual))
			$this->startTimeLessThanOrEqual = (int)$jsonObject->startTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->endTimeGreaterThanOrEqual))
			$this->endTimeGreaterThanOrEqual = (int)$xml->endTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endTimeGreaterThanOrEqual))
			$this->endTimeGreaterThanOrEqual = (int)$jsonObject->endTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->endTimeLessThanOrEqual))
			$this->endTimeLessThanOrEqual = (int)$xml->endTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->endTimeLessThanOrEqual))
			$this->endTimeLessThanOrEqual = (int)$jsonObject->endTimeLessThanOrEqual;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $contentLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDescriptionLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDescriptionMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerDescriptionMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_Language
	 */
	public $languageEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $languageIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTimeLessThanOrEqual = null;

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


}

