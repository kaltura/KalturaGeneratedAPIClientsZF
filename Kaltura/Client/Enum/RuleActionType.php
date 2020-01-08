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
// Copyright (C) 2006-2020  Kaltura Inc.
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
class Kaltura_Client_Enum_RuleActionType extends Kaltura_Client_EnumBase
{
	const DRM_POLICY = "drm.DRM_POLICY";
	const ADD_ENTRY_VENDOR_TASK = "reach.ADD_ENTRY_VENDOR_TASK";
	const BLOCK = "1";
	const PREVIEW = "2";
	const LIMIT_FLAVORS = "3";
	const ADD_TO_STORAGE = "4";
	const LIMIT_DELIVERY_PROFILES = "5";
	const SERVE_FROM_REMOTE_SERVER = "6";
	const REQUEST_HOST_REGEX = "7";
	const LIMIT_THUMBNAIL_CAPTURE = "8";
}

