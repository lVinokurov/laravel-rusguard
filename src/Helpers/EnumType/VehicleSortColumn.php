<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VehicleSortColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleSortColumn
 * @subpackage Enumerations
 */
class VehicleSortColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'Brand'
     * @return string 'Brand'
     */
    const VALUE_BRAND = 'Brand';
    /**
     * Constant for value 'Color'
     * @return string 'Color'
     */
    const VALUE_COLOR = 'Color';
    /**
     * Constant for value 'Lock'
     * @return string 'Lock'
     */
    const VALUE_LOCK = 'Lock';
    /**
     * Constant for value 'RegistrationNumber'
     * @return string 'RegistrationNumber'
     */
    const VALUE_REGISTRATION_NUMBER = 'RegistrationNumber';
    /**
     * Constant for value 'GroupName'
     * @return string 'GroupName'
     */
    const VALUE_GROUP_NAME = 'GroupName';
    /**
     * Constant for value 'ModificationTime'
     * @return string 'ModificationTime'
     */
    const VALUE_MODIFICATION_TIME = 'ModificationTime';
    /**
     * Constant for value 'CreationTime'
     * @return string 'CreationTime'
     */
    const VALUE_CREATION_TIME = 'CreationTime';
    /**
     * Constant for value 'NameAndGroup'
     * @return string 'NameAndGroup'
     */
    const VALUE_NAME_AND_GROUP = 'NameAndGroup';
    /**
     * Return allowed values
     * @uses self::VALUE_NAME
     * @uses self::VALUE_BRAND
     * @uses self::VALUE_COLOR
     * @uses self::VALUE_LOCK
     * @uses self::VALUE_REGISTRATION_NUMBER
     * @uses self::VALUE_GROUP_NAME
     * @uses self::VALUE_MODIFICATION_TIME
     * @uses self::VALUE_CREATION_TIME
     * @uses self::VALUE_NAME_AND_GROUP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NAME,
            self::VALUE_BRAND,
            self::VALUE_COLOR,
            self::VALUE_LOCK,
            self::VALUE_REGISTRATION_NUMBER,
            self::VALUE_GROUP_NAME,
            self::VALUE_MODIFICATION_TIME,
            self::VALUE_CREATION_TIME,
            self::VALUE_NAME_AND_GROUP,
        ];
    }
}
