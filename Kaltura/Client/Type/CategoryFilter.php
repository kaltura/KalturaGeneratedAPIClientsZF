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
class Kaltura_Client_Type_CategoryFilter extends Kaltura_Client_Type_CategoryBaseFilter
{
	public function getKalturaObjectType()
	{
		return 'KalturaCategoryFilter';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->freeText))
			$this->freeText = (string)$xml->freeText;
		if(!is_null($jsonObject) && isset($jsonObject->freeText))
			$this->freeText = (string)$jsonObject->freeText;
		if(!is_null($xml) && count($xml->membersIn))
			$this->membersIn = (string)$xml->membersIn;
		if(!is_null($jsonObject) && isset($jsonObject->membersIn))
			$this->membersIn = (string)$jsonObject->membersIn;
		if(!is_null($xml) && count($xml->nameOrReferenceIdStartsWith))
			$this->nameOrReferenceIdStartsWith = (string)$xml->nameOrReferenceIdStartsWith;
		if(!is_null($jsonObject) && isset($jsonObject->nameOrReferenceIdStartsWith))
			$this->nameOrReferenceIdStartsWith = (string)$jsonObject->nameOrReferenceIdStartsWith;
		if(!is_null($xml) && count($xml->managerEqual))
			$this->managerEqual = (string)$xml->managerEqual;
		if(!is_null($jsonObject) && isset($jsonObject->managerEqual))
			$this->managerEqual = (string)$jsonObject->managerEqual;
		if(!is_null($xml) && count($xml->memberEqual))
			$this->memberEqual = (string)$xml->memberEqual;
		if(!is_null($jsonObject) && isset($jsonObject->memberEqual))
			$this->memberEqual = (string)$jsonObject->memberEqual;
		if(!is_null($xml) && count($xml->fullNameStartsWithIn))
			$this->fullNameStartsWithIn = (string)$xml->fullNameStartsWithIn;
		if(!is_null($jsonObject) && isset($jsonObject->fullNameStartsWithIn))
			$this->fullNameStartsWithIn = (string)$jsonObject->fullNameStartsWithIn;
		if(!is_null($xml) && count($xml->ancestorIdIn))
			$this->ancestorIdIn = (string)$xml->ancestorIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->ancestorIdIn))
			$this->ancestorIdIn = (string)$jsonObject->ancestorIdIn;
		if(!is_null($xml) && count($xml->idOrInheritedParentIdIn))
			$this->idOrInheritedParentIdIn = (string)$xml->idOrInheritedParentIdIn;
		if(!is_null($jsonObject) && isset($jsonObject->idOrInheritedParentIdIn))
			$this->idOrInheritedParentIdIn = (string)$jsonObject->idOrInheritedParentIdIn;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $freeText = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $membersIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $nameOrReferenceIdStartsWith = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $managerEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $memberEqual = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $fullNameStartsWithIn = null;

	/**
	 * not includes the category itself (only sub categories)
	 *
	 * @var string
	 */
	public $ancestorIdIn = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $idOrInheritedParentIdIn = null;


}

