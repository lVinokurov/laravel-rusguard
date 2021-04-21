<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetProperty StructType
 * @subpackage Structs
 */
class SetProperty extends AbstractStructBase
{
    /**
     * The resourceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $resourceType = null;
    /**
     * The resourceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $resourceId = null;
    /**
     * The propertyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $propertyName = null;
    /**
     * The propertyValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $propertyValue = null;
    /**
     * Constructor method for SetProperty
     * @uses SetProperty::setResourceType()
     * @uses SetProperty::setResourceId()
     * @uses SetProperty::setPropertyName()
     * @uses SetProperty::setPropertyValue()
     * @param string $resourceType
     * @param string $resourceId
     * @param string $propertyName
     * @param string $propertyValue
     */
    public function __construct(?string $resourceType = null, ?string $resourceId = null, ?string $propertyName = null, ?string $propertyValue = null)
    {
        $this
            ->setResourceType($resourceType)
            ->setResourceId($resourceId)
            ->setPropertyName($propertyName)
            ->setPropertyValue($propertyValue);
    }
    /**
     * Get resourceType value
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->resourceType;
    }
    /**
     * Set resourceType value
     * @uses \EnumType\ResourceType::valueIsValid()
     * @uses \EnumType\ResourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resourceType
     * @return \StructType\SetProperty
     */
    public function setResourceType(?string $resourceType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ResourceType::valueIsValid($resourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ResourceType', is_array($resourceType) ? implode(', ', $resourceType) : var_export($resourceType, true), implode(', ', \EnumType\ResourceType::getValidValues())), __LINE__);
        }
        $this->resourceType = $resourceType;
        
        return $this;
    }
    /**
     * Get resourceId value
     * @return string|null
     */
    public function getResourceId(): ?string
    {
        return $this->resourceId;
    }
    /**
     * Set resourceId value
     * @param string $resourceId
     * @return \StructType\SetProperty
     */
    public function setResourceId(?string $resourceId = null): self
    {
        // validation for constraint: string
        if (!is_null($resourceId) && !is_string($resourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($resourceId, true), gettype($resourceId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($resourceId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $resourceId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($resourceId, true)), __LINE__);
        }
        $this->resourceId = $resourceId;
        
        return $this;
    }
    /**
     * Get propertyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPropertyName(): ?string
    {
        return isset($this->propertyName) ? $this->propertyName : null;
    }
    /**
     * Set propertyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $propertyName
     * @return \StructType\SetProperty
     */
    public function setPropertyName(?string $propertyName = null): self
    {
        // validation for constraint: string
        if (!is_null($propertyName) && !is_string($propertyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyName, true), gettype($propertyName)), __LINE__);
        }
        if (is_null($propertyName) || (is_array($propertyName) && empty($propertyName))) {
            unset($this->propertyName);
        } else {
            $this->propertyName = $propertyName;
        }
        
        return $this;
    }
    public function _getPropertyValue(): ?string
    {
        return isset($this->propertyValue) ? $this->propertyValue : null;
    }
    /**
     * Set propertyValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $propertyValue
     * @return \StructType\SetProperty
     */
    public function setPropertyValue(?string $propertyValue = null): self
    {
        // validation for constraint: string
        if (!is_null($propertyValue) && !is_string($propertyValue)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyValue, true), gettype($propertyValue)), __LINE__);
        }
        if (is_null($propertyValue) || (is_array($propertyValue) && empty($propertyValue))) {
            unset($this->propertyValue);
        } else {
            $this->propertyValue = $propertyValue;
        }
        
        return $this;
    }
}
