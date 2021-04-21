<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for IncidentSortedColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:IncidentSortedColumn
 * @subpackage Enumerations
 */
class IncidentSortedColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'DateTime'
     * @return string 'DateTime'
     */
    const VALUE_DATE_TIME = 'DateTime';
    /**
     * Constant for value 'Date'
     * @return string 'Date'
     */
    const VALUE_DATE = 'Date';
    /**
     * Constant for value 'Time'
     * @return string 'Time'
     */
    const VALUE_TIME = 'Time';
    /**
     * Constant for value 'IsIncludeToReport'
     * @return string 'IsIncludeToReport'
     */
    const VALUE_IS_INCLUDE_TO_REPORT = 'IsIncludeToReport';
    /**
     * Constant for value 'SignificanceName'
     * @return string 'SignificanceName'
     */
    const VALUE_SIGNIFICANCE_NAME = 'SignificanceName';
    /**
     * Constant for value 'DocumentNumber'
     * @return string 'DocumentNumber'
     */
    const VALUE_DOCUMENT_NUMBER = 'DocumentNumber';
    /**
     * Constant for value 'DocumentTypeName'
     * @return string 'DocumentTypeName'
     */
    const VALUE_DOCUMENT_TYPE_NAME = 'DocumentTypeName';
    /**
     * Constant for value 'SecurityGroupName'
     * @return string 'SecurityGroupName'
     */
    const VALUE_SECURITY_GROUP_NAME = 'SecurityGroupName';
    /**
     * Constant for value 'BranchName'
     * @return string 'BranchName'
     */
    const VALUE_BRANCH_NAME = 'BranchName';
    /**
     * Constant for value 'Location'
     * @return string 'Location'
     */
    const VALUE_LOCATION = 'Location';
    /**
     * Constant for value 'LocationClarification'
     * @return string 'LocationClarification'
     */
    const VALUE_LOCATION_CLARIFICATION = 'LocationClarification';
    /**
     * Constant for value 'EmployeeFullName'
     * @return string 'EmployeeFullName'
     */
    const VALUE_EMPLOYEE_FULL_NAME = 'EmployeeFullName';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DATE_TIME
     * @uses self::VALUE_DATE
     * @uses self::VALUE_TIME
     * @uses self::VALUE_IS_INCLUDE_TO_REPORT
     * @uses self::VALUE_SIGNIFICANCE_NAME
     * @uses self::VALUE_DOCUMENT_NUMBER
     * @uses self::VALUE_DOCUMENT_TYPE_NAME
     * @uses self::VALUE_SECURITY_GROUP_NAME
     * @uses self::VALUE_BRANCH_NAME
     * @uses self::VALUE_LOCATION
     * @uses self::VALUE_LOCATION_CLARIFICATION
     * @uses self::VALUE_EMPLOYEE_FULL_NAME
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_DATE_TIME,
            self::VALUE_DATE,
            self::VALUE_TIME,
            self::VALUE_IS_INCLUDE_TO_REPORT,
            self::VALUE_SIGNIFICANCE_NAME,
            self::VALUE_DOCUMENT_NUMBER,
            self::VALUE_DOCUMENT_TYPE_NAME,
            self::VALUE_SECURITY_GROUP_NAME,
            self::VALUE_BRANCH_NAME,
            self::VALUE_LOCATION,
            self::VALUE_LOCATION_CLARIFICATION,
            self::VALUE_EMPLOYEE_FULL_NAME,
        ];
    }
}
