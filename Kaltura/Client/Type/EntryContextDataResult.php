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
class Kaltura_Client_Type_EntryContextDataResult extends Kaltura_Client_Type_ContextDataResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaEntryContextDataResult';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->isSiteRestricted))
		{
			if(!empty($xml->isSiteRestricted) && ((int) $xml->isSiteRestricted === 1 || strtolower((string)$xml->isSiteRestricted) === 'true'))
				$this->isSiteRestricted = true;
			else
				$this->isSiteRestricted = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSiteRestricted))
		{
			if(!empty($jsonObject->isSiteRestricted) && ((int) $jsonObject->isSiteRestricted === 1 || strtolower((string)$jsonObject->isSiteRestricted) === 'true'))
				$this->isSiteRestricted = true;
			else
				$this->isSiteRestricted = false;
		}
		if(!is_null($xml) && count($xml->isCountryRestricted))
		{
			if(!empty($xml->isCountryRestricted) && ((int) $xml->isCountryRestricted === 1 || strtolower((string)$xml->isCountryRestricted) === 'true'))
				$this->isCountryRestricted = true;
			else
				$this->isCountryRestricted = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isCountryRestricted))
		{
			if(!empty($jsonObject->isCountryRestricted) && ((int) $jsonObject->isCountryRestricted === 1 || strtolower((string)$jsonObject->isCountryRestricted) === 'true'))
				$this->isCountryRestricted = true;
			else
				$this->isCountryRestricted = false;
		}
		if(!is_null($xml) && count($xml->isSessionRestricted))
		{
			if(!empty($xml->isSessionRestricted) && ((int) $xml->isSessionRestricted === 1 || strtolower((string)$xml->isSessionRestricted) === 'true'))
				$this->isSessionRestricted = true;
			else
				$this->isSessionRestricted = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSessionRestricted))
		{
			if(!empty($jsonObject->isSessionRestricted) && ((int) $jsonObject->isSessionRestricted === 1 || strtolower((string)$jsonObject->isSessionRestricted) === 'true'))
				$this->isSessionRestricted = true;
			else
				$this->isSessionRestricted = false;
		}
		if(!is_null($xml) && count($xml->isIpAddressRestricted))
		{
			if(!empty($xml->isIpAddressRestricted) && ((int) $xml->isIpAddressRestricted === 1 || strtolower((string)$xml->isIpAddressRestricted) === 'true'))
				$this->isIpAddressRestricted = true;
			else
				$this->isIpAddressRestricted = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isIpAddressRestricted))
		{
			if(!empty($jsonObject->isIpAddressRestricted) && ((int) $jsonObject->isIpAddressRestricted === 1 || strtolower((string)$jsonObject->isIpAddressRestricted) === 'true'))
				$this->isIpAddressRestricted = true;
			else
				$this->isIpAddressRestricted = false;
		}
		if(!is_null($xml) && count($xml->isUserAgentRestricted))
		{
			if(!empty($xml->isUserAgentRestricted) && ((int) $xml->isUserAgentRestricted === 1 || strtolower((string)$xml->isUserAgentRestricted) === 'true'))
				$this->isUserAgentRestricted = true;
			else
				$this->isUserAgentRestricted = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isUserAgentRestricted))
		{
			if(!empty($jsonObject->isUserAgentRestricted) && ((int) $jsonObject->isUserAgentRestricted === 1 || strtolower((string)$jsonObject->isUserAgentRestricted) === 'true'))
				$this->isUserAgentRestricted = true;
			else
				$this->isUserAgentRestricted = false;
		}
		if(!is_null($xml) && count($xml->previewLength))
			$this->previewLength = (int)$xml->previewLength;
		if(!is_null($jsonObject) && isset($jsonObject->previewLength))
			$this->previewLength = (int)$jsonObject->previewLength;
		if(!is_null($xml) && count($xml->isScheduledNow))
		{
			if(!empty($xml->isScheduledNow) && ((int) $xml->isScheduledNow === 1 || strtolower((string)$xml->isScheduledNow) === 'true'))
				$this->isScheduledNow = true;
			else
				$this->isScheduledNow = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isScheduledNow))
		{
			if(!empty($jsonObject->isScheduledNow) && ((int) $jsonObject->isScheduledNow === 1 || strtolower((string)$jsonObject->isScheduledNow) === 'true'))
				$this->isScheduledNow = true;
			else
				$this->isScheduledNow = false;
		}
		if(!is_null($xml) && count($xml->isAdmin))
		{
			if(!empty($xml->isAdmin) && ((int) $xml->isAdmin === 1 || strtolower((string)$xml->isAdmin) === 'true'))
				$this->isAdmin = true;
			else
				$this->isAdmin = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isAdmin))
		{
			if(!empty($jsonObject->isAdmin) && ((int) $jsonObject->isAdmin === 1 || strtolower((string)$jsonObject->isAdmin) === 'true'))
				$this->isAdmin = true;
			else
				$this->isAdmin = false;
		}
		if(!is_null($xml) && count($xml->streamerType))
			$this->streamerType = (string)$xml->streamerType;
		if(!is_null($jsonObject) && isset($jsonObject->streamerType))
			$this->streamerType = (string)$jsonObject->streamerType;
		if(!is_null($xml) && count($xml->mediaProtocol))
			$this->mediaProtocol = (string)$xml->mediaProtocol;
		if(!is_null($jsonObject) && isset($jsonObject->mediaProtocol))
			$this->mediaProtocol = (string)$jsonObject->mediaProtocol;
		if(!is_null($xml) && count($xml->storageProfilesXML))
			$this->storageProfilesXML = (string)$xml->storageProfilesXML;
		if(!is_null($jsonObject) && isset($jsonObject->storageProfilesXML))
			$this->storageProfilesXML = (string)$jsonObject->storageProfilesXML;
		if(!is_null($xml) && count($xml->accessControlMessages))
		{
			if(empty($xml->accessControlMessages))
				$this->accessControlMessages = array();
			else
				$this->accessControlMessages = Kaltura_Client_ParseUtils::unmarshalArray($xml->accessControlMessages, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->accessControlMessages))
		{
			if(empty($jsonObject->accessControlMessages))
				$this->accessControlMessages = array();
			else
				$this->accessControlMessages = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->accessControlMessages, "KalturaString");
		}
		if(!is_null($xml) && count($xml->accessControlActions))
		{
			if(empty($xml->accessControlActions))
				$this->accessControlActions = array();
			else
				$this->accessControlActions = Kaltura_Client_ParseUtils::unmarshalArray($xml->accessControlActions, "KalturaRuleAction");
		}
		if(!is_null($jsonObject) && isset($jsonObject->accessControlActions))
		{
			if(empty($jsonObject->accessControlActions))
				$this->accessControlActions = array();
			else
				$this->accessControlActions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->accessControlActions, "KalturaRuleAction");
		}
		if(!is_null($xml) && count($xml->flavorAssets))
		{
			if(empty($xml->flavorAssets))
				$this->flavorAssets = array();
			else
				$this->flavorAssets = Kaltura_Client_ParseUtils::unmarshalArray($xml->flavorAssets, "KalturaFlavorAsset");
		}
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssets))
		{
			if(empty($jsonObject->flavorAssets))
				$this->flavorAssets = array();
			else
				$this->flavorAssets = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->flavorAssets, "KalturaFlavorAsset");
		}
		if(!is_null($xml) && count($xml->msDuration))
			$this->msDuration = (int)$xml->msDuration;
		if(!is_null($jsonObject) && isset($jsonObject->msDuration))
			$this->msDuration = (int)$jsonObject->msDuration;
		if(!is_null($xml) && count($xml->pluginData))
		{
			if(empty($xml->pluginData))
				$this->pluginData = array();
			else
				$this->pluginData = Kaltura_Client_ParseUtils::unmarshalMap($xml->pluginData, "KalturaPluginData");
		}
		if(!is_null($jsonObject) && isset($jsonObject->pluginData))
		{
			if(empty($jsonObject->pluginData))
				$this->pluginData = array();
			else
				$this->pluginData = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->pluginData, "KalturaPluginData");
		}
	}
	/**
	 * 
	 *
	 * @var bool
	 */
	public $isSiteRestricted = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isCountryRestricted = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isSessionRestricted = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isIpAddressRestricted = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isUserAgentRestricted = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $previewLength = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isScheduledNow = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isAdmin = null;

	/**
	 * http/rtmp/hdnetwork
	 *
	 * @var string
	 */
	public $streamerType = null;

	/**
	 * http/https, rtmp/rtmpe
	 *
	 * @var string
	 */
	public $mediaProtocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageProfilesXML = null;

	/**
	 * Array of messages as received from the access control rules that invalidated
	 *
	 * @var array of KalturaString
	 */
	public $accessControlMessages;

	/**
	 * Array of actions as received from the access control rules that invalidated
	 *
	 * @var array of KalturaRuleAction
	 */
	public $accessControlActions;

	/**
	 * Array of allowed flavor assets according to access control limitations and requested tags
	 *
	 * @var array of KalturaFlavorAsset
	 */
	public $flavorAssets;

	/**
	 * The duration of the entry in milliseconds
	 *
	 * @var int
	 */
	public $msDuration = null;

	/**
	 * Array of allowed flavor assets according to access control limitations and requested tags
	 *
	 * @var map
	 */
	public $pluginData;


}

