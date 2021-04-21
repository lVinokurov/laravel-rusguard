<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WorkZonesAccessPointEventType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkZonesAccessPointEventType
 * @subpackage Enumerations
 */
class WorkZonesAccessPointEventType extends AbstractStructEnumBase
{
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
     * Constant for value 'LastEntry'
     * @return string 'LastEntry'
     */
    const VALUE_LAST_ENTRY = 'LastEntry';
    /**
     * Return allowed values
     * @uses self::VALUE_ENTRY
     * @uses self::VALUE_EXIT
     * @uses self::VALUE_LAST_ENTRY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ENTRY,
            self::VALUE_EXIT,
            self::VALUE_LAST_ENTRY,
        ];
    }
}
