<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAcsEmployees StructType
 * @subpackage Structs
 */
class GetAcsEmployees extends AbstractStructBase
{
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
     * The isShowRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isShowRemoved = null;
    /**
     * The securityGroupIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $securityGroupIds = null;
    /**
     * The isCountingEmployeesEveryTime
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isCountingEmployeesEveryTime = null;
    /**
     * The filter
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $filter = null;
    /**
     * Constructor method for GetAcsEmployees
     * @uses GetAcsEmployees::setPageNumber()
     * @uses GetAcsEmployees::setPageSize()
     * @uses GetAcsEmployees::setSortedColumn()
     * @uses GetAcsEmployees::setSortOrder()
     * @uses GetAcsEmployees::setIsShowRemoved()
     * @uses GetAcsEmployees::setSecurityGroupIds()
     * @uses GetAcsEmployees::setIsCountingEmployeesEveryTime()
     * @uses GetAcsEmployees::setFilter()
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param bool $isShowRemoved
     * @param \ArrayType\ArrayOfguid $securityGroupIds
     * @param bool $isCountingEmployeesEveryTime
     * @param string $filter
     */
    public function __construct(?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?bool $isShowRemoved = null, ?\ArrayType\ArrayOfguid $securityGroupIds = null, ?bool $isCountingEmployeesEveryTime = null, ?string $filter = null)
    {
        $this
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setIsShowRemoved($isShowRemoved)
            ->setSecurityGroupIds($securityGroupIds)
            ->setIsCountingEmployeesEveryTime($isCountingEmployeesEveryTime)
            ->setFilter($filter);
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
     * @return \StructType\GetAcsEmployees
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
     * @return \StructType\GetAcsEmployees
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
     * @return \StructType\GetAcsEmployees
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
     * @return \StructType\GetAcsEmployees
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
     * Get isShowRemoved value
     * @return bool|null
     */
    public function getIsShowRemoved(): ?bool
    {
        return $this->isShowRemoved;
    }
    /**
     * Set isShowRemoved value
     * @param bool $isShowRemoved
     * @return \StructType\GetAcsEmployees
     */
    public function setIsShowRemoved(?bool $isShowRemoved = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isShowRemoved) && !is_bool($isShowRemoved)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isShowRemoved, true), gettype($isShowRemoved)), __LINE__);
        }
        $this->isShowRemoved = $isShowRemoved;
        
        return $this;
    }
    /**
     * Get securityGroupIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getSecurityGroupIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->securityGroupIds) ? $this->securityGroupIds : null;
    }
    /**
     * Set securityGroupIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $securityGroupIds
     * @return \StructType\GetAcsEmployees
     */
    public function setSecurityGroupIds(?\ArrayType\ArrayOfguid $securityGroupIds = null): self
    {
        if (is_null($securityGroupIds) || (is_array($securityGroupIds) && empty($securityGroupIds))) {
            unset($this->securityGroupIds);
        } else {
            $this->securityGroupIds = $securityGroupIds;
        }
        
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
     * @return \StructType\GetAcsEmployees
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
    /**
     * Get filter value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFilter(): ?string
    {
        return isset($this->filter) ? $this->filter : null;
    }
    /**
     * Set filter value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $filter
     * @return \StructType\GetAcsEmployees
     */
    public function setFilter(?string $filter = null): self
    {
        // validation for constraint: string
        if (!is_null($filter) && !is_string($filter)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($filter, true), gettype($filter)), __LINE__);
        }
        if (is_null($filter) || (is_array($filter) && empty($filter))) {
            unset($this->filter);
        } else {
            $this->filter = $filter;
        }
        
        return $this;
    }
}
