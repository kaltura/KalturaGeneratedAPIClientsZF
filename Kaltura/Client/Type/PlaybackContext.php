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
// Copyright (C) 2006-2021  Kaltura Inc.
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
class Kaltura_Client_Type_PlaybackContext extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaPlaybackContext';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->sources))
		{
			if(empty($xml->sources))
				$this->sources = array();
			else
				$this->sources = Kaltura_Client_ParseUtils::unmarshalArray($xml->sources, "KalturaPlaybackSource");
		}
		if(count($xml->playbackCaptions))
		{
			if(empty($xml->playbackCaptions))
				$this->playbackCaptions = array();
			else
				$this->playbackCaptions = Kaltura_Client_ParseUtils::unmarshalArray($xml->playbackCaptions, "KalturaCaptionPlaybackPluginData");
		}
		if(count($xml->flavorAssets))
		{
			if(empty($xml->flavorAssets))
				$this->flavorAssets = array();
			else
				$this->flavorAssets = Kaltura_Client_ParseUtils::unmarshalArray($xml->flavorAssets, "KalturaFlavorAsset");
		}
		if(count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::unmarshalArray($xml->actions, "KalturaRuleAction");
		}
		if(count($xml->messages))
		{
			if(empty($xml->messages))
				$this->messages = array();
			else
				$this->messages = Kaltura_Client_ParseUtils::unmarshalArray($xml->messages, "KalturaAccessControlMessage");
		}
		if(count($xml->bumperData))
		{
			if(empty($xml->bumperData))
				$this->bumperData = array();
			else
				$this->bumperData = Kaltura_Client_ParseUtils::unmarshalArray($xml->bumperData, "KalturaObject");
		}
	}
	/**
	 * 
	 *
	 * @var array of KalturaPlaybackSource
	 */
	public $sources;

	/**
	 * 
	 *
	 * @var array of KalturaCaptionPlaybackPluginData
	 */
	public $playbackCaptions;

	/**
	 * 
	 *
	 * @var array of KalturaFlavorAsset
	 */
	public $flavorAssets;

	/**
	 * Array of actions as received from the rules that invalidated
	 *
	 * @var array of KalturaRuleAction
	 */
	public $actions;

	/**
	 * Array of actions as received from the rules that invalidated
	 *
	 * @var array of KalturaAccessControlMessage
	 */
	public $messages;

	/**
	 * 
	 *
	 * @var array of KalturaObject
	 */
	public $bumperData;


}

