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
class Kaltura_Client_Type_BulkUploadResultCategory extends Kaltura_Client_Type_BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultCategory';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->relativePath))
			$this->relativePath = (string)$xml->relativePath;
		if(!is_null($jsonObject) && isset($jsonObject->relativePath))
			$this->relativePath = (string)$jsonObject->relativePath;
		if(!is_null($xml) && count($xml->name))
			$this->name = (string)$xml->name;
		if(!is_null($jsonObject) && isset($jsonObject->name))
			$this->name = (string)$jsonObject->name;
		if(!is_null($xml) && count($xml->referenceId))
			$this->referenceId = (string)$xml->referenceId;
		if(!is_null($jsonObject) && isset($jsonObject->referenceId))
			$this->referenceId = (string)$jsonObject->referenceId;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->tags))
			$this->tags = (string)$xml->tags;
		if(!is_null($jsonObject) && isset($jsonObject->tags))
			$this->tags = (string)$jsonObject->tags;
		if(!is_null($xml) && count($xml->appearInList))
			$this->appearInList = (int)$xml->appearInList;
		if(!is_null($jsonObject) && isset($jsonObject->appearInList))
			$this->appearInList = (int)$jsonObject->appearInList;
		if(!is_null($xml) && count($xml->privacy))
			$this->privacy = (int)$xml->privacy;
		if(!is_null($jsonObject) && isset($jsonObject->privacy))
			$this->privacy = (int)$jsonObject->privacy;
		if(!is_null($xml) && count($xml->inheritanceType))
			$this->inheritanceType = (int)$xml->inheritanceType;
		if(!is_null($jsonObject) && isset($jsonObject->inheritanceType))
			$this->inheritanceType = (int)$jsonObject->inheritanceType;
		if(!is_null($xml) && count($xml->userJoinPolicy))
			$this->userJoinPolicy = (int)$xml->userJoinPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->userJoinPolicy))
			$this->userJoinPolicy = (int)$jsonObject->userJoinPolicy;
		if(!is_null($xml) && count($xml->defaultPermissionLevel))
			$this->defaultPermissionLevel = (int)$xml->defaultPermissionLevel;
		if(!is_null($jsonObject) && isset($jsonObject->defaultPermissionLevel))
			$this->defaultPermissionLevel = (int)$jsonObject->defaultPermissionLevel;
		if(!is_null($xml) && count($xml->owner))
			$this->owner = (string)$xml->owner;
		if(!is_null($jsonObject) && isset($jsonObject->owner))
			$this->owner = (string)$jsonObject->owner;
		if(!is_null($xml) && count($xml->contributionPolicy))
			$this->contributionPolicy = (int)$xml->contributionPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->contributionPolicy))
			$this->contributionPolicy = (int)$jsonObject->contributionPolicy;
		if(!is_null($xml) && count($xml->partnerSortValue))
			$this->partnerSortValue = (int)$xml->partnerSortValue;
		if(!is_null($jsonObject) && isset($jsonObject->partnerSortValue))
			$this->partnerSortValue = (int)$jsonObject->partnerSortValue;
		if(!is_null($xml) && count($xml->moderation))
		{
			if(!empty($xml->moderation) && ((int) $xml->moderation === 1 || strtolower((string)$xml->moderation) === 'true'))
				$this->moderation = true;
			else
				$this->moderation = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->moderation))
		{
			if(!empty($jsonObject->moderation) && ((int) $jsonObject->moderation === 1 || strtolower((string)$jsonObject->moderation) === 'true'))
				$this->moderation = true;
			else
				$this->moderation = false;
		}
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $relativePath = null;

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
	public $referenceId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $tags = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $appearInList = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $privacy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $inheritanceType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $userJoinPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $defaultPermissionLevel = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $owner = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $contributionPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerSortValue = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $moderation = null;


}

