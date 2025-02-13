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
class Kaltura_Client_Schedule_Type_ScheduleEventFilter extends Kaltura_Client_Schedule_Type_ScheduleEventBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEventFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->resourceIdsLike))
			$this->resourceIdsLike = (string)$xml->resourceIdsLike;
		if(!is_null($jsonObject) && isset($jsonObject->resourceIdsLike))
			$this->resourceIdsLike = (string)$jsonObject->resourceIdsLike;
		if(!is_null($xml) && count($xml->resourceIdsMultiLikeOr))
			$this->resourceIdsMultiLikeOr = (string)$xml->resourceIdsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->resourceIdsMultiLikeOr))
			$this->resourceIdsMultiLikeOr = (string)$jsonObject->resourceIdsMultiLikeOr;
		if(!is_null($xml) && count($xml->resourceIdsMultiLikeAnd))
			$this->resourceIdsMultiLikeAnd = (string)$xml->resourceIdsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->resourceIdsMultiLikeAnd))
			$this->resourceIdsMultiLikeAnd = (string)$jsonObject->resourceIdsMultiLikeAnd;
		if(!is_null($xml) && count($xml->parentResourceIdsLike))
			$this->parentResourceIdsLike = (string)$xml->parentResourceIdsLike;
		if(!is_null($jsonObject) && isset($jsonObject->parentResourceIdsLike))
			$this->parentResourceIdsLike = (string)$jsonObject->parentResourceIdsLike;
		if(!is_null($xml) && count($xml->parentResourceIdsMultiLikeOr))
			$this->parentResourceIdsMultiLikeOr = (string)$xml->parentResourceIdsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->parentResourceIdsMultiLikeOr))
			$this->parentResourceIdsMultiLikeOr = (string)$jsonObject->parentResourceIdsMultiLikeOr;
		if(!is_null($xml) && count($xml->parentResourceIdsMultiLikeAnd))
			$this->parentResourceIdsMultiLikeAnd = (string)$xml->parentResourceIdsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->parentResourceIdsMultiLikeAnd))
			$this->parentResourceIdsMultiLikeAnd = (string)$jsonObject->parentResourceIdsMultiLikeAnd;
		if(!is_null($xml) && count($xml->templateEntryCategoriesIdsMultiLikeAnd))
			$this->templateEntryCategoriesIdsMultiLikeAnd = (string)$xml->templateEntryCategoriesIdsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryCategoriesIdsMultiLikeAnd))
			$this->templateEntryCategoriesIdsMultiLikeAnd = (string)$jsonObject->templateEntryCategoriesIdsMultiLikeAnd;
		if(!is_null($xml) && count($xml->templateEntryCategoriesIdsMultiLikeOr))
			$this->templateEntryCategoriesIdsMultiLikeOr = (string)$xml->templateEntryCategoriesIdsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryCategoriesIdsMultiLikeOr))
			$this->templateEntryCategoriesIdsMultiLikeOr = (string)$jsonObject->templateEntryCategoriesIdsMultiLikeOr;
		if(!is_null($xml) && count($xml->resourceSystemNamesMultiLikeOr))
			$this->resourceSystemNamesMultiLikeOr = (string)$xml->resourceSystemNamesMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->resourceSystemNamesMultiLikeOr))
			$this->resourceSystemNamesMultiLikeOr = (string)$jsonObject->resourceSystemNamesMultiLikeOr;
		if(!is_null($xml) && count($xml->templateEntryCategoriesIdsLike))
			$this->templateEntryCategoriesIdsLike = (string)$xml->templateEntryCategoriesIdsLike;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryCategoriesIdsLike))
			$this->templateEntryCategoriesIdsLike = (string)$jsonObject->templateEntryCategoriesIdsLike;
		if(!is_null($xml) && count($xml->resourceSystemNamesMultiLikeAnd))
			$this->resourceSystemNamesMultiLikeAnd = (string)$xml->resourceSystemNamesMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->resourceSystemNamesMultiLikeAnd))
			$this->resourceSystemNamesMultiLikeAnd = (string)$jsonObject->resourceSystemNamesMultiLikeAnd;
		if(!is_null($xml) && count($xml->resourceSystemNamesLike))
			$this->resourceSystemNamesLike = (string)$xml->resourceSystemNamesLike;
		if(!is_null($jsonObject) && isset($jsonObject->resourceSystemNamesLike))
			$this->resourceSystemNamesLike = (string)$jsonObject->resourceSystemNamesLike;
		if(!is_null($xml) && count($xml->resourceIdEqual))
			$this->resourceIdEqual = (string)$xml->resourceIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->resourceIdEqual))
			$this->resourceIdEqual = (string)$jsonObject->resourceIdEqual;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentResourceIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentResourceIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentResourceIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryCategoriesIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryCategoriesIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceSystemNamesMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryCategoriesIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceSystemNamesMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceSystemNamesLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $resourceIdEqual = null;


}

