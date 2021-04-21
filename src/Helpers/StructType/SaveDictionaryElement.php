<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SaveDictionaryElement StructType
 * @subpackage Structs
 */
class SaveDictionaryElement extends AbstractStructBase
{
    /**
     * The id
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - minOccurs: 0
     * - nillable: true
     * - pattern: [\da-fA-F]{8}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{4}-[\da-fA-F]{12}
     * - type: tns:guid
     * @var string|null
     */
    protected ?string $id = null;
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
     * Constructor method for SaveDictionaryElement
     * @uses SaveDictionaryElement::setId()
     * @uses SaveDictionaryElement::setInfo()
     * @uses SaveDictionaryElement::setType()
     * @param string $id
     * @param \StructType\DictionaryElementSaveInfo $info
     * @param string $type
     */
    public function __construct(?string $id = null, ?\StructType\DictionaryElementSaveInfo $info = null, ?string $type = null)
    {
        $this
            ->setId($id)
            ->setInfo($info)
            ->setType($type);
    }
    /**
     * Get id value
     * @return string|null
     */
    public function getId(): ?string
    {
        return $this->id;
    }
    /**
     * Set id value
     * @param string $id
     * @return \StructType\SaveDictionaryElement
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
        $this->id = $id;
        
        return $this;
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
     * @return \StructType\SaveDictionaryElement
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
     * @return \StructType\SaveDictionaryElement
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
