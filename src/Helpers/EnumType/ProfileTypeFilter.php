<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProfileTypeFilter EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProfileTypeFilter
 * @subpackage Enumerations
 */
class ProfileTypeFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Mifare'
     * @return string 'Mifare'
     */
    const VALUE_MIFARE = 'Mifare';
    /**
     * Constant for value 'GoogleAndroidPay'
     * @return string 'GoogleAndroidPay'
     */
    const VALUE_GOOGLE_ANDROID_PAY = 'GoogleAndroidPay';
    /**
     * Constant for value 'RusGuardAccessMobile'
     * @return string 'RusGuardAccessMobile'
     */
    const VALUE_RUS_GUARD_ACCESS_MOBILE = 'RusGuardAccessMobile';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return allowed values
     * @uses self::VALUE_MIFARE
     * @uses self::VALUE_GOOGLE_ANDROID_PAY
     * @uses self::VALUE_RUS_GUARD_ACCESS_MOBILE
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MIFARE,
            self::VALUE_GOOGLE_ANDROID_PAY,
            self::VALUE_RUS_GUARD_ACCESS_MOBILE,
            self::VALUE_ALL,
        ];
    }
}
