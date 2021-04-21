<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddStringInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddStringInfo
 * @subpackage Arrays
 */
class ArrayOfAddStringInfo extends AbstractStructArrayBase
{
    /**
     * The AddStringInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddStringInfo[]
     */
    protected array $AddStringInfo = [];
    /**
     * Constructor method for ArrayOfAddStringInfo
     * @uses ArrayOfAddStringInfo::setAddStringInfo()
     * @param \StructType\AddStringInfo[] $addStringInfo
     */
    public function __construct(array $addStringInfo = [])
    {
        $this
            ->setAddStringInfo($addStringInfo);
    }
    /**
     * Get AddStringInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddStringInfo[]
     */
    public function getAddStringInfo(): ?array
    {
        return isset($this->AddStringInfo) ? $this->AddStringInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddStringInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddStringInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddStringInfoForArrayConstraintsFromSetAddStringInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddStringInfoAddStringInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddStringInfoAddStringInfoItem instanceof \StructType\AddStringInfo) {
                $invalidValues[] = is_object($arrayOfAddStringInfoAddStringInfoItem) ? get_class($arrayOfAddStringInfoAddStringInfoItem) : sprintf('%s(%s)', gettype($arrayOfAddStringInfoAddStringInfoItem), var_export($arrayOfAddStringInfoAddStringInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddStringInfo property can only contain items of type \StructType\AddStringInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddStringInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AddStringInfo[] $addStringInfo
     * @return \ArrayType\ArrayOfAddStringInfo
     */
    public function setAddStringInfo(array $addStringInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($addStringInfoArrayErrorMessage = self::validateAddStringInfoForArrayConstraintsFromSetAddStringInfo($addStringInfo))) {
            throw new InvalidArgumentException($addStringInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($addStringInfo) || (is_array($addStringInfo) && empty($addStringInfo))) {
            unset($this->AddStringInfo);
        } else {
            $this->AddStringInfo = $addStringInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AddStringInfo|null
     */
    public function current(): ?\StructType\AddStringInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AddStringInfo|null
     */
    public function item($index): ?\StructType\AddStringInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AddStringInfo|null
     */
    public function first(): ?\StructType\AddStringInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AddStringInfo|null
     */
    public function last(): ?\StructType\AddStringInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AddStringInfo|null
     */
    public function offsetGet($offset): ?\StructType\AddStringInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AddStringInfo $item
     * @return \ArrayType\ArrayOfAddStringInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddStringInfo) {
            throw new InvalidArgumentException(sprintf('The AddStringInfo property can only contain items of type \StructType\AddStringInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddStringInfo
     */
    public function getAttributeName(): string
    {
        return 'AddStringInfo';
    }
}
