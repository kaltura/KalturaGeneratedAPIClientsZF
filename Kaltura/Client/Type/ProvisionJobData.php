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
class Kaltura_Client_Type_ProvisionJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaProvisionJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->streamID))
			$this->streamID = (string)$xml->streamID;
		if(!is_null($jsonObject) && isset($jsonObject->streamID))
			$this->streamID = (string)$jsonObject->streamID;
		if(!is_null($xml) && count($xml->backupStreamID))
			$this->backupStreamID = (string)$xml->backupStreamID;
		if(!is_null($jsonObject) && isset($jsonObject->backupStreamID))
			$this->backupStreamID = (string)$jsonObject->backupStreamID;
		if(!is_null($xml) && count($xml->rtmp))
			$this->rtmp = (string)$xml->rtmp;
		if(!is_null($jsonObject) && isset($jsonObject->rtmp))
			$this->rtmp = (string)$jsonObject->rtmp;
		if(!is_null($xml) && count($xml->encoderIP))
			$this->encoderIP = (string)$xml->encoderIP;
		if(!is_null($jsonObject) && isset($jsonObject->encoderIP))
			$this->encoderIP = (string)$jsonObject->encoderIP;
		if(!is_null($xml) && count($xml->backupEncoderIP))
			$this->backupEncoderIP = (string)$xml->backupEncoderIP;
		if(!is_null($jsonObject) && isset($jsonObject->backupEncoderIP))
			$this->backupEncoderIP = (string)$jsonObject->backupEncoderIP;
		if(!is_null($xml) && count($xml->encoderPassword))
			$this->encoderPassword = (string)$xml->encoderPassword;
		if(!is_null($jsonObject) && isset($jsonObject->encoderPassword))
			$this->encoderPassword = (string)$jsonObject->encoderPassword;
		if(!is_null($xml) && count($xml->encoderUsername))
			$this->encoderUsername = (string)$xml->encoderUsername;
		if(!is_null($jsonObject) && isset($jsonObject->encoderUsername))
			$this->encoderUsername = (string)$jsonObject->encoderUsername;
		if(!is_null($xml) && count($xml->endDate))
			$this->endDate = (int)$xml->endDate;
		if(!is_null($jsonObject) && isset($jsonObject->endDate))
			$this->endDate = (int)$jsonObject->endDate;
		if(!is_null($xml) && count($xml->returnVal))
			$this->returnVal = (string)$xml->returnVal;
		if(!is_null($jsonObject) && isset($jsonObject->returnVal))
			$this->returnVal = (string)$jsonObject->returnVal;
		if(!is_null($xml) && count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(!is_null($jsonObject) && isset($jsonObject->mediaType))
			$this->mediaType = (int)$jsonObject->mediaType;
		if(!is_null($xml) && count($xml->primaryBroadcastingUrl))
			$this->primaryBroadcastingUrl = (string)$xml->primaryBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->primaryBroadcastingUrl))
			$this->primaryBroadcastingUrl = (string)$jsonObject->primaryBroadcastingUrl;
		if(!is_null($xml) && count($xml->secondaryBroadcastingUrl))
			$this->secondaryBroadcastingUrl = (string)$xml->secondaryBroadcastingUrl;
		if(!is_null($jsonObject) && isset($jsonObject->secondaryBroadcastingUrl))
			$this->secondaryBroadcastingUrl = (string)$jsonObject->secondaryBroadcastingUrl;
		if(!is_null($xml) && count($xml->streamName))
			$this->streamName = (string)$xml->streamName;
		if(!is_null($jsonObject) && isset($jsonObject->streamName))
			$this->streamName = (string)$jsonObject->streamName;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $streamID = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $backupStreamID = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $rtmp = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $encoderIP = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $backupEncoderIP = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $encoderPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $encoderUsername = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endDate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $returnVal = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mediaType = null;

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
	public $streamName = null;


}

