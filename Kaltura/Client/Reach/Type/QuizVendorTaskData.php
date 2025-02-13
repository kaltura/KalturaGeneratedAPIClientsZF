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
class Kaltura_Client_Reach_Type_QuizVendorTaskData extends Kaltura_Client_Reach_Type_VendorTaskData
{
	public function getKalturaObjectType()
	{
		return 'KalturaQuizVendorTaskData';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->numberOfQuestions))
			$this->numberOfQuestions = (int)$xml->numberOfQuestions;
		if(!is_null($jsonObject) && isset($jsonObject->numberOfQuestions))
			$this->numberOfQuestions = (int)$jsonObject->numberOfQuestions;
		if(!is_null($xml) && count($xml->questionsType))
			$this->questionsType = (string)$xml->questionsType;
		if(!is_null($jsonObject) && isset($jsonObject->questionsType))
			$this->questionsType = (string)$jsonObject->questionsType;
		if(!is_null($xml) && count($xml->context))
			$this->context = (string)$xml->context;
		if(!is_null($jsonObject) && isset($jsonObject->context))
			$this->context = (string)$jsonObject->context;
		if(!is_null($xml) && count($xml->formalStyle))
			$this->formalStyle = (string)$xml->formalStyle;
		if(!is_null($jsonObject) && isset($jsonObject->formalStyle))
			$this->formalStyle = (string)$jsonObject->formalStyle;
		if(!is_null($xml) && count($xml->createQuiz))
		{
			if(!empty($xml->createQuiz) && ((int) $xml->createQuiz === 1 || strtolower((string)$xml->createQuiz) === 'true'))
				$this->createQuiz = true;
			else
				$this->createQuiz = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->createQuiz))
		{
			if(!empty($jsonObject->createQuiz) && ((int) $jsonObject->createQuiz === 1 || strtolower((string)$jsonObject->createQuiz) === 'true'))
				$this->createQuiz = true;
			else
				$this->createQuiz = false;
		}
		if(!is_null($xml) && count($xml->quizOutput))
			$this->quizOutput = (string)$xml->quizOutput;
		if(!is_null($jsonObject) && isset($jsonObject->quizOutput))
			$this->quizOutput = (string)$jsonObject->quizOutput;
	}
	/**
	 * Number Of Questions.
	 *
	 * @var int
	 */
	public $numberOfQuestions = null;

	/**
	 * Questions Type.
	 *
	 * @var string
	 */
	public $questionsType = null;

	/**
	 * Quiz Context.
	 *
	 * @var string
	 */
	public $context = null;

	/**
	 * Formal Style.
	 *
	 * @var string
	 */
	public $formalStyle = null;

	/**
	 * Create quiz flag.
	 *
	 * @var bool
	 */
	public $createQuiz = null;

	/**
	 * Quiz entry Id
	 *
	 * @var string
	 */
	public $quizOutput = null;


}

