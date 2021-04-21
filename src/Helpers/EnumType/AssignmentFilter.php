<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for AssignmentFilter EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:AssignmentFilter
 * @subpackage Enumerations
 */
class AssignmentFilter extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Position'
     * @return string 'Position'
     */
    const VALUE_POSITION = 'Position';
    /**
     * Constant for value 'Group'
     * @return string 'Group'
     */
    const VALUE_GROUP = 'Group';
    /**
     * Constant for value 'PositionCode'
     * @return string 'PositionCode'
     */
    const VALUE_POSITION_CODE = 'PositionCode';
    /**
     * Return allowed values
     * @uses self::VALUE_POSITION
     * @uses self::VALUE_GROUP
     * @uses self::VALUE_POSITION_CODE
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_POSITION,
            self::VALUE_GROUP,
            self::VALUE_POSITION_CODE,
        ];
    }
}
