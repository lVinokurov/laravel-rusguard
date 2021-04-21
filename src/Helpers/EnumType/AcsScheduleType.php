<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcsScheduleType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsScheduleType
 * @subpackage Enumerations
 */
class AcsScheduleType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Day'
     * @return string 'Day'
     */
    const VALUE_DAY = 'Day';
    /**
     * Constant for value 'MultiDay'
     * @return string 'MultiDay'
     */
    const VALUE_MULTI_DAY = 'MultiDay';
    /**
     * Constant for value 'Week'
     * @return string 'Week'
     */
    const VALUE_WEEK = 'Week';
    /**
     * Return allowed values
     * @uses self::VALUE_DAY
     * @uses self::VALUE_MULTI_DAY
     * @uses self::VALUE_WEEK
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DAY,
            self::VALUE_MULTI_DAY,
            self::VALUE_WEEK,
        ];
    }
}
