<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcsCustomizableDayType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsCustomizableDayType
 * @subpackage Enumerations
 */
class AcsCustomizableDayType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Holiday'
     * @return string 'Holiday'
     */
    const VALUE_HOLIDAY = 'Holiday';
    /**
     * Return allowed values
     * @uses self::VALUE_HOLIDAY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_HOLIDAY,
        ];
    }
}
