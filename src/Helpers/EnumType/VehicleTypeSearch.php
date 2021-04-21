<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for VehicleTypeSearch EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:VehicleTypeSearch
 * @subpackage Enumerations
 */
class VehicleTypeSearch extends AbstractStructEnumBase
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
     * Constant for value 'RegistrationNumber'
     * @return string 'RegistrationNumber'
     */
    const VALUE_REGISTRATION_NUMBER = 'RegistrationNumber';
    /**
     * Return allowed values
     * @uses self::VALUE_NAME
     * @uses self::VALUE_BRAND
     * @uses self::VALUE_REGISTRATION_NUMBER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NAME,
            self::VALUE_BRAND,
            self::VALUE_REGISTRATION_NUMBER,
        ];
    }
}
