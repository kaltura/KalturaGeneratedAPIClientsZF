<?php
// ===================================================================================================
//                           _  __     _ _
//                          | |/ /__ _| | |_ _  _ _ _ __ _
//                          | ' </ _` | |  _| || | '_/ _` |
//                          |_|\_\__,_|_|\__|\_,_|_| \__,_|
//
// This file is part of the Kaltura Collaborative Media Suite which allows users
// to do with audio, video, and animation what Wiki platfroms allow them to do with
// text.
//
// Copyright (C) 2006-2021  Kaltura Inc.
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
	
	public function __construct(SimpleXMLElement $xml = null)
	{
		parent::__construct($xml);
		
		if(is_null($xml))
			return;
		
		if(count($xml->optionalAnswers))
		{
			if(empty($xml->optionalAnswers))
				$this->optionalAnswers = array();
			else
				$this->optionalAnswers = Kaltura_Client_ParseUtils::unmarshalArray($xml->optionalAnswers, "KalturaOptionalAnswer");
		}
		if(count($xml->hint))
			$this->hint = (string)$xml->hint;
		if(count($xml->question))
			$this->question = (string)$xml->question;
		if(count($xml->explanation))
			$this->explanation = (string)$xml->explanation;
		if(count($xml->questionType))
			$this->questionType = (int)$xml->questionType;
		if(count($xml->presentationOrder))
			$this->presentationOrder = (int)$xml->presentationOrder;
		if(count($xml->excludeFromScore))
			$this->excludeFromScore = (int)$xml->excludeFromScore;
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

