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
class Kaltura_Client_Client extends Kaltura_Client_ClientBase
{
	/**
	 * 
	 * @var Kaltura_Client_AnnouncementService
	 */
	public $announcement = null;

	/**
	 * 
	 * @var Kaltura_Client_AppTokenService
	 */
	public $appToken = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetCommentService
	 */
	public $assetComment = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetService
	 */
	public $asset = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetFileService
	 */
	public $assetFile = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetHistoryService
	 */
	public $assetHistory = null;

	/**
	 * 
	 * @var Kaltura_Client_AssetStatisticsService
	 */
	public $assetStatistics = null;

	/**
	 * 
	 * @var Kaltura_Client_BookmarkService
	 */
	public $bookmark = null;

	/**
	 * 
	 * @var Kaltura_Client_CdnAdapterProfileService
	 */
	public $cdnAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_CdnPartnerSettingsService
	 */
	public $cdnPartnerSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_CDVRAdapterProfileService
	 */
	public $cDVRAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_ChannelService
	 */
	public $channel = null;

	/**
	 * 
	 * @var Kaltura_Client_CouponService
	 */
	public $coupon = null;

	/**
	 * 
	 * @var Kaltura_Client_EntitlementService
	 */
	public $entitlement = null;

	/**
	 * 
	 * @var Kaltura_Client_ExportTaskService
	 */
	public $exportTask = null;

	/**
	 * 
	 * @var Kaltura_Client_ExternalChannelProfileService
	 */
	public $externalChannelProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_FavoriteService
	 */
	public $favorite = null;

	/**
	 * 
	 * @var Kaltura_Client_FollowTvSeriesService
	 */
	public $followTvSeries = null;

	/**
	 * 
	 * @var Kaltura_Client_HomeNetworkService
	 */
	public $homeNetwork = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdService
	 */
	public $household = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdDeviceService
	 */
	public $householdDevice = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdLimitationsService
	 */
	public $householdLimitations = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdPaymentGatewayService
	 */
	public $householdPaymentGateway = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdPaymentMethodService
	 */
	public $householdPaymentMethod = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdPremiumServiceService
	 */
	public $householdPremiumService = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdQuotaService
	 */
	public $householdQuota = null;

	/**
	 * 
	 * @var Kaltura_Client_HouseholdUserService
	 */
	public $householdUser = null;

	/**
	 * 
	 * @var Kaltura_Client_InboxMessageService
	 */
	public $inboxMessage = null;

	/**
	 * 
	 * @var Kaltura_Client_LicensedUrlService
	 */
	public $licensedUrl = null;

	/**
	 * 
	 * @var Kaltura_Client_MessageTemplateService
	 */
	public $messageTemplate = null;

	/**
	 * 
	 * @var Kaltura_Client_NotificationService
	 */
	public $notification = null;

	/**
	 * 
	 * @var Kaltura_Client_NotificationsPartnerSettingsService
	 */
	public $notificationsPartnerSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_NotificationsSettingsService
	 */
	public $notificationsSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_OssAdapterProfileService
	 */
	public $ossAdapterProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_OttCategoryService
	 */
	public $ottCategory = null;

	/**
	 * 
	 * @var Kaltura_Client_OttUserService
	 */
	public $ottUser = null;

	/**
	 * 
	 * @var Kaltura_Client_ParentalRuleService
	 */
	public $parentalRule = null;

	/**
	 * 
	 * @var Kaltura_Client_PartnerConfigurationService
	 */
	public $partnerConfiguration = null;

	/**
	 * 
	 * @var Kaltura_Client_PaymentGatewayProfileService
	 */
	public $paymentGatewayProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_PaymentMethodProfileService
	 */
	public $paymentMethodProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_PersonalFeedService
	 */
	public $personalFeed = null;

	/**
	 * 
	 * @var Kaltura_Client_PinService
	 */
	public $pin = null;

	/**
	 * 
	 * @var Kaltura_Client_PpvService
	 */
	public $ppv = null;

	/**
	 * 
	 * @var Kaltura_Client_ProductPriceService
	 */
	public $productPrice = null;

	/**
	 * 
	 * @var Kaltura_Client_PurchaseSettingsService
	 */
	public $purchaseSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_RecommendationProfileService
	 */
	public $recommendationProfile = null;

	/**
	 * 
	 * @var Kaltura_Client_RecordingService
	 */
	public $recording = null;

	/**
	 * 
	 * @var Kaltura_Client_RegionService
	 */
	public $region = null;

	/**
	 * 
	 * @var Kaltura_Client_RegistrySettingsService
	 */
	public $registrySettings = null;

