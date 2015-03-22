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
// Copyright (C) 2006-2011  Kaltura Inc.
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
class Kaltura_Client_Caption_CaptionAssetService extends Kaltura_Client_ServiceBase
{
	function __construct(Kaltura_Client_Client $client = null)
	{
		parent::__construct($client);
	}

	function add($entryId, Kaltura_Client_Caption_Type_CaptionAsset $captionAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "captionAsset", $captionAsset->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "add", "KalturaCaptionAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionAsset");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Caption_Type_CaptionAsset");
		return $resultObject;
	}

	function setContent($id, Kaltura_Client_Type_ContentResource $contentResource)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "contentResource", $contentResource->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "setContent", "KalturaCaptionAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionAsset");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Caption_Type_CaptionAsset");
		return $resultObject;
	}

	function update($id, Kaltura_Client_Caption_Type_CaptionAsset $captionAsset)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "captionAsset", $captionAsset->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "update", "KalturaCaptionAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionAsset");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Caption_Type_CaptionAsset");
		return $resultObject;
	}

	function serveByEntryId($entryId, $captionParamId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "entryId", $entryId);
		$this->client->addParam($kparams, "captionParamId", $captionParamId);
		$this->client->queueServiceActionCall('caption_captionasset', 'serveByEntryId', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function getUrl($id, $storageId = null)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->addParam($kparams, "storageId", $storageId);
		$this->client->queueServiceActionCall("caption_captionasset", "getUrl", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = (string)Kaltura_Client_ParseUtils::unmarshalSimpleType($resultXmlObject->result);
		return $resultObject;
	}

	function getRemotePaths($id)
	{
		$kparams = array();
		$this->client->addParam($kparams, "id", $id);
		$this->client->queueServiceActionCall("caption_captionasset", "getRemotePaths", "KalturaRemotePathListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaRemotePathListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Type_RemotePathListResponse");
		return $resultObject;
	}

	function serve($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall('caption_captionasset', 'serve', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function serveWebVTT($captionAssetId, $segmentDuration = 30, $segmentIndex = null, $localTimestamp = 10000)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->addParam($kparams, "segmentDuration", $segmentDuration);
		$this->client->addParam($kparams, "segmentIndex", $segmentIndex);
		$this->client->addParam($kparams, "localTimestamp", $localTimestamp);
		$this->client->queueServiceActionCall('caption_captionasset', 'serveWebVTT', null, $kparams);
		$resultObject = $this->client->getServeUrl();
		return $resultObject;
	}

	function setAsDefault($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "setAsDefault", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
	}

	function get($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "get", "KalturaCaptionAsset", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionAsset");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Caption_Type_CaptionAsset");
		return $resultObject;
	}

	function listAction(Kaltura_Client_Type_AssetFilter $filter = null, Kaltura_Client_Type_FilterPager $pager = null)
	{
		$kparams = array();
		if ($filter !== null)
			$this->client->addParam($kparams, "filter", $filter->toParams());
		if ($pager !== null)
			$this->client->addParam($kparams, "pager", $pager->toParams());
		$this->client->queueServiceActionCall("caption_captionasset", "list", "KalturaCaptionAssetListResponse", $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
		$resultObject = Kaltura_Client_ParseUtils::unmarshalObject($resultXmlObject->result, "KalturaCaptionAssetListResponse");
		$this->client->validateObjectType($resultObject, "Kaltura_Client_Caption_Type_CaptionAssetListResponse");
		return $resultObject;
	}

	function delete($captionAssetId)
	{
		$kparams = array();
		$this->client->addParam($kparams, "captionAssetId", $captionAssetId);
		$this->client->queueServiceActionCall("caption_captionasset", "delete", null, $kparams);
		if ($this->client->isMultiRequest())
			return $this->client->getMultiRequestResult();
		$resultXml = $this->client->doQueue();
		$resultXmlObject = new \SimpleXMLElement($resultXml);
		Kaltura_Client_ParseUtils::checkIfError($resultXmlObject->result);
	}
}
