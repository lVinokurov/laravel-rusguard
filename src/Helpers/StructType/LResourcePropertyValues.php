<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LResourcePropertyValues StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:LResourcePropertyValues
 * @subpackage Structs
 */
class LResourcePropertyValues extends AbstractStructBase
{
    /**
     * The Id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $Id = null;
    /**
     * The Properties
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfLPropertyValue|null
     */
    protected ?\ArrayType\ArrayOfLPropertyValue $Properties = null;
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $Type = null;
    /**
     * Constructor method for LResourcePropertyValues
     * @uses LResourcePropertyValues::setId()
     * @uses LResourcePropertyValues::setProperties()
     * @uses LResourcePropertyValues::setType()
     * @param string $id
     * @param \ArrayType\ArrayOfLPropertyValue $properties
     * @param string $type
     */
    public function __construct(?string $id = null, ?\ArrayType\ArrayOfLPropertyValue $properties = null, ?string $type = null)
    {
        $this
            ->setId($id)
            ->setProperties($properties)
            ->setType($type);
    }
    /**
     * Get Id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->Id;
    }
    /**
     * Set Id value
     * @param string $id
     * @return \StructType\LResourcePropertyValues
     */
    public function setId(?string $id = null): self
    {
        // validation for constraint: string
        if (!is_null($id) && !is_string($id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($id, true), gettype($id)), __LINE__);
        }
        // validation for constraint: pattern([\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12})
        if (!is_null($id) && !preg_match('/[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', $id)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[\\da-fA-F]{8}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{4}-[\\da-fA-F]{12}/', var_export($id, true)), __LINE__);
        }
        $this->Id = $id;
        
        return $this;
    }
    /**
     * Get Properties value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfLPropertyValue|null
     */
    public function getProperties(): ?\ArrayType\ArrayOfLPropertyValue
    {
        return isset($this->Properties) ? $this->Properties : null;
    }
    /**
     * Set Properties value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfLPropertyValue $properties
     * @return \StructType\LResourcePropertyValues
     */
    public function setProperties(?\ArrayType\ArrayOfLPropertyValue $properties = null): self
    {
        if (is_null($properties) || (is_array($properties) && empty($properties))) {
            unset($this->Properties);
        } else {
            $this->Properties = $properties;
        }
        
        return $this;
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \EnumType\ResourceType::valueIsValid()
     * @uses \EnumType\ResourceType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \StructType\LResourcePropertyValues
     */
    public function setType(?string $type = null): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ResourceType::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ResourceType', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \EnumType\ResourceType::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
