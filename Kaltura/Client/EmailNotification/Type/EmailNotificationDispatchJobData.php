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
class Kaltura_Client_EmailNotification_Type_EmailNotificationDispatchJobData extends Kaltura_Client_EventNotification_Type_EventNotificationDispatchJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaEmailNotificationDispatchJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fromEmail))
			$this->fromEmail = (string)$xml->fromEmail;
		if(!is_null($jsonObject) && isset($jsonObject->fromEmail))
			$this->fromEmail = (string)$jsonObject->fromEmail;
		if(!is_null($xml) && count($xml->fromName))
			$this->fromName = (string)$xml->fromName;
		if(!is_null($jsonObject) && isset($jsonObject->fromName))
			$this->fromName = (string)$jsonObject->fromName;
		if(!is_null($xml) && count($xml->to) && !empty($xml->to))
			$this->to = Kaltura_Client_ParseUtils::unmarshalObject($xml->to, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($jsonObject) && isset($jsonObject->to) && !empty($jsonObject->to))
			$this->to = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->to, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($xml) && count($xml->cc) && !empty($xml->cc))
			$this->cc = Kaltura_Client_ParseUtils::unmarshalObject($xml->cc, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($jsonObject) && isset($jsonObject->cc) && !empty($jsonObject->cc))
			$this->cc = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->cc, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($xml) && count($xml->bcc) && !empty($xml->bcc))
			$this->bcc = Kaltura_Client_ParseUtils::unmarshalObject($xml->bcc, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($jsonObject) && isset($jsonObject->bcc) && !empty($jsonObject->bcc))
			$this->bcc = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->bcc, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($xml) && count($xml->replyTo) && !empty($xml->replyTo))
			$this->replyTo = Kaltura_Client_ParseUtils::unmarshalObject($xml->replyTo, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($jsonObject) && isset($jsonObject->replyTo) && !empty($jsonObject->replyTo))
			$this->replyTo = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->replyTo, "KalturaEmailNotificationRecipientJobData");
		if(!is_null($xml) && count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(!is_null($jsonObject) && isset($jsonObject->priority))
			$this->priority = (int)$jsonObject->priority;
		if(!is_null($xml) && count($xml->confirmReadingTo))
			$this->confirmReadingTo = (string)$xml->confirmReadingTo;
		if(!is_null($jsonObject) && isset($jsonObject->confirmReadingTo))
			$this->confirmReadingTo = (string)$jsonObject->confirmReadingTo;
		if(!is_null($xml) && count($xml->hostname))
			$this->hostname = (string)$xml->hostname;
		if(!is_null($jsonObject) && isset($jsonObject->hostname))
			$this->hostname = (string)$jsonObject->hostname;
		if(!is_null($xml) && count($xml->messageID))
			$this->messageID = (string)$xml->messageID;
		if(!is_null($jsonObject) && isset($jsonObject->messageID))
			$this->messageID = (string)$jsonObject->messageID;
		if(!is_null($xml) && count($xml->customHeaders))
		{
			if(empty($xml->customHeaders))
				$this->customHeaders = array();
			else
				$this->customHeaders = Kaltura_Client_ParseUtils::unmarshalArray($xml->customHeaders, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->customHeaders))
		{
			if(empty($jsonObject->customHeaders))
				$this->customHeaders = array();
			else
				$this->customHeaders = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->customHeaders, "KalturaKeyValue");
		}
	}
	/**
	 * Define the email sender email
	 *
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * Define the email sender name
	 *
	 * @var string
	 */
	public $fromName = null;

	/**
	 * Email recipient emails and names, key is mail address and value is the name
	 *
	 * @var Kaltura_Client_EmailNotification_Type_EmailNotificationRecipientJobData
	 */
	public $to;

	/**
	 * Email cc emails and names, key is mail address and value is the name
	 *
	 * @var Kaltura_Client_EmailNotification_Type_EmailNotificationRecipientJobData
	 */
	public $cc;

	/**
	 * Email bcc emails and names, key is mail address and value is the name
	 *
	 * @var Kaltura_Client_EmailNotification_Type_EmailNotificationRecipientJobData
	 */
	public $bcc;

	/**
	 * Email addresses that a replies should be sent to, key is mail address and value is the name
	 *
	 * @var Kaltura_Client_EmailNotification_Type_EmailNotificationRecipientJobData
	 */
	public $replyTo;

	/**
	 * Define the email priority
	 *
	 * @var Kaltura_Client_EmailNotification_Enum_EmailNotificationTemplatePriority
	 */
	public $priority = null;

	/**
	 * Email address that a reading confirmation will be sent to
	 *
	 * @var string
	 */
	public $confirmReadingTo = null;

	/**
	 * Hostname to use in Message-Id and Received headers and as default HELO string. 
	 * 	 If empty, the value returned by SERVER_NAME is used or 'localhost.localdomain'.
	 *
	 * @var string
	 */
	public $hostname = null;

	/**
	 * Sets the message ID to be used in the Message-Id header.
	 * 	 If empty, a unique id will be generated.
	 *
	 * @var string
	 */
	public $messageID = null;

	/**
	 * Adds a e-mail custom header
	 *
	 * @var array of KalturaKeyValue
	 */
	public $customHeaders;


}

