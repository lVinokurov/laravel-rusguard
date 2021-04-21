<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DataNotFoundException StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DataNotFoundException
 * @subpackage Structs
 */
class DataNotFoundException extends ApplicationException
{
}
