<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Extension EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:Extension
 * @subpackage Enumerations
 */
class Extension extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Word'
     * @return string 'Word'
     */
    const VALUE_WORD = 'Word';
    /**
     * Constant for value 'Excel'
     * @return string 'Excel'
     */
    const VALUE_EXCEL = 'Excel';
    /**
     * Return allowed values
     * @uses self::VALUE_WORD
     * @uses self::VALUE_EXCEL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WORD,
            self::VALUE_EXCEL,
        ];
    }
}
