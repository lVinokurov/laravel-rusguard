<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDeviceDriverInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDeviceDriverInfo
 * @subpackage Arrays
 */
class ArrayOfDeviceDriverInfo extends AbstractStructArrayBase
{
    /**
     * The DeviceDriverInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DeviceDriverInfo[]
     */
    protected array $DeviceDriverInfo = [];
    /**
     * Constructor method for ArrayOfDeviceDriverInfo
     * @uses ArrayOfDeviceDriverInfo::setDeviceDriverInfo()
     * @param \StructType\DeviceDriverInfo[] $deviceDriverInfo
     */
    public function __construct(array $deviceDriverInfo = [])
    {
        $this
            ->setDeviceDriverInfo($deviceDriverInfo);
    }
    /**
     * Get DeviceDriverInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DeviceDriverInfo[]
     */
    public function getDeviceDriverInfo(): ?array
    {
        return isset($this->DeviceDriverInfo) ? $this->DeviceDriverInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDeviceDriverInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDeviceDriverInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDeviceDriverInfoForArrayConstraintsFromSetDeviceDriverInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDeviceDriverInfoDeviceDriverInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDeviceDriverInfoDeviceDriverInfoItem instanceof \StructType\DeviceDriverInfo) {
                $invalidValues[] = is_object($arrayOfDeviceDriverInfoDeviceDriverInfoItem) ? get_class($arrayOfDeviceDriverInfoDeviceDriverInfoItem) : sprintf('%s(%s)', gettype($arrayOfDeviceDriverInfoDeviceDriverInfoItem), var_export($arrayOfDeviceDriverInfoDeviceDriverInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DeviceDriverInfo property can only contain items of type \StructType\DeviceDriverInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DeviceDriverInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DeviceDriverInfo[] $deviceDriverInfo
     * @return \ArrayType\ArrayOfDeviceDriverInfo
     */
    public function setDeviceDriverInfo(array $deviceDriverInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($deviceDriverInfoArrayErrorMessage = self::validateDeviceDriverInfoForArrayConstraintsFromSetDeviceDriverInfo($deviceDriverInfo))) {
            throw new InvalidArgumentException($deviceDriverInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($deviceDriverInfo) || (is_array($deviceDriverInfo) && empty($deviceDriverInfo))) {
            unset($this->DeviceDriverInfo);
        } else {
            $this->DeviceDriverInfo = $deviceDriverInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DeviceDriverInfo|null
     */
    public function current(): ?\StructType\DeviceDriverInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DeviceDriverInfo|null
     */
    public function item($index): ?\StructType\DeviceDriverInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DeviceDriverInfo|null
     */
    public function first(): ?\StructType\DeviceDriverInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DeviceDriverInfo|null
     */
    public function last(): ?\StructType\DeviceDriverInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DeviceDriverInfo|null
     */
    public function offsetGet($offset): ?\StructType\DeviceDriverInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DeviceDriverInfo $item
     * @return \ArrayType\ArrayOfDeviceDriverInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DeviceDriverInfo) {
            throw new InvalidArgumentException(sprintf('The DeviceDriverInfo property can only contain items of type \StructType\DeviceDriverInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DeviceDriverInfo
     */
    public function getAttributeName(): string
    {
        return 'DeviceDriverInfo';
    }
}
