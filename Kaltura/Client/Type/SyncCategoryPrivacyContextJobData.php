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
class Kaltura_Client_Type_SyncCategoryPrivacyContextJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaSyncCategoryPrivacyContextJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->categoryId))
			$this->categoryId = (int)$xml->categoryId;
		if(!is_null($jsonObject) && isset($jsonObject->categoryId))
			$this->categoryId = (int)$jsonObject->categoryId;
		if(!is_null($xml) && count($xml->lastUpdatedCategoryEntryCreatedAt))
			$this->lastUpdatedCategoryEntryCreatedAt = (int)$xml->lastUpdatedCategoryEntryCreatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->lastUpdatedCategoryEntryCreatedAt))
			$this->lastUpdatedCategoryEntryCreatedAt = (int)$jsonObject->lastUpdatedCategoryEntryCreatedAt;
		if(!is_null($xml) && count($xml->lastUpdatedCategoryCreatedAt))
			$this->lastUpdatedCategoryCreatedAt = (int)$xml->lastUpdatedCategoryCreatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->lastUpdatedCategoryCreatedAt))
			$this->lastUpdatedCategoryCreatedAt = (int)$jsonObject->lastUpdatedCategoryCreatedAt;
	}
	/**
	 * category id
	 *
	 * @var int
	 */
	public $categoryId = null;

	/**
	 * Saves the last category entry creation date that was updated
	 *      In case of crash the batch will restart from that point
	 *
	 * @var int
	 */
	public $lastUpdatedCategoryEntryCreatedAt = null;

	/**
	 * Saves the last sub category creation date that was updated
	 *      In case of crash the batch will restart from that point
	 *
	 * @var int
	 */
	public $lastUpdatedCategoryCreatedAt = null;


}

