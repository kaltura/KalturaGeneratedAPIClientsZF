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
// Copyright (C) 2006-2015  Kaltura Inc.
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
class Kaltura_Client_CuePoint_CuePointService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	function add(Kaltura_Client_CuePoint_Type_CuePoint $cuePoint)
	{
		$kparams = array();
		$this->client->addParam($kparams, "cuePoint", $cuePoint->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "add", "KalturaCuePoint", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePoint");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_CuePoint_Type_CuePoint");
		return $resultObject;
	}

	function addFromBulk($fileData)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "addFromBulk",  "KalturaCuePointListResponse", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePointListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_CuePoint_Type_CuePointListResponse");
		return $resultObject;
	}

	function serveBulk(Kaltura_Client_CuePoint_Type_CuePointFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw new Kaltura_Client_ClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall('cuepoint_cuepoint', 'serveBulk', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "get", "KalturaCuePoint", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePoint");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_CuePoint_Type_CuePoint");
		return $resultObject;
	}

	function listAction(Kaltura_Client_CuePoint_Type_CuePointFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "list", "KalturaCuePointListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePointListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_CuePoint_Type_CuePointListResponse");
		return $resultObject;
	}

	function count(Kaltura_Client_CuePoint_Type_CuePointFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "count", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = (int)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	function update($id, Kaltura_Client_CuePoint_Type_CuePoint $cuePoint)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "cuePoint", $cuePoint->toParams());
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "update", "KalturaCuePoint", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCuePoint");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_CuePoint_Type_CuePoint");
		return $resultObject;
	}

	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("cuepoint_cuepoint", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
	}
}
