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
class Kaltura_Client_Type_ClipConcatJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaClipConcatJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->destEntryId))
			$this->destEntryId = (string)$xml->destEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->destEntryId))
			$this->destEntryId = (string)$jsonObject->destEntryId;
		if(!is_null($xml) && count($xml->tempEntryId))
			$this->tempEntryId = (string)$xml->tempEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->tempEntryId))
			$this->tempEntryId = (string)$jsonObject->tempEntryId;
		if(!is_null($xml) && count($xml->sourceEntryId))
			$this->sourceEntryId = (string)$xml->sourceEntryId;
		if(!is_null($jsonObject) && isset($jsonObject->sourceEntryId))
			$this->sourceEntryId = (string)$jsonObject->sourceEntryId;
		if(!is_null($xml) && count($xml->importUrl))
			$this->importUrl = (string)$xml->importUrl;
		if(!is_null($jsonObject) && isset($jsonObject->importUrl))
			$this->importUrl = (string)$jsonObject->importUrl;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->priority))
			$this->priority = (int)$xml->priority;
		if(!is_null($jsonObject) && isset($jsonObject->priority))
			$this->priority = (int)$jsonObject->priority;
		if(!is_null($xml) && count($xml->operationAttributes))
		{
			if(empty($xml->operationAttributes))
				$this->operationAttributes = array();
			else
				$this->operationAttributes = Kaltura_Client_ParseUtils::unmarshalArray($xml->operationAttributes, "KalturaOperationAttributes");
		}
		if(!is_null($jsonObject) && isset($jsonObject->operationAttributes))
		{
			if(empty($jsonObject->operationAttributes))
				$this->operationAttributes = array();
			else
				$this->operationAttributes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->operationAttributes, "KalturaOperationAttributes");
		}
		if(!is_null($xml) && count($xml->resourceOrder))
			$this->resourceOrder = (int)$xml->resourceOrder;
		if(!is_null($jsonObject) && isset($jsonObject->resourceOrder))
			$this->resourceOrder = (int)$jsonObject->resourceOrder;
		if(!is_null($xml) && count($xml->conversionParams))
			$this->conversionParams = (string)$xml->conversionParams;
		if(!is_null($jsonObject) && isset($jsonObject->conversionParams))
			$this->conversionParams = (string)$jsonObject->conversionParams;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $destEntryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tempEntryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceEntryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $importUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $priority = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_OperationAttributes[]
	 */
	public $operationAttributes;

	/**
	 * 
	 *
	 * @var int
	 */
	public $resourceOrder = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $conversionParams = null;


}

