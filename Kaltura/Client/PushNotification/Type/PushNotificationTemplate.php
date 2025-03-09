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
class Kaltura_Client_PushNotification_Type_PushNotificationTemplate extends Kaltura_Client_EventNotification_Type_EventNotificationTemplate
{
	public function getKalturaObjectType()
	{
		return 'KalturaPushNotificationTemplate';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->queueNameParameters))
		{
			if(empty($xml->queueNameParameters))
				$this->queueNameParameters = array();
			else
				$this->queueNameParameters = Kaltura_Client_ParseUtils::unmarshalArray($xml->queueNameParameters, "KalturaPushEventNotificationParameter");
		}
		if(!is_null($jsonObject) && isset($jsonObject->queueNameParameters))
		{
			if(empty($jsonObject->queueNameParameters))
				$this->queueNameParameters = array();
			else
				$this->queueNameParameters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->queueNameParameters, "KalturaPushEventNotificationParameter");
		}
		if(!is_null($xml) && count($xml->queueKeyParameters))
		{
			if(empty($xml->queueKeyParameters))
				$this->queueKeyParameters = array();
			else
				$this->queueKeyParameters = Kaltura_Client_ParseUtils::unmarshalArray($xml->queueKeyParameters, "KalturaPushEventNotificationParameter");
		}
		if(!is_null($jsonObject) && isset($jsonObject->queueKeyParameters))
		{
			if(empty($jsonObject->queueKeyParameters))
				$this->queueKeyParameters = array();
			else
				$this->queueKeyParameters = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->queueKeyParameters, "KalturaPushEventNotificationParameter");
		}
		if(!is_null($xml) && count($xml->apiObjectType))
			$this->apiObjectType = (string)$xml->apiObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->apiObjectType))
			$this->apiObjectType = (string)$jsonObject->apiObjectType;
		if(!is_null($xml) && count($xml->objectFormat))
			$this->objectFormat = (int)$xml->objectFormat;
		if(!is_null($jsonObject) && isset($jsonObject->objectFormat))
			$this->objectFormat = (int)$jsonObject->objectFormat;
		if(!is_null($xml) && count($xml->responseProfileId))
			$this->responseProfileId = (int)$xml->responseProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->responseProfileId))
			$this->responseProfileId = (int)$jsonObject->responseProfileId;
	}
	/**
	 * Define the content dynamic parameters
	 *
	 * @var Kaltura_Client_PushNotification_Type_PushEventNotificationParameter[]
	 */
	public $queueNameParameters;

	/**
	 * Define the content dynamic parameters
	 *
	 * @var Kaltura_Client_PushNotification_Type_PushEventNotificationParameter[]
	 */
	public $queueKeyParameters;

	/**
	 * Kaltura API object type
	 *
	 * @var string
	 */
	public $apiObjectType = null;

	/**
	 * Kaltura Object format
	 *
	 * @var Kaltura_Client_Enum_ResponseType
	 */
	public $objectFormat = null;

	/**
	 * Kaltura response-profile id
	 *
	 * @var int
	 */
	public $responseProfileId = null;


}

