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
class Kaltura_Client_UserRoleService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_UserRole
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Type_UserRole $userRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "add", "KalturaUserRole", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserRole");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_UserRole");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_UserRole
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cloneAction($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "clone", "KalturaUserRole", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserRole");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_UserRole");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_UserRole
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "delete", "KalturaUserRole", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserRole");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_UserRole");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_UserRole
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($userRoleId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->queueServiceActionCall("userrole", "get", "KalturaUserRole", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserRole");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_UserRole");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_UserRoleListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_UserRoleFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("userrole", "list", "KalturaUserRoleListResponse", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserRoleListResponse");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_UserRoleListResponse");
		}
			return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_UserRole
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($userRoleId, Kaltura_Client_Type_UserRole $userRole)
	{
		$kparams = array();
		$this->client->addParam($kparams, "userRoleId", $userRoleId);
		$this->client->addParam($kparams, "userRole", $userRole->toParams());
		$this->client->queueServiceActionCall("userrole", "update", "KalturaUserRole", $kparams);
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
			$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaUserRole");
			$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_UserRole");
		}
			return $resultObject;
	}
}
