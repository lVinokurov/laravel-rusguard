<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDriverProps StructType
 * @subpackage Structs
 */
class AddDriverProps extends AbstractStructBase
{
    /**
     * The parentId
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $parentId = null;
    /**
     * The parentPropertyName
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $parentPropertyName = null;
    /**
     * The driverType
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var string|null
     */
    protected ?string $driverType = null;
    /**
     * The properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLPropertyValue|null
     */
    protected ?\ArrayType\ArrayOfLPropertyValue $properties = null;
    /**
     * Constructor method for AddDriverProps
     * @uses AddDriverProps::setParentId()
     * @uses AddDriverProps::setParentPropertyName()
     * @uses AddDriverProps::setDriverType()
     * @uses AddDriverProps::setProperties()
     * @param string $parentId
     * @param string $parentPropertyName
     * @param string $driverType
     * @param \ArrayType\ArrayOfLPropertyValue $properties
     */
    public function __construct(?string $parentId = null, ?string $parentPropertyName = null, ?string $driverType = null, ?\ArrayType\ArrayOfLPropertyValue $properties = null)
    {
        $this
            ->setParentId($parentId)
            ->setParentPropertyName($parentPropertyName)
            ->setDriverType($driverType)
            ->setProperties($properties);
    }
    /**
     * Get parentId value
     * @return string|null
     */
    public function getParentId(): ?string
    {
        return $this->parentId;
    }
    /**
     * Set parentId value
     * @param string $parentId
     * @return \StructType\AddDriverProps
     */
    public function setParentId(?string $parentId = null): self
    {
        // validation for constraint: string
        if (!is_null($parentId) && !is_string($parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentId, true), gettype($parentId)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($parentId) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $parentId)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($parentId, true)), __LINE__);
        }
        $this->parentId = $parentId;
        
        return $this;
    }
    /**
     * Get parentPropertyName value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getParentPropertyName(): ?string
    {
        return isset($this->parentPropertyName) ? $this->parentPropertyName : null;
    }
    /**
     * Set parentPropertyName value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $parentPropertyName
     * @return \StructType\AddDriverProps
     */
    public function setParentPropertyName(?string $parentPropertyName = null): self
    {
        // validation for constraint: string
        if (!is_null($parentPropertyName) && !is_string($parentPropertyName)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parentPropertyName, true), gettype($parentPropertyName)), __LINE__);
        }
        if (is_null($parentPropertyName) || (is_array($parentPropertyName) && empty($parentPropertyName))) {
            unset($this->parentPropertyName);
        } else {
            $this->parentPropertyName = $parentPropertyName;
        }
        
        return $this;
    }
    /**
     * Get driverType value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return string|null
     */
    public function getDriverType(): ?string
    {
        return isset($this->driverType) ? $this->driverType : null;
    }
    /**
     * Set driverType value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param string $driverType
     * @return \StructType\AddDriverProps
     */
    public function setDriverType(?string $driverType = null): self
    {
        // validation for constraint: string
        if (!is_null($driverType) && !is_string($driverType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($driverType, true), gettype($driverType)), __LINE__);
        }
        if (is_null($driverType) || (is_array($driverType) && empty($driverType))) {
            unset($this->driverType);
        } else {
            $this->driverType = $driverType;
        }
        
        return $this;
    }
    /**
     * Get properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLPropertyValue|null
     */
    public function getProperties(): ?\ArrayType\ArrayOfLPropertyValue
    {
        return isset($this->properties) ? $this->properties : null;
    }
    /**
     * Set properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLPropertyValue $properties
     * @return \StructType\AddDriverProps
     */
    public function setProperties(?\ArrayType\ArrayOfLPropertyValue $properties = null): self
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->properties);
        } else {
            $this->properties = $properties;
        }
        
        return $this;
    }
}
