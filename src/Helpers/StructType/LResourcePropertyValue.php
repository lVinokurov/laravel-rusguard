<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LResourcePropertyValue StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LResourcePropertyValue
 * @subpackage Structs
 */
class LResourcePropertyValue extends AbstractStructBase
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
     * The Value
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $Value = null;
    /**
     * Constructor method for LResourcePropertyValue
     * @uses LResourcePropertyValue::setLastUpdated()
     * @uses LResourcePropertyValue::setPropertyName()
     * @uses LResourcePropertyValue::setValue()
     * @param string $lastUpdated
     * @param string $propertyName
     * @param string $value
     */
    public function __construct(?string $lastUpdated = null, ?string $propertyName = null, ?string $value = null)
    {
        $this
            ->setLastUpdated($lastUpdated)
            ->setPropertyName($propertyName)
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
     * @return \StructType\LResourcePropertyValue
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
     * @return \StructType\LResourcePropertyValue
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
     * @return \StructType\LResourcePropertyValue
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
