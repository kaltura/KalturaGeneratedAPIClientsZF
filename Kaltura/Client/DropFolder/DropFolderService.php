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
class Kaltura_Client_DropFolder_DropFolderService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_DropFolder_Type_DropFolder
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_DropFolder_Type_DropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "add", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_DropFolder_Type_DropFolder");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_DropFolder_Type_DropFolder
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "delete", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_DropFolder_Type_DropFolder");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_DropFolder_Type_DropFolder
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function freeExclusiveDropFolder($dropFolderId, $errorCode = null, $errorDescription = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($kparams, "errorCode", $errorCode);
		$this->client->addParam($kparams, "errorDescription", $errorDescription);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "freeExclusiveDropFolder", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_DropFolder_Type_DropFolder");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_DropFolder_Type_DropFolder
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($dropFolderId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "get", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_DropFolder_Type_DropFolder");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_DropFolder_Type_DropFolder
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getExclusiveDropFolder($tag, $maxTime)
	{
		$kparams = array();
		$this->client->addParam($kparams, "tag", $tag);
		$this->client->addParam($kparams, "maxTime", $maxTime);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "getExclusiveDropFolder", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_DropFolder_Type_DropFolder");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_DropFolder_Type_DropFolderListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_DropFolder_Type_DropFolderFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "list", "KalturaDropFolderListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolderListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_DropFolder_Type_DropFolderListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_DropFolder_Type_DropFolder
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($dropFolderId, Kaltura_Client_DropFolder_Type_DropFolder $dropFolder)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($kparams, "dropFolder", $dropFolder->toParams());
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "update", "KalturaDropFolder", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDropFolder");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_DropFolder_Type_DropFolder");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateStatus($dropFolderId, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "dropFolderId", $dropFolderId);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("dropfolder_dropfolder", "updateStatus", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}
}
