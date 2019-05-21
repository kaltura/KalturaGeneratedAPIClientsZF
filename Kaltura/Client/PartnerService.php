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
class Kaltura_Client_PartnerService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return int
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function count(Kaltura_Client_Type_PartnerFilter $filter = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		$this->client->queueServiceActionCall("partner", "count", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (int)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Partner
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function get($id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("partner", "get", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Partner");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Partner
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getInfo()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "getInfo", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Partner");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PartnerPublicInfo
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getPublicInfo($id = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("partner", "getPublicInfo", "KalturaPartnerPublicInfo", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerPublicInfo");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PartnerPublicInfo");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Partner
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getSecrets($partnerId, $adminEmail, $cmsPassword)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partnerId", $partnerId);
		$this->client->addParam($kparams, "adminEmail", $adminEmail);
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->queueServiceActionCall("partner", "getSecrets", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Partner");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PartnerStatistics
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getStatistics()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "getStatistics", "KalturaPartnerStatistics", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerStatistics");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PartnerStatistics");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PartnerUsage
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getUsage($year = "", $month = 1, $resolution = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "year", $year);
		$this->client->addParam($kparams, "month", $month);
		$this->client->addParam($kparams, "resolution", $resolution);
		$this->client->queueServiceActionCall("partner", "getUsage", "KalturaPartnerUsage", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerUsage");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PartnerUsage");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PartnerListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listAction(Kaltura_Client_Type_PartnerFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("partner", "list", "KalturaPartnerListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PartnerListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_FeatureStatusListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listFeatureStatus()
	{
		$kparams = array();
		$this->client->queueServiceActionCall("partner", "listFeatureStatus", "KalturaFeatureStatusListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaFeatureStatusListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_FeatureStatusListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_PartnerListResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function listPartnersForUser(Kaltura_Client_Type_PartnerFilter $partnerFilter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($partnerFilter !== null)
			$this->client->addParam($kparams, "partnerFilter", $partnerFilter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("partner", "listPartnersForUser", "KalturaPartnerListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartnerListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PartnerListResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Partner
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function register(Kaltura_Client_Type_Partner $partner, $cmsPassword = "", $templatePartnerId = null, $silent = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "cmsPassword", $cmsPassword);
		$this->client->addParam($kparams, "templatePartnerId", $templatePartnerId);
		$this->client->addParam($kparams, "silent", $silent);
		$this->client->queueServiceActionCall("partner", "register", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Partner");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_Partner
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function update(Kaltura_Client_Type_Partner $partner, $allowEmpty = false)
	{
		$kparams = array();
		$this->client->addParam($kparams, "partner", $partner->toParams());
		$this->client->addParam($kparams, "allowEmpty", $allowEmpty);
		$this->client->queueServiceActionCall("partner", "update", "KalturaPartner", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPartner");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_Partner");
		return $resultObject;
	}
}
