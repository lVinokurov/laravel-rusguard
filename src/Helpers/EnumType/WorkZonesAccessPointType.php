<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for WorkZonesAccessPointType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkZonesAccessPointType
 * @subpackage Enumerations
 */
class WorkZonesAccessPointType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Exit'
     * @return string 'Exit'
     */
    const VALUE_EXIT = 'Exit';
    /**
     * Constant for value 'Entry'
     * @return string 'Entry'
     */
    const VALUE_ENTRY = 'Entry';
    /**
     * Return allowed values
     * @uses self::VALUE_EXIT
     * @uses self::VALUE_ENTRY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EXIT,
            self::VALUE_ENTRY,
        ];
    }
}
