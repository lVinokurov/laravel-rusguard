<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DictionaryElementsInfoData StructType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:DictionaryElementsInfoData
 * @subpackage Structs
 */
class DictionaryElementsInfoData extends AbstractStructBase
{
    /**
     * The Count
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var int|null
     */
    protected ?int $Count = null;
    /**
     * The Elements
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    protected ?\ArrayType\ArrayOfDictionaryElementInfo $Elements = null;
    /**
     * Constructor method for DictionaryElementsInfoData
     * @uses DictionaryElementsInfoData::setCount()
     * @uses DictionaryElementsInfoData::setElements()
     * @param int $count
     * @param \ArrayType\ArrayOfDictionaryElementInfo $elements
     */
    public function __construct(?int $count = null, ?\ArrayType\ArrayOfDictionaryElementInfo $elements = null)
    {
        $this
            ->setCount($count)
            ->setElements($elements);
    }
    /**
     * Get Count value
     * @return int|null
     */
    public function getCount(): ?int
    {
        return $this->Count;
    }
    /**
     * Set Count value
     * @param int $count
     * @return \StructType\DictionaryElementsInfoData
     */
    public function setCount(?int $count = null): self
    {
        // validation for constraint: int
        if (!is_null($count) && !(is_int($count) || ctype_digit($count))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($count, true), gettype($count)), __LINE__);
        }
        $this->Count = $count;
        
        return $this;
    }
    /**
     * Get Elements value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfDictionaryElementInfo|null
     */
    public function getElements(): ?\ArrayType\ArrayOfDictionaryElementInfo
    {
        return isset($this->Elements) ? $this->Elements : null;
    }
    /**
     * Set Elements value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @param \ArrayType\ArrayOfDictionaryElementInfo $elements
     * @return \StructType\DictionaryElementsInfoData
     */
    public function setElements(?\ArrayType\ArrayOfDictionaryElementInfo $elements = null): self
    {
        if (is_null($elements) || (is_array($elements) && empty($elements))) {
            unset($this->Elements);
        } else {
            $this->Elements = $elements;
        }
        
        return $this;
    }
}
