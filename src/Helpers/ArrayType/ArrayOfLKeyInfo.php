<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLKeyInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLKeyInfo
 * @subpackage Arrays
 */
class ArrayOfLKeyInfo extends AbstractStructArrayBase
{
    /**
     * The LKeyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LKeyInfo[]
     */
    protected array $LKeyInfo = [];
    /**
     * Constructor method for ArrayOfLKeyInfo
     * @uses ArrayOfLKeyInfo::setLKeyInfo()
     * @param \StructType\LKeyInfo[] $lKeyInfo
     */
    public function __construct(array $lKeyInfo = [])
    {
        $this
            ->setLKeyInfo($lKeyInfo);
    }
    /**
     * Get LKeyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LKeyInfo[]
     */
    public function getLKeyInfo(): ?array
    {
        return isset($this->LKeyInfo) ? $this->LKeyInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLKeyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLKeyInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLKeyInfoForArrayConstraintsFromSetLKeyInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLKeyInfoLKeyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLKeyInfoLKeyInfoItem instanceof \StructType\LKeyInfo) {
                $invalidValues[] = is_object($arrayOfLKeyInfoLKeyInfoItem) ? get_class($arrayOfLKeyInfoLKeyInfoItem) : sprintf('%s(%s)', gettype($arrayOfLKeyInfoLKeyInfoItem), var_export($arrayOfLKeyInfoLKeyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LKeyInfo property can only contain items of type \StructType\LKeyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LKeyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LKeyInfo[] $lKeyInfo
     * @return \ArrayType\ArrayOfLKeyInfo
     */
    public function setLKeyInfo(array $lKeyInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($lKeyInfoArrayErrorMessage = self::validateLKeyInfoForArrayConstraintsFromSetLKeyInfo($lKeyInfo))) {
            throw new InvalidArgumentException($lKeyInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($lKeyInfo) || (is_array($lKeyInfo) && empty($lKeyInfo))) {
            unset($this->LKeyInfo);
        } else {
            $this->LKeyInfo = $lKeyInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LKeyInfo|null
     */
    public function current(): ?\StructType\LKeyInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LKeyInfo|null
     */
    public function item($index): ?\StructType\LKeyInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LKeyInfo|null
     */
    public function first(): ?\StructType\LKeyInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LKeyInfo|null
     */
    public function last(): ?\StructType\LKeyInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LKeyInfo|null
     */
    public function offsetGet($offset): ?\StructType\LKeyInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LKeyInfo $item
     * @return \ArrayType\ArrayOfLKeyInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LKeyInfo) {
            throw new InvalidArgumentException(sprintf('The LKeyInfo property can only contain items of type \StructType\LKeyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LKeyInfo
     */
    public function getAttributeName(): string
    {
        return 'LKeyInfo';
    }
}
