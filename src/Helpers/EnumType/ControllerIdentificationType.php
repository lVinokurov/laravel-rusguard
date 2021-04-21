<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ControllerIdentificationType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ControllerIdentificationType
 * @subpackage Enumerations
 */
class ControllerIdentificationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
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
     * Constant for value 'Alco'
     * @return string 'Alco'
     */
    const VALUE_ALCO = 'Alco';
    /**
     * Constant for value 'Finger'
     * @return string 'Finger'
     */
    const VALUE_FINGER = 'Finger';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_FACE
     * @uses self::VALUE_VEHICLE
     * @uses self::VALUE_ALCO
     * @uses self::VALUE_FINGER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_FACE,
            self::VALUE_VEHICLE,
            self::VALUE_ALCO,
            self::VALUE_FINGER,
        ];
    }
}
