<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for WorkZoneVisitorsCountDTO StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:WorkZoneVisitorsCountDTO
 * @subpackage Structs
 */
class WorkZoneVisitorsCountDTO extends AbstractStructBase
{
    /**
     * The EmployeesCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $EmployeesCount = null;
    /**
     * The GuestsCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $GuestsCount = null;
    /**
     * The Total
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Total = null;
    /**
     * Constructor method for WorkZoneVisitorsCountDTO
     * @uses WorkZoneVisitorsCountDTO::setEmployeesCount()
     * @uses WorkZoneVisitorsCountDTO::setGuestsCount()
     * @uses WorkZoneVisitorsCountDTO::setTotal()
     * @param int $employeesCount
     * @param int $guestsCount
     * @param int $total
     */
    public function __construct(?int $employeesCount = null, ?int $guestsCount = null, ?int $total = null)
    {
        $this
            ->setEmployeesCount($employeesCount)
            ->setGuestsCount($guestsCount)
            ->setTotal($total);
    }
    /**
     * Get EmployeesCount value
     * @return int|null
     */
    public function getEmployeesCount(): ?int
    {
        return $this->EmployeesCount;
    }
    /**
     * Set EmployeesCount value
     * @param int $employeesCount
     * @return \StructType\WorkZoneVisitorsCountDTO
     */
    public function setEmployeesCount(?int $employeesCount = null): self
    {
        // validation for constraint: int
        if (!is_null($employeesCount) && !(is_int($employeesCount) || ctype_digit($employeesCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($employeesCount, true), gettype($employeesCount)), __LINE__);
        }
        $this->EmployeesCount = $employeesCount;
        
        return $this;
    }
    /**
     * Get GuestsCount value
     * @return int|null
     */
    public function getGuestsCount(): ?int
    {
        return $this->GuestsCount;
    }
    /**
     * Set GuestsCount value
     * @param int $guestsCount
     * @return \StructType\WorkZoneVisitorsCountDTO
     */
    public function setGuestsCount(?int $guestsCount = null): self
    {
        // validation for constraint: int
        if (!is_null($guestsCount) && !(is_int($guestsCount) || ctype_digit($guestsCount))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($guestsCount, true), gettype($guestsCount)), __LINE__);
        }
        $this->GuestsCount = $guestsCount;
        
        return $this;
    }
    /**
     * Get Total value
     * @return int|null
     */
    public function getTotal(): ?int
    {
        return $this->Total;
    }
    /**
     * Set Total value
     * @param int $total
     * @return \StructType\WorkZoneVisitorsCountDTO
     */
    public function setTotal(?int $total = null): self
    {
        // validation for constraint: int
        if (!is_null($total) && !(is_int($total) || ctype_digit($total))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($total, true), gettype($total)), __LINE__);
        }
        $this->Total = $total;
        
        return $this;
    }
}
