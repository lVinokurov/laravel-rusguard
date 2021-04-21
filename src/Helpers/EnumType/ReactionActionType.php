<?php

declare(strict_types=1);

namespace EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ReactionActionType EnumType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ReactionActionType
 * @subpackage Enumerations
 */
class ReactionActionType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'SendSMS'
     * @return string 'SendSMS'
     */
    const VALUE_SEND_SMS = 'SendSMS';
    /**
     * Constant for value 'SendEmail'
     * @return string 'SendEmail'
     */
    const VALUE_SEND_EMAIL = 'SendEmail';
    /**
     * Constant for value 'ExecuteProgram'
     * @return string 'ExecuteProgram'
     */
    const VALUE_EXECUTE_PROGRAM = 'ExecuteProgram';
    /**
     * Constant for value 'RecordVideo'
     * @return string 'RecordVideo'
     */
    const VALUE_RECORD_VIDEO = 'RecordVideo';
    /**
     * Return allowed values
     * @uses self::VALUE_SEND_SMS
     * @uses self::VALUE_SEND_EMAIL
     * @uses self::VALUE_EXECUTE_PROGRAM
     * @uses self::VALUE_RECORD_VIDEO
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SEND_SMS,
            self::VALUE_SEND_EMAIL,
            self::VALUE_EXECUTE_PROGRAM,
            self::VALUE_RECORD_VIDEO,
        ];
    }
}
