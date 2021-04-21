<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DayMode EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DayMode
 * @subpackage Enumerations
 */
class DayMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Absent'
     * @return string 'Absent'
     */
    const VALUE_ABSENT = 'Absent';
    /**
     * Constant for value 'ByThePresence'
     * @return string 'ByThePresence'
     */
    const VALUE_BY_THE_PRESENCE = 'ByThePresence';
    /**
     * Constant for value 'OnSchedule'
     * @return string 'OnSchedule'
     */
    const VALUE_ON_SCHEDULE = 'OnSchedule';
    /**
     * Return allowed values
     * @uses self::VALUE_ABSENT
     * @uses self::VALUE_BY_THE_PRESENCE
     * @uses self::VALUE_ON_SCHEDULE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ABSENT,
            self::VALUE_BY_THE_PRESENCE,
            self::VALUE_ON_SCHEDULE,
        ];
    }
}
