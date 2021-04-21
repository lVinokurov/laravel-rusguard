<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AlcoCheckState EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AlcoCheckState
 * @subpackage Enumerations
 */
class AlcoCheckState extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotRequired'
     * @return string 'NotRequired'
     */
    const VALUE_NOT_REQUIRED = 'NotRequired';
    /**
     * Constant for value 'CheckPerformed'
     * @return string 'CheckPerformed'
     */
    const VALUE_CHECK_PERFORMED = 'CheckPerformed';
    /**
     * Constant for value 'CheckRefused'
     * @return string 'CheckRefused'
     */
    const VALUE_CHECK_REFUSED = 'CheckRefused';
    /**
     * Constant for value 'CommunicationFailure'
     * @return string 'CommunicationFailure'
     */
    const VALUE_COMMUNICATION_FAILURE = 'CommunicationFailure';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_REQUIRED
     * @uses self::VALUE_CHECK_PERFORMED
     * @uses self::VALUE_CHECK_REFUSED
     * @uses self::VALUE_COMMUNICATION_FAILURE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_REQUIRED,
            self::VALUE_CHECK_PERFORMED,
            self::VALUE_CHECK_REFUSED,
            self::VALUE_COMMUNICATION_FAILURE,
        ];
    }
}
