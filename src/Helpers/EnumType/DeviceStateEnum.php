<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DeviceStateEnum EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DeviceStateEnum
 * @subpackage Enumerations
 */
class DeviceStateEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'OK'
     * @return string 'OK'
     */
    const VALUE_OK = 'OK';
    /**
     * Constant for value 'Malfunction'
     * @return string 'Malfunction'
     */
    const VALUE_MALFUNCTION = 'Malfunction';
    /**
     * Constant for value 'WrongDriverType'
     * @return string 'WrongDriverType'
     */
    const VALUE_WRONG_DRIVER_TYPE = 'WrongDriverType';
    /**
     * Constant for value 'Activating'
     * @return string 'Activating'
     */
    const VALUE_ACTIVATING = 'Activating';
    /**
     * Constant for value 'Shutdowning'
     * @return string 'Shutdowning'
     */
    const VALUE_SHUTDOWNING = 'Shutdowning';
    /**
     * Constant for value 'Shutdowned'
     * @return string 'Shutdowned'
     */
    const VALUE_SHUTDOWNED = 'Shutdowned';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_MALFUNCTION
     * @uses self::VALUE_WRONG_DRIVER_TYPE
     * @uses self::VALUE_ACTIVATING
     * @uses self::VALUE_SHUTDOWNING
     * @uses self::VALUE_SHUTDOWNED
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OK,
            self::VALUE_MALFUNCTION,
            self::VALUE_WRONG_DRIVER_TYPE,
            self::VALUE_ACTIVATING,
            self::VALUE_SHUTDOWNING,
            self::VALUE_SHUTDOWNED,
        ];
    }
}
