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
abstract class Kaltura_Client_Type_PlayableEntryBaseFilter extends Kaltura_Client_Type_BaseEntryFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlayableEntryBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->lastPlayedAtGreaterThanOrEqual))
			$this->lastPlayedAtGreaterThanOrEqual = (int)$xml->lastPlayedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->lastPlayedAtGreaterThanOrEqual))
			$this->lastPlayedAtGreaterThanOrEqual = (int)$jsonObject->lastPlayedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->lastPlayedAtLessThanOrEqual))
			$this->lastPlayedAtLessThanOrEqual = (int)$xml->lastPlayedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->lastPlayedAtLessThanOrEqual))
			$this->lastPlayedAtLessThanOrEqual = (int)$jsonObject->lastPlayedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->lastPlayedAtLessThanOrEqualOrNull))
			$this->lastPlayedAtLessThanOrEqualOrNull = (int)$xml->lastPlayedAtLessThanOrEqualOrNull;
		if(!is_null($jsonObject) && isset($jsonObject->lastPlayedAtLessThanOrEqualOrNull))
			$this->lastPlayedAtLessThanOrEqualOrNull = (int)$jsonObject->lastPlayedAtLessThanOrEqualOrNull;
		if(!is_null($xml) && count($xml->durationLessThan))
			$this->durationLessThan = (int)$xml->durationLessThan;
		if(!is_null($jsonObject) && isset($jsonObject->durationLessThan))
			$this->durationLessThan = (int)$jsonObject->durationLessThan;
		if(!is_null($xml) && count($xml->durationGreaterThan))
			$this->durationGreaterThan = (int)$xml->durationGreaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->durationGreaterThan))
			$this->durationGreaterThan = (int)$jsonObject->durationGreaterThan;
		if(!is_null($xml) && count($xml->durationLessThanOrEqual))
			$this->durationLessThanOrEqual = (int)$xml->durationLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->durationLessThanOrEqual))
			$this->durationLessThanOrEqual = (int)$jsonObject->durationLessThanOrEqual;
		if(!is_null($xml) && count($xml->durationGreaterThanOrEqual))
			$this->durationGreaterThanOrEqual = (int)$xml->durationGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->durationGreaterThanOrEqual))
			$this->durationGreaterThanOrEqual = (int)$jsonObject->durationGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->durationTypeMatchOr))
			$this->durationTypeMatchOr = (string)$xml->durationTypeMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->durationTypeMatchOr))
			$this->durationTypeMatchOr = (string)$jsonObject->durationTypeMatchOr;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $lastPlayedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastPlayedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $lastPlayedAtLessThanOrEqualOrNull = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationLessThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationGreaterThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $durationGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $durationTypeMatchOr = null;


}

