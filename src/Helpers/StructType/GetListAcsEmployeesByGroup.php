<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetListAcsEmployeesByGroup StructType
 * @subpackage Structs
 */
class GetListAcsEmployeesByGroup extends AbstractStructBase
{
    /**
     * The groupIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $groupIds = null;
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
     * The foundEmployeeId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $foundEmployeeId = null;
    /**
     * The isShowRemoved
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isShowRemoved = null;
    /**
     * Constructor method for GetListAcsEmployeesByGroup
     * @uses GetListAcsEmployeesByGroup::setGroupIds()
     * @uses GetListAcsEmployeesByGroup::setPageNumber()
     * @uses GetListAcsEmployeesByGroup::setPageSize()
     * @uses GetListAcsEmployeesByGroup::setSortedColumn()
     * @uses GetListAcsEmployeesByGroup::setSortOrder()
     * @uses GetListAcsEmployeesByGroup::setIsCountingEmployeesEveryTime()
     * @uses GetListAcsEmployeesByGroup::setFoundEmployeeId()
     * @uses GetListAcsEmployeesByGroup::setIsShowRemoved()
     * @param \ArrayType\ArrayOfguid $groupIds
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param bool $isCountingEmployeesEveryTime
     * @param string $foundEmployeeId
     * @param bool $isShowRemoved
     */
    public function __construct(?\ArrayType\ArrayOfguid $groupIds = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?bool $isCountingEmployeesEveryTime = null, ?string $foundEmployeeId = null, ?bool $isShowRemoved = null)
    {
        $this
            ->setGroupIds($groupIds)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setIsCountingEmployeesEveryTime($isCountingEmployeesEveryTime)
            ->setFoundEmployeeId($foundEmployeeId)
            ->setIsShowRemoved($isShowRemoved);
    }
    /**
     * Get groupIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getGroupIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->groupIds) ? $this->groupIds : null;
    }
    /**
     * Set groupIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $groupIds
     * @return \StructType\GetListAcsEmployeesByGroup
     */
    public function setGroupIds(?\ArrayType\ArrayOfguid $groupIds = null): self
    {
        if (is_null($groupIds) || (is_array($groupIds) && empty($groupIds))) {
            unset($this->groupIds);
        } else {
            $this->groupIds = $groupIds;
        }
        
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
     * @return \StructType\GetListAcsEmployeesByGroup
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
     * @return \StructType\GetListAcsEmployeesByGroup
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
     * @return \StructType\GetListAcsEmployeesByGroup
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
     * @return \StructType\GetListAcsEmployeesByGroup
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
     * @return \StructType\GetListAcsEmployeesByGroup
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
     * Get foundEmployeeId value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getFoundEmployeeId(): ?string
    {
        return isset($this->foundEmployeeId) ? $this->foundEmployeeId : null;
    }
    /**
     * Set foundEmployeeId value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $foundEmployeeId
     * @return \StructType\GetListAcsEmployeesByGroup
     */
    public function setFoundEmployeeId(?string $foundEmployeeId = null): self
    {
        // validation for constraint: string
        if (!is_null($foundEmployeeId) && !is_string($foundEmployeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($foundEmployeeId, true), gettype($foundEmployeeId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($foundEmployeeId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $foundEmployeeId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($foundEmployeeId, true)), __LINE__);
        }
        if (is_null($foundEmployeeId) || (is_array($foundEmployeeId) && empty($foundEmployeeId))) {
            unset($this->foundEmployeeId);
        } else {
            $this->foundEmployeeId = $foundEmployeeId;
        }
        
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
     * @return \StructType\GetListAcsEmployeesByGroup
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
}
