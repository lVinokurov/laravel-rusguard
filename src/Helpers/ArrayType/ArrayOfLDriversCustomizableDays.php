<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLDriversCustomizableDays ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLDriversCustomizableDays
 * @subpackage Arrays
 */
class ArrayOfLDriversCustomizableDays extends AbstractStructArrayBase
{
    /**
     * The LDriversCustomizableDays
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LDriversCustomizableDays[]
     */
    protected array $LDriversCustomizableDays = [];
    /**
     * Constructor method for ArrayOfLDriversCustomizableDays
     * @uses ArrayOfLDriversCustomizableDays::setLDriversCustomizableDays()
     * @param \StructType\LDriversCustomizableDays[] $lDriversCustomizableDays
     */
    public function __construct(array $lDriversCustomizableDays = [])
    {
        $this
            ->setLDriversCustomizableDays($lDriversCustomizableDays);
    }
    /**
     * Get LDriversCustomizableDays value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LDriversCustomizableDays[]
     */
    public function getLDriversCustomizableDays(): ?array
    {
        return isset($this->LDriversCustomizableDays) ? $this->LDriversCustomizableDays : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLDriversCustomizableDays method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLDriversCustomizableDays method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLDriversCustomizableDaysForArrayConstraintsFromSetLDriversCustomizableDays(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLDriversCustomizableDaysLDriversCustomizableDaysItem) {
            // validation for constraint: itemType
            if (!$arrayOfLDriversCustomizableDaysLDriversCustomizableDaysItem instanceof \StructType\LDriversCustomizableDays) {
                $invalidValues[] = is_object($arrayOfLDriversCustomizableDaysLDriversCustomizableDaysItem) ? get_class($arrayOfLDriversCustomizableDaysLDriversCustomizableDaysItem) : sprintf('%s(%s)', gettype($arrayOfLDriversCustomizableDaysLDriversCustomizableDaysItem), var_export($arrayOfLDriversCustomizableDaysLDriversCustomizableDaysItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LDriversCustomizableDays property can only contain items of type \StructType\LDriversCustomizableDays, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LDriversCustomizableDays value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LDriversCustomizableDays[] $lDriversCustomizableDays
     * @return \ArrayType\ArrayOfLDriversCustomizableDays
     */
    public function setLDriversCustomizableDays(array $lDriversCustomizableDays = []): self
    {
        // validation for constraint: array
        if ('' !== ($lDriversCustomizableDaysArrayErrorMessage = self::validateLDriversCustomizableDaysForArrayConstraintsFromSetLDriversCustomizableDays($lDriversCustomizableDays))) {
            throw new InvalidArgumentException($lDriversCustomizableDaysArrayErrorMessage, __LINE__);
        }
        if (is_null($lDriversCustomizableDays) || (is_array($lDriversCustomizableDays) && empty($lDriversCustomizableDays))) {
            unset($this->LDriversCustomizableDays);
        } else {
            $this->LDriversCustomizableDays = $lDriversCustomizableDays;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LDriversCustomizableDays|null
     */
    public function current(): ?\StructType\LDriversCustomizableDays
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LDriversCustomizableDays|null
     */
    public function item($index): ?\StructType\LDriversCustomizableDays
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LDriversCustomizableDays|null
     */
    public function first(): ?\StructType\LDriversCustomizableDays
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LDriversCustomizableDays|null
     */
    public function last(): ?\StructType\LDriversCustomizableDays
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LDriversCustomizableDays|null
     */
    public function offsetGet($offset): ?\StructType\LDriversCustomizableDays
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LDriversCustomizableDays $item
     * @return \ArrayType\ArrayOfLDriversCustomizableDays
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LDriversCustomizableDays) {
            throw new InvalidArgumentException(sprintf('The LDriversCustomizableDays property can only contain items of type \StructType\LDriversCustomizableDays, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LDriversCustomizableDays
     */
    public function getAttributeName(): string
    {
        return 'LDriversCustomizableDays';
    }
}
