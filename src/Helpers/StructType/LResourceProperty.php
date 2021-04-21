<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LResourceProperty StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LResourceProperty
 * @subpackage Structs
 */
class LResourceProperty extends AbstractStructBase
{
    /**
     * The LastUpdated
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $LastUpdated = null;
    /**
     * The PropertyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $PropertyName = null;
    /**
     * The ResourceId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $ResourceId = null;
    /**
     * The ResourceType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $ResourceType = null;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for LResourceProperty
     * @uses LResourceProperty::setLastUpdated()
     * @uses LResourceProperty::setPropertyName()
     * @uses LResourceProperty::setResourceId()
     * @uses LResourceProperty::setResourceType()
     * @uses LResourceProperty::setValue()
     * @param string $lastUpdated
     * @param string $propertyName
     * @param string $resourceId
     * @param string $resourceType
     * @param string $value
     */
    public function __construct(?string $lastUpdated = null, ?string $propertyName = null, ?string $resourceId = null, ?string $resourceType = null, ?string $value = null)
    {
        $this
            ->setLastUpdated($lastUpdated)
            ->setPropertyName($propertyName)
            ->setResourceId($resourceId)
            ->setResourceType($resourceType)
            ->setValue($value);
    }
    /**
     * Get LastUpdated value
     * @return string|null
     */
    public function getLastUpdated(): ?string
    {
        return $this->LastUpdated;
    }
    /**
     * Set LastUpdated value
     * @param string $lastUpdated
     * @return \StructType\LResourceProperty
     */
    public function setLastUpdated(?string $lastUpdated = null): self
    {
        // validation for constraint: string
        if (!is_null($lastUpdated) && !is_string($lastUpdated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($lastUpdated, true), gettype($lastUpdated)), __LINE__);
        }
        $this->LastUpdated = $lastUpdated;
        
        return $this;
    }
    /**
     * Get PropertyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getPropertyName(): ?string
    {
        return isset($this->PropertyName) ? $this->PropertyName : null;
    }
    /**
     * Set PropertyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $propertyName
     * @return \StructType\LResourceProperty
     */
    public function setPropertyName(?string $propertyName = null): self
    {
        // validation for constraint: string
        if (!is_null($propertyName) && !is_string($propertyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($propertyName, true), gettype($propertyName)), __LINE__);
        }
        if (is_null($propertyName) || (is_array($propertyName) && empty($propertyName))) {
            unset($this->PropertyName);
        } else {
            $this->PropertyName = $propertyName;
        }
        
        return $this;
    }
    /**
     * Get ResourceId value
     * @return string|null
     */
    public function getResourceId(): ?string
    {
        return $this->ResourceId;
    }
    /**
     * Set ResourceId value
     * @param string $resourceId
     * @return \StructType\LResourceProperty
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
        $this->ResourceId = $resourceId;
        
        return $this;
    }
    /**
     * Get ResourceType value
     * @return string|null
     */
    public function getResourceType(): ?string
    {
        return $this->ResourceType;
    }
    /**
     * Set ResourceType value
     * @uses \EnumType\ResourceType::valueIsValid()
     * @uses \EnumType\ResourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $resourceType
     * @return \StructType\LResourceProperty
     */
    public function setResourceType(?string $resourceType = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ResourceType::valueIsValid($resourceType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ResourceType', is_array($resourceType) ? implode(', ', $resourceType) : var_export($resourceType, true), implode(', ', \EnumType\ResourceType::getValidValues())), __LINE__);
        }
        $this->ResourceType = $resourceType;
        
        return $this;
    }
    /**
     * Get Value value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getValue(): ?string
    {
        return isset($this->Value) ? $this->Value : null;
    }
    /**
     * Set Value value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $value
     * @return \StructType\LResourceProperty
     */
    public function setValue(?string $value = null): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        if (is_null($value) || (is_array($value) && empty($value))) {
            unset($this->Value);
        } else {
            $this->Value = $value;
        }
        
        return $this;
    }
}
