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
class Kaltura_Client_ReportService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_ReportResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function execute($id, array $params = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($params !== null)
			foreach($params as $index => $obj)
			{
				$this->client->addParam($kparams, "params:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall("report", "execute", "KalturaReportResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReportResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ReportResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ReportExportResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function exportToCsv(Kaltura_Client_Type_ReportExportParams $params)
	{
		$kparams = array();
		$this->client->addParam($kparams, "params", $params->toParams());
		$this->client->queueServiceActionCall("report", "exportToCsv", "KalturaReportExportResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReportExportResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ReportExportResponse");
		return $resultObject;
	}

	/**
	 * @return array
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getBaseTotal($reportType, Kaltura_Client_Type_ReportInputFilter $reportInputFilter, $objectIds = null, Kaltura_Client_Type_ReportResponseOptions $responseOptions = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "objectIds", $objectIds);
		if ($responseOptions !== null)
			$this->client->addParam($kparams, "responseOptions", $responseOptions->toParams());
		$this->client->queueServiceActionCall("report", "getBaseTotal", "KalturaReportBaseTotal", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaReportBaseTotal");
		foreach($resultObject as $resultObjectItem){
			$this->client->validateObjectType($resultObjectItem, "Kaltura_Client_Type_ReportBaseTotal");
		}
		return $resultObject;
	}

	/**
	 * @return file
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getCsv($id, array $params = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		if ($params !== null)
			foreach($params as $index => $obj)
			{
				$this->client->addParam($kparams, "params:$index", $obj->toParams());
			}
		$this->client->queueServiceActionCall('report', 'getCsv', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * @return file
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getCsvFromStringParams($id, $params = null)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "params", $params);
		$this->client->queueServiceActionCall('report', 'getCsvFromStringParams', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	/**
	 * @return array
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getGraphs($reportType, Kaltura_Client_Type_ReportInputFilter $reportInputFilter, $dimension = null, $objectIds = null, Kaltura_Client_Type_ReportResponseOptions $responseOptions = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "dimension", $dimension);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		if ($responseOptions !== null)
			$this->client->addParam($kparams, "responseOptions", $responseOptions->toParams());
		$this->client->queueServiceActionCall("report", "getGraphs", "KalturaReportGraph", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalArray($resultXmlObject->result, "KalturaReportGraph");
		foreach($resultObject as $resultObjectItem){
			$this->client->validateObjectType($resultObjectItem, "Kaltura_Client_Type_ReportGraph");
		}
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ReportTable
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getTable($reportType, Kaltura_Client_Type_ReportInputFilter $reportInputFilter, Kaltura_Client_Type_FilterPager $pager, $order = null, $objectIds = null, Kaltura_Client_Type_ReportResponseOptions $responseOptions = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->addParam($kparams, "order", $order);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		if ($responseOptions !== null)
			$this->client->addParam($kparams, "responseOptions", $responseOptions->toParams());
		$this->client->queueServiceActionCall("report", "getTable", "KalturaReportTable", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReportTable");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ReportTable");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_ReportTotal
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getTotal($reportType, Kaltura_Client_Type_ReportInputFilter $reportInputFilter, $objectIds = null, Kaltura_Client_Type_ReportResponseOptions $responseOptions = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "objectIds", $objectIds);
		if ($responseOptions !== null)
			$this->client->addParam($kparams, "responseOptions", $responseOptions->toParams());
		$this->client->queueServiceActionCall("report", "getTotal", "KalturaReportTotal", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaReportTotal");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_ReportTotal");
		return $resultObject;
	}

	/**
	 * @return string
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getUrlForReportAsCsv($reportTitle, $reportText, $headers, $reportType, Kaltura_Client_Type_ReportInputFilter $reportInputFilter, $dimension = null, Kaltura_Client_Type_FilterPager $pager = null, $order = null, $objectIds = null, Kaltura_Client_Type_ReportResponseOptions $responseOptions = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "reportTitle", $reportTitle);
		$this->client->addParam($kparams, "reportText", $reportText);
		$this->client->addParam($kparams, "headers", $headers);
		$this->client->addParam($kparams, "reportType", $reportType);
		$this->client->addParam($kparams, "reportInputFilter", $reportInputFilter->toParams());
		$this->client->addParam($kparams, "dimension", $dimension);
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->addParam($kparams, "order", $order);
		$this->client->addParam($kparams, "objectIds", $objectIds);
		if ($responseOptions !== null)
			$this->client->addParam($kparams, "responseOptions", $responseOptions->toParams());
		$this->client->queueServiceActionCall("report", "getUrlForReportAsCsv", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	/**
	 * @return string
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function serve($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("report", "serve", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}
}
