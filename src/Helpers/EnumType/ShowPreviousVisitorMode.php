<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ShowPreviousVisitorMode EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ShowPreviousVisitorMode
 * @subpackage Enumerations
 */
class ShowPreviousVisitorMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Right'
     * @return string 'Right'
     */
    const VALUE_RIGHT = 'Right';
    /**
     * Constant for value 'Bottom'
     * @return string 'Bottom'
     */
    const VALUE_BOTTOM = 'Bottom';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_RIGHT
     * @uses self::VALUE_BOTTOM
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_RIGHT,
            self::VALUE_BOTTOM,
        ];
    }
}
