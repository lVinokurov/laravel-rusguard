<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfUidKeyInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfUidKeyInfo
 * @subpackage Arrays
 */
class ArrayOfUidKeyInfo extends AbstractStructArrayBase
{
    /**
     * The UidKeyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\UidKeyInfo[]
     */
    protected array $UidKeyInfo = [];
    /**
     * Constructor method for ArrayOfUidKeyInfo
     * @uses ArrayOfUidKeyInfo::setUidKeyInfo()
     * @param \StructType\UidKeyInfo[] $uidKeyInfo
     */
    public function __construct(array $uidKeyInfo = [])
    {
        $this
            ->setUidKeyInfo($uidKeyInfo);
    }
    /**
     * Get UidKeyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\UidKeyInfo[]
     */
    public function getUidKeyInfo(): ?array
    {
        return isset($this->UidKeyInfo) ? $this->UidKeyInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setUidKeyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setUidKeyInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateUidKeyInfoForArrayConstraintsFromSetUidKeyInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfUidKeyInfoUidKeyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfUidKeyInfoUidKeyInfoItem instanceof \StructType\UidKeyInfo) {
                $invalidValues[] = is_object($arrayOfUidKeyInfoUidKeyInfoItem) ? get_class($arrayOfUidKeyInfoUidKeyInfoItem) : sprintf('%s(%s)', gettype($arrayOfUidKeyInfoUidKeyInfoItem), var_export($arrayOfUidKeyInfoUidKeyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The UidKeyInfo property can only contain items of type \StructType\UidKeyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set UidKeyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\UidKeyInfo[] $uidKeyInfo
     * @return \ArrayType\ArrayOfUidKeyInfo
     */
    public function setUidKeyInfo(array $uidKeyInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($uidKeyInfoArrayErrorMessage = self::validateUidKeyInfoForArrayConstraintsFromSetUidKeyInfo($uidKeyInfo))) {
            throw new InvalidArgumentException($uidKeyInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($uidKeyInfo) || (is_array($uidKeyInfo) && empty($uidKeyInfo))) {
            unset($this->UidKeyInfo);
        } else {
            $this->UidKeyInfo = $uidKeyInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\UidKeyInfo|null
     */
    public function current(): ?\StructType\UidKeyInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\UidKeyInfo|null
     */
    public function item($index): ?\StructType\UidKeyInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\UidKeyInfo|null
     */
    public function first(): ?\StructType\UidKeyInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\UidKeyInfo|null
     */
    public function last(): ?\StructType\UidKeyInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\UidKeyInfo|null
     */
    public function offsetGet($offset): ?\StructType\UidKeyInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\UidKeyInfo $item
     * @return \ArrayType\ArrayOfUidKeyInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\UidKeyInfo) {
            throw new InvalidArgumentException(sprintf('The UidKeyInfo property can only contain items of type \StructType\UidKeyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string UidKeyInfo
     */
    public function getAttributeName(): string
    {
        return 'UidKeyInfo';
    }
}
