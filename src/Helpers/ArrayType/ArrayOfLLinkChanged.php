<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLLinkChanged ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLLinkChanged
 * @subpackage Arrays
 */
class ArrayOfLLinkChanged extends AbstractStructArrayBase
{
    /**
     * The LLinkChanged
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LLinkChanged[]
     */
    protected array $LLinkChanged = [];
    /**
     * Constructor method for ArrayOfLLinkChanged
     * @uses ArrayOfLLinkChanged::setLLinkChanged()
     * @param \StructType\LLinkChanged[] $lLinkChanged
     */
    public function __construct(array $lLinkChanged = [])
    {
        $this
            ->setLLinkChanged($lLinkChanged);
    }
    /**
     * Get LLinkChanged value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LLinkChanged[]
     */
    public function getLLinkChanged(): ?array
    {
        return isset($this->LLinkChanged) ? $this->LLinkChanged : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLLinkChanged method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLLinkChanged method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLLinkChangedForArrayConstraintsFromSetLLinkChanged(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLLinkChangedLLinkChangedItem) {
            // validation for constraint: itemType
            if (!$arrayOfLLinkChangedLLinkChangedItem instanceof \StructType\LLinkChanged) {
                $invalidValues[] = is_object($arrayOfLLinkChangedLLinkChangedItem) ? get_class($arrayOfLLinkChangedLLinkChangedItem) : sprintf('%s(%s)', gettype($arrayOfLLinkChangedLLinkChangedItem), var_export($arrayOfLLinkChangedLLinkChangedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LLinkChanged property can only contain items of type \StructType\LLinkChanged, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LLinkChanged value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LLinkChanged[] $lLinkChanged
     * @return \ArrayType\ArrayOfLLinkChanged
     */
    public function setLLinkChanged(array $lLinkChanged = []): self
    {
        // validation for constraint: array
        if ('' !== ($lLinkChangedArrayErrorMessage = self::validateLLinkChangedForArrayConstraintsFromSetLLinkChanged($lLinkChanged))) {
            throw new InvalidArgumentException($lLinkChangedArrayErrorMessage, __LINE__);
        }
        if (is_null($lLinkChanged) || (is_array($lLinkChanged) && empty($lLinkChanged))) {
            unset($this->LLinkChanged);
        } else {
            $this->LLinkChanged = $lLinkChanged;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LLinkChanged|null
     */
    public function current(): ?\StructType\LLinkChanged
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LLinkChanged|null
     */
    public function item($index): ?\StructType\LLinkChanged
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LLinkChanged|null
     */
    public function first(): ?\StructType\LLinkChanged
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LLinkChanged|null
     */
    public function last(): ?\StructType\LLinkChanged
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LLinkChanged|null
     */
    public function offsetGet($offset): ?\StructType\LLinkChanged
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LLinkChanged $item
     * @return \ArrayType\ArrayOfLLinkChanged
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LLinkChanged) {
            throw new InvalidArgumentException(sprintf('The LLinkChanged property can only contain items of type \StructType\LLinkChanged, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LLinkChanged
     */
    public function getAttributeName(): string
    {
        return 'LLinkChanged';
    }
}
