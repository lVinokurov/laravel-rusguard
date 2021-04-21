<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ProcessingData EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ProcessingData
 * @subpackage Enumerations
 */
class ProcessingData extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Keys'
     * @return string 'Keys'
     */
    const VALUE_KEYS = 'Keys';
    /**
     * Constant for value 'Faces'
     * @return string 'Faces'
     */
    const VALUE_FACES = 'Faces';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return allowed values
     * @uses self::VALUE_KEYS
     * @uses self::VALUE_FACES
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_KEYS,
            self::VALUE_FACES,
            self::VALUE_ALL,
        ];
    }
}
