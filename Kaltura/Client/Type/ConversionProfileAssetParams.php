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
class Kaltura_Client_Type_ConversionProfileAssetParams extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaConversionProfileAssetParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileId))
			$this->conversionProfileId = (int)$jsonObject->conversionProfileId;
		if(!is_null($xml) && count($xml->assetParamsId))
			$this->assetParamsId = (int)$xml->assetParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->assetParamsId))
			$this->assetParamsId = (int)$jsonObject->assetParamsId;
		if(!is_null($xml) && count($xml->readyBehavior))
			$this->readyBehavior = (int)$xml->readyBehavior;
		if(!is_null($jsonObject) && isset($jsonObject->readyBehavior))
			$this->readyBehavior = (int)$jsonObject->readyBehavior;
		if(!is_null($xml) && count($xml->origin))
			$this->origin = (int)$xml->origin;
		if(!is_null($jsonObject) && isset($jsonObject->origin))
			$this->origin = (int)$jsonObject->origin;
		if(!is_null($xml) && count($xml->systemName))
			$this->systemName = (string)$xml->systemName;
		if(!is_null($jsonObject) && isset($jsonObject->systemName))
			$this->systemName = (string)$jsonObject->systemName;
		if(!is_null($xml) && count($xml->forceNoneComplied))
			$this->forceNoneComplied = (int)$xml->forceNoneComplied;
		if(!is_null($jsonObject) && isset($jsonObject->forceNoneComplied))
			$this->forceNoneComplied = (int)$jsonObject->forceNoneComplied;
		if(!is_null($xml) && count($xml->deletePolicy))
			$this->deletePolicy = (int)$xml->deletePolicy;
		if(!is_null($jsonObject) && isset($jsonObject->deletePolicy))
			$this->deletePolicy = (int)$jsonObject->deletePolicy;
		if(!is_null($xml) && count($xml->isEncrypted))
			$this->isEncrypted = (int)$xml->isEncrypted;
		if(!is_null($jsonObject) && isset($jsonObject->isEncrypted))
			$this->isEncrypted = (int)$jsonObject->isEncrypted;
		if(!is_null($xml) && count($xml->contentAwareness))
			$this->contentAwareness = (float)$xml->contentAwareness;
		if(!is_null($jsonObject) && isset($jsonObject->contentAwareness))
			$this->contentAwareness = (float)$jsonObject->contentAwareness;
		if(!is_null($xml) && count($xml->chunkedEncodeMode))
			$this->chunkedEncodeMode = (int)$xml->chunkedEncodeMode;
		if(!is_null($jsonObject) && isset($jsonObject->chunkedEncodeMode))
			$this->chunkedEncodeMode = (int)$jsonObject->chunkedEncodeMode;
		if(!is_null($xml) && count($xml->twoPass))
			$this->twoPass = (int)$xml->twoPass;
		if(!is_null($jsonObject) && isset($jsonObject->twoPass))
			$this->twoPass = (int)$jsonObject->twoPass;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->overloadParams))
			$this->overloadParams = (string)$xml->overloadParams;
		if(!is_null($jsonObject) && isset($jsonObject->overloadParams))
			$this->overloadParams = (string)$jsonObject->overloadParams;
	}
	/**
	 * The id of the conversion profile
	 *
	 * @var int
	 * @readonly
	 */
	public $conversionProfileId = null;

	/**
	 * The id of the asset params
	 *
	 * @var int
	 * @readonly
	 */
	public $assetParamsId = null;

	/**
	 * The ingestion origin of the asset params
	 *
	 * @var Kaltura_Client_Enum_FlavorReadyBehaviorType
	 */
	public $readyBehavior = null;

	/**
	 * The ingestion origin of the asset params
	 *
	 * @var Kaltura_Client_Enum_AssetParamsOrigin
	 */
	public $origin = null;

	/**
	 * Asset params system name
	 *
	 * @var string
	 */
	public $systemName = null;

	/**
	 * Starts conversion even if the decision layer reduced the configuration to comply with the source
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $forceNoneComplied = null;

	/**
	 * Specifies how to treat the flavor after conversion is finished
	 *
	 * @var Kaltura_Client_Enum_AssetParamsDeletePolicy
	 */
	public $deletePolicy = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isEncrypted = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $contentAwareness = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $chunkedEncodeMode = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $twoPass = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * JSON string containing an array of flavotParams field-value pairs.
	 *
	 * @var string
	 */
	public $overloadParams = null;


}

