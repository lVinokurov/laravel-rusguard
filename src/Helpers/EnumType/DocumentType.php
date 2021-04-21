<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DocumentType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DocumentType
 * @subpackage Enumerations
 */
class DocumentType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Passport'
     * @return string 'Passport'
     */
    const VALUE_PASSPORT = 'Passport';
    /**
     * Constant for value 'DriverLicense'
     * @return string 'DriverLicense'
     */
    const VALUE_DRIVER_LICENSE = 'DriverLicense';
    /**
     * Constant for value 'ForeignPassport'
     * @return string 'ForeignPassport'
     */
    const VALUE_FOREIGN_PASSPORT = 'ForeignPassport';
    /**
     * Return allowed values
     * @uses self::VALUE_PASSPORT
     * @uses self::VALUE_DRIVER_LICENSE
     * @uses self::VALUE_FOREIGN_PASSPORT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PASSPORT,
            self::VALUE_DRIVER_LICENSE,
            self::VALUE_FOREIGN_PASSPORT,
        ];
    }
}
