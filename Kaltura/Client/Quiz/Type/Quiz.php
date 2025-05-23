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
class Kaltura_Client_Quiz_Type_Quiz extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaQuiz';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->version))
			$this->version = (int)$xml->version;
		if(!is_null($jsonObject) && isset($jsonObject->version))
			$this->version = (int)$jsonObject->version;
		if(!is_null($xml) && count($xml->uiAttributes))
		{
			if(empty($xml->uiAttributes))
				$this->uiAttributes = array();
			else
				$this->uiAttributes = Kaltura_Client_ParseUtils::unmarshalArray($xml->uiAttributes, "KalturaKeyValue");
		}
		if(!is_null($jsonObject) && isset($jsonObject->uiAttributes))
		{
			if(empty($jsonObject->uiAttributes))
				$this->uiAttributes = array();
			else
				$this->uiAttributes = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->uiAttributes, "KalturaKeyValue");
		}
		if(!is_null($xml) && count($xml->showResultOnAnswer))
			$this->showResultOnAnswer = (int)$xml->showResultOnAnswer;
		if(!is_null($jsonObject) && isset($jsonObject->showResultOnAnswer))
			$this->showResultOnAnswer = (int)$jsonObject->showResultOnAnswer;
		if(!is_null($xml) && count($xml->showCorrectKeyOnAnswer))
			$this->showCorrectKeyOnAnswer = (int)$xml->showCorrectKeyOnAnswer;
		if(!is_null($jsonObject) && isset($jsonObject->showCorrectKeyOnAnswer))
			$this->showCorrectKeyOnAnswer = (int)$jsonObject->showCorrectKeyOnAnswer;
		if(!is_null($xml) && count($xml->allowAnswerUpdate))
			$this->allowAnswerUpdate = (int)$xml->allowAnswerUpdate;
		if(!is_null($jsonObject) && isset($jsonObject->allowAnswerUpdate))
			$this->allowAnswerUpdate = (int)$jsonObject->allowAnswerUpdate;
		if(!is_null($xml) && count($xml->showCorrectAfterSubmission))
			$this->showCorrectAfterSubmission = (int)$xml->showCorrectAfterSubmission;
		if(!is_null($jsonObject) && isset($jsonObject->showCorrectAfterSubmission))
			$this->showCorrectAfterSubmission = (int)$jsonObject->showCorrectAfterSubmission;
		if(!is_null($xml) && count($xml->allowDownload))
			$this->allowDownload = (int)$xml->allowDownload;
		if(!is_null($jsonObject) && isset($jsonObject->allowDownload))
			$this->allowDownload = (int)$jsonObject->allowDownload;
		if(!is_null($xml) && count($xml->showGradeAfterSubmission))
			$this->showGradeAfterSubmission = (int)$xml->showGradeAfterSubmission;
		if(!is_null($jsonObject) && isset($jsonObject->showGradeAfterSubmission))
			$this->showGradeAfterSubmission = (int)$jsonObject->showGradeAfterSubmission;
		if(!is_null($xml) && count($xml->attemptsAllowed))
			$this->attemptsAllowed = (int)$xml->attemptsAllowed;
		if(!is_null($jsonObject) && isset($jsonObject->attemptsAllowed))
			$this->attemptsAllowed = (int)$jsonObject->attemptsAllowed;
		if(!is_null($xml) && count($xml->scoreType))
			$this->scoreType = (int)$xml->scoreType;
		if(!is_null($jsonObject) && isset($jsonObject->scoreType))
			$this->scoreType = (int)$jsonObject->scoreType;
	}
	/**
	 * 
	 *
	 * @var int
	 * @readonly
	 */
	public $version = null;

	/**
	 * Array of key value ui related objects
	 *
	 * @var Kaltura_Client_Type_KeyValue[]
	 */
	public $uiAttributes;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $showResultOnAnswer = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $showCorrectKeyOnAnswer = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $allowAnswerUpdate = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $showCorrectAfterSubmission = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $allowDownload = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $showGradeAfterSubmission = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $attemptsAllowed = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_CuePoint_Enum_ScoreType
	 */
	public $scoreType = null;


}

