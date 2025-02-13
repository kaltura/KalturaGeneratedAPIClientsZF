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
class Kaltura_Client_Type_MoveCategoryEntriesJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaMoveCategoryEntriesJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->srcCategoryId))
			$this->srcCategoryId = (int)$xml->srcCategoryId;
		if(!is_null($jsonObject) && isset($jsonObject->srcCategoryId))
			$this->srcCategoryId = (int)$jsonObject->srcCategoryId;
		if(!is_null($xml) && count($xml->destCategoryId))
			$this->destCategoryId = (int)$xml->destCategoryId;
		if(!is_null($jsonObject) && isset($jsonObject->destCategoryId))
			$this->destCategoryId = (int)$jsonObject->destCategoryId;
		if(!is_null($xml) && count($xml->lastMovedCategoryId))
			$this->lastMovedCategoryId = (int)$xml->lastMovedCategoryId;
		if(!is_null($jsonObject) && isset($jsonObject->lastMovedCategoryId))
			$this->lastMovedCategoryId = (int)$jsonObject->lastMovedCategoryId;
		if(!is_null($xml) && count($xml->lastMovedCategoryPageIndex))
			$this->lastMovedCategoryPageIndex = (int)$xml->lastMovedCategoryPageIndex;
		if(!is_null($jsonObject) && isset($jsonObject->lastMovedCategoryPageIndex))
			$this->lastMovedCategoryPageIndex = (int)$jsonObject->lastMovedCategoryPageIndex;
		if(!is_null($xml) && count($xml->lastMovedCategoryEntryPageIndex))
			$this->lastMovedCategoryEntryPageIndex = (int)$xml->lastMovedCategoryEntryPageIndex;
		if(!is_null($jsonObject) && isset($jsonObject->lastMovedCategoryEntryPageIndex))
			$this->lastMovedCategoryEntryPageIndex = (int)$jsonObject->lastMovedCategoryEntryPageIndex;
		if(!is_null($xml) && count($xml->moveFromChildren))
		{
			if(!empty($xml->moveFromChildren) && ((int) $xml->moveFromChildren === 1 || strtolower((string)$xml->moveFromChildren) === 'true'))
				$this->moveFromChildren = true;
			else
				$this->moveFromChildren = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->moveFromChildren))
		{
			if(!empty($jsonObject->moveFromChildren) && ((int) $jsonObject->moveFromChildren === 1 || strtolower((string)$jsonObject->moveFromChildren) === 'true'))
				$this->moveFromChildren = true;
			else
				$this->moveFromChildren = false;
		}
		if(!is_null($xml) && count($xml->destCategoryFullIds))
			$this->destCategoryFullIds = (string)$xml->destCategoryFullIds;
		if(!is_null($jsonObject) && isset($jsonObject->destCategoryFullIds))
			$this->destCategoryFullIds = (string)$jsonObject->destCategoryFullIds;
	}
	/**
	 * Source category id
	 *
	 * @var int
	 */
	public $srcCategoryId = null;

	/**
	 * Destination category id
	 *
	 * @var int
	 */
	public $destCategoryId = null;

	/**
	 * Saves the last category id that its entries moved completely
	 *      In case of crash the batch will restart from that point
	 *
	 * @var int
	 */
	public $lastMovedCategoryId = null;

	/**
	 * Saves the last page index of the child categories filter pager
	 *      In case of crash the batch will restart from that point
	 *
	 * @var int
	 */
	public $lastMovedCategoryPageIndex = null;

	/**
	 * Saves the last page index of the category entries filter pager
	 *      In case of crash the batch will restart from that point
	 *
	 * @var int
	 */
	public $lastMovedCategoryEntryPageIndex = null;

	/**
	 * All entries from all child categories will be moved as well
	 *
	 * @var bool
	 */
	public $moveFromChildren = null;

	/**
	 * Destination categories fallback ids
	 *
	 * @var string
	 */
	public $destCategoryFullIds = null;


}

