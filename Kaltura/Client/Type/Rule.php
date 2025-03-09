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
class Kaltura_Client_Type_Rule extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaRule';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->description))
			$this->description = (string)$xml->description;
		if(!is_null($jsonObject) && isset($jsonObject->description))
			$this->description = (string)$jsonObject->description;
		if(!is_null($xml) && count($xml->ruleData))
			$this->ruleData = (string)$xml->ruleData;
		if(!is_null($jsonObject) && isset($jsonObject->ruleData))
			$this->ruleData = (string)$jsonObject->ruleData;
		if(!is_null($xml) && count($xml->message))
			$this->message = (string)$xml->message;
		if(!is_null($jsonObject) && isset($jsonObject->message))
			$this->message = (string)$jsonObject->message;
		if(!is_null($xml) && count($xml->code))
			$this->code = (string)$xml->code;
		if(!is_null($jsonObject) && isset($jsonObject->code))
			$this->code = (string)$jsonObject->code;
		if(!is_null($xml) && count($xml->actions))
		{
			if(empty($xml->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::unmarshalArray($xml->actions, "KalturaRuleAction");
		}
		if(!is_null($jsonObject) && isset($jsonObject->actions))
		{
			if(empty($jsonObject->actions))
				$this->actions = array();
			else
				$this->actions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->actions, "KalturaRuleAction");
		}
		if(!is_null($xml) && count($xml->conditions))
		{
			if(empty($xml->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::unmarshalArray($xml->conditions, "KalturaCondition");
		}
		if(!is_null($jsonObject) && isset($jsonObject->conditions))
		{
			if(empty($jsonObject->conditions))
				$this->conditions = array();
			else
				$this->conditions = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->conditions, "KalturaCondition");
		}
		if(!is_null($xml) && count($xml->contexts))
		{
			if(empty($xml->contexts))
				$this->contexts = array();
			else
				$this->contexts = Kaltura_Client_ParseUtils::unmarshalArray($xml->contexts, "KalturaContextTypeHolder");
		}
		if(!is_null($jsonObject) && isset($jsonObject->contexts))
		{
			if(empty($jsonObject->contexts))
				$this->contexts = array();
			else
				$this->contexts = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->contexts, "KalturaContextTypeHolder");
		}
		if(!is_null($xml) && count($xml->stopProcessing))
		{
			if(!empty($xml->stopProcessing) && ((int) $xml->stopProcessing === 1 || strtolower((string)$xml->stopProcessing) === 'true'))
				$this->stopProcessing = true;
			else
				$this->stopProcessing = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->stopProcessing))
		{
			if(!empty($jsonObject->stopProcessing) && ((int) $jsonObject->stopProcessing === 1 || strtolower((string)$jsonObject->stopProcessing) === 'true'))
				$this->stopProcessing = true;
			else
				$this->stopProcessing = false;
		}
		if(!is_null($xml) && count($xml->forceAdminValidation))
			$this->forceAdminValidation = (int)$xml->forceAdminValidation;
		if(!is_null($jsonObject) && isset($jsonObject->forceAdminValidation))
			$this->forceAdminValidation = (int)$jsonObject->forceAdminValidation;
	}
	/**
	 * Short Rule Description
	 *
	 * @var string
	 */
	public $description = null;

	/**
	 * Rule Custom Data to allow saving rule specific information
	 *
	 * @var string
	 */
	public $ruleData = null;

	/**
	 * Message to be thrown to the player in case the rule is fulfilled
	 *
	 * @var string
	 */
	public $message = null;

	/**
	 * Code to be thrown to the player in case the rule is fulfilled
	 *
	 * @var string
	 */
	public $code = null;

	/**
	 * Actions to be performed by the player in case the rule is fulfilled
	 *
	 * @var Kaltura_Client_Type_RuleAction[]
	 */
	public $actions;

	/**
	 * Conditions to validate the rule
	 *
	 * @var Kaltura_Client_Type_Condition[]
	 */
	public $conditions;

	/**
	 * Indicates what contexts should be tested by this rule
	 *
	 * @var Kaltura_Client_Type_ContextTypeHolder[]
	 */
	public $contexts;

	/**
	 * Indicates that this rule is enough and no need to continue checking the rest of the rules
	 *
	 * @var bool
	 */
	public $stopProcessing = null;

	/**
	 * Indicates if we should force ks validation for admin ks users as well
	 *
	 * @var Kaltura_Client_Enum_NullableBoolean
	 */
	public $forceAdminValidation = null;


}

