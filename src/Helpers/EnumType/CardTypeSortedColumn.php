<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CardTypeSortedColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CardTypeSortedColumn
 * @subpackage Enumerations
 */
class CardTypeSortedColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'Comment'
     * @return string 'Comment'
     */
    const VALUE_COMMENT = 'Comment';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_NAME
     * @uses self::VALUE_COMMENT
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_NAME,
            self::VALUE_COMMENT,
        ];
    }
}
