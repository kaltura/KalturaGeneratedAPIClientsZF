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
// Copyright (C) 2006-2022  Kaltura Inc.
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
class Kaltura_Client_ScheduledTask_Type_ModifyEntryObjectTask extends Kaltura_Client_ScheduledTask_Type_ObjectTask
{
	public function getKalturaObjectType()
	{
		return 'KalturaModifyEntryObjectTask';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->inputMetadataProfileId))
			$this->inputMetadataProfileId = (int)$xml->inputMetadataProfileId;
		if(count($xml->inputMetadata))
		{
			if(empty($xml->inputMetadata))
				$this->inputMetadata = array();
			else
				$this->inputMetadata = Kaltura_Client_ParseUtils::unmarshalArray($xml->inputMetadata, "KalturaKeyValue");
		}
		if(count($xml->outputMetadataProfileId))
			$this->outputMetadataProfileId = (int)$xml->outputMetadataProfileId;
		if(count($xml->outputMetadata))
		{
			if(empty($xml->outputMetadata))
				$this->outputMetadata = array();
			else
				$this->outputMetadata = Kaltura_Client_ParseUtils::unmarshalArray($xml->outputMetadata, "KalturaKeyValue");
		}
		if(count($xml->inputUserId))
			$this->inputUserId = (string)$xml->inputUserId;
		if(count($xml->inputEntitledUsersEdit))
			$this->inputEntitledUsersEdit = (string)$xml->inputEntitledUsersEdit;
		if(count($xml->inputEntitledUsersPublish))
			$this->inputEntitledUsersPublish = (string)$xml->inputEntitledUsersPublish;
		if(count($xml->inputEntitledUsersView))
			$this->inputEntitledUsersView = (string)$xml->inputEntitledUsersView;
		if(count($xml->resetMediaRepurposingProcess))
		{
			if(!empty($xml->resetMediaRepurposingProcess) && ((int) $xml->resetMediaRepurposingProcess === 1 || strtolower((string)$xml->resetMediaRepurposingProcess) === 'true'))
				$this->resetMediaRepurposingProcess = true;
			else
				$this->resetMediaRepurposingProcess = false;
		}
	}
	/**
	 * The input metadata profile id
	 *
	 * @var int
	 */
	public $inputMetadataProfileId = null;

	/**
	 * array of {input metadata xpath location,entry field} objects
	 *
	 * @var array of KalturaKeyValue
	 */
	public $inputMetadata;

	/**
	 * The output metadata profile id
	 *
	 * @var int
	 */
	public $outputMetadataProfileId = null;

	/**
	 * array of {output metadata xpath location,entry field} objects
	 *
	 * @var array of KalturaKeyValue
	 */
	public $outputMetadata;

	/**
	 * The input user id to set on the entry
	 *
	 * @var string
	 */
	public $inputUserId = null;

	/**
	 * The input entitled users edit to set on the entry
	 *
	 * @var string
	 */
	public $inputEntitledUsersEdit = null;

	/**
	 * The input entitled users publish to set on the entry
	 *
	 * @var string
	 */
	public $inputEntitledUsersPublish = null;

	/**
	 * The input entitled users view to set on the entry
	 *
	 * @var string
	 */
	public $inputEntitledUsersView = null;

	/**
	 * Should clear the media repurposing data and therefore reset the process
	 *
	 * @var bool
	 */
	public $resetMediaRepurposingProcess = null;


}

