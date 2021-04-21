<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for SqlDbType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:SqlDbType
 * @subpackage Enumerations
 */
class SqlDbType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'BigInt'
     * @return string 'BigInt'
     */
    const VALUE_BIG_INT = 'BigInt';
    /**
     * Constant for value 'Binary'
     * @return string 'Binary'
     */
    const VALUE_BINARY = 'Binary';
    /**
     * Constant for value 'Bit'
     * @return string 'Bit'
     */
    const VALUE_BIT = 'Bit';
    /**
     * Constant for value 'Char'
     * @return string 'Char'
     */
    const VALUE_CHAR = 'Char';
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'Decimal'
     * @return string 'Decimal'
     */
    const VALUE_DECIMAL = 'Decimal';
    /**
     * Constant for value 'Float'
     * @return string 'Float'
     */
    const VALUE_FLOAT = 'Float';
    /**
     * Constant for value 'Image'
     * @return string 'Image'
     */
    const VALUE_IMAGE = 'Image';
    /**
     * Constant for value 'Int'
     * @return string 'Int'
     */
    const VALUE_INT = 'Int';
    /**
     * Constant for value 'Money'
     * @return string 'Money'
     */
    const VALUE_MONEY = 'Money';
    /**
     * Constant for value 'NChar'
     * @return string 'NChar'
     */
    const VALUE_NCHAR = 'NChar';
    /**
     * Constant for value 'NText'
     * @return string 'NText'
     */
    const VALUE_NTEXT = 'NText';
    /**
     * Constant for value 'NVarChar'
     * @return string 'NVarChar'
     */
    const VALUE_NVAR_CHAR = 'NVarChar';
    /**
     * Constant for value 'Real'
     * @return string 'Real'
     */
    const VALUE_REAL = 'Real';
    /**
     * Constant for value 'UniqueIdentifier'
     * @return string 'UniqueIdentifier'
     */
    const VALUE_UNIQUE_IDENTIFIER = 'UniqueIdentifier';
    /**
     * Constant for value 'SmallDateTime'
     * @return string 'SmallDateTime'
     */
    const VALUE_SMALL_DATE_TIME = 'SmallDateTime';
    /**
     * Constant for value 'SmallInt'
     * @return string 'SmallInt'
     */
    const VALUE_SMALL_INT = 'SmallInt';
    /**
     * Constant for value 'SmallMoney'
     * @return string 'SmallMoney'
     */
    const VALUE_SMALL_MONEY = 'SmallMoney';
    /**
     * Constant for value 'Text'
     * @return string 'Text'
     */
    const VALUE_TEXT = 'Text';
    /**
     * Constant for value 'Timestamp'
     * @return string 'Timestamp'
     */
    const VALUE_TIMESTAMP = 'Timestamp';
    /**
     * Constant for value 'TinyInt'
     * @return string 'TinyInt'
     */
    const VALUE_TINY_INT = 'TinyInt';
    /**
     * Constant for value 'VarBinary'
     * @return string 'VarBinary'
     */
    const VALUE_VAR_BINARY = 'VarBinary';
    /**
     * Constant for value 'VarChar'
     * @return string 'VarChar'
     */
    const VALUE_VAR_CHAR = 'VarChar';
    /**
     * Constant for value 'Variant'
     * @return string 'Variant'
     */
    const VALUE_VARIANT = 'Variant';
    /**
     * Constant for value 'Xml'
     * @return string 'Xml'
     */
    const VALUE_XML = 'Xml';
    /**
     * Constant for value 'Udt'
     * @return string 'Udt'
     */
    const VALUE_UDT = 'Udt';
    /**
     * Constant for value 'Structured'
     * @return string 'Structured'
     */
    const VALUE_STRUCTURED = 'Structured';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'Time'
     * @return string 'Time'
     */
    const VALUE_TIME = 'Time';
    /**
     * Constant for value 'DateTime2'
     * @return string 'DateTime2'
     */
    const VALUE_DATE_TIME_2 = 'DateTime2';
    /**
     * Constant for value 'DateTimeOffset'
     * @return string 'DateTimeOffset'
     */
    const VALUE_DATE_TIME_OFFSET = 'DateTimeOffset';
    /**
     * Return allowed values
     * @uses self::VALUE_BIG_INT
     * @uses self::VALUE_BINARY
     * @uses self::VALUE_BIT
     * @uses self::VALUE_CHAR
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_DECIMAL
     * @uses self::VALUE_FLOAT
     * @uses self::VALUE_IMAGE
     * @uses self::VALUE_INT
     * @uses self::VALUE_MONEY
     * @uses self::VALUE_NCHAR
     * @uses self::VALUE_NTEXT
     * @uses self::VALUE_NVAR_CHAR
     * @uses self::VALUE_REAL
     * @uses self::VALUE_UNIQUE_IDENTIFIER
     * @uses self::VALUE_SMALL_DATE_TIME
     * @uses self::VALUE_SMALL_INT
     * @uses self::VALUE_SMALL_MONEY
     * @uses self::VALUE_TEXT
     * @uses self::VALUE_TIMESTAMP
     * @uses self::VALUE_TINY_INT
     * @uses self::VALUE_VAR_BINARY
     * @uses self::VALUE_VAR_CHAR
     * @uses self::VALUE_VARIANT
     * @uses self::VALUE_XML
     * @uses self::VALUE_UDT
     * @uses self::VALUE_STRUCTURED
     * @uses self::VALUE_DATE
     * @uses self::VALUE_TIME
     * @uses self::VALUE_DATE_TIME_2
     * @uses self::VALUE_DATE_TIME_OFFSET
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_BIG_INT,
            self::VALUE_BINARY,
            self::VALUE_BIT,
            self::VALUE_CHAR,
            self::VALUE_DATE_TIME,
            self::VALUE_DECIMAL,
            self::VALUE_FLOAT,
            self::VALUE_IMAGE,
            self::VALUE_INT,
            self::VALUE_MONEY,
            self::VALUE_NCHAR,
            self::VALUE_NTEXT,
            self::VALUE_NVAR_CHAR,
            self::VALUE_REAL,
            self::VALUE_UNIQUE_IDENTIFIER,
            self::VALUE_SMALL_DATE_TIME,
            self::VALUE_SMALL_INT,
            self::VALUE_SMALL_MONEY,
            self::VALUE_TEXT,
            self::VALUE_TIMESTAMP,
            self::VALUE_TINY_INT,
            self::VALUE_VAR_BINARY,
            self::VALUE_VAR_CHAR,
            self::VALUE_VARIANT,
            self::VALUE_XML,
            self::VALUE_UDT,
            self::VALUE_STRUCTURED,
            self::VALUE_DATE,
            self::VALUE_TIME,
            self::VALUE_DATE_TIME_2,
            self::VALUE_DATE_TIME_OFFSET,
        ];
    }
}
