<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CanConverterAddress.TagEnum EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CanConverterAddress.TagEnum
 * @subpackage Enumerations
 */
class CanConverterAddress_TagEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Usb'
     * @return string 'Usb'
     */
    const VALUE_USB = 'Usb';
    /**
     * Constant for value 'Lan'
     * @return string 'Lan'
     */
    const VALUE_LAN = 'Lan';
    /**
     * Return allowed values
     * @uses self::VALUE_USB
     * @uses self::VALUE_LAN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_USB,
            self::VALUE_LAN,
        ];
    }
}
