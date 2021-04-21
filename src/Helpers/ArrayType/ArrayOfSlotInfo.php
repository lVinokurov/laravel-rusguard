<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSlotInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSlotInfo
 * @subpackage Arrays
 */
class ArrayOfSlotInfo extends AbstractStructArrayBase
{
    /**
     * The SlotInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SlotInfo[]
     */
    protected array $SlotInfo = [];
    /**
     * Constructor method for ArrayOfSlotInfo
     * @uses ArrayOfSlotInfo::setSlotInfo()
     * @param \StructType\SlotInfo[] $slotInfo
     */
    public function __construct(array $slotInfo = [])
    {
        $this
            ->setSlotInfo($slotInfo);
    }
    /**
     * Get SlotInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SlotInfo[]
     */
    public function getSlotInfo(): ?array
    {
        return isset($this->SlotInfo) ? $this->SlotInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSlotInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSlotInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSlotInfoForArrayConstraintsFromSetSlotInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSlotInfoSlotInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfSlotInfoSlotInfoItem instanceof \StructType\SlotInfo) {
                $invalidValues[] = is_object($arrayOfSlotInfoSlotInfoItem) ? get_class($arrayOfSlotInfoSlotInfoItem) : sprintf('%s(%s)', gettype($arrayOfSlotInfoSlotInfoItem), var_export($arrayOfSlotInfoSlotInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SlotInfo property can only contain items of type \StructType\SlotInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SlotInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\SlotInfo[] $slotInfo
     * @return \ArrayType\ArrayOfSlotInfo
     */
    public function setSlotInfo(array $slotInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($slotInfoArrayErrorMessage = self::validateSlotInfoForArrayConstraintsFromSetSlotInfo($slotInfo))) {
            throw new InvalidArgumentException($slotInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($slotInfo) || (is_array($slotInfo) && empty($slotInfo))) {
            unset($this->SlotInfo);
        } else {
            $this->SlotInfo = $slotInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SlotInfo|null
     */
    public function current(): ?\StructType\SlotInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SlotInfo|null
     */
    public function item($index): ?\StructType\SlotInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SlotInfo|null
     */
    public function first(): ?\StructType\SlotInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SlotInfo|null
     */
    public function last(): ?\StructType\SlotInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SlotInfo|null
     */
    public function offsetGet($offset): ?\StructType\SlotInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\SlotInfo $item
     * @return \ArrayType\ArrayOfSlotInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SlotInfo) {
            throw new InvalidArgumentException(sprintf('The SlotInfo property can only contain items of type \StructType\SlotInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SlotInfo
     */
    public function getAttributeName(): string
    {
        return 'SlotInfo';
    }
}
