<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsVehicleSearched ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsVehicleSearched
 * @subpackage Arrays
 */
class ArrayOfAcsVehicleSearched extends AbstractStructArrayBase
{
    /**
     * The AcsVehicleSearched
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsVehicleSearched[]
     */
    protected array $AcsVehicleSearched = [];
    /**
     * Constructor method for ArrayOfAcsVehicleSearched
     * @uses ArrayOfAcsVehicleSearched::setAcsVehicleSearched()
     * @param \StructType\AcsVehicleSearched[] $acsVehicleSearched
     */
    public function __construct(array $acsVehicleSearched = [])
    {
        $this
            ->setAcsVehicleSearched($acsVehicleSearched);
    }
    /**
     * Get AcsVehicleSearched value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsVehicleSearched[]
     */
    public function getAcsVehicleSearched(): ?array
    {
        return isset($this->AcsVehicleSearched) ? $this->AcsVehicleSearched : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsVehicleSearched method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsVehicleSearched method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsVehicleSearchedForArrayConstraintsFromSetAcsVehicleSearched(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsVehicleSearchedAcsVehicleSearchedItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsVehicleSearchedAcsVehicleSearchedItem instanceof \StructType\AcsVehicleSearched) {
                $invalidValues[] = is_object($arrayOfAcsVehicleSearchedAcsVehicleSearchedItem) ? get_class($arrayOfAcsVehicleSearchedAcsVehicleSearchedItem) : sprintf('%s(%s)', gettype($arrayOfAcsVehicleSearchedAcsVehicleSearchedItem), var_export($arrayOfAcsVehicleSearchedAcsVehicleSearchedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsVehicleSearched property can only contain items of type \StructType\AcsVehicleSearched, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsVehicleSearched value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsVehicleSearched[] $acsVehicleSearched
     * @return \ArrayType\ArrayOfAcsVehicleSearched
     */
    public function setAcsVehicleSearched(array $acsVehicleSearched = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsVehicleSearchedArrayErrorMessage = self::validateAcsVehicleSearchedForArrayConstraintsFromSetAcsVehicleSearched($acsVehicleSearched))) {
            throw new InvalidArgumentException($acsVehicleSearchedArrayErrorMessage, __LINE__);
        }
        if (is_null($acsVehicleSearched) || (is_array($acsVehicleSearched) && empty($acsVehicleSearched))) {
            unset($this->AcsVehicleSearched);
        } else {
            $this->AcsVehicleSearched = $acsVehicleSearched;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsVehicleSearched|null
     */
    public function current(): ?\StructType\AcsVehicleSearched
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsVehicleSearched|null
     */
    public function item($index): ?\StructType\AcsVehicleSearched
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsVehicleSearched|null
     */
    public function first(): ?\StructType\AcsVehicleSearched
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsVehicleSearched|null
     */
    public function last(): ?\StructType\AcsVehicleSearched
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsVehicleSearched|null
     */
    public function offsetGet($offset): ?\StructType\AcsVehicleSearched
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsVehicleSearched $item
     * @return \ArrayType\ArrayOfAcsVehicleSearched
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsVehicleSearched) {
            throw new InvalidArgumentException(sprintf('The AcsVehicleSearched property can only contain items of type \StructType\AcsVehicleSearched, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsVehicleSearched
     */
    public function getAttributeName(): string
    {
        return 'AcsVehicleSearched';
    }
}
