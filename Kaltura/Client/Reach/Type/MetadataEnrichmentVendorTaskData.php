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
class Kaltura_Client_Reach_Type_MetadataEnrichmentVendorTaskData extends Kaltura_Client_Reach_Type_LocalizedVendorTaskData
{
	public function getKalturaObjectType()
	{
		return 'KalturaMetadataEnrichmentVendorTaskData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->detailLevel))
			$this->detailLevel = (string)$xml->detailLevel;
		if(!is_null($jsonObject) && isset($jsonObject->detailLevel))
			$this->detailLevel = (string)$jsonObject->detailLevel;
		if(!is_null($xml) && count($xml->instruction))
			$this->instruction = (string)$xml->instruction;
		if(!is_null($jsonObject) && isset($jsonObject->instruction))
			$this->instruction = (string)$jsonObject->instruction;
		if(!is_null($xml) && count($xml->shouldApply))
		{
			if(!empty($xml->shouldApply) && ((int) $xml->shouldApply === 1 || strtolower((string)$xml->shouldApply) === 'true'))
				$this->shouldApply = true;
			else
				$this->shouldApply = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->shouldApply))
		{
			if(!empty($jsonObject->shouldApply) && ((int) $jsonObject->shouldApply === 1 || strtolower((string)$jsonObject->shouldApply) === 'true'))
				$this->shouldApply = true;
			else
				$this->shouldApply = false;
		}
		if(!is_null($xml) && count($xml->applyMode))
			$this->applyMode = (string)$xml->applyMode;
		if(!is_null($jsonObject) && isset($jsonObject->applyMode))
			$this->applyMode = (string)$jsonObject->applyMode;
		if(!is_null($xml) && count($xml->overrideFields))
		{
			if(empty($xml->overrideFields))
				$this->overrideFields = array();
			else
				$this->overrideFields = Kaltura_Client_ParseUtils::unmarshalArray($xml->overrideFields, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->overrideFields))
		{
			if(empty($jsonObject->overrideFields))
				$this->overrideFields = array();
			else
				$this->overrideFields = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->overrideFields, "KalturaString");
		}
	}
	/**
	 * The level of detail for the metadata enrichment process.
	 *
	 * @var string
	 * @insertonly
	 */
	public $detailLevel = null;

	/**
	 * Instructions describing what should be taken into account during the metadata enrichment process.
	 *
	 * @var string
	 * @insertonly
	 */
	public $instruction = null;

	/**
	 * Indicates whether the metadata enrichment results should be automatically applied on the task entry.
	 * 	 Default is false.
	 *
	 * @var bool
	 */
	public $shouldApply = null;

	/**
	 * Specifies how metadata fields should be applied during enrichment.
	 * 	 If 'FILL_EMPTY_AND_OVERRIDE_LIST', use overrideFields to specify which fields to override.
	 *
	 * @var Kaltura_Client_Reach_Enum_MetadataEnrichmentApplyMode
	 */
	public $applyMode = null;

	/**
	 * List of entry fields to override when applyMode is set to 'FILL_EMPTY_AND_OVERRIDE_LIST'.
	 *
	 * @var Kaltura_Client_Type_String[]
	 */
	public $overrideFields;


}

