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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class Kaltura_Client_LiveChannelService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_LiveChannel
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_LiveChannel $liveChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveChannel", $liveChannel->toParams());
		$this->client->queueServiceActionCall("livechannel", "add", "KalturaLiveChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannel");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveChannel");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function appendRecording($entryId, $assetId, $mediaServerIndex, Kaltura_Client_Type_DataCenterContentResource $resource, $duration, $isLastChunk = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "assetId", $assetId);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->addParam($kparams, "isLastChunk", $isLastChunk);
		$this->client->queueServiceActionCall("livechannel", "appendRecording", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function createRecordedEntry($entryId, $mediaServerIndex, $liveEntryStatus)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "liveEntryStatus", $liveEntryStatus);
		$this->client->queueServiceActionCall("livechannel", "createRecordedEntry", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveEntry");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_LiveChannel
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "get", "KalturaLiveChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannel");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveChannel");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function isLive($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("livechannel", "isLive", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveChannelListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_LiveChannelFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livechannel", "list", "KalturaLiveChannelListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannelListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveChannelListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function registerMediaServer($entryId, $hostname, $mediaServerIndex, $applicationName = null, $liveEntryStatus = 1, $shouldCreateRecordedEntry = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "applicationName", $applicationName);
		$this->client->addParam($kparams, "liveEntryStatus", $liveEntryStatus);
		$this->client->addParam($kparams, "shouldCreateRecordedEntry", $shouldCreateRecordedEntry);
		$this->client->queueServiceActionCall("livechannel", "registerMediaServer", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function setRecordedContent($entryId, $mediaServerIndex, Kaltura_Client_Type_DataCenterContentResource $resource, $duration, $recordedEntryId = null, $flavorParamsId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "resource", $resource->toParams());
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->addParam($kparams, "recordedEntryId", $recordedEntryId);
		$this->client->addParam($kparams, "flavorParamsId", $flavorParamsId);
		$this->client->queueServiceActionCall("livechannel", "setRecordedContent", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function unregisterMediaServer($entryId, $hostname, $mediaServerIndex)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->queueServiceActionCall("livechannel", "unregisterMediaServer", "KalturaLiveEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveChannel
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($id, Kaltura_Client_Type_LiveChannel $liveChannel)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "liveChannel", $liveChannel->toParams());
		$this->client->queueServiceActionCall("livechannel", "update", "KalturaLiveChannel", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveChannel");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveChannel");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function validateRegisteredMediaServers($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livechannel", "validateRegisteredMediaServers", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
