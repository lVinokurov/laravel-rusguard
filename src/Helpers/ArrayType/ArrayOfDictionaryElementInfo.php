<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDictionaryElementInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDictionaryElementInfo
 * @subpackage Arrays
 */
class ArrayOfDictionaryElementInfo extends AbstractStructArrayBase
{
    /**
     * The DictionaryElementInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DictionaryElementInfo[]
     */
    protected array $DictionaryElementInfo = [];
    /**
     * Constructor method for ArrayOfDictionaryElementInfo
     * @uses ArrayOfDictionaryElementInfo::setDictionaryElementInfo()
     * @param \StructType\DictionaryElementInfo[] $dictionaryElementInfo
     */
    public function __construct(array $dictionaryElementInfo = [])
    {
        $this
            ->setDictionaryElementInfo($dictionaryElementInfo);
    }
    /**
     * Get DictionaryElementInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DictionaryElementInfo[]
     */
    public function getDictionaryElementInfo(): ?array
    {
        return isset($this->DictionaryElementInfo) ? $this->DictionaryElementInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDictionaryElementInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDictionaryElementInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDictionaryElementInfoForArrayConstraintsFromSetDictionaryElementInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDictionaryElementInfoDictionaryElementInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDictionaryElementInfoDictionaryElementInfoItem instanceof \StructType\DictionaryElementInfo) {
                $invalidValues[] = is_object($arrayOfDictionaryElementInfoDictionaryElementInfoItem) ? get_class($arrayOfDictionaryElementInfoDictionaryElementInfoItem) : sprintf('%s(%s)', gettype($arrayOfDictionaryElementInfoDictionaryElementInfoItem), var_export($arrayOfDictionaryElementInfoDictionaryElementInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DictionaryElementInfo property can only contain items of type \StructType\DictionaryElementInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DictionaryElementInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DictionaryElementInfo[] $dictionaryElementInfo
     * @return \ArrayType\ArrayOfDictionaryElementInfo
     */
    public function setDictionaryElementInfo(array $dictionaryElementInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($dictionaryElementInfoArrayErrorMessage = self::validateDictionaryElementInfoForArrayConstraintsFromSetDictionaryElementInfo($dictionaryElementInfo))) {
            throw new InvalidArgumentException($dictionaryElementInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($dictionaryElementInfo) || (is_array($dictionaryElementInfo) && empty($dictionaryElementInfo))) {
            unset($this->DictionaryElementInfo);
        } else {
            $this->DictionaryElementInfo = $dictionaryElementInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DictionaryElementInfo|null
     */
    public function current(): ?\StructType\DictionaryElementInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DictionaryElementInfo|null
     */
    public function item($index): ?\StructType\DictionaryElementInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DictionaryElementInfo|null
     */
    public function first(): ?\StructType\DictionaryElementInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DictionaryElementInfo|null
     */
    public function last(): ?\StructType\DictionaryElementInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DictionaryElementInfo|null
     */
    public function offsetGet($offset): ?\StructType\DictionaryElementInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DictionaryElementInfo $item
     * @return \ArrayType\ArrayOfDictionaryElementInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DictionaryElementInfo) {
            throw new InvalidArgumentException(sprintf('The DictionaryElementInfo property can only contain items of type \StructType\DictionaryElementInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DictionaryElementInfo
     */
    public function getAttributeName(): string
    {
        return 'DictionaryElementInfo';
    }
}
