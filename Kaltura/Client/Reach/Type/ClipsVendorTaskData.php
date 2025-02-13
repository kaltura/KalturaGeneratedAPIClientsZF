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
class Kaltura_Client_Reach_Type_ClipsVendorTaskData extends Kaltura_Client_Reach_Type_VendorTaskData
{
	public function getKalturaObjectType()
	{
		return 'KalturaClipsVendorTaskData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->clipsDuration))
			$this->clipsDuration = (int)$xml->clipsDuration;
		if(!is_null($jsonObject) && isset($jsonObject->clipsDuration))
			$this->clipsDuration = (int)$jsonObject->clipsDuration;
		if(!is_null($xml) && count($xml->eventSessionContextId))
			$this->eventSessionContextId = (string)$xml->eventSessionContextId;
		if(!is_null($jsonObject) && isset($jsonObject->eventSessionContextId))
			$this->eventSessionContextId = (string)$jsonObject->eventSessionContextId;
		if(!is_null($xml) && count($xml->instruction))
			$this->instruction = (string)$xml->instruction;
		if(!is_null($jsonObject) && isset($jsonObject->instruction))
			$this->instruction = (string)$jsonObject->instruction;
		if(!is_null($xml) && count($xml->clipsOutputJson))
			$this->clipsOutputJson = (string)$xml->clipsOutputJson;
		if(!is_null($jsonObject) && isset($jsonObject->clipsOutputJson))
			$this->clipsOutputJson = (string)$jsonObject->clipsOutputJson;
	}
	/**
	 * Estimated duration of the clips, in seconds.
	 *
	 * @var int
	 * @insertonly
	 */
	public $clipsDuration = null;

	/**
	 * Event session context ID used to enhance clip results.
	 *
	 * @var string
	 * @insertonly
	 */
	public $eventSessionContextId = null;

	/**
	 * Instruction describing the moments to capture or the objectives to achieve with the clips.
	 *
	 * @var string
	 * @insertonly
	 */
	public $instruction = null;

	/**
	 * List of clips as JSON string.
	 * 	 For example: [{"title": "Title of the first clip", "description": "Description of the first clip", "tags": "Tagged-Example", "start": 127, "duration": 30}]
	 *
	 * @var string
	 */
	public $clipsOutputJson = null;


}

