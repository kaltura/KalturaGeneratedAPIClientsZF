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
class Kaltura_Client_Type_Bookmark extends Kaltura_Client_Type_SlimAsset
{
	public function getKalturaObjectType()
	{
		return 'KalturaBookmark';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(count($xml->position))
			$this->position = (int)$xml->position;
		if(count($xml->positionOwner))
			$this->positionOwner = (string)$xml->positionOwner;
		if(count($xml->finishedWatching))
		{
			if(!empty($xml->finishedWatching))
				$this->finishedWatching = true;
			else
				$this->finishedWatching = false;
		}
		if(count($xml->playerData) && !empty($xml->playerData))
			$this->playerData = Kaltura_Client_ParseUtils::unmarshalObject($xml->playerData, "KalturaBookmarkPlayerData");
	}
	/**
	 * User identifier
	 *
	 * @var string
	 * @readonly
	 */
	public $userId = null;

	/**
	 * The position of the user in the specific asset (in seconds)
	 *
	 * @var int
	 * @insertonly
	 */
	public $position = null;

	/**
	 * Indicates who is the owner of this position
	 *
	 * @var Kaltura_Client_Enum_PositionOwner
	 */
	public $positionOwner = null;

	/**
	 * Specifies whether the user&#39;s current position exceeded 95% of the duration
	 *
	 * @var bool
	 */
	public $finishedWatching = null;

	/**
	 * Insert only player data
	 *
	 * @var Kaltura_Client_Type_BookmarkPlayerData
	 */
	public $playerData;


}

