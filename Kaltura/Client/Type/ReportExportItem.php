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
class Kaltura_Client_Type_ReportExportItem extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaReportExportItem';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->reportTitle))
			$this->reportTitle = (string)$xml->reportTitle;
		if(!is_null($jsonObject) && isset($jsonObject->reportTitle))
			$this->reportTitle = (string)$jsonObject->reportTitle;
		if(!is_null($xml) && count($xml->action))
			$this->action = (int)$xml->action;
		if(!is_null($jsonObject) && isset($jsonObject->action))
			$this->action = (int)$jsonObject->action;
		if(!is_null($xml) && count($xml->reportType))
			$this->reportType = (string)$xml->reportType;
		if(!is_null($jsonObject) && isset($jsonObject->reportType))
			$this->reportType = (string)$jsonObject->reportType;
		if(!is_null($xml) && count($xml->filter) && !empty($xml->filter))
			$this->filter = Kaltura_Client_ParseUtils::unmarshalObject($xml->filter, "KalturaReportInputFilter");
		if(!is_null($jsonObject) && isset($jsonObject->filter) && !empty($jsonObject->filter))
			$this->filter = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->filter, "KalturaReportInputFilter");
		if(!is_null($xml) && count($xml->order))
			$this->order = (string)$xml->order;
		if(!is_null($jsonObject) && isset($jsonObject->order))
			$this->order = (string)$jsonObject->order;
		if(!is_null($xml) && count($xml->objectIds))
			$this->objectIds = (string)$xml->objectIds;
		if(!is_null($jsonObject) && isset($jsonObject->objectIds))
			$this->objectIds = (string)$jsonObject->objectIds;
		if(!is_null($xml) && count($xml->responseOptions) && !empty($xml->responseOptions))
			$this->responseOptions = Kaltura_Client_ParseUtils::unmarshalObject($xml->responseOptions, "KalturaReportResponseOptions");
		if(!is_null($jsonObject) && isset($jsonObject->responseOptions) && !empty($jsonObject->responseOptions))
			$this->responseOptions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->responseOptions, "KalturaReportResponseOptions");
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $reportTitle = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ReportExportItemType
	 */
	public $action = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_ReportType
	 */
	public $reportType = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ReportInputFilter
	 */
	public $filter;

	/**
	 * 
	 *
	 * @var string
	 */
	public $order = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $objectIds = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Type_ReportResponseOptions
	 */
	public $responseOptions;


}

