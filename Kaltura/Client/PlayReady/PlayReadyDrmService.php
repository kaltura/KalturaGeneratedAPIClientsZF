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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_PlayReady_PlayReadyDrmService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_PlayReady_Type_PlayReadyContentKey
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function generateKey()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("playready_playreadydrm", "generateKey", "KalturaPlayReadyContentKey", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlayReadyContentKey");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_PlayReady_Type_PlayReadyContentKey");
		return $resultObject;
	}

	/**
	 * @return array
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getContentKeys($keyIds)
	{
		$kparams = array();
		$this->client->addParam($kparams, "keyIds", $keyIds);
		$this->client->queueServiceActionCall("playready_playreadydrm", "getContentKeys", "KalturaPlayReadyContentKey", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaPlayReadyContentKey");
		foreach($resultObject as $resultObjectItem){
			$this->client->validateObjectType($resultObjectItem, "Kaltura_Client_PlayReady_Type_PlayReadyContentKey");
		}
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_PlayReady_Type_PlayReadyContentKey
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getEntryContentKey($entryId, $createIfMissing = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "createIfMissing", $createIfMissing);
		$this->client->queueServiceActionCall("playready_playreadydrm", "getEntryContentKey", "KalturaPlayReadyContentKey", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlayReadyContentKey");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_PlayReady_Type_PlayReadyContentKey");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_PlayReady_Type_PlayReadyLicenseDetails
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getLicenseDetails($keyId, $deviceId, $deviceType, $entryId = null, $referrer = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "keyId", $keyId);
		$this->client->addParam($kparams, "deviceId", $deviceId);
		$this->client->addParam($kparams, "deviceType", $deviceType);
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "referrer", $referrer);
		$this->client->queueServiceActionCall("playready_playreadydrm", "getLicenseDetails", "KalturaPlayReadyLicenseDetails", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPlayReadyLicenseDetails");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_PlayReady_Type_PlayReadyLicenseDetails");
		return $resultObject;
	}
}
