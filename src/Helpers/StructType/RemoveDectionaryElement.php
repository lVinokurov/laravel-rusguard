<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RemoveDectionaryElement StructType
 * @subpackage Structs
 */
class RemoveDectionaryElement extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfguid|null
     */
    protected ?\ArrayType\ArrayOfguid $id = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * The isIgnoreIncidentRigths
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var bool|null
     */
    protected ?bool $isIgnoreIncidentRigths = null;
    /**
     * Constructor method for RemoveDectionaryElement
     * @uses RemoveDectionaryElement::setId()
     * @uses RemoveDectionaryElement::setType()
     * @uses RemoveDectionaryElement::setIsIgnoreIncidentRigths()
     * @param \ArrayType\ArrayOfguid $id
     * @param string $type
     * @param bool $isIgnoreIncidentRigths
     */
    public function __construct(?\ArrayType\ArrayOfguid $id = null, ?string $type = null, ?bool $isIgnoreIncidentRigths = null)
    {
        $this
            ->setId($id)
            ->setType($type)
            ->setIsIgnoreIncidentRigths($isIgnoreIncidentRigths);
    }
    /**
     * Get id value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfguid|null
     */
    public function getId(): ?\ArrayType\ArrayOfguid
    {
        return isset($this->id) ? $this->id : null;
    }
    /**
     * Set id value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfguid $id
     * @return \StructType\RemoveDectionaryElement
     */
    public function setId(?\ArrayType\ArrayOfguid $id = null): self
    {
        if (is_null($id) || (is_array($id) && empty($id))) {
            unset($this->id);
        } else {
            $this->id = $id;
        }
        
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
     * @return \StructType\RemoveDectionaryElement
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
     * Get isIgnoreIncidentRigths value
     * @return bool|null
     */
    public function getIsIgnoreIncidentRigths(): ?bool
    {
        return $this->isIgnoreIncidentRigths;
    }
    /**
     * Set isIgnoreIncidentRigths value
     * @param bool $isIgnoreIncidentRigths
     * @return \StructType\RemoveDectionaryElement
     */
    public function setIsIgnoreIncidentRigths(?bool $isIgnoreIncidentRigths = null): self
    {
        // validation for constraint: boolean
        if (!is_null($isIgnoreIncidentRigths) && !is_bool($isIgnoreIncidentRigths)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isIgnoreIncidentRigths, true), gettype($isIgnoreIncidentRigths)), __LINE__);
        }
        $this->isIgnoreIncidentRigths = $isIgnoreIncidentRigths;
        
        return $this;
    }
}
