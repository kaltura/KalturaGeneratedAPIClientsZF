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
class Kaltura_Client_ScheduledTask_Type_MailNotificationObjectTask extends Kaltura_Client_ScheduledTask_Type_ObjectTask
{
	public function getKalturaObjectType()
	{
		return 'KalturaMailNotificationObjectTask';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->mailTo))
			$this->mailTo = (string)$xml->mailTo;
		if(!is_null($jsonObject) && isset($jsonObject->mailTo))
			$this->mailTo = (string)$jsonObject->mailTo;
		if(!is_null($xml) && count($xml->sender))
			$this->sender = (string)$xml->sender;
		if(!is_null($jsonObject) && isset($jsonObject->sender))
			$this->sender = (string)$jsonObject->sender;
		if(!is_null($xml) && count($xml->subject))
			$this->subject = (string)$xml->subject;
		if(!is_null($jsonObject) && isset($jsonObject->subject))
			$this->subject = (string)$jsonObject->subject;
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->footer))
			$this->footer = (string)$xml->footer;
		if(!is_null($jsonObject) && isset($jsonObject->footer))
			$this->footer = (string)$jsonObject->footer;
		if(!is_null($xml) && count($xml->link))
			$this->link = (string)$xml->link;
		if(!is_null($jsonObject) && isset($jsonObject->link))
			$this->link = (string)$jsonObject->link;
		if(!is_null($xml) && count($xml->sendToUsers))
		{
			if(!empty($xml->sendToUsers) && ((int) $xml->sendToUsers === 1 || strtolower((string)$xml->sendToUsers) === 'true'))
				$this->sendToUsers = true;
			else
				$this->sendToUsers = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->sendToUsers))
		{
			if(!empty($jsonObject->sendToUsers) && ((int) $jsonObject->sendToUsers === 1 || strtolower((string)$jsonObject->sendToUsers) === 'true'))
				$this->sendToUsers = true;
			else
				$this->sendToUsers = false;
		}
	}
	/**
	 * The mail to send the notification to
	 *
	 * @var string
	 */
	public $mailTo = null;

	/**
	 * The sender in the mail
	 *
	 * @var string
	 */
	public $sender = null;

	/**
	 * The subject of the entry
	 *
	 * @var string
	 */
	public $subject = null;

	/**
	 * The message to send in the notification mail
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * The footer of the message to send in the notification mail
	 *
	 * @var string
	 */
	public $footer = null;

	/**
	 * The basic link for the KMC site
	 *
	 * @var string
	 */
	public $link = null;

	/**
	 * Send the mail to each user
	 *
	 * @var bool
	 */
	public $sendToUsers = null;


}

