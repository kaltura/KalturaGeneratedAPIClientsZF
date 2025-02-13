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
class Kaltura_Client_TvinciDistribution_Type_TvinciDistributionTag extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaTvinciDistributionTag';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->tagname))
			$this->tagname = (string)$xml->tagname;
		if(!is_null($jsonObject) && isset($jsonObject->tagname))
			$this->tagname = (string)$jsonObject->tagname;
		if(!is_null($xml) && count($xml->extension))
			$this->extension = (string)$xml->extension;
		if(!is_null($jsonObject) && isset($jsonObject->extension))
			$this->extension = (string)$jsonObject->extension;
		if(!is_null($xml) && count($xml->protocol))
			$this->protocol = (string)$xml->protocol;
		if(!is_null($jsonObject) && isset($jsonObject->protocol))
			$this->protocol = (string)$jsonObject->protocol;
		if(!is_null($xml) && count($xml->format))
			$this->format = (string)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (string)$jsonObject->format;
		if(!is_null($xml) && count($xml->filename))
			$this->filename = (string)$xml->filename;
		if(!is_null($jsonObject) && isset($jsonObject->filename))
			$this->filename = (string)$jsonObject->filename;
		if(!is_null($xml) && count($xml->ppvmodule))
			$this->ppvmodule = (string)$xml->ppvmodule;
		if(!is_null($jsonObject) && isset($jsonObject->ppvmodule))
			$this->ppvmodule = (string)$jsonObject->ppvmodule;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $tagname = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $extension = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $protocol = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $format = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $filename = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ppvmodule = null;


}

