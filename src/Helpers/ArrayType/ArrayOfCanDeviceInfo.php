<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCanDeviceInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCanDeviceInfo
 * @subpackage Arrays
 */
class ArrayOfCanDeviceInfo extends AbstractStructArrayBase
{
    /**
     * The CanDeviceInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanDeviceInfo[]
     */
    protected array $CanDeviceInfo = [];
    /**
     * Constructor method for ArrayOfCanDeviceInfo
     * @uses ArrayOfCanDeviceInfo::setCanDeviceInfo()
     * @param \StructType\CanDeviceInfo[] $canDeviceInfo
     */
    public function __construct(array $canDeviceInfo = [])
    {
        $this
            ->setCanDeviceInfo($canDeviceInfo);
    }
    /**
     * Get CanDeviceInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CanDeviceInfo[]
     */
    public function getCanDeviceInfo(): ?array
    {
        return isset($this->CanDeviceInfo) ? $this->CanDeviceInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCanDeviceInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCanDeviceInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCanDeviceInfoForArrayConstraintsFromSetCanDeviceInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCanDeviceInfoCanDeviceInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfCanDeviceInfoCanDeviceInfoItem instanceof \StructType\CanDeviceInfo) {
                $invalidValues[] = is_object($arrayOfCanDeviceInfoCanDeviceInfoItem) ? get_class($arrayOfCanDeviceInfoCanDeviceInfoItem) : sprintf('%s(%s)', gettype($arrayOfCanDeviceInfoCanDeviceInfoItem), var_export($arrayOfCanDeviceInfoCanDeviceInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CanDeviceInfo property can only contain items of type \StructType\CanDeviceInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CanDeviceInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CanDeviceInfo[] $canDeviceInfo
     * @return \ArrayType\ArrayOfCanDeviceInfo
     */
    public function setCanDeviceInfo(array $canDeviceInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($canDeviceInfoArrayErrorMessage = self::validateCanDeviceInfoForArrayConstraintsFromSetCanDeviceInfo($canDeviceInfo))) {
            throw new InvalidArgumentException($canDeviceInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($canDeviceInfo) || (is_array($canDeviceInfo) && empty($canDeviceInfo))) {
            unset($this->CanDeviceInfo);
        } else {
            $this->CanDeviceInfo = $canDeviceInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CanDeviceInfo|null
     */
    public function current(): ?\StructType\CanDeviceInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CanDeviceInfo|null
     */
    public function item($index): ?\StructType\CanDeviceInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CanDeviceInfo|null
     */
    public function first(): ?\StructType\CanDeviceInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CanDeviceInfo|null
     */
    public function last(): ?\StructType\CanDeviceInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CanDeviceInfo|null
     */
    public function offsetGet($offset): ?\StructType\CanDeviceInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\CanDeviceInfo $item
     * @return \ArrayType\ArrayOfCanDeviceInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CanDeviceInfo) {
            throw new InvalidArgumentException(sprintf('The CanDeviceInfo property can only contain items of type \StructType\CanDeviceInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CanDeviceInfo
     */
    public function getAttributeName(): string
    {
        return 'CanDeviceInfo';
    }
}
