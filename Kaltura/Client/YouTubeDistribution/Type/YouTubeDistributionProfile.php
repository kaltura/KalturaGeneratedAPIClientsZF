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
class Kaltura_Client_YouTubeDistribution_Type_YouTubeDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaYouTubeDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->feedSpecVersion))
			$this->feedSpecVersion = (string)$xml->feedSpecVersion;
		if(!is_null($jsonObject) && isset($jsonObject->feedSpecVersion))
			$this->feedSpecVersion = (string)$jsonObject->feedSpecVersion;
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->notificationEmail))
			$this->notificationEmail = (string)$xml->notificationEmail;
		if(!is_null($jsonObject) && isset($jsonObject->notificationEmail))
			$this->notificationEmail = (string)$jsonObject->notificationEmail;
		if(!is_null($xml) && count($xml->sftpHost))
			$this->sftpHost = (string)$xml->sftpHost;
		if(!is_null($jsonObject) && isset($jsonObject->sftpHost))
			$this->sftpHost = (string)$jsonObject->sftpHost;
		if(!is_null($xml) && count($xml->sftpPort))
			$this->sftpPort = (int)$xml->sftpPort;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPort))
			$this->sftpPort = (int)$jsonObject->sftpPort;
		if(!is_null($xml) && count($xml->sftpLogin))
			$this->sftpLogin = (string)$xml->sftpLogin;
		if(!is_null($jsonObject) && isset($jsonObject->sftpLogin))
			$this->sftpLogin = (string)$jsonObject->sftpLogin;
		if(!is_null($xml) && count($xml->sftpPublicKey))
			$this->sftpPublicKey = (string)$xml->sftpPublicKey;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPublicKey))
			$this->sftpPublicKey = (string)$jsonObject->sftpPublicKey;
		if(!is_null($xml) && count($xml->sftpPrivateKey))
			$this->sftpPrivateKey = (string)$xml->sftpPrivateKey;
		if(!is_null($jsonObject) && isset($jsonObject->sftpPrivateKey))
			$this->sftpPrivateKey = (string)$jsonObject->sftpPrivateKey;
		if(!is_null($xml) && count($xml->sftpBaseDir))
			$this->sftpBaseDir = (string)$xml->sftpBaseDir;
		if(!is_null($jsonObject) && isset($jsonObject->sftpBaseDir))
			$this->sftpBaseDir = (string)$jsonObject->sftpBaseDir;
		if(!is_null($xml) && count($xml->ownerName))
			$this->ownerName = (string)$xml->ownerName;
		if(!is_null($jsonObject) && isset($jsonObject->ownerName))
			$this->ownerName = (string)$jsonObject->ownerName;
		if(!is_null($xml) && count($xml->defaultCategory))
			$this->defaultCategory = (string)$xml->defaultCategory;
		if(!is_null($jsonObject) && isset($jsonObject->defaultCategory))
			$this->defaultCategory = (string)$jsonObject->defaultCategory;
		if(!is_null($xml) && count($xml->allowComments))
			$this->allowComments = (string)$xml->allowComments;
		if(!is_null($jsonObject) && isset($jsonObject->allowComments))
			$this->allowComments = (string)$jsonObject->allowComments;
		if(!is_null($xml) && count($xml->allowEmbedding))
			$this->allowEmbedding = (string)$xml->allowEmbedding;
		if(!is_null($jsonObject) && isset($jsonObject->allowEmbedding))
			$this->allowEmbedding = (string)$jsonObject->allowEmbedding;
		if(!is_null($xml) && count($xml->allowRatings))
			$this->allowRatings = (string)$xml->allowRatings;
		if(!is_null($jsonObject) && isset($jsonObject->allowRatings))
			$this->allowRatings = (string)$jsonObject->allowRatings;
		if(!is_null($xml) && count($xml->allowResponses))
			$this->allowResponses = (string)$xml->allowResponses;
		if(!is_null($jsonObject) && isset($jsonObject->allowResponses))
			$this->allowResponses = (string)$jsonObject->allowResponses;
		if(!is_null($xml) && count($xml->commercialPolicy))
			$this->commercialPolicy = (string)$xml->commercialPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->commercialPolicy))
			$this->commercialPolicy = (string)$jsonObject->commercialPolicy;
		if(!is_null($xml) && count($xml->ugcPolicy))
			$this->ugcPolicy = (string)$xml->ugcPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->ugcPolicy))
			$this->ugcPolicy = (string)$jsonObject->ugcPolicy;
		if(!is_null($xml) && count($xml->target))
			$this->target = (string)$xml->target;
		if(!is_null($jsonObject) && isset($jsonObject->target))
			$this->target = (string)$jsonObject->target;
		if(!is_null($xml) && count($xml->adServerPartnerId))
			$this->adServerPartnerId = (string)$xml->adServerPartnerId;
		if(!is_null($jsonObject) && isset($jsonObject->adServerPartnerId))
			$this->adServerPartnerId = (string)$jsonObject->adServerPartnerId;
		if(!is_null($xml) && count($xml->enableAdServer))
		{
			if(!empty($xml->enableAdServer) && ((int) $xml->enableAdServer === 1 || strtolower((string)$xml->enableAdServer) === 'true'))
				$this->enableAdServer = true;
			else
				$this->enableAdServer = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enableAdServer))
		{
			if(!empty($jsonObject->enableAdServer) && ((int) $jsonObject->enableAdServer === 1 || strtolower((string)$jsonObject->enableAdServer) === 'true'))
				$this->enableAdServer = true;
			else
				$this->enableAdServer = false;
		}
		if(!is_null($xml) && count($xml->allowPreRollAds))
		{
			if(!empty($xml->allowPreRollAds) && ((int) $xml->allowPreRollAds === 1 || strtolower((string)$xml->allowPreRollAds) === 'true'))
				$this->allowPreRollAds = true;
			else
				$this->allowPreRollAds = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowPreRollAds))
		{
			if(!empty($jsonObject->allowPreRollAds) && ((int) $jsonObject->allowPreRollAds === 1 || strtolower((string)$jsonObject->allowPreRollAds) === 'true'))
				$this->allowPreRollAds = true;
			else
				$this->allowPreRollAds = false;
		}
		if(!is_null($xml) && count($xml->allowPostRollAds))
		{
			if(!empty($xml->allowPostRollAds) && ((int) $xml->allowPostRollAds === 1 || strtolower((string)$xml->allowPostRollAds) === 'true'))
				$this->allowPostRollAds = true;
			else
				$this->allowPostRollAds = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowPostRollAds))
		{
			if(!empty($jsonObject->allowPostRollAds) && ((int) $jsonObject->allowPostRollAds === 1 || strtolower((string)$jsonObject->allowPostRollAds) === 'true'))
				$this->allowPostRollAds = true;
			else
				$this->allowPostRollAds = false;
		}
		if(!is_null($xml) && count($xml->strict))
			$this->strict = (string)$xml->strict;
		if(!is_null($jsonObject) && isset($jsonObject->strict))
			$this->strict = (string)$jsonObject->strict;
		if(!is_null($xml) && count($xml->overrideManualEdits))
			$this->overrideManualEdits = (string)$xml->overrideManualEdits;
		if(!is_null($jsonObject) && isset($jsonObject->overrideManualEdits))
			$this->overrideManualEdits = (string)$jsonObject->overrideManualEdits;
		if(!is_null($xml) && count($xml->urgentReference))
			$this->urgentReference = (string)$xml->urgentReference;
		if(!is_null($jsonObject) && isset($jsonObject->urgentReference))
			$this->urgentReference = (string)$jsonObject->urgentReference;
		if(!is_null($xml) && count($xml->allowSyndication))
			$this->allowSyndication = (string)$xml->allowSyndication;
		if(!is_null($jsonObject) && isset($jsonObject->allowSyndication))
			$this->allowSyndication = (string)$jsonObject->allowSyndication;
		if(!is_null($xml) && count($xml->hideViewCount))
			$this->hideViewCount = (string)$xml->hideViewCount;
		if(!is_null($jsonObject) && isset($jsonObject->hideViewCount))
			$this->hideViewCount = (string)$jsonObject->hideViewCount;
		if(!is_null($xml) && count($xml->allowAdsenseForVideo))
			$this->allowAdsenseForVideo = (string)$xml->allowAdsenseForVideo;
		if(!is_null($jsonObject) && isset($jsonObject->allowAdsenseForVideo))
			$this->allowAdsenseForVideo = (string)$jsonObject->allowAdsenseForVideo;
		if(!is_null($xml) && count($xml->allowInvideo))
			$this->allowInvideo = (string)$xml->allowInvideo;
		if(!is_null($jsonObject) && isset($jsonObject->allowInvideo))
			$this->allowInvideo = (string)$jsonObject->allowInvideo;
		if(!is_null($xml) && count($xml->allowMidRollAds))
		{
			if(!empty($xml->allowMidRollAds) && ((int) $xml->allowMidRollAds === 1 || strtolower((string)$xml->allowMidRollAds) === 'true'))
				$this->allowMidRollAds = true;
			else
				$this->allowMidRollAds = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowMidRollAds))
		{
			if(!empty($jsonObject->allowMidRollAds) && ((int) $jsonObject->allowMidRollAds === 1 || strtolower((string)$jsonObject->allowMidRollAds) === 'true'))
				$this->allowMidRollAds = true;
			else
				$this->allowMidRollAds = false;
		}
		if(!is_null($xml) && count($xml->instreamStandard))
			$this->instreamStandard = (string)$xml->instreamStandard;
		if(!is_null($jsonObject) && isset($jsonObject->instreamStandard))
			$this->instreamStandard = (string)$jsonObject->instreamStandard;
		if(!is_null($xml) && count($xml->instreamTrueview))
			$this->instreamTrueview = (string)$xml->instreamTrueview;
		if(!is_null($jsonObject) && isset($jsonObject->instreamTrueview))
			$this->instreamTrueview = (string)$jsonObject->instreamTrueview;
		if(!is_null($xml) && count($xml->claimType))
			$this->claimType = (string)$xml->claimType;
		if(!is_null($jsonObject) && isset($jsonObject->claimType))
			$this->claimType = (string)$jsonObject->claimType;
		if(!is_null($xml) && count($xml->blockOutsideOwnership))
			$this->blockOutsideOwnership = (string)$xml->blockOutsideOwnership;
		if(!is_null($jsonObject) && isset($jsonObject->blockOutsideOwnership))
			$this->blockOutsideOwnership = (string)$jsonObject->blockOutsideOwnership;
		if(!is_null($xml) && count($xml->captionAutosync))
			$this->captionAutosync = (string)$xml->captionAutosync;
		if(!is_null($jsonObject) && isset($jsonObject->captionAutosync))
			$this->captionAutosync = (string)$jsonObject->captionAutosync;
		if(!is_null($xml) && count($xml->deleteReference))
		{
			if(!empty($xml->deleteReference) && ((int) $xml->deleteReference === 1 || strtolower((string)$xml->deleteReference) === 'true'))
				$this->deleteReference = true;
			else
				$this->deleteReference = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->deleteReference))
		{
			if(!empty($jsonObject->deleteReference) && ((int) $jsonObject->deleteReference === 1 || strtolower((string)$jsonObject->deleteReference) === 'true'))
				$this->deleteReference = true;
			else
				$this->deleteReference = false;
		}
		if(!is_null($xml) && count($xml->releaseClaims))
		{
			if(!empty($xml->releaseClaims) && ((int) $xml->releaseClaims === 1 || strtolower((string)$xml->releaseClaims) === 'true'))
				$this->releaseClaims = true;
			else
				$this->releaseClaims = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->releaseClaims))
		{
			if(!empty($jsonObject->releaseClaims) && ((int) $jsonObject->releaseClaims === 1 || strtolower((string)$jsonObject->releaseClaims) === 'true'))
				$this->releaseClaims = true;
			else
				$this->releaseClaims = false;
		}
		if(!is_null($xml) && count($xml->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$xml->apiAuthorizeUrl;
		if(!is_null($jsonObject) && isset($jsonObject->apiAuthorizeUrl))
			$this->apiAuthorizeUrl = (string)$jsonObject->apiAuthorizeUrl;
		if(!is_null($xml) && count($xml->privacyStatus))
			$this->privacyStatus = (string)$xml->privacyStatus;
		if(!is_null($jsonObject) && isset($jsonObject->privacyStatus))
			$this->privacyStatus = (string)$jsonObject->privacyStatus;
		if(!is_null($xml) && count($xml->enableContentId))
			$this->enableContentId = (string)$xml->enableContentId;
		if(!is_null($jsonObject) && isset($jsonObject->enableContentId))
			$this->enableContentId = (string)$jsonObject->enableContentId;
		if(!is_null($xml) && count($xml->thirdPartyAds))
			$this->thirdPartyAds = (string)$xml->thirdPartyAds;
		if(!is_null($jsonObject) && isset($jsonObject->thirdPartyAds))
			$this->thirdPartyAds = (string)$jsonObject->thirdPartyAds;
		if(!is_null($xml) && count($xml->productListingAds))
			$this->productListingAds = (string)$xml->productListingAds;
		if(!is_null($jsonObject) && isset($jsonObject->productListingAds))
			$this->productListingAds = (string)$jsonObject->productListingAds;
		if(!is_null($xml) && count($xml->domainWhitelist))
			$this->domainWhitelist = (string)$xml->domainWhitelist;
		if(!is_null($jsonObject) && isset($jsonObject->domainWhitelist))
			$this->domainWhitelist = (string)$jsonObject->domainWhitelist;
		if(!is_null($xml) && count($xml->notifySubscribers))
			$this->notifySubscribers = (string)$xml->notifySubscribers;
		if(!is_null($jsonObject) && isset($jsonObject->notifySubscribers))
			$this->notifySubscribers = (string)$jsonObject->notifySubscribers;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_YouTubeDistribution_Enum_YouTubeDistributionFeedSpecVersion
	 */
	public $feedSpecVersion = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notificationEmail = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpHost = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sftpPort = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpLogin = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPublicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpPrivateKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sftpBaseDir = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ownerName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $defaultCategory = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowComments = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowEmbedding = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowRatings = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowResponses = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $commercialPolicy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ugcPolicy = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $target = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $adServerPartnerId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $enableAdServer = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowPreRollAds = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowPostRollAds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $strict = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $overrideManualEdits = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $urgentReference = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowSyndication = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hideViewCount = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowAdsenseForVideo = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $allowInvideo = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $allowMidRollAds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $instreamStandard = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $instreamTrueview = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $claimType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $blockOutsideOwnership = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAutosync = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $deleteReference = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $releaseClaims = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $apiAuthorizeUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privacyStatus = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $enableContentId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $thirdPartyAds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $productListingAds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $domainWhitelist = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $notifySubscribers = null;


}

