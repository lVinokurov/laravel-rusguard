<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkZoneSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWorkZoneSlimInfo
 * @subpackage Arrays
 */
class ArrayOfWorkZoneSlimInfo extends AbstractStructArrayBase
{
    /**
     * The WorkZoneSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZoneSlimInfo[]
     */
    protected array $WorkZoneSlimInfo = [];
    /**
     * Constructor method for ArrayOfWorkZoneSlimInfo
     * @uses ArrayOfWorkZoneSlimInfo::setWorkZoneSlimInfo()
     * @param \StructType\WorkZoneSlimInfo[] $workZoneSlimInfo
     */
    public function __construct(array $workZoneSlimInfo = [])
    {
        $this
            ->setWorkZoneSlimInfo($workZoneSlimInfo);
    }
    /**
     * Get WorkZoneSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZoneSlimInfo[]
     */
    public function getWorkZoneSlimInfo(): ?array
    {
        return isset($this->WorkZoneSlimInfo) ? $this->WorkZoneSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkZoneSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkZoneSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkZoneSlimInfoForArrayConstraintsFromSetWorkZoneSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkZoneSlimInfoWorkZoneSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkZoneSlimInfoWorkZoneSlimInfoItem instanceof \StructType\WorkZoneSlimInfo) {
                $invalidValues[] = is_object($arrayOfWorkZoneSlimInfoWorkZoneSlimInfoItem) ? get_class($arrayOfWorkZoneSlimInfoWorkZoneSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfWorkZoneSlimInfoWorkZoneSlimInfoItem), var_export($arrayOfWorkZoneSlimInfoWorkZoneSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkZoneSlimInfo property can only contain items of type \StructType\WorkZoneSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkZoneSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\WorkZoneSlimInfo[] $workZoneSlimInfo
     * @return \ArrayType\ArrayOfWorkZoneSlimInfo
     */
    public function setWorkZoneSlimInfo(array $workZoneSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($workZoneSlimInfoArrayErrorMessage = self::validateWorkZoneSlimInfoForArrayConstraintsFromSetWorkZoneSlimInfo($workZoneSlimInfo))) {
            throw new InvalidArgumentException($workZoneSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($workZoneSlimInfo) || (is_array($workZoneSlimInfo) && empty($workZoneSlimInfo))) {
            unset($this->WorkZoneSlimInfo);
        } else {
            $this->WorkZoneSlimInfo = $workZoneSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkZoneSlimInfo|null
     */
    public function current(): ?\StructType\WorkZoneSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkZoneSlimInfo|null
     */
    public function item($index): ?\StructType\WorkZoneSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkZoneSlimInfo|null
     */
    public function first(): ?\StructType\WorkZoneSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkZoneSlimInfo|null
     */
    public function last(): ?\StructType\WorkZoneSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkZoneSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\WorkZoneSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\WorkZoneSlimInfo $item
     * @return \ArrayType\ArrayOfWorkZoneSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkZoneSlimInfo) {
            throw new InvalidArgumentException(sprintf('The WorkZoneSlimInfo property can only contain items of type \StructType\WorkZoneSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkZoneSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'WorkZoneSlimInfo';
    }
}
