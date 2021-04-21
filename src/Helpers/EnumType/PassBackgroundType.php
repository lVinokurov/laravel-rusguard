<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PassBackgroundType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PassBackgroundType
 * @subpackage Enumerations
 */
class PassBackgroundType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Color'
     * @return string 'Color'
     */
    const VALUE_COLOR = 'Color';
    /**
     * Constant for value 'Image'
     * @return string 'Image'
     */
    const VALUE_IMAGE = 'Image';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_COLOR
     * @uses self::VALUE_IMAGE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_COLOR,
            self::VALUE_IMAGE,
        ];
    }
}
