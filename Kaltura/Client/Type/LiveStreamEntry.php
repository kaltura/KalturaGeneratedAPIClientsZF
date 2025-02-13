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
class Kaltura_Client_Type_LiveStreamEntry extends Kaltura_Client_Type_LiveEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveStreamEntry';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->streamRemoteId))
			$this->streamRemoteId = (string)$xml->streamRemoteId;
		if(!is_null($jsonObject) && isset($jsonObject->streamRemoteId))
			$this->streamRemoteId = (string)$jsonObject->streamRemoteId;
		if(!is_null($xml) && count($xml->streamRemoteBackupId))
			$this->streamRemoteBackupId = (string)$xml->streamRemoteBackupId;
		if(!is_null($jsonObject) && isset($jsonObject->streamRemoteBackupId))
			$this->streamRemoteBackupId = (string)$jsonObject->streamRemoteBackupId;
		if(!is_null($xml) && count($xml->bitrates))
		{
			if(empty($xml->bitrates))
				$this->bitrates = array();
			else
				$this->bitrates = Kaltura_Client_ParseUtils::unmarshalArray($xml->bitrates, "KalturaLiveStreamBitrate");
		}
		if(!is_null($jsonObject) && isset($jsonObject->bitrates))
		{
			if(empty($jsonObject->bitrates))
				$this->bitrates = array();
			else
				$this->bitrates = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->bitrates, "KalturaLiveStreamBitrate");
		}
		if(!is_null($xml) && count($xml->primaryBroadcastingUrl))
			$this->primaryBroadcastingUrl = (string)$xml->primaryBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->primaryBroadcastingUrl))
			$this->primaryBroadcastingUrl = (string)$jsonObject->primaryBroadcastingUrl;
		if(!is_null($xml) && count($xml->secondaryBroadcastingUrl))
			$this->secondaryBroadcastingUrl = (string)$xml->secondaryBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->secondaryBroadcastingUrl))
			$this->secondaryBroadcastingUrl = (string)$jsonObject->secondaryBroadcastingUrl;
		if(!is_null($xml) && count($xml->primarySecuredBroadcastingUrl))
			$this->primarySecuredBroadcastingUrl = (string)$xml->primarySecuredBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->primarySecuredBroadcastingUrl))
			$this->primarySecuredBroadcastingUrl = (string)$jsonObject->primarySecuredBroadcastingUrl;
		if(!is_null($xml) && count($xml->secondarySecuredBroadcastingUrl))
			$this->secondarySecuredBroadcastingUrl = (string)$xml->secondarySecuredBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->secondarySecuredBroadcastingUrl))
			$this->secondarySecuredBroadcastingUrl = (string)$jsonObject->secondarySecuredBroadcastingUrl;
		if(!is_null($xml) && count($xml->primaryRtspBroadcastingUrl))
			$this->primaryRtspBroadcastingUrl = (string)$xml->primaryRtspBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->primaryRtspBroadcastingUrl))
			$this->primaryRtspBroadcastingUrl = (string)$jsonObject->primaryRtspBroadcastingUrl;
		if(!is_null($xml) && count($xml->secondaryRtspBroadcastingUrl))
			$this->secondaryRtspBroadcastingUrl = (string)$xml->secondaryRtspBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->secondaryRtspBroadcastingUrl))
			$this->secondaryRtspBroadcastingUrl = (string)$jsonObject->secondaryRtspBroadcastingUrl;
		if(!is_null($xml) && count($xml->primarySrtBroadcastingUrl))
			$this->primarySrtBroadcastingUrl = (string)$xml->primarySrtBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->primarySrtBroadcastingUrl))
			$this->primarySrtBroadcastingUrl = (string)$jsonObject->primarySrtBroadcastingUrl;
		if(!is_null($xml) && count($xml->primarySrtStreamId))
			$this->primarySrtStreamId = (string)$xml->primarySrtStreamId;
		if(!is_null($jsonObject) && isset($jsonObject->primarySrtStreamId))
			$this->primarySrtStreamId = (string)$jsonObject->primarySrtStreamId;
		if(!is_null($xml) && count($xml->secondarySrtBroadcastingUrl))
			$this->secondarySrtBroadcastingUrl = (string)$xml->secondarySrtBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->secondarySrtBroadcastingUrl))
			$this->secondarySrtBroadcastingUrl = (string)$jsonObject->secondarySrtBroadcastingUrl;
		if(!is_null($xml) && count($xml->secondarySrtStreamId))
			$this->secondarySrtStreamId = (string)$xml->secondarySrtStreamId;
		if(!is_null($jsonObject) && isset($jsonObject->secondarySrtStreamId))
			$this->secondarySrtStreamId = (string)$jsonObject->secondarySrtStreamId;
		if(!is_null($xml) && count($xml->streamName))
			$this->streamName = (string)$xml->streamName;
		if(!is_null($jsonObject) && isset($jsonObject->streamName))
			$this->streamName = (string)$jsonObject->streamName;
		if(!is_null($xml) && count($xml->streamUrl))
			$this->streamUrl = (string)$xml->streamUrl;
		if(!is_null($jsonObject) && isset($jsonObject->streamUrl))
			$this->streamUrl = (string)$jsonObject->streamUrl;
		if(!is_null($xml) && count($xml->hlsStreamUrl))
			$this->hlsStreamUrl = (string)$xml->hlsStreamUrl;
		if(!is_null($jsonObject) && isset($jsonObject->hlsStreamUrl))
			$this->hlsStreamUrl = (string)$jsonObject->hlsStreamUrl;
		if(!is_null($xml) && count($xml->urlManager))
			$this->urlManager = (string)$xml->urlManager;
		if(!is_null($jsonObject) && isset($jsonObject->urlManager))
			$this->urlManager = (string)$jsonObject->urlManager;
		if(!is_null($xml) && count($xml->encodingIP1))
			$this->encodingIP1 = (string)$xml->encodingIP1;
		if(!is_null($jsonObject) && isset($jsonObject->encodingIP1))
			$this->encodingIP1 = (string)$jsonObject->encodingIP1;
		if(!is_null($xml) && count($xml->encodingIP2))
			$this->encodingIP2 = (string)$xml->encodingIP2;
		if(!is_null($jsonObject) && isset($jsonObject->encodingIP2))
			$this->encodingIP2 = (string)$jsonObject->encodingIP2;
		if(!is_null($xml) && count($xml->streamPassword))
			$this->streamPassword = (string)$xml->streamPassword;
		if(!is_null($jsonObject) && isset($jsonObject->streamPassword))
			$this->streamPassword = (string)$jsonObject->streamPassword;
		if(!is_null($xml) && count($xml->streamUsername))
			$this->streamUsername = (string)$xml->streamUsername;
		if(!is_null($jsonObject) && isset($jsonObject->streamUsername))
			$this->streamUsername = (string)$jsonObject->streamUsername;
		if(!is_null($xml) && count($xml->srtPass))
			$this->srtPass = (string)$xml->srtPass;
		if(!is_null($jsonObject) && isset($jsonObject->srtPass))
			$this->srtPass = (string)$jsonObject->srtPass;
		if(!is_null($xml) && count($xml->primaryServerNodeId))
			$this->primaryServerNodeId = (int)$xml->primaryServerNodeId;
		if(!is_null($jsonObject) && isset($jsonObject->primaryServerNodeId))
			$this->primaryServerNodeId = (int)$jsonObject->primaryServerNodeId;
		if(!is_null($xml) && count($xml->sipToken))
			$this->sipToken = (string)$xml->sipToken;
		if(!is_null($jsonObject) && isset($jsonObject->sipToken))
			$this->sipToken = (string)$jsonObject->sipToken;
		if(!is_null($xml) && count($xml->sipSourceType))
			$this->sipSourceType = (int)$xml->sipSourceType;
		if(!is_null($jsonObject) && isset($jsonObject->sipSourceType))
			$this->sipSourceType = (int)$jsonObject->sipSourceType;
	}
	/**
	 * The stream id as provided by the provider
	 *
	 * @var string
	 * @readonly
	 */
	public $streamRemoteId = null;

	/**
	 * The backup stream id as provided by the provider
	 *
	 * @var string
	 * @readonly
	 */
	public $streamRemoteBackupId = null;

	/**
	 * Array of supported bitrates
	 *
	 * @var array of KalturaLiveStreamBitrate
	 */
	public $bitrates;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primaryBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondaryBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primarySecuredBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondarySecuredBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primaryRtspBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondaryRtspBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primarySrtBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primarySrtStreamId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondarySrtBroadcastingUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondarySrtStreamId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $streamName = null;

	/**
	 * The stream url
	 *
	 * @var string
	 */
	public $streamUrl = null;

	/**
	 * HLS URL - URL for live stream playback on mobile device
	 *
	 * @var string
	 */
	public $hlsStreamUrl = null;

	/**
	 * URL Manager to handle the live stream URL (for instance, add token)
	 *
	 * @var string
	 */
	public $urlManager = null;

	/**
	 * The broadcast primary ip
	 *
	 * @var string
	 */
	public $encodingIP1 = null;

	/**
	 * The broadcast secondary ip
	 *
	 * @var string
	 */
	public $encodingIP2 = null;

	/**
	 * The broadcast password
	 *
	 * @var string
	 */
	public $streamPassword = null;

	/**
	 * The broadcast username
	 *
	 * @var string
	 * @readonly
	 */
	public $streamUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srtPass = null;

	/**
	 * The Streams primary server node id
	 *
	 * @var int
	 * @readonly
	 */
	public $primaryServerNodeId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $sipToken = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Sip_Enum_SipSourceType
	 * @readonly
	 */
	public $sipSourceType = null;


}