	/**
	 * 
	 * @var Kaltura_Client_SeriesRecordingService
	 */
	public $seriesRecording = null;

	/**
	 * 
	 * @var Kaltura_Client_SessionService
	 */
	public $session = null;

	/**
	 * 
	 * @var Kaltura_Client_SocialService
	 */
	public $social = null;

	/**
	 * 
	 * @var Kaltura_Client_SubscriptionService
	 */
	public $subscription = null;

	/**
	 * 
	 * @var Kaltura_Client_SystemService
	 */
	public $system = null;

	/**
	 * 
	 * @var Kaltura_Client_TimeShiftedTvPartnerSettingsService
	 */
	public $timeShiftedTvPartnerSettings = null;

	/**
	 * 
	 * @var Kaltura_Client_TopicService
	 */
	public $topic = null;

	/**
	 * 
	 * @var Kaltura_Client_TransactionService
	 */
	public $transaction = null;

	/**
	 * 
	 * @var Kaltura_Client_TransactionHistoryService
	 */
	public $transactionHistory = null;

	/**
	 * 
	 * @var Kaltura_Client_UserAssetRuleService
	 */
	public $userAssetRule = null;

	/**
	 * 
	 * @var Kaltura_Client_UserAssetsListItemService
	 */
	public $userAssetsListItem = null;

	/**
	 * 
	 * @var Kaltura_Client_UserLoginPinService
	 */
	public $userLoginPin = null;

	/**
	 * 
	 * @var Kaltura_Client_UserRoleService
	 */
	public $userRole = null;

	/**
	 * Kaltura client constructor
	 *
	 * @param Kaltura_Client_Configuration $config
	 */
	public function __construct(Kaltura_Client_Configuration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:17-07-06');
		$this->setApiVersion('3.6.287.20330');
		
		$this->announcement = new Kaltura_Client_AnnouncementService($this);
		$this->appToken = new Kaltura_Client_AppTokenService($this);
		$this->assetComment = new Kaltura_Client_AssetCommentService($this);
		$this->asset = new Kaltura_Client_AssetService($this);
		$this->assetFile = new Kaltura_Client_AssetFileService($this);
		$this->assetHistory = new Kaltura_Client_AssetHistoryService($this);
		$this->assetStatistics = new Kaltura_Client_AssetStatisticsService($this);
		$this->bookmark = new Kaltura_Client_BookmarkService($this);
		$this->cdnAdapterProfile = new Kaltura_Client_CdnAdapterProfileService($this);
		$this->cdnPartnerSettings = new Kaltura_Client_CdnPartnerSettingsService($this);
		$this->cDVRAdapterProfile = new Kaltura_Client_CDVRAdapterProfileService($this);
		$this->channel = new Kaltura_Client_ChannelService($this);
		$this->coupon = new Kaltura_Client_CouponService($this);
		$this->entitlement = new Kaltura_Client_EntitlementService($this);
		$this->exportTask = new Kaltura_Client_ExportTaskService($this);
		$this->externalChannelProfile = new Kaltura_Client_ExternalChannelProfileService($this);
		$this->favorite = new Kaltura_Client_FavoriteService($this);
		$this->followTvSeries = new Kaltura_Client_FollowTvSeriesService($this);
		$this->homeNetwork = new Kaltura_Client_HomeNetworkService($this);
		$this->household = new Kaltura_Client_HouseholdService($this);
		$this->householdDevice = new Kaltura_Client_HouseholdDeviceService($this);
		$this->householdLimitations = new Kaltura_Client_HouseholdLimitationsService($this);
		$this->householdPaymentGateway = new Kaltura_Client_HouseholdPaymentGatewayService($this);
		$this->householdPaymentMethod = new Kaltura_Client_HouseholdPaymentMethodService($this);
		$this->householdPremiumService = new Kaltura_Client_HouseholdPremiumServiceService($this);
		$this->householdQuota = new Kaltura_Client_HouseholdQuotaService($this);
		$this->householdUser = new Kaltura_Client_HouseholdUserService($this);
		$this->inboxMessage = new Kaltura_Client_InboxMessageService($this);
		$this->licensedUrl = new Kaltura_Client_LicensedUrlService($this);
		$this->messageTemplate = new Kaltura_Client_MessageTemplateService($this);
		$this->notification = new Kaltura_Client_NotificationService($this);
		$this->notificationsPartnerSettings = new Kaltura_Client_NotificationsPartnerSettingsService($this);
		$this->notificationsSettings = new Kaltura_Client_NotificationsSettingsService($this);
		$this->ossAdapterProfile = new Kaltura_Client_OssAdapterProfileService($this);
		$this->ottCategory = new Kaltura_Client_OttCategoryService($this);
		$this->ottUser = new Kaltura_Client_OttUserService($this);
		$this->parentalRule = new Kaltura_Client_ParentalRuleService($this);
		$this->partnerConfiguration = new Kaltura_Client_PartnerConfigurationService($this);
		$this->paymentGatewayProfile = new Kaltura_Client_PaymentGatewayProfileService($this);
		$this->paymentMethodProfile = new Kaltura_Client_PaymentMethodProfileService($this);
		$this->personalFeed = new Kaltura_Client_PersonalFeedService($this);
		$this->pin = new Kaltura_Client_PinService($this);
		$this->ppv = new Kaltura_Client_PpvService($this);
		$this->productPrice = new Kaltura_Client_ProductPriceService($this);
		$this->purchaseSettings = new Kaltura_Client_PurchaseSettingsService($this);
		$this->recommendationProfile = new Kaltura_Client_RecommendationProfileService($this);
		$this->recording = new Kaltura_Client_RecordingService($this);
		$this->region = new Kaltura_Client_RegionService($this);
		$this->registrySettings = new Kaltura_Client_RegistrySettingsService($this);
		$this->seriesRecording = new Kaltura_Client_SeriesRecordingService($this);
		$this->session = new Kaltura_Client_SessionService($this);
		$this->social = new Kaltura_Client_SocialService($this);
		$this->subscription = new Kaltura_Client_SubscriptionService($this);
		$this->system = new Kaltura_Client_SystemService($this);
		$this->timeShiftedTvPartnerSettings = new Kaltura_Client_TimeShiftedTvPartnerSettingsService($this);
		$this->topic = new Kaltura_Client_TopicService($this);
		$this->transaction = new Kaltura_Client_TransactionService($this);
		$this->transactionHistory = new Kaltura_Client_TransactionHistoryService($this);
		$this->userAssetRule = new Kaltura_Client_UserAssetRuleService($this);
		$this->userAssetsListItem = new Kaltura_Client_UserAssetsListItemService($this);
		$this->userLoginPin = new Kaltura_Client_UserLoginPinService($this);
		$this->userRole = new Kaltura_Client_UserRoleService($this);
	}
	
