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
class Kaltura_Client_Type_FlavorParamsOutput extends Kaltura_Client_Type_FlavorParams
{
	public function getKalturaObjectType()
	{
		return 'KalturaFlavorParamsOutput';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->flavorParamsId))
			$this->flavorParamsId = (int)$xml->flavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsId))
			$this->flavorParamsId = (int)$jsonObject->flavorParamsId;
		if(!is_null($xml) && count($xml->commandLinesStr))
			$this->commandLinesStr = (string)$xml->commandLinesStr;
		if(!is_null($jsonObject) && isset($jsonObject->commandLinesStr))
			$this->commandLinesStr = (string)$jsonObject->commandLinesStr;
		if(!is_null($xml) && count($xml->flavorParamsVersion))
			$this->flavorParamsVersion = (string)$xml->flavorParamsVersion;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsVersion))
			$this->flavorParamsVersion = (string)$jsonObject->flavorParamsVersion;
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->flavorAssetVersion))
			$this->flavorAssetVersion = (string)$xml->flavorAssetVersion;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetVersion))
			$this->flavorAssetVersion = (string)$jsonObject->flavorAssetVersion;
		if(!is_null($xml) && count($xml->readyBehavior))
			$this->readyBehavior = (int)$xml->readyBehavior;
		if(!is_null($jsonObject) && isset($jsonObject->readyBehavior))
			$this->readyBehavior = (int)$jsonObject->readyBehavior;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamsId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $commandLinesStr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorParamsVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $readyBehavior = null;


}

