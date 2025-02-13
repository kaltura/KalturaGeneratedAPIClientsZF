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
class Kaltura_Client_Type_MediaEntry extends Kaltura_Client_Type_PlayableEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaEntry';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(!is_null($jsonObject) && isset($jsonObject->mediaType))
			$this->mediaType = (int)$jsonObject->mediaType;
		if(!is_null($xml) && count($xml->conversionQuality))
			$this->conversionQuality = (string)$xml->conversionQuality;
		if(!is_null($jsonObject) && isset($jsonObject->conversionQuality))
			$this->conversionQuality = (string)$jsonObject->conversionQuality;
		if(!is_null($xml) && count($xml->sourceType))
			$this->sourceType = (string)$xml->sourceType;
		if(!is_null($jsonObject) && isset($jsonObject->sourceType))
			$this->sourceType = (string)$jsonObject->sourceType;
		if(!is_null($xml) && count($xml->sourceVersion))
			$this->sourceVersion = (string)$xml->sourceVersion;
		if(!is_null($jsonObject) && isset($jsonObject->sourceVersion))
			$this->sourceVersion = (string)$jsonObject->sourceVersion;
		if(!is_null($xml) && count($xml->searchProviderType))
			$this->searchProviderType = (int)$xml->searchProviderType;
		if(!is_null($jsonObject) && isset($jsonObject->searchProviderType))
			$this->searchProviderType = (int)$jsonObject->searchProviderType;
		if(!is_null($xml) && count($xml->searchProviderId))
			$this->searchProviderId = (string)$xml->searchProviderId;
		if(!is_null($jsonObject) && isset($jsonObject->searchProviderId))
			$this->searchProviderId = (string)$jsonObject->searchProviderId;
		if(!is_null($xml) && count($xml->creditUserName))
			$this->creditUserName = (string)$xml->creditUserName;
		if(!is_null($jsonObject) && isset($jsonObject->creditUserName))
			$this->creditUserName = (string)$jsonObject->creditUserName;
		if(!is_null($xml) && count($xml->creditUrl))
			$this->creditUrl = (string)$xml->creditUrl;
		if(!is_null($jsonObject) && isset($jsonObject->creditUrl))
			$this->creditUrl = (string)$jsonObject->creditUrl;
		if(!is_null($xml) && count($xml->mediaDate))
			$this->mediaDate = (int)$xml->mediaDate;
		if(!is_null($jsonObject) && isset($jsonObject->mediaDate))
			$this->mediaDate = (int)$jsonObject->mediaDate;
		if(!is_null($xml) && count($xml->dataUrl))
			$this->dataUrl = (string)$xml->dataUrl;
		if(!is_null($jsonObject) && isset($jsonObject->dataUrl))
			$this->dataUrl = (string)$jsonObject->dataUrl;
		if(!is_null($xml) && count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsIds))
			$this->flavorParamsIds = (string)$jsonObject->flavorParamsIds;
		if(!is_null($xml) && count($xml->isTrimDisabled))
			$this->isTrimDisabled = (int)$xml->isTrimDisabled;
		if(!is_null($jsonObject) && isset($jsonObject->isTrimDisabled))
			$this->isTrimDisabled = (int)$jsonObject->isTrimDisabled;
		if(!is_null($xml) && count($xml->streams))
		{
			if(empty($xml->streams))
				$this->streams = array();
			else
				$this->streams = Kaltura_Client_ParseUtils::unmarshalArray($xml->streams, "KalturaStreamContainer");
		}
		if(!is_null($jsonObject) && isset($jsonObject->streams))
		{
			if(empty($jsonObject->streams))
				$this->streams = array();
			else
				$this->streams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->streams, "KalturaStreamContainer");
		}
	}
	/**
	 * The media type of the entry
	 *
	 * @var Kaltura_Client_Enum_MediaType
	 * @insertonly
	 */
	public $mediaType = null;

	/**
	 * Override the default conversion quality
	 *
	 * @var string
	 * @insertonly
	 */
	public $conversionQuality = null;

	/**
	 * The source type of the entry
	 *
	 * @var Kaltura_Client_Enum_SourceType
	 * @insertonly
	 */
	public $sourceType = null;

	/**
	 * The source version of the entry
	 *
	 * @var string
	 * @insertonly
	 */
	public $sourceVersion = null;

	/**
	 * The search provider type used to import this entry
	 *
	 * @var Kaltura_Client_Enum_SearchProviderType
	 * @insertonly
	 */
	public $searchProviderType = null;

	/**
	 * The ID of the media in the importing site
	 *
	 * @var string
	 * @insertonly
	 */
	public $searchProviderId = null;

	/**
	 * The user name used for credits
	 *
	 * @var string
	 */
	public $creditUserName = null;

	/**
	 * The URL for credits
	 *
	 * @var string
	 */
	public $creditUrl = null;

	/**
	 * The media date extracted from EXIF data (For images) as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $mediaDate = null;

	/**
	 * The URL used for playback. This is not the download URL.
	 *
	 * @var string
	 * @readonly
	 */
	public $dataUrl = null;

	/**
	 * Comma separated flavor params ids that exists for this media entry
	 *
	 * @var string
	 * @readonly
	 */
	public $flavorParamsIds = null;

	/**
	 * True if trim action is disabled for this entry
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 * @readonly
	 */
	public $isTrimDisabled = null;

	/**
	 * Array of streams that exists on the entry
	 *
	 * @var array of KalturaStreamContainer
	 */
	public $streams;


}

