<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FindGroups StructType
 * @subpackage Structs
 */
class FindGroups extends AbstractStructBase
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
     * Constructor method for FindGroups
     * @uses FindGroups::setName()
     * @uses FindGroups::setTypeSearch()
     * @param string $name
     * @param string $typeSearch
     */
    public function __construct(?string $name = null, ?string $typeSearch = null)
    {
        $this
            ->setName($name)
            ->setTypeSearch($typeSearch);
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
     * @return \StructType\FindGroups
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
     * @uses \EnumType\GroupTypeSearch::valueIsValid()
     * @uses \EnumType\GroupTypeSearch::getValidValues()
     * @throws InvalidArgumentException
     * @param string $typeSearch
     * @return \StructType\FindGroups
     */
    public function setTypeSearch(?string $typeSearch = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\GroupTypeSearch::valueIsValid($typeSearch)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\GroupTypeSearch', is_array($typeSearch) ? implode(', ', $typeSearch) : var_export($typeSearch, true), implode(', ', \EnumType\GroupTypeSearch::getValidValues())), __LINE__);
        }
        $this->typeSearch = $typeSearch;
        
        return $this;
    }
}
