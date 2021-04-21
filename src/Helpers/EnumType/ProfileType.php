<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProfileType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProfileType
 * @subpackage Enumerations
 */
class ProfileType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Mifare'
     * @return string 'Mifare'
     */
    const VALUE_MIFARE = 'Mifare';
    /**
     * Constant for value 'AppleGooglePay'
     * @return string 'AppleGooglePay'
     */
    const VALUE_APPLE_GOOGLE_PAY = 'AppleGooglePay';
    /**
     * Constant for value 'RusGuardAccessMobile'
     * @return string 'RusGuardAccessMobile'
     */
    const VALUE_RUS_GUARD_ACCESS_MOBILE = 'RusGuardAccessMobile';
    /**
     * Return allowed values
     * @uses self::VALUE_MIFARE
     * @uses self::VALUE_APPLE_GOOGLE_PAY
     * @uses self::VALUE_RUS_GUARD_ACCESS_MOBILE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIFARE,
            self::VALUE_APPLE_GOOGLE_PAY,
            self::VALUE_RUS_GUARD_ACCESS_MOBILE,
        ];
    }
}
