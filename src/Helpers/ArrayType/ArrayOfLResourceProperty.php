<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLResourceProperty ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLResourceProperty
 * @subpackage Arrays
 */
class ArrayOfLResourceProperty extends AbstractStructArrayBase
{
    /**
     * The LResourceProperty
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LResourceProperty[]
     */
    protected array $LResourceProperty = [];
    /**
     * Constructor method for ArrayOfLResourceProperty
     * @uses ArrayOfLResourceProperty::setLResourceProperty()
     * @param \StructType\LResourceProperty[] $lResourceProperty
     */
    public function __construct(array $lResourceProperty = [])
    {
        $this
            ->setLResourceProperty($lResourceProperty);
    }
    /**
     * Get LResourceProperty value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LResourceProperty[]
     */
    public function getLResourceProperty(): ?array
    {
        return isset($this->LResourceProperty) ? $this->LResourceProperty : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLResourceProperty method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLResourceProperty method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLResourcePropertyForArrayConstraintsFromSetLResourceProperty(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLResourcePropertyLResourcePropertyItem) {
            // validation for constraint: itemType
            if (!$arrayOfLResourcePropertyLResourcePropertyItem instanceof \StructType\LResourceProperty) {
                $invalidValues[] = is_object($arrayOfLResourcePropertyLResourcePropertyItem) ? get_class($arrayOfLResourcePropertyLResourcePropertyItem) : sprintf('%s(%s)', gettype($arrayOfLResourcePropertyLResourcePropertyItem), var_export($arrayOfLResourcePropertyLResourcePropertyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LResourceProperty property can only contain items of type \StructType\LResourceProperty, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LResourceProperty value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LResourceProperty[] $lResourceProperty
     * @return \ArrayType\ArrayOfLResourceProperty
     */
    public function setLResourceProperty(array $lResourceProperty = []): self
    {
        // validation for constraint: array
        if ('' !== ($lResourcePropertyArrayErrorMessage = self::validateLResourcePropertyForArrayConstraintsFromSetLResourceProperty($lResourceProperty))) {
            throw new InvalidArgumentException($lResourcePropertyArrayErrorMessage, __LINE__);
        }
        if (is_null($lResourceProperty) || (is_array($lResourceProperty) && empty($lResourceProperty))) {
            unset($this->LResourceProperty);
        } else {
            $this->LResourceProperty = $lResourceProperty;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LResourceProperty|null
     */
    public function current(): ?\StructType\LResourceProperty
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LResourceProperty|null
     */
    public function item($index): ?\StructType\LResourceProperty
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LResourceProperty|null
     */
    public function first(): ?\StructType\LResourceProperty
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LResourceProperty|null
     */
    public function last(): ?\StructType\LResourceProperty
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LResourceProperty|null
     */
    public function offsetGet($offset): ?\StructType\LResourceProperty
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LResourceProperty $item
     * @return \ArrayType\ArrayOfLResourceProperty
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LResourceProperty) {
            throw new InvalidArgumentException(sprintf('The LResourceProperty property can only contain items of type \StructType\LResourceProperty, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LResourceProperty
     */
    public function getAttributeName(): string
    {
        return 'LResourceProperty';
    }
}
