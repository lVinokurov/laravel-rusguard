<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddDictionaryElement StructType
 * @subpackage Structs
 */
class AddDictionaryElement extends AbstractStructBase
{
    /**
     * The info
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementSaveInfo|null
     */
    protected ?\StructType\DictionaryElementSaveInfo $info = null;
    /**
     * The type
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $type = null;
    /**
     * Constructor method for AddDictionaryElement
     * @uses AddDictionaryElement::setInfo()
     * @uses AddDictionaryElement::setType()
     * @param \StructType\DictionaryElementSaveInfo $info
     * @param string $type
     */
    public function __construct(?\StructType\DictionaryElementSaveInfo $info = null, ?string $type = null)
    {
        $this
            ->setInfo($info)
            ->setType($type);
    }
    /**
     * Get info value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementSaveInfo|null
     */
    public function getInfo(): ?\StructType\DictionaryElementSaveInfo
    {
        return isset($this->info) ? $this->info : null;
    }
    /**
     * Set info value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \StructType\DictionaryElementSaveInfo $info
     * @return \StructType\AddDictionaryElement
     */
    public function setInfo(?\StructType\DictionaryElementSaveInfo $info = null): self
    {
        if (is_null($info) || (is_array($info) && empty($info))) {
            unset($this->info);
        } else {
            $this->info = $info;
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
     * @return \StructType\AddDictionaryElement
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
}
