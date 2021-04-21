<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GeFilteredtDrivers StructType
 * @subpackage Structs
 */
class GeFilteredtDrivers extends AbstractStructBase
{
    /**
     * The searchString
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $searchString = null;
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
     * The sortType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortType = null;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortOrder = null;
    /**
     * Constructor method for GeFilteredtDrivers
     * @uses GeFilteredtDrivers::setSearchString()
     * @uses GeFilteredtDrivers::setPageNumber()
     * @uses GeFilteredtDrivers::setPageSize()
     * @uses GeFilteredtDrivers::setSortType()
     * @uses GeFilteredtDrivers::setSortOrder()
     * @param string $searchString
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortType
     * @param string $sortOrder
     */
    public function __construct(?string $searchString = null, ?int $pageNumber = null, ?int $pageSize = null, ?string $sortType = null, ?string $sortOrder = null)
    {
        $this
            ->setSearchString($searchString)
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortType($sortType)
            ->setSortOrder($sortOrder);
    }
    /**
     * Get searchString value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getSearchString(): ?string
    {
        return isset($this->searchString) ? $this->searchString : null;
    }
    /**
     * Set searchString value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $searchString
     * @return \StructType\GeFilteredtDrivers
     */
    public function setSearchString(?string $searchString = null): self
    {
        // validation for constraint: string
        if (!is_null($searchString) && !is_string($searchString)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($searchString, true), gettype($searchString)), __LINE__);
        }
        if (is_null($searchString) || (is_array($searchString) && empty($searchString))) {
            unset($this->searchString);
        } else {
            $this->searchString = $searchString;
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
     * @return \StructType\GeFilteredtDrivers
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
     * @return \StructType\GeFilteredtDrivers
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
     * Get sortType value
     * @return string|null
     */
    public function getSortType(): ?string
    {
        return $this->sortType;
    }
    /**
     * Set sortType value
     * @uses \EnumType\AccessPointSortType::valueIsValid()
     * @uses \EnumType\AccessPointSortType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortType
     * @return \StructType\GeFilteredtDrivers
     */
    public function setSortType(?string $sortType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\AccessPointSortType::valueIsValid($sortType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\AccessPointSortType', is_array($sortType) ? implode(', ', $sortType) : var_export($sortType, true), implode(', ', \EnumType\AccessPointSortType::getValidValues())), __LINE__);
        }
        $this->sortType = $sortType;
        
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
     * @return \StructType\GeFilteredtDrivers
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
}
