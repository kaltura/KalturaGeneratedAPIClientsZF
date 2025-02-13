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
class Kaltura_Client_Schedule_Type_ScheduleEventRecurrence extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaScheduleEventRecurrence';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->frequency))
			$this->frequency = (string)$xml->frequency;
		if(!is_null($jsonObject) && isset($jsonObject->frequency))
			$this->frequency = (string)$jsonObject->frequency;
		if(!is_null($xml) && count($xml->until))
			$this->until = (int)$xml->until;
		if(!is_null($jsonObject) && isset($jsonObject->until))
			$this->until = (int)$jsonObject->until;
		if(!is_null($xml) && count($xml->timeZone))
			$this->timeZone = (string)$xml->timeZone;
		if(!is_null($jsonObject) && isset($jsonObject->timeZone))
			$this->timeZone = (string)$jsonObject->timeZone;
		if(!is_null($xml) && count($xml->count))
			$this->count = (int)$xml->count;
		if(!is_null($jsonObject) && isset($jsonObject->count))
			$this->count = (int)$jsonObject->count;
		if(!is_null($xml) && count($xml->interval))
			$this->interval = (int)$xml->interval;
		if(!is_null($jsonObject) && isset($jsonObject->interval))
			$this->interval = (int)$jsonObject->interval;
		if(!is_null($xml) && count($xml->bySecond))
			$this->bySecond = (string)$xml->bySecond;
		if(!is_null($jsonObject) && isset($jsonObject->bySecond))
			$this->bySecond = (string)$jsonObject->bySecond;
		if(!is_null($xml) && count($xml->byMinute))
			$this->byMinute = (string)$xml->byMinute;
		if(!is_null($jsonObject) && isset($jsonObject->byMinute))
			$this->byMinute = (string)$jsonObject->byMinute;
		if(!is_null($xml) && count($xml->byHour))
			$this->byHour = (string)$xml->byHour;
		if(!is_null($jsonObject) && isset($jsonObject->byHour))
			$this->byHour = (string)$jsonObject->byHour;
		if(!is_null($xml) && count($xml->byDay))
			$this->byDay = (string)$xml->byDay;
		if(!is_null($jsonObject) && isset($jsonObject->byDay))
			$this->byDay = (string)$jsonObject->byDay;
		if(!is_null($xml) && count($xml->byMonthDay))
			$this->byMonthDay = (string)$xml->byMonthDay;
		if(!is_null($jsonObject) && isset($jsonObject->byMonthDay))
			$this->byMonthDay = (string)$jsonObject->byMonthDay;
		if(!is_null($xml) && count($xml->byYearDay))
			$this->byYearDay = (string)$xml->byYearDay;
		if(!is_null($jsonObject) && isset($jsonObject->byYearDay))
			$this->byYearDay = (string)$jsonObject->byYearDay;
		if(!is_null($xml) && count($xml->byWeekNumber))
			$this->byWeekNumber = (string)$xml->byWeekNumber;
		if(!is_null($jsonObject) && isset($jsonObject->byWeekNumber))
			$this->byWeekNumber = (string)$jsonObject->byWeekNumber;
		if(!is_null($xml) && count($xml->byMonth))
			$this->byMonth = (string)$xml->byMonth;
		if(!is_null($jsonObject) && isset($jsonObject->byMonth))
			$this->byMonth = (string)$jsonObject->byMonth;
		if(!is_null($xml) && count($xml->byOffset))
			$this->byOffset = (string)$xml->byOffset;
		if(!is_null($jsonObject) && isset($jsonObject->byOffset))
			$this->byOffset = (string)$jsonObject->byOffset;
		if(!is_null($xml) && count($xml->weekStartDay))
			$this->weekStartDay = (string)$xml->weekStartDay;
		if(!is_null($jsonObject) && isset($jsonObject->weekStartDay))
			$this->weekStartDay = (string)$jsonObject->weekStartDay;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Enum_ScheduleEventRecurrenceFrequency
	 */
	public $frequency = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $until = null;

	/**
	 * TimeZone String
	 *
	 * @var string
	 */
	public $timeZone = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $count = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $interval = null;

	/**
	 * Comma separated numbers between 0 to 59
	 *
	 * @var string
	 */
	public $bySecond = null;

	/**
	 * Comma separated numbers between 0 to 59
	 *
	 * @var string
	 */
	public $byMinute = null;

	/**
	 * Comma separated numbers between 0 to 23
	 *
	 * @var string
	 */
	public $byHour = null;

	/**
	 * Comma separated of KalturaScheduleEventRecurrenceDay
	 * 	 Each byDay value can also be preceded by a positive (+n) or negative (-n) integer.
	 * 	 If present, this indicates the nth occurrence of the specific day within the MONTHLY or YEARLY RRULE.
	 * 	 For example, within a MONTHLY rule, +1MO (or simply 1MO) represents the first Monday within the month, whereas -1MO represents the last Monday of the month.
	 * 	 If an integer modifier is not present, it means all days of this type within the specified frequency.
	 * 	 For example, within a MONTHLY rule, MO represents all Mondays within the month.
	 *
	 * @var string
	 */
	public $byDay = null;

	/**
	 * Comma separated of numbers between -31 to 31, excluding 0.
	 * 	 For example, -10 represents the tenth to the last day of the month.
	 *
	 * @var string
	 */
	public $byMonthDay = null;

	/**
	 * Comma separated of numbers between -366 to 366, excluding 0.
	 * 	 For example, -1 represents the last day of the year (December 31st) and -306 represents the 306th to the last day of the year (March 1st).
	 *
	 * @var string
	 */
	public $byYearDay = null;

	/**
	 * Comma separated of numbers between -53 to 53, excluding 0.
	 * 	 This corresponds to weeks according to week numbering.
	 * 	 A week is defined as a seven day period, starting on the day of the week defined to be the week start.
	 * 	 Week number one of the calendar year is the first week which contains at least four (4) days in that calendar year.
	 * 	 This rule part is only valid for YEARLY frequency.
	 * 	 For example, 3 represents the third week of the year.
	 *
	 * @var string
	 */
	public $byWeekNumber = null;

	/**
	 * Comma separated numbers between 1 to 12
	 *
	 * @var string
	 */
	public $byMonth = null;

	/**
	 * Comma separated of numbers between -366 to 366, excluding 0.
	 * 	 Corresponds to the nth occurrence within the set of events specified by the rule.
	 * 	 It must only be used in conjunction with another byrule part.
	 * 	 For example "the last work day of the month" could be represented as: frequency=MONTHLY;byDay=MO,TU,WE,TH,FR;byOffset=-1
	 * 	 Each byOffset value can include a positive (+n) or negative (-n) integer.
	 * 	 If present, this indicates the nth occurrence of the specific occurrence within the set of events specified by the rule.
	 *
	 * @var string
	 */
	public $byOffset = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Schedule_Enum_ScheduleEventRecurrenceDay
	 */
	public $weekStartDay = null;


}

