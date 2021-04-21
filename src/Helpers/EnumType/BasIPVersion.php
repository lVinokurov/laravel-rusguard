<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BasIPVersion EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BasIPVersion
 * @subpackage Enumerations
 */
class BasIPVersion extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ver1'
     * @return string 'Ver1'
     */
    const VALUE_VER_1 = 'Ver1';
    /**
     * Constant for value 'Ver2'
     * @return string 'Ver2'
     */
    const VALUE_VER_2 = 'Ver2';
    /**
     * Return allowed values
     * @uses self::VALUE_VER_1
     * @uses self::VALUE_VER_2
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_VER_1,
            self::VALUE_VER_2,
        ];
    }
}
