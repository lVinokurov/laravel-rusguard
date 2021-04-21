<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkTimeTable StructType
 * @subpackage Structs
 */
class GetWorkTimeTable extends AbstractStructBase
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
     * The filterDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterDateTime = null;
    /**
     * Constructor method for GetWorkTimeTable
     * @uses GetWorkTimeTable::setWorkScheduleId()
     * @uses GetWorkTimeTable::setFilterDateTime()
     * @param string $workScheduleId
     * @param string $filterDateTime
     */
    public function __construct(?string $workScheduleId = null, ?string $filterDateTime = null)
    {
        $this
            ->setWorkScheduleId($workScheduleId)
            ->setFilterDateTime($filterDateTime);
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
     * @return \StructType\GetWorkTimeTable
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
     * Get filterDateTime value
     * @return string|null
     */
    public function getFilterDateTime(): ?string
    {
        return $this->filterDateTime;
    }
    /**
     * Set filterDateTime value
     * @param string $filterDateTime
     * @return \StructType\GetWorkTimeTable
     */
    public function setFilterDateTime(?string $filterDateTime = null): self
    {
        // validation for constraint: string
        if (!is_null($filterDateTime) && !is_string($filterDateTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filterDateTime, true), gettype($filterDateTime)), __LINE__);
        }
        $this->filterDateTime = $filterDateTime;
        
        return $this;
    }
}
