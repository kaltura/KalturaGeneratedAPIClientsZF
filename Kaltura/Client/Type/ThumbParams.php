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
class Kaltura_Client_Type_ThumbParams extends Kaltura_Client_Type_AssetParams
{
	public function getKalturaObjectType()
	{
		return 'KalturaThumbParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->cropType))
			$this->cropType = (int)$xml->cropType;
		if(!is_null($jsonObject) && isset($jsonObject->cropType))
			$this->cropType = (int)$jsonObject->cropType;
		if(!is_null($xml) && count($xml->quality))
			$this->quality = (int)$xml->quality;
		if(!is_null($jsonObject) && isset($jsonObject->quality))
			$this->quality = (int)$jsonObject->quality;
		if(!is_null($xml) && count($xml->cropX))
			$this->cropX = (int)$xml->cropX;
		if(!is_null($jsonObject) && isset($jsonObject->cropX))
			$this->cropX = (int)$jsonObject->cropX;
		if(!is_null($xml) && count($xml->cropY))
			$this->cropY = (int)$xml->cropY;
		if(!is_null($jsonObject) && isset($jsonObject->cropY))
			$this->cropY = (int)$jsonObject->cropY;
		if(!is_null($xml) && count($xml->cropWidth))
			$this->cropWidth = (int)$xml->cropWidth;
		if(!is_null($jsonObject) && isset($jsonObject->cropWidth))
			$this->cropWidth = (int)$jsonObject->cropWidth;
		if(!is_null($xml) && count($xml->cropHeight))
			$this->cropHeight = (int)$xml->cropHeight;
		if(!is_null($jsonObject) && isset($jsonObject->cropHeight))
			$this->cropHeight = (int)$jsonObject->cropHeight;
		if(!is_null($xml) && count($xml->videoOffset))
			$this->videoOffset = (float)$xml->videoOffset;
		if(!is_null($jsonObject) && isset($jsonObject->videoOffset))
			$this->videoOffset = (float)$jsonObject->videoOffset;
		if(!is_null($xml) && count($xml->width))
			$this->width = (int)$xml->width;
		if(!is_null($jsonObject) && isset($jsonObject->width))
			$this->width = (int)$jsonObject->width;
		if(!is_null($xml) && count($xml->height))
			$this->height = (int)$xml->height;
		if(!is_null($jsonObject) && isset($jsonObject->height))
			$this->height = (int)$jsonObject->height;
		if(!is_null($xml) && count($xml->scaleWidth))
			$this->scaleWidth = (float)$xml->scaleWidth;
		if(!is_null($jsonObject) && isset($jsonObject->scaleWidth))
			$this->scaleWidth = (float)$jsonObject->scaleWidth;
		if(!is_null($xml) && count($xml->scaleHeight))
			$this->scaleHeight = (float)$xml->scaleHeight;
		if(!is_null($jsonObject) && isset($jsonObject->scaleHeight))
			$this->scaleHeight = (float)$jsonObject->scaleHeight;
		if(!is_null($xml) && count($xml->backgroundColor))
			$this->backgroundColor = (string)$xml->backgroundColor;
		if(!is_null($jsonObject) && isset($jsonObject->backgroundColor))
			$this->backgroundColor = (string)$jsonObject->backgroundColor;
		if(!is_null($xml) && count($xml->sourceParamsId))
			$this->sourceParamsId = (int)$xml->sourceParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->sourceParamsId))
			$this->sourceParamsId = (int)$jsonObject->sourceParamsId;
		if(!is_null($xml) && count($xml->format))
			$this->format = (string)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (string)$jsonObject->format;
		if(!is_null($xml) && count($xml->density))
			$this->density = (int)$xml->density;
		if(!is_null($jsonObject) && isset($jsonObject->density))
			$this->density = (int)$jsonObject->density;
		if(!is_null($xml) && count($xml->stripProfiles))
		{
			if(!empty($xml->stripProfiles) && ((int) $xml->stripProfiles === 1 || strtolower((string)$xml->stripProfiles) === 'true'))
				$this->stripProfiles = true;
			else
				$this->stripProfiles = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->stripProfiles))
		{
			if(!empty($jsonObject->stripProfiles) && ((int) $jsonObject->stripProfiles === 1 || strtolower((string)$jsonObject->stripProfiles) === 'true'))
				$this->stripProfiles = true;
			else
				$this->stripProfiles = false;
		}
		if(!is_null($xml) && count($xml->videoOffsetInPercentage))
			$this->videoOffsetInPercentage = (int)$xml->videoOffsetInPercentage;
		if(!is_null($jsonObject) && isset($jsonObject->videoOffsetInPercentage))
			$this->videoOffsetInPercentage = (int)$jsonObject->videoOffsetInPercentage;
		if(!is_null($xml) && count($xml->interval))
			$this->interval = (int)$xml->interval;
		if(!is_null($jsonObject) && isset($jsonObject->interval))
			$this->interval = (int)$jsonObject->interval;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ThumbCropType
	 */
	public $cropType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $quality = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropX = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropY = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $cropHeight = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $videoOffset = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $scaleWidth = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $scaleHeight = null;

	/**
	 * Hexadecimal value
	 *
	 * @var string
	 */
	public $backgroundColor = null;

	/**
	 * Id of the flavor params or the thumbnail params to be used as source for the thumbnail creation
	 *
	 * @var int
	 */
	public $sourceParamsId = null;

	/**
	 * The container format of the Flavor Params
	 *
	 * @var Kaltura_Client_Enum_ContainerFormat
	 */
	public $format = null;

	/**
	 * The image density (dpi) for example: 72 or 96
	 *
	 * @var int
	 */
	public $density = null;

	/**
	 * Strip profiles and comments
	 *
	 * @var bool
	 */
	public $stripProfiles = null;

	/**
	 * Create thumbnail from the videoLengthpercentage second
	 *
	 * @var int
	 */
	public $videoOffsetInPercentage = null;

	/**
	 * interval in seconds for creating thumbnail
	 *
	 * @var int
	 */
	public $interval = null;


}

