<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmployeeAssignmentType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeAssignmentType
 * @subpackage Enumerations
 */
class EmployeeAssignmentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Manual'
     * @return string 'Manual'
     */
    const VALUE_MANUAL = 'Manual';
    /**
     * Constant for value 'Auto'
     * @return string 'Auto'
     */
    const VALUE_AUTO = 'Auto';
    /**
     * Return allowed values
     * @uses self::VALUE_MANUAL
     * @uses self::VALUE_AUTO
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MANUAL,
            self::VALUE_AUTO,
        ];
    }
}
