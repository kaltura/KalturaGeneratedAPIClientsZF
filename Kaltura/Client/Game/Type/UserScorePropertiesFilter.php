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
class Kaltura_Client_Game_Type_UserScorePropertiesFilter extends Kaltura_Client_Game_Type_UserScorePropertiesBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaUserScorePropertiesFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->gameObjectId))
			$this->gameObjectId = (string)$xml->gameObjectId;
		if(!is_null($jsonObject) && isset($jsonObject->gameObjectId))
			$this->gameObjectId = (string)$jsonObject->gameObjectId;
		if(!is_null($xml) && count($xml->gameObjectType))
			$this->gameObjectType = (string)$xml->gameObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->gameObjectType))
			$this->gameObjectType = (string)$jsonObject->gameObjectType;
		if(!is_null($xml) && count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->userIdEqual))
			$this->userIdEqual = (string)$jsonObject->userIdEqual;
		if(!is_null($xml) && count($xml->placesAboveUser))
			$this->placesAboveUser = (int)$xml->placesAboveUser;
		if(!is_null($jsonObject) && isset($jsonObject->placesAboveUser))
			$this->placesAboveUser = (int)$jsonObject->placesAboveUser;
		if(!is_null($xml) && count($xml->placesBelowUser))
			$this->placesBelowUser = (int)$xml->placesBelowUser;
		if(!is_null($jsonObject) && isset($jsonObject->placesBelowUser))
			$this->placesBelowUser = (int)$jsonObject->placesBelowUser;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $gameObjectId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Game_Enum_GameObjectType
	 */
	public $gameObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $placesAboveUser = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $placesBelowUser = null;


}

