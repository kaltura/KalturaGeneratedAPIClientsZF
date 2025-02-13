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
class Kaltura_Client_CortexApiDistribution_Type_CortexApiDistributionProfile extends Kaltura_Client_ContentDistribution_Type_ConfigurableDistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaCortexApiDistributionProfile';
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
		if(!is_null($xml) && count($xml->host))
			$this->host = (string)$xml->host;
		if(!is_null($jsonObject) && isset($jsonObject->host))
			$this->host = (string)$jsonObject->host;
		if(!is_null($xml) && count($xml->password))
			$this->password = (string)$xml->password;
		if(!is_null($jsonObject) && isset($jsonObject->password))
			$this->password = (string)$jsonObject->password;
		if(!is_null($xml) && count($xml->folderrecordid))
			$this->folderrecordid = (string)$xml->folderrecordid;
		if(!is_null($jsonObject) && isset($jsonObject->folderrecordid))
			$this->folderrecordid = (string)$jsonObject->folderrecordid;
		if(!is_null($xml) && count($xml->metadataprofileid))
			$this->metadataprofileid = (string)$xml->metadataprofileid;
		if(!is_null($jsonObject) && isset($jsonObject->metadataprofileid))
			$this->metadataprofileid = (string)$jsonObject->metadataprofileid;
		if(!is_null($xml) && count($xml->metadataprofileidpushing))
			$this->metadataprofileidpushing = (string)$xml->metadataprofileidpushing;
		if(!is_null($jsonObject) && isset($jsonObject->metadataprofileidpushing))
			$this->metadataprofileidpushing = (string)$jsonObject->metadataprofileidpushing;
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
	public $host = null;

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
	public $folderrecordid = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataprofileid = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $metadataprofileidpushing = null;


}

