<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SortOrder EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SortOrder
 * @subpackage Enumerations
 */
class SortOrder extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Ascending'
     * @return string 'Ascending'
     */
    const VALUE_ASCENDING = 'Ascending';
    /**
     * Constant for value 'Descending'
     * @return string 'Descending'
     */
    const VALUE_DESCENDING = 'Descending';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ASCENDING
     * @uses self::VALUE_DESCENDING
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ASCENDING,
            self::VALUE_DESCENDING,
        ];
    }
}
