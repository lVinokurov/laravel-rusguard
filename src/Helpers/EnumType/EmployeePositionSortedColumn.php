<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmployeePositionSortedColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeePositionSortedColumn
 * @subpackage Enumerations
 */
class EmployeePositionSortedColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'Comment'
     * @return string 'Comment'
     */
    const VALUE_COMMENT = 'Comment';
    /**
     * Constant for value 'Code'
     * @return string 'Code'
     */
    const VALUE_CODE = 'Code';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_NAME
     * @uses self::VALUE_COMMENT
     * @uses self::VALUE_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_NAME,
            self::VALUE_COMMENT,
            self::VALUE_CODE,
        ];
    }
}
