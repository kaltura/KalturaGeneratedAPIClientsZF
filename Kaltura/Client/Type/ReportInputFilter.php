<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2018  Kaltura Inc.
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
class Kaltura_Client_Type_ReportInputFilter extends Kaltura_Client_Type_ReportInputBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaReportInputFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->keywords))
			$this->keywords = (string)$xml->keywords;
		if(count($xml->searchInTags))
		{
			if(!empty($xml->searchInTags) && ((int) $xml->searchInTags === 1 || strtolower((string)$xml->searchInTags) === 'true'))
				$this->searchInTags = true;
			else
				$this->searchInTags = false;
		}
		if(count($xml->searchInAdminTags))
		{
			if(!empty($xml->searchInAdminTags) && ((int) $xml->searchInAdminTags === 1 || strtolower((string)$xml->searchInAdminTags) === 'true'))
				$this->searchInAdminTags = true;
			else
				$this->searchInAdminTags = false;
		}
		if(count($xml->categories))
			$this->categories = (string)$xml->categories;
		if(count($xml->customVar1In))
			$this->customVar1In = (string)$xml->customVar1In;
		if(count($xml->customVar2In))
			$this->customVar2In = (string)$xml->customVar2In;
		if(count($xml->customVar3In))
			$this->customVar3In = (string)$xml->customVar3In;
		if(count($xml->timeZoneOffset))
			$this->timeZoneOffset = (int)$xml->timeZoneOffset;
		if(count($xml->interval))
			$this->interval = (string)$xml->interval;
	}
	/**
	 * Search keywords to filter objects
	 *
	 * @var string
	 */
	public $keywords = null;

	/**
	 * Search keywords in onjects tags
	 *
	 * @var bool
	 */
	public $searchInTags = null;

	/**
	 * Search keywords in onjects admin tags
	 *
	 * @var bool
	 */
	public $searchInAdminTags = null;

	/**
	 * Search onjects in specified categories
	 *
	 * @var string
	 */
	public $categories = null;

	/**
	 * Filter by customVar1
	 *
	 * @var string
	 */
	public $customVar1In = null;

	/**
	 * Filter by customVar2
	 *
	 * @var string
	 */
	public $customVar2In = null;

	/**
	 * Filter by customVar3
	 *
	 * @var string
	 */
	public $customVar3In = null;

	/**
	 * Time zone offset in minutes
	 *
	 * @var int
	 */
	public $timeZoneOffset = null;

	/**
	 * Aggregated results according to interval
	 *
	 * @var Kaltura_Client_Enum_ReportInterval
	 */
	public $interval = null;


}

