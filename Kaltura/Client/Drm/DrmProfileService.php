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
class Kaltura_Client_Drm_DrmProfileService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Drm_Type_DrmProfile $drmProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfile", $drmProfile->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "add", "KalturaDrmProfile", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmProfile");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($drmProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->queueServiceActionCall("drm_drmprofile", "delete", "KalturaDrmProfile", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmProfile");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($drmProfileId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->queueServiceActionCall("drm_drmprofile", "get", "KalturaDrmProfile", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmProfile");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getByProvider($provider)
	{
		$kparams = array();
		$this->client->addParam($kparams, "provider", $provider);
		$this->client->queueServiceActionCall("drm_drmprofile", "getByProvider", "KalturaDrmProfile", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmProfile");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmProfileListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Drm_Type_DrmProfileFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "list", "KalturaDrmProfileListResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfileListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmProfileListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Drm_Type_DrmProfile
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($drmProfileId, Kaltura_Client_Drm_Type_DrmProfile $drmProfile)
	{
		$kparams = array();
		$this->client->addParam($kparams, "drmProfileId", $drmProfileId);
		$this->client->addParam($kparams, "drmProfile", $drmProfile->toParams());
		$this->client->queueServiceActionCall("drm_drmprofile", "update", "KalturaDrmProfile", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaDrmProfile");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Drm_Type_DrmProfile");
		}
			return $resultObject;
	}
}
