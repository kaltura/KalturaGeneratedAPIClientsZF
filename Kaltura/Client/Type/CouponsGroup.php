<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2017  Kaltura Inc.
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
class Kaltura_Client_Type_CouponsGroup extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaCouponsGroup';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->descriptions))
		{
			if(empty($xml->descriptions))
				$this->descriptions = array();
			else
				$this->descriptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->descriptions, "KalturaTranslationToken");
		}
		if(count($xml->startDate))
			$this->startDate = (string)$xml->startDate;
		if(count($xml->endDate))
			$this->endDate = (string)$xml->endDate;
		if(count($xml->maxUsesNumber))
			$this->maxUsesNumber = (int)$xml->maxUsesNumber;
		if(count($xml->maxUsesNumberOnRenewableSub))
			$this->maxUsesNumberOnRenewableSub = (int)$xml->maxUsesNumberOnRenewableSub;
	}
	/**
	 * Coupon group identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * Coupon group name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * A list of the descriptions of the coupon group on different languages (language code and translation)
	 *
	 * @var array of KalturaTranslationToken
	 */
	public $descriptions;

	/**
	 * The first date the coupons in this coupons group are valid
	 *
	 * @var bigint
	 */
	public $startDate = null;

	/**
	 * The last date the coupons in this coupons group are valid
	 *
	 * @var bigint
	 */
	public $endDate = null;

	/**
	 * Maximum number of uses for each coupon in the group
	 *
	 * @var int
	 */
	public $maxUsesNumber = null;

	/**
	 * Maximum number of uses for each coupon in the group on a renewable subscription
	 *
	 * @var int
	 */
	public $maxUsesNumberOnRenewableSub = null;


}

