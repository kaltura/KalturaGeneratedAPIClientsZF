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
class Kaltura_Client_Type_AkamaiProvisionJobData extends Kaltura_Client_Type_ProvisionJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaAkamaiProvisionJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->wsdlUsername))
			$this->wsdlUsername = (string)$xml->wsdlUsername;
		if(!is_null($jsonObject) && isset($jsonObject->wsdlUsername))
			$this->wsdlUsername = (string)$jsonObject->wsdlUsername;
		if(!is_null($xml) && count($xml->wsdlPassword))
			$this->wsdlPassword = (string)$xml->wsdlPassword;
		if(!is_null($jsonObject) && isset($jsonObject->wsdlPassword))
			$this->wsdlPassword = (string)$jsonObject->wsdlPassword;
		if(!is_null($xml) && count($xml->cpcode))
			$this->cpcode = (string)$xml->cpcode;
		if(!is_null($jsonObject) && isset($jsonObject->cpcode))
			$this->cpcode = (string)$jsonObject->cpcode;
		if(!is_null($xml) && count($xml->emailId))
			$this->emailId = (string)$xml->emailId;
		if(!is_null($jsonObject) && isset($jsonObject->emailId))
			$this->emailId = (string)$jsonObject->emailId;
		if(!is_null($xml) && count($xml->primaryContact))
			$this->primaryContact = (string)$xml->primaryContact;
		if(!is_null($jsonObject) && isset($jsonObject->primaryContact))
			$this->primaryContact = (string)$jsonObject->primaryContact;
		if(!is_null($xml) && count($xml->secondaryContact))
			$this->secondaryContact = (string)$xml->secondaryContact;
		if(!is_null($jsonObject) && isset($jsonObject->secondaryContact))
			$this->secondaryContact = (string)$jsonObject->secondaryContact;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $wsdlUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $wsdlPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $cpcode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $emailId = null;

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


}

