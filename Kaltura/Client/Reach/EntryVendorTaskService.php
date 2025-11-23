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
class Kaltura_Client_Reach_EntryVendorTaskService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function abort($id, $abortReason = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "abortReason", $abortReason);
		$this->client->queueServiceActionCall("reach_entryvendortask", "abort", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Reach_Type_EntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "add", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function approve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "approve", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return string
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function exportToCsv(Kaltura_Client_Reach_Type_EntryVendorTaskFilter $filter)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "exportToCsv", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function extendAccessKey($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "extendAccessKey", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "get", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTaskListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getJobs(Kaltura_Client_Reach_Type_EntryVendorTaskFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "getJobs", "KalturaEntryVendorTaskListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTaskListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTaskListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return string
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getServeUrl($filterType = null, $filterInput = null, $status = null, $dueDate = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "filterType", $filterType);
		$this->client->addParam($kparams, "filterInput", $filterInput);
		$this->client->addParam($kparams, "status", $status);
		$this->client->addParam($kparams, "dueDate", $dueDate);
		$this->client->queueServiceActionCall("reach_entryvendortask", "getServeUrl", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTaskListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Reach_Type_EntryVendorTaskFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "list", "KalturaEntryVendorTaskListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTaskListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTaskListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function reject($id, $rejectReason = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "rejectReason", $rejectReason);
		$this->client->queueServiceActionCall("reach_entryvendortask", "reject", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function replaceOutput($id, $newOutput)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "newOutput", $newOutput);
		$this->client->queueServiceActionCall("reach_entryvendortask", "replaceOutput", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function reset($id, $catalogItemId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "catalogItemId", $catalogItemId);
		$this->client->queueServiceActionCall("reach_entryvendortask", "reset", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return file
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function serve($vendorPartnerId = null, $partnerId = null, $status = null, $dueDate = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "vendorPartnerId", $vendorPartnerId);
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->addParam($kparams, "dueDate", $dueDate);
		$this->client->queueServiceActionCall('reach_entryvendortask', 'serve', null, $kparams);
		$resultObject = $this->client->getServeUrl();
			return $resultObject;
	}

	/**
	 * @return string
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function serveCsv($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("reach_entryvendortask", "serveCsv", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($id, Kaltura_Client_Reach_Type_EntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "update", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Reach_Type_EntryVendorTask
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateJob($id, Kaltura_Client_Reach_Type_EntryVendorTask $entryVendorTask)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "entryVendorTask", $entryVendorTask->toParams());
		$this->client->queueServiceActionCall("reach_entryvendortask", "updateJob", "KalturaEntryVendorTask", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$rawResult = $this->client->doQueue();
		if ($this->client->getConfig()->format === Kaltura_Client_ClientBase::KALTURA_SERVICE_FORMAT_JSON) {
			$jsObject = json_decode($rawResult);
			$resultObject = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsObject);
			return $resultObject;
		} else {
			$resultXmlObject = new \SimpleXMLElement($rawResult);
			$this->client->checkIfError($resultXmlObject->result);
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEntryVendorTask");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Reach_Type_EntryVendorTask");
		}
			return $resultObject;
	}
}
