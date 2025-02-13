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
class Kaltura_Client_Type_LiveEntryRecordingOptions extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaLiveEntryRecordingOptions';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->shouldCopyEntitlement))
			$this->shouldCopyEntitlement = (int)$xml->shouldCopyEntitlement;
		if(!is_null($jsonObject) && isset($jsonObject->shouldCopyEntitlement))
			$this->shouldCopyEntitlement = (int)$jsonObject->shouldCopyEntitlement;
		if(!is_null($xml) && count($xml->shouldCopyScheduling))
			$this->shouldCopyScheduling = (int)$xml->shouldCopyScheduling;
		if(!is_null($jsonObject) && isset($jsonObject->shouldCopyScheduling))
			$this->shouldCopyScheduling = (int)$jsonObject->shouldCopyScheduling;
		if(!is_null($xml) && count($xml->shouldCopyThumbnail))
			$this->shouldCopyThumbnail = (int)$xml->shouldCopyThumbnail;
		if(!is_null($jsonObject) && isset($jsonObject->shouldCopyThumbnail))
			$this->shouldCopyThumbnail = (int)$jsonObject->shouldCopyThumbnail;
		if(!is_null($xml) && count($xml->shouldMakeHidden))
			$this->shouldMakeHidden = (int)$xml->shouldMakeHidden;
		if(!is_null($jsonObject) && isset($jsonObject->shouldMakeHidden))
			$this->shouldMakeHidden = (int)$jsonObject->shouldMakeHidden;
		if(!is_null($xml) && count($xml->shouldAutoArchive))
			$this->shouldAutoArchive = (int)$xml->shouldAutoArchive;
		if(!is_null($jsonObject) && isset($jsonObject->shouldAutoArchive))
			$this->shouldAutoArchive = (int)$jsonObject->shouldAutoArchive;
		if(!is_null($xml) && count($xml->nonDeletedCuePointsTags))
			$this->nonDeletedCuePointsTags = (string)$xml->nonDeletedCuePointsTags;
		if(!is_null($jsonObject) && isset($jsonObject->nonDeletedCuePointsTags))
			$this->nonDeletedCuePointsTags = (string)$jsonObject->nonDeletedCuePointsTags;
		if(!is_null($xml) && count($xml->archiveVodSuffixTimezone))
			$this->archiveVodSuffixTimezone = (string)$xml->archiveVodSuffixTimezone;
		if(!is_null($jsonObject) && isset($jsonObject->archiveVodSuffixTimezone))
			$this->archiveVodSuffixTimezone = (string)$jsonObject->archiveVodSuffixTimezone;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $shouldCopyEntitlement = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $shouldCopyScheduling = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $shouldCopyThumbnail = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $shouldMakeHidden = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $shouldAutoArchive = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nonDeletedCuePointsTags = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $archiveVodSuffixTimezone = null;


}

