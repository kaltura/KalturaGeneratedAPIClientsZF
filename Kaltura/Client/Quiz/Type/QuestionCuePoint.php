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
class Kaltura_Client_Quiz_Type_QuestionCuePoint extends Kaltura_Client_CuePoint_Type_CuePoint
{
	public function getKalturaObjectType()
	{
		return 'KalturaQuestionCuePoint';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->optionalAnswers))
		{
			if(empty($xml->optionalAnswers))
				$this->optionalAnswers = array();
			else
				$this->optionalAnswers = Kaltura_Client_ParseUtils::unmarshalArray($xml->optionalAnswers, "KalturaOptionalAnswer");
		}
		if(!is_null($jsonObject) && isset($jsonObject->optionalAnswers))
		{
			if(empty($jsonObject->optionalAnswers))
				$this->optionalAnswers = array();
			else
				$this->optionalAnswers = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->optionalAnswers, "KalturaOptionalAnswer");
		}
		if(!is_null($xml) && count($xml->hint))
			$this->hint = (string)$xml->hint;
		if(!is_null($jsonObject) && isset($jsonObject->hint))
			$this->hint = (string)$jsonObject->hint;
		if(!is_null($xml) && count($xml->question))
			$this->question = (string)$xml->question;
		if(!is_null($jsonObject) && isset($jsonObject->question))
			$this->question = (string)$jsonObject->question;
		if(!is_null($xml) && count($xml->explanation))
			$this->explanation = (string)$xml->explanation;
		if(!is_null($jsonObject) && isset($jsonObject->explanation))
			$this->explanation = (string)$jsonObject->explanation;
		if(!is_null($xml) && count($xml->questionType))
			$this->questionType = (int)$xml->questionType;
		if(!is_null($jsonObject) && isset($jsonObject->questionType))
			$this->questionType = (int)$jsonObject->questionType;
		if(!is_null($xml) && count($xml->presentationOrder))
			$this->presentationOrder = (int)$xml->presentationOrder;
		if(!is_null($jsonObject) && isset($jsonObject->presentationOrder))
			$this->presentationOrder = (int)$jsonObject->presentationOrder;
		if(!is_null($xml) && count($xml->excludeFromScore))
			$this->excludeFromScore = (int)$xml->excludeFromScore;
		if(!is_null($jsonObject) && isset($jsonObject->excludeFromScore))
			$this->excludeFromScore = (int)$jsonObject->excludeFromScore;
	}
	/**
	 * Array of key value answerKey->optionAnswer objects
	 *
	 * @var array of KalturaOptionalAnswer
	 */
	public $optionalAnswers;

	/**
	 * 
	 *
	 * @var string
	 */
	public $hint = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $question = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $explanation = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_CuePoint_Enum_QuestionType
	 */
	public $questionType = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $presentationOrder = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $excludeFromScore = null;


}

