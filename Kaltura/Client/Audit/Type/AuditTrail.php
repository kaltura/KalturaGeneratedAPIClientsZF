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
class Kaltura_Client_Audit_Type_AuditTrail extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaAuditTrail';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->createdAt))
			$this->createdAt = (int)$xml->createdAt;
		if(!is_null($jsonObject) && isset($jsonObject->createdAt))
			$this->createdAt = (int)$jsonObject->createdAt;
		if(!is_null($xml) && count($xml->parsedAt))
			$this->parsedAt = (int)$xml->parsedAt;
		if(!is_null($jsonObject) && isset($jsonObject->parsedAt))
			$this->parsedAt = (int)$jsonObject->parsedAt;
		if(!is_null($xml) && count($xml->status))
			$this->status = (int)$xml->status;
		if(!is_null($jsonObject) && isset($jsonObject->status))
			$this->status = (int)$jsonObject->status;
		if(!is_null($xml) && count($xml->auditObjectType))
			$this->auditObjectType = (string)$xml->auditObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->auditObjectType))
			$this->auditObjectType = (string)$jsonObject->auditObjectType;
		if(!is_null($xml) && count($xml->objectId))
			$this->objectId = (string)$xml->objectId;
		if(!is_null($jsonObject) && isset($jsonObject->objectId))
			$this->objectId = (string)$jsonObject->objectId;
		if(!is_null($xml) && count($xml->relatedObjectId))
			$this->relatedObjectId = (string)$xml->relatedObjectId;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectId))
			$this->relatedObjectId = (string)$jsonObject->relatedObjectId;
		if(!is_null($xml) && count($xml->relatedObjectType))
			$this->relatedObjectType = (string)$xml->relatedObjectType;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectType))
			$this->relatedObjectType = (string)$jsonObject->relatedObjectType;
		if(!is_null($xml) && count($xml->entryId))
			$this->entryId = (string)$xml->entryId;
		if(!is_null($jsonObject) && isset($jsonObject->entryId))
			$this->entryId = (string)$jsonObject->entryId;
		if(!is_null($xml) && count($xml->masterPartnerId))
			$this->masterPartnerId = (int)$xml->masterPartnerId;
		if(!is_null($jsonObject) && isset($jsonObject->masterPartnerId))
			$this->masterPartnerId = (int)$jsonObject->masterPartnerId;
		if(!is_null($xml) && count($xml->partnerId))
			$this->partnerId = (int)$xml->partnerId;
		if(!is_null($jsonObject) && isset($jsonObject->partnerId))
			$this->partnerId = (int)$jsonObject->partnerId;
		if(!is_null($xml) && count($xml->requestId))
			$this->requestId = (string)$xml->requestId;
		if(!is_null($jsonObject) && isset($jsonObject->requestId))
			$this->requestId = (string)$jsonObject->requestId;
		if(!is_null($xml) && count($xml->userId))
			$this->userId = (string)$xml->userId;
		if(!is_null($jsonObject) && isset($jsonObject->userId))
			$this->userId = (string)$jsonObject->userId;
		if(!is_null($xml) && count($xml->action))
			$this->action = (string)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (string)$jsonObject->action;
		if(!is_null($xml) && count($xml->data) && !empty($xml->data))
			$this->data = Kaltura_Client_ParseUtils::unmarshalObject($xml->data, "KalturaAuditTrailInfo");
		if(!is_null($jsonObject) && isset($jsonObject->data) && !empty($jsonObject->data))
			$this->data = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->data, "KalturaAuditTrailInfo");
		if(!is_null($xml) && count($xml->ks))
			$this->ks = (string)$xml->ks;
		if(!is_null($jsonObject) && isset($jsonObject->ks))
			$this->ks = (string)$jsonObject->ks;
		if(!is_null($xml) && count($xml->context))
			$this->context = (int)$xml->context;
		if(!is_null($jsonObject) && isset($jsonObject->context))
			$this->context = (int)$jsonObject->context;
		if(!is_null($xml) && count($xml->entryPoint))
			$this->entryPoint = (string)$xml->entryPoint;
		if(!is_null($jsonObject) && isset($jsonObject->entryPoint))
			$this->entryPoint = (string)$jsonObject->entryPoint;
		if(!is_null($xml) && count($xml->serverName))
			$this->serverName = (string)$xml->serverName;
		if(!is_null($jsonObject) && isset($jsonObject->serverName))
			$this->serverName = (string)$jsonObject->serverName;
		if(!is_null($xml) && count($xml->ipAddress))
			$this->ipAddress = (string)$xml->ipAddress;
		if(!is_null($jsonObject) && isset($jsonObject->ipAddress))
			$this->ipAddress = (string)$jsonObject->ipAddress;
		if(!is_null($xml) && count($xml->userAgent))
			$this->userAgent = (string)$xml->userAgent;
		if(!is_null($jsonObject) && isset($jsonObject->userAgent))
			$this->userAgent = (string)$jsonObject->userAgent;
		if(!is_null($xml) && count($xml->clientTag))
			$this->clientTag = (string)$xml->clientTag;
		if(!is_null($jsonObject) && isset($jsonObject->clientTag))
			$this->clientTag = (string)$jsonObject->clientTag;
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->errorDescription))
			$this->errorDescription = (string)$xml->errorDescription;
		if(!is_null($jsonObject) && isset($jsonObject->errorDescription))
			$this->errorDescription = (string)$jsonObject->errorDescription;
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $createdAt = null;

	/**
	 * Indicates when the data was parsed
	 *
	 * @var int
	 * @readonly
	 */
	public $parsedAt = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailStatus
	 * @readonly
	 */
	public $status = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailObjectType
	 */
	public $auditObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailObjectType
	 */
	public $relatedObjectType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $masterPartnerId = null;

	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $partnerId = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $requestId = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailAction
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Type_AuditTrailInfo
	 */
	public $data;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $ks = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailContext
	 * @readonly
	 */
	public $context = null;

	/**
	 * The API service and action that called and caused this audit
	 *
	 * @var string
	 * @readonly
	 */
	public $entryPoint = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $serverName = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $ipAddress = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $userAgent = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientTag = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * 
	 *
	 * @var string
	 * @readonly
	 */
	public $errorDescription = null;


}

