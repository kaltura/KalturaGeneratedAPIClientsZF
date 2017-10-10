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
class Kaltura_Client_ElasticSearch_Type_ESearchCuePointItemData extends Kaltura_Client_ElasticSearch_Type_ESearchItemData
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchCuePointItemData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->cuePointType))
			$this->cuePointType = (string)$xml->cuePointType;
		if(count($xml->id))
			$this->id = (string)$xml->id;
		if(count($xml->name))
			$this->name = (string)$xml->name;
		if(count($xml->text))
			$this->text = (string)$xml->text;
		if(count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(count($xml->startTime))
			$this->startTime = (string)$xml->startTime;
		if(count($xml->endTime))
			$this->endTime = (string)$xml->endTime;
		if(count($xml->subType))
			$this->subType = (string)$xml->subType;
		if(count($xml->answers))
			$this->answers = (string)$xml->answers;
		if(count($xml->hint))
			$this->hint = (string)$xml->hint;
		if(count($xml->explanation))
			$this->explanation = (string)$xml->explanation;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $cuePointType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $name = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $text = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $startTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $endTime = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $answers = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hint = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $explanation = null;


}
