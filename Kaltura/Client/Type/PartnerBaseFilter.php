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
abstract class Kaltura_Client_Type_PartnerBaseFilter extends Kaltura_Client_Type_Filter
{
	public function getKalturaObjectType()
	{
		return 'KalturaPartnerBaseFilter';
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
		if(!is_null($xml) && count($xml->idNotIn))
			$this->idNotIn = (string)$xml->idNotIn;
		if(!is_null($jsonObject) && isset($jsonObject->idNotIn))
			$this->idNotIn = (string)$jsonObject->idNotIn;
		if(!is_null($xml) && count($xml->nameLike))
			$this->nameLike = (string)$xml->nameLike;
		if(!is_null($jsonObject) && isset($jsonObject->nameLike))
			$this->nameLike = (string)$jsonObject->nameLike;
		if(!is_null($xml) && count($xml->nameMultiLikeOr))
			$this->nameMultiLikeOr = (string)$xml->nameMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->nameMultiLikeOr))
			$this->nameMultiLikeOr = (string)$jsonObject->nameMultiLikeOr;
		if(!is_null($xml) && count($xml->nameMultiLikeAnd))
			$this->nameMultiLikeAnd = (string)$xml->nameMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->nameMultiLikeAnd))
			$this->nameMultiLikeAnd = (string)$jsonObject->nameMultiLikeAnd;
		if(!is_null($xml) && count($xml->nameEqual))
			$this->nameEqual = (string)$xml->nameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->nameEqual))
			$this->nameEqual = (string)$jsonObject->nameEqual;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->partnerPackageEqual))
			$this->partnerPackageEqual = (int)$xml->partnerPackageEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerPackageEqual))
			$this->partnerPackageEqual = (int)$jsonObject->partnerPackageEqual;
		if(!is_null($xml) && count($xml->partnerPackageGreaterThanOrEqual))
			$this->partnerPackageGreaterThanOrEqual = (int)$xml->partnerPackageGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerPackageGreaterThanOrEqual))
			$this->partnerPackageGreaterThanOrEqual = (int)$jsonObject->partnerPackageGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->partnerPackageLessThanOrEqual))
			$this->partnerPackageLessThanOrEqual = (int)$xml->partnerPackageLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerPackageLessThanOrEqual))
			$this->partnerPackageLessThanOrEqual = (int)$jsonObject->partnerPackageLessThanOrEqual;
		if(!is_null($xml) && count($xml->partnerPackageIn))
			$this->partnerPackageIn = (string)$xml->partnerPackageIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerPackageIn))
			$this->partnerPackageIn = (string)$jsonObject->partnerPackageIn;
		if(!is_null($xml) && count($xml->partnerGroupTypeEqual))
			$this->partnerGroupTypeEqual = (int)$xml->partnerGroupTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerGroupTypeEqual))
			$this->partnerGroupTypeEqual = (int)$jsonObject->partnerGroupTypeEqual;
		if(!is_null($xml) && count($xml->partnerNameDescriptionWebsiteAdminNameAdminEmailLike))
			$this->partnerNameDescriptionWebsiteAdminNameAdminEmailLike = (string)$xml->partnerNameDescriptionWebsiteAdminNameAdminEmailLike;
		if(!is_null($jsonObject) && isset($jsonObject->partnerNameDescriptionWebsiteAdminNameAdminEmailLike))
			$this->partnerNameDescriptionWebsiteAdminNameAdminEmailLike = (string)$jsonObject->partnerNameDescriptionWebsiteAdminNameAdminEmailLike;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->idGreaterThan))
			$this->idGreaterThan = (int)$xml->idGreaterThan;
		if(!is_null($jsonObject) && isset($jsonObject->idGreaterThan))
			$this->idGreaterThan = (int)$jsonObject->idGreaterThan;
		if(!is_null($xml) && count($xml->monitorUsageEqual))
			$this->monitorUsageEqual = (int)$xml->monitorUsageEqual;
		if(!is_null($jsonObject) && isset($jsonObject->monitorUsageEqual))
			$this->monitorUsageEqual = (int)$jsonObject->monitorUsageEqual;
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
	 * @var string
	 */
	public $idNotIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameMultiLikeAnd = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PartnerStatus
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
	 * @var int
	 */
	public $partnerPackageEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerPackageGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerPackageLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerPackageIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PartnerGroupType
	 */
	public $partnerGroupTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerNameDescriptionWebsiteAdminNameAdminEmailLike = null;

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
	public $idGreaterThan = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $monitorUsageEqual = null;


}

