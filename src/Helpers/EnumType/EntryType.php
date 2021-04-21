<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EntryType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EntryType
 * @subpackage Enumerations
 */
class EntryType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Enter'
     * @return string 'Enter'
     */
    const VALUE_ENTER = 'Enter';
    /**
     * Constant for value 'Exit'
     * @return string 'Exit'
     */
    const VALUE_EXIT = 'Exit';
    /**
     * Return allowed values
     * @uses self::VALUE_ENTER
     * @uses self::VALUE_EXIT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENTER,
            self::VALUE_EXIT,
        ];
    }
}
