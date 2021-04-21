<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLServerAdded ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLServerAdded
 * @subpackage Arrays
 */
class ArrayOfLServerAdded extends AbstractStructArrayBase
{
    /**
     * The LServerAdded
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LServerAdded[]
     */
    protected array $LServerAdded = [];
    /**
     * Constructor method for ArrayOfLServerAdded
     * @uses ArrayOfLServerAdded::setLServerAdded()
     * @param \StructType\LServerAdded[] $lServerAdded
     */
    public function __construct(array $lServerAdded = [])
    {
        $this
            ->setLServerAdded($lServerAdded);
    }
    /**
     * Get LServerAdded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LServerAdded[]
     */
    public function getLServerAdded(): ?array
    {
        return isset($this->LServerAdded) ? $this->LServerAdded : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLServerAdded method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLServerAdded method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLServerAddedForArrayConstraintsFromSetLServerAdded(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLServerAddedLServerAddedItem) {
            // validation for constraint: itemType
            if (!$arrayOfLServerAddedLServerAddedItem instanceof \StructType\LServerAdded) {
                $invalidValues[] = is_object($arrayOfLServerAddedLServerAddedItem) ? get_class($arrayOfLServerAddedLServerAddedItem) : sprintf('%s(%s)', gettype($arrayOfLServerAddedLServerAddedItem), var_export($arrayOfLServerAddedLServerAddedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LServerAdded property can only contain items of type \StructType\LServerAdded, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LServerAdded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LServerAdded[] $lServerAdded
     * @return \ArrayType\ArrayOfLServerAdded
     */
    public function setLServerAdded(array $lServerAdded = []): self
    {
        // validation for constraint: array
        if ('' !== ($lServerAddedArrayErrorMessage = self::validateLServerAddedForArrayConstraintsFromSetLServerAdded($lServerAdded))) {
            throw new InvalidArgumentException($lServerAddedArrayErrorMessage, __LINE__);
        }
        if (is_null($lServerAdded) || (is_array($lServerAdded) && empty($lServerAdded))) {
            unset($this->LServerAdded);
        } else {
            $this->LServerAdded = $lServerAdded;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LServerAdded|null
     */
    public function current(): ?\StructType\LServerAdded
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LServerAdded|null
     */
    public function item($index): ?\StructType\LServerAdded
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LServerAdded|null
     */
    public function first(): ?\StructType\LServerAdded
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LServerAdded|null
     */
    public function last(): ?\StructType\LServerAdded
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LServerAdded|null
     */
    public function offsetGet($offset): ?\StructType\LServerAdded
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LServerAdded $item
     * @return \ArrayType\ArrayOfLServerAdded
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LServerAdded) {
            throw new InvalidArgumentException(sprintf('The LServerAdded property can only contain items of type \StructType\LServerAdded, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LServerAdded
     */
    public function getAttributeName(): string
    {
        return 'LServerAdded';
    }
}
