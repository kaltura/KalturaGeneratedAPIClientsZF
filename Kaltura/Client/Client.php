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
// Copyright (C) 2006-2019  Kaltura Inc.
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
	 * Manage access control profiles
	 * @var Kaltura_Client_AccessControlProfileService
	 */
	public $accessControlProfile = null;

	/**
	 * Add & Manage Access Controls
	 * @var Kaltura_Client_AccessControlService
	 */
	public $accessControl = null;

	/**
	 * Manage details for the administrative user
	 * @var Kaltura_Client_AdminUserService
	 */
	public $adminUser = null;

	/**
	 * api for getting analytics data
	 * @var Kaltura_Client_AnalyticsService
	 */
	public $analytics = null;

	/**
	 * Manage application authentication tokens
	 * @var Kaltura_Client_AppTokenService
	 */
	public $appToken = null;

	/**
	 * Base Entry Service
	 * @var Kaltura_Client_BaseEntryService
	 */
	public $baseEntry = null;

	/**
	 * Bulk upload service is used to upload & manage bulk uploads using CSV files.
	 *  This service manages only entry bulk uploads.
	 * @var Kaltura_Client_BulkUploadService
	 */
	public $bulkUpload = null;

	/**
	 * Add & Manage CategoryEntry - assign entry to category
	 * @var Kaltura_Client_CategoryEntryService
	 */
	public $categoryEntry = null;

	/**
	 * Add & Manage Categories
	 * @var Kaltura_Client_CategoryService
	 */
	public $category = null;

	/**
	 * Add & Manage CategoryUser - membership of a user in a category
	 * @var Kaltura_Client_CategoryUserService
	 */
	public $categoryUser = null;

	/**
	 * Manage the connection between Conversion Profiles and Asset Params
	 * @var Kaltura_Client_ConversionProfileAssetParamsService
	 */
	public $conversionProfileAssetParams = null;

	/**
	 * Add & Manage Conversion Profiles
	 * @var Kaltura_Client_ConversionProfileService
	 */
	public $conversionProfile = null;

	/**
	 * Data service lets you manage data content (textual content)
	 * @var Kaltura_Client_DataService
	 */
	public $data = null;

	/**
	 * delivery service is used to control delivery objects
	 * @var Kaltura_Client_DeliveryProfileService
	 */
	public $deliveryProfile = null;

	/**
	 * EmailIngestionProfile service lets you manage email ingestion profile records
	 * @var Kaltura_Client_EmailIngestionProfileService
	 */
	public $EmailIngestionProfile = null;

	/**
	 * Base class for entry server node
	 * @var Kaltura_Client_EntryServerNodeService
	 */
	public $entryServerNode = null;

	/**
	 * Export CSV service is used to manage CSV exports of objects
	 * @var Kaltura_Client_ExportcsvService
	 */
	public $exportcsv = null;

	/**
	 * Manage file assets
	 * @var Kaltura_Client_FileAssetService
	 */
	public $fileAsset = null;

	/**
	 * Retrieve information and invoke actions on Flavor Asset
	 * @var Kaltura_Client_FlavorAssetService
	 */
	public $flavorAsset = null;

	/**
	 * Flavor Params Output service
	 * @var Kaltura_Client_FlavorParamsOutputService
	 */
	public $flavorParamsOutput = null;

	/**
	 * Add & Manage Flavor Params
	 * @var Kaltura_Client_FlavorParamsService
	 */
	public $flavorParams = null;

	/**
	 * Add & Manage GroupUser
	 * @var Kaltura_Client_GroupUserService
	 */
	public $groupUser = null;

	/**
	 * Manage live channel segments
	 * @var Kaltura_Client_LiveChannelSegmentService
	 */
	public $liveChannelSegment = null;

	/**
	 * Live Channel service lets you manage live channels
	 * @var Kaltura_Client_LiveChannelService
	 */
	public $liveChannel = null;

	/**
	 * 
	 * @var Kaltura_Client_LiveReportsService
	 */
	public $liveReports = null;

	/**
	 * Stats Service
	 * @var Kaltura_Client_LiveStatsService
	 */
	public $liveStats = null;

	/**
	 * Live Stream service lets you manage live stream entries
	 * @var Kaltura_Client_LiveStreamService
	 */
	public $liveStream = null;

	/**
	 * Media Info service
	 * @var Kaltura_Client_MediaInfoService
	 */
	public $mediaInfo = null;

	/**
	 * Media service lets you upload and manage media files (images / videos & audio)
	 * @var Kaltura_Client_MediaService
	 */
	public $media = null;

	/**
	 * A Mix is an XML unique format invented by Kaltura, it allows the user to create a mix of videos and images, in and out points, transitions, text overlays, soundtrack, effects and much more...
	 *  Mixing service lets you create a new mix, manage its metadata and make basic manipulations.
	 * @var Kaltura_Client_MixingService
	 */
	public $mixing = null;

	/**
	 * Notification Service
	 * @var Kaltura_Client_NotificationService
	 */
	public $notification = null;

	/**
	 * partner service allows you to change/manage your partner personal details and settings as well
	 * @var Kaltura_Client_PartnerService
	 */
	public $partner = null;

	/**
	 * PermissionItem service lets you create and manage permission items
	 * @var Kaltura_Client_PermissionItemService
	 */
	public $permissionItem = null;

	/**
	 * Permission service lets you create and manage user permissions
	 * @var Kaltura_Client_PermissionService
	 */
	public $permission = null;

	/**
	 * Playlist service lets you create,manage and play your playlists
	 *  Playlists could be static (containing a fixed list of entries) or dynamic (based on a filter)
	 * @var Kaltura_Client_PlaylistService
	 */
	public $playlist = null;

	/**
	 * api for getting reports data by the report type and some inputFilter
	 * @var Kaltura_Client_ReportService
	 */
	public $report = null;

	/**
	 * Manage response profiles
	 * @var Kaltura_Client_ResponseProfileService
	 */
	public $responseProfile = null;

	/**
	 * Expose the schema definitions for syndication MRSS, bulk upload XML and other schema types.
	 * @var Kaltura_Client_SchemaService
	 */
	public $schema = null;

	/**
	 * Search service allows you to search for media in various media providers
	 *  This service is being used mostly by the CW component
	 * @var Kaltura_Client_SearchService
	 */
	public $search = null;

	/**
	 * Server Node service
	 * @var Kaltura_Client_ServerNodeService
	 */
	public $serverNode = null;

	/**
	 * Session service
	 * @var Kaltura_Client_SessionService
	 */
	public $session = null;

	/**
	 * Stats Service
	 * @var Kaltura_Client_StatsService
	 */
	public $stats = null;

	/**
	 * The Storage Profile service allows you to export your Kaltura content to external storage volumes.
	 *  This service is disabled by default, please contact your account manager if you wish to enable it for your partner.
	 * @var Kaltura_Client_StorageProfileService
	 */
	public $storageProfile = null;

	/**
	 * Add & Manage Syndication Feeds
	 * @var Kaltura_Client_SyndicationFeedService
	 */
	public $syndicationFeed = null;

	/**
	 * System service is used for internal system helpers & to retrieve system level information
	 * @var Kaltura_Client_SystemService
	 */
	public $system = null;

	/**
	 * Retrieve information and invoke actions on Thumb Asset
	 * @var Kaltura_Client_ThumbAssetService
	 */
	public $thumbAsset = null;

	/**
	 * Thumbnail Params Output service
	 * @var Kaltura_Client_ThumbParamsOutputService
	 */
	public $thumbParamsOutput = null;

	/**
	 * Add & Manage Thumb Params
	 * @var Kaltura_Client_ThumbParamsService
	 */
	public $thumbParams = null;

	/**
	 * UiConf service lets you create and manage your UIConfs for the various flash components
	 *  This service is used by the KMC-ApplicationStudio
	 * @var Kaltura_Client_UiConfService
	 */
	public $uiConf = null;

	/**
	 * 
	 * @var Kaltura_Client_UploadService
	 */
	public $upload = null;

	/**
	 * 
	 * @var Kaltura_Client_UploadTokenService
	 */
	public $uploadToken = null;

	/**
	 * 
	 * @var Kaltura_Client_UserEntryService
	 */
	public $userEntry = null;

	/**
	 * UserRole service lets you create and manage user roles
	 * @var Kaltura_Client_UserRoleService
	 */
	public $userRole = null;

	/**
	 * Manage partner users on Kaltura's side
	 *  The userId in kaltura is the unique ID in the partner's system, and the [partnerId,Id] couple are unique key in kaltura's DB
	 * @var Kaltura_Client_UserService
	 */
	public $user = null;

	/**
	 * widget service for full widget management
	 * @var Kaltura_Client_WidgetService
	 */
	public $widget = null;

	/**
	 * Kaltura client constructor
	 *
	 * @param Kaltura_Client_Configuration $config
	 */
	public function __construct(Kaltura_Client_Configuration $config)
	{
		parent::__construct($config);
		
		$this->setClientTag('php5:19-11-09');
		$this->setApiVersion('15.10.0');
		
		$this->accessControlProfile = new Kaltura_Client_AccessControlProfileService($this);
		$this->accessControl = new Kaltura_Client_AccessControlService($this);
		$this->adminUser = new Kaltura_Client_AdminUserService($this);
		$this->analytics = new Kaltura_Client_AnalyticsService($this);
		$this->appToken = new Kaltura_Client_AppTokenService($this);
		$this->baseEntry = new Kaltura_Client_BaseEntryService($this);
		$this->bulkUpload = new Kaltura_Client_BulkUploadService($this);
		$this->categoryEntry = new Kaltura_Client_CategoryEntryService($this);
		$this->category = new Kaltura_Client_CategoryService($this);
		$this->categoryUser = new Kaltura_Client_CategoryUserService($this);
		$this->conversionProfileAssetParams = new Kaltura_Client_ConversionProfileAssetParamsService($this);
		$this->conversionProfile = new Kaltura_Client_ConversionProfileService($this);
		$this->data = new Kaltura_Client_DataService($this);
		$this->deliveryProfile = new Kaltura_Client_DeliveryProfileService($this);
		$this->EmailIngestionProfile = new Kaltura_Client_EmailIngestionProfileService($this);
		$this->entryServerNode = new Kaltura_Client_EntryServerNodeService($this);
		$this->exportcsv = new Kaltura_Client_ExportcsvService($this);
		$this->fileAsset = new Kaltura_Client_FileAssetService($this);
		$this->flavorAsset = new Kaltura_Client_FlavorAssetService($this);
		$this->flavorParamsOutput = new Kaltura_Client_FlavorParamsOutputService($this);
		$this->flavorParams = new Kaltura_Client_FlavorParamsService($this);
		$this->groupUser = new Kaltura_Client_GroupUserService($this);
		$this->liveChannelSegment = new Kaltura_Client_LiveChannelSegmentService($this);
		$this->liveChannel = new Kaltura_Client_LiveChannelService($this);
		$this->liveReports = new Kaltura_Client_LiveReportsService($this);
		$this->liveStats = new Kaltura_Client_LiveStatsService($this);
		$this->liveStream = new Kaltura_Client_LiveStreamService($this);
		$this->mediaInfo = new Kaltura_Client_MediaInfoService($this);
		$this->media = new Kaltura_Client_MediaService($this);
		$this->mixing = new Kaltura_Client_MixingService($this);
		$this->notification = new Kaltura_Client_NotificationService($this);
		$this->partner = new Kaltura_Client_PartnerService($this);
		$this->permissionItem = new Kaltura_Client_PermissionItemService($this);
		$this->permission = new Kaltura_Client_PermissionService($this);
		$this->playlist = new Kaltura_Client_PlaylistService($this);
		$this->report = new Kaltura_Client_ReportService($this);
		$this->responseProfile = new Kaltura_Client_ResponseProfileService($this);
		$this->schema = new Kaltura_Client_SchemaService($this);
		$this->search = new Kaltura_Client_SearchService($this);
		$this->serverNode = new Kaltura_Client_ServerNodeService($this);
		$this->session = new Kaltura_Client_SessionService($this);
		$this->stats = new Kaltura_Client_StatsService($this);
		$this->storageProfile = new Kaltura_Client_StorageProfileService($this);
		$this->syndicationFeed = new Kaltura_Client_SyndicationFeedService($this);
		$this->system = new Kaltura_Client_SystemService($this);
		$this->thumbAsset = new Kaltura_Client_ThumbAssetService($this);
		$this->thumbParamsOutput = new Kaltura_Client_ThumbParamsOutputService($this);
		$this->thumbParams = new Kaltura_Client_ThumbParamsService($this);
		$this->uiConf = new Kaltura_Client_UiConfService($this);
		$this->upload = new Kaltura_Client_UploadService($this);
		$this->uploadToken = new Kaltura_Client_UploadTokenService($this);
		$this->userEntry = new Kaltura_Client_UserEntryService($this);
		$this->userRole = new Kaltura_Client_UserRoleService($this);
		$this->user = new Kaltura_Client_UserService($this);
		$this->widget = new Kaltura_Client_WidgetService($this);
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
	 * Response profile - this attribute will be automatically unset after every API call.
	 * 
	 * @param Kaltura_Client_Type_BaseResponseProfile $responseProfile
	 */
	public function setResponseProfile(Kaltura_Client_Type_BaseResponseProfile $responseProfile)
	{
		$this->requestConfiguration['responseProfile'] = $responseProfile;
	}
	
	/**
	 * Response profile - this attribute will be automatically unset after every API call.
	 * 
	 * @return Kaltura_Client_Type_BaseResponseProfile
	 */
	public function getResponseProfile()
	{
		if(isset($this->requestConfiguration['responseProfile']))
		{
			return $this->requestConfiguration['responseProfile'];
		}
		
		return null;
	}
	
	/**
	 * Clear all volatile configuration parameters
	 */
	protected function resetRequest()
	{
		parent::resetRequest();
		unset($this->requestConfiguration['responseProfile']);
	}
}
