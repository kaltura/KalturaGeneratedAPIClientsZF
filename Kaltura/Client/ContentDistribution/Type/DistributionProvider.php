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
abstract class Kaltura_Client_ContentDistribution_Type_DistributionProvider extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDistributionProvider';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->type))
			$this->type = (string)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (string)$jsonObject->type;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->scheduleUpdateEnabled))
		{
			if(!empty($xml->scheduleUpdateEnabled) && ((int) $xml->scheduleUpdateEnabled === 1 || strtolower((string)$xml->scheduleUpdateEnabled) === 'true'))
				$this->scheduleUpdateEnabled = true;
			else
				$this->scheduleUpdateEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->scheduleUpdateEnabled))
		{
			if(!empty($jsonObject->scheduleUpdateEnabled) && ((int) $jsonObject->scheduleUpdateEnabled === 1 || strtolower((string)$jsonObject->scheduleUpdateEnabled) === 'true'))
				$this->scheduleUpdateEnabled = true;
			else
				$this->scheduleUpdateEnabled = false;
		}
		if(!is_null($xml) && count($xml->availabilityUpdateEnabled))
		{
			if(!empty($xml->availabilityUpdateEnabled) && ((int) $xml->availabilityUpdateEnabled === 1 || strtolower((string)$xml->availabilityUpdateEnabled) === 'true'))
				$this->availabilityUpdateEnabled = true;
			else
				$this->availabilityUpdateEnabled = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->availabilityUpdateEnabled))
		{
			if(!empty($jsonObject->availabilityUpdateEnabled) && ((int) $jsonObject->availabilityUpdateEnabled === 1 || strtolower((string)$jsonObject->availabilityUpdateEnabled) === 'true'))
				$this->availabilityUpdateEnabled = true;
			else
				$this->availabilityUpdateEnabled = false;
		}
		if(!is_null($xml) && count($xml->deleteInsteadUpdate))
		{
			if(!empty($xml->deleteInsteadUpdate) && ((int) $xml->deleteInsteadUpdate === 1 || strtolower((string)$xml->deleteInsteadUpdate) === 'true'))
				$this->deleteInsteadUpdate = true;
			else
				$this->deleteInsteadUpdate = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->deleteInsteadUpdate))
		{
			if(!empty($jsonObject->deleteInsteadUpdate) && ((int) $jsonObject->deleteInsteadUpdate === 1 || strtolower((string)$jsonObject->deleteInsteadUpdate) === 'true'))
				$this->deleteInsteadUpdate = true;
			else
				$this->deleteInsteadUpdate = false;
		}
		if(!is_null($xml) && count($xml->intervalBeforeSunrise))
			$this->intervalBeforeSunrise = (int)$xml->intervalBeforeSunrise;
		if(!is_null($jsonObject) && isset($jsonObject->intervalBeforeSunrise))
			$this->intervalBeforeSunrise = (int)$jsonObject->intervalBeforeSunrise;
		if(!is_null($xml) && count($xml->intervalBeforeSunset))
			$this->intervalBeforeSunset = (int)$xml->intervalBeforeSunset;
		if(!is_null($jsonObject) && isset($jsonObject->intervalBeforeSunset))
			$this->intervalBeforeSunset = (int)$jsonObject->intervalBeforeSunset;
		if(!is_null($xml) && count($xml->updateRequiredEntryFields))
			$this->updateRequiredEntryFields = (string)$xml->updateRequiredEntryFields;
		if(!is_null($jsonObject) && isset($jsonObject->updateRequiredEntryFields))
			$this->updateRequiredEntryFields = (string)$jsonObject->updateRequiredEntryFields;
		if(!is_null($xml) && count($xml->updateRequiredMetadataXPaths))
			$this->updateRequiredMetadataXPaths = (string)$xml->updateRequiredMetadataXPaths;
		if(!is_null($jsonObject) && isset($jsonObject->updateRequiredMetadataXPaths))
			$this->updateRequiredMetadataXPaths = (string)$jsonObject->updateRequiredMetadataXPaths;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Enum_DistributionProviderType
	 * @readonly
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $scheduleUpdateEnabled = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $availabilityUpdateEnabled = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $deleteInsteadUpdate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $intervalBeforeSunrise = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $intervalBeforeSunset = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredEntryFields = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredMetadataXPaths = null;


}

