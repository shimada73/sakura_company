<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* WindowsUpdateType File
* PHP version 7
*
* @category  Library
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   GIT: 1.4.0
* @link      https://graph.microsoft.io/
*/
namespace Microsoft\Graph\Model;

use Microsoft\Graph\Core\Enum;

/**
* WindowsUpdateType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class WindowsUpdateType extends Enum
{
    /**
    * The Enum WindowsUpdateType
    */
    const USER_DEFINED = "userDefined";
    const ALL = "all";
    const BUSINESS_READY_ONLY = "businessReadyOnly";
    const WINDOWS_INSIDER_BUILD_FAST = "windowsInsiderBuildFast";
    const WINDOWS_INSIDER_BUILD_SLOW = "windowsInsiderBuildSlow";
    const WINDOWS_INSIDER_BUILD_RELEASE = "windowsInsiderBuildRelease";
}