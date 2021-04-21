<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsWeekScheduleSlim ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsWeekScheduleSlim
 * @subpackage Arrays
 */
class ArrayOfAcsWeekScheduleSlim extends AbstractStructArrayBase
{
    /**
     * The AcsWeekScheduleSlim
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWeekScheduleSlim[]
     */
    protected array $AcsWeekScheduleSlim = [];
    /**
     * Constructor method for ArrayOfAcsWeekScheduleSlim
     * @uses ArrayOfAcsWeekScheduleSlim::setAcsWeekScheduleSlim()
     * @param \StructType\AcsWeekScheduleSlim[] $acsWeekScheduleSlim
     */
    public function __construct(array $acsWeekScheduleSlim = [])
    {
        $this
            ->setAcsWeekScheduleSlim($acsWeekScheduleSlim);
    }
    /**
     * Get AcsWeekScheduleSlim value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWeekScheduleSlim[]
     */
    public function getAcsWeekScheduleSlim(): ?array
    {
        return isset($this->AcsWeekScheduleSlim) ? $this->AcsWeekScheduleSlim : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsWeekScheduleSlim method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsWeekScheduleSlim method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsWeekScheduleSlimForArrayConstraintsFromSetAcsWeekScheduleSlim(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsWeekScheduleSlimAcsWeekScheduleSlimItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsWeekScheduleSlimAcsWeekScheduleSlimItem instanceof \StructType\AcsWeekScheduleSlim) {
                $invalidValues[] = is_object($arrayOfAcsWeekScheduleSlimAcsWeekScheduleSlimItem) ? get_class($arrayOfAcsWeekScheduleSlimAcsWeekScheduleSlimItem) : sprintf('%s(%s)', gettype($arrayOfAcsWeekScheduleSlimAcsWeekScheduleSlimItem), var_export($arrayOfAcsWeekScheduleSlimAcsWeekScheduleSlimItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsWeekScheduleSlim property can only contain items of type \StructType\AcsWeekScheduleSlim, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsWeekScheduleSlim value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekScheduleSlim[] $acsWeekScheduleSlim
     * @return \ArrayType\ArrayOfAcsWeekScheduleSlim
     */
    public function setAcsWeekScheduleSlim(array $acsWeekScheduleSlim = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsWeekScheduleSlimArrayErrorMessage = self::validateAcsWeekScheduleSlimForArrayConstraintsFromSetAcsWeekScheduleSlim($acsWeekScheduleSlim))) {
            throw new InvalidArgumentException($acsWeekScheduleSlimArrayErrorMessage, __LINE__);
        }
        if (is_null($acsWeekScheduleSlim) || (is_array($acsWeekScheduleSlim) && empty($acsWeekScheduleSlim))) {
            unset($this->AcsWeekScheduleSlim);
        } else {
            $this->AcsWeekScheduleSlim = $acsWeekScheduleSlim;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsWeekScheduleSlim|null
     */
    public function current(): ?\StructType\AcsWeekScheduleSlim
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsWeekScheduleSlim|null
     */
    public function item($index): ?\StructType\AcsWeekScheduleSlim
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsWeekScheduleSlim|null
     */
    public function first(): ?\StructType\AcsWeekScheduleSlim
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsWeekScheduleSlim|null
     */
    public function last(): ?\StructType\AcsWeekScheduleSlim
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsWeekScheduleSlim|null
     */
    public function offsetGet($offset): ?\StructType\AcsWeekScheduleSlim
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekScheduleSlim $item
     * @return \ArrayType\ArrayOfAcsWeekScheduleSlim
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsWeekScheduleSlim) {
            throw new InvalidArgumentException(sprintf('The AcsWeekScheduleSlim property can only contain items of type \StructType\AcsWeekScheduleSlim, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsWeekScheduleSlim
     */
    public function getAttributeName(): string
    {
        return 'AcsWeekScheduleSlim';
    }
}
