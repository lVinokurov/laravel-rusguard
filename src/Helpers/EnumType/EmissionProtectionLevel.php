<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmissionProtectionLevel EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmissionProtectionLevel
 * @subpackage Enumerations
 */
class EmissionProtectionLevel extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SL1'
     * @return string 'SL1'
     */
    const VALUE_SL_1 = 'SL1';
    /**
     * Constant for value 'SL3'
     * @return string 'SL3'
     */
    const VALUE_SL_3 = 'SL3';
    /**
     * Return allowed values
     * @uses self::VALUE_SL_1
     * @uses self::VALUE_SL_3
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SL_1,
            self::VALUE_SL_3,
        ];
    }
}
