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
class Kaltura_Client_Type_MediaInfo extends Kaltura_Client_ObjectBase
{
	public function getKalturaObjectType()
	{
		return 'KalturaMediaInfo';
	}
	
	public function __construct(SimpleXMLElement $xml = null, $jsonObject = null)
	{
		parent::__construct($xml, $jsonObject);
		
		if(!is_null($xml) && !is_null($jsonObject))
			throw new Kaltura_Client_ClientException("construct with either XML or JSON object, not both", Kaltura_Client_ClientException::ERROR_CONSTRUCT_ARGS_CONFLICT);
		
		if(is_null($xml) && is_null($jsonObject))
			return;
		
		if(!is_null($xml) && count($xml->id))
			$this->id = (int)$xml->id;
		if(!is_null($jsonObject) && isset($jsonObject->id))
			$this->id = (int)$jsonObject->id;
		if(!is_null($xml) && count($xml->flavorAssetId))
			$this->flavorAssetId = (string)$xml->flavorAssetId;
		if(!is_null($jsonObject) && isset($jsonObject->flavorAssetId))
			$this->flavorAssetId = (string)$jsonObject->flavorAssetId;
		if(!is_null($xml) && count($xml->fileSize))
			$this->fileSize = (int)$xml->fileSize;
		if(!is_null($jsonObject) && isset($jsonObject->fileSize))
			$this->fileSize = (int)$jsonObject->fileSize;
		if(!is_null($xml) && count($xml->containerFormat))
			$this->containerFormat = (string)$xml->containerFormat;
		if(!is_null($jsonObject) && isset($jsonObject->containerFormat))
			$this->containerFormat = (string)$jsonObject->containerFormat;
		if(!is_null($xml) && count($xml->containerId))
			$this->containerId = (string)$xml->containerId;
		if(!is_null($jsonObject) && isset($jsonObject->containerId))
			$this->containerId = (string)$jsonObject->containerId;
		if(!is_null($xml) && count($xml->containerProfile))
			$this->containerProfile = (string)$xml->containerProfile;
		if(!is_null($jsonObject) && isset($jsonObject->containerProfile))
			$this->containerProfile = (string)$jsonObject->containerProfile;
		if(!is_null($xml) && count($xml->containerDuration))
			$this->containerDuration = (int)$xml->containerDuration;
		if(!is_null($jsonObject) && isset($jsonObject->containerDuration))
			$this->containerDuration = (int)$jsonObject->containerDuration;
		if(!is_null($xml) && count($xml->containerBitRate))
			$this->containerBitRate = (int)$xml->containerBitRate;
		if(!is_null($jsonObject) && isset($jsonObject->containerBitRate))
			$this->containerBitRate = (int)$jsonObject->containerBitRate;
		if(!is_null($xml) && count($xml->videoFormat))
			$this->videoFormat = (string)$xml->videoFormat;
		if(!is_null($jsonObject) && isset($jsonObject->videoFormat))
			$this->videoFormat = (string)$jsonObject->videoFormat;
		if(!is_null($xml) && count($xml->videoCodecId))
			$this->videoCodecId = (string)$xml->videoCodecId;
		if(!is_null($jsonObject) && isset($jsonObject->videoCodecId))
			$this->videoCodecId = (string)$jsonObject->videoCodecId;
		if(!is_null($xml) && count($xml->videoDuration))
			$this->videoDuration = (int)$xml->videoDuration;
		if(!is_null($jsonObject) && isset($jsonObject->videoDuration))
			$this->videoDuration = (int)$jsonObject->videoDuration;
		if(!is_null($xml) && count($xml->videoBitRate))
			$this->videoBitRate = (int)$xml->videoBitRate;
		if(!is_null($jsonObject) && isset($jsonObject->videoBitRate))
			$this->videoBitRate = (int)$jsonObject->videoBitRate;
		if(!is_null($xml) && count($xml->videoBitRateMode))
			$this->videoBitRateMode = (int)$xml->videoBitRateMode;
		if(!is_null($jsonObject) && isset($jsonObject->videoBitRateMode))
			$this->videoBitRateMode = (int)$jsonObject->videoBitRateMode;
		if(!is_null($xml) && count($xml->videoWidth))
			$this->videoWidth = (int)$xml->videoWidth;
		if(!is_null($jsonObject) && isset($jsonObject->videoWidth))
			$this->videoWidth = (int)$jsonObject->videoWidth;
		if(!is_null($xml) && count($xml->videoHeight))
			$this->videoHeight = (int)$xml->videoHeight;
		if(!is_null($jsonObject) && isset($jsonObject->videoHeight))
			$this->videoHeight = (int)$jsonObject->videoHeight;
		if(!is_null($xml) && count($xml->videoFrameRate))
			$this->videoFrameRate = (float)$xml->videoFrameRate;
		if(!is_null($jsonObject) && isset($jsonObject->videoFrameRate))
			$this->videoFrameRate = (float)$jsonObject->videoFrameRate;
		if(!is_null($xml) && count($xml->videoDar))
			$this->videoDar = (float)$xml->videoDar;
		if(!is_null($jsonObject) && isset($jsonObject->videoDar))
			$this->videoDar = (float)$jsonObject->videoDar;
		if(!is_null($xml) && count($xml->videoRotation))
			$this->videoRotation = (int)$xml->videoRotation;
		if(!is_null($jsonObject) && isset($jsonObject->videoRotation))
			$this->videoRotation = (int)$jsonObject->videoRotation;
		if(!is_null($xml) && count($xml->audioFormat))
			$this->audioFormat = (string)$xml->audioFormat;
		if(!is_null($jsonObject) && isset($jsonObject->audioFormat))
			$this->audioFormat = (string)$jsonObject->audioFormat;
		if(!is_null($xml) && count($xml->audioCodecId))
			$this->audioCodecId = (string)$xml->audioCodecId;
		if(!is_null($jsonObject) && isset($jsonObject->audioCodecId))
			$this->audioCodecId = (string)$jsonObject->audioCodecId;
		if(!is_null($xml) && count($xml->audioDuration))
			$this->audioDuration = (int)$xml->audioDuration;
		if(!is_null($jsonObject) && isset($jsonObject->audioDuration))
			$this->audioDuration = (int)$jsonObject->audioDuration;
		if(!is_null($xml) && count($xml->audioBitRate))
			$this->audioBitRate = (int)$xml->audioBitRate;
		if(!is_null($jsonObject) && isset($jsonObject->audioBitRate))
			$this->audioBitRate = (int)$jsonObject->audioBitRate;
		if(!is_null($xml) && count($xml->audioBitRateMode))
			$this->audioBitRateMode = (int)$xml->audioBitRateMode;
		if(!is_null($jsonObject) && isset($jsonObject->audioBitRateMode))
			$this->audioBitRateMode = (int)$jsonObject->audioBitRateMode;
		if(!is_null($xml) && count($xml->audioChannels))
			$this->audioChannels = (int)$xml->audioChannels;
		if(!is_null($jsonObject) && isset($jsonObject->audioChannels))
			$this->audioChannels = (int)$jsonObject->audioChannels;
		if(!is_null($xml) && count($xml->audioSamplingRate))
			$this->audioSamplingRate = (int)$xml->audioSamplingRate;
		if(!is_null($jsonObject) && isset($jsonObject->audioSamplingRate))
			$this->audioSamplingRate = (int)$jsonObject->audioSamplingRate;
		if(!is_null($xml) && count($xml->audioResolution))
			$this->audioResolution = (int)$xml->audioResolution;
		if(!is_null($jsonObject) && isset($jsonObject->audioResolution))
			$this->audioResolution = (int)$jsonObject->audioResolution;
		if(!is_null($xml) && count($xml->writingLib))
			$this->writingLib = (string)$xml->writingLib;
		if(!is_null($jsonObject) && isset($jsonObject->writingLib))
			$this->writingLib = (string)$jsonObject->writingLib;
		if(!is_null($xml) && count($xml->rawData))
			$this->rawData = (string)$xml->rawData;
		if(!is_null($jsonObject) && isset($jsonObject->rawData))
			$this->rawData = (string)$jsonObject->rawData;
		if(!is_null($xml) && count($xml->multiStreamInfo))
			$this->multiStreamInfo = (string)$xml->multiStreamInfo;
		if(!is_null($jsonObject) && isset($jsonObject->multiStreamInfo))
			$this->multiStreamInfo = (string)$jsonObject->multiStreamInfo;
		if(!is_null($xml) && count($xml->scanType))
			$this->scanType = (int)$xml->scanType;
		if(!is_null($jsonObject) && isset($jsonObject->scanType))
			$this->scanType = (int)$jsonObject->scanType;
		if(!is_null($xml) && count($xml->multiStream))
			$this->multiStream = (string)$xml->multiStream;
		if(!is_null($jsonObject) && isset($jsonObject->multiStream))
			$this->multiStream = (string)$jsonObject->multiStream;
		if(!is_null($xml) && count($xml->isFastStart))
			$this->isFastStart = (int)$xml->isFastStart;
		if(!is_null($jsonObject) && isset($jsonObject->isFastStart))
			$this->isFastStart = (int)$jsonObject->isFastStart;
		if(!is_null($xml) && count($xml->contentStreams))
			$this->contentStreams = (string)$xml->contentStreams;
		if(!is_null($jsonObject) && isset($jsonObject->contentStreams))
			$this->contentStreams = (string)$jsonObject->contentStreams;
		if(!is_null($xml) && count($xml->complexityValue))
			$this->complexityValue = (int)$xml->complexityValue;
		if(!is_null($jsonObject) && isset($jsonObject->complexityValue))
			$this->complexityValue = (int)$jsonObject->complexityValue;
		if(!is_null($xml) && count($xml->maxGOP))
			$this->maxGOP = (float)$xml->maxGOP;
		if(!is_null($jsonObject) && isset($jsonObject->maxGOP))
			$this->maxGOP = (float)$jsonObject->maxGOP;
		if(!is_null($xml) && count($xml->matrixCoefficients))
			$this->matrixCoefficients = (string)$xml->matrixCoefficients;
		if(!is_null($jsonObject) && isset($jsonObject->matrixCoefficients))
			$this->matrixCoefficients = (string)$jsonObject->matrixCoefficients;
		if(!is_null($xml) && count($xml->colorTransfer))
			$this->colorTransfer = (string)$xml->colorTransfer;
		if(!is_null($jsonObject) && isset($jsonObject->colorTransfer))
			$this->colorTransfer = (string)$jsonObject->colorTransfer;
		if(!is_null($xml) && count($xml->colorPrimaries))
			$this->colorPrimaries = (string)$xml->colorPrimaries;
		if(!is_null($jsonObject) && isset($jsonObject->colorPrimaries))
			$this->colorPrimaries = (string)$jsonObject->colorPrimaries;
		if(!is_null($xml) && count($xml->pixelFormat))
			$this->pixelFormat = (string)$xml->pixelFormat;
		if(!is_null($jsonObject) && isset($jsonObject->pixelFormat))
			$this->pixelFormat = (string)$jsonObject->pixelFormat;
		if(!is_null($xml) && count($xml->colorSpace))
			$this->colorSpace = (string)$xml->colorSpace;
		if(!is_null($jsonObject) && isset($jsonObject->colorSpace))
			$this->colorSpace = (string)$jsonObject->colorSpace;
		if(!is_null($xml) && count($xml->chromaSubsampling))
			$this->chromaSubsampling = (string)$xml->chromaSubsampling;
		if(!is_null($jsonObject) && isset($jsonObject->chromaSubsampling))
			$this->chromaSubsampling = (string)$jsonObject->chromaSubsampling;
		if(!is_null($xml) && count($xml->bitsDepth))
			$this->bitsDepth = (int)$xml->bitsDepth;
		if(!is_null($jsonObject) && isset($jsonObject->bitsDepth))
			$this->bitsDepth = (int)$jsonObject->bitsDepth;
	}
	/**
	 * The id of the media info
	 *
	 * @var int
	 * @readonly
	 */
	public $id = null;

