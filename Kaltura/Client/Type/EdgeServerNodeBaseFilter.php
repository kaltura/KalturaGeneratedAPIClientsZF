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
abstract class Kaltura_Client_Type_EdgeServerNodeBaseFilter extends Kaltura_Client_Type_DeliveryServerNodeFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaEdgeServerNodeBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->playbackDomainLike))
			$this->playbackDomainLike = (string)$xml->playbackDomainLike;
		if(!is_null($jsonObject) && isset($jsonObject->playbackDomainLike))
			$this->playbackDomainLike = (string)$jsonObject->playbackDomainLike;
		if(!is_null($xml) && count($xml->playbackDomainMultiLikeOr))
			$this->playbackDomainMultiLikeOr = (string)$xml->playbackDomainMultiLikeOr;
		if(!is_null($jsonObject) && isset($jsonObject->playbackDomainMultiLikeOr))
			$this->playbackDomainMultiLikeOr = (string)$jsonObject->playbackDomainMultiLikeOr;
		if(!is_null($xml) && count($xml->playbackDomainMultiLikeAnd))
			$this->playbackDomainMultiLikeAnd = (string)$xml->playbackDomainMultiLikeAnd;
		if(!is_null($jsonObject) && isset($jsonObject->playbackDomainMultiLikeAnd))
			$this->playbackDomainMultiLikeAnd = (string)$jsonObject->playbackDomainMultiLikeAnd;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $playbackDomainLike = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $playbackDomainMultiLikeOr = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $playbackDomainMultiLikeAnd = null;


}

