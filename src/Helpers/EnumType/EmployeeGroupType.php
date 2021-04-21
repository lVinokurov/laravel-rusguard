<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmployeeGroupType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeGroupType
 * @subpackage Enumerations
 */
class EmployeeGroupType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'GuestGroup'
     * @return string 'GuestGroup'
     */
    const VALUE_GUEST_GROUP = 'GuestGroup';
    /**
     * Constant for value 'Violators'
     * @return string 'Violators'
     */
    const VALUE_VIOLATORS = 'Violators';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_GUEST_GROUP
     * @uses self::VALUE_VIOLATORS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_GUEST_GROUP,
            self::VALUE_VIOLATORS,
        ];
    }
}
