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
class Kaltura_Client_Sip_PexipService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return string
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function generateSipUrl($entryId, $regenerate = false, $sourceType = 1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "regenerate", $regenerate);
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("sip_pexip", "generateSipUrl", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function handleIncomingCall()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("sip_pexip", "handleIncomingCall", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return array
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listRooms($offset = 0, $pageSize = 500, $activeOnly = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "offset", $offset);
		$this->client->addParam($kparams, "pageSize", $pageSize);
		$this->client->addParam($kparams, "activeOnly", $activeOnly);
		$this->client->queueServiceActionCall("sip_pexip", "listRooms", "KalturaStringValue", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaStringValue");
		foreach($resultObject as $resultObjectItem){
			$this->client->validateObjectType($resultObjectItem, "Kaltura_Client_Type_StringValue");
		}
		return $resultObject;
	}
}
