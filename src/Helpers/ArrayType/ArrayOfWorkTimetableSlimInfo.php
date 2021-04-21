<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkTimetableSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWorkTimetableSlimInfo
 * @subpackage Arrays
 */
class ArrayOfWorkTimetableSlimInfo extends AbstractStructArrayBase
{
    /**
     * The WorkTimetableSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkTimetableSlimInfo[]
     */
    protected array $WorkTimetableSlimInfo = [];
    /**
     * Constructor method for ArrayOfWorkTimetableSlimInfo
     * @uses ArrayOfWorkTimetableSlimInfo::setWorkTimetableSlimInfo()
     * @param \StructType\WorkTimetableSlimInfo[] $workTimetableSlimInfo
     */
    public function __construct(array $workTimetableSlimInfo = [])
    {
        $this
            ->setWorkTimetableSlimInfo($workTimetableSlimInfo);
    }
    /**
     * Get WorkTimetableSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkTimetableSlimInfo[]
     */
    public function getWorkTimetableSlimInfo(): ?array
    {
        return isset($this->WorkTimetableSlimInfo) ? $this->WorkTimetableSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkTimetableSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkTimetableSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkTimetableSlimInfoForArrayConstraintsFromSetWorkTimetableSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkTimetableSlimInfoWorkTimetableSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkTimetableSlimInfoWorkTimetableSlimInfoItem instanceof \StructType\WorkTimetableSlimInfo) {
                $invalidValues[] = is_object($arrayOfWorkTimetableSlimInfoWorkTimetableSlimInfoItem) ? get_class($arrayOfWorkTimetableSlimInfoWorkTimetableSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfWorkTimetableSlimInfoWorkTimetableSlimInfoItem), var_export($arrayOfWorkTimetableSlimInfoWorkTimetableSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkTimetableSlimInfo property can only contain items of type \StructType\WorkTimetableSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkTimetableSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\WorkTimetableSlimInfo[] $workTimetableSlimInfo
     * @return \ArrayType\ArrayOfWorkTimetableSlimInfo
     */
    public function setWorkTimetableSlimInfo(array $workTimetableSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($workTimetableSlimInfoArrayErrorMessage = self::validateWorkTimetableSlimInfoForArrayConstraintsFromSetWorkTimetableSlimInfo($workTimetableSlimInfo))) {
            throw new InvalidArgumentException($workTimetableSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($workTimetableSlimInfo) || (is_array($workTimetableSlimInfo) && empty($workTimetableSlimInfo))) {
            unset($this->WorkTimetableSlimInfo);
        } else {
            $this->WorkTimetableSlimInfo = $workTimetableSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkTimetableSlimInfo|null
     */
    public function current(): ?\StructType\WorkTimetableSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkTimetableSlimInfo|null
     */
    public function item($index): ?\StructType\WorkTimetableSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkTimetableSlimInfo|null
     */
    public function first(): ?\StructType\WorkTimetableSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkTimetableSlimInfo|null
     */
    public function last(): ?\StructType\WorkTimetableSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkTimetableSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\WorkTimetableSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\WorkTimetableSlimInfo $item
     * @return \ArrayType\ArrayOfWorkTimetableSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkTimetableSlimInfo) {
            throw new InvalidArgumentException(sprintf('The WorkTimetableSlimInfo property can only contain items of type \StructType\WorkTimetableSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkTimetableSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'WorkTimetableSlimInfo';
    }
}
