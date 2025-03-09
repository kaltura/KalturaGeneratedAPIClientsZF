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
class Kaltura_Client_ContentDistribution_Type_DistributionFieldConfig extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDistributionFieldConfig';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fieldName))
			$this->fieldName = (string)$xml->fieldName;
		if(!is_null($jsonObject) && isset($jsonObject->fieldName))
			$this->fieldName = (string)$jsonObject->fieldName;
		if(!is_null($xml) && count($xml->userFriendlyFieldName))
			$this->userFriendlyFieldName = (string)$xml->userFriendlyFieldName;
		if(!is_null($jsonObject) && isset($jsonObject->userFriendlyFieldName))
			$this->userFriendlyFieldName = (string)$jsonObject->userFriendlyFieldName;
		if(!is_null($xml) && count($xml->entryMrssXslt))
			$this->entryMrssXslt = (string)$xml->entryMrssXslt;
		if(!is_null($jsonObject) && isset($jsonObject->entryMrssXslt))
			$this->entryMrssXslt = (string)$jsonObject->entryMrssXslt;
		if(!is_null($xml) && count($xml->isRequired))
			$this->isRequired = (int)$xml->isRequired;
		if(!is_null($jsonObject) && isset($jsonObject->isRequired))
			$this->isRequired = (int)$jsonObject->isRequired;
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->updateOnChange))
		{
			if(!empty($xml->updateOnChange) && ((int) $xml->updateOnChange === 1 || strtolower((string)$xml->updateOnChange) === 'true'))
				$this->updateOnChange = true;
			else
				$this->updateOnChange = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->updateOnChange))
		{
			if(!empty($jsonObject->updateOnChange) && ((int) $jsonObject->updateOnChange === 1 || strtolower((string)$jsonObject->updateOnChange) === 'true'))
				$this->updateOnChange = true;
			else
				$this->updateOnChange = false;
		}
		if(!is_null($xml) && count($xml->updateParams))
		{
			if(empty($xml->updateParams))
				$this->updateParams = array();
			else
				$this->updateParams = Kaltura_Client_ParseUtils::unmarshalArray($xml->updateParams, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->updateParams))
		{
			if(empty($jsonObject->updateParams))
				$this->updateParams = array();
			else
				$this->updateParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->updateParams, "KalturaString");
		}
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
		if(!is_null($xml) && count($xml->triggerDeleteOnError))
		{
			if(!empty($xml->triggerDeleteOnError) && ((int) $xml->triggerDeleteOnError === 1 || strtolower((string)$xml->triggerDeleteOnError) === 'true'))
				$this->triggerDeleteOnError = true;
			else
				$this->triggerDeleteOnError = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->triggerDeleteOnError))
		{
			if(!empty($jsonObject->triggerDeleteOnError) && ((int) $jsonObject->triggerDeleteOnError === 1 || strtolower((string)$jsonObject->triggerDeleteOnError) === 'true'))
				$this->triggerDeleteOnError = true;
			else
				$this->triggerDeleteOnError = false;
		}
	}
	/**
	 * A value taken from a connector field enum which associates the current configuration to that connector field
	 *      Field enum class should be returned by the provider's getFieldEnumClass function.
	 *
	 * @var string
	 */
	public $fieldName = null;

	/**
	 * A string that will be shown to the user as the field name in error messages related to the current field
	 *
	 * @var string
	 */
	public $userFriendlyFieldName = null;

	/**
	 * An XSLT string that extracts the right value from the Kaltura entry MRSS XML.
	 *      The value of the current connector field will be the one that is returned from transforming the Kaltura entry MRSS XML using this XSLT string.
	 *
	 * @var string
	 */
	public $entryMrssXslt = null;

	/**
	 * Is the field required to have a value for submission ?
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionFieldRequiredStatus
	 */
	public $isRequired = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $type = null;

	/**
	 * Trigger distribution update when this field changes or not ?
	 *
	 * @var bool
	 */
	public $updateOnChange = null;

	/**
	 * Entry column or metadata xpath that should trigger an update
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $updateParams;

	/**
	 * Is this field config is the default for the distribution provider?
	 *
	 * @var bool
	 * @readonly
	 */
	public $isDefault = null;

	/**
	 * Is an error on this field going to trigger deletion of distributed content?
	 *
	 * @var bool
	 */
	public $triggerDeleteOnError = null;


}

