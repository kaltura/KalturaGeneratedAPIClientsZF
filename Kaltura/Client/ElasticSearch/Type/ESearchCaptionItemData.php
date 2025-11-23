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
class Kaltura_Client_ElasticSearch_Type_ESearchCaptionItemData extends Kaltura_Client_ElasticSearch_Type_ESearchItemData
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchCaptionItemData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->line))
			$this->line = (string)$xml->line;
		if(!is_null($jsonObject) && isset($jsonObject->line))
			$this->line = (string)$jsonObject->line;
		if(!is_null($xml) && count($xml->startsAt))
			$this->startsAt = (int)$xml->startsAt;
		if(!is_null($jsonObject) && isset($jsonObject->startsAt))
			$this->startsAt = (int)$jsonObject->startsAt;
		if(!is_null($xml) && count($xml->endsAt))
			$this->endsAt = (int)$xml->endsAt;
		if(!is_null($jsonObject) && isset($jsonObject->endsAt))
			$this->endsAt = (int)$jsonObject->endsAt;
		if(!is_null($xml) && count($xml->language))
			$this->language = (string)$xml->language;
		if(!is_null($jsonObject) && isset($jsonObject->language))
			$this->language = (string)$jsonObject->language;
		if(!is_null($xml) && count($xml->captionAssetId))
			$this->captionAssetId = (string)$xml->captionAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->captionAssetId))
			$this->captionAssetId = (string)$jsonObject->captionAssetId;
		if(!is_null($xml) && count($xml->label))
			$this->label = (string)$xml->label;
		if(!is_null($jsonObject) && isset($jsonObject->label))
			$this->label = (string)$jsonObject->label;
		if(!is_null($xml) && count($xml->accuracy))
			$this->accuracy = (int)$xml->accuracy;
		if(!is_null($jsonObject) && isset($jsonObject->accuracy))
			$this->accuracy = (int)$jsonObject->accuracy;
		if(!is_null($xml) && count($xml->usage))
			$this->usage = (int)$xml->usage;
		if(!is_null($jsonObject) && isset($jsonObject->usage))
			$this->usage = (int)$jsonObject->usage;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $line = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $startsAt = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $endsAt = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $language = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $label = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $accuracy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $usage = null;


}

