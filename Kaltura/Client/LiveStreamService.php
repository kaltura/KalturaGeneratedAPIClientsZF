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
// Copyright (C) 2006-2018  Kaltura Inc.
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
class Kaltura_Client_LiveStreamService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_LiveStreamEntry $liveStreamEntry, $sourceType = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->addParam($kparams, "sourceType", $sourceType);
		$this->client->queueServiceActionCall("livestream", "add", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addLiveStreamPushPublishConfiguration($entryId, $protocol, $url = null, Kaltura_Client_Type_LiveStreamConfiguration $liveStreamConfiguration = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "protocol", $protocol);
		$this->client->addParam($kparams, "url", $url);
		if ($liveStreamConfiguration !== null)
			$this->client->addParam($kparams, "liveStreamConfiguration", $liveStreamConfiguration->toParams());
		$this->client->queueServiceActionCall("livestream", "addLiveStreamPushPublishConfiguration", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
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
		$this->client->queueServiceActionCall("livestream", "appendRecording", "KalturaLiveEntry", $kparams);
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
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function authenticate($entryId, $token, $hostname = null, $mediaServerIndex = null, $applicationName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "token", $token);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "applicationName", $applicationName);
		$this->client->queueServiceActionCall("livestream", "authenticate", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function createPeriodicSyncPoints($entryId, $interval, $duration)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "interval", $interval);
		$this->client->addParam($kparams, "duration", $duration);
		$this->client->queueServiceActionCall("livestream", "createPeriodicSyncPoints", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
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
		$this->client->queueServiceActionCall("livestream", "createRecordedEntry", "KalturaLiveEntry", $kparams);
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
	function delete($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($entryId, $version = -1)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "version", $version);
		$this->client->queueServiceActionCall("livestream", "get", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * @return bool
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function isLive($id, $protocol)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "protocol", $protocol);
		$this->client->queueServiceActionCall("livestream", "isLive", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveStreamListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_LiveStreamEntryFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("livestream", "list", "KalturaLiveStreamListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function regenerateStreamToken($entryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->queueServiceActionCall("livestream", "regenerateStreamToken", "KalturaLiveEntry", $kparams);
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
	function registerMediaServer($entryId, $hostname, $mediaServerIndex, $applicationName = null, $liveEntryStatus = 1, $shouldCreateRecordedEntry = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "hostname", $hostname);
		$this->client->addParam($kparams, "mediaServerIndex", $mediaServerIndex);
		$this->client->addParam($kparams, "applicationName", $applicationName);
		$this->client->addParam($kparams, "liveEntryStatus", $liveEntryStatus);
		$this->client->addParam($kparams, "shouldCreateRecordedEntry", $shouldCreateRecordedEntry);
		$this->client->queueServiceActionCall("livestream", "registerMediaServer", "KalturaLiveEntry", $kparams);
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
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function removeLiveStreamPushPublishConfiguration($entryId, $protocol)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "protocol", $protocol);
		$this->client->queueServiceActionCall("livestream", "removeLiveStreamPushPublishConfiguration", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
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
		$this->client->queueServiceActionCall("livestream", "setRecordedContent", "KalturaLiveEntry", $kparams);
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
		$this->client->queueServiceActionCall("livestream", "unregisterMediaServer", "KalturaLiveEntry", $kparams);
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
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($entryId, Kaltura_Client_Type_LiveStreamEntry $liveStreamEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "liveStreamEntry", $liveStreamEntry->toParams());
		$this->client->queueServiceActionCall("livestream", "update", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateOfflineThumbnailFromUrl($entryId, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailFromUrl", "KalturaLiveStreamEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_LiveStreamEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateOfflineThumbnailJpeg($entryId, $fileData)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		$this->client->queueServiceActionCall("livestream", "updateOfflineThumbnailJpeg",  "KalturaLiveStreamEntry", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaLiveStreamEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_LiveStreamEntry");
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
		$this->client->queueServiceActionCall("livestream", "validateRegisteredMediaServers", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
