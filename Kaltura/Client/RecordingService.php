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
// Copyright (C) 2006-2017  Kaltura Inc.
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
class Kaltura_Client_RecordingService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	function add(Kaltura_Client_Type_Recording $recording)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "recording", $recording->toParams());
		$this->client->queueServiceActionCall("recording", "add", "KalturaRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	function cancel($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "cancel", "KalturaRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	function delete($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "delete", "KalturaRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	function get($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "get", "KalturaRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}

	function listAction(Kaltura_Client_Type_RecordingFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("recording", "list", "KalturaRecordingListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecordingListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_RecordingListResponse");
		return $resultObject;
	}

	function protect($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("recording", "protect", "KalturaRecording", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRecording");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Recording");
		return $resultObject;
	}
}
