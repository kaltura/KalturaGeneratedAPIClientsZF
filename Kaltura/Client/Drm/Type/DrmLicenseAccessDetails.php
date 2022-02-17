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
class Kaltura_Client_Drm_Type_DrmLicenseAccessDetails extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaDrmLicenseAccessDetails';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->policy))
			$this->policy = (string)$xml->policy;
		if(count($xml->duration))
			$this->duration = (int)$xml->duration;
		if(count($xml->absolute_duration))
			$this->absolute_duration = (int)$xml->absolute_duration;
		if(count($xml->licenseParams))
		{
			if(empty($xml->licenseParams))
				$this->licenseParams = array();
			else
				$this->licenseParams = Kaltura_Client_ParseUtils::unmarshalArray($xml->licenseParams, "KalturaKeyValue");
		}
	}
	/**
	 * Drm policy name
	 *
	 * @var string
	 */
	public $policy = null;

	/**
	 * movie duration in seconds
	 *
	 * @var int
	 */
	public $duration = null;

	/**
	 * playback window in seconds
	 *
	 * @var int
	 */
	public $absolute_duration = null;

	/**
	 * 
	 *
	 * @var array of KalturaKeyValue
	 */
	public $licenseParams;


}

