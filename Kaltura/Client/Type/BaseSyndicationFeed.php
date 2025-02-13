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
abstract class Kaltura_Client_Type_BaseSyndicationFeed extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBaseSyndicationFeed';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(!is_null($jsonObject) && isset($jsonObject->feedUrl))
			$this->feedUrl = (string)$jsonObject->feedUrl;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->playlistId))
			$this->playlistId = (string)$xml->playlistId;
		if(!is_null($jsonObject) && isset($jsonObject->playlistId))
			$this->playlistId = (string)$jsonObject->playlistId;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->type))
			$this->type = (int)$xml->type;
		if(!is_null($jsonObject) && isset($jsonObject->type))
			$this->type = (int)$jsonObject->type;
		if(!is_null($xml) && count($xml->landingPage))
			$this->landingPage = (string)$xml->landingPage;
		if(!is_null($jsonObject) && isset($jsonObject->landingPage))
			$this->landingPage = (string)$jsonObject->landingPage;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->allowEmbed))
		{
			if(!empty($xml->allowEmbed) && ((int) $xml->allowEmbed === 1 || strtolower((string)$xml->allowEmbed) === 'true'))
				$this->allowEmbed = true;
			else
				$this->allowEmbed = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->allowEmbed))
		{
			if(!empty($jsonObject->allowEmbed) && ((int) $jsonObject->allowEmbed === 1 || strtolower((string)$jsonObject->allowEmbed) === 'true'))
				$this->allowEmbed = true;
			else
				$this->allowEmbed = false;
		}
		if(!is_null($xml) && count($xml->playerUiconfId))
			$this->playerUiconfId = (int)$xml->playerUiconfId;
		if(!is_null($jsonObject) && isset($jsonObject->playerUiconfId))
			$this->playerUiconfId = (int)$jsonObject->playerUiconfId;
		if(!is_null($xml) && count($xml->flavorParamId))
			$this->flavorParamId = (int)$xml->flavorParamId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorParamId))
			$this->flavorParamId = (int)$jsonObject->flavorParamId;
		if(!is_null($xml) && count($xml->transcodeExistingContent))
		{
			if(!empty($xml->transcodeExistingContent) && ((int) $xml->transcodeExistingContent === 1 || strtolower((string)$xml->transcodeExistingContent) === 'true'))
				$this->transcodeExistingContent = true;
			else
				$this->transcodeExistingContent = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->transcodeExistingContent))
		{
			if(!empty($jsonObject->transcodeExistingContent) && ((int) $jsonObject->transcodeExistingContent === 1 || strtolower((string)$jsonObject->transcodeExistingContent) === 'true'))
				$this->transcodeExistingContent = true;
			else
				$this->transcodeExistingContent = false;
		}
		if(!is_null($xml) && count($xml->addToDefaultConversionProfile))
		{
			if(!empty($xml->addToDefaultConversionProfile) && ((int) $xml->addToDefaultConversionProfile === 1 || strtolower((string)$xml->addToDefaultConversionProfile) === 'true'))
				$this->addToDefaultConversionProfile = true;
			else
				$this->addToDefaultConversionProfile = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->addToDefaultConversionProfile))
		{
			if(!empty($jsonObject->addToDefaultConversionProfile) && ((int) $jsonObject->addToDefaultConversionProfile === 1 || strtolower((string)$jsonObject->addToDefaultConversionProfile) === 'true'))
				$this->addToDefaultConversionProfile = true;
			else
				$this->addToDefaultConversionProfile = false;
		}
		if(!is_null($xml) && count($xml->categories))
			$this->categories = (string)$xml->categories;
		if(!is_null($jsonObject) && isset($jsonObject->categories))
			$this->categories = (string)$jsonObject->categories;
		if(!is_null($xml) && count($xml->storageId))
			$this->storageId = (int)$xml->storageId;
		if(!is_null($jsonObject) && isset($jsonObject->storageId))
			$this->storageId = (int)$jsonObject->storageId;
		if(!is_null($xml) && count($xml->entriesOrderBy))
			$this->entriesOrderBy = (string)$xml->entriesOrderBy;
		if(!is_null($jsonObject) && isset($jsonObject->entriesOrderBy))
			$this->entriesOrderBy = (string)$jsonObject->entriesOrderBy;
		if(!is_null($xml) && count($xml->enforceEntitlement))
		{
			if(!empty($xml->enforceEntitlement) && ((int) $xml->enforceEntitlement === 1 || strtolower((string)$xml->enforceEntitlement) === 'true'))
				$this->enforceEntitlement = true;
			else
				$this->enforceEntitlement = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->enforceEntitlement))
		{
			if(!empty($jsonObject->enforceEntitlement) && ((int) $jsonObject->enforceEntitlement === 1 || strtolower((string)$jsonObject->enforceEntitlement) === 'true'))
				$this->enforceEntitlement = true;
			else
				$this->enforceEntitlement = false;
		}
		if(!is_null($xml) && count($xml->privacyContext))
			$this->privacyContext = (string)$xml->privacyContext;
		if(!is_null($jsonObject) && isset($jsonObject->privacyContext))
			$this->privacyContext = (string)$jsonObject->privacyContext;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->useCategoryEntries))
		{
			if(!empty($xml->useCategoryEntries) && ((int) $xml->useCategoryEntries === 1 || strtolower((string)$xml->useCategoryEntries) === 'true'))
				$this->useCategoryEntries = true;
			else
				$this->useCategoryEntries = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useCategoryEntries))
		{
			if(!empty($jsonObject->useCategoryEntries) && ((int) $jsonObject->useCategoryEntries === 1 || strtolower((string)$jsonObject->useCategoryEntries) === 'true'))
				$this->useCategoryEntries = true;
			else
				$this->useCategoryEntries = false;
		}
		if(!is_null($xml) && count($xml->feedContentTypeHeader))
			$this->feedContentTypeHeader = (string)$xml->feedContentTypeHeader;
		if(!is_null($jsonObject) && isset($jsonObject->feedContentTypeHeader))
			$this->feedContentTypeHeader = (string)$jsonObject->feedContentTypeHeader;
	}
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * link a playlist that will set what content the feed will include
	 * 	 if empty, all content will be included in feed
	 *
	 * @var string
	 */
	public $playlistId = null;

	/**
	 * feed name
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * feed status
	 *
	 * @var Kaltura_Client_Enum_SyndicationFeedStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * feed type
	 *
	 * @var Kaltura_Client_Enum_SyndicationFeedType
	 * @insertonly
	 */
	public $type = null;

	/**
	 * Base URL for each video, on the partners site
	 * 	 This is required by all syndication types.
	 *
	 * @var string
	 */
	public $landingPage = null;

	/**
	 * Creation date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * allow_embed tells google OR yahoo weather to allow embedding the video on google OR yahoo video results
	 * 	 or just to provide a link to the landing page.
	 * 	 it is applied on the video-player_loc property in the XML (google)
	 * 	 and addes media-player tag (yahoo)
	 *
	 * @var bool
	 */
	public $allowEmbed = null;

	/**
	 * Select a uiconf ID as player skin to include in the kwidget url
	 *
	 * @var int
	 */
	public $playerUiconfId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flavorParamId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $transcodeExistingContent = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $addToDefaultConversionProfile = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categories = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $storageId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_SyndicationFeedEntriesOrderBy
	 */
	public $entriesOrderBy = null;

	/**
	 * Should enforce entitlement on feed entries
	 *
	 * @var bool
	 */
	public $enforceEntitlement = null;

	/**
	 * Set privacy context for search entries that assiged to private and public categories within a category privacy context.
	 *
	 * @var string
	 */
	public $privacyContext = null;

	/**
	 * Update date as Unix timestamp (In seconds)
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $useCategoryEntries = null;

	/**
	 * Feed content-type header value
	 *
	 * @var string
	 */
	public $feedContentTypeHeader = null;


}

