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
class Kaltura_Client_Type_AnalyticsFilter extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnalyticsFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->from_time))
			$this->from_time = (string)$xml->from_time;
		if(!is_null($jsonObject) && isset($jsonObject->from_time))
			$this->from_time = (string)$jsonObject->from_time;
		if(!is_null($xml) && count($xml->to_time))
			$this->to_time = (string)$xml->to_time;
		if(!is_null($jsonObject) && isset($jsonObject->to_time))
			$this->to_time = (string)$jsonObject->to_time;
		if(!is_null($xml) && count($xml->metrics))
			$this->metrics = (string)$xml->metrics;
		if(!is_null($jsonObject) && isset($jsonObject->metrics))
			$this->metrics = (string)$jsonObject->metrics;
		if(!is_null($xml) && count($xml->utcOffset))
			$this->utcOffset = (float)$xml->utcOffset;
		if(!is_null($jsonObject) && isset($jsonObject->utcOffset))
			$this->utcOffset = (float)$jsonObject->utcOffset;
		if(!is_null($xml) && count($xml->dimensions))
			$this->dimensions = (string)$xml->dimensions;
		if(!is_null($jsonObject) && isset($jsonObject->dimensions))
			$this->dimensions = (string)$jsonObject->dimensions;
		if(!is_null($xml) && count($xml->filters))
		{
			if(empty($xml->filters))
				$this->filters = array();
			else
				$this->filters = Kaltura_Client_ParseUtils::unmarshalArray($xml->filters, "KalturaReportFilter");
		}
		if(!is_null($jsonObject) && isset($jsonObject->filters))
		{
			if(empty($jsonObject->filters))
				$this->filters = array();
			else
				$this->filters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->filters, "KalturaReportFilter");
		}
		if(!is_null($xml) && count($xml->orderBy))
			$this->orderBy = (string)$xml->orderBy;
		if(!is_null($jsonObject) && isset($jsonObject->orderBy))
			$this->orderBy = (string)$jsonObject->orderBy;
	}
	/**
	 * Query start time (in local time) MM/dd/yyyy HH:mi
	 *
	 * @var string
	 */
	public $from_time = null;

	/**
	 * Query end time (in local time) MM/dd/yyyy HH:mi
	 *
	 * @var string
	 */
	public $to_time = null;

	/**
	 * Comma separated metrics list
	 *
	 * @var string
	 */
	public $metrics = null;

	/**
	 * Timezone offset from UTC (in minutes)
	 *
	 * @var float
	 */
	public $utcOffset = null;

	/**
	 * Comma separated dimensions list
	 *
	 * @var string
	 */
	public $dimensions = null;

	/**
	 * Array of filters
	 *
	 * @var array of KalturaReportFilter
	 */
	public $filters;

	/**
	 * Query order by metric/dimension
	 *
	 * @var string
	 */
	public $orderBy = null;


}

