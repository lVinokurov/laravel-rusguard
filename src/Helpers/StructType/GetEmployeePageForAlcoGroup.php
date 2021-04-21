<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetEmployeePageForAlcoGroup StructType
 * @subpackage Structs
 */
class GetEmployeePageForAlcoGroup extends AbstractStructBase
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
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmployeesFilter|null
     */
    protected ?\StructType\EmployeesFilter $filter = null;
    /**
     * The employeeSearchId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeSearchId = null;
    /**
     * The onlyCount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $onlyCount = null;
    /**
     * Constructor method for GetEmployeePageForAlcoGroup
     * @uses GetEmployeePageForAlcoGroup::setAlcoGroupId()
     * @uses GetEmployeePageForAlcoGroup::setPageNumber()
     * @uses GetEmployeePageForAlcoGroup::setPageSize()
     * @uses GetEmployeePageForAlcoGroup::setSortedColumn()
     * @uses GetEmployeePageForAlcoGroup::setSortOrder()
     * @uses GetEmployeePageForAlcoGroup::setFilter()
     * @uses GetEmployeePageForAlcoGroup::setEmployeeSearchId()
     * @uses GetEmployeePageForAlcoGroup::setOnlyCount()
     * @param string $alcoGroupId
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param \StructType\EmployeesFilter $filter
     * @param string $employeeSearchId
     * @param bool $onlyCount
     */
    public function __construct(?string $alcoGroupId = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?\StructType\EmployeesFilter $filter = null, ?string $employeeSearchId = null, ?bool $onlyCount = null)
    {
        $this
            ->setAlcoGroupId($alcoGroupId)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setFilter($filter)
            ->setEmployeeSearchId($employeeSearchId)
            ->setOnlyCount($onlyCount);
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
     * @return \StructType\GetEmployeePageForAlcoGroup
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
     * @return \StructType\GetEmployeePageForAlcoGroup
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
     * @return \StructType\GetEmployeePageForAlcoGroup
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
     * @return \StructType\GetEmployeePageForAlcoGroup
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
     * @return \StructType\GetEmployeePageForAlcoGroup
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
     * Get filter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmployeesFilter|null
     */
    public function getFilter(): ?\StructType\EmployeesFilter
    {
        return isset($this->filter) ? $this->filter : null;
    }
    /**
     * Set filter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\EmployeesFilter $filter
     * @return \StructType\GetEmployeePageForAlcoGroup
     */
    public function setFilter(?\StructType\EmployeesFilter $filter = null): self
    {
        if (is_null($filter) || (is_array($filter) && empty($filter))) {
            unset($this->filter);
        } else {
            $this->filter = $filter;
        }
        
        return $this;
    }
    /**
     * Get employeeSearchId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getEmployeeSearchId(): ?string
    {
        return isset($this->employeeSearchId) ? $this->employeeSearchId : null;
    }
    /**
     * Set employeeSearchId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $employeeSearchId
     * @return \StructType\GetEmployeePageForAlcoGroup
     */
    public function setEmployeeSearchId(?string $employeeSearchId = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeSearchId) && !is_string($employeeSearchId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeSearchId, true), gettype($employeeSearchId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeSearchId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeSearchId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeSearchId, true)), __LINE__);
        }
        if (is_null($employeeSearchId) || (is_array($employeeSearchId) && empty($employeeSearchId))) {
            unset($this->employeeSearchId);
        } else {
            $this->employeeSearchId = $employeeSearchId;
        }
        
        return $this;
    }
    /**
     * Get onlyCount value
     * @return bool|null
     */
    public function getOnlyCount(): ?bool
    {
        return $this->onlyCount;
    }
    /**
     * Set onlyCount value
     * @param bool $onlyCount
     * @return \StructType\GetEmployeePageForAlcoGroup
     */
    public function setOnlyCount(?bool $onlyCount = null): self
    {
        // validation for constraint: boolean
        if (!is_null($onlyCount) && !is_bool($onlyCount)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($onlyCount, true), gettype($onlyCount)), __LINE__);
        }
        $this->onlyCount = $onlyCount;
        
        return $this;
    }
}
