<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfScreenCellSaveData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfScreenCellSaveData
 * @subpackage Arrays
 */
class ArrayOfScreenCellSaveData extends AbstractStructArrayBase
{
    /**
     * The ScreenCellSaveData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ScreenCellSaveData[]
     */
    protected array $ScreenCellSaveData = [];
    /**
     * Constructor method for ArrayOfScreenCellSaveData
     * @uses ArrayOfScreenCellSaveData::setScreenCellSaveData()
     * @param \StructType\ScreenCellSaveData[] $screenCellSaveData
     */
    public function __construct(array $screenCellSaveData = [])
    {
        $this
            ->setScreenCellSaveData($screenCellSaveData);
    }
    /**
     * Get ScreenCellSaveData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ScreenCellSaveData[]
     */
    public function getScreenCellSaveData(): ?array
    {
        return isset($this->ScreenCellSaveData) ? $this->ScreenCellSaveData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setScreenCellSaveData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setScreenCellSaveData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateScreenCellSaveDataForArrayConstraintsFromSetScreenCellSaveData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfScreenCellSaveDataScreenCellSaveDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfScreenCellSaveDataScreenCellSaveDataItem instanceof \StructType\ScreenCellSaveData) {
                $invalidValues[] = is_object($arrayOfScreenCellSaveDataScreenCellSaveDataItem) ? get_class($arrayOfScreenCellSaveDataScreenCellSaveDataItem) : sprintf('%s(%s)', gettype($arrayOfScreenCellSaveDataScreenCellSaveDataItem), var_export($arrayOfScreenCellSaveDataScreenCellSaveDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ScreenCellSaveData property can only contain items of type \StructType\ScreenCellSaveData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ScreenCellSaveData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ScreenCellSaveData[] $screenCellSaveData
     * @return \ArrayType\ArrayOfScreenCellSaveData
     */
    public function setScreenCellSaveData(array $screenCellSaveData = []): self
    {
        // validation for constraint: array
        if ('' !== ($screenCellSaveDataArrayErrorMessage = self::validateScreenCellSaveDataForArrayConstraintsFromSetScreenCellSaveData($screenCellSaveData))) {
            throw new InvalidArgumentException($screenCellSaveDataArrayErrorMessage, __LINE__);
        }
        if (is_null($screenCellSaveData) || (is_array($screenCellSaveData) && empty($screenCellSaveData))) {
            unset($this->ScreenCellSaveData);
        } else {
            $this->ScreenCellSaveData = $screenCellSaveData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ScreenCellSaveData|null
     */
    public function current(): ?\StructType\ScreenCellSaveData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ScreenCellSaveData|null
     */
    public function item($index): ?\StructType\ScreenCellSaveData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ScreenCellSaveData|null
     */
    public function first(): ?\StructType\ScreenCellSaveData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ScreenCellSaveData|null
     */
    public function last(): ?\StructType\ScreenCellSaveData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ScreenCellSaveData|null
     */
    public function offsetGet($offset): ?\StructType\ScreenCellSaveData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ScreenCellSaveData $item
     * @return \ArrayType\ArrayOfScreenCellSaveData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ScreenCellSaveData) {
            throw new InvalidArgumentException(sprintf('The ScreenCellSaveData property can only contain items of type \StructType\ScreenCellSaveData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ScreenCellSaveData
     */
    public function getAttributeName(): string
    {
        return 'ScreenCellSaveData';
    }
}
