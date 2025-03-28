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
class Kaltura_Client_HttpNotification_Type_HttpNotification extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaHttpNotification';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->object) && !empty($xml->object))
			$this->object = Kaltura_Client_ParseUtils::unmarshalObject($xml->object, "KalturaObjectBase");
		if(!is_null($jsonObject) && isset($jsonObject->object) && !empty($jsonObject->object))
			$this->object = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->object, "KalturaObjectBase");
		if(!is_null($xml) && count($xml->eventObjectType))
			$this->eventObjectType = (string)$xml->eventObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->eventObjectType))
			$this->eventObjectType = (string)$jsonObject->eventObjectType;
		if(!is_null($xml) && count($xml->eventNotificationJobId))
			$this->eventNotificationJobId = (string)$xml->eventNotificationJobId;
		if(!is_null($jsonObject) && isset($jsonObject->eventNotificationJobId))
			$this->eventNotificationJobId = (string)$jsonObject->eventNotificationJobId;
		if(!is_null($xml) && count($xml->templateId))
			$this->templateId = (int)$xml->templateId;
		if(!is_null($jsonObject) && isset($jsonObject->templateId))
			$this->templateId = (int)$jsonObject->templateId;
		if(!is_null($xml) && count($xml->templateName))
			$this->templateName = (string)$xml->templateName;
		if(!is_null($jsonObject) && isset($jsonObject->templateName))
			$this->templateName = (string)$jsonObject->templateName;
		if(!is_null($xml) && count($xml->templateSystemName))
			$this->templateSystemName = (string)$xml->templateSystemName;
		if(!is_null($jsonObject) && isset($jsonObject->templateSystemName))
			$this->templateSystemName = (string)$jsonObject->templateSystemName;
		if(!is_null($xml) && count($xml->eventType))
			$this->eventType = (string)$xml->eventType;
		if(!is_null($jsonObject) && isset($jsonObject->eventType))
			$this->eventType = (string)$jsonObject->eventType;
	}
	/**
	 * Object that triggered the notification
	 *
	 * @var KalturaObjectBase
	 */
	public $object;

	/**
	 * Object type that triggered the notification
	 *
	 * @var Kaltura_Client_EventNotification_Enum_EventNotificationEventObjectType
	 */
	public $eventObjectType = null;

	/**
	 * ID of the batch job that execute the notification
	 *
	 * @var bigint
	 */
	public $eventNotificationJobId = null;

	/**
	 * ID of the template that triggered the notification
	 *
	 * @var int
	 */
	public $templateId = null;

	/**
	 * Name of the template that triggered the notification
	 *
	 * @var string
	 */
	public $templateName = null;

	/**
	 * System name of the template that triggered the notification
	 *
	 * @var string
	 */
	public $templateSystemName = null;

	/**
	 * Ecent type that triggered the notification
	 *
	 * @var Kaltura_Client_EventNotification_Enum_EventNotificationEventType
	 */
	public $eventType = null;


}

