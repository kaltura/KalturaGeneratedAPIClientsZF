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
class Kaltura_Client_MsnDistribution_Type_MsnDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaMsnDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->username))
			$this->username = (string)$xml->username;
		if(!is_null($jsonObject) && isset($jsonObject->username))
			$this->username = (string)$jsonObject->username;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->domain))
			$this->domain = (string)$xml->domain;
		if(!is_null($jsonObject) && isset($jsonObject->domain))
			$this->domain = (string)$jsonObject->domain;
		if(!is_null($xml) && count($xml->csId))
			$this->csId = (string)$xml->csId;
		if(!is_null($jsonObject) && isset($jsonObject->csId))
			$this->csId = (string)$jsonObject->csId;
		if(!is_null($xml) && count($xml->source))
			$this->source = (string)$xml->source;
		if(!is_null($jsonObject) && isset($jsonObject->source))
			$this->source = (string)$jsonObject->source;
		if(!is_null($xml) && count($xml->sourceFriendlyName))
			$this->sourceFriendlyName = (string)$xml->sourceFriendlyName;
		if(!is_null($jsonObject) && isset($jsonObject->sourceFriendlyName))
			$this->sourceFriendlyName = (string)$jsonObject->sourceFriendlyName;
		if(!is_null($xml) && count($xml->pageGroup))
			$this->pageGroup = (string)$xml->pageGroup;
		if(!is_null($jsonObject) && isset($jsonObject->pageGroup))
			$this->pageGroup = (string)$jsonObject->pageGroup;
		if(!is_null($xml) && count($xml->sourceFlavorParamsId))
			$this->sourceFlavorParamsId = (int)$xml->sourceFlavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->sourceFlavorParamsId))
			$this->sourceFlavorParamsId = (int)$jsonObject->sourceFlavorParamsId;
		if(!is_null($xml) && count($xml->wmvFlavorParamsId))
			$this->wmvFlavorParamsId = (int)$xml->wmvFlavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->wmvFlavorParamsId))
			$this->wmvFlavorParamsId = (int)$jsonObject->wmvFlavorParamsId;
		if(!is_null($xml) && count($xml->flvFlavorParamsId))
			$this->flvFlavorParamsId = (int)$xml->flvFlavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->flvFlavorParamsId))
			$this->flvFlavorParamsId = (int)$jsonObject->flvFlavorParamsId;
		if(!is_null($xml) && count($xml->slFlavorParamsId))
			$this->slFlavorParamsId = (int)$xml->slFlavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->slFlavorParamsId))
			$this->slFlavorParamsId = (int)$jsonObject->slFlavorParamsId;
		if(!is_null($xml) && count($xml->slHdFlavorParamsId))
			$this->slHdFlavorParamsId = (int)$xml->slHdFlavorParamsId;
		if(!is_null($jsonObject) && isset($jsonObject->slHdFlavorParamsId))
			$this->slHdFlavorParamsId = (int)$jsonObject->slHdFlavorParamsId;
		if(!is_null($xml) && count($xml->msnvideoCat))
			$this->msnvideoCat = (string)$xml->msnvideoCat;
		if(!is_null($jsonObject) && isset($jsonObject->msnvideoCat))
			$this->msnvideoCat = (string)$jsonObject->msnvideoCat;
		if(!is_null($xml) && count($xml->msnvideoTop))
			$this->msnvideoTop = (string)$xml->msnvideoTop;
		if(!is_null($jsonObject) && isset($jsonObject->msnvideoTop))
			$this->msnvideoTop = (string)$jsonObject->msnvideoTop;
		if(!is_null($xml) && count($xml->msnvideoTopCat))
			$this->msnvideoTopCat = (string)$xml->msnvideoTopCat;
		if(!is_null($jsonObject) && isset($jsonObject->msnvideoTopCat))
			$this->msnvideoTopCat = (string)$jsonObject->msnvideoTopCat;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $username = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $password = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $domain = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $csId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $source = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sourceFriendlyName = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pageGroup = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $sourceFlavorParamsId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $wmvFlavorParamsId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $flvFlavorParamsId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $slFlavorParamsId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $slHdFlavorParamsId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $msnvideoCat = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $msnvideoTop = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $msnvideoTopCat = null;


}

