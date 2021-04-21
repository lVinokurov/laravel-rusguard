<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLCustomizableDayInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLCustomizableDayInfo
 * @subpackage Arrays
 */
class ArrayOfLCustomizableDayInfo extends AbstractStructArrayBase
{
    /**
     * The LCustomizableDayInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LCustomizableDayInfo[]
     */
    protected array $LCustomizableDayInfo = [];
    /**
     * Constructor method for ArrayOfLCustomizableDayInfo
     * @uses ArrayOfLCustomizableDayInfo::setLCustomizableDayInfo()
     * @param \StructType\LCustomizableDayInfo[] $lCustomizableDayInfo
     */
    public function __construct(array $lCustomizableDayInfo = [])
    {
        $this
            ->setLCustomizableDayInfo($lCustomizableDayInfo);
    }
    /**
     * Get LCustomizableDayInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LCustomizableDayInfo[]
     */
    public function getLCustomizableDayInfo(): ?array
    {
        return isset($this->LCustomizableDayInfo) ? $this->LCustomizableDayInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLCustomizableDayInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLCustomizableDayInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLCustomizableDayInfoForArrayConstraintsFromSetLCustomizableDayInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLCustomizableDayInfoLCustomizableDayInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLCustomizableDayInfoLCustomizableDayInfoItem instanceof \StructType\LCustomizableDayInfo) {
                $invalidValues[] = is_object($arrayOfLCustomizableDayInfoLCustomizableDayInfoItem) ? get_class($arrayOfLCustomizableDayInfoLCustomizableDayInfoItem) : sprintf('%s(%s)', gettype($arrayOfLCustomizableDayInfoLCustomizableDayInfoItem), var_export($arrayOfLCustomizableDayInfoLCustomizableDayInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LCustomizableDayInfo property can only contain items of type \StructType\LCustomizableDayInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LCustomizableDayInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LCustomizableDayInfo[] $lCustomizableDayInfo
     * @return \ArrayType\ArrayOfLCustomizableDayInfo
     */
    public function setLCustomizableDayInfo(array $lCustomizableDayInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($lCustomizableDayInfoArrayErrorMessage = self::validateLCustomizableDayInfoForArrayConstraintsFromSetLCustomizableDayInfo($lCustomizableDayInfo))) {
            throw new InvalidArgumentException($lCustomizableDayInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($lCustomizableDayInfo) || (is_array($lCustomizableDayInfo) && empty($lCustomizableDayInfo))) {
            unset($this->LCustomizableDayInfo);
        } else {
            $this->LCustomizableDayInfo = $lCustomizableDayInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LCustomizableDayInfo|null
     */
    public function current(): ?\StructType\LCustomizableDayInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LCustomizableDayInfo|null
     */
    public function item($index): ?\StructType\LCustomizableDayInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LCustomizableDayInfo|null
     */
    public function first(): ?\StructType\LCustomizableDayInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LCustomizableDayInfo|null
     */
    public function last(): ?\StructType\LCustomizableDayInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LCustomizableDayInfo|null
     */
    public function offsetGet($offset): ?\StructType\LCustomizableDayInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LCustomizableDayInfo $item
     * @return \ArrayType\ArrayOfLCustomizableDayInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LCustomizableDayInfo) {
            throw new InvalidArgumentException(sprintf('The LCustomizableDayInfo property can only contain items of type \StructType\LCustomizableDayInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LCustomizableDayInfo
     */
    public function getAttributeName(): string
    {
        return 'LCustomizableDayInfo';
    }
}
