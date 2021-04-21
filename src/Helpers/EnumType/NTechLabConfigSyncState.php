<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for NTechLabConfigSyncState EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:NTechLabConfigSyncState
 * @subpackage Enumerations
 */
class NTechLabConfigSyncState extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Ok'
     * @return string 'Ok'
     */
    const VALUE_OK = 'Ok';
    /**
     * Constant for value 'ServiceNotAvailable'
     * @return string 'ServiceNotAvailable'
     */
    const VALUE_SERVICE_NOT_AVAILABLE = 'ServiceNotAvailable';
    /**
     * Constant for value 'InvalidCredentials'
     * @return string 'InvalidCredentials'
     */
    const VALUE_INVALID_CREDENTIALS = 'InvalidCredentials';
    /**
     * Constant for value 'ApiCallError'
     * @return string 'ApiCallError'
     */
    const VALUE_API_CALL_ERROR = 'ApiCallError';
    /**
     * Return allowed values
     * @uses self::VALUE_OK
     * @uses self::VALUE_SERVICE_NOT_AVAILABLE
     * @uses self::VALUE_INVALID_CREDENTIALS
     * @uses self::VALUE_API_CALL_ERROR
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OK,
            self::VALUE_SERVICE_NOT_AVAILABLE,
            self::VALUE_INVALID_CREDENTIALS,
            self::VALUE_API_CALL_ERROR,
        ];
    }
}
