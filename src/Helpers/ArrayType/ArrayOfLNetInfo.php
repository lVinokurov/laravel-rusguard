<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfLNetInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfLNetInfo
 * @subpackage Arrays
 */
class ArrayOfLNetInfo extends AbstractStructArrayBase
{
    /**
     * The LNetInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\LNetInfo[]
     */
    protected array $LNetInfo = [];
    /**
     * Constructor method for ArrayOfLNetInfo
     * @uses ArrayOfLNetInfo::setLNetInfo()
     * @param \StructType\LNetInfo[] $lNetInfo
     */
    public function __construct(array $lNetInfo = [])
    {
        $this
            ->setLNetInfo($lNetInfo);
    }
    /**
     * Get LNetInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\LNetInfo[]
     */
    public function getLNetInfo(): ?array
    {
        return isset($this->LNetInfo) ? $this->LNetInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setLNetInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setLNetInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateLNetInfoForArrayConstraintsFromSetLNetInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfLNetInfoLNetInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfLNetInfoLNetInfoItem instanceof \StructType\LNetInfo) {
                $invalidValues[] = is_object($arrayOfLNetInfoLNetInfoItem) ? get_class($arrayOfLNetInfoLNetInfoItem) : sprintf('%s(%s)', gettype($arrayOfLNetInfoLNetInfoItem), var_export($arrayOfLNetInfoLNetInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The LNetInfo property can only contain items of type \StructType\LNetInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set LNetInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\LNetInfo[] $lNetInfo
     * @return \ArrayType\ArrayOfLNetInfo
     */
    public function setLNetInfo(array $lNetInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($lNetInfoArrayErrorMessage = self::validateLNetInfoForArrayConstraintsFromSetLNetInfo($lNetInfo))) {
            throw new InvalidArgumentException($lNetInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($lNetInfo) || (is_array($lNetInfo) && empty($lNetInfo))) {
            unset($this->LNetInfo);
        } else {
            $this->LNetInfo = $lNetInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\LNetInfo|null
     */
    public function current(): ?\StructType\LNetInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\LNetInfo|null
     */
    public function item($index): ?\StructType\LNetInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\LNetInfo|null
     */
    public function first(): ?\StructType\LNetInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\LNetInfo|null
     */
    public function last(): ?\StructType\LNetInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\LNetInfo|null
     */
    public function offsetGet($offset): ?\StructType\LNetInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\LNetInfo $item
     * @return \ArrayType\ArrayOfLNetInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\LNetInfo) {
            throw new InvalidArgumentException(sprintf('The LNetInfo property can only contain items of type \StructType\LNetInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string LNetInfo
     */
    public function getAttributeName(): string
    {
        return 'LNetInfo';
    }
}
