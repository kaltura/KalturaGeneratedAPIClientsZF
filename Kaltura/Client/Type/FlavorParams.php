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
class Kaltura_Client_Type_FlavorParams extends Kaltura_Client_Type_AssetParams
{
	public function getKalturaObjectType()
	{
		return 'KalturaFlavorParams';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->videoCodec))
			$this->videoCodec = (string)$xml->videoCodec;
		if(!is_null($jsonObject) && isset($jsonObject->videoCodec))
			$this->videoCodec = (string)$jsonObject->videoCodec;
		if(!is_null($xml) && count($xml->videoBitrate))
			$this->videoBitrate = (int)$xml->videoBitrate;
		if(!is_null($jsonObject) && isset($jsonObject->videoBitrate))
			$this->videoBitrate = (int)$jsonObject->videoBitrate;
		if(!is_null($xml) && count($xml->audioCodec))
			$this->audioCodec = (string)$xml->audioCodec;
		if(!is_null($jsonObject) && isset($jsonObject->audioCodec))
			$this->audioCodec = (string)$jsonObject->audioCodec;
		if(!is_null($xml) && count($xml->audioBitrate))
			$this->audioBitrate = (int)$xml->audioBitrate;
		if(!is_null($jsonObject) && isset($jsonObject->audioBitrate))
			$this->audioBitrate = (int)$jsonObject->audioBitrate;
		if(!is_null($xml) && count($xml->audioChannels))
			$this->audioChannels = (int)$xml->audioChannels;
		if(!is_null($jsonObject) && isset($jsonObject->audioChannels))
			$this->audioChannels = (int)$jsonObject->audioChannels;
		if(!is_null($xml) && count($xml->audioSampleRate))
			$this->audioSampleRate = (int)$xml->audioSampleRate;
		if(!is_null($jsonObject) && isset($jsonObject->audioSampleRate))
			$this->audioSampleRate = (int)$jsonObject->audioSampleRate;
		if(!is_null($xml) && count($xml->width))
			$this->width = (int)$xml->width;
		if(!is_null($jsonObject) && isset($jsonObject->width))
			$this->width = (int)$jsonObject->width;
		if(!is_null($xml) && count($xml->height))
			$this->height = (int)$xml->height;
		if(!is_null($jsonObject) && isset($jsonObject->height))
			$this->height = (int)$jsonObject->height;
		if(!is_null($xml) && count($xml->frameRate))
			$this->frameRate = (float)$xml->frameRate;
		if(!is_null($jsonObject) && isset($jsonObject->frameRate))
			$this->frameRate = (float)$jsonObject->frameRate;
		if(!is_null($xml) && count($xml->gopSize))
			$this->gopSize = (int)$xml->gopSize;
		if(!is_null($jsonObject) && isset($jsonObject->gopSize))
			$this->gopSize = (int)$jsonObject->gopSize;
		if(!is_null($xml) && count($xml->conversionEngines))
			$this->conversionEngines = (string)$xml->conversionEngines;
		if(!is_null($jsonObject) && isset($jsonObject->conversionEngines))
			$this->conversionEngines = (string)$jsonObject->conversionEngines;
		if(!is_null($xml) && count($xml->conversionEnginesExtraParams))
			$this->conversionEnginesExtraParams = (string)$xml->conversionEnginesExtraParams;
		if(!is_null($jsonObject) && isset($jsonObject->conversionEnginesExtraParams))
			$this->conversionEnginesExtraParams = (string)$jsonObject->conversionEnginesExtraParams;
		if(!is_null($xml) && count($xml->twoPass))
		{
			if(!empty($xml->twoPass) && ((int) $xml->twoPass === 1 || strtolower((string)$xml->twoPass) === 'true'))
				$this->twoPass = true;
			else
				$this->twoPass = false;
		}
		if(!is_null($jsonObject) && isset($jsonObject->twoPass))
		{
			if(!empty($jsonObject->twoPass) && ((int) $jsonObject->twoPass === 1 || strtolower((string)$jsonObject->twoPass) === 'true'))
				$this->twoPass = true;
			else
				$this->twoPass = false;
		}
		if(!is_null($xml) && count($xml->deinterlice))
			$this->deinterlice = (int)$xml->deinterlice;
		if(!is_null($jsonObject) && isset($jsonObject->deinterlice))
			$this->deinterlice = (int)$jsonObject->deinterlice;
		if(!is_null($xml) && count($xml->rotate))
			$this->rotate = (int)$xml->rotate;
		if(!is_null($jsonObject) && isset($jsonObject->rotate))
			$this->rotate = (int)$jsonObject->rotate;
		if(!is_null($xml) && count($xml->operators))
			$this->operators = (string)$xml->operators;
		if(!is_null($jsonObject) && isset($jsonObject->operators))
			$this->operators = (string)$jsonObject->operators;
		if(!is_null($xml) && count($xml->engineVersion))
			$this->engineVersion = (int)$xml->engineVersion;
		if(!is_null($jsonObject) && isset($jsonObject->engineVersion))
			$this->engineVersion = (int)$jsonObject->engineVersion;
		if(!is_null($xml) && count($xml->format))
			$this->format = (string)$xml->format;
		if(!is_null($jsonObject) && isset($jsonObject->format))
			$this->format = (string)$jsonObject->format;
		if(!is_null($xml) && count($xml->aspectRatioProcessingMode))
			$this->aspectRatioProcessingMode = (int)$xml->aspectRatioProcessingMode;
		if(!is_null($jsonObject) && isset($jsonObject->aspectRatioProcessingMode))
			$this->aspectRatioProcessingMode = (int)$jsonObject->aspectRatioProcessingMode;
		if(!is_null($xml) && count($xml->forceFrameToMultiplication16))
			$this->forceFrameToMultiplication16 = (int)$xml->forceFrameToMultiplication16;
		if(!is_null($jsonObject) && isset($jsonObject->forceFrameToMultiplication16))
			$this->forceFrameToMultiplication16 = (int)$jsonObject->forceFrameToMultiplication16;
		if(!is_null($xml) && count($xml->isGopInSec))
			$this->isGopInSec = (int)$xml->isGopInSec;
		if(!is_null($jsonObject) && isset($jsonObject->isGopInSec))
			$this->isGopInSec = (int)$jsonObject->isGopInSec;
		if(!is_null($xml) && count($xml->isAvoidVideoShrinkFramesizeToSource))
			$this->isAvoidVideoShrinkFramesizeToSource = (int)$xml->isAvoidVideoShrinkFramesizeToSource;
		if(!is_null($jsonObject) && isset($jsonObject->isAvoidVideoShrinkFramesizeToSource))
			$this->isAvoidVideoShrinkFramesizeToSource = (int)$jsonObject->isAvoidVideoShrinkFramesizeToSource;
		if(!is_null($xml) && count($xml->isAvoidVideoShrinkBitrateToSource))
			$this->isAvoidVideoShrinkBitrateToSource = (int)$xml->isAvoidVideoShrinkBitrateToSource;
		if(!is_null($jsonObject) && isset($jsonObject->isAvoidVideoShrinkBitrateToSource))
			$this->isAvoidVideoShrinkBitrateToSource = (int)$jsonObject->isAvoidVideoShrinkBitrateToSource;
		if(!is_null($xml) && count($xml->isVideoFrameRateForLowBrAppleHls))
			$this->isVideoFrameRateForLowBrAppleHls = (int)$xml->isVideoFrameRateForLowBrAppleHls;
		if(!is_null($jsonObject) && isset($jsonObject->isVideoFrameRateForLowBrAppleHls))
			$this->isVideoFrameRateForLowBrAppleHls = (int)$jsonObject->isVideoFrameRateForLowBrAppleHls;
		if(!is_null($xml) && count($xml->multiStream))
			$this->multiStream = (string)$xml->multiStream;
		if(!is_null($jsonObject) && isset($jsonObject->multiStream))
			$this->multiStream = (string)$jsonObject->multiStream;
		if(!is_null($xml) && count($xml->anamorphicPixels))
			$this->anamorphicPixels = (float)$xml->anamorphicPixels;
		if(!is_null($jsonObject) && isset($jsonObject->anamorphicPixels))
			$this->anamorphicPixels = (float)$jsonObject->anamorphicPixels;
		if(!is_null($xml) && count($xml->isAvoidForcedKeyFrames))
			$this->isAvoidForcedKeyFrames = (int)$xml->isAvoidForcedKeyFrames;
		if(!is_null($jsonObject) && isset($jsonObject->isAvoidForcedKeyFrames))
			$this->isAvoidForcedKeyFrames = (int)$jsonObject->isAvoidForcedKeyFrames;
		if(!is_null($xml) && count($xml->forcedKeyFramesMode))
			$this->forcedKeyFramesMode = (int)$xml->forcedKeyFramesMode;
		if(!is_null($jsonObject) && isset($jsonObject->forcedKeyFramesMode))
			$this->forcedKeyFramesMode = (int)$jsonObject->forcedKeyFramesMode;
		if(!is_null($xml) && count($xml->isCropIMX))
			$this->isCropIMX = (int)$xml->isCropIMX;
		if(!is_null($jsonObject) && isset($jsonObject->isCropIMX))
			$this->isCropIMX = (int)$jsonObject->isCropIMX;
		if(!is_null($xml) && count($xml->optimizationPolicy))
			$this->optimizationPolicy = (int)$xml->optimizationPolicy;
		if(!is_null($jsonObject) && isset($jsonObject->optimizationPolicy))
			$this->optimizationPolicy = (int)$jsonObject->optimizationPolicy;
		if(!is_null($xml) && count($xml->maxFrameRate))
			$this->maxFrameRate = (int)$xml->maxFrameRate;
		if(!is_null($jsonObject) && isset($jsonObject->maxFrameRate))
			$this->maxFrameRate = (int)$jsonObject->maxFrameRate;
		if(!is_null($xml) && count($xml->videoConstantBitrate))
			$this->videoConstantBitrate = (int)$xml->videoConstantBitrate;
		if(!is_null($jsonObject) && isset($jsonObject->videoConstantBitrate))
			$this->videoConstantBitrate = (int)$jsonObject->videoConstantBitrate;
		if(!is_null($xml) && count($xml->videoBitrateTolerance))
			$this->videoBitrateTolerance = (int)$xml->videoBitrateTolerance;
		if(!is_null($jsonObject) && isset($jsonObject->videoBitrateTolerance))
			$this->videoBitrateTolerance = (int)$jsonObject->videoBitrateTolerance;
		if(!is_null($xml) && count($xml->watermarkData))
			$this->watermarkData = (string)$xml->watermarkData;
		if(!is_null($jsonObject) && isset($jsonObject->watermarkData))
			$this->watermarkData = (string)$jsonObject->watermarkData;
		if(!is_null($xml) && count($xml->subtitlesData))
			$this->subtitlesData = (string)$xml->subtitlesData;
		if(!is_null($jsonObject) && isset($jsonObject->subtitlesData))
			$this->subtitlesData = (string)$jsonObject->subtitlesData;
		if(!is_null($xml) && count($xml->cropData))
			$this->cropData = (string)$xml->cropData;
		if(!is_null($jsonObject) && isset($jsonObject->cropData))
			$this->cropData = (string)$jsonObject->cropData;
		if(!is_null($xml) && count($xml->isEncrypted))
			$this->isEncrypted = (int)$xml->isEncrypted;
		if(!is_null($jsonObject) && isset($jsonObject->isEncrypted))
			$this->isEncrypted = (int)$jsonObject->isEncrypted;
		if(!is_null($xml) && count($xml->contentAwareness))
			$this->contentAwareness = (float)$xml->contentAwareness;
		if(!is_null($jsonObject) && isset($jsonObject->contentAwareness))
			$this->contentAwareness = (float)$jsonObject->contentAwareness;
		if(!is_null($xml) && count($xml->chunkedEncodeMode))
			$this->chunkedEncodeMode = (int)$xml->chunkedEncodeMode;
		if(!is_null($jsonObject) && isset($jsonObject->chunkedEncodeMode))
			$this->chunkedEncodeMode = (int)$jsonObject->chunkedEncodeMode;
		if(!is_null($xml) && count($xml->clipOffset))
			$this->clipOffset = (int)$xml->clipOffset;
		if(!is_null($jsonObject) && isset($jsonObject->clipOffset))
			$this->clipOffset = (int)$jsonObject->clipOffset;
		if(!is_null($xml) && count($xml->clipDuration))
			$this->clipDuration = (int)$xml->clipDuration;
		if(!is_null($jsonObject) && isset($jsonObject->clipDuration))
			$this->clipDuration = (int)$jsonObject->clipDuration;
		if(!is_null($xml) && count($xml->audioLanguages))
		{
			if(empty($xml->audioLanguages))
				$this->audioLanguages = array();
			else
				$this->audioLanguages = Kaltura_Client_ParseUtils::unmarshalArray($xml->audioLanguages, "KalturaString");
		}
		if(!is_null($jsonObject) && isset($jsonObject->audioLanguages))
		{
			if(empty($jsonObject->audioLanguages))
				$this->audioLanguages = array();
			else
				$this->audioLanguages = Kaltura_Client_ParseUtils::jsObjectToClientObject($jsonObject->audioLanguages, "KalturaString");
		}
	}
	/**
	 * The video codec of the Flavor Params
	 *
	 * @var Kaltura_Client_Enum_VideoCodec
	 */
	public $videoCodec = null;

	/**
	 * The video bitrate (in KBits) of the Flavor Params
	 *
	 * @var int
	 */
	public $videoBitrate = null;

	/**
	 * The audio codec of the Flavor Params
	 *
	 * @var Kaltura_Client_Enum_AudioCodec
	 */
	public $audioCodec = null;

	/**
	 * The audio bitrate (in KBits) of the Flavor Params
	 *
	 * @var int
	 */
	public $audioBitrate = null;

	/**
	 * The number of audio channels for "downmixing"
	 *
	 * @var int
	 */
	public $audioChannels = null;

	/**
	 * The audio sample rate of the Flavor Params
	 *
	 * @var int
	 */
	public $audioSampleRate = null;

	/**
	 * The desired width of the Flavor Params
	 *
	 * @var int
	 */
	public $width = null;

	/**
	 * The desired height of the Flavor Params
	 *
	 * @var int
	 */
	public $height = null;

	/**
	 * The frame rate of the Flavor Params
	 *
	 * @var float
	 */
	public $frameRate = null;

	/**
	 * The gop size of the Flavor Params
	 *
	 * @var int
	 */
	public $gopSize = null;

	/**
	 * The list of conversion engines (comma separated)
	 *
	 * @var string
	 */
	public $conversionEngines = null;

	/**
	 * The list of conversion engines extra params (separated with "|")
	 *
	 * @var string
	 */
	public $conversionEnginesExtraParams = null;

	/**
	 * 
	 *
	 * @var bool
	 */
	public $twoPass = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $deinterlice = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $rotate = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $operators = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $engineVersion = null;

	/**
	 * The container format of the Flavor Params
	 *
	 * @var Kaltura_Client_Enum_ContainerFormat
	 */
	public $format = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $aspectRatioProcessingMode = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $forceFrameToMultiplication16 = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isGopInSec = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isAvoidVideoShrinkFramesizeToSource = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isAvoidVideoShrinkBitrateToSource = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isVideoFrameRateForLowBrAppleHls = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $multiStream = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $anamorphicPixels = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isAvoidForcedKeyFrames = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $forcedKeyFramesMode = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isCropIMX = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $optimizationPolicy = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $maxFrameRate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $videoConstantBitrate = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $videoBitrateTolerance = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $watermarkData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $subtitlesData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $cropData = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isEncrypted = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $contentAwareness = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $chunkedEncodeMode = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $clipOffset = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $clipDuration = null;

	/**
	 * Audio languages extracted from multiStream field
	 *
	 * @var Kaltura_Client_Type_String[]
	 * @readonly
	 */
	public $audioLanguages;


}

