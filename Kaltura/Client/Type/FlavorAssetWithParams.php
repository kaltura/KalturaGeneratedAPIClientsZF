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
class Kaltura_Client_Type_FlavorAssetWithParams extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFlavorAssetWithParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->flavorAsset) && !empty($xml->flavorAsset))
			$this->flavorAsset = Kaltura_Client_ParseUtils::unmarshalObject($xml->flavorAsset, "KalturaFlavorAsset");
		if(!is_null($jsonObject) && isset($jsonObject->flavorAsset) && !empty($jsonObject->flavorAsset))
			$this->flavorAsset = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->flavorAsset, "KalturaFlavorAsset");
		if(!is_null($xml) && count($xml->flavorParams) && !empty($xml->flavorParams))
			$this->flavorParams = Kaltura_Client_ParseUtils::unmarshalObject($xml->flavorParams, "KalturaFlavorParams");
		if(!is_null($jsonObject) && isset($jsonObject->flavorParams) && !empty($jsonObject->flavorParams))
			$this->flavorParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->flavorParams, "KalturaFlavorParams");
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
	}
	/**
	 * The Flavor Asset (Can be null when there are params without asset)
	 *
	 * @var Kaltura_Client_Type_FlavorAsset
	 */
	public $flavorAsset;

	/**
	 * The Flavor Params
	 *
	 * @var Kaltura_Client_Type_FlavorParams
	 */
	public $flavorParams;

	/**
	 * The entry id
	 *
	 * @var string
	 */
	public $entryId = null;


}

