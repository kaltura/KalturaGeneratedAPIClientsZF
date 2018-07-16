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
class Kaltura_Client_SearchService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	/**
	 * @return Kaltura_Client_Type_SearchAuthData
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function externalLogin($searchSource, $userName, $password)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchSource", $searchSource);
		$this->client->addParam($kparams, "userName", $userName);
		$this->client->addParam($kparams, "password", $password);
		$this->client->queueServiceActionCall("search", "externalLogin", "KalturaSearchAuthData", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSearchAuthData");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SearchAuthData");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SearchResult
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function getMediaInfo(Kaltura_Client_Type_SearchResult $searchResult)
	{
		$kparams = array();
		$this->client->addParam($kparams, "searchResult", $searchResult->toParams());
		$this->client->queueServiceActionCall("search", "getMediaInfo", "KalturaSearchResult", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSearchResult");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SearchResult");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SearchResultResponse
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function search(Kaltura_Client_Type_Search $search, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "search", $search->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("search", "search", "KalturaSearchResultResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSearchResultResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SearchResultResponse");
		return $resultObject;
	}

	/**
	 * @return Kaltura_Client_Type_SearchResult
	 * @throws Kaltura_Client_Exception|Kaltura_Client_ClientException
	 */
	function searchUrl($mediaType, $url)
	{
		$kparams = array();
		$this->client->addParam($kparams, "mediaType", $mediaType);
		$this->client->addParam($kparams, "url", $url);
		$this->client->queueServiceActionCall("search", "searchUrl", "KalturaSearchResult", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		$this->client->checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaSearchResult");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_SearchResult");
		return $resultObject;
	}
}
