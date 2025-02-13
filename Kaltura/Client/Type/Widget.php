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
class Kaltura_Client_Type_Widget extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaWidget';
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
		if(!is_null($xml) && count($xml->sourceWidgetId))
			$this->sourceWidgetId = (string)$xml->sourceWidgetId;
		if(!is_null($jsonObject) && isset($jsonObject->sourceWidgetId))
			$this->sourceWidgetId = (string)$jsonObject->sourceWidgetId;
		if(!is_null($xml) && count($xml->rootWidgetId))
			$this->rootWidgetId = (string)$xml->rootWidgetId;
		if(!is_null($jsonObject) && isset($jsonObject->rootWidgetId))
			$this->rootWidgetId = (string)$jsonObject->rootWidgetId;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->uiConfId))
			$this->uiConfId = (int)$xml->uiConfId;
		if(!is_null($jsonObject) && isset($jsonObject->uiConfId))
			$this->uiConfId = (int)$jsonObject->uiConfId;
		if(!is_null($xml) && count($xml->securityType))
			$this->securityType = (int)$xml->securityType;
		if(!is_null($jsonObject) && isset($jsonObject->securityType))
			$this->securityType = (int)$jsonObject->securityType;
		if(!is_null($xml) && count($xml->securityPolicy))
			$this->securityPolicy = (int)$xml->securityPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->securityPolicy))
			$this->securityPolicy = (int)$jsonObject->securityPolicy;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->updatedAt))
			$this->updatedAt = (int)$xml->updatedAt;
		if(!is_null($jsonObject) && isset($jsonObject->updatedAt))
			$this->updatedAt = (int)$jsonObject->updatedAt;
		if(!is_null($xml) && count($xml->partnerData))
			$this->partnerData = (string)$xml->partnerData;
		if(!is_null($jsonObject) && isset($jsonObject->partnerData))
			$this->partnerData = (string)$jsonObject->partnerData;
		if(!is_null($xml) && count($xml->widgetHTML))
			$this->widgetHTML = (string)$xml->widgetHTML;
		if(!is_null($jsonObject) && isset($jsonObject->widgetHTML))
			$this->widgetHTML = (string)$jsonObject->widgetHTML;
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
		if(!is_null($xml) && count($xml->addEmbedHtml5Support))
		{
			if(!empty($xml->addEmbedHtml5Support) && ((int) $xml->addEmbedHtml5Support === 1 || strtolower((string)$xml->addEmbedHtml5Support) === 'true'))
				$this->addEmbedHtml5Support = true;
			else
				$this->addEmbedHtml5Support = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->addEmbedHtml5Support))
		{
			if(!empty($jsonObject->addEmbedHtml5Support) && ((int) $jsonObject->addEmbedHtml5Support === 1 || strtolower((string)$jsonObject->addEmbedHtml5Support) === 'true'))
				$this->addEmbedHtml5Support = true;
			else
				$this->addEmbedHtml5Support = false;
		}
		if(!is_null($xml) && count($xml->roles))
			$this->roles = (string)$xml->roles;
		if(!is_null($jsonObject) && isset($jsonObject->roles))
			$this->roles = (string)$jsonObject->roles;
		if(!is_null($xml) && count($xml->privileges))
			$this->privileges = (string)$xml->privileges;
		if(!is_null($jsonObject) && isset($jsonObject->privileges))
			$this->privileges = (string)$jsonObject->privileges;
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
	 */
	public $sourceWidgetId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $rootWidgetId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $uiConfId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_WidgetSecurityType
	 */
	public $securityType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $securityPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $updatedAt = null;

	/**
	 * Can be used to store various partner related data as a string
	 *
	 * @var string
	 */
	public $partnerData = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $widgetHTML = null;

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
	 * Addes the HTML5 script line to the widget's embed code
	 *
	 * @var bool
	 */
	public $addEmbedHtml5Support = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $roles = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $privileges = null;


}

