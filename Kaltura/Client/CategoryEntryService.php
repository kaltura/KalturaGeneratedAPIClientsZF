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
class Kaltura_Client_CategoryEntryService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function activate($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "activate", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_CategoryEntry
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_CategoryEntry $categoryEntry)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryEntry", $categoryEntry->toParams());
		$this->client->queueServiceActionCall("categoryentry", "add", "KalturaCategoryEntry", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryEntry");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryEntry");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addFromBulkUpload(Kaltura_Client_BulkUpload_Type_BulkServiceData $bulkUploadData, Kaltura_Client_Type_BulkUploadCategoryEntryData $bulkUploadCategoryEntryData = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadCategoryEntryData !== null)
			$this->client->addParam($kparams, "bulkUploadCategoryEntryData", $bulkUploadCategoryEntryData->toParams());
		$this->client->queueServiceActionCall("categoryentry", "addFromBulkUpload", "KalturaBulkUpload", $kparams);
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
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return int
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function index($entryId, $categoryId, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("categoryentry", "index", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CategoryEntryListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_CategoryEntryFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("categoryentry", "list", "KalturaCategoryEntryListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryEntryListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryEntryListResponse");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function reject($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "reject", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function syncPrivacyContext($entryId, $categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryentry", "syncPrivacyContext", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateStatusFromBulk($fileData, Kaltura_Client_Type_BulkUploadJobData $bulkUploadData = null, Kaltura_Client_Type_BulkUploadCategoryEntryData $bulkUploadCategoryEntryData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadCategoryEntryData !== null)
			$this->client->addParam($kparams, "bulkUploadCategoryEntryData", $bulkUploadCategoryEntryData->toParams());
		$this->client->queueServiceActionCall("categoryentry", "updateStatusFromBulk",  "KalturaBulkUpload", $kparams, $kfiles);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUpload");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_BulkUpload");
		return $resultObject;
	}
}
