<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PhotoMarker EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PhotoMarker
 * @subpackage Enumerations
 */
class PhotoMarker extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Biometric'
     * @return string 'Biometric'
     */
    const VALUE_BIOMETRIC = 'Biometric';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_BIOMETRIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_BIOMETRIC,
        ];
    }
}
