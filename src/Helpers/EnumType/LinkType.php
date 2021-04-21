<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LinkType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LinkType
 * @subpackage Enumerations
 */
class LinkType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NetworkToSubnetwork'
     * @return string 'NetworkToSubnetwork'
     */
    const VALUE_NETWORK_TO_SUBNETWORK = 'NetworkToSubnetwork';
    /**
     * Constant for value 'ZoneToDriver'
     * @return string 'ZoneToDriver'
     */
    const VALUE_ZONE_TO_DRIVER = 'ZoneToDriver';
    /**
     * Return allowed values
     * @uses self::VALUE_NETWORK_TO_SUBNETWORK
     * @uses self::VALUE_ZONE_TO_DRIVER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NETWORK_TO_SUBNETWORK,
            self::VALUE_ZONE_TO_DRIVER,
        ];
    }
}
