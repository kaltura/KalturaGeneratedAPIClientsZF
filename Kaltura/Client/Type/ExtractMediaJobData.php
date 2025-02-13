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
class Kaltura_Client_Type_ExtractMediaJobData extends Kaltura_Client_Type_ConvartableJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaExtractMediaJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->calculateComplexity))
		{
			if(!empty($xml->calculateComplexity) && ((int) $xml->calculateComplexity === 1 || strtolower((string)$xml->calculateComplexity) === 'true'))
				$this->calculateComplexity = true;
			else
				$this->calculateComplexity = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->calculateComplexity))
		{
			if(!empty($jsonObject->calculateComplexity) && ((int) $jsonObject->calculateComplexity === 1 || strtolower((string)$jsonObject->calculateComplexity) === 'true'))
				$this->calculateComplexity = true;
			else
				$this->calculateComplexity = false;
		}
		if(!is_null($xml) && count($xml->extractId3Tags))
		{
			if(!empty($xml->extractId3Tags) && ((int) $xml->extractId3Tags === 1 || strtolower((string)$xml->extractId3Tags) === 'true'))
				$this->extractId3Tags = true;
			else
				$this->extractId3Tags = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->extractId3Tags))
		{
			if(!empty($jsonObject->extractId3Tags) && ((int) $jsonObject->extractId3Tags === 1 || strtolower((string)$jsonObject->extractId3Tags) === 'true'))
				$this->extractId3Tags = true;
			else
				$this->extractId3Tags = false;
		}
		if(!is_null($xml) && count($xml->destDataFilePath))
			$this->destDataFilePath = (string)$xml->destDataFilePath;
		if(!is_null($jsonObject) && isset($jsonObject->destDataFilePath))
			$this->destDataFilePath = (string)$jsonObject->destDataFilePath;
		if(!is_null($xml) && count($xml->detectGOP))
			$this->detectGOP = (int)$xml->detectGOP;
		if(!is_null($jsonObject) && isset($jsonObject->detectGOP))
			$this->detectGOP = (int)$jsonObject->detectGOP;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $calculateComplexity = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $extractId3Tags = null;

	/**
	 * The data output file
	 *
	 * @var string
	 */
	public $destDataFilePath = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $detectGOP = null;


}

