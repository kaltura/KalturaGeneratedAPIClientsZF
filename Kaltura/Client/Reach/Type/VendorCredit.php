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
class Kaltura_Client_Reach_Type_VendorCredit extends Kaltura_Client_Reach_Type_BaseVendorCredit
{
	public function getKalturaObjectType()
	{
		return 'KalturaVendorCredit';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->credit))
			$this->credit = (int)$xml->credit;
		if(!is_null($jsonObject) && isset($jsonObject->credit))
			$this->credit = (int)$jsonObject->credit;
		if(!is_null($xml) && count($xml->fromDate))
			$this->fromDate = (int)$xml->fromDate;
		if(!is_null($jsonObject) && isset($jsonObject->fromDate))
			$this->fromDate = (int)$jsonObject->fromDate;
		if(!is_null($xml) && count($xml->overageCredit))
			$this->overageCredit = (int)$xml->overageCredit;
		if(!is_null($jsonObject) && isset($jsonObject->overageCredit))
			$this->overageCredit = (int)$jsonObject->overageCredit;
		if(!is_null($xml) && count($xml->addOn))
			$this->addOn = (int)$xml->addOn;
		if(!is_null($jsonObject) && isset($jsonObject->addOn))
			$this->addOn = (int)$jsonObject->addOn;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $credit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fromDate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $overageCredit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $addOn = null;


}

