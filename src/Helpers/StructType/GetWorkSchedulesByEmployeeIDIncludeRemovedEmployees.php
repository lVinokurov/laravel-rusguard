<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
 * StructType
 * @subpackage Structs
 */
class GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees extends AbstractStructBase
{
    /**
     * The employeeID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeID = null;
    /**
     * The pageNumber
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $pageNumber = null;
    /**
     * The pageSize
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $pageSize = null;
    /**
     * The sortedColumn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortedColumn = null;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortOrder = null;
    /**
     * The workSchedulesOwner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $workSchedulesOwner = null;
    /**
     * The includeRemovedEmployees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeRemovedEmployees = null;
    /**
     * Constructor method for GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees::setEmployeeID()
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees::setPageNumber()
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees::setPageSize()
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees::setSortedColumn()
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees::setSortOrder()
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees::setWorkSchedulesOwner()
     * @uses GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees::setIncludeRemovedEmployees()
     * @param string $employeeID
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param string $workSchedulesOwner
     * @param bool $includeRemovedEmployees
     */
    public function __construct(?string $employeeID = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?string $workSchedulesOwner = null, ?bool $includeRemovedEmployees = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setWorkSchedulesOwner($workSchedulesOwner)
            ->setIncludeRemovedEmployees($includeRemovedEmployees);
    }
    /**
     * Get employeeID value
     * @return string|null
     */
    public function getEmployeeID(): ?string
    {
        return $this->employeeID;
    }
    /**
     * Set employeeID value
     * @param string $employeeID
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     */
    public function setEmployeeID(?string $employeeID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeID) && !is_string($employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeID, true), gettype($employeeID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeID, true)), __LINE__);
        }
        $this->employeeID = $employeeID;
        
        return $this;
    }
    /**
     * Get pageNumber value
     * @return int|null
     */
    public function getPageNumber(): ?int
    {
        return $this->pageNumber;
    }
    /**
     * Set pageNumber value
     * @param int $pageNumber
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     */
    public function setPageNumber(?int $pageNumber = null): self
    {
        // validation for constraint: int
        if (!is_null($pageNumber) && !(is_int($pageNumber) || ctype_digit($pageNumber))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageNumber, true), gettype($pageNumber)), __LINE__);
        }
        $this->pageNumber = $pageNumber;
        
        return $this;
    }
    /**
     * Get pageSize value
     * @return int|null
     */
    public function getPageSize(): ?int
    {
        return $this->pageSize;
    }
    /**
     * Set pageSize value
     * @param int $pageSize
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     */
    public function setPageSize(?int $pageSize = null): self
    {
        // validation for constraint: int
        if (!is_null($pageSize) && !(is_int($pageSize) || ctype_digit($pageSize))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pageSize, true), gettype($pageSize)), __LINE__);
        }
        $this->pageSize = $pageSize;
        
        return $this;
    }
    /**
     * Get sortedColumn value
     * @return string|null
     */
    public function getSortedColumn(): ?string
    {
        return $this->sortedColumn;
    }
    /**
     * Set sortedColumn value
     * @uses \EnumType\WorkScheduleSortedColumn::valueIsValid()
     * @uses \EnumType\WorkScheduleSortedColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortedColumn
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     */
    public function setSortedColumn(?string $sortedColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\WorkScheduleSortedColumn::valueIsValid($sortedColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\WorkScheduleSortedColumn', is_array($sortedColumn) ? implode(', ', $sortedColumn) : var_export($sortedColumn, true), implode(', ', \EnumType\WorkScheduleSortedColumn::getValidValues())), __LINE__);
        }
        $this->sortedColumn = $sortedColumn;
        
        return $this;
    }
    /**
     * Get sortOrder value
     * @return string|null
     */
    public function getSortOrder(): ?string
    {
        return $this->sortOrder;
    }
    /**
     * Set sortOrder value
     * @uses \EnumType\SortOrder::valueIsValid()
     * @uses \EnumType\SortOrder::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortOrder
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     */
    public function setSortOrder(?string $sortOrder = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\SortOrder::valueIsValid($sortOrder)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\SortOrder', is_array($sortOrder) ? implode(', ', $sortOrder) : var_export($sortOrder, true), implode(', ', \EnumType\SortOrder::getValidValues())), __LINE__);
        }
        $this->sortOrder = $sortOrder;
        
        return $this;
    }
    /**
     * Get workSchedulesOwner value
     * @return string|null
     */
    public function getWorkSchedulesOwner(): ?string
    {
        return $this->workSchedulesOwner;
    }
    /**
     * Set workSchedulesOwner value
     * @uses \EnumType\WorkSchedulesOwner::valueIsValid()
     * @uses \EnumType\WorkSchedulesOwner::getValidValues()
     * @throws InvalidArgumentException
     * @param string $workSchedulesOwner
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     */
    public function setWorkSchedulesOwner(?string $workSchedulesOwner = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\WorkSchedulesOwner::valueIsValid($workSchedulesOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\WorkSchedulesOwner', is_array($workSchedulesOwner) ? implode(', ', $workSchedulesOwner) : var_export($workSchedulesOwner, true), implode(', ', \EnumType\WorkSchedulesOwner::getValidValues())), __LINE__);
        }
        $this->workSchedulesOwner = $workSchedulesOwner;
        
        return $this;
    }
    /**
     * Get includeRemovedEmployees value
     * @return bool|null
     */
    public function getIncludeRemovedEmployees(): ?bool
    {
        return $this->includeRemovedEmployees;
    }
    /**
     * Set includeRemovedEmployees value
     * @param bool $includeRemovedEmployees
     * @return \StructType\GetWorkSchedulesByEmployeeIDIncludeRemovedEmployees
     */
    public function setIncludeRemovedEmployees(?bool $includeRemovedEmployees = null): self
    {
        // validation for constraint: boolean
        if (!is_null($includeRemovedEmployees) && !is_bool($includeRemovedEmployees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($includeRemovedEmployees, true), gettype($includeRemovedEmployees)), __LINE__);
        }
        $this->includeRemovedEmployees = $includeRemovedEmployees;
        
        return $this;
    }
}
