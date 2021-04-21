<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WebException StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WebException
 * @subpackage Structs
 */
class WebException extends InvalidOperationException
{
}
