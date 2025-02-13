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
class Kaltura_Client_Voicebase_Type_VoicebaseJobProviderData extends Kaltura_Client_Integration_Type_IntegrationJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaVoicebaseJobProviderData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->transcriptId))
			$this->transcriptId = (string)$xml->transcriptId;
		if(!is_null($jsonObject) && isset($jsonObject->transcriptId))
			$this->transcriptId = (string)$jsonObject->transcriptId;
		if(!is_null($xml) && count($xml->captionAssetFormats))
			$this->captionAssetFormats = (string)$xml->captionAssetFormats;
		if(!is_null($jsonObject) && isset($jsonObject->captionAssetFormats))
			$this->captionAssetFormats = (string)$jsonObject->captionAssetFormats;
		if(!is_null($xml) && count($xml->apiKey))
			$this->apiKey = (string)$xml->apiKey;
		if(!is_null($jsonObject) && isset($jsonObject->apiKey))
			$this->apiKey = (string)$jsonObject->apiKey;
		if(!is_null($xml) && count($xml->apiPassword))
			$this->apiPassword = (string)$xml->apiPassword;
		if(!is_null($jsonObject) && isset($jsonObject->apiPassword))
			$this->apiPassword = (string)$jsonObject->apiPassword;
		if(!is_null($xml) && count($xml->spokenLanguage))
			$this->spokenLanguage = (string)$xml->spokenLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->spokenLanguage))
			$this->spokenLanguage = (string)$jsonObject->spokenLanguage;
		if(!is_null($xml) && count($xml->fileLocation))
			$this->fileLocation = (string)$xml->fileLocation;
		if(!is_null($jsonObject) && isset($jsonObject->fileLocation))
			$this->fileLocation = (string)$jsonObject->fileLocation;
		if(!is_null($xml) && count($xml->replaceMediaContent))
		{
			if(!empty($xml->replaceMediaContent) && ((int) $xml->replaceMediaContent === 1 || strtolower((string)$xml->replaceMediaContent) === 'true'))
				$this->replaceMediaContent = true;
			else
				$this->replaceMediaContent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->replaceMediaContent))
		{
			if(!empty($jsonObject->replaceMediaContent) && ((int) $jsonObject->replaceMediaContent === 1 || strtolower((string)$jsonObject->replaceMediaContent) === 'true'))
				$this->replaceMediaContent = true;
			else
				$this->replaceMediaContent = false;
		}
		if(!is_null($xml) && count($xml->additionalParameters))
			$this->additionalParameters = (string)$xml->additionalParameters;
		if(!is_null($jsonObject) && isset($jsonObject->additionalParameters))
			$this->additionalParameters = (string)$jsonObject->additionalParameters;
	}
	/**
	 * Entry ID
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * Flavor ID
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * input Transcript-asset ID
	 *
	 * @var string
	 */
	public $transcriptId = null;

	/**
	 * Caption formats
	 *
	 * @var string
	 */
	public $captionAssetFormats = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $apiKey = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $apiPassword = null;

	/**
	 * Transcript content language
	 *
	 * @var Kaltura_Client_Enum_Language
	 */
	public $spokenLanguage = null;

	/**
	 * Transcript Content location
	 *
	 * @var string
	 * @readonly
	 */
	public $fileLocation = null;

	/**
	 * should replace remote media content
	 *
	 * @var bool
	 */
	public $replaceMediaContent = null;

	/**
	 * additional parameters to send to VoiceBase
	 *
	 * @var string
	 * @readonly
	 */
	public $additionalParameters = null;


}

