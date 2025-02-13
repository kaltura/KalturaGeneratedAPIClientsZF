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
class Kaltura_Client_Caption_Type_CaptionAsset extends Kaltura_Client_Type_Asset
{
	public function getKalturaObjectType()
	{
		return 'KalturaCaptionAsset';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->captionParamsId))
			$this->captionParamsId = (int)$xml->captionParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->captionParamsId))
			$this->captionParamsId = (int)$jsonObject->captionParamsId;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->languageCode))
			$this->languageCode = (string)$xml->languageCode;
		if(!is_null($jsonObject) && isset($jsonObject->languageCode))
			$this->languageCode = (string)$jsonObject->languageCode;
		if(!is_null($xml) && count($xml->isDefault))
			$this->isDefault = (int)$xml->isDefault;
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
			$this->isDefault = (int)$jsonObject->isDefault;
		if(!is_null($xml) && count($xml->label))
			$this->label = (string)$xml->label;
		if(!is_null($jsonObject) && isset($jsonObject->label))
			$this->label = (string)$jsonObject->label;
		if(!is_null($xml) && count($xml->format))
			$this->format = (string)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (string)$jsonObject->format;
		if(!is_null($xml) && count($xml->source))
			$this->source = (string)$xml->source;
		if(!is_null($jsonObject) && isset($jsonObject->source))
			$this->source = (string)$jsonObject->source;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(!is_null($jsonObject) && isset($jsonObject->parentId))
			$this->parentId = (string)$jsonObject->parentId;
		if(!is_null($xml) && count($xml->accuracy))
			$this->accuracy = (int)$xml->accuracy;
		if(!is_null($jsonObject) && isset($jsonObject->accuracy))
			$this->accuracy = (int)$jsonObject->accuracy;
		if(!is_null($xml) && count($xml->displayOnPlayer))
		{
			if(!empty($xml->displayOnPlayer) && ((int) $xml->displayOnPlayer === 1 || strtolower((string)$xml->displayOnPlayer) === 'true'))
				$this->displayOnPlayer = true;
			else
				$this->displayOnPlayer = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->displayOnPlayer))
		{
			if(!empty($jsonObject->displayOnPlayer) && ((int) $jsonObject->displayOnPlayer === 1 || strtolower((string)$jsonObject->displayOnPlayer) === 'true'))
				$this->displayOnPlayer = true;
			else
				$this->displayOnPlayer = false;
		}
		if(!is_null($xml) && count($xml->associatedTranscriptIds))
			$this->associatedTranscriptIds = (string)$xml->associatedTranscriptIds;
		if(!is_null($jsonObject) && isset($jsonObject->associatedTranscriptIds))
			$this->associatedTranscriptIds = (string)$jsonObject->associatedTranscriptIds;
		if(!is_null($xml) && count($xml->usage))
			$this->usage = (string)$xml->usage;
		if(!is_null($jsonObject) && isset($jsonObject->usage))
			$this->usage = (string)$jsonObject->usage;
	}
	/**
	 * The Caption Params used to create this Caption Asset
	 *
	 * @var int
	 * @insertonly
	 */
	public $captionParamsId = null;

	/**
	 * The language of the caption asset content
	 *
	 * @var Kaltura_Client_Enum_Language
	 */
	public $language = null;

	/**
	 * The language of the caption asset content
	 *
	 * @var Kaltura_Client_Enum_LanguageCode
	 * @readonly
	 */
	public $languageCode = null;

	/**
	 * Is default caption asset of the entry
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Friendly label
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * The caption format
	 *
	 * @var Kaltura_Client_Caption_Enum_CaptionType
	 * @insertonly
	 */
	public $format = null;

	/**
	 * The source of the asset
	 *
	 * @var Kaltura_Client_Caption_Enum_CaptionSource
	 * @insertonly
	 */
	public $source = null;

	/**
	 * The status of the asset
	 *
	 * @var Kaltura_Client_Caption_Enum_CaptionAssetStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * The parent id of the asset
	 *
	 * @var string
	 * @insertonly
	 */
	public $parentId = null;

	/**
	 * The Accuracy of the caption content
	 *
	 * @var int
	 */
	public $accuracy = null;

	/**
	 * The Accuracy of the caption content
	 *
	 * @var bool
	 */
	public $displayOnPlayer = null;

	/**
	 * List of associated transcript asset id's, comma separated
	 *
	 * @var string
	 */
	public $associatedTranscriptIds = null;

	/**
	 * The usage of the asset
	 *
	 * @var Kaltura_Client_Caption_Enum_CaptionAssetUsage
	 */
	public $usage = null;


}

