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
class Kaltura_Client_DropFolder_Type_DropFolderContentProcessorJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaDropFolderContentProcessorJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->dropFolderId))
			$this->dropFolderId = (int)$xml->dropFolderId;
		if(!is_null($jsonObject) && isset($jsonObject->dropFolderId))
			$this->dropFolderId = (int)$jsonObject->dropFolderId;
		if(!is_null($xml) && count($xml->dropFolderFileIds))
			$this->dropFolderFileIds = (string)$xml->dropFolderFileIds;
		if(!is_null($jsonObject) && isset($jsonObject->dropFolderFileIds))
			$this->dropFolderFileIds = (string)$jsonObject->dropFolderFileIds;
		if(!is_null($xml) && count($xml->parsedSlug))
			$this->parsedSlug = (string)$xml->parsedSlug;
		if(!is_null($jsonObject) && isset($jsonObject->parsedSlug))
			$this->parsedSlug = (string)$jsonObject->parsedSlug;
		if(!is_null($xml) && count($xml->contentMatchPolicy))
			$this->contentMatchPolicy = (int)$xml->contentMatchPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->contentMatchPolicy))
			$this->contentMatchPolicy = (int)$jsonObject->contentMatchPolicy;
		if(!is_null($xml) && count($xml->conversionProfileId))
			$this->conversionProfileId = (int)$xml->conversionProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->conversionProfileId))
			$this->conversionProfileId = (int)$jsonObject->conversionProfileId;
		if(!is_null($xml) && count($xml->parsedUserId))
			$this->parsedUserId = (string)$xml->parsedUserId;
		if(!is_null($jsonObject) && isset($jsonObject->parsedUserId))
			$this->parsedUserId = (string)$jsonObject->parsedUserId;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $dropFolderId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $dropFolderFileIds = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedSlug = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_DropFolder_Enum_DropFolderContentFileHandlerMatchPolicy
	 */
	public $contentMatchPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $conversionProfileId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $parsedUserId = null;


}

