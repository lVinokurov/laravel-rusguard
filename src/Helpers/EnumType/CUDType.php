<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for CUDType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:CUDType
 * @subpackage Enumerations
 */
class CUDType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Create'
     * @return string 'Create'
     */
    const VALUE_CREATE = 'Create';
    /**
     * Constant for value 'Delete'
     * @return string 'Delete'
     */
    const VALUE_DELETE = 'Delete';
    /**
     * Return allowed values
     * @uses self::VALUE_CREATE
     * @uses self::VALUE_DELETE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_CREATE,
            self::VALUE_DELETE,
        ];
    }
}
