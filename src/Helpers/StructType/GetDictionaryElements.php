<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDictionaryElements StructType
 * @subpackage Structs
 */
class GetDictionaryElements extends AbstractStructBase
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
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The isIgnoreIncientRigths
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isIgnoreIncientRigths = null;
    /**
     * Constructor method for GetDictionaryElements
     * @uses GetDictionaryElements::setPageNumber()
     * @uses GetDictionaryElements::setPageSize()
     * @uses GetDictionaryElements::setSortedColumn()
     * @uses GetDictionaryElements::setSortOrder()
     * @uses GetDictionaryElements::setType()
     * @uses GetDictionaryElements::setIsIgnoreIncientRigths()
     * @param int $pageNumber
     * @param int $pageSize
     * @param string $sortedColumn
     * @param string $sortOrder
     * @param string $type
     * @param bool $isIgnoreIncientRigths
     */
    public function __construct(?int $pageNumber = null, ?int $pageSize = null, ?string $sortedColumn = null, ?string $sortOrder = null, ?string $type = null, ?bool $isIgnoreIncientRigths = null)
    {
        $this
            ->setPageNumber($pageNumber)
            ->setPageSize($pageSize)
            ->setSortedColumn($sortedColumn)
            ->setSortOrder($sortOrder)
            ->setType($type)
            ->setIsIgnoreIncientRigths($isIgnoreIncientRigths);
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
     * @return \StructType\GetDictionaryElements
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
     * @return \StructType\GetDictionaryElements
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
     * @uses \EnumType\DictionaryElementSortedColumn::valueIsValid()
     * @uses \EnumType\DictionaryElementSortedColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortedColumn
     * @return \StructType\GetDictionaryElements
     */
    public function setSortedColumn(?string $sortedColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\DictionaryElementSortedColumn::valueIsValid($sortedColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DictionaryElementSortedColumn', is_array($sortedColumn) ? implode(', ', $sortedColumn) : var_export($sortedColumn, true), implode(', ', \EnumType\DictionaryElementSortedColumn::getValidValues())), __LINE__);
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
     * @return \StructType\GetDictionaryElements
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
     * Get type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->type;
    }
    /**
     * Set type value
     * @uses \EnumType\DictionaryType::valueIsValid()
     * @uses \EnumType\DictionaryType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\GetDictionaryElements
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\DictionaryType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\DictionaryType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\DictionaryType::getValidValues())), __LINE__);
        }
        $this->type = $type;
        
        return $this;
    }
    /**
     * Get isIgnoreIncientRigths value
     * @return bool|null
     */
    public function getIsIgnoreIncientRigths(): ?bool
    {
        return $this->isIgnoreIncientRigths;
    }
    /**
     * Set isIgnoreIncientRigths value
     * @param bool $isIgnoreIncientRigths
     * @return \StructType\GetDictionaryElements
     */
    public function setIsIgnoreIncientRigths(?bool $isIgnoreIncientRigths = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIgnoreIncientRigths) && !is_bool($isIgnoreIncientRigths)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIgnoreIncientRigths, true), gettype($isIgnoreIncientRigths)), __LINE__);
        }
        $this->isIgnoreIncientRigths = $isIgnoreIncientRigths;
        
        return $this;
    }
}
