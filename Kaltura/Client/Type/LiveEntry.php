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
abstract class Kaltura_Client_Type_LiveEntry extends Kaltura_Client_Type_MediaEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveEntry';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->offlineMessage))
			$this->offlineMessage = (string)$xml->offlineMessage;
		if(!is_null($jsonObject) && isset($jsonObject->offlineMessage))
			$this->offlineMessage = (string)$jsonObject->offlineMessage;
		if(!is_null($xml) && count($xml->recordStatus))
			$this->recordStatus = (int)$xml->recordStatus;
		if(!is_null($jsonObject) && isset($jsonObject->recordStatus))
			$this->recordStatus = (int)$jsonObject->recordStatus;
		if(!is_null($xml) && count($xml->dvrStatus))
			$this->dvrStatus = (int)$xml->dvrStatus;
		if(!is_null($jsonObject) && isset($jsonObject->dvrStatus))
			$this->dvrStatus = (int)$jsonObject->dvrStatus;
		if(!is_null($xml) && count($xml->dvrWindow))
			$this->dvrWindow = (int)$xml->dvrWindow;
		if(!is_null($jsonObject) && isset($jsonObject->dvrWindow))
			$this->dvrWindow = (int)$jsonObject->dvrWindow;
		if(!is_null($xml) && count($xml->lastElapsedRecordingTime))
			$this->lastElapsedRecordingTime = (int)$xml->lastElapsedRecordingTime;
		if(!is_null($jsonObject) && isset($jsonObject->lastElapsedRecordingTime))
			$this->lastElapsedRecordingTime = (int)$jsonObject->lastElapsedRecordingTime;
		if(!is_null($xml) && count($xml->liveStreamConfigurations))
		{
			if(empty($xml->liveStreamConfigurations))
				$this->liveStreamConfigurations = array();
			else
				$this->liveStreamConfigurations = Kaltura_Client_ParseUtils::unmarshalArray($xml->liveStreamConfigurations, "KalturaLiveStreamConfiguration");
		}
		if(!is_null($jsonObject) && isset($jsonObject->liveStreamConfigurations))
		{
			if(empty($jsonObject->liveStreamConfigurations))
				$this->liveStreamConfigurations = array();
			else
				$this->liveStreamConfigurations = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->liveStreamConfigurations, "KalturaLiveStreamConfiguration");
		}
		if(!is_null($xml) && count($xml->recordedEntryId))
			$this->recordedEntryId = (string)$xml->recordedEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->recordedEntryId))
			$this->recordedEntryId = (string)$jsonObject->recordedEntryId;
		if(!is_null($xml) && count($xml->pushPublishEnabled))
			$this->pushPublishEnabled = (int)$xml->pushPublishEnabled;
		if(!is_null($jsonObject) && isset($jsonObject->pushPublishEnabled))
			$this->pushPublishEnabled = (int)$jsonObject->pushPublishEnabled;
		if(!is_null($xml) && count($xml->publishConfigurations))
		{
			if(empty($xml->publishConfigurations))
				$this->publishConfigurations = array();
			else
				$this->publishConfigurations = Kaltura_Client_ParseUtils::unmarshalArray($xml->publishConfigurations, "KalturaLiveStreamPushPublishConfiguration");
		}
		if(!is_null($jsonObject) && isset($jsonObject->publishConfigurations))
		{
			if(empty($jsonObject->publishConfigurations))
				$this->publishConfigurations = array();
			else
				$this->publishConfigurations = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->publishConfigurations, "KalturaLiveStreamPushPublishConfiguration");
		}
		if(!is_null($xml) && count($xml->firstBroadcast))
			$this->firstBroadcast = (int)$xml->firstBroadcast;
		if(!is_null($jsonObject) && isset($jsonObject->firstBroadcast))
			$this->firstBroadcast = (int)$jsonObject->firstBroadcast;
		if(!is_null($xml) && count($xml->lastBroadcast))
			$this->lastBroadcast = (int)$xml->lastBroadcast;
		if(!is_null($jsonObject) && isset($jsonObject->lastBroadcast))
			$this->lastBroadcast = (int)$jsonObject->lastBroadcast;
		if(!is_null($xml) && count($xml->currentBroadcastStartTime))
			$this->currentBroadcastStartTime = (float)$xml->currentBroadcastStartTime;
		if(!is_null($jsonObject) && isset($jsonObject->currentBroadcastStartTime))
			$this->currentBroadcastStartTime = (float)$jsonObject->currentBroadcastStartTime;
		if(!is_null($xml) && count($xml->recordingOptions) && !empty($xml->recordingOptions))
			$this->recordingOptions = Kaltura_Client_ParseUtils::unmarshalObject($xml->recordingOptions, "KalturaLiveEntryRecordingOptions");
		if(!is_null($jsonObject) && isset($jsonObject->recordingOptions) && !empty($jsonObject->recordingOptions))
			$this->recordingOptions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->recordingOptions, "KalturaLiveEntryRecordingOptions");
		if(!is_null($xml) && count($xml->liveStatus))
			$this->liveStatus = (int)$xml->liveStatus;
		if(!is_null($jsonObject) && isset($jsonObject->liveStatus))
			$this->liveStatus = (int)$jsonObject->liveStatus;
		if(!is_null($xml) && count($xml->segmentDuration))
			$this->segmentDuration = (int)$xml->segmentDuration;
		if(!is_null($jsonObject) && isset($jsonObject->segmentDuration))
			$this->segmentDuration = (int)$jsonObject->segmentDuration;
		if(!is_null($xml) && count($xml->explicitLive))
			$this->explicitLive = (int)$xml->explicitLive;
		if(!is_null($jsonObject) && isset($jsonObject->explicitLive))
			$this->explicitLive = (int)$jsonObject->explicitLive;
		if(!is_null($xml) && count($xml->viewMode))
			$this->viewMode = (int)$xml->viewMode;
		if(!is_null($jsonObject) && isset($jsonObject->viewMode))
			$this->viewMode = (int)$jsonObject->viewMode;
		if(!is_null($xml) && count($xml->recordingStatus))
			$this->recordingStatus = (int)$xml->recordingStatus;
		if(!is_null($jsonObject) && isset($jsonObject->recordingStatus))
			$this->recordingStatus = (int)$jsonObject->recordingStatus;
		if(!is_null($xml) && count($xml->lastBroadcastEndTime))
			$this->lastBroadcastEndTime = (int)$xml->lastBroadcastEndTime;
		if(!is_null($jsonObject) && isset($jsonObject->lastBroadcastEndTime))
			$this->lastBroadcastEndTime = (int)$jsonObject->lastBroadcastEndTime;
		if(!is_null($xml) && count($xml->broadcastTime))
			$this->broadcastTime = (int)$xml->broadcastTime;
		if(!is_null($jsonObject) && isset($jsonObject->broadcastTime))
			$this->broadcastTime = (int)$jsonObject->broadcastTime;
	}
	/**
	 * The message to be presented when the stream is offline
	 *
	 * @var string
	 */
	public $offlineMessage = null;

	/**
	 * Recording Status Enabled/Disabled
	 *
	 * @var Kaltura_Client_Enum_RecordStatus
	 */
	public $recordStatus = null;

	/**
	 * DVR Status Enabled/Disabled
	 *
	 * @var Kaltura_Client_Enum_DVRStatus
	 */
	public $dvrStatus = null;

	/**
	 * Window of time which the DVR allows for backwards scrubbing (in minutes)
	 *
	 * @var int
	 */
	public $dvrWindow = null;

	/**
	 * Elapsed recording time (in msec) up to the point where the live stream was last stopped (unpublished).
	 *
	 * @var int
	 */
	public $lastElapsedRecordingTime = null;

	/**
	 * Array of key value protocol->live stream url objects
	 *
	 * @var array of KalturaLiveStreamConfiguration
	 */
	public $liveStreamConfigurations;

	/**
	 * Recorded entry id
	 *
	 * @var string
	 */
	public $recordedEntryId = null;

	/**
	 * Flag denoting whether entry should be published by the media server
	 *
	 * @var Kaltura_Client_Enum_LivePublishStatus
	 */
	public $pushPublishEnabled = null;

	/**
	 * Array of publish configurations
	 *
	 * @var array of KalturaLiveStreamPushPublishConfiguration
	 */
	public $publishConfigurations;

	/**
	 * The first time in which the entry was broadcast
	 *
	 * @var int
	 * @readonly
	 */
	public $firstBroadcast = null;

	/**
	 * The Last time in which the entry was broadcast
	 *
	 * @var int
	 * @readonly
	 */
	public $lastBroadcast = null;

	/**
	 * The time (unix timestamp in milliseconds) in which the entry broadcast started or 0 when the entry is off the air
	 *
	 * @var float
	 */
	public $currentBroadcastStartTime = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_LiveEntryRecordingOptions
	 */
	public $recordingOptions;

	/**
	 * the status of the entry of type EntryServerNodeStatus
	 *
	 * @var Kaltura_Client_Enum_EntryServerNodeStatus
	 * @readonly
	 */
	public $liveStatus = null;

	/**
	 * The chunk duration value in milliseconds
	 *
	 * @var int
	 */
	public $segmentDuration = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $explicitLive = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ViewMode
	 */
	public $viewMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_RecordingStatus
	 */
	public $recordingStatus = null;

	/**
	 * The time the last broadcast finished.
	 *
	 * @var int
	 * @readonly
	 */
	public $lastBroadcastEndTime = null;

	/**
	 * The time when the entry was first live with view_all
	 *
	 * @var int
	 */
	public $broadcastTime = null;


}

