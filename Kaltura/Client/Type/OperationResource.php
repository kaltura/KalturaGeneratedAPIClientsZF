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
class Kaltura_Client_Type_OperationResource extends Kaltura_Client_Type_ContentResource
{
	public function getKalturaObjectType()
	{
		return 'KalturaOperationResource';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->resource) && !empty($xml->resource))
			$this->resource = Kaltura_Client_ParseUtils::unmarshalObject($xml->resource, "KalturaContentResource");
		if(!is_null($jsonObject) && isset($jsonObject->resource) && !empty($jsonObject->resource))
			$this->resource = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->resource, "KalturaContentResource");
		if(!is_null($xml) && count($xml->operationAttributes))
		{
			if(empty($xml->operationAttributes))
				$this->operationAttributes = array();
			else
				$this->operationAttributes = Kaltura_Client_ParseUtils::unmarshalArray($xml->operationAttributes, "KalturaOperationAttributes");
		}
		if(!is_null($jsonObject) && isset($jsonObject->operationAttributes))
		{
			if(empty($jsonObject->operationAttributes))
				$this->operationAttributes = array();
			else
				$this->operationAttributes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->operationAttributes, "KalturaOperationAttributes");
		}
		if(!is_null($xml) && count($xml->assetParamsId))
			$this->assetParamsId = (int)$xml->assetParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->assetParamsId))
			$this->assetParamsId = (int)$jsonObject->assetParamsId;
	}
	/**
	 * Only KalturaEntryResource and KalturaAssetResource are supported
	 *
	 * @var Kaltura_Client_Type_ContentResource
	 */
	public $resource;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_OperationAttributes[]
	 */
	public $operationAttributes;

	/**
	 * ID of alternative asset params to be used instead of the system default flavor params
	 *
	 * @var int
	 */
	public $assetParamsId = null;


}

