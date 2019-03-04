<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2019  Kaltura Inc.
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
class Kaltura_Client_ConfMaps_ConfMapsService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_ConfMaps_Type_ConfMaps
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_ConfMaps_Type_ConfMaps $map)
	{
		$kparams = array();
		$this->client->addParam($kparams, "map", $map->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "add", "KalturaConfMaps", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMaps");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_ConfMaps_Type_ConfMaps");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_ConfMaps_Type_ConfMaps
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get(Kaltura_Client_ConfMaps_Type_ConfMapsFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "get", "KalturaConfMaps", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMaps");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_ConfMaps_Type_ConfMaps");
		return $resultObject;
	}

	/**
	 * @return array
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getMapNames()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("confmaps_confmaps", "getMapNames", "KalturaString", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaString");
		foreach($resultObject as $resultObjectItem){
			$this->client->validateObjectType($resultObjectItem, "Kaltura_Client_Type_String");
		}
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_ConfMaps_Type_ConfMapsListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_ConfMaps_Type_ConfMapsFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "list", "KalturaConfMapsListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMapsListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_ConfMaps_Type_ConfMapsListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_ConfMaps_Type_ConfMaps
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update(Kaltura_Client_ConfMaps_Type_ConfMaps $map)
	{
		$kparams = array();
		$this->client->addParam($kparams, "map", $map->toParams());
		$this->client->queueServiceActionCall("confmaps_confmaps", "update", "KalturaConfMaps", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaConfMaps");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_ConfMaps_Type_ConfMaps");
		return $resultObject;
	}
}