	/**
	 * The id of the related flavor asset
	 *
	 * @var string
	 */
	public $flavorAssetId = null;

	/**
	 * The file size
	 *
	 * @var int
	 */
	public $fileSize = null;

	/**
	 * The container format
	 *
	 * @var string
	 */
	public $containerFormat = null;

	/**
	 * The container id
	 *
	 * @var string
	 */
	public $containerId = null;

	/**
	 * The container profile
	 *
	 * @var string
	 */
	public $containerProfile = null;

	/**
	 * The container duration
	 *
	 * @var int
	 */
	public $containerDuration = null;

	/**
	 * The container bit rate
	 *
	 * @var int
	 */
	public $containerBitRate = null;

	/**
	 * The video format
	 *
	 * @var string
	 */
	public $videoFormat = null;

	/**
	 * The video codec id
	 *
	 * @var string
	 */
	public $videoCodecId = null;

	/**
	 * The video duration
	 *
	 * @var int
	 */
	public $videoDuration = null;

	/**
	 * The video bit rate
	 *
	 * @var int
	 */
	public $videoBitRate = null;

	/**
	 * The video bit rate mode
	 *
	 * @var Kaltura_Client_Enum_BitRateMode
	 */
	public $videoBitRateMode = null;

	/**
	 * The video width
	 *
	 * @var int
	 */
	public $videoWidth = null;

