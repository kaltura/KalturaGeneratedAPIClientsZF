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
class Kaltura_Client_Schedule_ScheduleEventService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleEvent
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Schedule_Type_ScheduleEvent $scheduleEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "add", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleEvent");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addFromBulkUpload($fileData, Kaltura_Client_ScheduleBulkUpload_Type_BulkUploadICalJobData $bulkUploadData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "addFromBulkUpload",  "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_BulkUpload");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleEvent
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cancel($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "cancel", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleEvent");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleEvent
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "delete", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleEvent");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleEvent
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($scheduleEventId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "get", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleEvent");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleEventListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getConflicts($resourceIds, Kaltura_Client_Schedule_Type_ScheduleEvent $scheduleEvent, $scheduleEventIdToIgnore = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "resourceIds", $resourceIds);
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->addParam($kparams, "scheduleEventIdToIgnore", $scheduleEventIdToIgnore);
		$this->client->queueServiceActionCall("schedule_scheduleevent", "getConflicts", "KalturaScheduleEventListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleEventListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleEventListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Schedule_Type_ScheduleEventFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "list", "KalturaScheduleEventListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEventListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleEventListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleEvent
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($scheduleEventId, Kaltura_Client_Schedule_Type_ScheduleEvent $scheduleEvent)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleEventId", $scheduleEventId);
		$this->client->addParam($kparams, "scheduleEvent", $scheduleEvent->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleevent", "update", "KalturaScheduleEvent", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleEvent");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleEvent");
		return $resultObject;
	}
}
