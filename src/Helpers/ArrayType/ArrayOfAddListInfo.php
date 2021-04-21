<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddListInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddListInfo
 * @subpackage Arrays
 */
class ArrayOfAddListInfo extends AbstractStructArrayBase
{
    /**
     * The AddListInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddListInfo[]
     */
    protected array $AddListInfo = [];
    /**
     * Constructor method for ArrayOfAddListInfo
     * @uses ArrayOfAddListInfo::setAddListInfo()
     * @param \StructType\AddListInfo[] $addListInfo
     */
    public function __construct(array $addListInfo = [])
    {
        $this
            ->setAddListInfo($addListInfo);
    }
    /**
     * Get AddListInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddListInfo[]
     */
    public function getAddListInfo(): ?array
    {
        return isset($this->AddListInfo) ? $this->AddListInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddListInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddListInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddListInfoForArrayConstraintsFromSetAddListInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddListInfoAddListInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddListInfoAddListInfoItem instanceof \StructType\AddListInfo) {
                $invalidValues[] = is_object($arrayOfAddListInfoAddListInfoItem) ? get_class($arrayOfAddListInfoAddListInfoItem) : sprintf('%s(%s)', gettype($arrayOfAddListInfoAddListInfoItem), var_export($arrayOfAddListInfoAddListInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddListInfo property can only contain items of type \StructType\AddListInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddListInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AddListInfo[] $addListInfo
     * @return \ArrayType\ArrayOfAddListInfo
     */
    public function setAddListInfo(array $addListInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($addListInfoArrayErrorMessage = self::validateAddListInfoForArrayConstraintsFromSetAddListInfo($addListInfo))) {
            throw new InvalidArgumentException($addListInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($addListInfo) || (is_array($addListInfo) && empty($addListInfo))) {
            unset($this->AddListInfo);
        } else {
            $this->AddListInfo = $addListInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AddListInfo|null
     */
    public function current(): ?\StructType\AddListInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AddListInfo|null
     */
    public function item($index): ?\StructType\AddListInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AddListInfo|null
     */
    public function first(): ?\StructType\AddListInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AddListInfo|null
     */
    public function last(): ?\StructType\AddListInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AddListInfo|null
     */
    public function offsetGet($offset): ?\StructType\AddListInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AddListInfo $item
     * @return \ArrayType\ArrayOfAddListInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddListInfo) {
            throw new InvalidArgumentException(sprintf('The AddListInfo property can only contain items of type \StructType\AddListInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddListInfo
     */
    public function getAttributeName(): string
    {
        return 'AddListInfo';
    }
}
