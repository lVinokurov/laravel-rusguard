<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfKeyValueOfstringstring ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfKeyValueOfstringstring
 * @subpackage Arrays
 */
class ArrayOfKeyValueOfstringstring extends AbstractStructArrayBase
{
    /**
     * The KeyValueOfstringstring
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \StructType\KeyValueOfstringstring[]
     */
    protected array $KeyValueOfstringstring = [];
    /**
     * Constructor method for ArrayOfKeyValueOfstringstring
     * @uses ArrayOfKeyValueOfstringstring::setKeyValueOfstringstring()
     * @param \StructType\KeyValueOfstringstring[] $keyValueOfstringstring
     */
    public function __construct(array $keyValueOfstringstring = [])
    {
        $this
            ->setKeyValueOfstringstring($keyValueOfstringstring);
    }
    /**
     * Get KeyValueOfstringstring value
     * @return \StructType\KeyValueOfstringstring[]
     */
    public function getKeyValueOfstringstring(): array
    {
        return $this->KeyValueOfstringstring;
    }
    /**
     * This method is responsible for validating the values passed to the setKeyValueOfstringstring method
     * This method is willingly generated in order to preserve the one-line inline validation within the setKeyValueOfstringstring method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateKeyValueOfstringstringForArrayConstraintsFromSetKeyValueOfstringstring(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfKeyValueOfstringstringKeyValueOfstringstringItem) {
            // validation for constraint: itemType
            if (!$arrayOfKeyValueOfstringstringKeyValueOfstringstringItem instanceof \StructType\KeyValueOfstringstring) {
                $invalidValues[] = is_object($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem) ? get_class($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem) : sprintf('%s(%s)', gettype($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem), var_export($arrayOfKeyValueOfstringstringKeyValueOfstringstringItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The KeyValueOfstringstring property can only contain items of type \StructType\KeyValueOfstringstring, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set KeyValueOfstringstring value
     * @throws InvalidArgumentException
     * @param \StructType\KeyValueOfstringstring[] $keyValueOfstringstring
     * @return \ArrayType\ArrayOfKeyValueOfstringstring
     */
    public function setKeyValueOfstringstring(array $keyValueOfstringstring = []): self
    {
        // validation for constraint: array
        if ('' !== ($keyValueOfstringstringArrayErrorMessage = self::validateKeyValueOfstringstringForArrayConstraintsFromSetKeyValueOfstringstring($keyValueOfstringstring))) {
            throw new InvalidArgumentException($keyValueOfstringstringArrayErrorMessage, __LINE__);
        }
        $this->KeyValueOfstringstring = $keyValueOfstringstring;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\KeyValueOfstringstring|null
     */
    public function current(): ?\StructType\KeyValueOfstringstring
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\KeyValueOfstringstring|null
     */
    public function item($index): ?\StructType\KeyValueOfstringstring
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\KeyValueOfstringstring|null
     */
    public function first(): ?\StructType\KeyValueOfstringstring
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\KeyValueOfstringstring|null
     */
    public function last(): ?\StructType\KeyValueOfstringstring
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\KeyValueOfstringstring|null
     */
    public function offsetGet($offset): ?\StructType\KeyValueOfstringstring
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\KeyValueOfstringstring $item
     * @return \ArrayType\ArrayOfKeyValueOfstringstring
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\KeyValueOfstringstring) {
            throw new InvalidArgumentException(sprintf('The KeyValueOfstringstring property can only contain items of type \StructType\KeyValueOfstringstring, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string KeyValueOfstringstring
     */
    public function getAttributeName(): string
    {
        return 'KeyValueOfstringstring';
    }
}
