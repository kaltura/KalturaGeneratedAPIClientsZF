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
abstract class Kaltura_Client_CodeCuePoint_Type_CodeCuePointBaseFilter extends Kaltura_Client_CuePoint_Type_CuePointFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCodeCuePointBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->codeLike))
			$this->codeLike = (string)$xml->codeLike;
		if(!is_null($jsonObject) && isset($jsonObject->codeLike))
			$this->codeLike = (string)$jsonObject->codeLike;
		if(!is_null($xml) && count($xml->codeMultiLikeOr))
			$this->codeMultiLikeOr = (string)$xml->codeMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->codeMultiLikeOr))
			$this->codeMultiLikeOr = (string)$jsonObject->codeMultiLikeOr;
		if(!is_null($xml) && count($xml->codeMultiLikeAnd))
			$this->codeMultiLikeAnd = (string)$xml->codeMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->codeMultiLikeAnd))
			$this->codeMultiLikeAnd = (string)$jsonObject->codeMultiLikeAnd;
		if(!is_null($xml) && count($xml->codeEqual))
			$this->codeEqual = (string)$xml->codeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->codeEqual))
			$this->codeEqual = (string)$jsonObject->codeEqual;
		if(!is_null($xml) && count($xml->codeIn))
			$this->codeIn = (string)$xml->codeIn;
		if(!is_null($jsonObject) && isset($jsonObject->codeIn))
			$this->codeIn = (string)$jsonObject->codeIn;
		if(!is_null($xml) && count($xml->descriptionLike))
			$this->descriptionLike = (string)$xml->descriptionLike;
		if(!is_null($jsonObject) && isset($jsonObject->descriptionLike))
			$this->descriptionLike = (string)$jsonObject->descriptionLike;
		if(!is_null($xml) && count($xml->descriptionMultiLikeOr))
			$this->descriptionMultiLikeOr = (string)$xml->descriptionMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->descriptionMultiLikeOr))
			$this->descriptionMultiLikeOr = (string)$jsonObject->descriptionMultiLikeOr;
		if(!is_null($xml) && count($xml->descriptionMultiLikeAnd))
			$this->descriptionMultiLikeAnd = (string)$xml->descriptionMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->descriptionMultiLikeAnd))
			$this->descriptionMultiLikeAnd = (string)$jsonObject->descriptionMultiLikeAnd;
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
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $codeLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $codeMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $codeMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $codeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $codeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $descriptionMultiLikeAnd = null;

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


}

