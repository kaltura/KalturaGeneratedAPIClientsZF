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
// Copyright (C) 2006-2017  Kaltura Inc.
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
class Kaltura_Client_PaymentGatewayProfileService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	function add(Kaltura_Client_Type_PaymentGatewayProfile $paymentGateway)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGateway", $paymentGateway->toParams());
		$this->client->queueServiceActionCall("paymentgatewayprofile", "add", "KalturaPaymentGatewayProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PaymentGatewayProfile");
		return $resultObject;
	}

	function delete($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("paymentgatewayprofile", "delete", null, $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = (bool)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	function generateSharedSecret($paymentGatewayId)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->queueServiceActionCall("paymentgatewayprofile", "generateSharedSecret", "KalturaPaymentGatewayProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PaymentGatewayProfile");
		return $resultObject;
	}

	function getConfiguration($alias, $intent, array $extraParameters)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "alias", $alias);
		$this->client->addParam($kparams, "intent", $intent);
		foreach($extraParameters as $index => $obj)
		{
			$this->client->addParam($kparams, "extraParameters:$index", $obj->toParams());
		}
		$this->client->queueServiceActionCall("paymentgatewayprofile", "getConfiguration", "KalturaPaymentGatewayConfiguration", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayConfiguration");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PaymentGatewayConfiguration");
		return $resultObject;
	}

	function listAction()
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->queueServiceActionCall("paymentgatewayprofile", "list", "KalturaPaymentGatewayProfileListResponse", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfileListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PaymentGatewayProfileListResponse");
		return $resultObject;
	}

	function update($paymentGatewayId, Kaltura_Client_Type_PaymentGatewayProfile $paymentGateway)
	{
		if ($this->client->isMultiRequest())
			throw $this->client->getKalturaClientException("Action is not supported as part of multi-request.", Kaltura_Client_ClientException::ERROR_ACTION_IN_MULTIREQUEST);
		
		$kparams = array();
		$this->client->addParam($kparams, "paymentGatewayId", $paymentGatewayId);
		$this->client->addParam($kparams, "paymentGateway", $paymentGateway->toParams());
		$this->client->queueServiceActionCall("paymentgatewayprofile", "update", "KalturaPaymentGatewayProfile", $kparams);
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaPaymentGatewayProfile");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_PaymentGatewayProfile");
		return $resultObject;
	}
}
