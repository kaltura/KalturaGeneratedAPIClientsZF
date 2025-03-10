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
class Kaltura_Client_Type_FlavorAsset extends Kaltura_Client_Type_Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaFlavorAsset';
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
		if(!is_null($xml) && count($xml->width))
			$this->width = (int)$xml->width;
		if(!is_null($jsonObject) && isset($jsonObject->width))
			$this->width = (int)$jsonObject->width;
		if(!is_null($xml) && count($xml->height))
			$this->height = (int)$xml->height;
		if(!is_null($jsonObject) && isset($jsonObject->height))
			$this->height = (int)$jsonObject->height;
		if(!is_null($xml) && count($xml->bitrate))
			$this->bitrate = (int)$xml->bitrate;
		if(!is_null($jsonObject) && isset($jsonObject->bitrate))
			$this->bitrate = (int)$jsonObject->bitrate;
		if(!is_null($xml) && count($xml->frameRate))
			$this->frameRate = (float)$xml->frameRate;
		if(!is_null($jsonObject) && isset($jsonObject->frameRate))
			$this->frameRate = (float)$jsonObject->frameRate;
		if(!is_null($xml) && count($xml->isOriginal))
		{
			if(!empty($xml->isOriginal) && ((int) $xml->isOriginal === 1 || strtolower((string)$xml->isOriginal) === 'true'))
				$this->isOriginal = true;
			else
				$this->isOriginal = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isOriginal))
		{
			if(!empty($jsonObject->isOriginal) && ((int) $jsonObject->isOriginal === 1 || strtolower((string)$jsonObject->isOriginal) === 'true'))
				$this->isOriginal = true;
			else
				$this->isOriginal = false;
		}
		if(!is_null($xml) && count($xml->isWeb))
		{
			if(!empty($xml->isWeb) && ((int) $xml->isWeb === 1 || strtolower((string)$xml->isWeb) === 'true'))
				$this->isWeb = true;
			else
				$this->isWeb = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isWeb))
		{
			if(!empty($jsonObject->isWeb) && ((int) $jsonObject->isWeb === 1 || strtolower((string)$jsonObject->isWeb) === 'true'))
				$this->isWeb = true;
			else
				$this->isWeb = false;
		}
		if(!is_null($xml) && count($xml->containerFormat))
			$this->containerFormat = (string)$xml->containerFormat;
		if(!is_null($jsonObject) && isset($jsonObject->containerFormat))
			$this->containerFormat = (string)$jsonObject->containerFormat;
		if(!is_null($xml) && count($xml->videoCodecId))
			$this->videoCodecId = (string)$xml->videoCodecId;
		if(!is_null($jsonObject) && isset($jsonObject->videoCodecId))
			$this->videoCodecId = (string)$jsonObject->videoCodecId;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->label))
			$this->label = (string)$xml->label;
		if(!is_null($jsonObject) && isset($jsonObject->label))
			$this->label = (string)$jsonObject->label;
		if(!is_null($xml) && count($xml->isDefault))
			$this->isDefault = (int)$xml->isDefault;
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
			$this->isDefault = (int)$jsonObject->isDefault;
	}
	/**
	 * The Flavor Params used to create this Flavor Asset
	 *
	 * @var int
	 * @insertonly
	 */
	public $flavorParamsId = null;

	/**
	 * The width of the Flavor Asset
	 *
	 * @var int
	 * @readonly
	 */
	public $width = null;

	/**
	 * The height of the Flavor Asset
	 *
	 * @var int
	 * @readonly
	 */
	public $height = null;

	/**
	 * The overall bitrate (in KBits) of the Flavor Asset
	 *
	 * @var int
	 * @readonly
	 */
	public $bitrate = null;

	/**
	 * The frame rate (in FPS) of the Flavor Asset
	 *
	 * @var float
	 * @readonly
	 */
	public $frameRate = null;

	/**
	 * True if this Flavor Asset is the original source
	 *
	 * @var bool
	 * @readonly
	 */
	public $isOriginal = null;

	/**
	 * True if this Flavor Asset is playable in KDP
	 *
	 * @var bool
	 * @readonly
	 */
	public $isWeb = null;

	/**
	 * The container format
	 *
	 * @var string
	 * @readonly
	 */
	public $containerFormat = null;

	/**
	 * The video codec
	 *
	 * @var string
	 * @readonly
	 */
	public $videoCodecId = null;

	/**
	 * The status of the Flavor Asset
	 *
	 * @var Kaltura_Client_Enum_FlavorAssetStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The language of the flavor asset
	 *
	 * @var Kaltura_Client_Enum_Language
	 */
	public $language = null;

	/**
	 * The label of the flavor asset
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * Is default flavor asset of the entry (This field will be taken into account selectign which audio flavor will be selected as default)
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isDefault = null;


}

