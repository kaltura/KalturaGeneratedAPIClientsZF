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
// Copyright (C) 2006-2015  Kaltura Inc.
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
class Kaltura_Client_AdminConsole_Type_InvestigateFlavorAssetData extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaInvestigateFlavorAssetData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->flavorAsset) && !empty($xml->flavorAsset))
			$this->flavorAsset = Kaltura_Client_ParseUtils::unmarshalObject($xml->flavorAsset, "KalturaFlavorAsset");
		if(count($xml->fileSyncs) && !empty($xml->fileSyncs))
			$this->fileSyncs = Kaltura_Client_ParseUtils::unmarshalObject($xml->fileSyncs, "KalturaFileSyncListResponse");
		if(count($xml->mediaInfos) && !empty($xml->mediaInfos))
			$this->mediaInfos = Kaltura_Client_ParseUtils::unmarshalObject($xml->mediaInfos, "KalturaMediaInfoListResponse");
		if(count($xml->flavorParams) && !empty($xml->flavorParams))
			$this->flavorParams = Kaltura_Client_ParseUtils::unmarshalObject($xml->flavorParams, "KalturaFlavorParams");
		if(count($xml->flavorParamsOutputs) && !empty($xml->flavorParamsOutputs))
			$this->flavorParamsOutputs = Kaltura_Client_ParseUtils::unmarshalObject($xml->flavorParamsOutputs, "KalturaFlavorParamsOutputListResponse");
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_FlavorAsset
	 * @readonly
	 */
	public $flavorAsset;

	/**
	 * 
	 *
	 * @var Kaltura_Client_FileSync_Type_FileSyncListResponse
	 * @readonly
	 */
	public $fileSyncs;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_MediaInfoListResponse
	 * @readonly
	 */
	public $mediaInfos;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_FlavorParams
	 * @readonly
	 */
	public $flavorParams;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_FlavorParamsOutputListResponse
	 * @readonly
	 */
	public $flavorParamsOutputs;


}

