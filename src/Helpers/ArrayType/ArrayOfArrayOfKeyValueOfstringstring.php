<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfArrayOfKeyValueOfstringstring ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfArrayOfKeyValueOfstringstring
 * @subpackage Arrays
 */
class ArrayOfArrayOfKeyValueOfstringstring extends AbstractStructArrayBase
{
    /**
     * The ArrayOfKeyValueOfstringstring
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \ArrayType\ArrayOfKeyValueOfstringstring[]
     */
    protected array $ArrayOfKeyValueOfstringstring = [];
    /**
     * Constructor method for ArrayOfArrayOfKeyValueOfstringstring
     * @uses ArrayOfArrayOfKeyValueOfstringstring::setArrayOfKeyValueOfstringstring()
     * @param \ArrayType\ArrayOfKeyValueOfstringstring[] $arrayOfKeyValueOfstringstring
     */
    public function __construct(array $arrayOfKeyValueOfstringstring = [])
    {
        $this
            ->setArrayOfKeyValueOfstringstring($arrayOfKeyValueOfstringstring);
    }
    /**
     * Get ArrayOfKeyValueOfstringstring value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \ArrayType\ArrayOfKeyValueOfstringstring[]
     */
    public function getArrayOfKeyValueOfstringstring(): ?array
    {
        return isset($this->ArrayOfKeyValueOfstringstring) ? $this->ArrayOfKeyValueOfstringstring : null;
    }
    /**
     * This method is responsible for validating the values passed to the setArrayOfKeyValueOfstringstring method
     * This method is willingly generated in order to preserve the one-line inline validation within the setArrayOfKeyValueOfstringstring method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateArrayOfKeyValueOfstringstringForArrayConstraintsFromSetArrayOfKeyValueOfstringstring(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfArrayOfKeyValueOfstringstringArrayOfKeyValueOfstringstringItem) {
            // validation for constraint: itemType
            if (!$arrayOfArrayOfKeyValueOfstringstringArrayOfKeyValueOfstringstringItem instanceof \ArrayType\ArrayOfKeyValueOfstringstring) {
                $invalidValues[] = is_object($arrayOfArrayOfKeyValueOfstringstringArrayOfKeyValueOfstringstringItem) ? get_class($arrayOfArrayOfKeyValueOfstringstringArrayOfKeyValueOfstringstringItem) : sprintf('%s(%s)', gettype($arrayOfArrayOfKeyValueOfstringstringArrayOfKeyValueOfstringstringItem), var_export($arrayOfArrayOfKeyValueOfstringstringArrayOfKeyValueOfstringstringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ArrayOfKeyValueOfstringstring property can only contain items of type \ArrayType\ArrayOfKeyValueOfstringstring, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ArrayOfKeyValueOfstringstring value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \ArrayType\ArrayOfKeyValueOfstringstring[] $arrayOfKeyValueOfstringstring
     * @return \ArrayType\ArrayOfArrayOfKeyValueOfstringstring
     */
    public function setArrayOfKeyValueOfstringstring(array $arrayOfKeyValueOfstringstring = []): self
    {
        // validation for constraint: array
        if ('' !== ($arrayOfKeyValueOfstringstringArrayErrorMessage = self::validateArrayOfKeyValueOfstringstringForArrayConstraintsFromSetArrayOfKeyValueOfstringstring($arrayOfKeyValueOfstringstring))) {
            throw new InvalidArgumentException($arrayOfKeyValueOfstringstringArrayErrorMessage, __LINE__);
        }
        if (is_null($arrayOfKeyValueOfstringstring) || (is_array($arrayOfKeyValueOfstringstring) && empty($arrayOfKeyValueOfstringstring))) {
            unset($this->ArrayOfKeyValueOfstringstring);
        } else {
            $this->ArrayOfKeyValueOfstringstring = $arrayOfKeyValueOfstringstring;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function current(): ?\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function item($index): ?\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function first(): ?\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function last(): ?\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \ArrayType\ArrayOfKeyValueOfstringstring|null
     */
    public function offsetGet($offset): ?\ArrayType\ArrayOfKeyValueOfstringstring
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \ArrayType\ArrayOfKeyValueOfstringstring $item
     * @return \ArrayType\ArrayOfArrayOfKeyValueOfstringstring
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \ArrayType\ArrayOfKeyValueOfstringstring) {
            throw new InvalidArgumentException(sprintf('The ArrayOfKeyValueOfstringstring property can only contain items of type \ArrayType\ArrayOfKeyValueOfstringstring, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ArrayOfKeyValueOfstringstring
     */
    public function getAttributeName(): string
    {
        return 'ArrayOfKeyValueOfstringstring';
    }
}
