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
class Kaltura_Client_Type_PartnerUsage extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPartnerUsage';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->hostingGB))
			$this->hostingGB = (float)$xml->hostingGB;
		if(!is_null($jsonObject) && isset($jsonObject->hostingGB))
			$this->hostingGB = (float)$jsonObject->hostingGB;
		if(!is_null($xml) && count($xml->Percent))
			$this->Percent = (float)$xml->Percent;
		if(!is_null($jsonObject) && isset($jsonObject->Percent))
			$this->Percent = (float)$jsonObject->Percent;
		if(!is_null($xml) && count($xml->packageBW))
			$this->packageBW = (int)$xml->packageBW;
		if(!is_null($jsonObject) && isset($jsonObject->packageBW))
			$this->packageBW = (int)$jsonObject->packageBW;
		if(!is_null($xml) && count($xml->usageGB))
			$this->usageGB = (float)$xml->usageGB;
		if(!is_null($jsonObject) && isset($jsonObject->usageGB))
			$this->usageGB = (float)$jsonObject->usageGB;
		if(!is_null($xml) && count($xml->reachedLimitDate))
			$this->reachedLimitDate = (int)$xml->reachedLimitDate;
		if(!is_null($jsonObject) && isset($jsonObject->reachedLimitDate))
			$this->reachedLimitDate = (int)$jsonObject->reachedLimitDate;
		if(!is_null($xml) && count($xml->usageGraph))
			$this->usageGraph = (string)$xml->usageGraph;
		if(!is_null($jsonObject) && isset($jsonObject->usageGraph))
			$this->usageGraph = (string)$jsonObject->usageGraph;
	}
	/**
	 * Partner total hosting in GB on the disk
	 *
	 * @var float
	 * @readonly
	 */
	public $hostingGB = null;

	/**
	 * percent of usage out of partner's package. if usageGB is 5 and package is 10GB, this value will be 50
	 *
	 * @var float
	 * @readonly
	 */
	public $Percent = null;

	/**
	 * package total BW - actually this is usage, which represents BW+storage
	 *
	 * @var int
	 * @readonly
	 */
	public $packageBW = null;

	/**
	 * total usage in GB - including bandwidth and storage
	 *
	 * @var float
	 * @readonly
	 */
	public $usageGB = null;

	/**
	 * date when partner reached the limit of his package (timestamp)
	 *
	 * @var int
	 * @readonly
	 */
	public $reachedLimitDate = null;

	/**
	 * a semi-colon separated list of comma-separated key-values to represent a usage graph.
	 * 	 keys could be 1-12 for a year view (1,1.2;2,1.1;3,0.9;...;12,1.4;)
	 * 	 keys could be 1-[28,29,30,31] depending on the requested month, for a daily view in a given month (1,0.4;2,0.2;...;31,0.1;)
	 *
	 * @var string
	 * @readonly
	 */
	public $usageGraph = null;


}

