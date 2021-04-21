<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcsTimeIntervalType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsTimeIntervalType
 * @subpackage Enumerations
 */
class AcsTimeIntervalType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Pass'
     * @return string 'Pass'
     */
    const VALUE_PASS = 'Pass';
    /**
     * Constant for value 'Entry'
     * @return string 'Entry'
     */
    const VALUE_ENTRY = 'Entry';
    /**
     * Constant for value 'Exit'
     * @return string 'Exit'
     */
    const VALUE_EXIT = 'Exit';
    /**
     * Constant for value 'Service'
     * @return string 'Service'
     */
    const VALUE_SERVICE = 'Service';
    /**
     * Return allowed values
     * @uses self::VALUE_PASS
     * @uses self::VALUE_ENTRY
     * @uses self::VALUE_EXIT
     * @uses self::VALUE_SERVICE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PASS,
            self::VALUE_ENTRY,
            self::VALUE_EXIT,
            self::VALUE_SERVICE,
        ];
    }
}
