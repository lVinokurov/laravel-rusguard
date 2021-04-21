<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SearchWay EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SearchWay
 * @subpackage Enumerations
 */
class SearchWay extends AbstractStructEnumBase
{
    /**
     * Constant for value 'FIO'
     * @return string 'FIO'
     */
    const VALUE_FIO = 'FIO';
    /**
     * Constant for value 'TableNumber'
     * @return string 'TableNumber'
     */
    const VALUE_TABLE_NUMBER = 'TableNumber';
    /**
     * Constant for value 'Keys'
     * @return string 'Keys'
     */
    const VALUE_KEYS = 'Keys';
    /**
     * Constant for value 'Email'
     * @return string 'Email'
     */
    const VALUE_EMAIL = 'Email';
    /**
     * Constant for value 'Phone'
     * @return string 'Phone'
     */
    const VALUE_PHONE = 'Phone';
    /**
     * Constant for value 'Birthday'
     * @return string 'Birthday'
     */
    const VALUE_BIRTHDAY = 'Birthday';
    /**
     * Constant for value 'PassportNumber'
     * @return string 'PassportNumber'
     */
    const VALUE_PASSPORT_NUMBER = 'PassportNumber';
    /**
     * Constant for value 'AddField'
     * @return string 'AddField'
     */
    const VALUE_ADD_FIELD = 'AddField';
    /**
     * Return allowed values
     * @uses self::VALUE_FIO
     * @uses self::VALUE_TABLE_NUMBER
     * @uses self::VALUE_KEYS
     * @uses self::VALUE_EMAIL
     * @uses self::VALUE_PHONE
     * @uses self::VALUE_BIRTHDAY
     * @uses self::VALUE_PASSPORT_NUMBER
     * @uses self::VALUE_ADD_FIELD
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_FIO,
            self::VALUE_TABLE_NUMBER,
            self::VALUE_KEYS,
            self::VALUE_EMAIL,
            self::VALUE_PHONE,
            self::VALUE_BIRTHDAY,
            self::VALUE_PASSPORT_NUMBER,
            self::VALUE_ADD_FIELD,
        ];
    }
}
