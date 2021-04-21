<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OperationType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OperationType
 * @subpackage Enumerations
 */
class OperationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'MethodInvoke'
     * @return string 'MethodInvoke'
     */
    const VALUE_METHOD_INVOKE = 'MethodInvoke';
    /**
     * Return allowed values
     * @uses self::VALUE_METHOD_INVOKE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_METHOD_INVOKE,
        ];
    }
}
