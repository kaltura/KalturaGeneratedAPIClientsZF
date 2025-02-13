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
class Kaltura_Client_Type_Partner extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPartner';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->website))
			$this->website = (string)$xml->website;
		if(!is_null($jsonObject) && isset($jsonObject->website))
			$this->website = (string)$jsonObject->website;
		if(!is_null($xml) && count($xml->notificationUrl))
			$this->notificationUrl = (string)$xml->notificationUrl;
		if(!is_null($jsonObject) && isset($jsonObject->notificationUrl))
			$this->notificationUrl = (string)$jsonObject->notificationUrl;
		if(!is_null($xml) && count($xml->appearInSearch))
			$this->appearInSearch = (int)$xml->appearInSearch;
		if(!is_null($jsonObject) && isset($jsonObject->appearInSearch))
			$this->appearInSearch = (int)$jsonObject->appearInSearch;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->adminName))
			$this->adminName = (string)$xml->adminName;
		if(!is_null($jsonObject) && isset($jsonObject->adminName))
			$this->adminName = (string)$jsonObject->adminName;
		if(!is_null($xml) && count($xml->adminEmail))
			$this->adminEmail = (string)$xml->adminEmail;
		if(!is_null($jsonObject) && isset($jsonObject->adminEmail))
			$this->adminEmail = (string)$jsonObject->adminEmail;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->commercialUse))
			$this->commercialUse = (int)$xml->commercialUse;
		if(!is_null($jsonObject) && isset($jsonObject->commercialUse))
			$this->commercialUse = (int)$jsonObject->commercialUse;
		if(!is_null($xml) && count($xml->landingPage))
			$this->landingPage = (string)$xml->landingPage;
		if(!is_null($jsonObject) && isset($jsonObject->landingPage))
			$this->landingPage = (string)$jsonObject->landingPage;
		if(!is_null($xml) && count($xml->userLandingPage))
			$this->userLandingPage = (string)$xml->userLandingPage;
		if(!is_null($jsonObject) && isset($jsonObject->userLandingPage))
			$this->userLandingPage = (string)$jsonObject->userLandingPage;
		if(!is_null($xml) && count($xml->contentCategories))
			$this->contentCategories = (string)$xml->contentCategories;
		if(!is_null($jsonObject) && isset($jsonObject->contentCategories))
			$this->contentCategories = (string)$jsonObject->contentCategories;
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
		if(!is_null($xml) && count($xml->phone))
			$this->phone = (string)$xml->phone;
		if(!is_null($jsonObject) && isset($jsonObject->phone))
			$this->phone = (string)$jsonObject->phone;
		if(!is_null($xml) && count($xml->describeYourself))
			$this->describeYourself = (string)$xml->describeYourself;
		if(!is_null($jsonObject) && isset($jsonObject->describeYourself))
			$this->describeYourself = (string)$jsonObject->describeYourself;
		if(!is_null($xml) && count($xml->adultContent))
		{
			if(!empty($xml->adultContent) && ((int) $xml->adultContent === 1 || strtolower((string)$xml->adultContent) === 'true'))
				$this->adultContent = true;
			else
				$this->adultContent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->adultContent))
		{
			if(!empty($jsonObject->adultContent) && ((int) $jsonObject->adultContent === 1 || strtolower((string)$jsonObject->adultContent) === 'true'))
				$this->adultContent = true;
			else
				$this->adultContent = false;
		}
		if(!is_null($xml) && count($xml->defConversionProfileType))
			$this->defConversionProfileType = (string)$xml->defConversionProfileType;
		if(!is_null($jsonObject) && isset($jsonObject->defConversionProfileType))
			$this->defConversionProfileType = (string)$jsonObject->defConversionProfileType;
		if(!is_null($xml) && count($xml->notify))
			$this->notify = (int)$xml->notify;
		if(!is_null($jsonObject) && isset($jsonObject->notify))
			$this->notify = (int)$jsonObject->notify;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->allowQuickEdit))
			$this->allowQuickEdit = (int)$xml->allowQuickEdit;
		if(!is_null($jsonObject) && isset($jsonObject->allowQuickEdit))
			$this->allowQuickEdit = (int)$jsonObject->allowQuickEdit;
		if(!is_null($xml) && count($xml->mergeEntryLists))
			$this->mergeEntryLists = (int)$xml->mergeEntryLists;
		if(!is_null($jsonObject) && isset($jsonObject->mergeEntryLists))
			$this->mergeEntryLists = (int)$jsonObject->mergeEntryLists;
		if(!is_null($xml) && count($xml->notificationsConfig))
			$this->notificationsConfig = (string)$xml->notificationsConfig;
		if(!is_null($jsonObject) && isset($jsonObject->notificationsConfig))
			$this->notificationsConfig = (string)$jsonObject->notificationsConfig;
		if(!is_null($xml) && count($xml->allowedFromEmailWhiteList))
			$this->allowedFromEmailWhiteList = (string)$xml->allowedFromEmailWhiteList;
		if(!is_null($jsonObject) && isset($jsonObject->allowedFromEmailWhiteList))
			$this->allowedFromEmailWhiteList = (string)$jsonObject->allowedFromEmailWhiteList;
		if(!is_null($xml) && count($xml->maxUploadSize))
			$this->maxUploadSize = (int)$xml->maxUploadSize;
		if(!is_null($jsonObject) && isset($jsonObject->maxUploadSize))
			$this->maxUploadSize = (int)$jsonObject->maxUploadSize;
		if(!is_null($xml) && count($xml->partnerPackage))
			$this->partnerPackage = (int)$xml->partnerPackage;
		if(!is_null($jsonObject) && isset($jsonObject->partnerPackage))
			$this->partnerPackage = (int)$jsonObject->partnerPackage;
		if(!is_null($xml) && count($xml->secret))
			$this->secret = (string)$xml->secret;
		if(!is_null($jsonObject) && isset($jsonObject->secret))
			$this->secret = (string)$jsonObject->secret;
		if(!is_null($xml) && count($xml->adminSecret))
			$this->adminSecret = (string)$xml->adminSecret;
		if(!is_null($jsonObject) && isset($jsonObject->adminSecret))
			$this->adminSecret = (string)$jsonObject->adminSecret;
		if(!is_null($xml) && count($xml->cmsPassword))
			$this->cmsPassword = (string)$xml->cmsPassword;
		if(!is_null($jsonObject) && isset($jsonObject->cmsPassword))
			$this->cmsPassword = (string)$jsonObject->cmsPassword;
		if(!is_null($xml) && count($xml->allowMultiNotification))
			$this->allowMultiNotification = (int)$xml->allowMultiNotification;
		if(!is_null($jsonObject) && isset($jsonObject->allowMultiNotification))
			$this->allowMultiNotification = (int)$jsonObject->allowMultiNotification;
		if(!is_null($xml) && count($xml->adminLoginUsersQuota))
			$this->adminLoginUsersQuota = (int)$xml->adminLoginUsersQuota;
		if(!is_null($jsonObject) && isset($jsonObject->adminLoginUsersQuota))
			$this->adminLoginUsersQuota = (int)$jsonObject->adminLoginUsersQuota;
		if(!is_null($xml) && count($xml->adminUserId))
			$this->adminUserId = (string)$xml->adminUserId;
		if(!is_null($jsonObject) && isset($jsonObject->adminUserId))
			$this->adminUserId = (string)$jsonObject->adminUserId;
		if(!is_null($xml) && count($xml->firstName))
			$this->firstName = (string)$xml->firstName;
		if(!is_null($jsonObject) && isset($jsonObject->firstName))
			$this->firstName = (string)$jsonObject->firstName;
		if(!is_null($xml) && count($xml->lastName))
			$this->lastName = (string)$xml->lastName;
		if(!is_null($jsonObject) && isset($jsonObject->lastName))
			$this->lastName = (string)$jsonObject->lastName;
		if(!is_null($xml) && count($xml->country))
			$this->country = (string)$xml->country;
		if(!is_null($jsonObject) && isset($jsonObject->country))
			$this->country = (string)$jsonObject->country;
		if(!is_null($xml) && count($xml->state))
			$this->state = (string)$xml->state;
		if(!is_null($jsonObject) && isset($jsonObject->state))
			$this->state = (string)$jsonObject->state;
		if(!is_null($xml) && count($xml->additionalParams))
		{
			if(empty($xml->additionalParams))
				$this->additionalParams = array();
			else
				$this->additionalParams = Kaltura_Client_ParseUtils::unmarshalArray($xml->additionalParams, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->additionalParams))
		{
			if(empty($jsonObject->additionalParams))
				$this->additionalParams = array();
			else
				$this->additionalParams = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->additionalParams, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->publishersQuota))
			$this->publishersQuota = (int)$xml->publishersQuota;
		if(!is_null($jsonObject) && isset($jsonObject->publishersQuota))
			$this->publishersQuota = (int)$jsonObject->publishersQuota;
		if(!is_null($xml) && count($xml->partnerGroupType))
			$this->partnerGroupType = (int)$xml->partnerGroupType;
		if(!is_null($jsonObject) && isset($jsonObject->partnerGroupType))
			$this->partnerGroupType = (int)$jsonObject->partnerGroupType;
		if(!is_null($xml) && count($xml->defaultEntitlementEnforcement))
		{
			if(!empty($xml->defaultEntitlementEnforcement) && ((int) $xml->defaultEntitlementEnforcement === 1 || strtolower((string)$xml->defaultEntitlementEnforcement) === 'true'))
				$this->defaultEntitlementEnforcement = true;
			else
				$this->defaultEntitlementEnforcement = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->defaultEntitlementEnforcement))
		{
			if(!empty($jsonObject->defaultEntitlementEnforcement) && ((int) $jsonObject->defaultEntitlementEnforcement === 1 || strtolower((string)$jsonObject->defaultEntitlementEnforcement) === 'true'))
				$this->defaultEntitlementEnforcement = true;
			else
				$this->defaultEntitlementEnforcement = false;
		}
		if(!is_null($xml) && count($xml->defaultDeliveryType))
			$this->defaultDeliveryType = (string)$xml->defaultDeliveryType;
		if(!is_null($jsonObject) && isset($jsonObject->defaultDeliveryType))
			$this->defaultDeliveryType = (string)$jsonObject->defaultDeliveryType;
		if(!is_null($xml) && count($xml->defaultEmbedCodeType))
			$this->defaultEmbedCodeType = (string)$xml->defaultEmbedCodeType;
		if(!is_null($jsonObject) && isset($jsonObject->defaultEmbedCodeType))
			$this->defaultEmbedCodeType = (string)$jsonObject->defaultEmbedCodeType;
		if(!is_null($xml) && count($xml->deliveryTypes))
		{
			if(empty($xml->deliveryTypes))
				$this->deliveryTypes = array();
			else
				$this->deliveryTypes = Kaltura_Client_ParseUtils::unmarshalArray($xml->deliveryTypes, "KalturaPlayerDeliveryType");
		}
		if(!is_null($jsonObject) && isset($jsonObject->deliveryTypes))
		{
			if(empty($jsonObject->deliveryTypes))
				$this->deliveryTypes = array();
			else
				$this->deliveryTypes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->deliveryTypes, "KalturaPlayerDeliveryType");
		}
		if(!is_null($xml) && count($xml->embedCodeTypes))
		{
			if(empty($xml->embedCodeTypes))
				$this->embedCodeTypes = array();
			else
				$this->embedCodeTypes = Kaltura_Client_ParseUtils::unmarshalArray($xml->embedCodeTypes, "KalturaPlayerEmbedCodeType");
		}
		if(!is_null($jsonObject) && isset($jsonObject->embedCodeTypes))
		{
			if(empty($jsonObject->embedCodeTypes))
				$this->embedCodeTypes = array();
			else
				$this->embedCodeTypes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->embedCodeTypes, "KalturaPlayerEmbedCodeType");
		}
		if(!is_null($xml) && count($xml->templatePartnerId))
			$this->templatePartnerId = (int)$xml->templatePartnerId;
		if(!is_null($jsonObject) && isset($jsonObject->templatePartnerId))
			$this->templatePartnerId = (int)$jsonObject->templatePartnerId;
		if(!is_null($xml) && count($xml->ignoreSeoLinks))
		{
			if(!empty($xml->ignoreSeoLinks) && ((int) $xml->ignoreSeoLinks === 1 || strtolower((string)$xml->ignoreSeoLinks) === 'true'))
				$this->ignoreSeoLinks = true;
			else
				$this->ignoreSeoLinks = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ignoreSeoLinks))
		{
			if(!empty($jsonObject->ignoreSeoLinks) && ((int) $jsonObject->ignoreSeoLinks === 1 || strtolower((string)$jsonObject->ignoreSeoLinks) === 'true'))
				$this->ignoreSeoLinks = true;
			else
				$this->ignoreSeoLinks = false;
		}
		if(!is_null($xml) && count($xml->useTwoFactorAuthentication))
		{
			if(!empty($xml->useTwoFactorAuthentication) && ((int) $xml->useTwoFactorAuthentication === 1 || strtolower((string)$xml->useTwoFactorAuthentication) === 'true'))
				$this->useTwoFactorAuthentication = true;
			else
				$this->useTwoFactorAuthentication = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useTwoFactorAuthentication))
		{
			if(!empty($jsonObject->useTwoFactorAuthentication) && ((int) $jsonObject->useTwoFactorAuthentication === 1 || strtolower((string)$jsonObject->useTwoFactorAuthentication) === 'true'))
				$this->useTwoFactorAuthentication = true;
			else
				$this->useTwoFactorAuthentication = false;
		}
		if(!is_null($xml) && count($xml->useSso))
		{
			if(!empty($xml->useSso) && ((int) $xml->useSso === 1 || strtolower((string)$xml->useSso) === 'true'))
				$this->useSso = true;
			else
				$this->useSso = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useSso))
		{
			if(!empty($jsonObject->useSso) && ((int) $jsonObject->useSso === 1 || strtolower((string)$jsonObject->useSso) === 'true'))
				$this->useSso = true;
			else
				$this->useSso = false;
		}
		if(!is_null($xml) && count($xml->blockDirectLogin))
		{
			if(!empty($xml->blockDirectLogin) && ((int) $xml->blockDirectLogin === 1 || strtolower((string)$xml->blockDirectLogin) === 'true'))
				$this->blockDirectLogin = true;
			else
				$this->blockDirectLogin = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->blockDirectLogin))
		{
			if(!empty($jsonObject->blockDirectLogin) && ((int) $jsonObject->blockDirectLogin === 1 || strtolower((string)$jsonObject->blockDirectLogin) === 'true'))
				$this->blockDirectLogin = true;
			else
				$this->blockDirectLogin = false;
		}
		if(!is_null($xml) && count($xml->host))
			$this->host = (string)$xml->host;
		if(!is_null($jsonObject) && isset($jsonObject->host))
			$this->host = (string)$jsonObject->host;
		if(!is_null($xml) && count($xml->cdnHost))
			$this->cdnHost = (string)$xml->cdnHost;
		if(!is_null($jsonObject) && isset($jsonObject->cdnHost))
			$this->cdnHost = (string)$jsonObject->cdnHost;
		if(!is_null($xml) && count($xml->isFirstLogin))
		{
			if(!empty($xml->isFirstLogin) && ((int) $xml->isFirstLogin === 1 || strtolower((string)$xml->isFirstLogin) === 'true'))
				$this->isFirstLogin = true;
			else
				$this->isFirstLogin = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isFirstLogin))
		{
			if(!empty($jsonObject->isFirstLogin) && ((int) $jsonObject->isFirstLogin === 1 || strtolower((string)$jsonObject->isFirstLogin) === 'true'))
				$this->isFirstLogin = true;
			else
				$this->isFirstLogin = false;
		}
		if(!is_null($xml) && count($xml->logoutUrl))
			$this->logoutUrl = (string)$xml->logoutUrl;
		if(!is_null($jsonObject) && isset($jsonObject->logoutUrl))
			$this->logoutUrl = (string)$jsonObject->logoutUrl;
		if(!is_null($xml) && count($xml->partnerParentId))
			$this->partnerParentId = (int)$xml->partnerParentId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerParentId))
			$this->partnerParentId = (int)$jsonObject->partnerParentId;
		if(!is_null($xml) && count($xml->crmId))
			$this->crmId = (string)$xml->crmId;
		if(!is_null($jsonObject) && isset($jsonObject->crmId))
			$this->crmId = (string)$jsonObject->crmId;
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
		if(!is_null($xml) && count($xml->timeAlignedRenditions))
		{
			if(!empty($xml->timeAlignedRenditions) && ((int) $xml->timeAlignedRenditions === 1 || strtolower((string)$xml->timeAlignedRenditions) === 'true'))
				$this->timeAlignedRenditions = true;
			else
				$this->timeAlignedRenditions = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->timeAlignedRenditions))
		{
			if(!empty($jsonObject->timeAlignedRenditions) && ((int) $jsonObject->timeAlignedRenditions === 1 || strtolower((string)$jsonObject->timeAlignedRenditions) === 'true'))
				$this->timeAlignedRenditions = true;
			else
				$this->timeAlignedRenditions = false;
		}
		if(!is_null($xml) && count($xml->publisherEnvironmentType))
			$this->publisherEnvironmentType = (int)$xml->publisherEnvironmentType;
		if(!is_null($jsonObject) && isset($jsonObject->publisherEnvironmentType))
			$this->publisherEnvironmentType = (int)$jsonObject->publisherEnvironmentType;
		if(!is_null($xml) && count($xml->ovpEnvironmentUrl))
			$this->ovpEnvironmentUrl = (string)$xml->ovpEnvironmentUrl;
		if(!is_null($jsonObject) && isset($jsonObject->ovpEnvironmentUrl))
			$this->ovpEnvironmentUrl = (string)$jsonObject->ovpEnvironmentUrl;
		if(!is_null($xml) && count($xml->ottEnvironmentUrl))
			$this->ottEnvironmentUrl = (string)$xml->ottEnvironmentUrl;
		if(!is_null($jsonObject) && isset($jsonObject->ottEnvironmentUrl))
			$this->ottEnvironmentUrl = (string)$jsonObject->ottEnvironmentUrl;
		if(!is_null($xml) && count($xml->eSearchLanguages))
		{
			if(empty($xml->eSearchLanguages))
				$this->eSearchLanguages = array();
			else
				$this->eSearchLanguages = Kaltura_Client_ParseUtils::unmarshalArray($xml->eSearchLanguages, "KalturaESearchLanguageItem");
		}
		if(!is_null($jsonObject) && isset($jsonObject->eSearchLanguages))
		{
			if(empty($jsonObject->eSearchLanguages))
				$this->eSearchLanguages = array();
			else
				$this->eSearchLanguages = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->eSearchLanguages, "KalturaESearchLanguageItem");
		}
		if(!is_null($xml) && count($xml->authenticationType))
			$this->authenticationType = (int)$xml->authenticationType;
		if(!is_null($jsonObject) && isset($jsonObject->authenticationType))
			$this->authenticationType = (int)$jsonObject->authenticationType;
		if(!is_null($xml) && count($xml->extendedFreeTrailExpiryReason))
			$this->extendedFreeTrailExpiryReason = (string)$xml->extendedFreeTrailExpiryReason;
		if(!is_null($jsonObject) && isset($jsonObject->extendedFreeTrailExpiryReason))
			$this->extendedFreeTrailExpiryReason = (string)$jsonObject->extendedFreeTrailExpiryReason;
		if(!is_null($xml) && count($xml->extendedFreeTrailExpiryDate))
			$this->extendedFreeTrailExpiryDate = (int)$xml->extendedFreeTrailExpiryDate;
		if(!is_null($jsonObject) && isset($jsonObject->extendedFreeTrailExpiryDate))
			$this->extendedFreeTrailExpiryDate = (int)$jsonObject->extendedFreeTrailExpiryDate;
		if(!is_null($xml) && count($xml->extendedFreeTrail))
			$this->extendedFreeTrail = (int)$xml->extendedFreeTrail;
		if(!is_null($jsonObject) && isset($jsonObject->extendedFreeTrail))
			$this->extendedFreeTrail = (int)$jsonObject->extendedFreeTrail;
		if(!is_null($xml) && count($xml->extendedFreeTrailEndsWarning))
		{
			if(!empty($xml->extendedFreeTrailEndsWarning) && ((int) $xml->extendedFreeTrailEndsWarning === 1 || strtolower((string)$xml->extendedFreeTrailEndsWarning) === 'true'))
				$this->extendedFreeTrailEndsWarning = true;
			else
				$this->extendedFreeTrailEndsWarning = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->extendedFreeTrailEndsWarning))
		{
			if(!empty($jsonObject->extendedFreeTrailEndsWarning) && ((int) $jsonObject->extendedFreeTrailEndsWarning === 1 || strtolower((string)$jsonObject->extendedFreeTrailEndsWarning) === 'true'))
				$this->extendedFreeTrailEndsWarning = true;
			else
				$this->extendedFreeTrailEndsWarning = false;
		}
		if(!is_null($xml) && count($xml->eightyPercentWarning))
			$this->eightyPercentWarning = (int)$xml->eightyPercentWarning;
		if(!is_null($jsonObject) && isset($jsonObject->eightyPercentWarning))
			$this->eightyPercentWarning = (int)$jsonObject->eightyPercentWarning;
		if(!is_null($xml) && count($xml->usageLimitWarning))
			$this->usageLimitWarning = (int)$xml->usageLimitWarning;
		if(!is_null($jsonObject) && isset($jsonObject->usageLimitWarning))
			$this->usageLimitWarning = (int)$jsonObject->usageLimitWarning;
		if(!is_null($xml) && count($xml->lastFreeTrialNotificationDay))
			$this->lastFreeTrialNotificationDay = (int)$xml->lastFreeTrialNotificationDay;
		if(!is_null($jsonObject) && isset($jsonObject->lastFreeTrialNotificationDay))
			$this->lastFreeTrialNotificationDay = (int)$jsonObject->lastFreeTrialNotificationDay;
		if(!is_null($xml) && count($xml->monitorUsage))
			$this->monitorUsage = (int)$xml->monitorUsage;
		if(!is_null($jsonObject) && isset($jsonObject->monitorUsage))
			$this->monitorUsage = (int)$jsonObject->monitorUsage;
		if(!is_null($xml) && count($xml->passwordStructureValidations))
		{
			if(empty($xml->passwordStructureValidations))
				$this->passwordStructureValidations = array();
			else
				$this->passwordStructureValidations = Kaltura_Client_ParseUtils::unmarshalArray($xml->passwordStructureValidations, "KalturaRegexItem");
		}
		if(!is_null($jsonObject) && isset($jsonObject->passwordStructureValidations))
		{
			if(empty($jsonObject->passwordStructureValidations))
				$this->passwordStructureValidations = array();
			else
				$this->passwordStructureValidations = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->passwordStructureValidations, "KalturaRegexItem");
		}
		if(!is_null($xml) && count($xml->passwordStructureValidationsDescription))
			$this->passwordStructureValidationsDescription = (string)$xml->passwordStructureValidationsDescription;
		if(!is_null($jsonObject) && isset($jsonObject->passwordStructureValidationsDescription))
			$this->passwordStructureValidationsDescription = (string)$jsonObject->passwordStructureValidationsDescription;
		if(!is_null($xml) && count($xml->passReplaceFreq))
			$this->passReplaceFreq = (int)$xml->passReplaceFreq;
		if(!is_null($jsonObject) && isset($jsonObject->passReplaceFreq))
			$this->passReplaceFreq = (int)$jsonObject->passReplaceFreq;
		if(!is_null($xml) && count($xml->maxLoginAttempts))
			$this->maxLoginAttempts = (int)$xml->maxLoginAttempts;
		if(!is_null($jsonObject) && isset($jsonObject->maxLoginAttempts))
			$this->maxLoginAttempts = (int)$jsonObject->maxLoginAttempts;
		if(!is_null($xml) && count($xml->loginBlockPeriod))
			$this->loginBlockPeriod = (int)$xml->loginBlockPeriod;
		if(!is_null($jsonObject) && isset($jsonObject->loginBlockPeriod))
			$this->loginBlockPeriod = (int)$jsonObject->loginBlockPeriod;
		if(!is_null($xml) && count($xml->numPrevPassToKeep))
			$this->numPrevPassToKeep = (int)$xml->numPrevPassToKeep;
		if(!is_null($jsonObject) && isset($jsonObject->numPrevPassToKeep))
			$this->numPrevPassToKeep = (int)$jsonObject->numPrevPassToKeep;
		if(!is_null($xml) && count($xml->allowDefaultPasswordRestrictions))
		{
			if(!empty($xml->allowDefaultPasswordRestrictions) && ((int) $xml->allowDefaultPasswordRestrictions === 1 || strtolower((string)$xml->allowDefaultPasswordRestrictions) === 'true'))
				$this->allowDefaultPasswordRestrictions = true;
			else
				$this->allowDefaultPasswordRestrictions = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowDefaultPasswordRestrictions))
		{
			if(!empty($jsonObject->allowDefaultPasswordRestrictions) && ((int) $jsonObject->allowDefaultPasswordRestrictions === 1 || strtolower((string)$jsonObject->allowDefaultPasswordRestrictions) === 'true'))
				$this->allowDefaultPasswordRestrictions = true;
			else
				$this->allowDefaultPasswordRestrictions = false;
		}
		if(!is_null($xml) && count($xml->twoFactorAuthenticationMode))
			$this->twoFactorAuthenticationMode = (int)$xml->twoFactorAuthenticationMode;
		if(!is_null($jsonObject) && isset($jsonObject->twoFactorAuthenticationMode))
			$this->twoFactorAuthenticationMode = (int)$jsonObject->twoFactorAuthenticationMode;
		if(!is_null($xml) && count($xml->isSelfServe))
		{
			if(!empty($xml->isSelfServe) && ((int) $xml->isSelfServe === 1 || strtolower((string)$xml->isSelfServe) === 'true'))
				$this->isSelfServe = true;
			else
				$this->isSelfServe = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->isSelfServe))
		{
			if(!empty($jsonObject->isSelfServe) && ((int) $jsonObject->isSelfServe === 1 || strtolower((string)$jsonObject->isSelfServe) === 'true'))
				$this->isSelfServe = true;
			else
				$this->isSelfServe = false;
		}
		if(!is_null($xml) && count($xml->allowedDomains))
			$this->allowedDomains = (string)$xml->allowedDomains;
		if(!is_null($jsonObject) && isset($jsonObject->allowedDomains))
			$this->allowedDomains = (string)$jsonObject->allowedDomains;
		if(!is_null($xml) && count($xml->excludedAdminRoleName))
			$this->excludedAdminRoleName = (string)$xml->excludedAdminRoleName;
		if(!is_null($jsonObject) && isset($jsonObject->excludedAdminRoleName))
			$this->excludedAdminRoleName = (string)$jsonObject->excludedAdminRoleName;
		if(!is_null($xml) && count($xml->eventPlatformAllowedTemplates))
			$this->eventPlatformAllowedTemplates = (string)$xml->eventPlatformAllowedTemplates;
		if(!is_null($jsonObject) && isset($jsonObject->eventPlatformAllowedTemplates))
			$this->eventPlatformAllowedTemplates = (string)$jsonObject->eventPlatformAllowedTemplates;
		if(!is_null($xml) && count($xml->verticalClassificationId))
			$this->verticalClassificationId = (int)$xml->verticalClassificationId;
		if(!is_null($jsonObject) && isset($jsonObject->verticalClassificationId))
			$this->verticalClassificationId = (int)$jsonObject->verticalClassificationId;
		if(!is_null($xml) && count($xml->recycleBinRetentionPeriod))
			$this->recycleBinRetentionPeriod = (int)$xml->recycleBinRetentionPeriod;
		if(!is_null($jsonObject) && isset($jsonObject->recycleBinRetentionPeriod))
			$this->recycleBinRetentionPeriod = (int)$jsonObject->recycleBinRetentionPeriod;
		if(!is_null($xml) && count($xml->customAnalyticsDomain))
			$this->customAnalyticsDomain = (string)$xml->customAnalyticsDomain;
		if(!is_null($jsonObject) && isset($jsonObject->customAnalyticsDomain))
			$this->customAnalyticsDomain = (string)$jsonObject->customAnalyticsDomain;
		if(!is_null($xml) && count($xml->allowedEmailDomainsForAdmins))
			$this->allowedEmailDomainsForAdmins = (string)$xml->allowedEmailDomainsForAdmins;
		if(!is_null($jsonObject) && isset($jsonObject->allowedEmailDomainsForAdmins))
			$this->allowedEmailDomainsForAdmins = (string)$jsonObject->allowedEmailDomainsForAdmins;
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $website = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $appearInSearch = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * deprecated - lastName and firstName replaces this field
	 *
	 * @var string
	 */
	public $adminName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_CommercialUseType
	 */
	public $commercialUse = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $landingPage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userLandingPage = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentCategories = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PartnerType
	 */
	public $type = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $phone = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $describeYourself = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $adultContent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defConversionProfileType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $notify = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PartnerStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $allowQuickEdit = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $mergeEntryLists = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationsConfig = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowedFromEmailWhiteList = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxUploadSize = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerPackage = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $secret = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $adminSecret = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $cmsPassword = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $allowMultiNotification = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $adminLoginUsersQuota = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adminUserId = null;

	/**
	 * firstName and lastName replace the old (deprecated) adminName
	 *
	 * @var string
	 */
	public $firstName = null;

	/**
	 * lastName and firstName replace the old (deprecated) adminName
	 *
	 * @var string
	 */
	public $lastName = null;

	/**
	 * country code (2char) - this field is optional
	 *
	 * @var string
	 */
	public $country = null;

	/**
	 * state code (2char) - this field is optional
	 *
	 * @var string
	 */
	public $state = null;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $additionalParams;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $publishersQuota = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PartnerGroupType
	 * @readonly
	 */
	public $partnerGroupType = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $defaultEntitlementEnforcement = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $defaultDeliveryType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $defaultEmbedCodeType = null;

	/**
	 * 
	 *
	 * @var array of KalturaPlayerDeliveryType
	 * @readonly
	 */
	public $deliveryTypes;

	/**
	 * 
	 *
	 * @var array of KalturaPlayerEmbedCodeType
	 * @readonly
	 */
	public $embedCodeTypes;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $templatePartnerId = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $ignoreSeoLinks = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $useTwoFactorAuthentication = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $useSso = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $blockDirectLogin = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $host = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $cdnHost = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $isFirstLogin = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $logoutUrl = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerParentId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $crmId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $referenceId = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $timeAlignedRenditions = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $publisherEnvironmentType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $ovpEnvironmentUrl = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $ottEnvironmentUrl = null;

	/**
	 * 
	 *
	 * @var array of KalturaESearchLanguageItem
	 */
	public $eSearchLanguages;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_PartnerAuthenticationType
	 * @readonly
	 */
	public $authenticationType = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $extendedFreeTrailExpiryReason = null;

	/**
	 * Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $extendedFreeTrailExpiryDate = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $extendedFreeTrail = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $extendedFreeTrailEndsWarning = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $eightyPercentWarning = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $usageLimitWarning = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $lastFreeTrialNotificationDay = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $monitorUsage = null;

	/**
	 * 
	 *
	 * @var array of KalturaRegexItem
	 */
	public $passwordStructureValidations;

	/**
	 * 
	 *
	 * @var string
	 */
	public $passwordStructureValidationsDescription = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $passReplaceFreq = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxLoginAttempts = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $loginBlockPeriod = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $numPrevPassToKeep = null;

	/**
	 * 
	 *
	 * @var bool
	 * @readonly
	 */
	public $allowDefaultPasswordRestrictions = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_TwoFactorAuthenticationMode
	 * @readonly
	 */
	public $twoFactorAuthenticationMode = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $isSelfServe = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $allowedDomains = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $excludedAdminRoleName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $eventPlatformAllowedTemplates = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $verticalClassificationId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $recycleBinRetentionPeriod = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $customAnalyticsDomain = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowedEmailDomainsForAdmins = null;


}

