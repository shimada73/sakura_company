<?php
/**
* Copyright (c) Microsoft Corporation.  All Rights Reserved.  Licensed under the MIT License.  See License in the project root for license information.
* 
* LogonType File
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
* LogonType class
*
* @category  Model
* @package   Microsoft.Graph
* @copyright © Microsoft Corporation. All rights reserved.
* @license   https://opensource.org/licenses/MIT MIT License
* @version   Release: 1.4.0
* @link      https://graph.microsoft.io/
*/
class LogonType extends Enum
{
    /**
    * The Enum LogonType
    */
    const UNKNOWN = "unknown";
    const INTERACTIVE = "interactive";
    const REMOTE_INTERACTIVE = "remoteInteractive";
    const NETWORK = "network";
    const BATCH = "batch";
    const SERVICE = "service";
    const UNKNOWN_FUTURE_VALUE = "unknownFutureValue";
}