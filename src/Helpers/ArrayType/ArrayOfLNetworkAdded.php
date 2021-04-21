<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLNetworkAdded ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLNetworkAdded
 * @subpackage Arrays
 */
class ArrayOfLNetworkAdded extends AbstractStructArrayBase
{
    /**
     * The LNetworkAdded
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LNetworkAdded[]
     */
    protected array $LNetworkAdded = [];
    /**
     * Constructor method for ArrayOfLNetworkAdded
     * @uses ArrayOfLNetworkAdded::setLNetworkAdded()
     * @param \StructType\LNetworkAdded[] $lNetworkAdded
     */
    public function __construct(array $lNetworkAdded = [])
    {
        $this
            ->setLNetworkAdded($lNetworkAdded);
    }
    /**
     * Get LNetworkAdded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LNetworkAdded[]
     */
    public function getLNetworkAdded(): ?array
    {
        return isset($this->LNetworkAdded) ? $this->LNetworkAdded : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLNetworkAdded method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLNetworkAdded method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLNetworkAddedForArrayConstraintsFromSetLNetworkAdded(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLNetworkAddedLNetworkAddedItem) {
            // validation for constraint: itemType
            if (!$arrayOfLNetworkAddedLNetworkAddedItem instanceof \StructType\LNetworkAdded) {
                $invalidValues[] = is_object($arrayOfLNetworkAddedLNetworkAddedItem) ? get_class($arrayOfLNetworkAddedLNetworkAddedItem) : sprintf('%s(%s)', gettype($arrayOfLNetworkAddedLNetworkAddedItem), var_export($arrayOfLNetworkAddedLNetworkAddedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LNetworkAdded property can only contain items of type \StructType\LNetworkAdded, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LNetworkAdded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LNetworkAdded[] $lNetworkAdded
     * @return \ArrayType\ArrayOfLNetworkAdded
     */
    public function setLNetworkAdded(array $lNetworkAdded = []): self
    {
        // validation for constraint: array
        if ('' !== ($lNetworkAddedArrayErrorMessage = self::validateLNetworkAddedForArrayConstraintsFromSetLNetworkAdded($lNetworkAdded))) {
            throw new InvalidArgumentException($lNetworkAddedArrayErrorMessage, __LINE__);
        }
        if (is_null($lNetworkAdded) || (is_array($lNetworkAdded) && empty($lNetworkAdded))) {
            unset($this->LNetworkAdded);
        } else {
            $this->LNetworkAdded = $lNetworkAdded;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LNetworkAdded|null
     */
    public function current(): ?\StructType\LNetworkAdded
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LNetworkAdded|null
     */
    public function item($index): ?\StructType\LNetworkAdded
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LNetworkAdded|null
     */
    public function first(): ?\StructType\LNetworkAdded
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LNetworkAdded|null
     */
    public function last(): ?\StructType\LNetworkAdded
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LNetworkAdded|null
     */
    public function offsetGet($offset): ?\StructType\LNetworkAdded
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LNetworkAdded $item
     * @return \ArrayType\ArrayOfLNetworkAdded
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LNetworkAdded) {
            throw new InvalidArgumentException(sprintf('The LNetworkAdded property can only contain items of type \StructType\LNetworkAdded, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LNetworkAdded
     */
    public function getAttributeName(): string
    {
        return 'LNetworkAdded';
    }
}
