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
class Kaltura_Client_Type_StatsEvent extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaStatsEvent';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->clientVer))
			$this->clientVer = (string)$xml->clientVer;
		if(!is_null($jsonObject) && isset($jsonObject->clientVer))
			$this->clientVer = (string)$jsonObject->clientVer;
		if(!is_null($xml) && count($xml->eventType))
			$this->eventType = (int)$xml->eventType;
		if(!is_null($jsonObject) && isset($jsonObject->eventType))
			$this->eventType = (int)$jsonObject->eventType;
		if(!is_null($xml) && count($xml->eventTimestamp))
			$this->eventTimestamp = (float)$xml->eventTimestamp;
		if(!is_null($jsonObject) && isset($jsonObject->eventTimestamp))
			$this->eventTimestamp = (float)$jsonObject->eventTimestamp;
		if(!is_null($xml) && count($xml->sessionId))
			$this->sessionId = (string)$xml->sessionId;
		if(!is_null($jsonObject) && isset($jsonObject->sessionId))
			$this->sessionId = (string)$jsonObject->sessionId;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->uniqueViewer))
			$this->uniqueViewer = (string)$xml->uniqueViewer;
		if(!is_null($jsonObject) && isset($jsonObject->uniqueViewer))
			$this->uniqueViewer = (string)$jsonObject->uniqueViewer;
		if(!is_null($xml) && count($xml->widgetId))
			$this->widgetId = (string)$xml->widgetId;
		if(!is_null($jsonObject) && isset($jsonObject->widgetId))
			$this->widgetId = (string)$jsonObject->widgetId;
		if(!is_null($xml) && count($xml->uiconfId))
			$this->uiconfId = (int)$xml->uiconfId;
		if(!is_null($jsonObject) && isset($jsonObject->uiconfId))
			$this->uiconfId = (int)$jsonObject->uiconfId;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->currentPoint))
			$this->currentPoint = (int)$xml->currentPoint;
		if(!is_null($jsonObject) && isset($jsonObject->currentPoint))
			$this->currentPoint = (int)$jsonObject->currentPoint;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (int)$jsonObject->duration;
		if(!is_null($xml) && count($xml->userIp))
			$this->userIp = (string)$xml->userIp;
		if(!is_null($jsonObject) && isset($jsonObject->userIp))
			$this->userIp = (string)$jsonObject->userIp;
		if(!is_null($xml) && count($xml->processDuration))
			$this->processDuration = (int)$xml->processDuration;
		if(!is_null($jsonObject) && isset($jsonObject->processDuration))
			$this->processDuration = (int)$jsonObject->processDuration;
		if(!is_null($xml) && count($xml->controlId))
			$this->controlId = (string)$xml->controlId;
		if(!is_null($jsonObject) && isset($jsonObject->controlId))
			$this->controlId = (string)$jsonObject->controlId;
		if(!is_null($xml) && count($xml->seek))
		{
			if(!empty($xml->seek) && ((int) $xml->seek === 1 || strtolower((string)$xml->seek) === 'true'))
				$this->seek = true;
			else
				$this->seek = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->seek))
		{
			if(!empty($jsonObject->seek) && ((int) $jsonObject->seek === 1 || strtolower((string)$jsonObject->seek) === 'true'))
				$this->seek = true;
			else
				$this->seek = false;
		}
		if(!is_null($xml) && count($xml->newPoint))
			$this->newPoint = (int)$xml->newPoint;
		if(!is_null($jsonObject) && isset($jsonObject->newPoint))
			$this->newPoint = (int)$jsonObject->newPoint;
		if(!is_null($xml) && count($xml->referrer))
			$this->referrer = (string)$xml->referrer;
		if(!is_null($jsonObject) && isset($jsonObject->referrer))
			$this->referrer = (string)$jsonObject->referrer;
		if(!is_null($xml) && count($xml->isFirstInSession))
		{
			if(!empty($xml->isFirstInSession) && ((int) $xml->isFirstInSession === 1 || strtolower((string)$xml->isFirstInSession) === 'true'))
				$this->isFirstInSession = true;
			else
				$this->isFirstInSession = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isFirstInSession))
		{
			if(!empty($jsonObject->isFirstInSession) && ((int) $jsonObject->isFirstInSession === 1 || strtolower((string)$jsonObject->isFirstInSession) === 'true'))
				$this->isFirstInSession = true;
			else
				$this->isFirstInSession = false;
		}
		if(!is_null($xml) && count($xml->applicationId))
			$this->applicationId = (string)$xml->applicationId;
		if(!is_null($jsonObject) && isset($jsonObject->applicationId))
			$this->applicationId = (string)$jsonObject->applicationId;
		if(!is_null($xml) && count($xml->contextId))
			$this->contextId = (int)$xml->contextId;
		if(!is_null($jsonObject) && isset($jsonObject->contextId))
			$this->contextId = (int)$jsonObject->contextId;
		if(!is_null($xml) && count($xml->featureType))
			$this->featureType = (int)$xml->featureType;
		if(!is_null($jsonObject) && isset($jsonObject->featureType))
			$this->featureType = (int)$jsonObject->featureType;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $clientVer = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_StatsEventType
	 */
	public $eventType = null;

	/**
	 * the client's timestamp of this event
	 *
	 * @var float
	 */
	public $eventTimestamp = null;

	/**
	 * a unique string generated by the client that will represent the client-side session: the primary component will pass it on to other components that sprout from it
	 *
	 * @var string
	 */
	public $sessionId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * the UV cookie - creates in the operational system and should be passed on ofr every event
	 *
	 * @var string
	 */
	public $uniqueViewer = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $widgetId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiconfId = null;

	/**
	 * the partner's user id
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * the timestamp along the video when the event happend
	 *
	 * @var int
	 */
	public $currentPoint = null;

	/**
	 * the duration of the video in milliseconds - will make it much faster than quering the db for each entry
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * will be retrieved from the request of the user
	 *
	 * @var string
	 * @readonly
	 */
	public $userIp = null;

	/**
	 * the time in milliseconds the event took
	 *
	 * @var int
	 */
	public $processDuration = null;

	/**
	 * the id of the GUI control - will be used in the future to better understand what the user clicked
	 *
	 * @var string
	 */
	public $controlId = null;

	/**
	 * true if the user ever used seek in this session
	 *
	 * @var bool
	 */
	public $seek = null;

	/**
	 * timestamp of the new point on the timeline of the video after the user seeks
	 *
	 * @var int
	 */
	public $newPoint = null;

	/**
	 * the referrer of the client
	 *
	 * @var string
	 */
	public $referrer = null;

	/**
	 * will indicate if the event is thrown for the first video in the session
	 *
	 * @var bool
	 */
	public $isFirstInSession = null;

	/**
	 * kaltura application name
	 *
	 * @var string
	 */
	public $applicationId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $contextId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_StatsFeatureType
	 */
	public $featureType = null;


}

