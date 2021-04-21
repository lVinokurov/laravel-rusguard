<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkScheduleSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWorkScheduleSlimInfo
 * @subpackage Arrays
 */
class ArrayOfWorkScheduleSlimInfo extends AbstractStructArrayBase
{
    /**
     * The WorkScheduleSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkScheduleSlimInfo[]
     */
    protected array $WorkScheduleSlimInfo = [];
    /**
     * Constructor method for ArrayOfWorkScheduleSlimInfo
     * @uses ArrayOfWorkScheduleSlimInfo::setWorkScheduleSlimInfo()
     * @param \StructType\WorkScheduleSlimInfo[] $workScheduleSlimInfo
     */
    public function __construct(array $workScheduleSlimInfo = [])
    {
        $this
            ->setWorkScheduleSlimInfo($workScheduleSlimInfo);
    }
    /**
     * Get WorkScheduleSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkScheduleSlimInfo[]
     */
    public function getWorkScheduleSlimInfo(): ?array
    {
        return isset($this->WorkScheduleSlimInfo) ? $this->WorkScheduleSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkScheduleSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkScheduleSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkScheduleSlimInfoForArrayConstraintsFromSetWorkScheduleSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkScheduleSlimInfoWorkScheduleSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkScheduleSlimInfoWorkScheduleSlimInfoItem instanceof \StructType\WorkScheduleSlimInfo) {
                $invalidValues[] = is_object($arrayOfWorkScheduleSlimInfoWorkScheduleSlimInfoItem) ? get_class($arrayOfWorkScheduleSlimInfoWorkScheduleSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfWorkScheduleSlimInfoWorkScheduleSlimInfoItem), var_export($arrayOfWorkScheduleSlimInfoWorkScheduleSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkScheduleSlimInfo property can only contain items of type \StructType\WorkScheduleSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkScheduleSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\WorkScheduleSlimInfo[] $workScheduleSlimInfo
     * @return \ArrayType\ArrayOfWorkScheduleSlimInfo
     */
    public function setWorkScheduleSlimInfo(array $workScheduleSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($workScheduleSlimInfoArrayErrorMessage = self::validateWorkScheduleSlimInfoForArrayConstraintsFromSetWorkScheduleSlimInfo($workScheduleSlimInfo))) {
            throw new InvalidArgumentException($workScheduleSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($workScheduleSlimInfo) || (is_array($workScheduleSlimInfo) && empty($workScheduleSlimInfo))) {
            unset($this->WorkScheduleSlimInfo);
        } else {
            $this->WorkScheduleSlimInfo = $workScheduleSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkScheduleSlimInfo|null
     */
    public function current(): ?\StructType\WorkScheduleSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkScheduleSlimInfo|null
     */
    public function item($index): ?\StructType\WorkScheduleSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkScheduleSlimInfo|null
     */
    public function first(): ?\StructType\WorkScheduleSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkScheduleSlimInfo|null
     */
    public function last(): ?\StructType\WorkScheduleSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkScheduleSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\WorkScheduleSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\WorkScheduleSlimInfo $item
     * @return \ArrayType\ArrayOfWorkScheduleSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkScheduleSlimInfo) {
            throw new InvalidArgumentException(sprintf('The WorkScheduleSlimInfo property can only contain items of type \StructType\WorkScheduleSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkScheduleSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'WorkScheduleSlimInfo';
    }
}
