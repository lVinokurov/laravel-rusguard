<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OwnerFieldType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:OwnerFieldType
 * @subpackage Enumerations
 */
class OwnerFieldType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Employee'
     * @return string 'Employee'
     */
    const VALUE_EMPLOYEE = 'Employee';
    /**
     * Return allowed values
     * @uses self::VALUE_EMPLOYEE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EMPLOYEE,
        ];
    }
}
