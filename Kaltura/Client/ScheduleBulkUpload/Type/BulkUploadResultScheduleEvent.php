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
class Kaltura_Client_ScheduleBulkUpload_Type_BulkUploadResultScheduleEvent extends Kaltura_Client_Type_BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultScheduleEvent';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
		if(!is_null($xml) && count($xml->templateEntryId))
			$this->templateEntryId = (string)$xml->templateEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryId))
			$this->templateEntryId = (string)$jsonObject->templateEntryId;
		if(!is_null($xml) && count($xml->eventType))
			$this->eventType = (int)$xml->eventType;
		if(!is_null($jsonObject) && isset($jsonObject->eventType))
			$this->eventType = (int)$jsonObject->eventType;
		if(!is_null($xml) && count($xml->title))
			$this->title = (string)$xml->title;
		if(!is_null($jsonObject) && isset($jsonObject->title))
			$this->title = (string)$jsonObject->title;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->categoryIds))
			$this->categoryIds = (string)$xml->categoryIds;
		if(!is_null($jsonObject) && isset($jsonObject->categoryIds))
			$this->categoryIds = (string)$jsonObject->categoryIds;
		if(!is_null($xml) && count($xml->resourceId))
			$this->resourceId = (string)$xml->resourceId;
		if(!is_null($jsonObject) && isset($jsonObject->resourceId))
			$this->resourceId = (string)$jsonObject->resourceId;
		if(!is_null($xml) && count($xml->startTime))
			$this->startTime = (int)$xml->startTime;
		if(!is_null($jsonObject) && isset($jsonObject->startTime))
			$this->startTime = (int)$jsonObject->startTime;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (int)$jsonObject->duration;
		if(!is_null($xml) && count($xml->endTime))
			$this->endTime = (int)$xml->endTime;
		if(!is_null($jsonObject) && isset($jsonObject->endTime))
			$this->endTime = (int)$jsonObject->endTime;
		if(!is_null($xml) && count($xml->recurrence))
			$this->recurrence = (string)$xml->recurrence;
		if(!is_null($jsonObject) && isset($jsonObject->recurrence))
			$this->recurrence = (string)$jsonObject->recurrence;
		if(!is_null($xml) && count($xml->coEditors))
			$this->coEditors = (string)$xml->coEditors;
		if(!is_null($jsonObject) && isset($jsonObject->coEditors))
			$this->coEditors = (string)$jsonObject->coEditors;
		if(!is_null($xml) && count($xml->coPublishers))
			$this->coPublishers = (string)$xml->coPublishers;
		if(!is_null($jsonObject) && isset($jsonObject->coPublishers))
			$this->coPublishers = (string)$jsonObject->coPublishers;
		if(!is_null($xml) && count($xml->eventOrganizerId))
			$this->eventOrganizerId = (string)$xml->eventOrganizerId;
		if(!is_null($jsonObject) && isset($jsonObject->eventOrganizerId))
			$this->eventOrganizerId = (string)$jsonObject->eventOrganizerId;
		if(!is_null($xml) && count($xml->contentOwnerId))
			$this->contentOwnerId = (string)$xml->contentOwnerId;
		if(!is_null($jsonObject) && isset($jsonObject->contentOwnerId))
			$this->contentOwnerId = (string)$jsonObject->contentOwnerId;
		if(!is_null($xml) && count($xml->templateEntryType))
			$this->templateEntryType = (string)$xml->templateEntryType;
		if(!is_null($jsonObject) && isset($jsonObject->templateEntryType))
			$this->templateEntryType = (string)$jsonObject->templateEntryType;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $eventType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $title = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryIds = null;

	/**
	 * ID of the resource specified for the new event.
	 *
	 * @var string
	 */
	public $resourceId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recurrence = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $coEditors = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $coPublishers = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $eventOrganizerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentOwnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templateEntryType = null;


}

