<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeeForAlcoGroup StructType
 * @subpackage Structs
 */
class GetEmployeeForAlcoGroup extends AbstractStructBase
{
    /**
     * The alcoGroupId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $alcoGroupId = null;
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
     * The isCountingEmployeesEveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isCountingEmployeesEveryTime = null;
    /**
     * Constructor method for GetEmployeeForAlcoGroup
     * @uses GetEmployeeForAlcoGroup::setAlcoGroupId()
     * @uses GetEmployeeForAlcoGroup::setPageNumber()
     * @uses GetEmployeeForAlcoGroup::setPageSize()
     * @uses GetEmployeeForAlcoGroup::setSortedColumn()
     * @uses GetEmployeeForAlcoGroup::setSortOrder()
     * @uses GetEmployeeForAlcoGroup::setIsCountingEmployeesEveryTime()
     * @param string $alcoGroupId
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param bool $isCountingEmployeesEveryTime
     */
    public function __construct(?string $alcoGroupId = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?bool $isCountingEmployeesEveryTime = null)
    {
        $this
            ->setAlcoGroupId($alcoGroupId)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setIsCountingEmployeesEveryTime($isCountingEmployeesEveryTime);
    }
    /**
     * Get alcoGroupId value
     * @return string|null
     */
    public function getAlcoGroupId(): ?string
    {
        return $this->alcoGroupId;
    }
    /**
     * Set alcoGroupId value
     * @param string $alcoGroupId
     * @return \StructType\GetEmployeeForAlcoGroup
     */
    public function setAlcoGroupId(?string $alcoGroupId = null): self
    {
        // validation for constraint: string
        if (!is_null($alcoGroupId) && !is_string($alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($alcoGroupId, true), gettype($alcoGroupId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($alcoGroupId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $alcoGroupId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($alcoGroupId, true)), __LINE__);
        }
        $this->alcoGroupId = $alcoGroupId;
        
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
     * @return \StructType\GetEmployeeForAlcoGroup
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
     * @return \StructType\GetEmployeeForAlcoGroup
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
     * @uses \EnumType\EmployeeSortedColumn::valueIsValid()
     * @uses \EnumType\EmployeeSortedColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortedColumn
     * @return \StructType\GetEmployeeForAlcoGroup
     */
    public function setSortedColumn(?string $sortedColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\EmployeeSortedColumn::valueIsValid($sortedColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\EmployeeSortedColumn', is_array($sortedColumn) ? implode(', ', $sortedColumn) : var_export($sortedColumn, true), implode(', ', \EnumType\EmployeeSortedColumn::getValidValues())), __LINE__);
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
     * @return \StructType\GetEmployeeForAlcoGroup
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
     * Get isCountingEmployeesEveryTime value
     * @return bool|null
     */
    public function getIsCountingEmployeesEveryTime(): ?bool
    {
        return $this->isCountingEmployeesEveryTime;
    }
    /**
     * Set isCountingEmployeesEveryTime value
     * @param bool $isCountingEmployeesEveryTime
     * @return \StructType\GetEmployeeForAlcoGroup
     */
    public function setIsCountingEmployeesEveryTime(?bool $isCountingEmployeesEveryTime = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isCountingEmployeesEveryTime) && !is_bool($isCountingEmployeesEveryTime)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isCountingEmployeesEveryTime, true), gettype($isCountingEmployeesEveryTime)), __LINE__);
        }
        $this->isCountingEmployeesEveryTime = $isCountingEmployeesEveryTime;
        
        return $this;
    }
}
