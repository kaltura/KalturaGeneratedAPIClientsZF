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
class Kaltura_Client_FeedDropFolder_Type_FeedItemInfo extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaFeedItemInfo';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->itemXPath))
			$this->itemXPath = (string)$xml->itemXPath;
		if(count($xml->itemPublishDateXPath))
			$this->itemPublishDateXPath = (string)$xml->itemPublishDateXPath;
		if(count($xml->itemUniqueIdentifierXPath))
			$this->itemUniqueIdentifierXPath = (string)$xml->itemUniqueIdentifierXPath;
		if(count($xml->itemContentFileSizeXPath))
			$this->itemContentFileSizeXPath = (string)$xml->itemContentFileSizeXPath;
		if(count($xml->itemContentUrlXPath))
			$this->itemContentUrlXPath = (string)$xml->itemContentUrlXPath;
		if(count($xml->itemContentBitrateXPath))
			$this->itemContentBitrateXPath = (string)$xml->itemContentBitrateXPath;
		if(count($xml->itemHashXPath))
			$this->itemHashXPath = (string)$xml->itemHashXPath;
		if(count($xml->itemContentXpath))
			$this->itemContentXpath = (string)$xml->itemContentXpath;
		if(count($xml->contentBitrateAttributeName))
			$this->contentBitrateAttributeName = (string)$xml->contentBitrateAttributeName;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $itemXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemPublishDateXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemUniqueIdentifierXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentFileSizeXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentUrlXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentBitrateXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemHashXPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $itemContentXpath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentBitrateAttributeName = null;


}

