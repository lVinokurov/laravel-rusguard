<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for UserGroupType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:UserGroupType
 * @subpackage Enumerations
 */
class UserGroupType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Custom'
     * @return string 'Custom'
     */
    const VALUE_CUSTOM = 'Custom';
    /**
     * Constant for value 'Administrators'
     * @return string 'Administrators'
     */
    const VALUE_ADMINISTRATORS = 'Administrators';
    /**
     * Return allowed values
     * @uses self::VALUE_CUSTOM
     * @uses self::VALUE_ADMINISTRATORS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CUSTOM,
            self::VALUE_ADMINISTRATORS,
        ];
    }
}
