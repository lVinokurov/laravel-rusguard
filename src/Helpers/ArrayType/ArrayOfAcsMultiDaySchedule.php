<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsMultiDaySchedule ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsMultiDaySchedule
 * @subpackage Arrays
 */
class ArrayOfAcsMultiDaySchedule extends AbstractStructArrayBase
{
    /**
     * The AcsMultiDaySchedule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsMultiDaySchedule[]
     */
    protected array $AcsMultiDaySchedule = [];
    /**
     * Constructor method for ArrayOfAcsMultiDaySchedule
     * @uses ArrayOfAcsMultiDaySchedule::setAcsMultiDaySchedule()
     * @param \StructType\AcsMultiDaySchedule[] $acsMultiDaySchedule
     */
    public function __construct(array $acsMultiDaySchedule = [])
    {
        $this
            ->setAcsMultiDaySchedule($acsMultiDaySchedule);
    }
    /**
     * Get AcsMultiDaySchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsMultiDaySchedule[]
     */
    public function getAcsMultiDaySchedule(): ?array
    {
        return isset($this->AcsMultiDaySchedule) ? $this->AcsMultiDaySchedule : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsMultiDaySchedule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsMultiDaySchedule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsMultiDayScheduleForArrayConstraintsFromSetAcsMultiDaySchedule(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsMultiDayScheduleAcsMultiDayScheduleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsMultiDayScheduleAcsMultiDayScheduleItem instanceof \StructType\AcsMultiDaySchedule) {
                $invalidValues[] = is_object($arrayOfAcsMultiDayScheduleAcsMultiDayScheduleItem) ? get_class($arrayOfAcsMultiDayScheduleAcsMultiDayScheduleItem) : sprintf('%s(%s)', gettype($arrayOfAcsMultiDayScheduleAcsMultiDayScheduleItem), var_export($arrayOfAcsMultiDayScheduleAcsMultiDayScheduleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsMultiDaySchedule property can only contain items of type \StructType\AcsMultiDaySchedule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsMultiDaySchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsMultiDaySchedule[] $acsMultiDaySchedule
     * @return \ArrayType\ArrayOfAcsMultiDaySchedule
     */
    public function setAcsMultiDaySchedule(array $acsMultiDaySchedule = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsMultiDayScheduleArrayErrorMessage = self::validateAcsMultiDayScheduleForArrayConstraintsFromSetAcsMultiDaySchedule($acsMultiDaySchedule))) {
            throw new InvalidArgumentException($acsMultiDayScheduleArrayErrorMessage, __LINE__);
        }
        if (is_null($acsMultiDaySchedule) || (is_array($acsMultiDaySchedule) && empty($acsMultiDaySchedule))) {
            unset($this->AcsMultiDaySchedule);
        } else {
            $this->AcsMultiDaySchedule = $acsMultiDaySchedule;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function current(): ?\StructType\AcsMultiDaySchedule
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function item($index): ?\StructType\AcsMultiDaySchedule
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function first(): ?\StructType\AcsMultiDaySchedule
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function last(): ?\StructType\AcsMultiDaySchedule
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsMultiDaySchedule|null
     */
    public function offsetGet($offset): ?\StructType\AcsMultiDaySchedule
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsMultiDaySchedule $item
     * @return \ArrayType\ArrayOfAcsMultiDaySchedule
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsMultiDaySchedule) {
            throw new InvalidArgumentException(sprintf('The AcsMultiDaySchedule property can only contain items of type \StructType\AcsMultiDaySchedule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsMultiDaySchedule
     */
    public function getAttributeName(): string
    {
        return 'AcsMultiDaySchedule';
    }
}
