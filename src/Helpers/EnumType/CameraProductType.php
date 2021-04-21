<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CameraProductType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CameraProductType
 * @subpackage Enumerations
 */
class CameraProductType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ivideon'
     * @return string 'Ivideon'
     */
    const VALUE_IVIDEON = 'Ivideon';
    /**
     * Constant for value 'Panasonic'
     * @return string 'Panasonic'
     */
    const VALUE_PANASONIC = 'Panasonic';
    /**
     * Constant for value 'ISS'
     * @return string 'ISS'
     */
    const VALUE_ISS = 'ISS';
    /**
     * Constant for value 'NUUO'
     * @return string 'NUUO'
     */
    const VALUE_NUUO = 'NUUO';
    /**
     * Constant for value 'NtechLab'
     * @return string 'NtechLab'
     */
    const VALUE_NTECH_LAB = 'NtechLab';
    /**
     * Constant for value 'Trassir'
     * @return string 'Trassir'
     */
    const VALUE_TRASSIR = 'Trassir';
    /**
     * Return allowed values
     * @uses self::VALUE_IVIDEON
     * @uses self::VALUE_PANASONIC
     * @uses self::VALUE_ISS
     * @uses self::VALUE_NUUO
     * @uses self::VALUE_NTECH_LAB
     * @uses self::VALUE_TRASSIR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IVIDEON,
            self::VALUE_PANASONIC,
            self::VALUE_ISS,
            self::VALUE_NUUO,
            self::VALUE_NTECH_LAB,
            self::VALUE_TRASSIR,
        ];
    }
}
