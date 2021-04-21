<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPropertyValue ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPropertyValue
 * @subpackage Arrays
 */
class ArrayOfPropertyValue extends AbstractStructArrayBase
{
    /**
     * The PropertyValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PropertyValue[]
     */
    protected array $PropertyValue = [];
    /**
     * Constructor method for ArrayOfPropertyValue
     * @uses ArrayOfPropertyValue::_setPropertyValue_2()
     * @param \StructType\PropertyValue[] $propertyValue
     */
    public function __construct(array $propertyValue = [])
    {
        $this
            ->_setPropertyValue($propertyValue);
    }
    public function _getPropertyValue(): ?array
    {
        return isset($this->PropertyValue) ? $this->PropertyValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the _setPropertyValue_1 method
     * This method is willingly generated in order to preserve the one-line inline validation within the _setPropertyValue_1 method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePropertyValueForArrayConstraintsFrom_setPropertyValue_1(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPropertyValuePropertyValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfPropertyValuePropertyValueItem instanceof \StructType\PropertyValue) {
                $invalidValues[] = is_object($arrayOfPropertyValuePropertyValueItem) ? get_class($arrayOfPropertyValuePropertyValueItem) : sprintf('%s(%s)', gettype($arrayOfPropertyValuePropertyValueItem), var_export($arrayOfPropertyValuePropertyValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PropertyValue property can only contain items of type \StructType\PropertyValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    public function _setPropertyValue_1(array $propertyValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($propertyValueArrayErrorMessage = self::validatePropertyValueForArrayConstraintsFrom_setPropertyValue_1($propertyValue))) {
            throw new InvalidArgumentException($propertyValueArrayErrorMessage, __LINE__);
        }
        if (is_null($propertyValue) || (is_array($propertyValue) && empty($propertyValue))) {
            unset($this->PropertyValue);
        } else {
            $this->PropertyValue = $propertyValue;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PropertyValue|null
     */
    public function current(): ?\StructType\PropertyValue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PropertyValue|null
     */
    public function item($index): ?\StructType\PropertyValue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PropertyValue|null
     */
    public function first(): ?\StructType\PropertyValue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PropertyValue|null
     */
    public function last(): ?\StructType\PropertyValue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PropertyValue|null
     */
    public function offsetGet($offset): ?\StructType\PropertyValue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\PropertyValue $item
     * @return \ArrayType\ArrayOfPropertyValue
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PropertyValue) {
            throw new InvalidArgumentException(sprintf('The PropertyValue property can only contain items of type \StructType\PropertyValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PropertyValue
     */
    public function getAttributeName(): string
    {
        return 'PropertyValue';
    }
}
