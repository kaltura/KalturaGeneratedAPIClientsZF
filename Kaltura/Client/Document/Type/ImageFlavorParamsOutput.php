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
class Kaltura_Client_Document_Type_ImageFlavorParamsOutput extends Kaltura_Client_Type_FlavorParamsOutput
{
	public function getKalturaObjectType()
	{
		return 'KalturaImageFlavorParamsOutput';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->densityWidth))
			$this->densityWidth = (int)$xml->densityWidth;
		if(!is_null($jsonObject) && isset($jsonObject->densityWidth))
			$this->densityWidth = (int)$jsonObject->densityWidth;
		if(!is_null($xml) && count($xml->densityHeight))
			$this->densityHeight = (int)$xml->densityHeight;
		if(!is_null($jsonObject) && isset($jsonObject->densityHeight))
			$this->densityHeight = (int)$jsonObject->densityHeight;
		if(!is_null($xml) && count($xml->sizeWidth))
			$this->sizeWidth = (int)$xml->sizeWidth;
		if(!is_null($jsonObject) && isset($jsonObject->sizeWidth))
			$this->sizeWidth = (int)$jsonObject->sizeWidth;
		if(!is_null($xml) && count($xml->sizeHeight))
			$this->sizeHeight = (int)$xml->sizeHeight;
		if(!is_null($jsonObject) && isset($jsonObject->sizeHeight))
			$this->sizeHeight = (int)$jsonObject->sizeHeight;
		if(!is_null($xml) && count($xml->depth))
			$this->depth = (int)$xml->depth;
		if(!is_null($jsonObject) && isset($jsonObject->depth))
			$this->depth = (int)$jsonObject->depth;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $densityWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $densityHeight = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeWidth = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sizeHeight = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $depth = null;


}

