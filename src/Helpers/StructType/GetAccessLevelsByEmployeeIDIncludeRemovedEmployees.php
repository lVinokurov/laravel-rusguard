<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
 * StructType
 * @subpackage Structs
 */
class GetAccessLevelsByEmployeeIDIncludeRemovedEmployees extends AbstractStructBase
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
     * The accessLevelsOwner
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $accessLevelsOwner = null;
    /**
     * The includeRemovedEmployees
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $includeRemovedEmployees = null;
    /**
     * The ignoreRights
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $ignoreRights = null;
    /**
     * Constructor method for GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setEmployeeID()
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setPageNumber()
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setPageSize()
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setSortedColumn()
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setSortOrder()
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setAccessLevelsOwner()
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setIncludeRemovedEmployees()
     * @uses GetAccessLevelsByEmployeeIDIncludeRemovedEmployees::setIgnoreRights()
     * @param string $employeeID
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param string $accessLevelsOwner
     * @param bool $includeRemovedEmployees
     * @param bool $ignoreRights
     */
    public function __construct(?string $employeeID = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?string $accessLevelsOwner = null, ?bool $includeRemovedEmployees = null, ?bool $ignoreRights = null)
    {
        $this
            ->setEmployeeID($employeeID)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setAccessLevelsOwner($accessLevelsOwner)
            ->setIncludeRemovedEmployees($includeRemovedEmployees)
            ->setIgnoreRights($ignoreRights);
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
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
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
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
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
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
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
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
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
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
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
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
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
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
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
    /**
     * Get ignoreRights value
     * @return bool|null
     */
    public function getIgnoreRights(): ?bool
    {
        return $this->ignoreRights;
    }
    /**
     * Set ignoreRights value
     * @param bool $ignoreRights
     * @return \StructType\GetAccessLevelsByEmployeeIDIncludeRemovedEmployees
     */
    public function setIgnoreRights(?bool $ignoreRights = null): self
    {
        // validation for constraint: boolean
        if (!is_null($ignoreRights) && !is_bool($ignoreRights)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($ignoreRights, true), gettype($ignoreRights)), __LINE__);
        }
        $this->ignoreRights = $ignoreRights;
        
        return $this;
    }
}
