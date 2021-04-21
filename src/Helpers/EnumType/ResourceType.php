<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ResourceType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ResourceType
 * @subpackage Enumerations
 */
class ResourceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Driver'
     * @return string 'Driver'
     */
    const VALUE_DRIVER = 'Driver';
    /**
     * Constant for value 'Server'
     * @return string 'Server'
     */
    const VALUE_SERVER = 'Server';
    /**
     * Constant for value 'Net'
     * @return string 'Net'
     */
    const VALUE_NET = 'Net';
    /**
     * Constant for value 'Zone'
     * @return string 'Zone'
     */
    const VALUE_ZONE = 'Zone';
    /**
     * Constant for value 'CommonInterface'
     * @return string 'CommonInterface'
     */
    const VALUE_COMMON_INTERFACE = 'CommonInterface';
    /**
     * Return allowed values
     * @uses self::VALUE_DRIVER
     * @uses self::VALUE_SERVER
     * @uses self::VALUE_NET
     * @uses self::VALUE_ZONE
     * @uses self::VALUE_COMMON_INTERFACE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_DRIVER,
            self::VALUE_SERVER,
            self::VALUE_NET,
            self::VALUE_ZONE,
            self::VALUE_COMMON_INTERFACE,
        ];
    }
}
