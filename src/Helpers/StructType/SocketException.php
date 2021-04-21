<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SocketException StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SocketException
 * @subpackage Structs
 */
class SocketException extends Win32Exception
{
}
