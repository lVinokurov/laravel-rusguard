<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAbsent ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAbsent
 * @subpackage Arrays
 */
class ArrayOfAbsent extends AbstractStructArrayBase
{
    /**
     * The Absent
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\Absent[]
     */
    protected array $Absent = [];
    /**
     * Constructor method for ArrayOfAbsent
     * @uses ArrayOfAbsent::setAbsent()
     * @param \StructType\Absent[] $absent
     */
    public function __construct(array $absent = [])
    {
        $this
            ->setAbsent($absent);
    }
    /**
     * Get Absent value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\Absent[]
     */
    public function getAbsent(): ?array
    {
        return isset($this->Absent) ? $this->Absent : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAbsent method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAbsent method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAbsentForArrayConstraintsFromSetAbsent(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAbsentAbsentItem) {
            // validation for constraint: itemType
            if (!$arrayOfAbsentAbsentItem instanceof \StructType\Absent) {
                $invalidValues[] = is_object($arrayOfAbsentAbsentItem) ? get_class($arrayOfAbsentAbsentItem) : sprintf('%s(%s)', gettype($arrayOfAbsentAbsentItem), var_export($arrayOfAbsentAbsentItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Absent property can only contain items of type \StructType\Absent, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Absent value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\Absent[] $absent
     * @return \ArrayType\ArrayOfAbsent
     */
    public function setAbsent(array $absent = []): self
    {
        // validation for constraint: array
        if ('' !== ($absentArrayErrorMessage = self::validateAbsentForArrayConstraintsFromSetAbsent($absent))) {
            throw new InvalidArgumentException($absentArrayErrorMessage, __LINE__);
        }
        if (is_null($absent) || (is_array($absent) && empty($absent))) {
            unset($this->Absent);
        } else {
            $this->Absent = $absent;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\Absent|null
     */
    public function current(): ?\StructType\Absent
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\Absent|null
     */
    public function item($index): ?\StructType\Absent
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\Absent|null
     */
    public function first(): ?\StructType\Absent
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\Absent|null
     */
    public function last(): ?\StructType\Absent
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\Absent|null
     */
    public function offsetGet($offset): ?\StructType\Absent
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\Absent $item
     * @return \ArrayType\ArrayOfAbsent
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Absent) {
            throw new InvalidArgumentException(sprintf('The Absent property can only contain items of type \StructType\Absent, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string Absent
     */
    public function getAttributeName(): string
    {
        return 'Absent';
    }
}
