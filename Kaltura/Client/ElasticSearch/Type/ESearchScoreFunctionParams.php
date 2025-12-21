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
class Kaltura_Client_ElasticSearch_Type_ESearchScoreFunctionParams extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchScoreFunctionParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->decayAlgorithm))
			$this->decayAlgorithm = (string)$xml->decayAlgorithm;
		if(!is_null($jsonObject) && isset($jsonObject->decayAlgorithm))
			$this->decayAlgorithm = (string)$jsonObject->decayAlgorithm;
		if(!is_null($xml) && count($xml->functionField))
			$this->functionField = (string)$xml->functionField;
		if(!is_null($jsonObject) && isset($jsonObject->functionField))
			$this->functionField = (string)$jsonObject->functionField;
		if(!is_null($xml) && count($xml->boostMode))
			$this->boostMode = (string)$xml->boostMode;
		if(!is_null($jsonObject) && isset($jsonObject->boostMode))
			$this->boostMode = (string)$jsonObject->boostMode;
		if(!is_null($xml) && count($xml->origin))
			$this->origin = (string)$xml->origin;
		if(!is_null($jsonObject) && isset($jsonObject->origin))
			$this->origin = (string)$jsonObject->origin;
		if(!is_null($xml) && count($xml->weight))
			$this->weight = (float)$xml->weight;
		if(!is_null($jsonObject) && isset($jsonObject->weight))
			$this->weight = (float)$jsonObject->weight;
		if(!is_null($xml) && count($xml->scale))
			$this->scale = (string)$xml->scale;
		if(!is_null($jsonObject) && isset($jsonObject->scale))
			$this->scale = (string)$jsonObject->scale;
		if(!is_null($xml) && count($xml->decay))
			$this->decay = (float)$xml->decay;
		if(!is_null($jsonObject) && isset($jsonObject->decay))
			$this->decay = (float)$jsonObject->decay;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Enum_ESearchScoreFunctionDecayAlgorithm
	 */
	public $decayAlgorithm = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Enum_ESearchScoreFunctionField
	 */
	public $functionField = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Enum_ESearchScoreFunctionBoostMode
	 */
	public $boostMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Enum_ESearchScoreFunctionOrigin
	 */
	public $origin = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $weight = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $scale = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $decay = null;


}

