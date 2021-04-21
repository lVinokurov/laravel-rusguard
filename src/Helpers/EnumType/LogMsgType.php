<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogMsgType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogMsgType
 * @subpackage Enumerations
 */
class LogMsgType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Information'
     * @return string 'Information'
     */
    const VALUE_INFORMATION = 'Information';
    /**
     * Constant for value 'Warning'
     * @return string 'Warning'
     */
    const VALUE_WARNING = 'Warning';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Alarm'
     * @return string 'Alarm'
     */
    const VALUE_ALARM = 'Alarm';
    /**
     * Return allowed values
     * @uses self::VALUE_INFORMATION
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_ALARM
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_INFORMATION,
            self::VALUE_WARNING,
            self::VALUE_ERROR,
            self::VALUE_ALARM,
        ];
    }
}
