<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for BoxAccessLevelMode EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:BoxAccessLevelMode
 * @subpackage Enumerations
 */
class BoxAccessLevelMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'User'
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Constant for value 'FullAccess'
     * @return string 'FullAccess'
     */
    const VALUE_FULL_ACCESS = 'FullAccess';
    /**
     * Return allowed values
     * @uses self::VALUE_USER
     * @uses self::VALUE_FULL_ACCESS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_USER,
            self::VALUE_FULL_ACCESS,
        ];
    }
}
