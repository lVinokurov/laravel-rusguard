<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ViolationType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ViolationType
 * @subpackage Enumerations
 */
class ViolationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'PVTR'
     * @return string 'PVTR'
     */
    const VALUE_PVTR = 'PVTR';
    /**
     * Constant for value 'Late'
     * @return string 'Late'
     */
    const VALUE_LATE = 'Late';
    /**
     * Constant for value 'LessThanDailyAllowance'
     * @return string 'LessThanDailyAllowance'
     */
    const VALUE_LESS_THAN_DAILY_ALLOWANCE = 'LessThanDailyAllowance';
    /**
     * Constant for value 'EarlyDeparture'
     * @return string 'EarlyDeparture'
     */
    const VALUE_EARLY_DEPARTURE = 'EarlyDeparture';
    /**
     * Constant for value 'LongLunchBrake'
     * @return string 'LongLunchBrake'
     */
    const VALUE_LONG_LUNCH_BRAKE = 'LongLunchBrake';
    /**
     * Constant for value 'AfterHours'
     * @return string 'AfterHours'
     */
    const VALUE_AFTER_HOURS = 'AfterHours';
    /**
     * Return allowed values
     * @uses self::VALUE_PVTR
     * @uses self::VALUE_LATE
     * @uses self::VALUE_LESS_THAN_DAILY_ALLOWANCE
     * @uses self::VALUE_EARLY_DEPARTURE
     * @uses self::VALUE_LONG_LUNCH_BRAKE
     * @uses self::VALUE_AFTER_HOURS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PVTR,
            self::VALUE_LATE,
            self::VALUE_LESS_THAN_DAILY_ALLOWANCE,
            self::VALUE_EARLY_DEPARTURE,
            self::VALUE_LONG_LUNCH_BRAKE,
            self::VALUE_AFTER_HOURS,
        ];
    }
}
