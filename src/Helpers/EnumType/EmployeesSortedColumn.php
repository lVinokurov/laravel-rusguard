<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmployeesSortedColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeesSortedColumn
 * @subpackage Enumerations
 */
class EmployeesSortedColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'ID'
     * @return string 'ID'
     */
    const VALUE_ID = 'ID';
    /**
     * Constant for value 'FIO'
     * @return string 'FIO'
     */
    const VALUE_FIO = 'FIO';
    /**
     * Constant for value 'EmployeeGroup'
     * @return string 'EmployeeGroup'
     */
    const VALUE_EMPLOYEE_GROUP = 'EmployeeGroup';
    /**
     * Constant for value 'Position'
     * @return string 'Position'
     */
    const VALUE_POSITION = 'Position';
    /**
     * Constant for value 'TabNumber'
     * @return string 'TabNumber'
     */
    const VALUE_TAB_NUMBER = 'TabNumber';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ID
     * @uses self::VALUE_FIO
     * @uses self::VALUE_EMPLOYEE_GROUP
     * @uses self::VALUE_POSITION
     * @uses self::VALUE_TAB_NUMBER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ID,
            self::VALUE_FIO,
            self::VALUE_EMPLOYEE_GROUP,
            self::VALUE_POSITION,
            self::VALUE_TAB_NUMBER,
        ];
    }
}
