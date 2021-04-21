<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDayTypeSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDayTypeSlimInfo
 * @subpackage Arrays
 */
class ArrayOfDayTypeSlimInfo extends AbstractStructArrayBase
{
    /**
     * The DayTypeSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DayTypeSlimInfo[]
     */
    protected array $DayTypeSlimInfo = [];
    /**
     * Constructor method for ArrayOfDayTypeSlimInfo
     * @uses ArrayOfDayTypeSlimInfo::setDayTypeSlimInfo()
     * @param \StructType\DayTypeSlimInfo[] $dayTypeSlimInfo
     */
    public function __construct(array $dayTypeSlimInfo = [])
    {
        $this
            ->setDayTypeSlimInfo($dayTypeSlimInfo);
    }
    /**
     * Get DayTypeSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DayTypeSlimInfo[]
     */
    public function getDayTypeSlimInfo(): ?array
    {
        return isset($this->DayTypeSlimInfo) ? $this->DayTypeSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDayTypeSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDayTypeSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDayTypeSlimInfoForArrayConstraintsFromSetDayTypeSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDayTypeSlimInfoDayTypeSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDayTypeSlimInfoDayTypeSlimInfoItem instanceof \StructType\DayTypeSlimInfo) {
                $invalidValues[] = is_object($arrayOfDayTypeSlimInfoDayTypeSlimInfoItem) ? get_class($arrayOfDayTypeSlimInfoDayTypeSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfDayTypeSlimInfoDayTypeSlimInfoItem), var_export($arrayOfDayTypeSlimInfoDayTypeSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DayTypeSlimInfo property can only contain items of type \StructType\DayTypeSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DayTypeSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DayTypeSlimInfo[] $dayTypeSlimInfo
     * @return \ArrayType\ArrayOfDayTypeSlimInfo
     */
    public function setDayTypeSlimInfo(array $dayTypeSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($dayTypeSlimInfoArrayErrorMessage = self::validateDayTypeSlimInfoForArrayConstraintsFromSetDayTypeSlimInfo($dayTypeSlimInfo))) {
            throw new InvalidArgumentException($dayTypeSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($dayTypeSlimInfo) || (is_array($dayTypeSlimInfo) && empty($dayTypeSlimInfo))) {
            unset($this->DayTypeSlimInfo);
        } else {
            $this->DayTypeSlimInfo = $dayTypeSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DayTypeSlimInfo|null
     */
    public function current(): ?\StructType\DayTypeSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DayTypeSlimInfo|null
     */
    public function item($index): ?\StructType\DayTypeSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DayTypeSlimInfo|null
     */
    public function first(): ?\StructType\DayTypeSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DayTypeSlimInfo|null
     */
    public function last(): ?\StructType\DayTypeSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DayTypeSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\DayTypeSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DayTypeSlimInfo $item
     * @return \ArrayType\ArrayOfDayTypeSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DayTypeSlimInfo) {
            throw new InvalidArgumentException(sprintf('The DayTypeSlimInfo property can only contain items of type \StructType\DayTypeSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DayTypeSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'DayTypeSlimInfo';
    }
}
