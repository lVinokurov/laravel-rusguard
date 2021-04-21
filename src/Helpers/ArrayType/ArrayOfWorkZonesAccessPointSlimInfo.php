<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkZonesAccessPointSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWorkZonesAccessPointSlimInfo
 * @subpackage Arrays
 */
class ArrayOfWorkZonesAccessPointSlimInfo extends AbstractStructArrayBase
{
    /**
     * The WorkZonesAccessPointSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkZonesAccessPointSlimInfo[]
     */
    protected array $WorkZonesAccessPointSlimInfo = [];
    /**
     * Constructor method for ArrayOfWorkZonesAccessPointSlimInfo
     * @uses ArrayOfWorkZonesAccessPointSlimInfo::setWorkZonesAccessPointSlimInfo()
     * @param \StructType\WorkZonesAccessPointSlimInfo[] $workZonesAccessPointSlimInfo
     */
    public function __construct(array $workZonesAccessPointSlimInfo = [])
    {
        $this
            ->setWorkZonesAccessPointSlimInfo($workZonesAccessPointSlimInfo);
    }
    /**
     * Get WorkZonesAccessPointSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkZonesAccessPointSlimInfo[]
     */
    public function getWorkZonesAccessPointSlimInfo(): ?array
    {
        return isset($this->WorkZonesAccessPointSlimInfo) ? $this->WorkZonesAccessPointSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkZonesAccessPointSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkZonesAccessPointSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkZonesAccessPointSlimInfoForArrayConstraintsFromSetWorkZonesAccessPointSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkZonesAccessPointSlimInfoWorkZonesAccessPointSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkZonesAccessPointSlimInfoWorkZonesAccessPointSlimInfoItem instanceof \StructType\WorkZonesAccessPointSlimInfo) {
                $invalidValues[] = is_object($arrayOfWorkZonesAccessPointSlimInfoWorkZonesAccessPointSlimInfoItem) ? get_class($arrayOfWorkZonesAccessPointSlimInfoWorkZonesAccessPointSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfWorkZonesAccessPointSlimInfoWorkZonesAccessPointSlimInfoItem), var_export($arrayOfWorkZonesAccessPointSlimInfoWorkZonesAccessPointSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkZonesAccessPointSlimInfo property can only contain items of type \StructType\WorkZonesAccessPointSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkZonesAccessPointSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\WorkZonesAccessPointSlimInfo[] $workZonesAccessPointSlimInfo
     * @return \ArrayType\ArrayOfWorkZonesAccessPointSlimInfo
     */
    public function setWorkZonesAccessPointSlimInfo(array $workZonesAccessPointSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($workZonesAccessPointSlimInfoArrayErrorMessage = self::validateWorkZonesAccessPointSlimInfoForArrayConstraintsFromSetWorkZonesAccessPointSlimInfo($workZonesAccessPointSlimInfo))) {
            throw new InvalidArgumentException($workZonesAccessPointSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($workZonesAccessPointSlimInfo) || (is_array($workZonesAccessPointSlimInfo) && empty($workZonesAccessPointSlimInfo))) {
            unset($this->WorkZonesAccessPointSlimInfo);
        } else {
            $this->WorkZonesAccessPointSlimInfo = $workZonesAccessPointSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkZonesAccessPointSlimInfo|null
     */
    public function current(): ?\StructType\WorkZonesAccessPointSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkZonesAccessPointSlimInfo|null
     */
    public function item($index): ?\StructType\WorkZonesAccessPointSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkZonesAccessPointSlimInfo|null
     */
    public function first(): ?\StructType\WorkZonesAccessPointSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkZonesAccessPointSlimInfo|null
     */
    public function last(): ?\StructType\WorkZonesAccessPointSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkZonesAccessPointSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\WorkZonesAccessPointSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\WorkZonesAccessPointSlimInfo $item
     * @return \ArrayType\ArrayOfWorkZonesAccessPointSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkZonesAccessPointSlimInfo) {
            throw new InvalidArgumentException(sprintf('The WorkZonesAccessPointSlimInfo property can only contain items of type \StructType\WorkZonesAccessPointSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkZonesAccessPointSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'WorkZonesAccessPointSlimInfo';
    }
}
