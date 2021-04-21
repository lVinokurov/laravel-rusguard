<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StorageStateEnum EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StorageStateEnum
 * @subpackage Enumerations
 */
class StorageStateEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Add'
     * @return string 'Add'
     */
    const VALUE_ADD = 'Add';
    /**
     * Constant for value 'Change'
     * @return string 'Change'
     */
    const VALUE_CHANGE = 'Change';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Return allowed values
     * @uses self::VALUE_ADD
     * @uses self::VALUE_CHANGE
     * @uses self::VALUE_DELETE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ADD,
            self::VALUE_CHANGE,
            self::VALUE_DELETE,
        ];
    }
}
