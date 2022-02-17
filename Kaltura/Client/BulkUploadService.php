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
class Kaltura_Client_BulkUploadService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function abort($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "abort", "KalturaBulkUpload", $kparams);
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
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add($conversionProfileId, $csvFileData, $bulkUploadType = null, $uploadedBy = null, $fileName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "conversionProfileId", $conversionProfileId);
		$kfiles = array();
		$this->client->addParam($kfiles, "csvFileData", $csvFileData);
		$this->client->addParam($kparams, "bulkUploadType", $bulkUploadType);
		$this->client->addParam($kparams, "uploadedBy", $uploadedBy);
		$this->client->addParam($kparams, "fileName", $fileName);
		$this->client->queueServiceActionCall("bulkupload", "add",  "KalturaBulkUpload", $kparams, $kfiles);
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
	 * @return Kaltura_Client_Type_BulkUpload
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("bulkupload", "get", "KalturaBulkUpload", $kparams);
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
	 * @return Kaltura_Client_Type_BulkUploadListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("bulkupload", "list", "KalturaBulkUploadListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaBulkUploadListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_BulkUploadListResponse");
		return $resultObject;
	}

	/**
	 * @return file
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function serve($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall('bulkupload', 'serve', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * @return file
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function serveLog($id)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall('bulkupload', 'serveLog', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}
}
