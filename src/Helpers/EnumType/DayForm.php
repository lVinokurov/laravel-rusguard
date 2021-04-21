<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DayForm EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DayForm
 * @subpackage Enumerations
 */
class DayForm extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Weekday'
     * @return string 'Weekday'
     */
    const VALUE_WEEKDAY = 'Weekday';
    /**
     * Constant for value 'Weekend'
     * @return string 'Weekend'
     */
    const VALUE_WEEKEND = 'Weekend';
    /**
     * Constant for value 'Holiday'
     * @return string 'Holiday'
     */
    const VALUE_HOLIDAY = 'Holiday';
    /**
     * Return allowed values
     * @uses self::VALUE_WEEKDAY
     * @uses self::VALUE_WEEKEND
     * @uses self::VALUE_HOLIDAY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WEEKDAY,
            self::VALUE_WEEKEND,
            self::VALUE_HOLIDAY,
        ];
    }
}
