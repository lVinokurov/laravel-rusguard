<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmployeeImageType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeImageType
 * @subpackage Enumerations
 */
class EmployeeImageType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Photo'
     * @return string 'Photo'
     */
    const VALUE_PHOTO = 'Photo';
    /**
     * Constant for value 'PassportImage'
     * @return string 'PassportImage'
     */
    const VALUE_PASSPORT_IMAGE = 'PassportImage';
    /**
     * Constant for value 'DriverLicenseImage'
     * @return string 'DriverLicenseImage'
     */
    const VALUE_DRIVER_LICENSE_IMAGE = 'DriverLicenseImage';
    /**
     * Constant for value 'ForeignPassportImage'
     * @return string 'ForeignPassportImage'
     */
    const VALUE_FOREIGN_PASSPORT_IMAGE = 'ForeignPassportImage';
    /**
     * Return allowed values
     * @uses self::VALUE_PHOTO
     * @uses self::VALUE_PASSPORT_IMAGE
     * @uses self::VALUE_DRIVER_LICENSE_IMAGE
     * @uses self::VALUE_FOREIGN_PASSPORT_IMAGE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PHOTO,
            self::VALUE_PASSPORT_IMAGE,
            self::VALUE_DRIVER_LICENSE_IMAGE,
            self::VALUE_FOREIGN_PASSPORT_IMAGE,
        ];
    }
}
