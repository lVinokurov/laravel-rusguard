<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLEmployeePositionInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLEmployeePositionInfo
 * @subpackage Arrays
 */
class ArrayOfLEmployeePositionInfo extends AbstractStructArrayBase
{
    /**
     * The LEmployeePositionInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LEmployeePositionInfo[]
     */
    protected array $LEmployeePositionInfo = [];
    /**
     * Constructor method for ArrayOfLEmployeePositionInfo
     * @uses ArrayOfLEmployeePositionInfo::setLEmployeePositionInfo()
     * @param \StructType\LEmployeePositionInfo[] $lEmployeePositionInfo
     */
    public function __construct(array $lEmployeePositionInfo = [])
    {
        $this
            ->setLEmployeePositionInfo($lEmployeePositionInfo);
    }
    /**
     * Get LEmployeePositionInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LEmployeePositionInfo[]
     */
    public function getLEmployeePositionInfo(): ?array
    {
        return isset($this->LEmployeePositionInfo) ? $this->LEmployeePositionInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLEmployeePositionInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLEmployeePositionInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLEmployeePositionInfoForArrayConstraintsFromSetLEmployeePositionInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLEmployeePositionInfoLEmployeePositionInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLEmployeePositionInfoLEmployeePositionInfoItem instanceof \StructType\LEmployeePositionInfo) {
                $invalidValues[] = is_object($arrayOfLEmployeePositionInfoLEmployeePositionInfoItem) ? get_class($arrayOfLEmployeePositionInfoLEmployeePositionInfoItem) : sprintf('%s(%s)', gettype($arrayOfLEmployeePositionInfoLEmployeePositionInfoItem), var_export($arrayOfLEmployeePositionInfoLEmployeePositionInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LEmployeePositionInfo property can only contain items of type \StructType\LEmployeePositionInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LEmployeePositionInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LEmployeePositionInfo[] $lEmployeePositionInfo
     * @return \ArrayType\ArrayOfLEmployeePositionInfo
     */
    public function setLEmployeePositionInfo(array $lEmployeePositionInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($lEmployeePositionInfoArrayErrorMessage = self::validateLEmployeePositionInfoForArrayConstraintsFromSetLEmployeePositionInfo($lEmployeePositionInfo))) {
            throw new InvalidArgumentException($lEmployeePositionInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($lEmployeePositionInfo) || (is_array($lEmployeePositionInfo) && empty($lEmployeePositionInfo))) {
            unset($this->LEmployeePositionInfo);
        } else {
            $this->LEmployeePositionInfo = $lEmployeePositionInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function current(): ?\StructType\LEmployeePositionInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function item($index): ?\StructType\LEmployeePositionInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function first(): ?\StructType\LEmployeePositionInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function last(): ?\StructType\LEmployeePositionInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LEmployeePositionInfo|null
     */
    public function offsetGet($offset): ?\StructType\LEmployeePositionInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LEmployeePositionInfo $item
     * @return \ArrayType\ArrayOfLEmployeePositionInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LEmployeePositionInfo) {
            throw new InvalidArgumentException(sprintf('The LEmployeePositionInfo property can only contain items of type \StructType\LEmployeePositionInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LEmployeePositionInfo
     */
    public function getAttributeName(): string
    {
        return 'LEmployeePositionInfo';
    }
}
