<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfIvideonCameraDriverInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfIvideonCameraDriverInfo
 * @subpackage Arrays
 */
class ArrayOfIvideonCameraDriverInfo extends AbstractStructArrayBase
{
    /**
     * The IvideonCameraDriverInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\IvideonCameraDriverInfo[]
     */
    protected array $IvideonCameraDriverInfo = [];
    /**
     * Constructor method for ArrayOfIvideonCameraDriverInfo
     * @uses ArrayOfIvideonCameraDriverInfo::setIvideonCameraDriverInfo()
     * @param \StructType\IvideonCameraDriverInfo[] $ivideonCameraDriverInfo
     */
    public function __construct(array $ivideonCameraDriverInfo = [])
    {
        $this
            ->setIvideonCameraDriverInfo($ivideonCameraDriverInfo);
    }
    /**
     * Get IvideonCameraDriverInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\IvideonCameraDriverInfo[]
     */
    public function getIvideonCameraDriverInfo(): ?array
    {
        return isset($this->IvideonCameraDriverInfo) ? $this->IvideonCameraDriverInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setIvideonCameraDriverInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setIvideonCameraDriverInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateIvideonCameraDriverInfoForArrayConstraintsFromSetIvideonCameraDriverInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfIvideonCameraDriverInfoIvideonCameraDriverInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfIvideonCameraDriverInfoIvideonCameraDriverInfoItem instanceof \StructType\IvideonCameraDriverInfo) {
                $invalidValues[] = is_object($arrayOfIvideonCameraDriverInfoIvideonCameraDriverInfoItem) ? get_class($arrayOfIvideonCameraDriverInfoIvideonCameraDriverInfoItem) : sprintf('%s(%s)', gettype($arrayOfIvideonCameraDriverInfoIvideonCameraDriverInfoItem), var_export($arrayOfIvideonCameraDriverInfoIvideonCameraDriverInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The IvideonCameraDriverInfo property can only contain items of type \StructType\IvideonCameraDriverInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set IvideonCameraDriverInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\IvideonCameraDriverInfo[] $ivideonCameraDriverInfo
     * @return \ArrayType\ArrayOfIvideonCameraDriverInfo
     */
    public function setIvideonCameraDriverInfo(array $ivideonCameraDriverInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($ivideonCameraDriverInfoArrayErrorMessage = self::validateIvideonCameraDriverInfoForArrayConstraintsFromSetIvideonCameraDriverInfo($ivideonCameraDriverInfo))) {
            throw new InvalidArgumentException($ivideonCameraDriverInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($ivideonCameraDriverInfo) || (is_array($ivideonCameraDriverInfo) && empty($ivideonCameraDriverInfo))) {
            unset($this->IvideonCameraDriverInfo);
        } else {
            $this->IvideonCameraDriverInfo = $ivideonCameraDriverInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\IvideonCameraDriverInfo|null
     */
    public function current(): ?\StructType\IvideonCameraDriverInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\IvideonCameraDriverInfo|null
     */
    public function item($index): ?\StructType\IvideonCameraDriverInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\IvideonCameraDriverInfo|null
     */
    public function first(): ?\StructType\IvideonCameraDriverInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\IvideonCameraDriverInfo|null
     */
    public function last(): ?\StructType\IvideonCameraDriverInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\IvideonCameraDriverInfo|null
     */
    public function offsetGet($offset): ?\StructType\IvideonCameraDriverInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\IvideonCameraDriverInfo $item
     * @return \ArrayType\ArrayOfIvideonCameraDriverInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\IvideonCameraDriverInfo) {
            throw new InvalidArgumentException(sprintf('The IvideonCameraDriverInfo property can only contain items of type \StructType\IvideonCameraDriverInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string IvideonCameraDriverInfo
     */
    public function getAttributeName(): string
    {
        return 'IvideonCameraDriverInfo';
    }
}
