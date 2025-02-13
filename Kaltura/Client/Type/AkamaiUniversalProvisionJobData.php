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
class Kaltura_Client_Type_AkamaiUniversalProvisionJobData extends Kaltura_Client_Type_ProvisionJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaAkamaiUniversalProvisionJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->streamId))
			$this->streamId = (int)$xml->streamId;
		if(!is_null($jsonObject) && isset($jsonObject->streamId))
			$this->streamId = (int)$jsonObject->streamId;
		if(!is_null($xml) && count($xml->systemUserName))
			$this->systemUserName = (string)$xml->systemUserName;
		if(!is_null($jsonObject) && isset($jsonObject->systemUserName))
			$this->systemUserName = (string)$jsonObject->systemUserName;
		if(!is_null($xml) && count($xml->systemPassword))
			$this->systemPassword = (string)$xml->systemPassword;
		if(!is_null($jsonObject) && isset($jsonObject->systemPassword))
			$this->systemPassword = (string)$jsonObject->systemPassword;
		if(!is_null($xml) && count($xml->domainName))
			$this->domainName = (string)$xml->domainName;
		if(!is_null($jsonObject) && isset($jsonObject->domainName))
			$this->domainName = (string)$jsonObject->domainName;
		if(!is_null($xml) && count($xml->dvrEnabled))
			$this->dvrEnabled = (int)$xml->dvrEnabled;
		if(!is_null($jsonObject) && isset($jsonObject->dvrEnabled))
			$this->dvrEnabled = (int)$jsonObject->dvrEnabled;
		if(!is_null($xml) && count($xml->dvrWindow))
			$this->dvrWindow = (int)$xml->dvrWindow;
		if(!is_null($jsonObject) && isset($jsonObject->dvrWindow))
			$this->dvrWindow = (int)$jsonObject->dvrWindow;
		if(!is_null($xml) && count($xml->primaryContact))
			$this->primaryContact = (string)$xml->primaryContact;
		if(!is_null($jsonObject) && isset($jsonObject->primaryContact))
			$this->primaryContact = (string)$jsonObject->primaryContact;
		if(!is_null($xml) && count($xml->secondaryContact))
			$this->secondaryContact = (string)$xml->secondaryContact;
		if(!is_null($jsonObject) && isset($jsonObject->secondaryContact))
			$this->secondaryContact = (string)$jsonObject->secondaryContact;
		if(!is_null($xml) && count($xml->streamType))
			$this->streamType = (string)$xml->streamType;
		if(!is_null($jsonObject) && isset($jsonObject->streamType))
			$this->streamType = (string)$jsonObject->streamType;
		if(!is_null($xml) && count($xml->notificationEmail))
			$this->notificationEmail = (string)$xml->notificationEmail;
		if(!is_null($jsonObject) && isset($jsonObject->notificationEmail))
			$this->notificationEmail = (string)$jsonObject->notificationEmail;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $streamId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemUserName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $domainName = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_DVRStatus
	 */
	public $dvrEnabled = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dvrWindow = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primaryContact = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $secondaryContact = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_AkamaiUniversalStreamType
	 */
	public $streamType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationEmail = null;


}

