<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeTimeTable StructType
 * @subpackage Structs
 */
class GetEmployeeTimeTable extends AbstractStructBase
{
    /**
     * The employeeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeId = null;
    /**
     * The filterDateTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $filterDateTime = null;
    /**
     * Constructor method for GetEmployeeTimeTable
     * @uses GetEmployeeTimeTable::setEmployeeId()
     * @uses GetEmployeeTimeTable::setFilterDateTime()
     * @param string $employeeId
     * @param string $filterDateTime
     */
    public function __construct(?string $employeeId = null, ?string $filterDateTime = null)
    {
        $this
            ->setEmployeeId($employeeId)
            ->setFilterDateTime($filterDateTime);
    }
    /**
     * Get employeeId value
     * @return string|null
     */
    public function getEmployeeId(): ?string
    {
        return $this->employeeId;
    }
    /**
     * Set employeeId value
     * @param string $employeeId
     * @return \StructType\GetEmployeeTimeTable
     */
    public function setEmployeeId(?string $employeeId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeId) && !is_string($employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeId, true), gettype($employeeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeId, true)), __LINE__);
        }
        $this->employeeId = $employeeId;
        
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
     * @return \StructType\GetEmployeeTimeTable
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
