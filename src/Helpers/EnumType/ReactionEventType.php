<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReactionEventType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionEventType
 * @subpackage Enumerations
 */
class ReactionEventType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'EventsFromDevices'
     * @return string 'EventsFromDevices'
     */
    const VALUE_EVENTS_FROM_DEVICES = 'EventsFromDevices';
    /**
     * Return allowed values
     * @uses self::VALUE_EVENTS_FROM_DEVICES
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_EVENTS_FROM_DEVICES,
        ];
    }
}
