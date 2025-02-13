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
class Kaltura_Client_MicrosoftTeamsDropFolder_Type_MicrosoftTeamsIntegrationSetting extends Kaltura_Client_Vendor_Type_IntegrationSetting
{
	public function getKalturaObjectType()
	{
		return 'KalturaMicrosoftTeamsIntegrationSetting';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->clientSecret))
			$this->clientSecret = (string)$xml->clientSecret;
		if(!is_null($jsonObject) && isset($jsonObject->clientSecret))
			$this->clientSecret = (string)$jsonObject->clientSecret;
		if(!is_null($xml) && count($xml->clientId))
			$this->clientId = (string)$xml->clientId;
		if(!is_null($jsonObject) && isset($jsonObject->clientId))
			$this->clientId = (string)$jsonObject->clientId;
		if(!is_null($xml) && count($xml->userMetadataProfileId))
			$this->userMetadataProfileId = (int)$xml->userMetadataProfileId;
		if(!is_null($jsonObject) && isset($jsonObject->userMetadataProfileId))
			$this->userMetadataProfileId = (int)$jsonObject->userMetadataProfileId;
		if(!is_null($xml) && count($xml->scopes))
			$this->scopes = (string)$xml->scopes;
		if(!is_null($jsonObject) && isset($jsonObject->scopes))
			$this->scopes = (string)$jsonObject->scopes;
		if(!is_null($xml) && count($xml->encryptionKey))
			$this->encryptionKey = (string)$xml->encryptionKey;
		if(!is_null($jsonObject) && isset($jsonObject->encryptionKey))
			$this->encryptionKey = (string)$jsonObject->encryptionKey;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $clientSecret = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientId = null;

	/**
	 * User-level custom metadata profile ID which will contain encrypted user-level Graph access data.
	 *
	 * @var int
	 */
	public $userMetadataProfileId = null;

	/**
	 * MS Graph permission scopes for delegate auth
	 *
	 * @var string
	 */
	public $scopes = null;

	/**
	 * Encryption key used for encrypting/decrypting user auth data.
	 *
	 * @var string
	 * @readonly
	 */
	public $encryptionKey = null;


}

