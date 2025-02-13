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
class Kaltura_Client_Type_RenderCaptionAttributes extends Kaltura_Client_Type_CaptionAttributes
{
	public function getKalturaObjectType()
	{
		return 'KalturaRenderCaptionAttributes';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->fontName))
			$this->fontName = (string)$xml->fontName;
		if(!is_null($jsonObject) && isset($jsonObject->fontName))
			$this->fontName = (string)$jsonObject->fontName;
		if(!is_null($xml) && count($xml->fontSize))
			$this->fontSize = (int)$xml->fontSize;
		if(!is_null($jsonObject) && isset($jsonObject->fontSize))
			$this->fontSize = (int)$jsonObject->fontSize;
		if(!is_null($xml) && count($xml->primaryColour))
			$this->primaryColour = (string)$xml->primaryColour;
		if(!is_null($jsonObject) && isset($jsonObject->primaryColour))
			$this->primaryColour = (string)$jsonObject->primaryColour;
		if(!is_null($xml) && count($xml->borderStyle))
			$this->borderStyle = (int)$xml->borderStyle;
		if(!is_null($jsonObject) && isset($jsonObject->borderStyle))
			$this->borderStyle = (int)$jsonObject->borderStyle;
		if(!is_null($xml) && count($xml->backColour))
			$this->backColour = (string)$xml->backColour;
		if(!is_null($jsonObject) && isset($jsonObject->backColour))
			$this->backColour = (string)$jsonObject->backColour;
		if(!is_null($xml) && count($xml->outlineColour))
			$this->outlineColour = (string)$xml->outlineColour;
		if(!is_null($jsonObject) && isset($jsonObject->outlineColour))
			$this->outlineColour = (string)$jsonObject->outlineColour;
		if(!is_null($xml) && count($xml->shadow))
			$this->shadow = (int)$xml->shadow;
		if(!is_null($jsonObject) && isset($jsonObject->shadow))
			$this->shadow = (int)$jsonObject->shadow;
		if(!is_null($xml) && count($xml->bold))
		{
			if(!empty($xml->bold) && ((int) $xml->bold === 1 || strtolower((string)$xml->bold) === 'true'))
				$this->bold = true;
			else
				$this->bold = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->bold))
		{
			if(!empty($jsonObject->bold) && ((int) $jsonObject->bold === 1 || strtolower((string)$jsonObject->bold) === 'true'))
				$this->bold = true;
			else
				$this->bold = false;
		}
		if(!is_null($xml) && count($xml->italic))
		{
			if(!empty($xml->italic) && ((int) $xml->italic === 1 || strtolower((string)$xml->italic) === 'true'))
				$this->italic = true;
			else
				$this->italic = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->italic))
		{
			if(!empty($jsonObject->italic) && ((int) $jsonObject->italic === 1 || strtolower((string)$jsonObject->italic) === 'true'))
				$this->italic = true;
			else
				$this->italic = false;
		}
		if(!is_null($xml) && count($xml->underline))
		{
			if(!empty($xml->underline) && ((int) $xml->underline === 1 || strtolower((string)$xml->underline) === 'true'))
				$this->underline = true;
			else
				$this->underline = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->underline))
		{
			if(!empty($jsonObject->underline) && ((int) $jsonObject->underline === 1 || strtolower((string)$jsonObject->underline) === 'true'))
				$this->underline = true;
			else
				$this->underline = false;
		}
		if(!is_null($xml) && count($xml->alignment))
			$this->alignment = (int)$xml->alignment;
		if(!is_null($jsonObject) && isset($jsonObject->alignment))
			$this->alignment = (int)$jsonObject->alignment;
		if(!is_null($xml) && count($xml->captionAssetId))
			$this->captionAssetId = (string)$xml->captionAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->captionAssetId))
			$this->captionAssetId = (string)$jsonObject->captionAssetId;
	}
	/**
	 * 
	 *
	 * @var string
	 */
	public $fontName = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $fontSize = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $primaryColour = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_BorderStyle
	 */
	public $borderStyle = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $backColour = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $outlineColour = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $shadow = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $bold = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $italic = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $underline = null;

	/**
	 * 
	 *
	 * @var Kaltura_Client_Enum_CaptionsAlignment
	 */
	public $alignment = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $captionAssetId = null;


}

