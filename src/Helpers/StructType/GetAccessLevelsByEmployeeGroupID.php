<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLevelsByEmployeeGroupID StructType
 * @subpackage Structs
 */
class GetAccessLevelsByEmployeeGroupID extends AbstractStructBase
{
    /**
     * The employeeGroupID
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $employeeGroupID = null;
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
     * The accessLevelsOwner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accessLevelsOwner = null;
    /**
     * Constructor method for GetAccessLevelsByEmployeeGroupID
     * @uses GetAccessLevelsByEmployeeGroupID::setEmployeeGroupID()
     * @uses GetAccessLevelsByEmployeeGroupID::setPageNumber()
     * @uses GetAccessLevelsByEmployeeGroupID::setPageSize()
     * @uses GetAccessLevelsByEmployeeGroupID::setSortedColumn()
     * @uses GetAccessLevelsByEmployeeGroupID::setSortOrder()
     * @uses GetAccessLevelsByEmployeeGroupID::setAccessLevelsOwner()
     * @param string $employeeGroupID
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param string $accessLevelsOwner
     */
    public function __construct(?string $employeeGroupID = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?string $accessLevelsOwner = null)
    {
        $this
            ->setEmployeeGroupID($employeeGroupID)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setAccessLevelsOwner($accessLevelsOwner);
    }
    /**
     * Get employeeGroupID value
     * @return string|null
     */
    public function getEmployeeGroupID(): ?string
    {
        return $this->employeeGroupID;
    }
    /**
     * Set employeeGroupID value
     * @param string $employeeGroupID
     * @return \StructType\GetAccessLevelsByEmployeeGroupID
     */
    public function setEmployeeGroupID(?string $employeeGroupID = null): self
    {
        // validation for constraint: string
        if (!is_null($employeeGroupID) && !is_string($employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($employeeGroupID, true), gettype($employeeGroupID)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($employeeGroupID) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $employeeGroupID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($employeeGroupID, true)), __LINE__);
        }
        $this->employeeGroupID = $employeeGroupID;
        
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
     * @return \StructType\GetAccessLevelsByEmployeeGroupID
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
     * @return \StructType\GetAccessLevelsByEmployeeGroupID
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
     * @uses \EnumType\AccessLevelSortedColumn::valueIsValid()
     * @uses \EnumType\AccessLevelSortedColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortedColumn
     * @return \StructType\GetAccessLevelsByEmployeeGroupID
     */
    public function setSortedColumn(?string $sortedColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AccessLevelSortedColumn::valueIsValid($sortedColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AccessLevelSortedColumn', is_array($sortedColumn) ? implode(', ', $sortedColumn) : var_export($sortedColumn, true), implode(', ', \EnumType\AccessLevelSortedColumn::getValidValues())), __LINE__);
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
     * @return \StructType\GetAccessLevelsByEmployeeGroupID
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
     * Get accessLevelsOwner value
     * @return string|null
     */
    public function getAccessLevelsOwner(): ?string
    {
        return $this->accessLevelsOwner;
    }
    /**
     * Set accessLevelsOwner value
     * @uses \EnumType\AccessLevelsOwner::valueIsValid()
     * @uses \EnumType\AccessLevelsOwner::getValidValues()
     * @throws InvalidArgumentException
     * @param string $accessLevelsOwner
     * @return \StructType\GetAccessLevelsByEmployeeGroupID
     */
    public function setAccessLevelsOwner(?string $accessLevelsOwner = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AccessLevelsOwner::valueIsValid($accessLevelsOwner)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AccessLevelsOwner', is_array($accessLevelsOwner) ? implode(', ', $accessLevelsOwner) : var_export($accessLevelsOwner, true), implode(', ', \EnumType\AccessLevelsOwner::getValidValues())), __LINE__);
        }
        $this->accessLevelsOwner = $accessLevelsOwner;
        
        return $this;
    }
}
