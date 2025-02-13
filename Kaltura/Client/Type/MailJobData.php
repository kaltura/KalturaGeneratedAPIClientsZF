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
class Kaltura_Client_Type_MailJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaMailJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->mailType))
			$this->mailType = (string)$xml->mailType;
		if(!is_null($jsonObject) && isset($jsonObject->mailType))
			$this->mailType = (string)$jsonObject->mailType;
		if(!is_null($xml) && count($xml->mailPriority))
			$this->mailPriority = (int)$xml->mailPriority;
		if(!is_null($jsonObject) && isset($jsonObject->mailPriority))
			$this->mailPriority = (int)$jsonObject->mailPriority;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->recipientName))
			$this->recipientName = (string)$xml->recipientName;
		if(!is_null($jsonObject) && isset($jsonObject->recipientName))
			$this->recipientName = (string)$jsonObject->recipientName;
		if(!is_null($xml) && count($xml->recipientEmail))
			$this->recipientEmail = (string)$xml->recipientEmail;
		if(!is_null($jsonObject) && isset($jsonObject->recipientEmail))
			$this->recipientEmail = (string)$jsonObject->recipientEmail;
		if(!is_null($xml) && count($xml->recipientId))
			$this->recipientId = (int)$xml->recipientId;
		if(!is_null($jsonObject) && isset($jsonObject->recipientId))
			$this->recipientId = (int)$jsonObject->recipientId;
		if(!is_null($xml) && count($xml->fromName))
			$this->fromName = (string)$xml->fromName;
		if(!is_null($jsonObject) && isset($jsonObject->fromName))
			$this->fromName = (string)$jsonObject->fromName;
		if(!is_null($xml) && count($xml->fromEmail))
			$this->fromEmail = (string)$xml->fromEmail;
		if(!is_null($jsonObject) && isset($jsonObject->fromEmail))
			$this->fromEmail = (string)$jsonObject->fromEmail;
		if(!is_null($xml) && count($xml->bodyParams))
			$this->bodyParams = (string)$xml->bodyParams;
		if(!is_null($jsonObject) && isset($jsonObject->bodyParams))
			$this->bodyParams = (string)$jsonObject->bodyParams;
		if(!is_null($xml) && count($xml->subjectParams))
			$this->subjectParams = (string)$xml->subjectParams;
		if(!is_null($jsonObject) && isset($jsonObject->subjectParams))
			$this->subjectParams = (string)$jsonObject->subjectParams;
		if(!is_null($xml) && count($xml->dynamicEmailContents) && !empty($xml->dynamicEmailContents))
			$this->dynamicEmailContents = Kaltura_Client_ParseUtils::unmarshalObject($xml->dynamicEmailContents, "KalturaDynamicEmailContents");
		if(!is_null($jsonObject) && isset($jsonObject->dynamicEmailContents) && !empty($jsonObject->dynamicEmailContents))
			$this->dynamicEmailContents = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dynamicEmailContents, "KalturaDynamicEmailContents");
		if(!is_null($xml) && count($xml->templatePath))
			$this->templatePath = (string)$xml->templatePath;
		if(!is_null($jsonObject) && isset($jsonObject->templatePath))
			$this->templatePath = (string)$jsonObject->templatePath;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->campaignId))
			$this->campaignId = (int)$xml->campaignId;
		if(!is_null($jsonObject) && isset($jsonObject->campaignId))
			$this->campaignId = (int)$jsonObject->campaignId;
		if(!is_null($xml) && count($xml->minSendDate))
			$this->minSendDate = (int)$xml->minSendDate;
		if(!is_null($jsonObject) && isset($jsonObject->minSendDate))
			$this->minSendDate = (int)$jsonObject->minSendDate;
		if(!is_null($xml) && count($xml->isHtml))
		{
			if(!empty($xml->isHtml) && ((int) $xml->isHtml === 1 || strtolower((string)$xml->isHtml) === 'true'))
				$this->isHtml = true;
			else
				$this->isHtml = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isHtml))
		{
			if(!empty($jsonObject->isHtml) && ((int) $jsonObject->isHtml === 1 || strtolower((string)$jsonObject->isHtml) === 'true'))
				$this->isHtml = true;
			else
				$this->isHtml = false;
		}
		if(!is_null($xml) && count($xml->separator))
			$this->separator = (string)$xml->separator;
		if(!is_null($jsonObject) && isset($jsonObject->separator))
			$this->separator = (string)$jsonObject->separator;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_MailType
	 */
	public $mailType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mailPriority = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_MailJobStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $recipientEmail = null;

	/**
	 * kuserId
	 *
	 * @var int
	 */
	public $recipientId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $bodyParams = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subjectParams = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_DynamicEmailContents
	 */
	public $dynamicEmailContents;

	/**
	 * 
	 *
	 * @var string
	 */
	public $templatePath = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_LanguageCode
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $campaignId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $minSendDate = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isHtml = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $separator = null;


}

