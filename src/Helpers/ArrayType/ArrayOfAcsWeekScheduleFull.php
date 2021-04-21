<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsWeekScheduleFull ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsWeekScheduleFull
 * @subpackage Arrays
 */
class ArrayOfAcsWeekScheduleFull extends AbstractStructArrayBase
{
    /**
     * The AcsWeekScheduleFull
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWeekScheduleFull[]
     */
    protected array $AcsWeekScheduleFull = [];
    /**
     * Constructor method for ArrayOfAcsWeekScheduleFull
     * @uses ArrayOfAcsWeekScheduleFull::setAcsWeekScheduleFull()
     * @param \StructType\AcsWeekScheduleFull[] $acsWeekScheduleFull
     */
    public function __construct(array $acsWeekScheduleFull = [])
    {
        $this
            ->setAcsWeekScheduleFull($acsWeekScheduleFull);
    }
    /**
     * Get AcsWeekScheduleFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWeekScheduleFull[]
     */
    public function getAcsWeekScheduleFull(): ?array
    {
        return isset($this->AcsWeekScheduleFull) ? $this->AcsWeekScheduleFull : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsWeekScheduleFull method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsWeekScheduleFull method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsWeekScheduleFullForArrayConstraintsFromSetAcsWeekScheduleFull(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsWeekScheduleFullAcsWeekScheduleFullItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsWeekScheduleFullAcsWeekScheduleFullItem instanceof \StructType\AcsWeekScheduleFull) {
                $invalidValues[] = is_object($arrayOfAcsWeekScheduleFullAcsWeekScheduleFullItem) ? get_class($arrayOfAcsWeekScheduleFullAcsWeekScheduleFullItem) : sprintf('%s(%s)', gettype($arrayOfAcsWeekScheduleFullAcsWeekScheduleFullItem), var_export($arrayOfAcsWeekScheduleFullAcsWeekScheduleFullItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsWeekScheduleFull property can only contain items of type \StructType\AcsWeekScheduleFull, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsWeekScheduleFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekScheduleFull[] $acsWeekScheduleFull
     * @return \ArrayType\ArrayOfAcsWeekScheduleFull
     */
    public function setAcsWeekScheduleFull(array $acsWeekScheduleFull = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsWeekScheduleFullArrayErrorMessage = self::validateAcsWeekScheduleFullForArrayConstraintsFromSetAcsWeekScheduleFull($acsWeekScheduleFull))) {
            throw new InvalidArgumentException($acsWeekScheduleFullArrayErrorMessage, __LINE__);
        }
        if (is_null($acsWeekScheduleFull) || (is_array($acsWeekScheduleFull) && empty($acsWeekScheduleFull))) {
            unset($this->AcsWeekScheduleFull);
        } else {
            $this->AcsWeekScheduleFull = $acsWeekScheduleFull;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function current(): ?\StructType\AcsWeekScheduleFull
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function item($index): ?\StructType\AcsWeekScheduleFull
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function first(): ?\StructType\AcsWeekScheduleFull
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function last(): ?\StructType\AcsWeekScheduleFull
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsWeekScheduleFull|null
     */
    public function offsetGet($offset): ?\StructType\AcsWeekScheduleFull
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekScheduleFull $item
     * @return \ArrayType\ArrayOfAcsWeekScheduleFull
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsWeekScheduleFull) {
            throw new InvalidArgumentException(sprintf('The AcsWeekScheduleFull property can only contain items of type \StructType\AcsWeekScheduleFull, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsWeekScheduleFull
     */
    public function getAttributeName(): string
    {
        return 'AcsWeekScheduleFull';
    }
}
