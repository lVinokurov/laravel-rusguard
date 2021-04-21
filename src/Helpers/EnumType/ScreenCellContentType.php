<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ScreenCellContentType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenCellContentType
 * @subpackage Enumerations
 */
class ScreenCellContentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'PhotoIdentification'
     * @return string 'PhotoIdentification'
     */
    const VALUE_PHOTO_IDENTIFICATION = 'PhotoIdentification';
    /**
     * Constant for value 'Camera'
     * @return string 'Camera'
     */
    const VALUE_CAMERA = 'Camera';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_PHOTO_IDENTIFICATION
     * @uses self::VALUE_CAMERA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_PHOTO_IDENTIFICATION,
            self::VALUE_CAMERA,
        ];
    }
}
