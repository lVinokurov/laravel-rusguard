<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BlockData EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BlockData
 * @subpackage Enumerations
 */
class BlockData extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Key'
     * @return string 'Key'
     */
    const VALUE_KEY = 'Key';
    /**
     * Constant for value 'Biometric'
     * @return string 'Biometric'
     */
    const VALUE_BIOMETRIC = 'Biometric';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_KEY
     * @uses self::VALUE_BIOMETRIC
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_KEY,
            self::VALUE_BIOMETRIC,
        ];
    }
}
