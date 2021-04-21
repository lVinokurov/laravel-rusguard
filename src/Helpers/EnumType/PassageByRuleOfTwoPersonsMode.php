<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for PassageByRuleOfTwoPersonsMode EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:PassageByRuleOfTwoPersonsMode
 * @subpackage Enumerations
 */
class PassageByRuleOfTwoPersonsMode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Off'
     * @return string 'Off'
     */
    const VALUE_OFF = 'Off';
    /**
     * Constant for value 'FirstPerson'
     * @return string 'FirstPerson'
     */
    const VALUE_FIRST_PERSON = 'FirstPerson';
    /**
     * Constant for value 'SecondPerson'
     * @return string 'SecondPerson'
     */
    const VALUE_SECOND_PERSON = 'SecondPerson';
    /**
     * Constant for value 'DoublePass'
     * @return string 'DoublePass'
     */
    const VALUE_DOUBLE_PASS = 'DoublePass';
    /**
     * Return allowed values
     * @uses self::VALUE_OFF
     * @uses self::VALUE_FIRST_PERSON
     * @uses self::VALUE_SECOND_PERSON
     * @uses self::VALUE_DOUBLE_PASS
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_OFF,
            self::VALUE_FIRST_PERSON,
            self::VALUE_SECOND_PERSON,
            self::VALUE_DOUBLE_PASS,
        ];
    }
}
