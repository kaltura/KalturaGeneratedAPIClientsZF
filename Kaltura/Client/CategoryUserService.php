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
class Kaltura_Client_CategoryUserService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_CategoryUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function activate($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "activate", "KalturaCategoryUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryUser");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CategoryUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_CategoryUser $categoryUser)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryUser", $categoryUser->toParams());
		$this->client->queueServiceActionCall("categoryuser", "add", "KalturaCategoryUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryUser");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function addFromBulkUpload($fileData, Kaltura_Client_Type_BulkUploadJobData $bulkUploadData = null, Kaltura_Client_Type_BulkUploadCategoryUserData $bulkUploadCategoryUserData = null)
	{
		$kparams = array();
		$kfiles = array();
		$this->client->addParam($kfiles, "fileData", $fileData);
		if ($bulkUploadData !== null)
			$this->client->addParam($kparams, "bulkUploadData", $bulkUploadData->toParams());
		if ($bulkUploadCategoryUserData !== null)
			$this->client->addParam($kparams, "bulkUploadCategoryUserData", $bulkUploadCategoryUserData->toParams());
		$this->client->queueServiceActionCall("categoryuser", "addFromBulkUpload",  "KalturaBulkUpload", $kparams, $kfiles);
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
	function copyFromCategory($categoryId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->queueServiceActionCall("categoryuser", "copyFromCategory", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_CategoryUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function deactivate($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "deactivate", "KalturaCategoryUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryUser");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_CategoryUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($categoryId, $userId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->queueServiceActionCall("categoryuser", "get", "KalturaCategoryUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryUser");
		return $resultObject;
	}

	/**
	 * @return int
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function index($userId, $categoryId, $shouldUpdate = true)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "shouldUpdate", $shouldUpdate);
		$this->client->queueServiceActionCall("categoryuser", "index", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CategoryUserListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_CategoryUserFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("categoryuser", "list", "KalturaCategoryUserListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryUserListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryUserListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_CategoryUser
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($categoryId, $userId, Kaltura_Client_Type_CategoryUser $categoryUser, $override = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "categoryId", $categoryId);
		$this->client->addParam($kparams, "userId", $userId);
		$this->client->addParam($kparams, "categoryUser", $categoryUser->toParams());
		$this->client->addParam($kparams, "override", $override);
		$this->client->queueServiceActionCall("categoryuser", "update", "KalturaCategoryUser", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCategoryUser");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_CategoryUser");
		return $resultObject;
	}
}
