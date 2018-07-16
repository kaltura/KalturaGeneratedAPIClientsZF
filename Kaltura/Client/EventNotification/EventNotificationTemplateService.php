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
class Kaltura_Client_EventNotification_EventNotificationTemplateService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplate
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function add(Kaltura_Client_EventNotification_Type_EventNotificationTemplate $eventNotificationTemplate)
	{
		$kparams = array();
		$this->client->addParam($kparams, "eventNotificationTemplate", $eventNotificationTemplate->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "add", "KalturaEventNotificationTemplate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplate");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplate
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function cloneAction($id, Kaltura_Client_EventNotification_Type_EventNotificationTemplate $eventNotificationTemplate = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($eventNotificationTemplate !== null)
			$this->client->addParam($kparams, "eventNotificationTemplate", $eventNotificationTemplate->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "clone", "KalturaEventNotificationTemplate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplate");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplate");
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
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "delete", null, $kparams);
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
	function dispatch($id, Kaltura_Client_EventNotification_Type_EventNotificationScope $scope)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "scope", $scope->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "dispatch", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplate
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "get", "KalturaEventNotificationTemplate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplate");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplateListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_EventNotification_Type_EventNotificationTemplateFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "list", "KalturaEventNotificationTemplateListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplateListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplateListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplateListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listByPartner(Kaltura_Client_Type_PartnerFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "listByPartner", "KalturaEventNotificationTemplateListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplateListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplateListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplateListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listTemplates(Kaltura_Client_EventNotification_Type_EventNotificationTemplateFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "listTemplates", "KalturaEventNotificationTemplateListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplateListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplateListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_PushNotification_Type_PushNotificationData
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function register($notificationTemplateSystemName, Kaltura_Client_PushNotification_Type_PushNotificationParams $pushNotificationParams)
	{
		$kparams = array();
		$this->client->addParam($kparams, "notificationTemplateSystemName", $notificationTemplateSystemName);
		$this->client->addParam($kparams, "pushNotificationParams", $pushNotificationParams->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "register", "KalturaPushNotificationData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPushNotificationData");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_PushNotification_Type_PushNotificationData");
		return $resultObject;
	}

	/**
	 * @return 
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function sendCommand($notificationTemplateSystemName, Kaltura_Client_PushNotification_Type_PushNotificationParams $pushNotificationParams, $command)
	{
		$kparams = array();
		$this->client->addParam($kparams, "notificationTemplateSystemName", $notificationTemplateSystemName);
		$this->client->addParam($kparams, "pushNotificationParams", $pushNotificationParams->toParams());
		$this->client->addParam($kparams, "command", $command);
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "sendCommand", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplate
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update($id, Kaltura_Client_EventNotification_Type_EventNotificationTemplate $eventNotificationTemplate)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "eventNotificationTemplate", $eventNotificationTemplate->toParams());
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "update", "KalturaEventNotificationTemplate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplate");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplate");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_EventNotification_Type_EventNotificationTemplate
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function updateStatus($id, $status)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "status", $status);
		$this->client->queueServiceActionCall("eventnotification_eventnotificationtemplate", "updateStatus", "KalturaEventNotificationTemplate", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaEventNotificationTemplate");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_EventNotification_Type_EventNotificationTemplate");
		return $resultObject;
	}
}
