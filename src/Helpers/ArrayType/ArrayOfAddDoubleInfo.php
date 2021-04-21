<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddDoubleInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddDoubleInfo
 * @subpackage Arrays
 */
class ArrayOfAddDoubleInfo extends AbstractStructArrayBase
{
    /**
     * The AddDoubleInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddDoubleInfo[]
     */
    protected array $AddDoubleInfo = [];
    /**
     * Constructor method for ArrayOfAddDoubleInfo
     * @uses ArrayOfAddDoubleInfo::setAddDoubleInfo()
     * @param \StructType\AddDoubleInfo[] $addDoubleInfo
     */
    public function __construct(array $addDoubleInfo = [])
    {
        $this
            ->setAddDoubleInfo($addDoubleInfo);
    }
    /**
     * Get AddDoubleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddDoubleInfo[]
     */
    public function getAddDoubleInfo(): ?array
    {
        return isset($this->AddDoubleInfo) ? $this->AddDoubleInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddDoubleInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddDoubleInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddDoubleInfoForArrayConstraintsFromSetAddDoubleInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddDoubleInfoAddDoubleInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddDoubleInfoAddDoubleInfoItem instanceof \StructType\AddDoubleInfo) {
                $invalidValues[] = is_object($arrayOfAddDoubleInfoAddDoubleInfoItem) ? get_class($arrayOfAddDoubleInfoAddDoubleInfoItem) : sprintf('%s(%s)', gettype($arrayOfAddDoubleInfoAddDoubleInfoItem), var_export($arrayOfAddDoubleInfoAddDoubleInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddDoubleInfo property can only contain items of type \StructType\AddDoubleInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddDoubleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AddDoubleInfo[] $addDoubleInfo
     * @return \ArrayType\ArrayOfAddDoubleInfo
     */
    public function setAddDoubleInfo(array $addDoubleInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($addDoubleInfoArrayErrorMessage = self::validateAddDoubleInfoForArrayConstraintsFromSetAddDoubleInfo($addDoubleInfo))) {
            throw new InvalidArgumentException($addDoubleInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($addDoubleInfo) || (is_array($addDoubleInfo) && empty($addDoubleInfo))) {
            unset($this->AddDoubleInfo);
        } else {
            $this->AddDoubleInfo = $addDoubleInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AddDoubleInfo|null
     */
    public function current(): ?\StructType\AddDoubleInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AddDoubleInfo|null
     */
    public function item($index): ?\StructType\AddDoubleInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AddDoubleInfo|null
     */
    public function first(): ?\StructType\AddDoubleInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AddDoubleInfo|null
     */
    public function last(): ?\StructType\AddDoubleInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AddDoubleInfo|null
     */
    public function offsetGet($offset): ?\StructType\AddDoubleInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AddDoubleInfo $item
     * @return \ArrayType\ArrayOfAddDoubleInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddDoubleInfo) {
            throw new InvalidArgumentException(sprintf('The AddDoubleInfo property can only contain items of type \StructType\AddDoubleInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddDoubleInfo
     */
    public function getAttributeName(): string
    {
        return 'AddDoubleInfo';
    }
}
