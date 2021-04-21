<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteWorkTimetable StructType
 * @subpackage Structs
 */
class DeleteWorkTimetable extends AbstractStructBase
{
    /**
     * The workScheduleId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $workScheduleId = null;
    /**
     * The beginDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $beginDateTime = null;
    /**
     * Constructor method for DeleteWorkTimetable
     * @uses DeleteWorkTimetable::setWorkScheduleId()
     * @uses DeleteWorkTimetable::setBeginDateTime()
     * @param string $workScheduleId
     * @param string $beginDateTime
     */
    public function __construct(?string $workScheduleId = null, ?string $beginDateTime = null)
    {
        $this
            ->setWorkScheduleId($workScheduleId)
            ->setBeginDateTime($beginDateTime);
    }
    /**
     * Get workScheduleId value
     * @return string|null
     */
    public function getWorkScheduleId(): ?string
    {
        return $this->workScheduleId;
    }
    /**
     * Set workScheduleId value
     * @param string $workScheduleId
     * @return \StructType\DeleteWorkTimetable
     */
    public function setWorkScheduleId(?string $workScheduleId = null): self
    {
        // validation for constraint: string
        if (!is_null($workScheduleId) && !is_string($workScheduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($workScheduleId, true), gettype($workScheduleId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($workScheduleId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $workScheduleId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($workScheduleId, true)), __LINE__);
        }
        $this->workScheduleId = $workScheduleId;
        
        return $this;
    }
    /**
     * Get beginDateTime value
     * @return string|null
     */
    public function getBeginDateTime(): ?string
    {
        return $this->beginDateTime;
    }
    /**
     * Set beginDateTime value
     * @param string $beginDateTime
     * @return \StructType\DeleteWorkTimetable
     */
    public function setBeginDateTime(?string $beginDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($beginDateTime) && !is_string($beginDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($beginDateTime, true), gettype($beginDateTime)), __LINE__);
        }
        $this->beginDateTime = $beginDateTime;
        
        return $this;
    }
}
