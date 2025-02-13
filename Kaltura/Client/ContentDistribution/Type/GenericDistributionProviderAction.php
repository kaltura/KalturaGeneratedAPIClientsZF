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
class Kaltura_Client_ContentDistribution_Type_GenericDistributionProviderAction extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericDistributionProviderAction';
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
		if(!is_null($xml) && count($xml->genericDistributionProviderId))
			$this->genericDistributionProviderId = (int)$xml->genericDistributionProviderId;
		if(!is_null($jsonObject) && isset($jsonObject->genericDistributionProviderId))
			$this->genericDistributionProviderId = (int)$jsonObject->genericDistributionProviderId;
		if(!is_null($xml) && count($xml->action))
			$this->action = (int)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (int)$jsonObject->action;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->resultsParser))
			$this->resultsParser = (int)$xml->resultsParser;
		if(!is_null($jsonObject) && isset($jsonObject->resultsParser))
			$this->resultsParser = (int)$jsonObject->resultsParser;
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (int)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (int)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->serverAddress))
			$this->serverAddress = (string)$xml->serverAddress;
		if(!is_null($jsonObject) && isset($jsonObject->serverAddress))
			$this->serverAddress = (string)$jsonObject->serverAddress;
		if(!is_null($xml) && count($xml->remotePath))
			$this->remotePath = (string)$xml->remotePath;
		if(!is_null($jsonObject) && isset($jsonObject->remotePath))
			$this->remotePath = (string)$jsonObject->remotePath;
		if(!is_null($xml) && count($xml->remoteUsername))
			$this->remoteUsername = (string)$xml->remoteUsername;
		if(!is_null($jsonObject) && isset($jsonObject->remoteUsername))
			$this->remoteUsername = (string)$jsonObject->remoteUsername;
		if(!is_null($xml) && count($xml->remotePassword))
			$this->remotePassword = (string)$xml->remotePassword;
		if(!is_null($jsonObject) && isset($jsonObject->remotePassword))
			$this->remotePassword = (string)$jsonObject->remotePassword;
		if(!is_null($xml) && count($xml->editableFields))
			$this->editableFields = (string)$xml->editableFields;
		if(!is_null($jsonObject) && isset($jsonObject->editableFields))
			$this->editableFields = (string)$jsonObject->editableFields;
		if(!is_null($xml) && count($xml->mandatoryFields))
			$this->mandatoryFields = (string)$xml->mandatoryFields;
		if(!is_null($jsonObject) && isset($jsonObject->mandatoryFields))
			$this->mandatoryFields = (string)$jsonObject->mandatoryFields;
		if(!is_null($xml) && count($xml->mrssTransformer))
			$this->mrssTransformer = (string)$xml->mrssTransformer;
		if(!is_null($jsonObject) && isset($jsonObject->mrssTransformer))
			$this->mrssTransformer = (string)$jsonObject->mrssTransformer;
		if(!is_null($xml) && count($xml->mrssValidator))
			$this->mrssValidator = (string)$xml->mrssValidator;
		if(!is_null($jsonObject) && isset($jsonObject->mrssValidator))
			$this->mrssValidator = (string)$jsonObject->mrssValidator;
		if(!is_null($xml) && count($xml->resultsTransformer))
			$this->resultsTransformer = (string)$xml->resultsTransformer;
		if(!is_null($jsonObject) && isset($jsonObject->resultsTransformer))
			$this->resultsTransformer = (string)$jsonObject->resultsTransformer;
	}
	/**
	 * Auto generated
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * Generic distribution provider action creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Generic distribution provider action last update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $genericDistributionProviderId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionAction
	 * @insertonly
	 */
	public $action = null;

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
	 * @var Kaltura_Client_ContentDistribution_Enum_GenericDistributionProviderParser
	 */
	public $resultsParser = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProtocol
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverAddress = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remotePath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remoteUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $remotePassword = null;

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

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $mrssTransformer = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $mrssValidator = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $resultsTransformer = null;


}

