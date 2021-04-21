<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ScreenAspectRatio EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenAspectRatio
 * @subpackage Enumerations
 */
class ScreenAspectRatio extends AbstractStructEnumBase
{
    /**
     * Constant for value 'AspectRatio16x9'
     * @return string 'AspectRatio16x9'
     */
    const VALUE_ASPECT_RATIO_16_X_9 = 'AspectRatio16x9';
    /**
     * Constant for value 'AspectRatio16x10'
     * @return string 'AspectRatio16x10'
     */
    const VALUE_ASPECT_RATIO_16_X_10 = 'AspectRatio16x10';
    /**
     * Constant for value 'AspectRatio4x3'
     * @return string 'AspectRatio4x3'
     */
    const VALUE_ASPECT_RATIO_4_X_3 = 'AspectRatio4x3';
    /**
     * Return allowed values
     * @uses self::VALUE_ASPECT_RATIO_16_X_9
     * @uses self::VALUE_ASPECT_RATIO_16_X_10
     * @uses self::VALUE_ASPECT_RATIO_4_X_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASPECT_RATIO_16_X_9,
            self::VALUE_ASPECT_RATIO_16_X_10,
            self::VALUE_ASPECT_RATIO_4_X_3,
        ];
    }
}
