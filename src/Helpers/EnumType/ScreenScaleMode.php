<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ScreenScaleMode EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ScreenScaleMode
 * @subpackage Enumerations
 */
class ScreenScaleMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Fit'
     * @return string 'Fit'
     */
    const VALUE_FIT = 'Fit';
    /**
     * Constant for value 'Stretch'
     * @return string 'Stretch'
     */
    const VALUE_STRETCH = 'Stretch';
    /**
     * Return allowed values
     * @uses self::VALUE_FIT
     * @uses self::VALUE_STRETCH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FIT,
            self::VALUE_STRETCH,
        ];
    }
}
