<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AccessLevelsOwner EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AccessLevelsOwner
 * @subpackage Enumerations
 */
class AccessLevelsOwner extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Parent'
     * @return string 'Parent'
     */
    const VALUE_PARENT = 'Parent';
    /**
     * Constant for value 'Self'
     * @return string 'Self'
     */
    const VALUE_SELF = 'Self';
    /**
     * Return allowed values
     * @uses self::VALUE_PARENT
     * @uses self::VALUE_SELF
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_PARENT,
            self::VALUE_SELF,
        ];
    }
}
