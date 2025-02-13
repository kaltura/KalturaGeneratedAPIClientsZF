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
class Kaltura_Client_HttpNotification_Type_HttpNotificationDispatchJobData extends Kaltura_Client_EventNotification_Type_EventNotificationDispatchJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaHttpNotificationDispatchJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->url))
			$this->url = (string)$xml->url;
		if(!is_null($jsonObject) && isset($jsonObject->url))
			$this->url = (string)$jsonObject->url;
		if(!is_null($xml) && count($xml->method))
			$this->method = (int)$xml->method;
		if(!is_null($jsonObject) && isset($jsonObject->method))
			$this->method = (int)$jsonObject->method;
		if(!is_null($xml) && count($xml->contentType))
			$this->contentType = (string)$xml->contentType;
		if(!is_null($jsonObject) && isset($jsonObject->contentType))
			$this->contentType = (string)$jsonObject->contentType;
		if(!is_null($xml) && count($xml->data))
			$this->data = (string)$xml->data;
		if(!is_null($jsonObject) && isset($jsonObject->data))
			$this->data = (string)$jsonObject->data;
		if(!is_null($xml) && count($xml->timeout))
			$this->timeout = (int)$xml->timeout;
		if(!is_null($jsonObject) && isset($jsonObject->timeout))
			$this->timeout = (int)$jsonObject->timeout;
		if(!is_null($xml) && count($xml->connectTimeout))
			$this->connectTimeout = (int)$xml->connectTimeout;
		if(!is_null($jsonObject) && isset($jsonObject->connectTimeout))
			$this->connectTimeout = (int)$jsonObject->connectTimeout;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->authenticationMethod))
			$this->authenticationMethod = (int)$xml->authenticationMethod;
		if(!is_null($jsonObject) && isset($jsonObject->authenticationMethod))
			$this->authenticationMethod = (int)$jsonObject->authenticationMethod;
		if(!is_null($xml) && count($xml->sslVersion))
			$this->sslVersion = (int)$xml->sslVersion;
		if(!is_null($jsonObject) && isset($jsonObject->sslVersion))
			$this->sslVersion = (int)$jsonObject->sslVersion;
		if(!is_null($xml) && count($xml->sslCertificate))
			$this->sslCertificate = (string)$xml->sslCertificate;
		if(!is_null($jsonObject) && isset($jsonObject->sslCertificate))
			$this->sslCertificate = (string)$jsonObject->sslCertificate;
		if(!is_null($xml) && count($xml->sslCertificateType))
			$this->sslCertificateType = (string)$xml->sslCertificateType;
		if(!is_null($jsonObject) && isset($jsonObject->sslCertificateType))
			$this->sslCertificateType = (string)$jsonObject->sslCertificateType;
		if(!is_null($xml) && count($xml->sslCertificatePassword))
			$this->sslCertificatePassword = (string)$xml->sslCertificatePassword;
		if(!is_null($jsonObject) && isset($jsonObject->sslCertificatePassword))
			$this->sslCertificatePassword = (string)$jsonObject->sslCertificatePassword;
		if(!is_null($xml) && count($xml->sslEngine))
			$this->sslEngine = (string)$xml->sslEngine;
		if(!is_null($jsonObject) && isset($jsonObject->sslEngine))
			$this->sslEngine = (string)$jsonObject->sslEngine;
		if(!is_null($xml) && count($xml->sslEngineDefault))
			$this->sslEngineDefault = (string)$xml->sslEngineDefault;
		if(!is_null($jsonObject) && isset($jsonObject->sslEngineDefault))
			$this->sslEngineDefault = (string)$jsonObject->sslEngineDefault;
		if(!is_null($xml) && count($xml->sslKeyType))
			$this->sslKeyType = (string)$xml->sslKeyType;
		if(!is_null($jsonObject) && isset($jsonObject->sslKeyType))
			$this->sslKeyType = (string)$jsonObject->sslKeyType;
		if(!is_null($xml) && count($xml->sslKey))
			$this->sslKey = (string)$xml->sslKey;
		if(!is_null($jsonObject) && isset($jsonObject->sslKey))
			$this->sslKey = (string)$jsonObject->sslKey;
		if(!is_null($xml) && count($xml->sslKeyPassword))
			$this->sslKeyPassword = (string)$xml->sslKeyPassword;
		if(!is_null($jsonObject) && isset($jsonObject->sslKeyPassword))
			$this->sslKeyPassword = (string)$jsonObject->sslKeyPassword;
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
		if(!is_null($xml) && count($xml->signSecret))
			$this->signSecret = (string)$xml->signSecret;
		if(!is_null($jsonObject) && isset($jsonObject->signSecret))
			$this->signSecret = (string)$jsonObject->signSecret;
	}
	/**
	 * Remote server URL
	 *
	 * @var string
	 */
	public $url = null;

	/**
	 * Request method.
	 *
	 * @var Kaltura_Client_HttpNotification_Enum_HttpNotificationMethod
	 */
	public $method = null;

	/**
	 * The type of the data to send.
	 *
	 * @var string
	 */
	public $contentType = null;

	/**
	 * Data to send.
	 *
	 * @var string
	 */
	public $data = null;

	/**
	 * The maximum number of seconds to allow cURL functions to execute.
	 *
	 * @var int
	 */
	public $timeout = null;

	/**
	 * The number of seconds to wait while trying to connect.
	 * 	 Must be larger than zero.
	 *
	 * @var int
	 */
	public $connectTimeout = null;

	/**
	 * A username to use for the connection.
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * A password to use for the connection.
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * The HTTP authentication method to use.
	 *
	 * @var Kaltura_Client_HttpNotification_Enum_HttpNotificationAuthenticationMethod
	 */
	public $authenticationMethod = null;

	/**
	 * The SSL version (2 or 3) to use.
	 * 	 By default PHP will try to determine this itself, although in some cases this must be set manually.
	 *
	 * @var Kaltura_Client_HttpNotification_Enum_HttpNotificationSslVersion
	 */
	public $sslVersion = null;

	/**
	 * SSL certificate to verify the peer with.
	 *
	 * @var string
	 */
	public $sslCertificate = null;

	/**
	 * The format of the certificate.
	 *
	 * @var Kaltura_Client_HttpNotification_Enum_HttpNotificationCertificateType
	 */
	public $sslCertificateType = null;

	/**
	 * The password required to use the certificate.
	 *
	 * @var string
	 */
	public $sslCertificatePassword = null;

	/**
	 * The identifier for the crypto engine of the private SSL key specified in ssl key.
	 *
	 * @var string
	 */
	public $sslEngine = null;

	/**
	 * The identifier for the crypto engine used for asymmetric crypto operations.
	 *
	 * @var string
	 */
	public $sslEngineDefault = null;

	/**
	 * The key type of the private SSL key specified in ssl key - PEM / DER / ENG.
	 *
	 * @var Kaltura_Client_HttpNotification_Enum_HttpNotificationSslKeyType
	 */
	public $sslKeyType = null;

	/**
	 * Private SSL key.
	 *
	 * @var string
	 */
	public $sslKey = null;

	/**
	 * The secret password needed to use the private SSL key specified in ssl key.
	 *
	 * @var string
	 */
	public $sslKeyPassword = null;

	/**
	 * Adds a e-mail custom header
	 *
	 * @var array of KalturaKeyValue
	 */
	public $customHeaders;

	/**
	 * The secret to sign the notification with
	 *
	 * @var string
	 */
	public $signSecret = null;


}

