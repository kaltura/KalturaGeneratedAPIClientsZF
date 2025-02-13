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
class Kaltura_Client_CrossKalturaDistribution_Type_CrossKalturaDistributionJobProviderData extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionJobProviderData
{
	public function getKalturaObjectType()
	{
		return 'KalturaCrossKalturaDistributionJobProviderData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->distributedFlavorAssets))
			$this->distributedFlavorAssets = (string)$xml->distributedFlavorAssets;
		if(!is_null($jsonObject) && isset($jsonObject->distributedFlavorAssets))
			$this->distributedFlavorAssets = (string)$jsonObject->distributedFlavorAssets;
		if(!is_null($xml) && count($xml->distributedThumbAssets))
			$this->distributedThumbAssets = (string)$xml->distributedThumbAssets;
		if(!is_null($jsonObject) && isset($jsonObject->distributedThumbAssets))
			$this->distributedThumbAssets = (string)$jsonObject->distributedThumbAssets;
		if(!is_null($xml) && count($xml->distributedMetadata))
			$this->distributedMetadata = (string)$xml->distributedMetadata;
		if(!is_null($jsonObject) && isset($jsonObject->distributedMetadata))
			$this->distributedMetadata = (string)$jsonObject->distributedMetadata;
		if(!is_null($xml) && count($xml->distributedCaptionAssets))
			$this->distributedCaptionAssets = (string)$xml->distributedCaptionAssets;
		if(!is_null($jsonObject) && isset($jsonObject->distributedCaptionAssets))
			$this->distributedCaptionAssets = (string)$jsonObject->distributedCaptionAssets;
		if(!is_null($xml) && count($xml->distributedCuePoints))
			$this->distributedCuePoints = (string)$xml->distributedCuePoints;
		if(!is_null($jsonObject) && isset($jsonObject->distributedCuePoints))
			$this->distributedCuePoints = (string)$jsonObject->distributedCuePoints;
		if(!is_null($xml) && count($xml->distributedThumbCuePoints))
			$this->distributedThumbCuePoints = (string)$xml->distributedThumbCuePoints;
		if(!is_null($jsonObject) && isset($jsonObject->distributedThumbCuePoints))
			$this->distributedThumbCuePoints = (string)$jsonObject->distributedThumbCuePoints;
		if(!is_null($xml) && count($xml->distributedTimedThumbAssets))
			$this->distributedTimedThumbAssets = (string)$xml->distributedTimedThumbAssets;
		if(!is_null($jsonObject) && isset($jsonObject->distributedTimedThumbAssets))
			$this->distributedTimedThumbAssets = (string)$jsonObject->distributedTimedThumbAssets;
	}
	/**
	 * Key-value array where the keys are IDs of distributed flavor assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedFlavorAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed thumb assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedThumbAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed metadata objects in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedMetadata = null;

	/**
	 * Key-value array where the keys are IDs of distributed caption assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedCaptionAssets = null;

	/**
	 * Key-value array where the keys are IDs of distributed cue points in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedCuePoints = null;

	/**
	 * Key-value array where the keys are IDs of distributed thumb cue points in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedThumbCuePoints = null;

	/**
	 * Key-value array where the keys are IDs of distributed timed thumb assets in the source account and the values are the matching IDs in the target account
	 *
	 * @var string
	 */
	public $distributedTimedThumbAssets = null;


}