	/**
	 * The video height
	 *
	 * @var int
	 */
	public $videoHeight = null;

	/**
	 * The video frame rate
	 *
	 * @var float
	 */
	public $videoFrameRate = null;

	/**
	 * The video display aspect ratio (dar)
	 *
	 * @var float
	 */
	public $videoDar = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $videoRotation = null;

	/**
	 * The audio format
	 *
	 * @var string
	 */
	public $audioFormat = null;

	/**
	 * The audio codec id
	 *
	 * @var string
	 */
	public $audioCodecId = null;

	/**
	 * The audio duration
	 *
	 * @var int
	 */
	public $audioDuration = null;

	/**
	 * The audio bit rate
	 *
	 * @var int
	 */
	public $audioBitRate = null;

	/**
	 * The audio bit rate mode
	 *
	 * @var Kaltura_Client_Enum_BitRateMode
	 */
	public $audioBitRateMode = null;

	/**
	 * The number of audio channels
	 *
	 * @var int
	 */
	public $audioChannels = null;

	/**
	 * The audio sampling rate
	 *
	 * @var int
	 */
	public $audioSamplingRate = null;

	/**
	 * The audio resolution
	 *
	 * @var int
	 */
	public $audioResolution = null;

	/**
	 * The writing library
	 *
	 * @var string
	 */
	public $writingLib = null;

	/**
	 * The data as returned by the mediainfo command line
	 *
	 * @var string
	 */
	public $rawData = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $multiStreamInfo = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $scanType = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $multiStream = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $isFastStart = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $contentStreams = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $complexityValue = null;

	/**
	 * 
	 *
	 * @var float
	 */
	public $maxGOP = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $matrixCoefficients = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $colorTransfer = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $colorPrimaries = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $pixelFormat = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $colorSpace = null;

	/**
	 * 
	 *
	 * @var string
	 */
	public $chromaSubsampling = null;

	/**
	 * 
	 *
	 * @var int
	 */
	public $bitsDepth = null;


}

