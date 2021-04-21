<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AcsAccessPointType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AcsAccessPointType
 * @subpackage Enumerations
 */
class AcsAccessPointType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Constant for value 'Door'
     * @return string 'Door'
     */
    const VALUE_DOOR = 'Door';
    /**
     * Constant for value 'OneSidedDoor'
     * @return string 'OneSidedDoor'
     */
    const VALUE_ONE_SIDED_DOOR = 'OneSidedDoor';
    /**
     * Constant for value 'Tourniquet'
     * @return string 'Tourniquet'
     */
    const VALUE_TOURNIQUET = 'Tourniquet';
    /**
     * Constant for value 'Gate'
     * @return string 'Gate'
     */
    const VALUE_GATE = 'Gate';
    /**
     * Constant for value 'Locker'
     * @return string 'Locker'
     */
    const VALUE_LOCKER = 'Locker';
    /**
     * Constant for value 'KeyCabinet'
     * @return string 'KeyCabinet'
     */
    const VALUE_KEY_CABINET = 'KeyCabinet';
    /**
     * Constant for value 'RoomKey'
     * @return string 'RoomKey'
     */
    const VALUE_ROOM_KEY = 'RoomKey';
    /**
     * Return allowed values
     * @uses self::VALUE_UNKNOWN
     * @uses self::VALUE_DOOR
     * @uses self::VALUE_ONE_SIDED_DOOR
     * @uses self::VALUE_TOURNIQUET
     * @uses self::VALUE_GATE
     * @uses self::VALUE_LOCKER
     * @uses self::VALUE_KEY_CABINET
     * @uses self::VALUE_ROOM_KEY
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_UNKNOWN,
            self::VALUE_DOOR,
            self::VALUE_ONE_SIDED_DOOR,
            self::VALUE_TOURNIQUET,
            self::VALUE_GATE,
            self::VALUE_LOCKER,
            self::VALUE_KEY_CABINET,
            self::VALUE_ROOM_KEY,
        ];
    }
}
