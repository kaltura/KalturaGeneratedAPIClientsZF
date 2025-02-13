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
class Kaltura_Client_Cielo24_Type_Cielo24JobProviderData extends Kaltura_Client_Integration_Type_IntegrationJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCielo24JobProviderData';
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
		if(!is_null($xml) && count($xml->captionAssetFormats))
			$this->captionAssetFormats = (string)$xml->captionAssetFormats;
		if(!is_null($jsonObject) && isset($jsonObject->captionAssetFormats))
			$this->captionAssetFormats = (string)$jsonObject->captionAssetFormats;
		if(!is_null($xml) && count($xml->priority))
			$this->priority = (string)$xml->priority;
		if(!is_null($jsonObject) && isset($jsonObject->priority))
			$this->priority = (string)$jsonObject->priority;
		if(!is_null($xml) && count($xml->fidelity))
			$this->fidelity = (string)$xml->fidelity;
		if(!is_null($jsonObject) && isset($jsonObject->fidelity))
			$this->fidelity = (string)$jsonObject->fidelity;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->baseUrl))
			$this->baseUrl = (string)$xml->baseUrl;
		if(!is_null($jsonObject) && isset($jsonObject->baseUrl))
			$this->baseUrl = (string)$jsonObject->baseUrl;
		if(!is_null($xml) && count($xml->spokenLanguage))
			$this->spokenLanguage = (string)$xml->spokenLanguage;
		if(!is_null($jsonObject) && isset($jsonObject->spokenLanguage))
			$this->spokenLanguage = (string)$jsonObject->spokenLanguage;
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
	 * Caption formats
	 *
	 * @var string
	 */
	public $captionAssetFormats = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Cielo24_Enum_Cielo24Priority
	 */
	public $priority = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Cielo24_Enum_Cielo24Fidelity
	 */
	public $fidelity = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $username = null;

	/**
	 * Api key for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $password = null;

	/**
	 * Base url for service provider
	 *
	 * @var string
	 * @readonly
	 */
	public $baseUrl = null;

	/**
	 * Transcript content language
	 *
	 * @var Kaltura_Client_Enum_Language
	 */
	public $spokenLanguage = null;

	/**
	 * should replace remote media content
	 *
	 * @var bool
	 */
	public $replaceMediaContent = null;

	/**
	 * additional parameters to send to Cielo24
	 *
	 * @var string
	 */
	public $additionalParameters = null;


}

