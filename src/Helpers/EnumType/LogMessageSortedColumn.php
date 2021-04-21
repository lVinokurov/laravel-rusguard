<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogMessageSortedColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogMessageSortedColumn
 * @subpackage Enumerations
 */
class LogMessageSortedColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Id'
     * @return string 'Id'
     */
    const VALUE_ID = 'Id';
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'LogMessageType'
     * @return string 'LogMessageType'
     */
    const VALUE_LOG_MESSAGE_TYPE = 'LogMessageType';
    /**
     * Constant for value 'LogMessageSubType'
     * @return string 'LogMessageSubType'
     */
    const VALUE_LOG_MESSAGE_SUB_TYPE = 'LogMessageSubType';
    /**
     * Constant for value 'Message'
     * @return string 'Message'
     */
    const VALUE_MESSAGE = 'Message';
    /**
     * Constant for value 'Details'
     * @return string 'Details'
     */
    const VALUE_DETAILS = 'Details';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ID
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_LOG_MESSAGE_TYPE
     * @uses self::VALUE_LOG_MESSAGE_SUB_TYPE
     * @uses self::VALUE_MESSAGE
     * @uses self::VALUE_DETAILS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ID,
            self::VALUE_DATE_TIME,
            self::VALUE_LOG_MESSAGE_TYPE,
            self::VALUE_LOG_MESSAGE_SUB_TYPE,
            self::VALUE_MESSAGE,
            self::VALUE_DETAILS,
        ];
    }
}
