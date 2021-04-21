<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FavoriteType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FavoriteType
 * @subpackage Enumerations
 */
class FavoriteType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Workplace'
     * @return string 'Workplace'
     */
    const VALUE_WORKPLACE = 'Workplace';
    /**
     * Constant for value 'User'
     * @return string 'User'
     */
    const VALUE_USER = 'User';
    /**
     * Return allowed values
     * @uses self::VALUE_WORKPLACE
     * @uses self::VALUE_USER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WORKPLACE,
            self::VALUE_USER,
        ];
    }
}
