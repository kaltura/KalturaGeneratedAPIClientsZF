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
class Kaltura_Client_ElasticSearch_Type_ESearchCuePointItemData extends Kaltura_Client_ElasticSearch_Type_ESearchItemData
{
	public function getKalturaObjectType()
	{
		return 'KalturaESearchCuePointItemData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->cuePointType))
			$this->cuePointType = (string)$xml->cuePointType;
		if(!is_null($jsonObject) && isset($jsonObject->cuePointType))
			$this->cuePointType = (string)$jsonObject->cuePointType;
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->text))
			$this->text = (string)$xml->text;
		if(!is_null($jsonObject) && isset($jsonObject->text))
			$this->text = (string)$jsonObject->text;
		if(!is_null($xml) && count($xml->tags))
		{
			if(empty($xml->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::unmarshalArray($xml->tags, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->tags))
		{
			if(empty($jsonObject->tags))
				$this->tags = array();
			else
				$this->tags = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->tags, "KalturaString");
		}
		if(!is_null($xml) && count($xml->startTime))
			$this->startTime = (string)$xml->startTime;
		if(!is_null($jsonObject) && isset($jsonObject->startTime))
			$this->startTime = (string)$jsonObject->startTime;
		if(!is_null($xml) && count($xml->endTime))
			$this->endTime = (string)$xml->endTime;
		if(!is_null($jsonObject) && isset($jsonObject->endTime))
			$this->endTime = (string)$jsonObject->endTime;
		if(!is_null($xml) && count($xml->subType))
			$this->subType = (string)$xml->subType;
		if(!is_null($jsonObject) && isset($jsonObject->subType))
			$this->subType = (string)$jsonObject->subType;
		if(!is_null($xml) && count($xml->question))
			$this->question = (string)$xml->question;
		if(!is_null($jsonObject) && isset($jsonObject->question))
			$this->question = (string)$jsonObject->question;
		if(!is_null($xml) && count($xml->answers))
		{
			if(empty($xml->answers))
				$this->answers = array();
			else
				$this->answers = Kaltura_Client_ParseUtils::unmarshalArray($xml->answers, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->answers))
		{
			if(empty($jsonObject->answers))
				$this->answers = array();
			else
				$this->answers = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->answers, "KalturaString");
		}
		if(!is_null($xml) && count($xml->hint))
			$this->hint = (string)$xml->hint;
		if(!is_null($jsonObject) && isset($jsonObject->hint))
			$this->hint = (string)$jsonObject->hint;
		if(!is_null($xml) && count($xml->explanation))
			$this->explanation = (string)$xml->explanation;
		if(!is_null($jsonObject) && isset($jsonObject->explanation))
			$this->explanation = (string)$jsonObject->explanation;
		if(!is_null($xml) && count($xml->assetId))
			$this->assetId = (string)$xml->assetId;
		if(!is_null($jsonObject) && isset($jsonObject->assetId))
			$this->assetId = (string)$jsonObject->assetId;
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
	 * @var Kaltura_Client_Type_String[]
	 */
	public $tags;

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
	public $question = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $answers;

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

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetId = null;


}

