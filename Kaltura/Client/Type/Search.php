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
class Kaltura_Client_Type_Search extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaSearch';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->keyWords))
			$this->keyWords = (string)$xml->keyWords;
		if(!is_null($jsonObject) && isset($jsonObject->keyWords))
			$this->keyWords = (string)$jsonObject->keyWords;
		if(!is_null($xml) && count($xml->searchSource))
			$this->searchSource = (int)$xml->searchSource;
		if(!is_null($jsonObject) && isset($jsonObject->searchSource))
			$this->searchSource = (int)$jsonObject->searchSource;
		if(!is_null($xml) && count($xml->mediaType))
			$this->mediaType = (int)$xml->mediaType;
		if(!is_null($jsonObject) && isset($jsonObject->mediaType))
			$this->mediaType = (int)$jsonObject->mediaType;
		if(!is_null($xml) && count($xml->extraData))
			$this->extraData = (string)$xml->extraData;
		if(!is_null($jsonObject) && isset($jsonObject->extraData))
			$this->extraData = (string)$jsonObject->extraData;
		if(!is_null($xml) && count($xml->authData))
			$this->authData = (string)$xml->authData;
		if(!is_null($jsonObject) && isset($jsonObject->authData))
			$this->authData = (string)$jsonObject->authData;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $keyWords = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_SearchProviderType
	 */
	public $searchSource = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_MediaType
	 */
	public $mediaType = null;

	/**
	 * Use this field to pass dynamic data for searching
	 * 	 For example - if you set this field to "mymovies_$partner_id"
	 * 	 The $partner_id will be automatically replcaed with your real partner Id
	 *
	 * @var string
	 */
	public $extraData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $authData = null;


}

