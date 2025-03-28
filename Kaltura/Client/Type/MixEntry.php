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
class Kaltura_Client_Type_MixEntry extends Kaltura_Client_Type_PlayableEntry
{
	public function getKalturaObjectType()
	{
		return 'KalturaMixEntry';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->hasRealThumbnail))
		{
			if(!empty($xml->hasRealThumbnail) && ((int) $xml->hasRealThumbnail === 1 || strtolower((string)$xml->hasRealThumbnail) === 'true'))
				$this->hasRealThumbnail = true;
			else
				$this->hasRealThumbnail = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->hasRealThumbnail))
		{
			if(!empty($jsonObject->hasRealThumbnail) && ((int) $jsonObject->hasRealThumbnail === 1 || strtolower((string)$jsonObject->hasRealThumbnail) === 'true'))
				$this->hasRealThumbnail = true;
			else
				$this->hasRealThumbnail = false;
		}
		if(!is_null($xml) && count($xml->editorType))
			$this->editorType = (int)$xml->editorType;
		if(!is_null($jsonObject) && isset($jsonObject->editorType))
			$this->editorType = (int)$jsonObject->editorType;
		if(!is_null($xml) && count($xml->dataContent))
			$this->dataContent = (string)$xml->dataContent;
		if(!is_null($jsonObject) && isset($jsonObject->dataContent))
			$this->dataContent = (string)$jsonObject->dataContent;
	}
	/**
	 * Indicates whether the user has submited a real thumbnail to the mix (Not the one that was generated automaticaly)
	 *
	 * @var bool
	 * @readonly
	 */
	public $hasRealThumbnail = null;

	/**
	 * The editor type used to edit the metadata
	 *
	 * @var Kaltura_Client_Enum_EditorType
	 */
	public $editorType = null;

	/**
	 * The xml data of the mix
	 *
	 * @var string
	 */
	public $dataContent = null;


}

