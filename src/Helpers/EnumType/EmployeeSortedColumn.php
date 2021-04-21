<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for EmployeeSortedColumn EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:EmployeeSortedColumn
 * @subpackage Enumerations
 */
class EmployeeSortedColumn extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'FullName'
     * @return string 'FullName'
     */
    const VALUE_FULL_NAME = 'FullName';
    /**
     * Constant for value 'LastName'
     * @return string 'LastName'
     */
    const VALUE_LAST_NAME = 'LastName';
    /**
     * Constant for value 'FirstName'
     * @return string 'FirstName'
     */
    const VALUE_FIRST_NAME = 'FirstName';
    /**
     * Constant for value 'SecondName'
     * @return string 'SecondName'
     */
    const VALUE_SECOND_NAME = 'SecondName';
    /**
     * Constant for value 'TabNumber'
     * @return string 'TabNumber'
     */
    const VALUE_TAB_NUMBER = 'TabNumber';
    /**
     * Constant for value 'Position'
     * @return string 'Position'
     */
    const VALUE_POSITION = 'Position';
    /**
     * Constant for value 'Satatus'
     * @return string 'Satatus'
     */
    const VALUE_SATATUS = 'Satatus';
    /**
     * Constant for value 'FirstKey'
     * @return string 'FirstKey'
     */
    const VALUE_FIRST_KEY = 'FirstKey';
    /**
     * Constant for value 'SecondKey'
     * @return string 'SecondKey'
     */
    const VALUE_SECOND_KEY = 'SecondKey';
    /**
     * Constant for value 'AccessLevel'
     * @return string 'AccessLevel'
     */
    const VALUE_ACCESS_LEVEL = 'AccessLevel';
    /**
     * Constant for value 'WorkSchedule'
     * @return string 'WorkSchedule'
     */
    const VALUE_WORK_SCHEDULE = 'WorkSchedule';
    /**
     * Constant for value 'WorkZone'
     * @return string 'WorkZone'
     */
    const VALUE_WORK_ZONE = 'WorkZone';
    /**
     * Constant for value 'IsPhotoAny'
     * @return string 'IsPhotoAny'
     */
    const VALUE_IS_PHOTO_ANY = 'IsPhotoAny';
    /**
     * Constant for value 'GroupPath'
     * @return string 'GroupPath'
     */
    const VALUE_GROUP_PATH = 'GroupPath';
    /**
     * Constant for value 'ModificationDateTime'
     * @return string 'ModificationDateTime'
     */
    const VALUE_MODIFICATION_DATE_TIME = 'ModificationDateTime';
    /**
     * Constant for value 'CreationDateTime'
     * @return string 'CreationDateTime'
     */
    const VALUE_CREATION_DATE_TIME = 'CreationDateTime';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_FULL_NAME
     * @uses self::VALUE_LAST_NAME
     * @uses self::VALUE_FIRST_NAME
     * @uses self::VALUE_SECOND_NAME
     * @uses self::VALUE_TAB_NUMBER
     * @uses self::VALUE_POSITION
     * @uses self::VALUE_SATATUS
     * @uses self::VALUE_FIRST_KEY
     * @uses self::VALUE_SECOND_KEY
     * @uses self::VALUE_ACCESS_LEVEL
     * @uses self::VALUE_WORK_SCHEDULE
     * @uses self::VALUE_WORK_ZONE
     * @uses self::VALUE_IS_PHOTO_ANY
     * @uses self::VALUE_GROUP_PATH
     * @uses self::VALUE_MODIFICATION_DATE_TIME
     * @uses self::VALUE_CREATION_DATE_TIME
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_FULL_NAME,
            self::VALUE_LAST_NAME,
            self::VALUE_FIRST_NAME,
            self::VALUE_SECOND_NAME,
            self::VALUE_TAB_NUMBER,
            self::VALUE_POSITION,
            self::VALUE_SATATUS,
            self::VALUE_FIRST_KEY,
            self::VALUE_SECOND_KEY,
            self::VALUE_ACCESS_LEVEL,
            self::VALUE_WORK_SCHEDULE,
            self::VALUE_WORK_ZONE,
            self::VALUE_IS_PHOTO_ANY,
            self::VALUE_GROUP_PATH,
            self::VALUE_MODIFICATION_DATE_TIME,
            self::VALUE_CREATION_DATE_TIME,
        ];
    }
}
