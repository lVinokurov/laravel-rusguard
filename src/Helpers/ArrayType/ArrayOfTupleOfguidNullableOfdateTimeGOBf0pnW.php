<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW
 * @subpackage Arrays
 */
class ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW extends AbstractStructArrayBase
{
    /**
     * The TupleOfguidNullableOfdateTimeGOBf0pnW
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW[]
     */
    protected array $TupleOfguidNullableOfdateTimeGOBf0pnW = [];
    /**
     * Constructor method for ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW
     * @uses ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW::setTupleOfguidNullableOfdateTimeGOBf0pnW()
     * @param \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW[] $tupleOfguidNullableOfdateTimeGOBf0pnW
     */
    public function __construct(array $tupleOfguidNullableOfdateTimeGOBf0pnW = [])
    {
        $this
            ->setTupleOfguidNullableOfdateTimeGOBf0pnW($tupleOfguidNullableOfdateTimeGOBf0pnW);
    }
    /**
     * Get TupleOfguidNullableOfdateTimeGOBf0pnW value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW[]
     */
    public function getTupleOfguidNullableOfdateTimeGOBf0pnW(): ?array
    {
        return isset($this->TupleOfguidNullableOfdateTimeGOBf0pnW) ? $this->TupleOfguidNullableOfdateTimeGOBf0pnW : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTupleOfguidNullableOfdateTimeGOBf0pnW method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTupleOfguidNullableOfdateTimeGOBf0pnW method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTupleOfguidNullableOfdateTimeGOBf0pnWForArrayConstraintsFromSetTupleOfguidNullableOfdateTimeGOBf0pnW(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTupleOfguidNullableOfdateTimeGOBf0pnWTupleOfguidNullableOfdateTimeGOBf0pnWItem) {
            // validation for constraint: itemType
            if (!$arrayOfTupleOfguidNullableOfdateTimeGOBf0pnWTupleOfguidNullableOfdateTimeGOBf0pnWItem instanceof \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW) {
                $invalidValues[] = is_object($arrayOfTupleOfguidNullableOfdateTimeGOBf0pnWTupleOfguidNullableOfdateTimeGOBf0pnWItem) ? get_class($arrayOfTupleOfguidNullableOfdateTimeGOBf0pnWTupleOfguidNullableOfdateTimeGOBf0pnWItem) : sprintf('%s(%s)', gettype($arrayOfTupleOfguidNullableOfdateTimeGOBf0pnWTupleOfguidNullableOfdateTimeGOBf0pnWItem), var_export($arrayOfTupleOfguidNullableOfdateTimeGOBf0pnWTupleOfguidNullableOfdateTimeGOBf0pnWItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TupleOfguidNullableOfdateTimeGOBf0pnW property can only contain items of type \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TupleOfguidNullableOfdateTimeGOBf0pnW value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW[] $tupleOfguidNullableOfdateTimeGOBf0pnW
     * @return \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW
     */
    public function setTupleOfguidNullableOfdateTimeGOBf0pnW(array $tupleOfguidNullableOfdateTimeGOBf0pnW = []): self
    {
        // validation for constraint: array
        if ('' !== ($tupleOfguidNullableOfdateTimeGOBf0pnWArrayErrorMessage = self::validateTupleOfguidNullableOfdateTimeGOBf0pnWForArrayConstraintsFromSetTupleOfguidNullableOfdateTimeGOBf0pnW($tupleOfguidNullableOfdateTimeGOBf0pnW))) {
            throw new InvalidArgumentException($tupleOfguidNullableOfdateTimeGOBf0pnWArrayErrorMessage, __LINE__);
        }
        if (is_null($tupleOfguidNullableOfdateTimeGOBf0pnW) || (is_array($tupleOfguidNullableOfdateTimeGOBf0pnW) && empty($tupleOfguidNullableOfdateTimeGOBf0pnW))) {
            unset($this->TupleOfguidNullableOfdateTimeGOBf0pnW);
        } else {
            $this->TupleOfguidNullableOfdateTimeGOBf0pnW = $tupleOfguidNullableOfdateTimeGOBf0pnW;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    public function current(): ?\StructType\TupleOfguidNullableOfdateTimeGOBf0pnW
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    public function item($index): ?\StructType\TupleOfguidNullableOfdateTimeGOBf0pnW
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    public function first(): ?\StructType\TupleOfguidNullableOfdateTimeGOBf0pnW
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    public function last(): ?\StructType\TupleOfguidNullableOfdateTimeGOBf0pnW
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW|null
     */
    public function offsetGet($offset): ?\StructType\TupleOfguidNullableOfdateTimeGOBf0pnW
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW $item
     * @return \ArrayType\ArrayOfTupleOfguidNullableOfdateTimeGOBf0pnW
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW) {
            throw new InvalidArgumentException(sprintf('The TupleOfguidNullableOfdateTimeGOBf0pnW property can only contain items of type \StructType\TupleOfguidNullableOfdateTimeGOBf0pnW, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TupleOfguidNullableOfdateTimeGOBf0pnW
     */
    public function getAttributeName(): string
    {
        return 'TupleOfguidNullableOfdateTimeGOBf0pnW';
    }
}
