<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for GroupTypeSearch EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:GroupTypeSearch
 * @subpackage Enumerations
 */
class GroupTypeSearch extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Name'
     * @return string 'Name'
     */
    const VALUE_NAME = 'Name';
    /**
     * Constant for value 'Code'
     * @return string 'Code'
     */
    const VALUE_CODE = 'Code';
    /**
     * Constant for value 'Description'
     * @return string 'Description'
     */
    const VALUE_DESCRIPTION = 'Description';
    /**
     * Return allowed values
     * @uses self::VALUE_NAME
     * @uses self::VALUE_CODE
     * @uses self::VALUE_DESCRIPTION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NAME,
            self::VALUE_CODE,
            self::VALUE_DESCRIPTION,
        ];
    }
}
