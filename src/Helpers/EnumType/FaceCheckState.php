<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for FaceCheckState EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:FaceCheckState
 * @subpackage Enumerations
 */
class FaceCheckState extends AbstractStructEnumBase
{
    /**
     * Constant for value 'NotRequired'
     * @return string 'NotRequired'
     */
    const VALUE_NOT_REQUIRED = 'NotRequired';
    /**
     * Constant for value 'FaceRecognized'
     * @return string 'FaceRecognized'
     */
    const VALUE_FACE_RECOGNIZED = 'FaceRecognized';
    /**
     * Constant for value 'FaceNotRecognized'
     * @return string 'FaceNotRecognized'
     */
    const VALUE_FACE_NOT_RECOGNIZED = 'FaceNotRecognized';
    /**
     * Constant for value 'FaceSoftMode'
     * @return string 'FaceSoftMode'
     */
    const VALUE_FACE_SOFT_MODE = 'FaceSoftMode';
    /**
     * Return allowed values
     * @uses self::VALUE_NOT_REQUIRED
     * @uses self::VALUE_FACE_RECOGNIZED
     * @uses self::VALUE_FACE_NOT_RECOGNIZED
     * @uses self::VALUE_FACE_SOFT_MODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NOT_REQUIRED,
            self::VALUE_FACE_RECOGNIZED,
            self::VALUE_FACE_NOT_RECOGNIZED,
            self::VALUE_FACE_SOFT_MODE,
        ];
    }
}
