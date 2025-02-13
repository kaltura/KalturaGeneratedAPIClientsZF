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
class Kaltura_Client_Type_AmazonS3StorageExportJobData extends Kaltura_Client_Type_StorageExportJobData
{
	public function getKalturaObjectType()
	{
		return 'KalturaAmazonS3StorageExportJobData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->filesPermissionInS3))
			$this->filesPermissionInS3 = (string)$xml->filesPermissionInS3;
		if(!is_null($jsonObject) && isset($jsonObject->filesPermissionInS3))
			$this->filesPermissionInS3 = (string)$jsonObject->filesPermissionInS3;
		if(!is_null($xml) && count($xml->s3Region))
			$this->s3Region = (string)$xml->s3Region;
		if(!is_null($jsonObject) && isset($jsonObject->s3Region))
			$this->s3Region = (string)$jsonObject->s3Region;
		if(!is_null($xml) && count($xml->sseType))
			$this->sseType = (string)$xml->sseType;
		if(!is_null($jsonObject) && isset($jsonObject->sseType))
			$this->sseType = (string)$jsonObject->sseType;
		if(!is_null($xml) && count($xml->sseKmsKeyId))
			$this->sseKmsKeyId = (string)$xml->sseKmsKeyId;
		if(!is_null($jsonObject) && isset($jsonObject->sseKmsKeyId))
			$this->sseKmsKeyId = (string)$jsonObject->sseKmsKeyId;
		if(!is_null($xml) && count($xml->signatureType))
			$this->signatureType = (string)$xml->signatureType;
		if(!is_null($jsonObject) && isset($jsonObject->signatureType))
			$this->signatureType = (string)$jsonObject->signatureType;
		if(!is_null($xml) && count($xml->endPoint))
			$this->endPoint = (string)$xml->endPoint;
		if(!is_null($jsonObject) && isset($jsonObject->endPoint))
			$this->endPoint = (string)$jsonObject->endPoint;
		if(!is_null($xml) && count($xml->storageClass))
			$this->storageClass = (string)$xml->storageClass;
		if(!is_null($jsonObject) && isset($jsonObject->storageClass))
			$this->storageClass = (string)$jsonObject->storageClass;
	}
	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_AmazonS3StorageProfileFilesPermissionLevel
	 */
	public $filesPermissionInS3 = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $s3Region = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sseType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $sseKmsKeyId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $signatureType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $endPoint = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $storageClass = null;


}

