<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRGDayIntervals ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRGDayIntervals
 * @subpackage Arrays
 */
class ArrayOfRGDayIntervals extends AbstractStructArrayBase
{
    /**
     * The RGDayIntervals
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\RGDayIntervals[]
     */
    protected array $RGDayIntervals = [];
    /**
     * Constructor method for ArrayOfRGDayIntervals
     * @uses ArrayOfRGDayIntervals::setRGDayIntervals()
     * @param \StructType\RGDayIntervals[] $rGDayIntervals
     */
    public function __construct(array $rGDayIntervals = [])
    {
        $this
            ->setRGDayIntervals($rGDayIntervals);
    }
    /**
     * Get RGDayIntervals value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\RGDayIntervals[]
     */
    public function getRGDayIntervals(): ?array
    {
        return isset($this->RGDayIntervals) ? $this->RGDayIntervals : null;
    }
    /**
     * This method is responsible for validating the values passed to the setRGDayIntervals method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRGDayIntervals method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRGDayIntervalsForArrayConstraintsFromSetRGDayIntervals(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRGDayIntervalsRGDayIntervalsItem) {
            // validation for constraint: itemType
            if (!$arrayOfRGDayIntervalsRGDayIntervalsItem instanceof \StructType\RGDayIntervals) {
                $invalidValues[] = is_object($arrayOfRGDayIntervalsRGDayIntervalsItem) ? get_class($arrayOfRGDayIntervalsRGDayIntervalsItem) : sprintf('%s(%s)', gettype($arrayOfRGDayIntervalsRGDayIntervalsItem), var_export($arrayOfRGDayIntervalsRGDayIntervalsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RGDayIntervals property can only contain items of type \StructType\RGDayIntervals, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RGDayIntervals value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\RGDayIntervals[] $rGDayIntervals
     * @return \ArrayType\ArrayOfRGDayIntervals
     */
    public function setRGDayIntervals(array $rGDayIntervals = []): self
    {
        // validation for constraint: array
        if ('' !== ($rGDayIntervalsArrayErrorMessage = self::validateRGDayIntervalsForArrayConstraintsFromSetRGDayIntervals($rGDayIntervals))) {
            throw new InvalidArgumentException($rGDayIntervalsArrayErrorMessage, __LINE__);
        }
        if (is_null($rGDayIntervals) || (is_array($rGDayIntervals) && empty($rGDayIntervals))) {
            unset($this->RGDayIntervals);
        } else {
            $this->RGDayIntervals = $rGDayIntervals;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RGDayIntervals|null
     */
    public function current(): ?\StructType\RGDayIntervals
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RGDayIntervals|null
     */
    public function item($index): ?\StructType\RGDayIntervals
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RGDayIntervals|null
     */
    public function first(): ?\StructType\RGDayIntervals
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RGDayIntervals|null
     */
    public function last(): ?\StructType\RGDayIntervals
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RGDayIntervals|null
     */
    public function offsetGet($offset): ?\StructType\RGDayIntervals
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\RGDayIntervals $item
     * @return \ArrayType\ArrayOfRGDayIntervals
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RGDayIntervals) {
            throw new InvalidArgumentException(sprintf('The RGDayIntervals property can only contain items of type \StructType\RGDayIntervals, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RGDayIntervals
     */
    public function getAttributeName(): string
    {
        return 'RGDayIntervals';
    }
}
