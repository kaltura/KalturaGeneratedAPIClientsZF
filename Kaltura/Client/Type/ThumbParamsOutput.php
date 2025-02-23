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
class Kaltura_Client_Type_ThumbParamsOutput extends Kaltura_Client_Type_ThumbParams
{
	public function getKalturaObjectType()
	{
		return 'KalturaThumbParamsOutput';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->thumbParamsId))
			$this->thumbParamsId = (int)$xml->thumbParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->thumbParamsId))
			$this->thumbParamsId = (int)$jsonObject->thumbParamsId;
		if(!is_null($xml) && count($xml->thumbParamsVersion))
			$this->thumbParamsVersion = (string)$xml->thumbParamsVersion;
		if(!is_null($jsonObject) && isset($jsonObject->thumbParamsVersion))
			$this->thumbParamsVersion = (string)$jsonObject->thumbParamsVersion;
		if(!is_null($xml) && count($xml->thumbAssetId))
			$this->thumbAssetId = (string)$xml->thumbAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetId))
			$this->thumbAssetId = (string)$jsonObject->thumbAssetId;
		if(!is_null($xml) && count($xml->thumbAssetVersion))
			$this->thumbAssetVersion = (string)$xml->thumbAssetVersion;
		if(!is_null($jsonObject) && isset($jsonObject->thumbAssetVersion))
			$this->thumbAssetVersion = (string)$jsonObject->thumbAssetVersion;
		if(!is_null($xml) && count($xml->rotate))
			$this->rotate = (int)$xml->rotate;
		if(!is_null($jsonObject) && isset($jsonObject->rotate))
			$this->rotate = (int)$jsonObject->rotate;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $thumbParamsId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbParamsVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thumbAssetVersion = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $rotate = null;


}

