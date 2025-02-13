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
abstract class Kaltura_Client_Schedule_Type_EntryScheduleEventBaseFilter extends Kaltura_Client_Schedule_Type_ScheduleEventFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryScheduleEventBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->templateEntryIdEqual))
			$this->templateEntryIdEqual = (string)$xml->templateEntryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryIdEqual))
			$this->templateEntryIdEqual = (string)$jsonObject->templateEntryIdEqual;
		if(!is_null($xml) && count($xml->entryIdsLike))
			$this->entryIdsLike = (string)$xml->entryIdsLike;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdsLike))
			$this->entryIdsLike = (string)$jsonObject->entryIdsLike;
		if(!is_null($xml) && count($xml->entryIdsMultiLikeOr))
			$this->entryIdsMultiLikeOr = (string)$xml->entryIdsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdsMultiLikeOr))
			$this->entryIdsMultiLikeOr = (string)$jsonObject->entryIdsMultiLikeOr;
		if(!is_null($xml) && count($xml->entryIdsMultiLikeAnd))
			$this->entryIdsMultiLikeAnd = (string)$xml->entryIdsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdsMultiLikeAnd))
			$this->entryIdsMultiLikeAnd = (string)$jsonObject->entryIdsMultiLikeAnd;
		if(!is_null($xml) && count($xml->categoryIdsLike))
			$this->categoryIdsLike = (string)$xml->categoryIdsLike;
		if(!is_null($jsonObject) && isset($jsonObject->categoryIdsLike))
			$this->categoryIdsLike = (string)$jsonObject->categoryIdsLike;
		if(!is_null($xml) && count($xml->categoryIdsMultiLikeOr))
			$this->categoryIdsMultiLikeOr = (string)$xml->categoryIdsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->categoryIdsMultiLikeOr))
			$this->categoryIdsMultiLikeOr = (string)$jsonObject->categoryIdsMultiLikeOr;
		if(!is_null($xml) && count($xml->categoryIdsMultiLikeAnd))
			$this->categoryIdsMultiLikeAnd = (string)$xml->categoryIdsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->categoryIdsMultiLikeAnd))
			$this->categoryIdsMultiLikeAnd = (string)$jsonObject->categoryIdsMultiLikeAnd;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIdsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIdsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIdsMultiLikeAnd = null;


}

