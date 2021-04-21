<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for StateType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:StateType
 * @subpackage Enumerations
 */
class StateType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'New'
     * @return string 'New'
     */
    const VALUE_NEW = 'New';
    /**
     * Constant for value 'Deleting'
     * @return string 'Deleting'
     */
    const VALUE_DELETING = 'Deleting';
    /**
     * Constant for value 'Modifying'
     * @return string 'Modifying'
     */
    const VALUE_MODIFYING = 'Modifying';
    /**
     * Constant for value 'ModifyingDeviceIdentificator'
     * @return string 'ModifyingDeviceIdentificator'
     */
    const VALUE_MODIFYING_DEVICE_IDENTIFICATOR = 'ModifyingDeviceIdentificator';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_NEW
     * @uses self::VALUE_DELETING
     * @uses self::VALUE_MODIFYING
     * @uses self::VALUE_MODIFYING_DEVICE_IDENTIFICATOR
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NEW,
            self::VALUE_DELETING,
            self::VALUE_MODIFYING,
            self::VALUE_MODIFYING_DEVICE_IDENTIFICATOR,
            self::VALUE_UNKNOWN,
        ];
    }
}
