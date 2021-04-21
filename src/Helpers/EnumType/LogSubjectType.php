<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for LogSubjectType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LogSubjectType
 * @subpackage Enumerations
 */
class LogSubjectType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Operator'
     * @return string 'Operator'
     */
    const VALUE_OPERATOR = 'Operator';
    /**
     * Constant for value 'OperatorGroup'
     * @return string 'OperatorGroup'
     */
    const VALUE_OPERATOR_GROUP = 'OperatorGroup';
    /**
     * Constant for value 'Employee'
     * @return string 'Employee'
     */
    const VALUE_EMPLOYEE = 'Employee';
    /**
     * Constant for value 'EmployeeGroup'
     * @return string 'EmployeeGroup'
     */
    const VALUE_EMPLOYEE_GROUP = 'EmployeeGroup';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_OPERATOR
     * @uses self::VALUE_OPERATOR_GROUP
     * @uses self::VALUE_EMPLOYEE
     * @uses self::VALUE_EMPLOYEE_GROUP
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_OPERATOR,
            self::VALUE_OPERATOR_GROUP,
            self::VALUE_EMPLOYEE,
            self::VALUE_EMPLOYEE_GROUP,
        ];
    }
}
