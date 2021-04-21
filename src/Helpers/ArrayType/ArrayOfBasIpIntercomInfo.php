<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBasIpIntercomInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBasIpIntercomInfo
 * @subpackage Arrays
 */
class ArrayOfBasIpIntercomInfo extends AbstractStructArrayBase
{
    /**
     * The BasIpIntercomInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BasIpIntercomInfo[]
     */
    protected array $BasIpIntercomInfo = [];
    /**
     * Constructor method for ArrayOfBasIpIntercomInfo
     * @uses ArrayOfBasIpIntercomInfo::setBasIpIntercomInfo()
     * @param \StructType\BasIpIntercomInfo[] $basIpIntercomInfo
     */
    public function __construct(array $basIpIntercomInfo = [])
    {
        $this
            ->setBasIpIntercomInfo($basIpIntercomInfo);
    }
    /**
     * Get BasIpIntercomInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BasIpIntercomInfo[]
     */
    public function getBasIpIntercomInfo(): ?array
    {
        return isset($this->BasIpIntercomInfo) ? $this->BasIpIntercomInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBasIpIntercomInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBasIpIntercomInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBasIpIntercomInfoForArrayConstraintsFromSetBasIpIntercomInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBasIpIntercomInfoBasIpIntercomInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfBasIpIntercomInfoBasIpIntercomInfoItem instanceof \StructType\BasIpIntercomInfo) {
                $invalidValues[] = is_object($arrayOfBasIpIntercomInfoBasIpIntercomInfoItem) ? get_class($arrayOfBasIpIntercomInfoBasIpIntercomInfoItem) : sprintf('%s(%s)', gettype($arrayOfBasIpIntercomInfoBasIpIntercomInfoItem), var_export($arrayOfBasIpIntercomInfoBasIpIntercomInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BasIpIntercomInfo property can only contain items of type \StructType\BasIpIntercomInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BasIpIntercomInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\BasIpIntercomInfo[] $basIpIntercomInfo
     * @return \ArrayType\ArrayOfBasIpIntercomInfo
     */
    public function setBasIpIntercomInfo(array $basIpIntercomInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($basIpIntercomInfoArrayErrorMessage = self::validateBasIpIntercomInfoForArrayConstraintsFromSetBasIpIntercomInfo($basIpIntercomInfo))) {
            throw new InvalidArgumentException($basIpIntercomInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($basIpIntercomInfo) || (is_array($basIpIntercomInfo) && empty($basIpIntercomInfo))) {
            unset($this->BasIpIntercomInfo);
        } else {
            $this->BasIpIntercomInfo = $basIpIntercomInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BasIpIntercomInfo|null
     */
    public function current(): ?\StructType\BasIpIntercomInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BasIpIntercomInfo|null
     */
    public function item($index): ?\StructType\BasIpIntercomInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BasIpIntercomInfo|null
     */
    public function first(): ?\StructType\BasIpIntercomInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BasIpIntercomInfo|null
     */
    public function last(): ?\StructType\BasIpIntercomInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BasIpIntercomInfo|null
     */
    public function offsetGet($offset): ?\StructType\BasIpIntercomInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\BasIpIntercomInfo $item
     * @return \ArrayType\ArrayOfBasIpIntercomInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BasIpIntercomInfo) {
            throw new InvalidArgumentException(sprintf('The BasIpIntercomInfo property can only contain items of type \StructType\BasIpIntercomInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BasIpIntercomInfo
     */
    public function getAttributeName(): string
    {
        return 'BasIpIntercomInfo';
    }
}
