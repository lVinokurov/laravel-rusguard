<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CustomizableDayType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CustomizableDayType
 * @subpackage Enumerations
 */
class CustomizableDayType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Holiday'
     * @return string 'Holiday'
     */
    const VALUE_HOLIDAY = 'Holiday';
    /**
     * Constant for value 'Transfer'
     * @return string 'Transfer'
     */
    const VALUE_TRANSFER = 'Transfer';
    /**
     * Return allowed values
     * @uses self::VALUE_HOLIDAY
     * @uses self::VALUE_TRANSFER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_HOLIDAY,
            self::VALUE_TRANSFER,
        ];
    }
}
