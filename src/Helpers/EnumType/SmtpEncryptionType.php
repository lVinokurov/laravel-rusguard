<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SmtpEncryptionType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SmtpEncryptionType
 * @subpackage Enumerations
 */
class SmtpEncryptionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotRequired'
     * @return string 'NotRequired'
     */
    const VALUE_NOT_REQUIRED = 'NotRequired';
    /**
     * Constant for value 'SSL'
     * @return string 'SSL'
     */
    const VALUE_SSL = 'SSL';
    /**
     * Constant for value 'TLS'
     * @return string 'TLS'
     */
    const VALUE_TLS = 'TLS';
    /**
     * Constant for value 'Auto'
     * @return string 'Auto'
     */
    const VALUE_AUTO = 'Auto';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_REQUIRED
     * @uses self::VALUE_SSL
     * @uses self::VALUE_TLS
     * @uses self::VALUE_AUTO
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_REQUIRED,
            self::VALUE_SSL,
            self::VALUE_TLS,
            self::VALUE_AUTO,
        ];
    }
}
