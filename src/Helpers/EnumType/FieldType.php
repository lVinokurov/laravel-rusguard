<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FieldType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FieldType
 * @subpackage Enumerations
 */
class FieldType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'String'
     * @return string 'String'
     */
    const VALUE_STRING = 'String';
    /**
     * Constant for value 'Integer'
     * @return string 'Integer'
     */
    const VALUE_INTEGER = 'Integer';
    /**
     * Constant for value 'Double'
     * @return string 'Double'
     */
    const VALUE_DOUBLE = 'Double';
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'Color'
     * @return string 'Color'
     */
    const VALUE_COLOR = 'Color';
    /**
     * Constant for value 'List'
     * @return string 'List'
     */
    const VALUE_LIST = 'List';
    /**
     * Return allowed values
     * @uses self::VALUE_STRING
     * @uses self::VALUE_INTEGER
     * @uses self::VALUE_DOUBLE
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_COLOR
     * @uses self::VALUE_LIST
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_STRING,
            self::VALUE_INTEGER,
            self::VALUE_DOUBLE,
            self::VALUE_DATE_TIME,
            self::VALUE_COLOR,
            self::VALUE_LIST,
        ];
    }
}
