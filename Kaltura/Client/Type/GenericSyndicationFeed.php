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
class Kaltura_Client_Type_GenericSyndicationFeed extends Kaltura_Client_Type_BaseSyndicationFeed
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericSyndicationFeed';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->feedDescription))
			$this->feedDescription = (string)$xml->feedDescription;
		if(!is_null($jsonObject) && isset($jsonObject->feedDescription))
			$this->feedDescription = (string)$jsonObject->feedDescription;
		if(!is_null($xml) && count($xml->feedLandingPage))
			$this->feedLandingPage = (string)$xml->feedLandingPage;
		if(!is_null($jsonObject) && isset($jsonObject->feedLandingPage))
			$this->feedLandingPage = (string)$jsonObject->feedLandingPage;
		if(!is_null($xml) && count($xml->entryFilter) && !empty($xml->entryFilter))
			$this->entryFilter = Kaltura_Client_ParseUtils::unmarshalObject($xml->entryFilter, "KalturaBaseEntryFilter");
		if(!is_null($jsonObject) && isset($jsonObject->entryFilter) && !empty($jsonObject->entryFilter))
			$this->entryFilter = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->entryFilter, "KalturaBaseEntryFilter");
		if(!is_null($xml) && count($xml->pageSize))
			$this->pageSize = (int)$xml->pageSize;
		if(!is_null($jsonObject) && isset($jsonObject->pageSize))
			$this->pageSize = (int)$jsonObject->pageSize;
	}
	/**
	 * feed description
	 *
	 * @var string
	 */
	public $feedDescription = null;

	/**
	 * feed landing page (i.e publisher website)
	 *
	 * @var string
	 */
	public $feedLandingPage = null;

	/**
	 * entry filter
	 *
	 * @var Kaltura_Client_Type_BaseEntryFilter
	 */
	public $entryFilter;

	/**
	 * page size
	 *
	 * @var int
	 */
	public $pageSize = null;


}

