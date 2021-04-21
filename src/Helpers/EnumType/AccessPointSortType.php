<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccessPointSortType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AccessPointSortType
 * @subpackage Enumerations
 */
class AccessPointSortType extends AbstractStructEnumBase
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
     * Constant for value 'Type'
     * @return string 'Type'
     */
    const VALUE_TYPE = 'Type';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_NAME
     * @uses self::VALUE_TYPE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_NAME,
            self::VALUE_TYPE,
        ];
    }
}
