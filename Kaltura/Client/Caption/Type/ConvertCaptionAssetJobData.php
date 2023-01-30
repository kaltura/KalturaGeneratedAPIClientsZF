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
class Kaltura_Client_Caption_Type_ConvertCaptionAssetJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaConvertCaptionAssetJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->captionAssetId))
			$this->captionAssetId = (string)$xml->captionAssetId;
		if(count($xml->fileLocation))
			$this->fileLocation = (string)$xml->fileLocation;
		if(count($xml->fileEncryptionKey))
			$this->fileEncryptionKey = (string)$xml->fileEncryptionKey;
		if(count($xml->fromType))
			$this->fromType = (string)$xml->fromType;
		if(count($xml->toType))
			$this->toType = (string)$xml->toType;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAssetId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileLocation = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fileEncryptionKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fromType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $toType = null;


}

