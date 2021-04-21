<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfint ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfint
 * @subpackage Arrays
 */
class ArrayOfint extends AbstractStructArrayBase
{
    /**
     * The int
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $int = [];
    /**
     * Constructor method for ArrayOfint
     * @uses ArrayOfint::setInt()
     * @param int[] $int
     */
    public function __construct(array $int = [])
    {
        $this
            ->setInt($int);
    }
    /**
     * Get int value
     * @return int[]
     */
    public function getInt(): array
    {
        return $this->int;
    }
    /**
     * This method is responsible for validating the values passed to the setInt method
     * This method is willingly generated in order to preserve the one-line inline validation within the setInt method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIntForArrayConstraintsFromSetInt(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfintIntItem) {
            // validation for constraint: itemType
            if (!(is_int($arrayOfintIntItem) || ctype_digit($arrayOfintIntItem))) {
                $invalidValues[] = is_object($arrayOfintIntItem) ? get_class($arrayOfintIntItem) : sprintf('%s(%s)', gettype($arrayOfintIntItem), var_export($arrayOfintIntItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The int property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set int value
     * @throws InvalidArgumentException
     * @param int[] $int
     * @return \ArrayType\ArrayOfint
     */
    public function setInt(array $int = []): self
    {
        // validation for constraint: array
        if ('' !== ($intArrayErrorMessage = self::validateIntForArrayConstraintsFromSetInt($int))) {
            throw new InvalidArgumentException($intArrayErrorMessage, __LINE__);
        }
        $this->int = $int;
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return int|null
     */
    public function current(): ?int
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return int|null
     */
    public function item($index): ?int
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return int|null
     */
    public function first(): ?int
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return int|null
     */
    public function last(): ?int
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return int|null
     */
    public function offsetGet($offset): ?int
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string int
     */
    public function getAttributeName(): string
    {
        return 'int';
    }
}
