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
class Kaltura_Client_ResponseProfileService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_ResponseProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_ResponseProfile $addResponseProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "addResponseProfile", $addResponseProfile->toParams());
		$this->client->queueServiceActionCall("responseprofile", "add", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ResponseProfile");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ResponseProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cloneAction($id, Kaltura_Client_Type_ResponseProfile $profile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "profile", $profile->toParams());
		$this->client->queueServiceActionCall("responseprofile", "clone", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ResponseProfile");
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
		$this->client->queueServiceActionCall("responseprofile", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_Type_ResponseProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("responseprofile", "get", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ResponseProfile");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ResponseProfileListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_ResponseProfileFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("responseprofile", "list", "KalturaResponseProfileListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfileListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ResponseProfileListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ResponseProfileCacheRecalculateResults
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function recalculate(Kaltura_Client_Type_ResponseProfileCacheRecalculateOptions $options)
	{
		$kparams = array();
		$this->client->addParam($kparams, "options", $options->toParams());
		$this->client->queueServiceActionCall("responseprofile", "recalculate", "KalturaResponseProfileCacheRecalculateResults", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfileCacheRecalculateResults");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ResponseProfileCacheRecalculateResults");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ResponseProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($id, Kaltura_Client_Type_ResponseProfile $updateResponseProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "updateResponseProfile", $updateResponseProfile->toParams());
		$this->client->queueServiceActionCall("responseprofile", "update", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ResponseProfile");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ResponseProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("responseprofile", "updateStatus", "KalturaResponseProfile", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaResponseProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ResponseProfile");
		return $resultObject;
	}
}
