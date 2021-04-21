<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsCustomDay ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsCustomDay
 * @subpackage Arrays
 */
class ArrayOfAcsCustomDay extends AbstractStructArrayBase
{
    /**
     * The AcsCustomDay
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsCustomDay[]
     */
    protected array $AcsCustomDay = [];
    /**
     * Constructor method for ArrayOfAcsCustomDay
     * @uses ArrayOfAcsCustomDay::setAcsCustomDay()
     * @param \StructType\AcsCustomDay[] $acsCustomDay
     */
    public function __construct(array $acsCustomDay = [])
    {
        $this
            ->setAcsCustomDay($acsCustomDay);
    }
    /**
     * Get AcsCustomDay value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsCustomDay[]
     */
    public function getAcsCustomDay(): ?array
    {
        return isset($this->AcsCustomDay) ? $this->AcsCustomDay : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsCustomDay method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsCustomDay method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsCustomDayForArrayConstraintsFromSetAcsCustomDay(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsCustomDayAcsCustomDayItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsCustomDayAcsCustomDayItem instanceof \StructType\AcsCustomDay) {
                $invalidValues[] = is_object($arrayOfAcsCustomDayAcsCustomDayItem) ? get_class($arrayOfAcsCustomDayAcsCustomDayItem) : sprintf('%s(%s)', gettype($arrayOfAcsCustomDayAcsCustomDayItem), var_export($arrayOfAcsCustomDayAcsCustomDayItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsCustomDay property can only contain items of type \StructType\AcsCustomDay, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsCustomDay value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsCustomDay[] $acsCustomDay
     * @return \ArrayType\ArrayOfAcsCustomDay
     */
    public function setAcsCustomDay(array $acsCustomDay = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsCustomDayArrayErrorMessage = self::validateAcsCustomDayForArrayConstraintsFromSetAcsCustomDay($acsCustomDay))) {
            throw new InvalidArgumentException($acsCustomDayArrayErrorMessage, __LINE__);
        }
        if (is_null($acsCustomDay) || (is_array($acsCustomDay) && empty($acsCustomDay))) {
            unset($this->AcsCustomDay);
        } else {
            $this->AcsCustomDay = $acsCustomDay;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsCustomDay|null
     */
    public function current(): ?\StructType\AcsCustomDay
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsCustomDay|null
     */
    public function item($index): ?\StructType\AcsCustomDay
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsCustomDay|null
     */
    public function first(): ?\StructType\AcsCustomDay
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsCustomDay|null
     */
    public function last(): ?\StructType\AcsCustomDay
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsCustomDay|null
     */
    public function offsetGet($offset): ?\StructType\AcsCustomDay
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsCustomDay $item
     * @return \ArrayType\ArrayOfAcsCustomDay
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsCustomDay) {
            throw new InvalidArgumentException(sprintf('The AcsCustomDay property can only contain items of type \StructType\AcsCustomDay, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsCustomDay
     */
    public function getAttributeName(): string
    {
        return 'AcsCustomDay';
    }
}
