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
class Kaltura_Client_Type_AccessControlModifyRequestHostRegexAction extends Kaltura_Client_Type_RuleAction
{
	public function getKalturaObjectType()
	{
		return 'KalturaAccessControlModifyRequestHostRegexAction';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->pattern))
			$this->pattern = (string)$xml->pattern;
		if(!is_null($jsonObject) && isset($jsonObject->pattern))
			$this->pattern = (string)$jsonObject->pattern;
		if(!is_null($xml) && count($xml->replacement))
			$this->replacement = (string)$xml->replacement;
		if(!is_null($jsonObject) && isset($jsonObject->replacement))
			$this->replacement = (string)$jsonObject->replacement;
		if(!is_null($xml) && count($xml->replacmenServerNodeId))
			$this->replacmenServerNodeId = (int)$xml->replacmenServerNodeId;
		if(!is_null($jsonObject) && isset($jsonObject->replacmenServerNodeId))
			$this->replacmenServerNodeId = (int)$jsonObject->replacmenServerNodeId;
		if(!is_null($xml) && count($xml->checkAliveTimeoutMs))
			$this->checkAliveTimeoutMs = (int)$xml->checkAliveTimeoutMs;
		if(!is_null($jsonObject) && isset($jsonObject->checkAliveTimeoutMs))
			$this->checkAliveTimeoutMs = (int)$jsonObject->checkAliveTimeoutMs;
	}
	/**
	 * Request host regex pattern
	 *
	 * @var string
	 */
	public $pattern = null;

	/**
	 * Request host regex replacment
	 *
	 * @var string
	 */
	public $replacement = null;

	/**
	 * serverNodeId to generate replacment host from
	 *
	 * @var int
	 */
	public $replacmenServerNodeId = null;

	/**
	 * Set this value if you want to check if the server is accessible before redirecting traffic to it (this value is in milliseconds)
	 *
	 * @var int
	 */
	public $checkAliveTimeoutMs = null;


}

