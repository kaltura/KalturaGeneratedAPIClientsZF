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
abstract class Kaltura_Client_ElasticSearch_Type_ESearchParams extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->objectStatuses))
			$this->objectStatuses = (string)$xml->objectStatuses;
		if(!is_null($jsonObject) && isset($jsonObject->objectStatuses))
			$this->objectStatuses = (string)$jsonObject->objectStatuses;
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->orderBy) && !empty($xml->orderBy))
			$this->orderBy = Kaltura_Client_ParseUtils::unmarshalObject($xml->orderBy, "KalturaESearchOrderBy");
		if(!is_null($jsonObject) && isset($jsonObject->orderBy) && !empty($jsonObject->orderBy))
			$this->orderBy = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->orderBy, "KalturaESearchOrderBy");
		if(!is_null($xml) && count($xml->ignoreSynonym))
		{
			if(!empty($xml->ignoreSynonym) && ((int) $xml->ignoreSynonym === 1 || strtolower((string)$xml->ignoreSynonym) === 'true'))
				$this->ignoreSynonym = true;
			else
				$this->ignoreSynonym = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ignoreSynonym))
		{
			if(!empty($jsonObject->ignoreSynonym) && ((int) $jsonObject->ignoreSynonym === 1 || strtolower((string)$jsonObject->ignoreSynonym) === 'true'))
				$this->ignoreSynonym = true;
			else
				$this->ignoreSynonym = false;
		}
		if(!is_null($xml) && count($xml->objectIds))
			$this->objectIds = (string)$xml->objectIds;
		if(!is_null($jsonObject) && isset($jsonObject->objectIds))
			$this->objectIds = (string)$jsonObject->objectIds;
		if(!is_null($xml) && count($xml->objectIdsNotIn))
			$this->objectIdsNotIn = (int)$xml->objectIdsNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdsNotIn))
			$this->objectIdsNotIn = (int)$jsonObject->objectIdsNotIn;
		if(!is_null($xml) && count($xml->scoreFunctionParams) && !empty($xml->scoreFunctionParams))
			$this->scoreFunctionParams = Kaltura_Client_ParseUtils::unmarshalObject($xml->scoreFunctionParams, "KalturaESearchScoreFunctionParams");
		if(!is_null($jsonObject) && isset($jsonObject->scoreFunctionParams) && !empty($jsonObject->scoreFunctionParams))
			$this->scoreFunctionParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->scoreFunctionParams, "KalturaESearchScoreFunctionParams");
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $objectStatuses = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Type_ESearchOrderBy
	 */
	public $orderBy;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $ignoreSynonym = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIds = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $objectIdsNotIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Type_ESearchScoreFunctionParams
	 */
	public $scoreFunctionParams;


}