	/**
	 * @param string $clientTag
	 */
	public function setClientTag($clientTag)
	{
		$this->clientConfiguration['clientTag'] = $clientTag;
	}
	
	/**
	 * @return string
	 */
	public function getClientTag()
	{
		if(isset($this->clientConfiguration['clientTag']))
		{
			return $this->clientConfiguration['clientTag'];
		}
		
		return null;
	}
	
	/**
	 * @param string $apiVersion
	 */
	public function setApiVersion($apiVersion)
	{
		$this->clientConfiguration['apiVersion'] = $apiVersion;
	}
	
	/**
	 * @return string
	 */
	public function getApiVersion()
	{
		if(isset($this->clientConfiguration['apiVersion']))
		{
			return $this->clientConfiguration['apiVersion'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @param int $partnerId
	 */
	public function setPartnerId($partnerId)
	{
		$this->requestConfiguration['partnerId'] = $partnerId;
	}
	
	/**
	 * Impersonated partner id
	 * 
	 * @return int
	 */
	public function getPartnerId()
	{
		if(isset($this->requestConfiguration['partnerId']))
		{
			return $this->requestConfiguration['partnerId'];
		}
		
		return null;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @param int $userId
	 */
	public function setUserId($userId)
	{
		$this->requestConfiguration['userId'] = $userId;
	}
	
	/**
	 * Impersonated user id
	 * 
	 * @return int
	 */
	public function getUserId()
	{
		if(isset($this->requestConfiguration['userId']))
		{
			return $this->requestConfiguration['userId'];
		}
		
		return null;
	}
	
	/**
	 * Content language
	 * 
	 * @param int $language
	 */
	public function setLanguage($language)
	{
		$this->requestConfiguration['language'] = $language;
	}
	
	/**
	 * Content language
	 * 
	 * @return int
	 */
	public function getLanguage()
	{
		if(isset($this->requestConfiguration['language']))
		{
			return $this->requestConfiguration['language'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $ks
	 */
	public function setKs($ks)
	{
		$this->requestConfiguration['ks'] = $ks;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getKs()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @param string $sessionId
	 */
	public function setSessionId($sessionId)
	{
		$this->requestConfiguration['ks'] = $sessionId;
	}
	
	/**
	 * Kaltura API session
	 * 
	 * @return string
	 */
	public function getSessionId()
	{
		if(isset($this->requestConfiguration['ks']))
		{
			return $this->requestConfiguration['ks'];
		}
		
		return null;
	}
	
	/**
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
	}
}
