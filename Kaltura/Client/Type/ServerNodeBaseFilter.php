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
abstract class Kaltura_Client_Type_ServerNodeBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaServerNodeBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idEqual))
			$this->idEqual = (int)$jsonObject->idEqual;
		if(!is_null($xml) && count($xml->idIn))
			$this->idIn = (string)$xml->idIn;
		if(!is_null($jsonObject) && isset($jsonObject->idIn))
			$this->idIn = (string)$jsonObject->idIn;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$xml->updatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtGreaterThanOrEqual))
			$this->updatedAtGreaterThanOrEqual = (int)$jsonObject->updatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$xml->updatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAtLessThanOrEqual))
			$this->updatedAtLessThanOrEqual = (int)$jsonObject->updatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->heartbeatTimeGreaterThanOrEqual))
			$this->heartbeatTimeGreaterThanOrEqual = (int)$xml->heartbeatTimeGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->heartbeatTimeGreaterThanOrEqual))
			$this->heartbeatTimeGreaterThanOrEqual = (int)$jsonObject->heartbeatTimeGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->heartbeatTimeLessThanOrEqual))
			$this->heartbeatTimeLessThanOrEqual = (int)$xml->heartbeatTimeLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->heartbeatTimeLessThanOrEqual))
			$this->heartbeatTimeLessThanOrEqual = (int)$jsonObject->heartbeatTimeLessThanOrEqual;
		if(!is_null($xml) && count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->nameEqual))
			$this->nameEqual = (string)$jsonObject->nameEqual;
		if(!is_null($xml) && count($xml->nameIn))
			$this->nameIn = (string)$xml->nameIn;
		if(!is_null($jsonObject) && isset($jsonObject->nameIn))
			$this->nameIn = (string)$jsonObject->nameIn;
		if(!is_null($xml) && count($xml->systemNameEqual))
			$this->systemNameEqual = (string)$xml->systemNameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameEqual))
			$this->systemNameEqual = (string)$jsonObject->systemNameEqual;
		if(!is_null($xml) && count($xml->systemNameIn))
			$this->systemNameIn = (string)$xml->systemNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->systemNameIn))
			$this->systemNameIn = (string)$jsonObject->systemNameIn;
		if(!is_null($xml) && count($xml->hostNameLike))
			$this->hostNameLike = (string)$xml->hostNameLike;
		if(!is_null($jsonObject) && isset($jsonObject->hostNameLike))
			$this->hostNameLike = (string)$jsonObject->hostNameLike;
		if(!is_null($xml) && count($xml->hostNameMultiLikeOr))
			$this->hostNameMultiLikeOr = (string)$xml->hostNameMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->hostNameMultiLikeOr))
			$this->hostNameMultiLikeOr = (string)$jsonObject->hostNameMultiLikeOr;
		if(!is_null($xml) && count($xml->hostNameMultiLikeAnd))
			$this->hostNameMultiLikeAnd = (string)$xml->hostNameMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->hostNameMultiLikeAnd))
			$this->hostNameMultiLikeAnd = (string)$jsonObject->hostNameMultiLikeAnd;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->typeEqual))
			$this->typeEqual = (string)$xml->typeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->typeEqual))
			$this->typeEqual = (string)$jsonObject->typeEqual;
		if(!is_null($xml) && count($xml->typeIn))
			$this->typeIn = (string)$xml->typeIn;
		if(!is_null($jsonObject) && isset($jsonObject->typeIn))
			$this->typeIn = (string)$jsonObject->typeIn;
		if(!is_null($xml) && count($xml->tagsLike))
			$this->tagsLike = (string)$xml->tagsLike;
		if(!is_null($jsonObject) && isset($jsonObject->tagsLike))
			$this->tagsLike = (string)$jsonObject->tagsLike;
		if(!is_null($xml) && count($xml->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$xml->tagsMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeOr))
			$this->tagsMultiLikeOr = (string)$jsonObject->tagsMultiLikeOr;
		if(!is_null($xml) && count($xml->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$xml->tagsMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->tagsMultiLikeAnd))
			$this->tagsMultiLikeAnd = (string)$jsonObject->tagsMultiLikeAnd;
		if(!is_null($xml) && count($xml->dcEqual))
			$this->dcEqual = (int)$xml->dcEqual;
		if(!is_null($jsonObject) && isset($jsonObject->dcEqual))
			$this->dcEqual = (int)$jsonObject->dcEqual;
		if(!is_null($xml) && count($xml->dcIn))
			$this->dcIn = (string)$xml->dcIn;
		if(!is_null($jsonObject) && isset($jsonObject->dcIn))
			$this->dcIn = (string)$jsonObject->dcIn;
		if(!is_null($xml) && count($xml->parentIdLike))
			$this->parentIdLike = (string)$xml->parentIdLike;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdLike))
			$this->parentIdLike = (string)$jsonObject->parentIdLike;
		if(!is_null($xml) && count($xml->parentIdMultiLikeOr))
			$this->parentIdMultiLikeOr = (string)$xml->parentIdMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdMultiLikeOr))
			$this->parentIdMultiLikeOr = (string)$jsonObject->parentIdMultiLikeOr;
		if(!is_null($xml) && count($xml->parentIdMultiLikeAnd))
			$this->parentIdMultiLikeAnd = (string)$xml->parentIdMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->parentIdMultiLikeAnd))
			$this->parentIdMultiLikeAnd = (string)$jsonObject->parentIdMultiLikeAnd;
		if(!is_null($xml) && count($xml->environmentEqual))
			$this->environmentEqual = (string)$xml->environmentEqual;
		if(!is_null($jsonObject) && isset($jsonObject->environmentEqual))
			$this->environmentEqual = (string)$jsonObject->environmentEqual;
		if(!is_null($xml) && count($xml->environmentIn))
			$this->environmentIn = (string)$xml->environmentIn;
		if(!is_null($jsonObject) && isset($jsonObject->environmentIn))
			$this->environmentIn = (string)$jsonObject->environmentIn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $heartbeatTimeGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $heartbeatTimeLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $systemNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostNameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostNameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hostNameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ServerNodeStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ServerNodeType
	 */
	public $typeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $typeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tagsMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dcEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dcIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parentIdMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $environmentEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $environmentIn = null;


}

