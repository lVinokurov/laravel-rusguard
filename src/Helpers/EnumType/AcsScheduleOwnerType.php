<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcsScheduleOwnerType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsScheduleOwnerType
 * @subpackage Enumerations
 */
class AcsScheduleOwnerType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ACSSchedule'
     * @return string 'ACSSchedule'
     */
    const VALUE_ACSSCHEDULE = 'ACSSchedule';
    /**
     * Constant for value 'ReactionSchedule'
     * @return string 'ReactionSchedule'
     */
    const VALUE_REACTION_SCHEDULE = 'ReactionSchedule';
    /**
     * Return allowed values
     * @uses self::VALUE_ACSSCHEDULE
     * @uses self::VALUE_REACTION_SCHEDULE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ACSSCHEDULE,
            self::VALUE_REACTION_SCHEDULE,
        ];
    }
}
