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
class Kaltura_Client_S3DropFolder_Type_S3DropFolder extends Kaltura_Client_DropFolder_Type_DropFolder
{
	public function getKalturaObjectType()
	{
		return 'KalturaS3DropFolder';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->s3Host))
			$this->s3Host = (string)$xml->s3Host;
		if(!is_null($jsonObject) && isset($jsonObject->s3Host))
			$this->s3Host = (string)$jsonObject->s3Host;
		if(!is_null($xml) && count($xml->s3Region))
			$this->s3Region = (string)$xml->s3Region;
		if(!is_null($jsonObject) && isset($jsonObject->s3Region))
			$this->s3Region = (string)$jsonObject->s3Region;
		if(!is_null($xml) && count($xml->s3UserId))
			$this->s3UserId = (string)$xml->s3UserId;
		if(!is_null($jsonObject) && isset($jsonObject->s3UserId))
			$this->s3UserId = (string)$jsonObject->s3UserId;
		if(!is_null($xml) && count($xml->s3Password))
			$this->s3Password = (string)$xml->s3Password;
		if(!is_null($jsonObject) && isset($jsonObject->s3Password))
			$this->s3Password = (string)$jsonObject->s3Password;
		if(!is_null($xml) && count($xml->useS3Arn))
		{
			if(!empty($xml->useS3Arn) && ((int) $xml->useS3Arn === 1 || strtolower((string)$xml->useS3Arn) === 'true'))
				$this->useS3Arn = true;
			else
				$this->useS3Arn = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->useS3Arn))
		{
			if(!empty($jsonObject->useS3Arn) && ((int) $jsonObject->useS3Arn === 1 || strtolower((string)$jsonObject->useS3Arn) === 'true'))
				$this->useS3Arn = true;
			else
				$this->useS3Arn = false;
		}
		if(!is_null($xml) && count($xml->s3Arn))
			$this->s3Arn = (string)$xml->s3Arn;
		if(!is_null($jsonObject) && isset($jsonObject->s3Arn))
			$this->s3Arn = (string)$jsonObject->s3Arn;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $s3Host = null;

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
	public $s3UserId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $s3Password = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $useS3Arn = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $s3Arn = null;


}

