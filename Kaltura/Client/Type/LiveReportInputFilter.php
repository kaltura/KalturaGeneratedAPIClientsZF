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
class Kaltura_Client_Type_LiveReportInputFilter extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveReportInputFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->entryIds))
			$this->entryIds = (string)$xml->entryIds;
		if(!is_null($jsonObject) && isset($jsonObject->entryIds))
			$this->entryIds = (string)$jsonObject->entryIds;
		if(!is_null($xml) && count($xml->fromTime))
			$this->fromTime = (int)$xml->fromTime;
		if(!is_null($jsonObject) && isset($jsonObject->fromTime))
			$this->fromTime = (int)$jsonObject->fromTime;
		if(!is_null($xml) && count($xml->toTime))
			$this->toTime = (int)$xml->toTime;
		if(!is_null($jsonObject) && isset($jsonObject->toTime))
			$this->toTime = (int)$jsonObject->toTime;
		if(!is_null($xml) && count($xml->live))
			$this->live = (int)$xml->live;
		if(!is_null($jsonObject) && isset($jsonObject->live))
			$this->live = (int)$jsonObject->live;
		if(!is_null($xml) && count($xml->orderBy))
			$this->orderBy = (string)$xml->orderBy;
		if(!is_null($jsonObject) && isset($jsonObject->orderBy))
			$this->orderBy = (string)$jsonObject->orderBy;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIds = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fromTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $toTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $live = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_LiveReportOrderBy
	 */
	public $orderBy = null;


}

