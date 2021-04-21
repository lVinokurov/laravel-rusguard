<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ArgumentException StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArgumentException
 * @subpackage Structs
 */
class ArgumentException extends SystemException
{
}
