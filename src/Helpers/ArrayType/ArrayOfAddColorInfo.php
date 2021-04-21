<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddColorInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddColorInfo
 * @subpackage Arrays
 */
class ArrayOfAddColorInfo extends AbstractStructArrayBase
{
    /**
     * The AddColorInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddColorInfo[]
     */
    protected array $AddColorInfo = [];
    /**
     * Constructor method for ArrayOfAddColorInfo
     * @uses ArrayOfAddColorInfo::setAddColorInfo()
     * @param \StructType\AddColorInfo[] $addColorInfo
     */
    public function __construct(array $addColorInfo = [])
    {
        $this
            ->setAddColorInfo($addColorInfo);
    }
    /**
     * Get AddColorInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddColorInfo[]
     */
    public function getAddColorInfo(): ?array
    {
        return isset($this->AddColorInfo) ? $this->AddColorInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddColorInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddColorInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddColorInfoForArrayConstraintsFromSetAddColorInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddColorInfoAddColorInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddColorInfoAddColorInfoItem instanceof \StructType\AddColorInfo) {
                $invalidValues[] = is_object($arrayOfAddColorInfoAddColorInfoItem) ? get_class($arrayOfAddColorInfoAddColorInfoItem) : sprintf('%s(%s)', gettype($arrayOfAddColorInfoAddColorInfoItem), var_export($arrayOfAddColorInfoAddColorInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddColorInfo property can only contain items of type \StructType\AddColorInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddColorInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AddColorInfo[] $addColorInfo
     * @return \ArrayType\ArrayOfAddColorInfo
     */
    public function setAddColorInfo(array $addColorInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($addColorInfoArrayErrorMessage = self::validateAddColorInfoForArrayConstraintsFromSetAddColorInfo($addColorInfo))) {
            throw new InvalidArgumentException($addColorInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($addColorInfo) || (is_array($addColorInfo) && empty($addColorInfo))) {
            unset($this->AddColorInfo);
        } else {
            $this->AddColorInfo = $addColorInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AddColorInfo|null
     */
    public function current(): ?\StructType\AddColorInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AddColorInfo|null
     */
    public function item($index): ?\StructType\AddColorInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AddColorInfo|null
     */
    public function first(): ?\StructType\AddColorInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AddColorInfo|null
     */
    public function last(): ?\StructType\AddColorInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AddColorInfo|null
     */
    public function offsetGet($offset): ?\StructType\AddColorInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AddColorInfo $item
     * @return \ArrayType\ArrayOfAddColorInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddColorInfo) {
            throw new InvalidArgumentException(sprintf('The AddColorInfo property can only contain items of type \StructType\AddColorInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddColorInfo
     */
    public function getAttributeName(): string
    {
        return 'AddColorInfo';
    }
}
