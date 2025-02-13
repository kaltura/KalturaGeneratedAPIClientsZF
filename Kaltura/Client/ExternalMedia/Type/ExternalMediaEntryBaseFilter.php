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
abstract class Kaltura_Client_ExternalMedia_Type_ExternalMediaEntryBaseFilter extends Kaltura_Client_Type_MediaEntryFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaExternalMediaEntryBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->externalSourceTypeEqual))
			$this->externalSourceTypeEqual = (string)$xml->externalSourceTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->externalSourceTypeEqual))
			$this->externalSourceTypeEqual = (string)$jsonObject->externalSourceTypeEqual;
		if(!is_null($xml) && count($xml->externalSourceTypeIn))
			$this->externalSourceTypeIn = (string)$xml->externalSourceTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->externalSourceTypeIn))
			$this->externalSourceTypeIn = (string)$jsonObject->externalSourceTypeIn;
		if(!is_null($xml) && count($xml->assetParamsIdsMatchOr))
			$this->assetParamsIdsMatchOr = (string)$xml->assetParamsIdsMatchOr;
		if(!is_null($jsonObject) && isset($jsonObject->assetParamsIdsMatchOr))
			$this->assetParamsIdsMatchOr = (string)$jsonObject->assetParamsIdsMatchOr;
		if(!is_null($xml) && count($xml->assetParamsIdsMatchAnd))
			$this->assetParamsIdsMatchAnd = (string)$xml->assetParamsIdsMatchAnd;
		if(!is_null($jsonObject) && isset($jsonObject->assetParamsIdsMatchAnd))
			$this->assetParamsIdsMatchAnd = (string)$jsonObject->assetParamsIdsMatchAnd;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_ExternalMedia_Enum_ExternalMediaSourceType
	 */
	public $externalSourceTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $externalSourceTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsIdsMatchOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $assetParamsIdsMatchAnd = null;


}

