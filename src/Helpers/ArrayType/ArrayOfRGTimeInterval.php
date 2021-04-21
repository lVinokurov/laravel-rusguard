<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfRGTimeInterval ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfRGTimeInterval
 * @subpackage Arrays
 */
class ArrayOfRGTimeInterval extends AbstractStructArrayBase
{
    /**
     * The RGTimeInterval
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\RGTimeInterval[]
     */
    protected array $RGTimeInterval = [];
    /**
     * Constructor method for ArrayOfRGTimeInterval
     * @uses ArrayOfRGTimeInterval::setRGTimeInterval()
     * @param \StructType\RGTimeInterval[] $rGTimeInterval
     */
    public function __construct(array $rGTimeInterval = [])
    {
        $this
            ->setRGTimeInterval($rGTimeInterval);
    }
    /**
     * Get RGTimeInterval value
     * @return \StructType\RGTimeInterval[]
     */
    public function getRGTimeInterval(): array
    {
        return $this->RGTimeInterval;
    }
    /**
     * This method is responsible for validating the values passed to the setRGTimeInterval method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRGTimeInterval method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRGTimeIntervalForArrayConstraintsFromSetRGTimeInterval(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfRGTimeIntervalRGTimeIntervalItem) {
            // validation for constraint: itemType
            if (!$arrayOfRGTimeIntervalRGTimeIntervalItem instanceof \StructType\RGTimeInterval) {
                $invalidValues[] = is_object($arrayOfRGTimeIntervalRGTimeIntervalItem) ? get_class($arrayOfRGTimeIntervalRGTimeIntervalItem) : sprintf('%s(%s)', gettype($arrayOfRGTimeIntervalRGTimeIntervalItem), var_export($arrayOfRGTimeIntervalRGTimeIntervalItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RGTimeInterval property can only contain items of type \StructType\RGTimeInterval, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RGTimeInterval value
     * @throws InvalidArgumentException
     * @param \StructType\RGTimeInterval[] $rGTimeInterval
     * @return \ArrayType\ArrayOfRGTimeInterval
     */
    public function setRGTimeInterval(array $rGTimeInterval = []): self
    {
        // validation for constraint: array
        if ('' !== ($rGTimeIntervalArrayErrorMessage = self::validateRGTimeIntervalForArrayConstraintsFromSetRGTimeInterval($rGTimeInterval))) {
            throw new InvalidArgumentException($rGTimeIntervalArrayErrorMessage, __LINE__);
        }
        $this->RGTimeInterval = $rGTimeInterval;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\RGTimeInterval|null
     */
    public function current(): ?\StructType\RGTimeInterval
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\RGTimeInterval|null
     */
    public function item($index): ?\StructType\RGTimeInterval
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\RGTimeInterval|null
     */
    public function first(): ?\StructType\RGTimeInterval
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\RGTimeInterval|null
     */
    public function last(): ?\StructType\RGTimeInterval
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\RGTimeInterval|null
     */
    public function offsetGet($offset): ?\StructType\RGTimeInterval
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\RGTimeInterval $item
     * @return \ArrayType\ArrayOfRGTimeInterval
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\RGTimeInterval) {
            throw new InvalidArgumentException(sprintf('The RGTimeInterval property can only contain items of type \StructType\RGTimeInterval, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string RGTimeInterval
     */
    public function getAttributeName(): string
    {
        return 'RGTimeInterval';
    }
}
