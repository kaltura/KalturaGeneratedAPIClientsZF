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
class Kaltura_Client_BusinessProcessNotification_Type_BusinessProcessCase extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaBusinessProcessCase';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (string)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (string)$jsonObject->id;
		if(!is_null($xml) && count($xml->businessProcessId))
			$this->businessProcessId = (string)$xml->businessProcessId;
		if(!is_null($jsonObject) && isset($jsonObject->businessProcessId))
			$this->businessProcessId = (string)$jsonObject->businessProcessId;
		if(!is_null($xml) && count($xml->businessProcessStartNotificationTemplateId))
			$this->businessProcessStartNotificationTemplateId = (int)$xml->businessProcessStartNotificationTemplateId;
		if(!is_null($jsonObject) && isset($jsonObject->businessProcessStartNotificationTemplateId))
			$this->businessProcessStartNotificationTemplateId = (int)$jsonObject->businessProcessStartNotificationTemplateId;
		if(!is_null($xml) && count($xml->suspended))
		{
			if(!empty($xml->suspended) && ((int) $xml->suspended === 1 || strtolower((string)$xml->suspended) === 'true'))
				$this->suspended = true;
			else
				$this->suspended = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->suspended))
		{
			if(!empty($jsonObject->suspended) && ((int) $jsonObject->suspended === 1 || strtolower((string)$jsonObject->suspended) === 'true'))
				$this->suspended = true;
			else
				$this->suspended = false;
		}
		if(!is_null($xml) && count($xml->activityId))
			$this->activityId = (string)$xml->activityId;
		if(!is_null($jsonObject) && isset($jsonObject->activityId))
			$this->activityId = (string)$jsonObject->activityId;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $businessProcessId = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $businessProcessStartNotificationTemplateId = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $suspended = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $activityId = null;


}

