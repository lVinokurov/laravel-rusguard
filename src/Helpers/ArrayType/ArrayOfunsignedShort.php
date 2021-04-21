<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfunsignedShort ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfunsignedShort
 * @subpackage Arrays
 */
class ArrayOfunsignedShort extends AbstractStructArrayBase
{
    /**
     * The unsignedShort
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var int[]
     */
    protected array $unsignedShort = [];
    /**
     * Constructor method for ArrayOfunsignedShort
     * @uses ArrayOfunsignedShort::setUnsignedShort()
     * @param int[] $unsignedShort
     */
    public function __construct(array $unsignedShort = [])
    {
        $this
            ->setUnsignedShort($unsignedShort);
    }
    /**
     * Get unsignedShort value
     * @return int[]
     */
    public function getUnsignedShort(): array
    {
        return $this->unsignedShort;
    }
    /**
     * This method is responsible for validating the values passed to the setUnsignedShort method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUnsignedShort method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUnsignedShortForArrayConstraintsFromSetUnsignedShort(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfunsignedShortUnsignedShortItem) {
            // validation for constraint: itemType
            if (!(is_int($arrayOfunsignedShortUnsignedShortItem) || ctype_digit($arrayOfunsignedShortUnsignedShortItem))) {
                $invalidValues[] = is_object($arrayOfunsignedShortUnsignedShortItem) ? get_class($arrayOfunsignedShortUnsignedShortItem) : sprintf('%s(%s)', gettype($arrayOfunsignedShortUnsignedShortItem), var_export($arrayOfunsignedShortUnsignedShortItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The unsignedShort property can only contain items of type int, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set unsignedShort value
     * @throws InvalidArgumentException
     * @param int[] $unsignedShort
     * @return \ArrayType\ArrayOfunsignedShort
     */
    public function setUnsignedShort(array $unsignedShort = []): self
    {
        // validation for constraint: array
        if ('' !== ($unsignedShortArrayErrorMessage = self::validateUnsignedShortForArrayConstraintsFromSetUnsignedShort($unsignedShort))) {
            throw new InvalidArgumentException($unsignedShortArrayErrorMessage, __LINE__);
        }
        $this->unsignedShort = $unsignedShort;
        
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
     * @return string unsignedShort
     */
    public function getAttributeName(): string
    {
        return 'unsignedShort';
    }
}
