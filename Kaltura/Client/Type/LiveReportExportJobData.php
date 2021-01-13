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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_Type_LiveReportExportJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveReportExportJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->timeReference))
			$this->timeReference = (int)$xml->timeReference;
		if(count($xml->timeZoneOffset))
			$this->timeZoneOffset = (int)$xml->timeZoneOffset;
		if(count($xml->entryIds))
			$this->entryIds = (string)$xml->entryIds;
		if(count($xml->outputPath))
			$this->outputPath = (string)$xml->outputPath;
		if(count($xml->recipientEmail))
			$this->recipientEmail = (string)$xml->recipientEmail;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $timeReference = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $timeZoneOffset = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $outputPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientEmail = null;


}

