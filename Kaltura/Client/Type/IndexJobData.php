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
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_Type_IndexJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaIndexJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->filter) && !empty($xml->filter))
			$this->filter = Kaltura_Client_ParseUtils::unmarshalObject($xml->filter, "KalturaFilter");
		if(count($xml->lastIndexId))
			$this->lastIndexId = (int)$xml->lastIndexId;
		if(count($xml->lastIndexDepth))
			$this->lastIndexDepth = (int)$xml->lastIndexDepth;
		if(count($xml->shouldUpdate))
		{
			if(!empty($xml->shouldUpdate) && ((int) $xml->shouldUpdate === 1 || strtolower((string)$xml->shouldUpdate) === 'true'))
				$this->shouldUpdate = true;
			else
				$this->shouldUpdate = false;
		}
	}
	/**
	 * The filter should return the list of objects that need to be reindexed.
	 *
	 * @var Kaltura_Client_Type_Filter
	 */
	public $filter;

	/**
	 * Indicates the last id that reindexed, used when the batch crached, to re-run from the last crash point.
	 *
	 * @var int
	 */
	public $lastIndexId = null;

	/**
	 * Indicates the last depth that reindexed, used when the batch crached, to re-run from the last crash point.
	 *
	 * @var int
	 */
	public $lastIndexDepth = null;

	/**
	 * Indicates that the object columns and attributes values should be recalculated before reindexed.
	 *
	 * @var bool
	 */
	public $shouldUpdate = null;


}

