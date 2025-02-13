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
abstract class Kaltura_Client_Audit_Type_AuditTrailBaseFilter extends Kaltura_Client_Type_RelatedFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaAuditTrailBaseFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->idEqual))
			$this->idEqual = (int)$xml->idEqual;
		if(!is_null($jsonObject) && isset($jsonObject->idEqual))
			$this->idEqual = (int)$jsonObject->idEqual;
		if(!is_null($xml) && count($xml->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$xml->createdAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtGreaterThanOrEqual))
			$this->createdAtGreaterThanOrEqual = (int)$jsonObject->createdAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$xml->createdAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->createdAtLessThanOrEqual))
			$this->createdAtLessThanOrEqual = (int)$jsonObject->createdAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->parsedAtGreaterThanOrEqual))
			$this->parsedAtGreaterThanOrEqual = (int)$xml->parsedAtGreaterThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parsedAtGreaterThanOrEqual))
			$this->parsedAtGreaterThanOrEqual = (int)$jsonObject->parsedAtGreaterThanOrEqual;
		if(!is_null($xml) && count($xml->parsedAtLessThanOrEqual))
			$this->parsedAtLessThanOrEqual = (int)$xml->parsedAtLessThanOrEqual;
		if(!is_null($jsonObject) && isset($jsonObject->parsedAtLessThanOrEqual))
			$this->parsedAtLessThanOrEqual = (int)$jsonObject->parsedAtLessThanOrEqual;
		if(!is_null($xml) && count($xml->statusEqual))
			$this->statusEqual = (int)$xml->statusEqual;
		if(!is_null($jsonObject) && isset($jsonObject->statusEqual))
			$this->statusEqual = (int)$jsonObject->statusEqual;
		if(!is_null($xml) && count($xml->statusIn))
			$this->statusIn = (string)$xml->statusIn;
		if(!is_null($jsonObject) && isset($jsonObject->statusIn))
			$this->statusIn = (string)$jsonObject->statusIn;
		if(!is_null($xml) && count($xml->auditObjectTypeEqual))
			$this->auditObjectTypeEqual = (string)$xml->auditObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->auditObjectTypeEqual))
			$this->auditObjectTypeEqual = (string)$jsonObject->auditObjectTypeEqual;
		if(!is_null($xml) && count($xml->auditObjectTypeIn))
			$this->auditObjectTypeIn = (string)$xml->auditObjectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->auditObjectTypeIn))
			$this->auditObjectTypeIn = (string)$jsonObject->auditObjectTypeIn;
		if(!is_null($xml) && count($xml->objectIdEqual))
			$this->objectIdEqual = (string)$xml->objectIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdEqual))
			$this->objectIdEqual = (string)$jsonObject->objectIdEqual;
		if(!is_null($xml) && count($xml->objectIdIn))
			$this->objectIdIn = (string)$xml->objectIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->objectIdIn))
			$this->objectIdIn = (string)$jsonObject->objectIdIn;
		if(!is_null($xml) && count($xml->relatedObjectIdEqual))
			$this->relatedObjectIdEqual = (string)$xml->relatedObjectIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectIdEqual))
			$this->relatedObjectIdEqual = (string)$jsonObject->relatedObjectIdEqual;
		if(!is_null($xml) && count($xml->relatedObjectIdIn))
			$this->relatedObjectIdIn = (string)$xml->relatedObjectIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectIdIn))
			$this->relatedObjectIdIn = (string)$jsonObject->relatedObjectIdIn;
		if(!is_null($xml) && count($xml->relatedObjectTypeEqual))
			$this->relatedObjectTypeEqual = (string)$xml->relatedObjectTypeEqual;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectTypeEqual))
			$this->relatedObjectTypeEqual = (string)$jsonObject->relatedObjectTypeEqual;
		if(!is_null($xml) && count($xml->relatedObjectTypeIn))
			$this->relatedObjectTypeIn = (string)$xml->relatedObjectTypeIn;
		if(!is_null($jsonObject) && isset($jsonObject->relatedObjectTypeIn))
			$this->relatedObjectTypeIn = (string)$jsonObject->relatedObjectTypeIn;
		if(!is_null($xml) && count($xml->entryIdEqual))
			$this->entryIdEqual = (string)$xml->entryIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdEqual))
			$this->entryIdEqual = (string)$jsonObject->entryIdEqual;
		if(!is_null($xml) && count($xml->entryIdIn))
			$this->entryIdIn = (string)$xml->entryIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryIdIn))
			$this->entryIdIn = (string)$jsonObject->entryIdIn;
		if(!is_null($xml) && count($xml->masterPartnerIdEqual))
			$this->masterPartnerIdEqual = (int)$xml->masterPartnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->masterPartnerIdEqual))
			$this->masterPartnerIdEqual = (int)$jsonObject->masterPartnerIdEqual;
		if(!is_null($xml) && count($xml->masterPartnerIdIn))
			$this->masterPartnerIdIn = (string)$xml->masterPartnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->masterPartnerIdIn))
			$this->masterPartnerIdIn = (string)$jsonObject->masterPartnerIdIn;
		if(!is_null($xml) && count($xml->partnerIdEqual))
			$this->partnerIdEqual = (int)$xml->partnerIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdEqual))
			$this->partnerIdEqual = (int)$jsonObject->partnerIdEqual;
		if(!is_null($xml) && count($xml->partnerIdIn))
			$this->partnerIdIn = (string)$xml->partnerIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->partnerIdIn))
			$this->partnerIdIn = (string)$jsonObject->partnerIdIn;
		if(!is_null($xml) && count($xml->requestIdEqual))
			$this->requestIdEqual = (string)$xml->requestIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->requestIdEqual))
			$this->requestIdEqual = (string)$jsonObject->requestIdEqual;
		if(!is_null($xml) && count($xml->requestIdIn))
			$this->requestIdIn = (string)$xml->requestIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->requestIdIn))
			$this->requestIdIn = (string)$jsonObject->requestIdIn;
		if(!is_null($xml) && count($xml->userIdEqual))
			$this->userIdEqual = (string)$xml->userIdEqual;
		if(!is_null($jsonObject) && isset($jsonObject->userIdEqual))
			$this->userIdEqual = (string)$jsonObject->userIdEqual;
		if(!is_null($xml) && count($xml->userIdIn))
			$this->userIdIn = (string)$xml->userIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->userIdIn))
			$this->userIdIn = (string)$jsonObject->userIdIn;
		if(!is_null($xml) && count($xml->actionEqual))
			$this->actionEqual = (string)$xml->actionEqual;
		if(!is_null($jsonObject) && isset($jsonObject->actionEqual))
			$this->actionEqual = (string)$jsonObject->actionEqual;
		if(!is_null($xml) && count($xml->actionIn))
			$this->actionIn = (string)$xml->actionIn;
		if(!is_null($jsonObject) && isset($jsonObject->actionIn))
			$this->actionIn = (string)$jsonObject->actionIn;
		if(!is_null($xml) && count($xml->ksEqual))
			$this->ksEqual = (string)$xml->ksEqual;
		if(!is_null($jsonObject) && isset($jsonObject->ksEqual))
			$this->ksEqual = (string)$jsonObject->ksEqual;
		if(!is_null($xml) && count($xml->contextEqual))
			$this->contextEqual = (int)$xml->contextEqual;
		if(!is_null($jsonObject) && isset($jsonObject->contextEqual))
			$this->contextEqual = (int)$jsonObject->contextEqual;
		if(!is_null($xml) && count($xml->contextIn))
			$this->contextIn = (string)$xml->contextIn;
		if(!is_null($jsonObject) && isset($jsonObject->contextIn))
			$this->contextIn = (string)$jsonObject->contextIn;
		if(!is_null($xml) && count($xml->entryPointEqual))
			$this->entryPointEqual = (string)$xml->entryPointEqual;
		if(!is_null($jsonObject) && isset($jsonObject->entryPointEqual))
			$this->entryPointEqual = (string)$jsonObject->entryPointEqual;
		if(!is_null($xml) && count($xml->entryPointIn))
			$this->entryPointIn = (string)$xml->entryPointIn;
		if(!is_null($jsonObject) && isset($jsonObject->entryPointIn))
			$this->entryPointIn = (string)$jsonObject->entryPointIn;
		if(!is_null($xml) && count($xml->serverNameEqual))
			$this->serverNameEqual = (string)$xml->serverNameEqual;
		if(!is_null($jsonObject) && isset($jsonObject->serverNameEqual))
			$this->serverNameEqual = (string)$jsonObject->serverNameEqual;
		if(!is_null($xml) && count($xml->serverNameIn))
			$this->serverNameIn = (string)$xml->serverNameIn;
		if(!is_null($jsonObject) && isset($jsonObject->serverNameIn))
			$this->serverNameIn = (string)$jsonObject->serverNameIn;
		if(!is_null($xml) && count($xml->ipAddressEqual))
			$this->ipAddressEqual = (string)$xml->ipAddressEqual;
		if(!is_null($jsonObject) && isset($jsonObject->ipAddressEqual))
			$this->ipAddressEqual = (string)$jsonObject->ipAddressEqual;
		if(!is_null($xml) && count($xml->ipAddressIn))
			$this->ipAddressIn = (string)$xml->ipAddressIn;
		if(!is_null($jsonObject) && isset($jsonObject->ipAddressIn))
			$this->ipAddressIn = (string)$jsonObject->ipAddressIn;
		if(!is_null($xml) && count($xml->clientTagEqual))
			$this->clientTagEqual = (string)$xml->clientTagEqual;
		if(!is_null($jsonObject) && isset($jsonObject->clientTagEqual))
			$this->clientTagEqual = (string)$jsonObject->clientTagEqual;
	}
	/**
	 * 
	 *
	 * @var int
	 */
	public $idEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $createdAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $parsedAtGreaterThanOrEqual = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $parsedAtLessThanOrEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailStatus
	 */
	public $statusEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $statusIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailObjectType
	 */
	public $auditObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $auditObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectIdIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailObjectType
	 */
	public $relatedObjectTypeEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $relatedObjectTypeIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $masterPartnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $masterPartnerIdIn = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $partnerIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $partnerIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $requestIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $requestIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $userIdIn = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailAction
	 */
	public $actionEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $actionIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ksEqual = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Audit_Enum_AuditTrailContext
	 */
	public $contextEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contextIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryPointEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $entryPointIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverNameEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $serverNameIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ipAddressEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $ipAddressIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $clientTagEqual = null;


}

