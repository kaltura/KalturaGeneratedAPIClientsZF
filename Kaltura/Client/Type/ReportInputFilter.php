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
class Kaltura_Client_Type_ReportInputFilter extends Kaltura_Client_Type_ReportInputBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaReportInputFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->keywords))
			$this->keywords = (string)$xml->keywords;
		if(!is_null($jsonObject) && isset($jsonObject->keywords))
			$this->keywords = (string)$jsonObject->keywords;
		if(!is_null($xml) && count($xml->searchInTags))
		{
			if(!empty($xml->searchInTags) && ((int) $xml->searchInTags === 1 || strtolower((string)$xml->searchInTags) === 'true'))
				$this->searchInTags = true;
			else
				$this->searchInTags = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->searchInTags))
		{
			if(!empty($jsonObject->searchInTags) && ((int) $jsonObject->searchInTags === 1 || strtolower((string)$jsonObject->searchInTags) === 'true'))
				$this->searchInTags = true;
			else
				$this->searchInTags = false;
		}
		if(!is_null($xml) && count($xml->searchInAdminTags))
		{
			if(!empty($xml->searchInAdminTags) && ((int) $xml->searchInAdminTags === 1 || strtolower((string)$xml->searchInAdminTags) === 'true'))
				$this->searchInAdminTags = true;
			else
				$this->searchInAdminTags = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->searchInAdminTags))
		{
			if(!empty($jsonObject->searchInAdminTags) && ((int) $jsonObject->searchInAdminTags === 1 || strtolower((string)$jsonObject->searchInAdminTags) === 'true'))
				$this->searchInAdminTags = true;
			else
				$this->searchInAdminTags = false;
		}
		if(!is_null($xml) && count($xml->categories))
			$this->categories = (string)$xml->categories;
		if(!is_null($jsonObject) && isset($jsonObject->categories))
			$this->categories = (string)$jsonObject->categories;
		if(!is_null($xml) && count($xml->categoriesIdsIn))
			$this->categoriesIdsIn = (string)$xml->categoriesIdsIn;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesIdsIn))
			$this->categoriesIdsIn = (string)$jsonObject->categoriesIdsIn;
		if(!is_null($xml) && count($xml->customVar1In))
			$this->customVar1In = (string)$xml->customVar1In;
		if(!is_null($jsonObject) && isset($jsonObject->customVar1In))
			$this->customVar1In = (string)$jsonObject->customVar1In;
		if(!is_null($xml) && count($xml->customVar2In))
			$this->customVar2In = (string)$xml->customVar2In;
		if(!is_null($jsonObject) && isset($jsonObject->customVar2In))
			$this->customVar2In = (string)$jsonObject->customVar2In;
		if(!is_null($xml) && count($xml->customVar3In))
			$this->customVar3In = (string)$xml->customVar3In;
		if(!is_null($jsonObject) && isset($jsonObject->customVar3In))
			$this->customVar3In = (string)$jsonObject->customVar3In;
		if(!is_null($xml) && count($xml->deviceIn))
			$this->deviceIn = (string)$xml->deviceIn;
		if(!is_null($jsonObject) && isset($jsonObject->deviceIn))
			$this->deviceIn = (string)$jsonObject->deviceIn;
		if(!is_null($xml) && count($xml->countryIn))
			$this->countryIn = (string)$xml->countryIn;
		if(!is_null($jsonObject) && isset($jsonObject->countryIn))
			$this->countryIn = (string)$jsonObject->countryIn;
		if(!is_null($xml) && count($xml->regionIn))
			$this->regionIn = (string)$xml->regionIn;
		if(!is_null($jsonObject) && isset($jsonObject->regionIn))
			$this->regionIn = (string)$jsonObject->regionIn;
		if(!is_null($xml) && count($xml->citiesIn))
			$this->citiesIn = (string)$xml->citiesIn;
		if(!is_null($jsonObject) && isset($jsonObject->citiesIn))
			$this->citiesIn = (string)$jsonObject->citiesIn;
		if(!is_null($xml) && count($xml->operatingSystemFamilyIn))
			$this->operatingSystemFamilyIn = (string)$xml->operatingSystemFamilyIn;
		if(!is_null($jsonObject) && isset($jsonObject->operatingSystemFamilyIn))
			$this->operatingSystemFamilyIn = (string)$jsonObject->operatingSystemFamilyIn;
		if(!is_null($xml) && count($xml->operatingSystemIn))
			$this->operatingSystemIn = (string)$xml->operatingSystemIn;
		if(!is_null($jsonObject) && isset($jsonObject->operatingSystemIn))
			$this->operatingSystemIn = (string)$jsonObject->operatingSystemIn;
		if(!is_null($xml) && count($xml->browserFamilyIn))
			$this->browserFamilyIn = (string)$xml->browserFamilyIn;
		if(!is_null($jsonObject) && isset($jsonObject->browserFamilyIn))
			$this->browserFamilyIn = (string)$jsonObject->browserFamilyIn;
		if(!is_null($xml) && count($xml->browserIn))
			$this->browserIn = (string)$xml->browserIn;
		if(!is_null($jsonObject) && isset($jsonObject->browserIn))
			$this->browserIn = (string)$jsonObject->browserIn;
		if(!is_null($xml) && count($xml->timeZoneOffset))
			$this->timeZoneOffset = (int)$xml->timeZoneOffset;
		if(!is_null($jsonObject) && isset($jsonObject->timeZoneOffset))
			$this->timeZoneOffset = (int)$jsonObject->timeZoneOffset;
		if(!is_null($xml) && count($xml->interval))
			$this->interval = (string)$xml->interval;
		if(!is_null($jsonObject) && isset($jsonObject->interval))
			$this->interval = (string)$jsonObject->interval;
		if(!is_null($xml) && count($xml->mediaTypeIn))
			$this->mediaTypeIn = (string)$xml->mediaTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->mediaTypeIn))
			$this->mediaTypeIn = (string)$jsonObject->mediaTypeIn;
		if(!is_null($xml) && count($xml->sourceTypeIn))
			$this->sourceTypeIn = (string)$xml->sourceTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->sourceTypeIn))
			$this->sourceTypeIn = (string)$jsonObject->sourceTypeIn;
		if(!is_null($xml) && count($xml->ownerIdsIn))
			$this->ownerIdsIn = (string)$xml->ownerIdsIn;
		if(!is_null($jsonObject) && isset($jsonObject->ownerIdsIn))
			$this->ownerIdsIn = (string)$jsonObject->ownerIdsIn;
		if(!is_null($xml) && count($xml->entryOperator) && !empty($xml->entryOperator))
			$this->entryOperator = Kaltura_Client_ParseUtils::unmarshalObject($xml->entryOperator, "KalturaESearchEntryOperator");
		if(!is_null($jsonObject) && isset($jsonObject->entryOperator) && !empty($jsonObject->entryOperator))
			$this->entryOperator = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->entryOperator, "KalturaESearchEntryOperator");
		if(!is_null($xml) && count($xml->entryCreatedAtGreaterThanOrEqual))
			$this->entryCreatedAtGreaterThanOrEqual = (int)$xml->entryCreatedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryCreatedAtGreaterThanOrEqual))
			$this->entryCreatedAtGreaterThanOrEqual = (int)$jsonObject->entryCreatedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->entryCreatedAtLessThanOrEqual))
			$this->entryCreatedAtLessThanOrEqual = (int)$xml->entryCreatedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryCreatedAtLessThanOrEqual))
			$this->entryCreatedAtLessThanOrEqual = (int)$jsonObject->entryCreatedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdIn))
			$this->entryIdIn = (string)$jsonObject->entryIdIn;
		if(!is_null($xml) && count($xml->playbackTypeIn))
			$this->playbackTypeIn = (string)$xml->playbackTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->playbackTypeIn))
			$this->playbackTypeIn = (string)$jsonObject->playbackTypeIn;
		if(!is_null($xml) && count($xml->playbackContextIdsIn))
			$this->playbackContextIdsIn = (string)$xml->playbackContextIdsIn;
		if(!is_null($jsonObject) && isset($jsonObject->playbackContextIdsIn))
			$this->playbackContextIdsIn = (string)$jsonObject->playbackContextIdsIn;
		if(!is_null($xml) && count($xml->rootEntryIdIn))
			$this->rootEntryIdIn = (string)$xml->rootEntryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->rootEntryIdIn))
			$this->rootEntryIdIn = (string)$jsonObject->rootEntryIdIn;
		if(!is_null($xml) && count($xml->errorCodeIn))
			$this->errorCodeIn = (string)$xml->errorCodeIn;
		if(!is_null($jsonObject) && isset($jsonObject->errorCodeIn))
			$this->errorCodeIn = (string)$jsonObject->errorCodeIn;
		if(!is_null($xml) && count($xml->playerVersionIn))
			$this->playerVersionIn = (string)$xml->playerVersionIn;
		if(!is_null($jsonObject) && isset($jsonObject->playerVersionIn))
			$this->playerVersionIn = (string)$jsonObject->playerVersionIn;
		if(!is_null($xml) && count($xml->ispIn))
			$this->ispIn = (string)$xml->ispIn;
		if(!is_null($jsonObject) && isset($jsonObject->ispIn))
			$this->ispIn = (string)$jsonObject->ispIn;
		if(!is_null($xml) && count($xml->applicationVersionIn))
			$this->applicationVersionIn = (string)$xml->applicationVersionIn;
		if(!is_null($jsonObject) && isset($jsonObject->applicationVersionIn))
			$this->applicationVersionIn = (string)$jsonObject->applicationVersionIn;
		if(!is_null($xml) && count($xml->nodeIdsIn))
			$this->nodeIdsIn = (string)$xml->nodeIdsIn;
		if(!is_null($jsonObject) && isset($jsonObject->nodeIdsIn))
			$this->nodeIdsIn = (string)$jsonObject->nodeIdsIn;
		if(!is_null($xml) && count($xml->categoriesAncestorIdIn))
			$this->categoriesAncestorIdIn = (string)$xml->categoriesAncestorIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->categoriesAncestorIdIn))
			$this->categoriesAncestorIdIn = (string)$jsonObject->categoriesAncestorIdIn;
		if(!is_null($xml) && count($xml->hotspotIdIn))
			$this->hotspotIdIn = (string)$xml->hotspotIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->hotspotIdIn))
			$this->hotspotIdIn = (string)$jsonObject->hotspotIdIn;
		if(!is_null($xml) && count($xml->crmIdIn))
			$this->crmIdIn = (string)$xml->crmIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->crmIdIn))
			$this->crmIdIn = (string)$jsonObject->crmIdIn;
		if(!is_null($xml) && count($xml->playlistIdIn))
			$this->playlistIdIn = (string)$xml->playlistIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->playlistIdIn))
			$this->playlistIdIn = (string)$jsonObject->playlistIdIn;
		if(!is_null($xml) && count($xml->domainIn))
			$this->domainIn = (string)$xml->domainIn;
		if(!is_null($jsonObject) && isset($jsonObject->domainIn))
			$this->domainIn = (string)$jsonObject->domainIn;
		if(!is_null($xml) && count($xml->canonicalUrlIn))
			$this->canonicalUrlIn = (string)$xml->canonicalUrlIn;
		if(!is_null($jsonObject) && isset($jsonObject->canonicalUrlIn))
			$this->canonicalUrlIn = (string)$jsonObject->canonicalUrlIn;
		if(!is_null($xml) && count($xml->virtualEventIdIn))
			$this->virtualEventIdIn = (string)$xml->virtualEventIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->virtualEventIdIn))
			$this->virtualEventIdIn = (string)$jsonObject->virtualEventIdIn;
		if(!is_null($xml) && count($xml->originIn))
			$this->originIn = (string)$xml->originIn;
		if(!is_null($jsonObject) && isset($jsonObject->originIn))
			$this->originIn = (string)$jsonObject->originIn;
		if(!is_null($xml) && count($xml->uiConfIdIn))
			$this->uiConfIdIn = (string)$xml->uiConfIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->uiConfIdIn))
			$this->uiConfIdIn = (string)$jsonObject->uiConfIdIn;
		if(!is_null($xml) && count($xml->cuePointIdIn))
			$this->cuePointIdIn = (string)$xml->cuePointIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->cuePointIdIn))
			$this->cuePointIdIn = (string)$jsonObject->cuePointIdIn;
		if(!is_null($xml) && count($xml->contextIdIn))
			$this->contextIdIn = (string)$xml->contextIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->contextIdIn))
			$this->contextIdIn = (string)$jsonObject->contextIdIn;
		if(!is_null($xml) && count($xml->roleIn))
			$this->roleIn = (string)$xml->roleIn;
		if(!is_null($jsonObject) && isset($jsonObject->roleIn))
			$this->roleIn = (string)$jsonObject->roleIn;
		if(!is_null($xml) && count($xml->industryIn))
			$this->industryIn = (string)$xml->industryIn;
		if(!is_null($jsonObject) && isset($jsonObject->industryIn))
			$this->industryIn = (string)$jsonObject->industryIn;
		if(!is_null($xml) && count($xml->playbackModeIn))
			$this->playbackModeIn = (string)$xml->playbackModeIn;
		if(!is_null($jsonObject) && isset($jsonObject->playbackModeIn))
			$this->playbackModeIn = (string)$jsonObject->playbackModeIn;
		if(!is_null($xml) && count($xml->companyIn))
			$this->companyIn = (string)$xml->companyIn;
		if(!is_null($jsonObject) && isset($jsonObject->companyIn))
			$this->companyIn = (string)$jsonObject->companyIn;
		if(!is_null($xml) && count($xml->eventSessionContextIdIn))
			$this->eventSessionContextIdIn = (string)$xml->eventSessionContextIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->eventSessionContextIdIn))
			$this->eventSessionContextIdIn = (string)$jsonObject->eventSessionContextIdIn;
	}
	/**
	 * Search keywords to filter objects
	 *
	 * @var string
	 */
	public $keywords = null;

	/**
	 * Search keywords in objects tags
	 *
	 * @var bool
	 */
	public $searchInTags = null;

	/**
	 * Search keywords in objects admin tags
	 *
	 * @var bool
	 */
	public $searchInAdminTags = null;

	/**
	 * Search objects in specified categories
	 *
	 * @var string
	 */
	public $categories = null;

	/**
	 * Search objects in specified category ids
	 *
	 * @var string
	 */
	public $categoriesIdsIn = null;

	/**
	 * Filter by customVar1
	 *
	 * @var string
	 */
	public $customVar1In = null;

	/**
	 * Filter by customVar2
	 *
	 * @var string
	 */
	public $customVar2In = null;

	/**
	 * Filter by customVar3
	 *
	 * @var string
	 */
	public $customVar3In = null;

	/**
	 * Filter by device
	 *
	 * @var string
	 */
	public $deviceIn = null;

	/**
	 * Filter by country
	 *
	 * @var string
	 */
	public $countryIn = null;

	/**
	 * Filter by region
	 *
	 * @var string
	 */
	public $regionIn = null;

	/**
	 * Filter by city
	 *
	 * @var string
	 */
	public $citiesIn = null;

	/**
	 * Filter by operating system family
	 *
	 * @var string
	 */
	public $operatingSystemFamilyIn = null;

	/**
	 * Filter by operating system
	 *
	 * @var string
	 */
	public $operatingSystemIn = null;

	/**
	 * Filter by browser family
	 *
	 * @var string
	 */
	public $browserFamilyIn = null;

	/**
	 * Filter by browser
	 *
	 * @var string
	 */
	public $browserIn = null;

	/**
	 * Time zone offset in minutes
	 *
	 * @var int
	 */
	public $timeZoneOffset = null;

	/**
	 * Aggregated results according to interval
	 *
	 * @var Kaltura_Client_Enum_ReportInterval
	 */
	public $interval = null;

	/**
	 * Filter by media types
	 *
	 * @var string
	 */
	public $mediaTypeIn = null;

	/**
	 * Filter by source types
	 *
	 * @var string
	 */
	public $sourceTypeIn = null;

	/**
	 * Filter by entry owner
	 *
	 * @var string
	 */
	public $ownerIdsIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ElasticSearch_Type_ESearchEntryOperator
	 */
	public $entryOperator;

	/**
	 * Entry created at greater than or equal as Unix timestamp
	 *
	 * @var int
	 */
	public $entryCreatedAtGreaterThanOrEqual = null;

	/**
	 * Entry created at less than or equal as Unix timestamp
	 *
	 * @var int
	 */
	public $entryCreatedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $playbackTypeIn = null;

	/**
	 * filter by playback context ids
	 *
	 * @var string
	 */
	public $playbackContextIdsIn = null;

	/**
	 * filter by root entry ids
	 *
	 * @var string
	 */
	public $rootEntryIdIn = null;

	/**
	 * filter by error code
	 *
	 * @var string
	 */
	public $errorCodeIn = null;

	/**
	 * filter by player version
	 *
	 * @var string
	 */
	public $playerVersionIn = null;

	/**
	 * filter by isp
	 *
	 * @var string
	 */
	public $ispIn = null;

	/**
	 * filter by application version
	 *
	 * @var string
	 */
	public $applicationVersionIn = null;

	/**
	 * filter by node id
	 *
	 * @var string
	 */
	public $nodeIdsIn = null;

	/**
	 * filter by categories ancestor
	 *
	 * @var string
	 */
	public $categoriesAncestorIdIn = null;

	/**
	 * filter by hotspot id
	 *
	 * @var string
	 */
	public $hotspotIdIn = null;

	/**
	 * filter by crm id
	 *
	 * @var string
	 */
	public $crmIdIn = null;

	/**
	 * filter by playlist id
	 *
	 * @var string
	 */
	public $playlistIdIn = null;

	/**
	 * filter by domain
	 *
	 * @var string
	 */
	public $domainIn = null;

	/**
	 * filter by canonical url
	 *
	 * @var string
	 */
	public $canonicalUrlIn = null;

	/**
	 * filter by virtual event id
	 *
	 * @var string
	 */
	public $virtualEventIdIn = null;

	/**
	 * filter by origin
	 *
	 * @var string
	 */
	public $originIn = null;

	/**
	 * filter by ui conf id
	 *
	 * @var string
	 */
	public $uiConfIdIn = null;

	/**
	 * filter by cue point id
	 *
	 * @var string
	 */
	public $cuePointIdIn = null;

	/**
	 * filter by context ids
	 *
	 * @var string
	 */
	public $contextIdIn = null;

	/**
	 * filter by user role
	 *
	 * @var string
	 */
	public $roleIn = null;

	/**
	 * filter by industry
	 *
	 * @var string
	 */
	public $industryIn = null;

	/**
	 * filter by playback mode
	 *
	 * @var string
	 */
	public $playbackModeIn = null;

	/**
	 * filter by company
	 *
	 * @var string
	 */
	public $companyIn = null;

	/**
	 * filter by event session context id
	 *
	 * @var string
	 */
	public $eventSessionContextIdIn = null;


}

