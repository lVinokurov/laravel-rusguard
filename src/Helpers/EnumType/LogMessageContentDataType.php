<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogMessageContentDataType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogMessageContentDataType
 * @subpackage Enumerations
 */
class LogMessageContentDataType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'IVideonLocalArchiveRecord'
     * @return string 'IVideonLocalArchiveRecord'
     */
    const VALUE_IVIDEON_LOCAL_ARCHIVE_RECORD = 'IVideonLocalArchiveRecord';
    /**
     * Constant for value 'IVideonAccountArchiveRecord'
     * @return string 'IVideonAccountArchiveRecord'
     */
    const VALUE_IVIDEON_ACCOUNT_ARCHIVE_RECORD = 'IVideonAccountArchiveRecord';
    /**
     * Constant for value 'PanasonicArchveRecord'
     * @return string 'PanasonicArchveRecord'
     */
    const VALUE_PANASONIC_ARCHVE_RECORD = 'PanasonicArchveRecord';
    /**
     * Constant for value 'ISSArchiveRecord'
     * @return string 'ISSArchiveRecord'
     */
    const VALUE_ISSARCHIVE_RECORD = 'ISSArchiveRecord';
    /**
     * Constant for value 'NUUOArchiveRecord'
     * @return string 'NUUOArchiveRecord'
     */
    const VALUE_NUUOARCHIVE_RECORD = 'NUUOArchiveRecord';
    /**
     * Constant for value 'TrassirArchiveRecord'
     * @return string 'TrassirArchiveRecord'
     */
    const VALUE_TRASSIR_ARCHIVE_RECORD = 'TrassirArchiveRecord';
    /**
     * Return allowed values
     * @uses self::VALUE_IVIDEON_LOCAL_ARCHIVE_RECORD
     * @uses self::VALUE_IVIDEON_ACCOUNT_ARCHIVE_RECORD
     * @uses self::VALUE_PANASONIC_ARCHVE_RECORD
     * @uses self::VALUE_ISSARCHIVE_RECORD
     * @uses self::VALUE_NUUOARCHIVE_RECORD
     * @uses self::VALUE_TRASSIR_ARCHIVE_RECORD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IVIDEON_LOCAL_ARCHIVE_RECORD,
            self::VALUE_IVIDEON_ACCOUNT_ARCHIVE_RECORD,
            self::VALUE_PANASONIC_ARCHVE_RECORD,
            self::VALUE_ISSARCHIVE_RECORD,
            self::VALUE_NUUOARCHIVE_RECORD,
            self::VALUE_TRASSIR_ARCHIVE_RECORD,
        ];
    }
}
