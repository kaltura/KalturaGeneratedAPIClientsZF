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
class Kaltura_Client_Reach_Type_ReachProfile extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaReachProfile';
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
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->profileType))
			$this->profileType = (int)$xml->profileType;
		if(!is_null($jsonObject) && isset($jsonObject->profileType))
			$this->profileType = (int)$jsonObject->profileType;
		if(!is_null($xml) && count($xml->defaultOutputFormat))
			$this->defaultOutputFormat = (int)$xml->defaultOutputFormat;
		if(!is_null($jsonObject) && isset($jsonObject->defaultOutputFormat))
			$this->defaultOutputFormat = (int)$jsonObject->defaultOutputFormat;
		if(!is_null($xml) && count($xml->enableMachineModeration))
			$this->enableMachineModeration = (int)$xml->enableMachineModeration;
		if(!is_null($jsonObject) && isset($jsonObject->enableMachineModeration))
			$this->enableMachineModeration = (int)$jsonObject->enableMachineModeration;
		if(!is_null($xml) && count($xml->enableHumanModeration))
			$this->enableHumanModeration = (int)$xml->enableHumanModeration;
		if(!is_null($jsonObject) && isset($jsonObject->enableHumanModeration))
			$this->enableHumanModeration = (int)$jsonObject->enableHumanModeration;
		if(!is_null($xml) && count($xml->autoDisplayMachineCaptionsOnPlayer))
			$this->autoDisplayMachineCaptionsOnPlayer = (int)$xml->autoDisplayMachineCaptionsOnPlayer;
		if(!is_null($jsonObject) && isset($jsonObject->autoDisplayMachineCaptionsOnPlayer))
			$this->autoDisplayMachineCaptionsOnPlayer = (int)$jsonObject->autoDisplayMachineCaptionsOnPlayer;
		if(!is_null($xml) && count($xml->autoDisplayHumanCaptionsOnPlayer))
			$this->autoDisplayHumanCaptionsOnPlayer = (int)$xml->autoDisplayHumanCaptionsOnPlayer;
		if(!is_null($jsonObject) && isset($jsonObject->autoDisplayHumanCaptionsOnPlayer))
			$this->autoDisplayHumanCaptionsOnPlayer = (int)$jsonObject->autoDisplayHumanCaptionsOnPlayer;
		if(!is_null($xml) && count($xml->enableMetadataExtraction))
			$this->enableMetadataExtraction = (int)$xml->enableMetadataExtraction;
		if(!is_null($jsonObject) && isset($jsonObject->enableMetadataExtraction))
			$this->enableMetadataExtraction = (int)$jsonObject->enableMetadataExtraction;
		if(!is_null($xml) && count($xml->enableSpeakerChangeIndication))
			$this->enableSpeakerChangeIndication = (int)$xml->enableSpeakerChangeIndication;
		if(!is_null($jsonObject) && isset($jsonObject->enableSpeakerChangeIndication))
			$this->enableSpeakerChangeIndication = (int)$jsonObject->enableSpeakerChangeIndication;
		if(!is_null($xml) && count($xml->enableAudioTags))
			$this->enableAudioTags = (int)$xml->enableAudioTags;
		if(!is_null($jsonObject) && isset($jsonObject->enableAudioTags))
			$this->enableAudioTags = (int)$jsonObject->enableAudioTags;
		if(!is_null($xml) && count($xml->enableProfanityRemoval))
			$this->enableProfanityRemoval = (int)$xml->enableProfanityRemoval;
		if(!is_null($jsonObject) && isset($jsonObject->enableProfanityRemoval))
			$this->enableProfanityRemoval = (int)$jsonObject->enableProfanityRemoval;
		if(!is_null($xml) && count($xml->maxCharactersPerCaptionLine))
			$this->maxCharactersPerCaptionLine = (int)$xml->maxCharactersPerCaptionLine;
		if(!is_null($jsonObject) && isset($jsonObject->maxCharactersPerCaptionLine))
			$this->maxCharactersPerCaptionLine = (int)$jsonObject->maxCharactersPerCaptionLine;
		if(!is_null($xml) && count($xml->labelAdditionForMachineServiceType))
			$this->labelAdditionForMachineServiceType = (string)$xml->labelAdditionForMachineServiceType;
		if(!is_null($jsonObject) && isset($jsonObject->labelAdditionForMachineServiceType))
			$this->labelAdditionForMachineServiceType = (string)$jsonObject->labelAdditionForMachineServiceType;
		if(!is_null($xml) && count($xml->labelAdditionForHumanServiceType))
			$this->labelAdditionForHumanServiceType = (string)$xml->labelAdditionForHumanServiceType;
		if(!is_null($jsonObject) && isset($jsonObject->labelAdditionForHumanServiceType))
			$this->labelAdditionForHumanServiceType = (string)$jsonObject->labelAdditionForHumanServiceType;
		if(!is_null($xml) && count($xml->contentDeletionPolicy))
			$this->contentDeletionPolicy = (int)$xml->contentDeletionPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->contentDeletionPolicy))
			$this->contentDeletionPolicy = (int)$jsonObject->contentDeletionPolicy;
		if(!is_null($xml) && count($xml->rules))
		{
			if(empty($xml->rules))
				$this->rules = array();
			else
				$this->rules = Kaltura_Client_ParseUtils::unmarshalArray($xml->rules, "KalturaRule");
		}
		if(!is_null($jsonObject) && isset($jsonObject->rules))
		{
			if(empty($jsonObject->rules))
				$this->rules = array();
			else
				$this->rules = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->rules, "KalturaRule");
		}
		if(!is_null($xml) && count($xml->credit) && !empty($xml->credit))
			$this->credit = Kaltura_Client_ParseUtils::unmarshalObject($xml->credit, "KalturaBaseVendorCredit");
		if(!is_null($jsonObject) && isset($jsonObject->credit) && !empty($jsonObject->credit))
			$this->credit = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->credit, "KalturaBaseVendorCredit");
		if(!is_null($xml) && count($xml->usedCredit))
			$this->usedCredit = (float)$xml->usedCredit;
		if(!is_null($jsonObject) && isset($jsonObject->usedCredit))
			$this->usedCredit = (float)$jsonObject->usedCredit;
		if(!is_null($xml) && count($xml->dictionaries))
		{
			if(empty($xml->dictionaries))
				$this->dictionaries = array();
			else
				$this->dictionaries = Kaltura_Client_ParseUtils::unmarshalArray($xml->dictionaries, "KalturaDictionary");
		}
		if(!is_null($jsonObject) && isset($jsonObject->dictionaries))
		{
			if(empty($jsonObject->dictionaries))
				$this->dictionaries = array();
			else
				$this->dictionaries = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->dictionaries, "KalturaDictionary");
		}
		if(!is_null($xml) && count($xml->flavorParamsIds))
			$this->flavorParamsIds = (string)$xml->flavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamsIds))
			$this->flavorParamsIds = (string)$jsonObject->flavorParamsIds;
		if(!is_null($xml) && count($xml->vendorTaskProcessingRegion))
			$this->vendorTaskProcessingRegion = (int)$xml->vendorTaskProcessingRegion;
		if(!is_null($jsonObject) && isset($jsonObject->vendorTaskProcessingRegion))
			$this->vendorTaskProcessingRegion = (int)$jsonObject->vendorTaskProcessingRegion;
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The name of the profile
	 *
	 * @var string
	 */
	public $name = null;

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
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_ReachProfileStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_ReachProfileType
	 */
	public $profileType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorCatalogItemOutputFormat
	 */
	public $defaultOutputFormat = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableMachineModeration = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableHumanModeration = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $autoDisplayMachineCaptionsOnPlayer = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $autoDisplayHumanCaptionsOnPlayer = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableMetadataExtraction = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableSpeakerChangeIndication = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableAudioTags = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $enableProfanityRemoval = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxCharactersPerCaptionLine = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelAdditionForMachineServiceType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $labelAdditionForHumanServiceType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_ReachProfileContentDeletionPolicy
	 */
	public $contentDeletionPolicy = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_Rule[]
	 */
	public $rules;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Type_BaseVendorCredit
	 */
	public $credit;

	/**
	 * 
	 *
	 * @var float
	 * @readonly
	 */
	public $usedCredit = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Type_Dictionary[]
	 */
	public $dictionaries;

	/**
	 * Comma separated flavorParamsIds that the vendor should look for it matching asset when trying to download the asset
	 *
	 * @var string
	 */
	public $flavorParamsIds = null;

	/**
	 * Indicates in which region the task processing should task place
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorTaskProcessingRegion
	 */
	public $vendorTaskProcessingRegion = null;


}

