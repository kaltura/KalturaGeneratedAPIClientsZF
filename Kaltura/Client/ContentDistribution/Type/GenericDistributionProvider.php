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
class Kaltura_Client_ContentDistribution_Type_GenericDistributionProvider extends Kaltura_Client_ContentDistribution_Type_DistributionProvider
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericDistributionProvider';
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
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->isDefault))
		{
			if(!empty($xml->isDefault) && ((int) $xml->isDefault === 1 || strtolower((string)$xml->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isDefault))
		{
			if(!empty($jsonObject->isDefault) && ((int) $jsonObject->isDefault === 1 || strtolower((string)$jsonObject->isDefault) === 'true'))
				$this->isDefault = true;
			else
				$this->isDefault = false;
		}
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->optionalFlavorParamsIds))
			$this->optionalFlavorParamsIds = (string)$xml->optionalFlavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->optionalFlavorParamsIds))
			$this->optionalFlavorParamsIds = (string)$jsonObject->optionalFlavorParamsIds;
		if(!is_null($xml) && count($xml->requiredFlavorParamsIds))
			$this->requiredFlavorParamsIds = (string)$xml->requiredFlavorParamsIds;
		if(!is_null($jsonObject) && isset($jsonObject->requiredFlavorParamsIds))
			$this->requiredFlavorParamsIds = (string)$jsonObject->requiredFlavorParamsIds;
		if(!is_null($xml) && count($xml->optionalThumbDimensions))
		{
			if(empty($xml->optionalThumbDimensions))
				$this->optionalThumbDimensions = array();
			else
				$this->optionalThumbDimensions = Kaltura_Client_ParseUtils::unmarshalArray($xml->optionalThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($jsonObject) && isset($jsonObject->optionalThumbDimensions))
		{
			if(empty($jsonObject->optionalThumbDimensions))
				$this->optionalThumbDimensions = array();
			else
				$this->optionalThumbDimensions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->optionalThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($xml) && count($xml->requiredThumbDimensions))
		{
			if(empty($xml->requiredThumbDimensions))
				$this->requiredThumbDimensions = array();
			else
				$this->requiredThumbDimensions = Kaltura_Client_ParseUtils::unmarshalArray($xml->requiredThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($jsonObject) && isset($jsonObject->requiredThumbDimensions))
		{
			if(empty($jsonObject->requiredThumbDimensions))
				$this->requiredThumbDimensions = array();
			else
				$this->requiredThumbDimensions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->requiredThumbDimensions, "KalturaDistributionThumbDimensions");
		}
		if(!is_null($xml) && count($xml->editableFields))
			$this->editableFields = (string)$xml->editableFields;
		if(!is_null($jsonObject) && isset($jsonObject->editableFields))
			$this->editableFields = (string)$jsonObject->editableFields;
		if(!is_null($xml) && count($xml->mandatoryFields))
			$this->mandatoryFields = (string)$xml->mandatoryFields;
		if(!is_null($jsonObject) && isset($jsonObject->mandatoryFields))
			$this->mandatoryFields = (string)$jsonObject->mandatoryFields;
	}
	/**
	 * Auto generated
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Generic distribution provider creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Generic distribution provider last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

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
	 * @var bool
	 */
	public $isDefault = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_GenericDistributionProviderStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $optionalFlavorParamsIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $requiredFlavorParamsIds = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_DistributionThumbDimensions[]
	 */
	public $optionalThumbDimensions;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_DistributionThumbDimensions[]
	 */
	public $requiredThumbDimensions;

	/**
	 * 
	 *
	 * @var string
	 */
	public $editableFields = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $mandatoryFields = null;


}

