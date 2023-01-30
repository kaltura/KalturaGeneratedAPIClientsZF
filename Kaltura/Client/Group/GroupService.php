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
class Kaltura_Client_Group_GroupService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Group_Type_Group
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_Group_Type_Group $group)
	{
		$kparams = array();
		$this->client->addParam($kparams, "group", $group->toParams());
		$this->client->queueServiceActionCall("group_group", "add", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Group_Type_Group");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Group_Type_Group
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cloneAction($originalGroupId, $newGroupId, $newGroupName = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "originalGroupId", $originalGroupId);
		$this->client->addParam($kparams, "newGroupId", $newGroupId);
		$this->client->addParam($kparams, "newGroupName", $newGroupName);
		$this->client->queueServiceActionCall("group_group", "clone", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Group_Type_Group");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Group_Type_Group
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function delete($groupId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->queueServiceActionCall("group_group", "delete", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Group_Type_Group");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Group_Type_Group
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($groupId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->queueServiceActionCall("group_group", "get", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Group_Type_Group");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Group_Type_GroupListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Group_Type_GroupFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("group_group", "list", "KalturaGroupListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroupListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Group_Type_GroupListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Group_Type_Group
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($groupId, Kaltura_Client_Group_Type_Group $group)
	{
		$kparams = array();
		$this->client->addParam($kparams, "groupId", $groupId);
		$this->client->addParam($kparams, "group", $group->toParams());
		$this->client->queueServiceActionCall("group_group", "update", "KalturaGroup", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaGroup");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Group_Type_Group");
		return $resultObject;
	}
}
