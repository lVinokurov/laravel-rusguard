<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddIntInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddIntInfo
 * @subpackage Arrays
 */
class ArrayOfAddIntInfo extends AbstractStructArrayBase
{
    /**
     * The AddIntInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddIntInfo[]
     */
    protected array $AddIntInfo = [];
    /**
     * Constructor method for ArrayOfAddIntInfo
     * @uses ArrayOfAddIntInfo::setAddIntInfo()
     * @param \StructType\AddIntInfo[] $addIntInfo
     */
    public function __construct(array $addIntInfo = [])
    {
        $this
            ->setAddIntInfo($addIntInfo);
    }
    /**
     * Get AddIntInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddIntInfo[]
     */
    public function getAddIntInfo(): ?array
    {
        return isset($this->AddIntInfo) ? $this->AddIntInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddIntInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddIntInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddIntInfoForArrayConstraintsFromSetAddIntInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddIntInfoAddIntInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddIntInfoAddIntInfoItem instanceof \StructType\AddIntInfo) {
                $invalidValues[] = is_object($arrayOfAddIntInfoAddIntInfoItem) ? get_class($arrayOfAddIntInfoAddIntInfoItem) : sprintf('%s(%s)', gettype($arrayOfAddIntInfoAddIntInfoItem), var_export($arrayOfAddIntInfoAddIntInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddIntInfo property can only contain items of type \StructType\AddIntInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddIntInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AddIntInfo[] $addIntInfo
     * @return \ArrayType\ArrayOfAddIntInfo
     */
    public function setAddIntInfo(array $addIntInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($addIntInfoArrayErrorMessage = self::validateAddIntInfoForArrayConstraintsFromSetAddIntInfo($addIntInfo))) {
            throw new InvalidArgumentException($addIntInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($addIntInfo) || (is_array($addIntInfo) && empty($addIntInfo))) {
            unset($this->AddIntInfo);
        } else {
            $this->AddIntInfo = $addIntInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AddIntInfo|null
     */
    public function current(): ?\StructType\AddIntInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AddIntInfo|null
     */
    public function item($index): ?\StructType\AddIntInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AddIntInfo|null
     */
    public function first(): ?\StructType\AddIntInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AddIntInfo|null
     */
    public function last(): ?\StructType\AddIntInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AddIntInfo|null
     */
    public function offsetGet($offset): ?\StructType\AddIntInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AddIntInfo $item
     * @return \ArrayType\ArrayOfAddIntInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddIntInfo) {
            throw new InvalidArgumentException(sprintf('The AddIntInfo property can only contain items of type \StructType\AddIntInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddIntInfo
     */
    public function getAttributeName(): string
    {
        return 'AddIntInfo';
    }
}
