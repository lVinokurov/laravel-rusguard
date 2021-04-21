<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsWeekFull ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsWeekFull
 * @subpackage Arrays
 */
class ArrayOfAcsWeekFull extends AbstractStructArrayBase
{
    /**
     * The AcsWeekFull
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsWeekFull[]
     */
    protected array $AcsWeekFull = [];
    /**
     * Constructor method for ArrayOfAcsWeekFull
     * @uses ArrayOfAcsWeekFull::setAcsWeekFull()
     * @param \StructType\AcsWeekFull[] $acsWeekFull
     */
    public function __construct(array $acsWeekFull = [])
    {
        $this
            ->setAcsWeekFull($acsWeekFull);
    }
    /**
     * Get AcsWeekFull value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsWeekFull[]
     */
    public function getAcsWeekFull(): ?array
    {
        return isset($this->AcsWeekFull) ? $this->AcsWeekFull : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsWeekFull method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsWeekFull method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsWeekFullForArrayConstraintsFromSetAcsWeekFull(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsWeekFullAcsWeekFullItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsWeekFullAcsWeekFullItem instanceof \StructType\AcsWeekFull) {
                $invalidValues[] = is_object($arrayOfAcsWeekFullAcsWeekFullItem) ? get_class($arrayOfAcsWeekFullAcsWeekFullItem) : sprintf('%s(%s)', gettype($arrayOfAcsWeekFullAcsWeekFullItem), var_export($arrayOfAcsWeekFullAcsWeekFullItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsWeekFull property can only contain items of type \StructType\AcsWeekFull, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsWeekFull value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekFull[] $acsWeekFull
     * @return \ArrayType\ArrayOfAcsWeekFull
     */
    public function setAcsWeekFull(array $acsWeekFull = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsWeekFullArrayErrorMessage = self::validateAcsWeekFullForArrayConstraintsFromSetAcsWeekFull($acsWeekFull))) {
            throw new InvalidArgumentException($acsWeekFullArrayErrorMessage, __LINE__);
        }
        if (is_null($acsWeekFull) || (is_array($acsWeekFull) && empty($acsWeekFull))) {
            unset($this->AcsWeekFull);
        } else {
            $this->AcsWeekFull = $acsWeekFull;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsWeekFull|null
     */
    public function current(): ?\StructType\AcsWeekFull
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsWeekFull|null
     */
    public function item($index): ?\StructType\AcsWeekFull
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsWeekFull|null
     */
    public function first(): ?\StructType\AcsWeekFull
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsWeekFull|null
     */
    public function last(): ?\StructType\AcsWeekFull
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsWeekFull|null
     */
    public function offsetGet($offset): ?\StructType\AcsWeekFull
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsWeekFull $item
     * @return \ArrayType\ArrayOfAcsWeekFull
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsWeekFull) {
            throw new InvalidArgumentException(sprintf('The AcsWeekFull property can only contain items of type \StructType\AcsWeekFull, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsWeekFull
     */
    public function getAttributeName(): string
    {
        return 'AcsWeekFull';
    }
}
