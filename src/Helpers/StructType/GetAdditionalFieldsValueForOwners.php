<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAdditionalFieldsValueForOwners StructType
 * @subpackage Structs
 */
class GetAdditionalFieldsValueForOwners extends AbstractStructBase
{
    /**
     * The ownerType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ownerType = null;
    /**
     * The ownerIds
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $ownerIds = null;
    /**
     * Constructor method for GetAdditionalFieldsValueForOwners
     * @uses GetAdditionalFieldsValueForOwners::setOwnerType()
     * @uses GetAdditionalFieldsValueForOwners::setOwnerIds()
     * @param string $ownerType
     * @param \ArrayType\ArrayOfguid $ownerIds
     */
    public function __construct(?string $ownerType = null, ?\ArrayType\ArrayOfguid $ownerIds = null)
    {
        $this
            ->setOwnerType($ownerType)
            ->setOwnerIds($ownerIds);
    }
    /**
     * Get ownerType value
     * @return string|null
     */
    public function getOwnerType(): ?string
    {
        return $this->ownerType;
    }
    /**
     * Set ownerType value
     * @uses \EnumType\OwnerFieldType::valueIsValid()
     * @uses \EnumType\OwnerFieldType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $ownerType
     * @return \StructType\GetAdditionalFieldsValueForOwners
     */
    public function setOwnerType(?string $ownerType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\OwnerFieldType::valueIsValid($ownerType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\OwnerFieldType', is_array($ownerType) ? implode(', ', $ownerType) : var_export($ownerType, true), implode(', ', \EnumType\OwnerFieldType::getValidValues())), __LINE__);
        }
        $this->ownerType = $ownerType;
        
        return $this;
    }
    /**
     * Get ownerIds value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getOwnerIds(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->ownerIds) ? $this->ownerIds : null;
    }
    /**
     * Set ownerIds value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $ownerIds
     * @return \StructType\GetAdditionalFieldsValueForOwners
     */
    public function setOwnerIds(?\ArrayType\ArrayOfguid $ownerIds = null): self
    {
        if (is_null($ownerIds) || (is_array($ownerIds) && empty($ownerIds))) {
            unset($this->ownerIds);
        } else {
            $this->ownerIds = $ownerIds;
        }
        
        return $this;
    }
}
