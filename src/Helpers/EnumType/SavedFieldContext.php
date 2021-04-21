<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SavedFieldContext EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SavedFieldContext
 * @subpackage Enumerations
 */
class SavedFieldContext extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Employee'
     * @return string 'Employee'
     */
    const VALUE_EMPLOYEE = 'Employee';
    /**
     * Constant for value 'EmployeeGroup'
     * @return string 'EmployeeGroup'
     */
    const VALUE_EMPLOYEE_GROUP = 'EmployeeGroup';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_EMPLOYEE
     * @uses self::VALUE_EMPLOYEE_GROUP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_EMPLOYEE,
            self::VALUE_EMPLOYEE_GROUP,
        ];
    }
}
