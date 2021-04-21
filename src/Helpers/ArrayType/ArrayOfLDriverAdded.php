<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLDriverAdded ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLDriverAdded
 * @subpackage Arrays
 */
class ArrayOfLDriverAdded extends AbstractStructArrayBase
{
    /**
     * The LDriverAdded
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LDriverAdded[]
     */
    protected array $LDriverAdded = [];
    /**
     * Constructor method for ArrayOfLDriverAdded
     * @uses ArrayOfLDriverAdded::setLDriverAdded()
     * @param \StructType\LDriverAdded[] $lDriverAdded
     */
    public function __construct(array $lDriverAdded = [])
    {
        $this
            ->setLDriverAdded($lDriverAdded);
    }
    /**
     * Get LDriverAdded value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LDriverAdded[]
     */
    public function getLDriverAdded(): ?array
    {
        return isset($this->LDriverAdded) ? $this->LDriverAdded : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLDriverAdded method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLDriverAdded method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLDriverAddedForArrayConstraintsFromSetLDriverAdded(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLDriverAddedLDriverAddedItem) {
            // validation for constraint: itemType
            if (!$arrayOfLDriverAddedLDriverAddedItem instanceof \StructType\LDriverAdded) {
                $invalidValues[] = is_object($arrayOfLDriverAddedLDriverAddedItem) ? get_class($arrayOfLDriverAddedLDriverAddedItem) : sprintf('%s(%s)', gettype($arrayOfLDriverAddedLDriverAddedItem), var_export($arrayOfLDriverAddedLDriverAddedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LDriverAdded property can only contain items of type \StructType\LDriverAdded, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LDriverAdded value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LDriverAdded[] $lDriverAdded
     * @return \ArrayType\ArrayOfLDriverAdded
     */
    public function setLDriverAdded(array $lDriverAdded = []): self
    {
        // validation for constraint: array
        if ('' !== ($lDriverAddedArrayErrorMessage = self::validateLDriverAddedForArrayConstraintsFromSetLDriverAdded($lDriverAdded))) {
            throw new InvalidArgumentException($lDriverAddedArrayErrorMessage, __LINE__);
        }
        if (is_null($lDriverAdded) || (is_array($lDriverAdded) && empty($lDriverAdded))) {
            unset($this->LDriverAdded);
        } else {
            $this->LDriverAdded = $lDriverAdded;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LDriverAdded|null
     */
    public function current(): ?\StructType\LDriverAdded
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LDriverAdded|null
     */
    public function item($index): ?\StructType\LDriverAdded
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LDriverAdded|null
     */
    public function first(): ?\StructType\LDriverAdded
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LDriverAdded|null
     */
    public function last(): ?\StructType\LDriverAdded
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LDriverAdded|null
     */
    public function offsetGet($offset): ?\StructType\LDriverAdded
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LDriverAdded $item
     * @return \ArrayType\ArrayOfLDriverAdded
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LDriverAdded) {
            throw new InvalidArgumentException(sprintf('The LDriverAdded property can only contain items of type \StructType\LDriverAdded, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LDriverAdded
     */
    public function getAttributeName(): string
    {
        return 'LDriverAdded';
    }
}
