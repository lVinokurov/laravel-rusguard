<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for RecognitionMarker EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:RecognitionMarker
 * @subpackage Enumerations
 */
class RecognitionMarker extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ISS'
     * @return string 'ISS'
     */
    const VALUE_ISS = 'ISS';
    /**
     * Constant for value 'NTEchLab'
     * @return string 'NTEchLab'
     */
    const VALUE_NTECH_LAB = 'NTEchLab';
    /**
     * Return allowed values
     * @uses self::VALUE_ISS
     * @uses self::VALUE_NTECH_LAB
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ISS,
            self::VALUE_NTECH_LAB,
        ];
    }
}
