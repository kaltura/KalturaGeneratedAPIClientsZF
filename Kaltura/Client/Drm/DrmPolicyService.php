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
class Kaltura_Client_Drm_DrmPolicyService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmPolicy
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Drm_Type_DrmPolicy $drmPolicy)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicy", $drmPolicy->toParams());
		$this->client->queueServiceActionCall("drm_drmpolicy", "add", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmPolicy");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmPolicy
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($drmPolicyId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicyId", $drmPolicyId);
		$this->client->queueServiceActionCall("drm_drmpolicy", "delete", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmPolicy");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmPolicy
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($drmPolicyId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicyId", $drmPolicyId);
		$this->client->queueServiceActionCall("drm_drmpolicy", "get", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmPolicy");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmPolicyListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Drm_Type_DrmPolicyFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("drm_drmpolicy", "list", "KalturaDrmPolicyListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicyListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmPolicyListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmPolicy
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($drmPolicyId, Kaltura_Client_Drm_Type_DrmPolicy $drmPolicy)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmPolicyId", $drmPolicyId);
		$this->client->addParam($kparams, "drmPolicy", $drmPolicy->toParams());
		$this->client->queueServiceActionCall("drm_drmpolicy", "update", "KalturaDrmPolicy", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmPolicy");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmPolicy");
		return $resultObject;
	}
}
