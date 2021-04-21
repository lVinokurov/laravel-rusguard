<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MainIdentificationType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:MainIdentificationType
 * @subpackage Enumerations
 */
class MainIdentificationType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Card'
     * @return string 'Card'
     */
    const VALUE_CARD = 'Card';
    /**
     * Constant for value 'FaceSourceServer'
     * @return string 'FaceSourceServer'
     */
    const VALUE_FACE_SOURCE_SERVER = 'FaceSourceServer';
    /**
     * Constant for value 'FaceSourceController'
     * @return string 'FaceSourceController'
     */
    const VALUE_FACE_SOURCE_CONTROLLER = 'FaceSourceController';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_CARD
     * @uses self::VALUE_FACE_SOURCE_SERVER
     * @uses self::VALUE_FACE_SOURCE_CONTROLLER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_CARD,
            self::VALUE_FACE_SOURCE_SERVER,
            self::VALUE_FACE_SOURCE_CONTROLLER,
        ];
    }
}
