<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLPropertyValue ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLPropertyValue
 * @subpackage Arrays
 */
class ArrayOfLPropertyValue extends AbstractStructArrayBase
{
    /**
     * The LPropertyValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LPropertyValue[]
     */
    protected array $LPropertyValue = [];
    /**
     * Constructor method for ArrayOfLPropertyValue
     * @uses ArrayOfLPropertyValue::setLPropertyValue()
     * @param \StructType\LPropertyValue[] $lPropertyValue
     */
    public function __construct(array $lPropertyValue = [])
    {
        $this
            ->setLPropertyValue($lPropertyValue);
    }
    /**
     * Get LPropertyValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LPropertyValue[]
     */
    public function getLPropertyValue(): ?array
    {
        return isset($this->LPropertyValue) ? $this->LPropertyValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLPropertyValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLPropertyValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLPropertyValueForArrayConstraintsFromSetLPropertyValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLPropertyValueLPropertyValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfLPropertyValueLPropertyValueItem instanceof \StructType\LPropertyValue) {
                $invalidValues[] = is_object($arrayOfLPropertyValueLPropertyValueItem) ? get_class($arrayOfLPropertyValueLPropertyValueItem) : sprintf('%s(%s)', gettype($arrayOfLPropertyValueLPropertyValueItem), var_export($arrayOfLPropertyValueLPropertyValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LPropertyValue property can only contain items of type \StructType\LPropertyValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LPropertyValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LPropertyValue[] $lPropertyValue
     * @return \ArrayType\ArrayOfLPropertyValue
     */
    public function setLPropertyValue(array $lPropertyValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($lPropertyValueArrayErrorMessage = self::validateLPropertyValueForArrayConstraintsFromSetLPropertyValue($lPropertyValue))) {
            throw new InvalidArgumentException($lPropertyValueArrayErrorMessage, __LINE__);
        }
        if (is_null($lPropertyValue) || (is_array($lPropertyValue) && empty($lPropertyValue))) {
            unset($this->LPropertyValue);
        } else {
            $this->LPropertyValue = $lPropertyValue;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LPropertyValue|null
     */
    public function current(): ?\StructType\LPropertyValue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LPropertyValue|null
     */
    public function item($index): ?\StructType\LPropertyValue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LPropertyValue|null
     */
    public function first(): ?\StructType\LPropertyValue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LPropertyValue|null
     */
    public function last(): ?\StructType\LPropertyValue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LPropertyValue|null
     */
    public function offsetGet($offset): ?\StructType\LPropertyValue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LPropertyValue $item
     * @return \ArrayType\ArrayOfLPropertyValue
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LPropertyValue) {
            throw new InvalidArgumentException(sprintf('The LPropertyValue property can only contain items of type \StructType\LPropertyValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LPropertyValue
     */
    public function getAttributeName(): string
    {
        return 'LPropertyValue';
    }
}
