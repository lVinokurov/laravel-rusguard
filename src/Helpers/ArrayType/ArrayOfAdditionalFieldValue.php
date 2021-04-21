<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAdditionalFieldValue ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAdditionalFieldValue
 * @subpackage Arrays
 */
class ArrayOfAdditionalFieldValue extends AbstractStructArrayBase
{
    /**
     * The AdditionalFieldValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AdditionalFieldValue[]
     */
    protected array $AdditionalFieldValue = [];
    /**
     * Constructor method for ArrayOfAdditionalFieldValue
     * @uses ArrayOfAdditionalFieldValue::setAdditionalFieldValue()
     * @param \StructType\AdditionalFieldValue[] $additionalFieldValue
     */
    public function __construct(array $additionalFieldValue = [])
    {
        $this
            ->setAdditionalFieldValue($additionalFieldValue);
    }
    /**
     * Get AdditionalFieldValue value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AdditionalFieldValue[]
     */
    public function getAdditionalFieldValue(): ?array
    {
        return isset($this->AdditionalFieldValue) ? $this->AdditionalFieldValue : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalFieldValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalFieldValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalFieldValueForArrayConstraintsFromSetAdditionalFieldValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAdditionalFieldValueAdditionalFieldValueItem) {
            // validation for constraint: itemType
            if (!$arrayOfAdditionalFieldValueAdditionalFieldValueItem instanceof \StructType\AdditionalFieldValue) {
                $invalidValues[] = is_object($arrayOfAdditionalFieldValueAdditionalFieldValueItem) ? get_class($arrayOfAdditionalFieldValueAdditionalFieldValueItem) : sprintf('%s(%s)', gettype($arrayOfAdditionalFieldValueAdditionalFieldValueItem), var_export($arrayOfAdditionalFieldValueAdditionalFieldValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalFieldValue property can only contain items of type \StructType\AdditionalFieldValue, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalFieldValue value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AdditionalFieldValue[] $additionalFieldValue
     * @return \ArrayType\ArrayOfAdditionalFieldValue
     */
    public function setAdditionalFieldValue(array $additionalFieldValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($additionalFieldValueArrayErrorMessage = self::validateAdditionalFieldValueForArrayConstraintsFromSetAdditionalFieldValue($additionalFieldValue))) {
            throw new InvalidArgumentException($additionalFieldValueArrayErrorMessage, __LINE__);
        }
        if (is_null($additionalFieldValue) || (is_array($additionalFieldValue) && empty($additionalFieldValue))) {
            unset($this->AdditionalFieldValue);
        } else {
            $this->AdditionalFieldValue = $additionalFieldValue;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AdditionalFieldValue|null
     */
    public function current(): ?\StructType\AdditionalFieldValue
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AdditionalFieldValue|null
     */
    public function item($index): ?\StructType\AdditionalFieldValue
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AdditionalFieldValue|null
     */
    public function first(): ?\StructType\AdditionalFieldValue
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AdditionalFieldValue|null
     */
    public function last(): ?\StructType\AdditionalFieldValue
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AdditionalFieldValue|null
     */
    public function offsetGet($offset): ?\StructType\AdditionalFieldValue
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AdditionalFieldValue $item
     * @return \ArrayType\ArrayOfAdditionalFieldValue
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AdditionalFieldValue) {
            throw new InvalidArgumentException(sprintf('The AdditionalFieldValue property can only contain items of type \StructType\AdditionalFieldValue, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AdditionalFieldValue
     */
    public function getAttributeName(): string
    {
        return 'AdditionalFieldValue';
    }
}
