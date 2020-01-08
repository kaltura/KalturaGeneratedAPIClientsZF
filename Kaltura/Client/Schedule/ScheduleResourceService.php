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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_Schedule_ScheduleResourceService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleResource
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Schedule_Type_ScheduleResource $scheduleResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResource", $scheduleResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "add", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleResource");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addFromBulkUpload($fileData, Kaltura_Client_BulkUploadCsv_Type_BulkUploadCsvJobData $bulkUploadData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "addFromBulkUpload",  "KalturaBulkUpload", $kparams, $kfiles);
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
	 * @return Kaltura_Client_Schedule_Type_ScheduleResource
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleresource", "delete", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleResource");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleResource
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($scheduleResourceId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->queueServiceActionCall("schedule_scheduleresource", "get", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleResource");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleResourceListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Schedule_Type_ScheduleResourceFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "list", "KalturaScheduleResourceListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResourceListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleResourceListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Schedule_Type_ScheduleResource
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($scheduleResourceId, Kaltura_Client_Schedule_Type_ScheduleResource $scheduleResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "scheduleResourceId", $scheduleResourceId);
		$this->client->addParam($kparams, "scheduleResource", $scheduleResource->toParams());
		$this->client->queueServiceActionCall("schedule_scheduleresource", "update", "KalturaScheduleResource", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaScheduleResource");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Schedule_Type_ScheduleResource");
		return $resultObject;
	}
}
