<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeSchedule ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeSchedule
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeSchedule extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeSchedule
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeSchedule[]
     */
    protected array $AcsEmployeeSchedule = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeSchedule
     * @uses ArrayOfAcsEmployeeSchedule::setAcsEmployeeSchedule()
     * @param \StructType\AcsEmployeeSchedule[] $acsEmployeeSchedule
     */
    public function __construct(array $acsEmployeeSchedule = [])
    {
        $this
            ->setAcsEmployeeSchedule($acsEmployeeSchedule);
    }
    /**
     * Get AcsEmployeeSchedule value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeSchedule[]
     */
    public function getAcsEmployeeSchedule(): ?array
    {
        return isset($this->AcsEmployeeSchedule) ? $this->AcsEmployeeSchedule : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeSchedule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeSchedule method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeScheduleForArrayConstraintsFromSetAcsEmployeeSchedule(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeScheduleAcsEmployeeScheduleItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeScheduleAcsEmployeeScheduleItem instanceof \StructType\AcsEmployeeSchedule) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeScheduleAcsEmployeeScheduleItem) ? get_class($arrayOfAcsEmployeeScheduleAcsEmployeeScheduleItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeScheduleAcsEmployeeScheduleItem), var_export($arrayOfAcsEmployeeScheduleAcsEmployeeScheduleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeSchedule property can only contain items of type \StructType\AcsEmployeeSchedule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeSchedule value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeSchedule[] $acsEmployeeSchedule
     * @return \ArrayType\ArrayOfAcsEmployeeSchedule
     */
    public function setAcsEmployeeSchedule(array $acsEmployeeSchedule = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeScheduleArrayErrorMessage = self::validateAcsEmployeeScheduleForArrayConstraintsFromSetAcsEmployeeSchedule($acsEmployeeSchedule))) {
            throw new InvalidArgumentException($acsEmployeeScheduleArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeSchedule) || (is_array($acsEmployeeSchedule) && empty($acsEmployeeSchedule))) {
            unset($this->AcsEmployeeSchedule);
        } else {
            $this->AcsEmployeeSchedule = $acsEmployeeSchedule;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeSchedule|null
     */
    public function current(): ?\StructType\AcsEmployeeSchedule
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeSchedule|null
     */
    public function item($index): ?\StructType\AcsEmployeeSchedule
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeSchedule|null
     */
    public function first(): ?\StructType\AcsEmployeeSchedule
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeSchedule|null
     */
    public function last(): ?\StructType\AcsEmployeeSchedule
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeSchedule|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeSchedule
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeSchedule $item
     * @return \ArrayType\ArrayOfAcsEmployeeSchedule
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeSchedule) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeSchedule property can only contain items of type \StructType\AcsEmployeeSchedule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeSchedule
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeSchedule';
    }
}
