<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLResourcePropertyValue ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLResourcePropertyValue
 * @subpackage Arrays
 */
class ArrayOfLResourcePropertyValue extends AbstractStructArrayBase
{
    /**
     * The LResourcePropertyValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LResourcePropertyValue[]
     */
    protected array $LResourcePropertyValue = [];
    /**
     * Constructor method for ArrayOfLResourcePropertyValue
     * @uses ArrayOfLResourcePropertyValue::setLResourcePropertyValue()
     * @param \StructType\LResourcePropertyValue[] $lResourcePropertyValue
     */
    public function __construct(array $lResourcePropertyValue = [])
    {
        $this
            ->setLResourcePropertyValue($lResourcePropertyValue);
    }
    /**
     * Get LResourcePropertyValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LResourcePropertyValue[]
     */
    public function getLResourcePropertyValue(): ?array
    {
        return isset($this->LResourcePropertyValue) ? $this->LResourcePropertyValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLResourcePropertyValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLResourcePropertyValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLResourcePropertyValueForArrayConstraintsFromSetLResourcePropertyValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLResourcePropertyValueLResourcePropertyValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfLResourcePropertyValueLResourcePropertyValueItem instanceof \StructType\LResourcePropertyValue) {
                $invalidValues[] = is_object($arrayOfLResourcePropertyValueLResourcePropertyValueItem) ? get_class($arrayOfLResourcePropertyValueLResourcePropertyValueItem) : sprintf('%s(%s)', gettype($arrayOfLResourcePropertyValueLResourcePropertyValueItem), var_export($arrayOfLResourcePropertyValueLResourcePropertyValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LResourcePropertyValue property can only contain items of type \StructType\LResourcePropertyValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LResourcePropertyValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LResourcePropertyValue[] $lResourcePropertyValue
     * @return \ArrayType\ArrayOfLResourcePropertyValue
     */
    public function setLResourcePropertyValue(array $lResourcePropertyValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($lResourcePropertyValueArrayErrorMessage = self::validateLResourcePropertyValueForArrayConstraintsFromSetLResourcePropertyValue($lResourcePropertyValue))) {
            throw new InvalidArgumentException($lResourcePropertyValueArrayErrorMessage, __LINE__);
        }
        if (is_null($lResourcePropertyValue) || (is_array($lResourcePropertyValue) && empty($lResourcePropertyValue))) {
            unset($this->LResourcePropertyValue);
        } else {
            $this->LResourcePropertyValue = $lResourcePropertyValue;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LResourcePropertyValue|null
     */
    public function current(): ?\StructType\LResourcePropertyValue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LResourcePropertyValue|null
     */
    public function item($index): ?\StructType\LResourcePropertyValue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LResourcePropertyValue|null
     */
    public function first(): ?\StructType\LResourcePropertyValue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LResourcePropertyValue|null
     */
    public function last(): ?\StructType\LResourcePropertyValue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LResourcePropertyValue|null
     */
    public function offsetGet($offset): ?\StructType\LResourcePropertyValue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LResourcePropertyValue $item
     * @return \ArrayType\ArrayOfLResourcePropertyValue
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LResourcePropertyValue) {
            throw new InvalidArgumentException(sprintf('The LResourcePropertyValue property can only contain items of type \StructType\LResourcePropertyValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LResourcePropertyValue
     */
    public function getAttributeName(): string
    {
        return 'LResourcePropertyValue';
    }
}
