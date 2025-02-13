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
class Kaltura_Client_Type_BulkUploadResultCategoryUser extends Kaltura_Client_Type_BulkUploadResult
{
	public function getKalturaObjectType()
	{
		return 'KalturaBulkUploadResultCategoryUser';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->categoryId))
			$this->categoryId = (int)$xml->categoryId;
		if(!is_null($jsonObject) && isset($jsonObject->categoryId))
			$this->categoryId = (int)$jsonObject->categoryId;
		if(!is_null($xml) && count($xml->categoryReferenceId))
			$this->categoryReferenceId = (string)$xml->categoryReferenceId;
		if(!is_null($jsonObject) && isset($jsonObject->categoryReferenceId))
			$this->categoryReferenceId = (string)$jsonObject->categoryReferenceId;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->permissionLevel))
			$this->permissionLevel = (int)$xml->permissionLevel;
		if(!is_null($jsonObject) && isset($jsonObject->permissionLevel))
			$this->permissionLevel = (int)$jsonObject->permissionLevel;
		if(!is_null($xml) && count($xml->updateMethod))
			$this->updateMethod = (int)$xml->updateMethod;
		if(!is_null($jsonObject) && isset($jsonObject->updateMethod))
			$this->updateMethod = (int)$jsonObject->updateMethod;
		if(!is_null($xml) && count($xml->requiredObjectStatus))
			$this->requiredObjectStatus = (int)$xml->requiredObjectStatus;
		if(!is_null($jsonObject) && isset($jsonObject->requiredObjectStatus))
			$this->requiredObjectStatus = (int)$jsonObject->requiredObjectStatus;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $categoryId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $categoryReferenceId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $permissionLevel = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $updateMethod = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $requiredObjectStatus = null;


}

