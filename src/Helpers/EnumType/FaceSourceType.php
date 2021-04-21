<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FaceSourceType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FaceSourceType
 * @subpackage Enumerations
 */
class FaceSourceType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Image'
     * @return string 'Image'
     */
    const VALUE_IMAGE = 'Image';
    /**
     * Constant for value 'Camera'
     * @return string 'Camera'
     */
    const VALUE_CAMERA = 'Camera';
    /**
     * Return allowed values
     * @uses self::VALUE_IMAGE
     * @uses self::VALUE_CAMERA
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_IMAGE,
            self::VALUE_CAMERA,
        ];
    }
}
