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
class Kaltura_Client_Type_StorageJobData extends Kaltura_Client_Type_JobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaStorageJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->serverUrl))
			$this->serverUrl = (string)$xml->serverUrl;
		if(!is_null($jsonObject) && isset($jsonObject->serverUrl))
			$this->serverUrl = (string)$jsonObject->serverUrl;
		if(!is_null($xml) && count($xml->serverUsername))
			$this->serverUsername = (string)$xml->serverUsername;
		if(!is_null($jsonObject) && isset($jsonObject->serverUsername))
			$this->serverUsername = (string)$jsonObject->serverUsername;
		if(!is_null($xml) && count($xml->serverPassword))
			$this->serverPassword = (string)$xml->serverPassword;
		if(!is_null($jsonObject) && isset($jsonObject->serverPassword))
			$this->serverPassword = (string)$jsonObject->serverPassword;
		if(!is_null($xml) && count($xml->serverPrivateKey))
			$this->serverPrivateKey = (string)$xml->serverPrivateKey;
		if(!is_null($jsonObject) && isset($jsonObject->serverPrivateKey))
			$this->serverPrivateKey = (string)$jsonObject->serverPrivateKey;
		if(!is_null($xml) && count($xml->serverPublicKey))
			$this->serverPublicKey = (string)$xml->serverPublicKey;
		if(!is_null($jsonObject) && isset($jsonObject->serverPublicKey))
			$this->serverPublicKey = (string)$jsonObject->serverPublicKey;
		if(!is_null($xml) && count($xml->serverPassPhrase))
			$this->serverPassPhrase = (string)$xml->serverPassPhrase;
		if(!is_null($jsonObject) && isset($jsonObject->serverPassPhrase))
			$this->serverPassPhrase = (string)$jsonObject->serverPassPhrase;
		if(!is_null($xml) && count($xml->ftpPassiveMode))
		{
			if(!empty($xml->ftpPassiveMode) && ((int) $xml->ftpPassiveMode === 1 || strtolower((string)$xml->ftpPassiveMode) === 'true'))
				$this->ftpPassiveMode = true;
			else
				$this->ftpPassiveMode = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->ftpPassiveMode))
		{
			if(!empty($jsonObject->ftpPassiveMode) && ((int) $jsonObject->ftpPassiveMode === 1 || strtolower((string)$jsonObject->ftpPassiveMode) === 'true'))
				$this->ftpPassiveMode = true;
			else
				$this->ftpPassiveMode = false;
		}
		if(!is_null($xml) && count($xml->srcFileSyncLocalPath))
			$this->srcFileSyncLocalPath = (string)$xml->srcFileSyncLocalPath;
		if(!is_null($jsonObject) && isset($jsonObject->srcFileSyncLocalPath))
			$this->srcFileSyncLocalPath = (string)$jsonObject->srcFileSyncLocalPath;
		if(!is_null($xml) && count($xml->srcFileEncryptionKey))
			$this->srcFileEncryptionKey = (string)$xml->srcFileEncryptionKey;
		if(!is_null($jsonObject) && isset($jsonObject->srcFileEncryptionKey))
			$this->srcFileEncryptionKey = (string)$jsonObject->srcFileEncryptionKey;
		if(!is_null($xml) && count($xml->srcFileSyncId))
			$this->srcFileSyncId = (string)$xml->srcFileSyncId;
		if(!is_null($jsonObject) && isset($jsonObject->srcFileSyncId))
			$this->srcFileSyncId = (string)$jsonObject->srcFileSyncId;
		if(!is_null($xml) && count($xml->destFileSyncStoredPath))
			$this->destFileSyncStoredPath = (string)$xml->destFileSyncStoredPath;
		if(!is_null($jsonObject) && isset($jsonObject->destFileSyncStoredPath))
			$this->destFileSyncStoredPath = (string)$jsonObject->destFileSyncStoredPath;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUrl = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverUsername = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverPassword = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverPrivateKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverPublicKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverPassPhrase = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $ftpPassiveMode = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncLocalPath = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileEncryptionKey = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $srcFileSyncId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $destFileSyncStoredPath = null;


}

