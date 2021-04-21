<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLResourcePropertyValues ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLResourcePropertyValues
 * @subpackage Arrays
 */
class ArrayOfLResourcePropertyValues extends AbstractStructArrayBase
{
    /**
     * The LResourcePropertyValues
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LResourcePropertyValues[]
     */
    protected array $LResourcePropertyValues = [];
    /**
     * Constructor method for ArrayOfLResourcePropertyValues
     * @uses ArrayOfLResourcePropertyValues::setLResourcePropertyValues()
     * @param \StructType\LResourcePropertyValues[] $lResourcePropertyValues
     */
    public function __construct(array $lResourcePropertyValues = [])
    {
        $this
            ->setLResourcePropertyValues($lResourcePropertyValues);
    }
    /**
     * Get LResourcePropertyValues value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LResourcePropertyValues[]
     */
    public function getLResourcePropertyValues(): ?array
    {
        return isset($this->LResourcePropertyValues) ? $this->LResourcePropertyValues : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLResourcePropertyValues method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLResourcePropertyValues method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLResourcePropertyValuesForArrayConstraintsFromSetLResourcePropertyValues(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLResourcePropertyValuesLResourcePropertyValuesItem) {
            // validation for constraint: itemType
            if (!$arrayOfLResourcePropertyValuesLResourcePropertyValuesItem instanceof \StructType\LResourcePropertyValues) {
                $invalidValues[] = is_object($arrayOfLResourcePropertyValuesLResourcePropertyValuesItem) ? get_class($arrayOfLResourcePropertyValuesLResourcePropertyValuesItem) : sprintf('%s(%s)', gettype($arrayOfLResourcePropertyValuesLResourcePropertyValuesItem), var_export($arrayOfLResourcePropertyValuesLResourcePropertyValuesItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LResourcePropertyValues property can only contain items of type \StructType\LResourcePropertyValues, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LResourcePropertyValues value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LResourcePropertyValues[] $lResourcePropertyValues
     * @return \ArrayType\ArrayOfLResourcePropertyValues
     */
    public function setLResourcePropertyValues(array $lResourcePropertyValues = []): self
    {
        // validation for constraint: array
        if ('' !== ($lResourcePropertyValuesArrayErrorMessage = self::validateLResourcePropertyValuesForArrayConstraintsFromSetLResourcePropertyValues($lResourcePropertyValues))) {
            throw new InvalidArgumentException($lResourcePropertyValuesArrayErrorMessage, __LINE__);
        }
        if (is_null($lResourcePropertyValues) || (is_array($lResourcePropertyValues) && empty($lResourcePropertyValues))) {
            unset($this->LResourcePropertyValues);
        } else {
            $this->LResourcePropertyValues = $lResourcePropertyValues;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LResourcePropertyValues|null
     */
    public function current(): ?\StructType\LResourcePropertyValues
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LResourcePropertyValues|null
     */
    public function item($index): ?\StructType\LResourcePropertyValues
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LResourcePropertyValues|null
     */
    public function first(): ?\StructType\LResourcePropertyValues
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LResourcePropertyValues|null
     */
    public function last(): ?\StructType\LResourcePropertyValues
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LResourcePropertyValues|null
     */
    public function offsetGet($offset): ?\StructType\LResourcePropertyValues
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LResourcePropertyValues $item
     * @return \ArrayType\ArrayOfLResourcePropertyValues
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LResourcePropertyValues) {
            throw new InvalidArgumentException(sprintf('The LResourcePropertyValues property can only contain items of type \StructType\LResourcePropertyValues, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LResourcePropertyValues
     */
    public function getAttributeName(): string
    {
        return 'LResourcePropertyValues';
    }
}
