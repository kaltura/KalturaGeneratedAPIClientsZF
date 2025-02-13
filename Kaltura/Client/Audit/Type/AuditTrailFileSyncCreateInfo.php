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
class Kaltura_Client_Audit_Type_AuditTrailFileSyncCreateInfo extends Kaltura_Client_Audit_Type_AuditTrailInfo
{
	public function getKalturaObjectType()
	{
		return 'KalturaAuditTrailFileSyncCreateInfo';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->version))
			$this->version = (string)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (string)$jsonObject->version;
		if(!is_null($xml) && count($xml->objectSubType))
			$this->objectSubType = (int)$xml->objectSubType;
		if(!is_null($jsonObject) && isset($jsonObject->objectSubType))
			$this->objectSubType = (int)$jsonObject->objectSubType;
		if(!is_null($xml) && count($xml->dc))
			$this->dc = (int)$xml->dc;
		if(!is_null($jsonObject) && isset($jsonObject->dc))
			$this->dc = (int)$jsonObject->dc;
		if(!is_null($xml) && count($xml->original))
		{
			if(!empty($xml->original) && ((int) $xml->original === 1 || strtolower((string)$xml->original) === 'true'))
				$this->original = true;
			else
				$this->original = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->original))
		{
			if(!empty($jsonObject->original) && ((int) $jsonObject->original === 1 || strtolower((string)$jsonObject->original) === 'true'))
				$this->original = true;
			else
				$this->original = false;
		}
		if(!is_null($xml) && count($xml->fileType))
			$this->fileType = (int)$xml->fileType;
		if(!is_null($jsonObject) && isset($jsonObject->fileType))
			$this->fileType = (int)$jsonObject->fileType;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $version = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $objectSubType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $dc = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $original = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailFileSyncType
	 */
	public $fileType = null;


}

