<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsDaySchedule ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsDaySchedule
 * @subpackage Arrays
 */
class ArrayOfAcsDaySchedule extends AbstractStructArrayBase
{
    /**
     * The AcsDaySchedule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsDaySchedule[]
     */
    protected array $AcsDaySchedule = [];
    /**
     * Constructor method for ArrayOfAcsDaySchedule
     * @uses ArrayOfAcsDaySchedule::setAcsDaySchedule()
     * @param \StructType\AcsDaySchedule[] $acsDaySchedule
     */
    public function __construct(array $acsDaySchedule = [])
    {
        $this
            ->setAcsDaySchedule($acsDaySchedule);
    }
    /**
     * Get AcsDaySchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsDaySchedule[]
     */
    public function getAcsDaySchedule(): ?array
    {
        return isset($this->AcsDaySchedule) ? $this->AcsDaySchedule : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsDaySchedule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsDaySchedule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsDayScheduleForArrayConstraintsFromSetAcsDaySchedule(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsDayScheduleAcsDayScheduleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsDayScheduleAcsDayScheduleItem instanceof \StructType\AcsDaySchedule) {
                $invalidValues[] = is_object($arrayOfAcsDayScheduleAcsDayScheduleItem) ? get_class($arrayOfAcsDayScheduleAcsDayScheduleItem) : sprintf('%s(%s)', gettype($arrayOfAcsDayScheduleAcsDayScheduleItem), var_export($arrayOfAcsDayScheduleAcsDayScheduleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsDaySchedule property can only contain items of type \StructType\AcsDaySchedule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsDaySchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsDaySchedule[] $acsDaySchedule
     * @return \ArrayType\ArrayOfAcsDaySchedule
     */
    public function setAcsDaySchedule(array $acsDaySchedule = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsDayScheduleArrayErrorMessage = self::validateAcsDayScheduleForArrayConstraintsFromSetAcsDaySchedule($acsDaySchedule))) {
            throw new InvalidArgumentException($acsDayScheduleArrayErrorMessage, __LINE__);
        }
        if (is_null($acsDaySchedule) || (is_array($acsDaySchedule) && empty($acsDaySchedule))) {
            unset($this->AcsDaySchedule);
        } else {
            $this->AcsDaySchedule = $acsDaySchedule;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsDaySchedule|null
     */
    public function current(): ?\StructType\AcsDaySchedule
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsDaySchedule|null
     */
    public function item($index): ?\StructType\AcsDaySchedule
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsDaySchedule|null
     */
    public function first(): ?\StructType\AcsDaySchedule
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsDaySchedule|null
     */
    public function last(): ?\StructType\AcsDaySchedule
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsDaySchedule|null
     */
    public function offsetGet($offset): ?\StructType\AcsDaySchedule
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsDaySchedule $item
     * @return \ArrayType\ArrayOfAcsDaySchedule
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsDaySchedule) {
            throw new InvalidArgumentException(sprintf('The AcsDaySchedule property can only contain items of type \StructType\AcsDaySchedule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsDaySchedule
     */
    public function getAttributeName(): string
    {
        return 'AcsDaySchedule';
    }
}
