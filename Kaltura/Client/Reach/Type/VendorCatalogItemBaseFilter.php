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
abstract class Kaltura_Client_Reach_Type_VendorCatalogItemBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaVendorCatalogItemBaseFilter';
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
		if(!is_null($xml) && count($xml->vendorPartnerIdEqual))
			$this->vendorPartnerIdEqual = (int)$xml->vendorPartnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->vendorPartnerIdEqual))
			$this->vendorPartnerIdEqual = (int)$jsonObject->vendorPartnerIdEqual;
		if(!is_null($xml) && count($xml->vendorPartnerIdIn))
			$this->vendorPartnerIdIn = (string)$xml->vendorPartnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->vendorPartnerIdIn))
			$this->vendorPartnerIdIn = (string)$jsonObject->vendorPartnerIdIn;
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
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->serviceTypeEqual))
			$this->serviceTypeEqual = (int)$xml->serviceTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->serviceTypeEqual))
			$this->serviceTypeEqual = (int)$jsonObject->serviceTypeEqual;
		if(!is_null($xml) && count($xml->serviceTypeIn))
			$this->serviceTypeIn = (string)$xml->serviceTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->serviceTypeIn))
			$this->serviceTypeIn = (string)$jsonObject->serviceTypeIn;
		if(!is_null($xml) && count($xml->serviceFeatureEqual))
			$this->serviceFeatureEqual = (int)$xml->serviceFeatureEqual;
		if(!is_null($jsonObject) && isset($jsonObject->serviceFeatureEqual))
			$this->serviceFeatureEqual = (int)$jsonObject->serviceFeatureEqual;
		if(!is_null($xml) && count($xml->serviceFeatureIn))
			$this->serviceFeatureIn = (string)$xml->serviceFeatureIn;
		if(!is_null($jsonObject) && isset($jsonObject->serviceFeatureIn))
			$this->serviceFeatureIn = (string)$jsonObject->serviceFeatureIn;
		if(!is_null($xml) && count($xml->turnAroundTimeEqual))
			$this->turnAroundTimeEqual = (int)$xml->turnAroundTimeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->turnAroundTimeEqual))
			$this->turnAroundTimeEqual = (int)$jsonObject->turnAroundTimeEqual;
		if(!is_null($xml) && count($xml->turnAroundTimeIn))
			$this->turnAroundTimeIn = (string)$xml->turnAroundTimeIn;
		if(!is_null($jsonObject) && isset($jsonObject->turnAroundTimeIn))
			$this->turnAroundTimeIn = (string)$jsonObject->turnAroundTimeIn;
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
	 * @var int
	 */
	public $vendorPartnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $vendorPartnerIdIn = null;

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
	 * @var Kaltura_Client_Reach_Enum_VendorCatalogItemStatus
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
	 * @var Kaltura_Client_Reach_Enum_VendorServiceType
	 */
	public $serviceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceTypeIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceFeature
	 */
	public $serviceFeatureEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serviceFeatureIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Reach_Enum_VendorServiceTurnAroundTime
	 */
	public $turnAroundTimeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $turnAroundTimeIn = null;


}

