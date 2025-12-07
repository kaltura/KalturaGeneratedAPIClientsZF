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
class Kaltura_Client_Annotation_Type_Annotation extends Kaltura_Client_CuePoint_Type_CuePoint
{
	public function getKalturaObjectType()
	{
		return 'KalturaAnnotation';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->parentId))
			$this->parentId = (string)$xml->parentId;
		if(!is_null($jsonObject) && isset($jsonObject->parentId))
			$this->parentId = (string)$jsonObject->parentId;
		if(!is_null($xml) && count($xml->text))
			$this->text = (string)$xml->text;
		if(!is_null($jsonObject) && isset($jsonObject->text))
			$this->text = (string)$jsonObject->text;
		if(!is_null($xml) && count($xml->endTime))
			$this->endTime = (int)$xml->endTime;
		if(!is_null($jsonObject) && isset($jsonObject->endTime))
			$this->endTime = (int)$jsonObject->endTime;
		if(!is_null($xml) && count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(!is_null($jsonObject) && isset($jsonObject->duration))
			$this->duration = (int)$jsonObject->duration;
		if(!is_null($xml) && count($xml->depth))
			$this->depth = (int)$xml->depth;
		if(!is_null($jsonObject) && isset($jsonObject->depth))
			$this->depth = (int)$jsonObject->depth;
		if(!is_null($xml) && count($xml->childrenCount))
			$this->childrenCount = (int)$xml->childrenCount;
		if(!is_null($jsonObject) && isset($jsonObject->childrenCount))
			$this->childrenCount = (int)$jsonObject->childrenCount;
		if(!is_null($xml) && count($xml->directChildrenCount))
			$this->directChildrenCount = (int)$xml->directChildrenCount;
		if(!is_null($jsonObject) && isset($jsonObject->directChildrenCount))
			$this->directChildrenCount = (int)$jsonObject->directChildrenCount;
		if(!is_null($xml) && count($xml->isPublic))
			$this->isPublic = (int)$xml->isPublic;
		if(!is_null($jsonObject) && isset($jsonObject->isPublic))
			$this->isPublic = (int)$jsonObject->isPublic;
		if(!is_null($xml) && count($xml->searchableOnEntry))
			$this->searchableOnEntry = (int)$xml->searchableOnEntry;
		if(!is_null($jsonObject) && isset($jsonObject->searchableOnEntry))
			$this->searchableOnEntry = (int)$jsonObject->searchableOnEntry;
		if(!is_null($xml) && count($xml->originalCuePointCreateAt))
			$this->originalCuePointCreateAt = (int)$xml->originalCuePointCreateAt;
		if(!is_null($jsonObject) && isset($jsonObject->originalCuePointCreateAt))
			$this->originalCuePointCreateAt = (int)$jsonObject->originalCuePointCreateAt;
	}
	/**
	 * 
	 *
	 * @var string
	 * @insertonly
	 */
	public $parentId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $text = null;

	/**
	 * End time in milliseconds
	 *
	 * @var int
	 */
	public $endTime = null;

	/**
	 * Duration in milliseconds
	 *
	 * @var int
	 * @readonly
	 */
	public $duration = null;

	/**
	 * Depth in the tree
	 *
	 * @var int
	 * @readonly
	 */
	public $depth = null;

	/**
	 * Number of all descendants
	 *
	 * @var int
	 * @readonly
	 */
	public $childrenCount = null;

	/**
	 * Number of children, first generation only.
	 *
	 * @var int
	 * @readonly
	 */
	public $directChildrenCount = null;

	/**
	 * Is the annotation public.
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $isPublic = null;

	/**
	 * Should the cue point get indexed on the entry.
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $searchableOnEntry = null;

	/**
	 * In case of cloned annotation it will hold source cuepoint createdAt.
	 *
	 * @var int
	 */
	public $originalCuePointCreateAt = null;


}

