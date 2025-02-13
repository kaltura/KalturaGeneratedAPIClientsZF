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
class Kaltura_Client_Type_PartnerStatistics extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPartnerStatistics';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->packageBandwidthAndStorage))
			$this->packageBandwidthAndStorage = (int)$xml->packageBandwidthAndStorage;
		if(!is_null($jsonObject) && isset($jsonObject->packageBandwidthAndStorage))
			$this->packageBandwidthAndStorage = (int)$jsonObject->packageBandwidthAndStorage;
		if(!is_null($xml) && count($xml->hosting))
			$this->hosting = (float)$xml->hosting;
		if(!is_null($jsonObject) && isset($jsonObject->hosting))
			$this->hosting = (float)$jsonObject->hosting;
		if(!is_null($xml) && count($xml->bandwidth))
			$this->bandwidth = (float)$xml->bandwidth;
		if(!is_null($jsonObject) && isset($jsonObject->bandwidth))
			$this->bandwidth = (float)$jsonObject->bandwidth;
		if(!is_null($xml) && count($xml->usage))
			$this->usage = (int)$xml->usage;
		if(!is_null($jsonObject) && isset($jsonObject->usage))
			$this->usage = (int)$jsonObject->usage;
		if(!is_null($xml) && count($xml->usagePercent))
			$this->usagePercent = (float)$xml->usagePercent;
		if(!is_null($jsonObject) && isset($jsonObject->usagePercent))
			$this->usagePercent = (float)$jsonObject->usagePercent;
		if(!is_null($xml) && count($xml->reachedLimitDate))
			$this->reachedLimitDate = (int)$xml->reachedLimitDate;
		if(!is_null($jsonObject) && isset($jsonObject->reachedLimitDate))
			$this->reachedLimitDate = (int)$jsonObject->reachedLimitDate;
	}
	/**
	 * Package total allowed bandwidth and storage
	 *
	 * @var int
	 * @readonly
	 */
	public $packageBandwidthAndStorage = null;

	/**
	 * Partner total hosting in GB on the disk
	 *
	 * @var float
	 * @readonly
	 */
	public $hosting = null;

	/**
	 * Partner total bandwidth in GB
	 *
	 * @var float
	 * @readonly
	 */
	public $bandwidth = null;

	/**
	 * total usage in GB - including bandwidth and storage
	 *
	 * @var int
	 * @readonly
	 */
	public $usage = null;

	/**
	 * Percent of usage out of partner's package. if usage is 5GB and package is 10GB, this value will be 50
	 *
	 * @var float
	 * @readonly
	 */
	public $usagePercent = null;

	/**
	 * date when partner reached the limit of his package (timestamp)
	 *
	 * @var int
	 * @readonly
	 */
	public $reachedLimitDate = null;


}

