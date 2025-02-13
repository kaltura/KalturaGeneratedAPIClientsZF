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
class Kaltura_Client_ContentDistribution_Type_GenericDistributionProfile extends Kaltura_Client_ContentDistribution_Type_DistributionProfile
{
	public function getKalturaObjectType()
	{
		return 'KalturaGenericDistributionProfile';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->genericProviderId))
			$this->genericProviderId = (int)$xml->genericProviderId;
		if(!is_null($jsonObject) && isset($jsonObject->genericProviderId))
			$this->genericProviderId = (int)$jsonObject->genericProviderId;
		if(!is_null($xml) && count($xml->submitAction) && !empty($xml->submitAction))
			$this->submitAction = Kaltura_Client_ParseUtils::unmarshalObject($xml->submitAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($jsonObject) && isset($jsonObject->submitAction) && !empty($jsonObject->submitAction))
			$this->submitAction = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->submitAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($xml) && count($xml->updateAction) && !empty($xml->updateAction))
			$this->updateAction = Kaltura_Client_ParseUtils::unmarshalObject($xml->updateAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($jsonObject) && isset($jsonObject->updateAction) && !empty($jsonObject->updateAction))
			$this->updateAction = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->updateAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($xml) && count($xml->deleteAction) && !empty($xml->deleteAction))
			$this->deleteAction = Kaltura_Client_ParseUtils::unmarshalObject($xml->deleteAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($jsonObject) && isset($jsonObject->deleteAction) && !empty($jsonObject->deleteAction))
			$this->deleteAction = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->deleteAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($xml) && count($xml->fetchReportAction) && !empty($xml->fetchReportAction))
			$this->fetchReportAction = Kaltura_Client_ParseUtils::unmarshalObject($xml->fetchReportAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($jsonObject) && isset($jsonObject->fetchReportAction) && !empty($jsonObject->fetchReportAction))
			$this->fetchReportAction = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->fetchReportAction, "KalturaGenericDistributionProfileAction");
		if(!is_null($xml) && count($xml->updateRequiredEntryFields))
			$this->updateRequiredEntryFields = (string)$xml->updateRequiredEntryFields;
		if(!is_null($jsonObject) && isset($jsonObject->updateRequiredEntryFields))
			$this->updateRequiredEntryFields = (string)$jsonObject->updateRequiredEntryFields;
		if(!is_null($xml) && count($xml->updateRequiredMetadataXPaths))
			$this->updateRequiredMetadataXPaths = (string)$xml->updateRequiredMetadataXPaths;
		if(!is_null($jsonObject) && isset($jsonObject->updateRequiredMetadataXPaths))
			$this->updateRequiredMetadataXPaths = (string)$jsonObject->updateRequiredMetadataXPaths;
	}
	/**
	 * 
	 *
	 * @var int
	 * @insertonly
	 */
	public $genericProviderId = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_GenericDistributionProfileAction
	 */
	public $submitAction;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_GenericDistributionProfileAction
	 */
	public $updateAction;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_GenericDistributionProfileAction
	 */
	public $deleteAction;

	/**
	 * 
	 *
	 * @var Kaltura_Client_ContentDistribution_Type_GenericDistributionProfileAction
	 */
	public $fetchReportAction;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredEntryFields = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $updateRequiredMetadataXPaths = null;


}

