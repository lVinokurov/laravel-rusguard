<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcsScheduleBuiltInType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsScheduleBuiltInType
 * @subpackage Enumerations
 */
class AcsScheduleBuiltInType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
    /**
     * Constant for value 'Always'
     * @return string 'Always'
     */
    const VALUE_ALWAYS = 'Always';
    /**
     * Constant for value 'Never'
     * @return string 'Never'
     */
    const VALUE_NEVER = 'Never';
    /**
     * Constant for value 'General'
     * @return string 'General'
     */
    const VALUE_GENERAL = 'General';
    /**
     * Return allowed values
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_ALWAYS
     * @uses self::VALUE_NEVER
     * @uses self::VALUE_GENERAL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CUSTOM,
            self::VALUE_ALWAYS,
            self::VALUE_NEVER,
            self::VALUE_GENERAL,
        ];
    }
}
