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
class Kaltura_Client_ContentDistribution_Type_DistributionValidationErrorInvalidData extends Kaltura_Client_ContentDistribution_Type_DistributionValidationError
{
	public function getKalturaObjectType()
	{
		return 'KalturaDistributionValidationErrorInvalidData';
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
		if(!is_null($xml) && count($xml->validationErrorType))
			$this->validationErrorType = (int)$xml->validationErrorType;
		if(!is_null($jsonObject) && isset($jsonObject->validationErrorType))
			$this->validationErrorType = (int)$jsonObject->validationErrorType;
		if(!is_null($xml) && count($xml->validationErrorParam))
			$this->validationErrorParam = (string)$xml->validationErrorParam;
		if(!is_null($jsonObject) && isset($jsonObject->validationErrorParam))
			$this->validationErrorParam = (string)$jsonObject->validationErrorParam;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $fieldName = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionValidationErrorType
	 */
	public $validationErrorType = null;

	/**
	 * Parameter of the validation error
	 * 	 For example, minimum value for KalturaDistributionValidationErrorType::STRING_TOO_SHORT validation error
	 *
	 * @var string
	 */
	public $validationErrorParam = null;


}

