<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfWorkplaceInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfWorkplaceInfo
 * @subpackage Arrays
 */
class ArrayOfWorkplaceInfo extends AbstractStructArrayBase
{
    /**
     * The WorkplaceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\WorkplaceInfo[]
     */
    protected array $WorkplaceInfo = [];
    /**
     * Constructor method for ArrayOfWorkplaceInfo
     * @uses ArrayOfWorkplaceInfo::setWorkplaceInfo()
     * @param \StructType\WorkplaceInfo[] $workplaceInfo
     */
    public function __construct(array $workplaceInfo = [])
    {
        $this
            ->setWorkplaceInfo($workplaceInfo);
    }
    /**
     * Get WorkplaceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\WorkplaceInfo[]
     */
    public function getWorkplaceInfo(): ?array
    {
        return isset($this->WorkplaceInfo) ? $this->WorkplaceInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setWorkplaceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setWorkplaceInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateWorkplaceInfoForArrayConstraintsFromSetWorkplaceInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfWorkplaceInfoWorkplaceInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfWorkplaceInfoWorkplaceInfoItem instanceof \StructType\WorkplaceInfo) {
                $invalidValues[] = is_object($arrayOfWorkplaceInfoWorkplaceInfoItem) ? get_class($arrayOfWorkplaceInfoWorkplaceInfoItem) : sprintf('%s(%s)', gettype($arrayOfWorkplaceInfoWorkplaceInfoItem), var_export($arrayOfWorkplaceInfoWorkplaceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The WorkplaceInfo property can only contain items of type \StructType\WorkplaceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set WorkplaceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\WorkplaceInfo[] $workplaceInfo
     * @return \ArrayType\ArrayOfWorkplaceInfo
     */
    public function setWorkplaceInfo(array $workplaceInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($workplaceInfoArrayErrorMessage = self::validateWorkplaceInfoForArrayConstraintsFromSetWorkplaceInfo($workplaceInfo))) {
            throw new InvalidArgumentException($workplaceInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($workplaceInfo) || (is_array($workplaceInfo) && empty($workplaceInfo))) {
            unset($this->WorkplaceInfo);
        } else {
            $this->WorkplaceInfo = $workplaceInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\WorkplaceInfo|null
     */
    public function current(): ?\StructType\WorkplaceInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\WorkplaceInfo|null
     */
    public function item($index): ?\StructType\WorkplaceInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\WorkplaceInfo|null
     */
    public function first(): ?\StructType\WorkplaceInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\WorkplaceInfo|null
     */
    public function last(): ?\StructType\WorkplaceInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\WorkplaceInfo|null
     */
    public function offsetGet($offset): ?\StructType\WorkplaceInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\WorkplaceInfo $item
     * @return \ArrayType\ArrayOfWorkplaceInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\WorkplaceInfo) {
            throw new InvalidArgumentException(sprintf('The WorkplaceInfo property can only contain items of type \StructType\WorkplaceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string WorkplaceInfo
     */
    public function getAttributeName(): string
    {
        return 'WorkplaceInfo';
    }
}
