<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ServerIdentificationType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ServerIdentificationType
 * @subpackage Enumerations
 */
class ServerIdentificationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Face'
     * @return string 'Face'
     */
    const VALUE_FACE = 'Face';
    /**
     * Constant for value 'Vehicle'
     * @return string 'Vehicle'
     */
    const VALUE_VEHICLE = 'Vehicle';
    /**
     * Constant for value 'AlcoFarme'
     * @return string 'AlcoFarme'
     */
    const VALUE_ALCO_FARME = 'AlcoFarme';
    /**
     * Return allowed values
     * @uses self::VALUE_FACE
     * @uses self::VALUE_VEHICLE
     * @uses self::VALUE_ALCO_FARME
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FACE,
            self::VALUE_VEHICLE,
            self::VALUE_ALCO_FARME,
        ];
    }
}
