<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfOwnerAdditionalFieldsValue ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfOwnerAdditionalFieldsValue
 * @subpackage Arrays
 */
class ArrayOfOwnerAdditionalFieldsValue extends AbstractStructArrayBase
{
    /**
     * The OwnerAdditionalFieldsValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\OwnerAdditionalFieldsValue[]
     */
    protected array $OwnerAdditionalFieldsValue = [];
    /**
     * Constructor method for ArrayOfOwnerAdditionalFieldsValue
     * @uses ArrayOfOwnerAdditionalFieldsValue::setOwnerAdditionalFieldsValue()
     * @param \StructType\OwnerAdditionalFieldsValue[] $ownerAdditionalFieldsValue
     */
    public function __construct(array $ownerAdditionalFieldsValue = [])
    {
        $this
            ->setOwnerAdditionalFieldsValue($ownerAdditionalFieldsValue);
    }
    /**
     * Get OwnerAdditionalFieldsValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\OwnerAdditionalFieldsValue[]
     */
    public function getOwnerAdditionalFieldsValue(): ?array
    {
        return isset($this->OwnerAdditionalFieldsValue) ? $this->OwnerAdditionalFieldsValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setOwnerAdditionalFieldsValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setOwnerAdditionalFieldsValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateOwnerAdditionalFieldsValueForArrayConstraintsFromSetOwnerAdditionalFieldsValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfOwnerAdditionalFieldsValueOwnerAdditionalFieldsValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfOwnerAdditionalFieldsValueOwnerAdditionalFieldsValueItem instanceof \StructType\OwnerAdditionalFieldsValue) {
                $invalidValues[] = is_object($arrayOfOwnerAdditionalFieldsValueOwnerAdditionalFieldsValueItem) ? get_class($arrayOfOwnerAdditionalFieldsValueOwnerAdditionalFieldsValueItem) : sprintf('%s(%s)', gettype($arrayOfOwnerAdditionalFieldsValueOwnerAdditionalFieldsValueItem), var_export($arrayOfOwnerAdditionalFieldsValueOwnerAdditionalFieldsValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The OwnerAdditionalFieldsValue property can only contain items of type \StructType\OwnerAdditionalFieldsValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set OwnerAdditionalFieldsValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\OwnerAdditionalFieldsValue[] $ownerAdditionalFieldsValue
     * @return \ArrayType\ArrayOfOwnerAdditionalFieldsValue
     */
    public function setOwnerAdditionalFieldsValue(array $ownerAdditionalFieldsValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($ownerAdditionalFieldsValueArrayErrorMessage = self::validateOwnerAdditionalFieldsValueForArrayConstraintsFromSetOwnerAdditionalFieldsValue($ownerAdditionalFieldsValue))) {
            throw new InvalidArgumentException($ownerAdditionalFieldsValueArrayErrorMessage, __LINE__);
        }
        if (is_null($ownerAdditionalFieldsValue) || (is_array($ownerAdditionalFieldsValue) && empty($ownerAdditionalFieldsValue))) {
            unset($this->OwnerAdditionalFieldsValue);
        } else {
            $this->OwnerAdditionalFieldsValue = $ownerAdditionalFieldsValue;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\OwnerAdditionalFieldsValue|null
     */
    public function current(): ?\StructType\OwnerAdditionalFieldsValue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\OwnerAdditionalFieldsValue|null
     */
    public function item($index): ?\StructType\OwnerAdditionalFieldsValue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\OwnerAdditionalFieldsValue|null
     */
    public function first(): ?\StructType\OwnerAdditionalFieldsValue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\OwnerAdditionalFieldsValue|null
     */
    public function last(): ?\StructType\OwnerAdditionalFieldsValue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\OwnerAdditionalFieldsValue|null
     */
    public function offsetGet($offset): ?\StructType\OwnerAdditionalFieldsValue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\OwnerAdditionalFieldsValue $item
     * @return \ArrayType\ArrayOfOwnerAdditionalFieldsValue
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\OwnerAdditionalFieldsValue) {
            throw new InvalidArgumentException(sprintf('The OwnerAdditionalFieldsValue property can only contain items of type \StructType\OwnerAdditionalFieldsValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string OwnerAdditionalFieldsValue
     */
    public function getAttributeName(): string
    {
        return 'OwnerAdditionalFieldsValue';
    }
}
