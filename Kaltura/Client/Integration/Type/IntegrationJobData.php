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
class Kaltura_Client_Integration_Type_IntegrationJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaIntegrationJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->callbackNotificationUrl))
			$this->callbackNotificationUrl = (string)$xml->callbackNotificationUrl;
		if(!is_null($jsonObject) && isset($jsonObject->callbackNotificationUrl))
			$this->callbackNotificationUrl = (string)$jsonObject->callbackNotificationUrl;
		if(!is_null($xml) && count($xml->providerType))
			$this->providerType = (string)$xml->providerType;
		if(!is_null($jsonObject) && isset($jsonObject->providerType))
			$this->providerType = (string)$jsonObject->providerType;
		if(!is_null($xml) && count($xml->providerData) && !empty($xml->providerData))
			$this->providerData = Kaltura_Client_ParseUtils::unmarshalObject($xml->providerData, "KalturaIntegrationJobProviderData");
		if(!is_null($jsonObject) && isset($jsonObject->providerData) && !empty($jsonObject->providerData))
			$this->providerData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->providerData, "KalturaIntegrationJobProviderData");
		if(!is_null($xml) && count($xml->triggerType))
			$this->triggerType = (string)$xml->triggerType;
		if(!is_null($jsonObject) && isset($jsonObject->triggerType))
			$this->triggerType = (string)$jsonObject->triggerType;
		if(!is_null($xml) && count($xml->triggerData) && !empty($xml->triggerData))
			$this->triggerData = Kaltura_Client_ParseUtils::unmarshalObject($xml->triggerData, "KalturaIntegrationJobTriggerData");
		if(!is_null($jsonObject) && isset($jsonObject->triggerData) && !empty($jsonObject->triggerData))
			$this->triggerData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->triggerData, "KalturaIntegrationJobTriggerData");
	}
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $callbackNotificationUrl = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Integration_Enum_IntegrationProviderType
	 */
	public $providerType = null;

	/**
	 * Additional data that relevant for the provider only
	 *
	 * @var Kaltura_Client_Integration_Type_IntegrationJobProviderData
	 */
	public $providerData;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Integration_Enum_IntegrationTriggerType
	 */
	public $triggerType = null;

	/**
	 * Additional data that relevant for the trigger only
	 *
	 * @var Kaltura_Client_Integration_Type_IntegrationJobTriggerData
	 */
	public $triggerData;


}

