<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserSortedColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserSortedColumn
 * @subpackage Enumerations
 */
class UserSortedColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Login'
     * @return string 'Login'
     */
    const VALUE_LOGIN = 'Login';
    /**
     * Constant for value 'FullName'
     * @return string 'FullName'
     */
    const VALUE_FULL_NAME = 'FullName';
    /**
     * Constant for value 'Description'
     * @return string 'Description'
     */
    const VALUE_DESCRIPTION = 'Description';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_LOGIN
     * @uses self::VALUE_FULL_NAME
     * @uses self::VALUE_DESCRIPTION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_LOGIN,
            self::VALUE_FULL_NAME,
            self::VALUE_DESCRIPTION,
        ];
    }
}
