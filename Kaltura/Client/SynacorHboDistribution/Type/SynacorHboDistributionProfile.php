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
class Kaltura_Client_SynacorHboDistribution_Type_SynacorHboDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaSynacorHboDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->feedUrl))
			$this->feedUrl = (string)$xml->feedUrl;
		if(!is_null($jsonObject) && isset($jsonObject->feedUrl))
			$this->feedUrl = (string)$jsonObject->feedUrl;
		if(!is_null($xml) && count($xml->feedTitle))
			$this->feedTitle = (string)$xml->feedTitle;
		if(!is_null($jsonObject) && isset($jsonObject->feedTitle))
			$this->feedTitle = (string)$jsonObject->feedTitle;
		if(!is_null($xml) && count($xml->feedSubtitle))
			$this->feedSubtitle = (string)$xml->feedSubtitle;
		if(!is_null($jsonObject) && isset($jsonObject->feedSubtitle))
			$this->feedSubtitle = (string)$jsonObject->feedSubtitle;
		if(!is_null($xml) && count($xml->feedLink))
			$this->feedLink = (string)$xml->feedLink;
		if(!is_null($jsonObject) && isset($jsonObject->feedLink))
			$this->feedLink = (string)$jsonObject->feedLink;
		if(!is_null($xml) && count($xml->feedAuthorName))
			$this->feedAuthorName = (string)$xml->feedAuthorName;
		if(!is_null($jsonObject) && isset($jsonObject->feedAuthorName))
			$this->feedAuthorName = (string)$jsonObject->feedAuthorName;
	}
	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $feedUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedTitle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedSubtitle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedLink = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $feedAuthorName = null;


}

