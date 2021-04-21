<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OperationResultType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OperationResultType
 * @subpackage Enumerations
 */
class OperationResultType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Success'
     * @return string 'Success'
     */
    const VALUE_SUCCESS = 'Success';
    /**
     * Constant for value 'Fault'
     * @return string 'Fault'
     */
    const VALUE_FAULT = 'Fault';
    /**
     * Return allowed values
     * @uses self::VALUE_SUCCESS
     * @uses self::VALUE_FAULT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SUCCESS,
            self::VALUE_FAULT,
        ];
    }
}
