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
class Kaltura_Client_KafkaNotification_Type_KafkaNotificationTemplate extends Kaltura_Client_EventNotification_Type_EventNotificationTemplate
{
	public function getKalturaObjectType()
	{
		return 'KalturaKafkaNotificationTemplate';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->topicName))
			$this->topicName = (string)$xml->topicName;
		if(!is_null($jsonObject) && isset($jsonObject->topicName))
			$this->topicName = (string)$jsonObject->topicName;
		if(!is_null($xml) && count($xml->partitionKey))
			$this->partitionKey = (string)$xml->partitionKey;
		if(!is_null($jsonObject) && isset($jsonObject->partitionKey))
			$this->partitionKey = (string)$jsonObject->partitionKey;
		if(!is_null($xml) && count($xml->messageFormat))
			$this->messageFormat = (int)$xml->messageFormat;
		if(!is_null($jsonObject) && isset($jsonObject->messageFormat))
			$this->messageFormat = (int)$jsonObject->messageFormat;
		if(!is_null($xml) && count($xml->apiObjectType))
			$this->apiObjectType = (string)$xml->apiObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->apiObjectType))
			$this->apiObjectType = (string)$jsonObject->apiObjectType;
		if(!is_null($xml) && count($xml->responseProfileSystemName))
			$this->responseProfileSystemName = (string)$xml->responseProfileSystemName;
		if(!is_null($jsonObject) && isset($jsonObject->responseProfileSystemName))
			$this->responseProfileSystemName = (string)$jsonObject->responseProfileSystemName;
		if(!is_null($xml) && count($xml->requiresPermissions))
			$this->requiresPermissions = (string)$xml->requiresPermissions;
		if(!is_null($jsonObject) && isset($jsonObject->requiresPermissions))
			$this->requiresPermissions = (string)$jsonObject->requiresPermissions;
	}
	/**
	 * Define the content dynamic parameters
	 *
	 * @var string
	 */
	public $topicName = null;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var string
	 */
	public $partitionKey = null;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var Kaltura_Client_KafkaNotification_Enum_KafkaNotificationFormat
	 */
	public $messageFormat = null;

	/**
	 * Kaltura API object type
	 *
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Kaltura response-profile system name
	 *
	 * @var string
	 */
	public $responseProfileSystemName = null;

	/**
	 * Partner permissions needed to trigger the notification (comma seperated list of permissions)
	 *
	 * @var string
	 */
	public $requiresPermissions = null;


}

