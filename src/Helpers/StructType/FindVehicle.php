<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindVehicle StructType
 * @subpackage Structs
 */
class FindVehicle extends AbstractStructBase
{
    /**
     * The name
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $name = null;
    /**
     * The typeSearch
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $typeSearch = null;
    /**
     * The sortColumn
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortColumn = null;
    /**
     * The sortOrder
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $sortOrder = null;
    /**
     * Constructor method for FindVehicle
     * @uses FindVehicle::setName()
     * @uses FindVehicle::setTypeSearch()
     * @uses FindVehicle::setSortColumn()
     * @uses FindVehicle::setSortOrder()
     * @param string $name
     * @param string $typeSearch
     * @param string $sortColumn
     * @param string $sortOrder
     */
    public function __construct(?string $name = null, ?string $typeSearch = null, ?string $sortColumn = null, ?string $sortOrder = null)
    {
        $this
            ->setName($name)
            ->setTypeSearch($typeSearch)
            ->setSortColumn($sortColumn)
            ->setSortOrder($sortOrder);
    }
    /**
     * Get name value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getName(): ?string
    {
        return isset($this->name) ? $this->name : null;
    }
    /**
     * Set name value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $name
     * @return \StructType\FindVehicle
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        if (is_null($name) || (is_array($name) && empty($name))) {
            unset($this->name);
        } else {
            $this->name = $name;
        }
        
        return $this;
    }
    /**
     * Get typeSearch value
     * @return string|null
     */
    public function getTypeSearch(): ?string
    {
        return $this->typeSearch;
    }
    /**
     * Set typeSearch value
     * @uses \EnumType\VehicleTypeSearch::valueIsValid()
     * @uses \EnumType\VehicleTypeSearch::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typeSearch
     * @return \StructType\FindVehicle
     */
    public function setTypeSearch(?string $typeSearch = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\VehicleTypeSearch::valueIsValid($typeSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\VehicleTypeSearch', is_array($typeSearch) ? implode(', ', $typeSearch) : var_export($typeSearch, true), implode(', ', \EnumType\VehicleTypeSearch::getValidValues())), __LINE__);
        }
        $this->typeSearch = $typeSearch;
        
        return $this;
    }
    /**
     * Get sortColumn value
     * @return string|null
     */
    public function getSortColumn(): ?string
    {
        return $this->sortColumn;
    }
    /**
     * Set sortColumn value
     * @uses \EnumType\VehicleSortColumn::valueIsValid()
     * @uses \EnumType\VehicleSortColumn::getValidValues()
     * @throws InvalidArgumentException
     * @param string $sortColumn
     * @return \StructType\FindVehicle
     */
    public function setSortColumn(?string $sortColumn = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\VehicleSortColumn::valueIsValid($sortColumn)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\VehicleSortColumn', is_array($sortColumn) ? implode(', ', $sortColumn) : var_export($sortColumn, true), implode(', ', \EnumType\VehicleSortColumn::getValidValues())), __LINE__);
        }
        $this->sortColumn = $sortColumn;
        
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
     * @return \StructType\FindVehicle
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
