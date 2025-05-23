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
class Kaltura_Client_Type_ConversionProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConversionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->status))
			$this->status = (string)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (string)$jsonObject->status;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->defaultEntryId))
			$this->defaultEntryId = (string)$xml->defaultEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->defaultEntryId))
			$this->defaultEntryId = (string)$jsonObject->defaultEntryId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsIds))
			$this->flavorParamsIds = (string)$jsonObject->flavorParamsIds;
		if(!is_null($xml) && count($xml->isDefault))
			$this->isDefault = (int)$xml->isDefault;
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
			$this->isDefault = (int)$jsonObject->isDefault;
		if(!is_null($xml) && count($xml->isPartnerDefault))
		{
			if(!empty($xml->isPartnerDefault) && ((int) $xml->isPartnerDefault === 1 || strtolower((string)$xml->isPartnerDefault) === 'true'))
				$this->isPartnerDefault = true;
			else
				$this->isPartnerDefault = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isPartnerDefault))
		{
			if(!empty($jsonObject->isPartnerDefault) && ((int) $jsonObject->isPartnerDefault === 1 || strtolower((string)$jsonObject->isPartnerDefault) === 'true'))
				$this->isPartnerDefault = true;
			else
				$this->isPartnerDefault = false;
		}
		if(!is_null($xml) && count($xml->cropDimensions) && !empty($xml->cropDimensions))
			$this->cropDimensions = Kaltura_Client_ParseUtils::unmarshalObject($xml->cropDimensions, "KalturaCropDimensions");
		if(!is_null($jsonObject) && isset($jsonObject->cropDimensions) && !empty($jsonObject->cropDimensions))
			$this->cropDimensions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->cropDimensions, "KalturaCropDimensions");
		if(!is_null($xml) && count($xml->clipStart))
			$this->clipStart = (int)$xml->clipStart;
		if(!is_null($jsonObject) && isset($jsonObject->clipStart))
			$this->clipStart = (int)$jsonObject->clipStart;
		if(!is_null($xml) && count($xml->clipDuration))
			$this->clipDuration = (int)$xml->clipDuration;
		if(!is_null($jsonObject) && isset($jsonObject->clipDuration))
			$this->clipDuration = (int)$jsonObject->clipDuration;
		if(!is_null($xml) && count($xml->xslTransformation))
			$this->xslTransformation = (string)$xml->xslTransformation;
		if(!is_null($jsonObject) && isset($jsonObject->xslTransformation))
			$this->xslTransformation = (string)$jsonObject->xslTransformation;
		if(!is_null($xml) && count($xml->storageProfileId))
			$this->storageProfileId = (int)$xml->storageProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->storageProfileId))
			$this->storageProfileId = (int)$jsonObject->storageProfileId;
		if(!is_null($xml) && count($xml->mediaParserType))
			$this->mediaParserType = (string)$xml->mediaParserType;
		if(!is_null($jsonObject) && isset($jsonObject->mediaParserType))
			$this->mediaParserType = (string)$jsonObject->mediaParserType;
		if(!is_null($xml) && count($xml->calculateComplexity))
			$this->calculateComplexity = (int)$xml->calculateComplexity;
		if(!is_null($jsonObject) && isset($jsonObject->calculateComplexity))
			$this->calculateComplexity = (int)$jsonObject->calculateComplexity;
		if(!is_null($xml) && count($xml->collectionTags))
			$this->collectionTags = (string)$xml->collectionTags;
		if(!is_null($jsonObject) && isset($jsonObject->collectionTags))
			$this->collectionTags = (string)$jsonObject->collectionTags;
		if(!is_null($xml) && count($xml->conditionalProfiles))
			$this->conditionalProfiles = (string)$xml->conditionalProfiles;
		if(!is_null($jsonObject) && isset($jsonObject->conditionalProfiles))
			$this->conditionalProfiles = (string)$jsonObject->conditionalProfiles;
		if(!is_null($xml) && count($xml->detectGOP))
			$this->detectGOP = (int)$xml->detectGOP;
		if(!is_null($jsonObject) && isset($jsonObject->detectGOP))
			$this->detectGOP = (int)$jsonObject->detectGOP;
		if(!is_null($xml) && count($xml->mediaInfoXslTransformation))
			$this->mediaInfoXslTransformation = (string)$xml->mediaInfoXslTransformation;
		if(!is_null($jsonObject) && isset($jsonObject->mediaInfoXslTransformation))
			$this->mediaInfoXslTransformation = (string)$jsonObject->mediaInfoXslTransformation;
		if(!is_null($xml) && count($xml->defaultReplacementOptions) && !empty($xml->defaultReplacementOptions))
			$this->defaultReplacementOptions = Kaltura_Client_ParseUtils::unmarshalObject($xml->defaultReplacementOptions, "KalturaEntryReplacementOptions");
		if(!is_null($jsonObject) && isset($jsonObject->defaultReplacementOptions) && !empty($jsonObject->defaultReplacementOptions))
			$this->defaultReplacementOptions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->defaultReplacementOptions, "KalturaEntryReplacementOptions");
		if(!is_null($xml) && count($xml->defaultAudioLang))
			$this->defaultAudioLang = (string)$xml->defaultAudioLang;
		if(!is_null($jsonObject) && isset($jsonObject->defaultAudioLang))
			$this->defaultAudioLang = (string)$jsonObject->defaultAudioLang;
		if(!is_null($xml) && count($xml->deliveryTag))
			$this->deliveryTag = (string)$xml->deliveryTag;
		if(!is_null($jsonObject) && isset($jsonObject->deliveryTag))
			$this->deliveryTag = (string)$jsonObject->deliveryTag;
	}
	/**
	 * The id of the Conversion Profile
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ConversionProfileStatus
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ConversionProfileType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * The name of the Conversion Profile
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * System name of the Conversion Profile
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Comma separated tags
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * The description of the Conversion Profile
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * ID of the default entry to be used for template data
	 *
	 * @var string
	 */
	public $defaultEntryId = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * List of included flavor ids (comma separated)
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * Indicates that this conversion profile is system default
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isDefault = null;

	/**
	 * Indicates that this conversion profile is partner default
	 *
	 * @var bool
	 * @readonly
	 */
	public $isPartnerDefault = null;

	/**
	 * Cropping dimensions
	 *
	 * @var Kaltura_Client_Type_CropDimensions
	 */
	public $cropDimensions;

	/**
	 * Clipping start position (in miliseconds)
	 *
	 * @var int
	 */
	public $clipStart = null;

	/**
	 * Clipping duration (in miliseconds)
	 *
	 * @var int
	 */
	public $clipDuration = null;

	/**
	 * XSL to transform ingestion MRSS XML
	 *
	 * @var string
	 */
	public $xslTransformation = null;

	/**
	 * ID of default storage profile to be used for linked net-storage file syncs
	 *
	 * @var int
	 */
	public $storageProfileId = null;

	/**
	 * Media parser type to be used for extract media
	 *
	 * @var Kaltura_Client_Enum_MediaParserType
	 */
	public $mediaParserType = null;

	/**
	 * Should calculate file conversion complexity
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $calculateComplexity = null;

	/**
	 * Defines the tags that should be used to define 'collective'/group/multi-flavor processing,
	 * 	 like 'mbr' or 'ism'
	 *
	 * @var string
	 */
	public $collectionTags = null;

	/**
	 * JSON string with array of "condition,profile-id" pairs.
	 *
	 * @var string
	 */
	public $conditionalProfiles = null;

	/**
	 * When set, the ExtractMedia job should detect the source file GOP using this value as the max calculated period
	 *
	 * @var int
	 */
	public $detectGOP = null;

	/**
	 * XSL to transform ingestion Media Info XML
	 *
	 * @var string
	 */
	public $mediaInfoXslTransformation = null;

	/**
	 * Default replacement options to be applied to entries
	 *
	 * @var Kaltura_Client_Type_EntryReplacementOptions
	 */
	public $defaultReplacementOptions;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_Language
	 */
	public $defaultAudioLang = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $deliveryTag = null;


}

