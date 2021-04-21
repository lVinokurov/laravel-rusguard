<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfCanConverterAddress ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfCanConverterAddress
 * @subpackage Arrays
 */
class ArrayOfCanConverterAddress extends AbstractStructArrayBase
{
    /**
     * The CanConverterAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\CanConverterAddress[]
     */
    protected array $CanConverterAddress = [];
    /**
     * Constructor method for ArrayOfCanConverterAddress
     * @uses ArrayOfCanConverterAddress::setCanConverterAddress()
     * @param \StructType\CanConverterAddress[] $canConverterAddress
     */
    public function __construct(array $canConverterAddress = [])
    {
        $this
            ->setCanConverterAddress($canConverterAddress);
    }
    /**
     * Get CanConverterAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\CanConverterAddress[]
     */
    public function getCanConverterAddress(): ?array
    {
        return isset($this->CanConverterAddress) ? $this->CanConverterAddress : null;
    }
    /**
     * This method is responsible for validating the values passed to the setCanConverterAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCanConverterAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCanConverterAddressForArrayConstraintsFromSetCanConverterAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfCanConverterAddressCanConverterAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfCanConverterAddressCanConverterAddressItem instanceof \StructType\CanConverterAddress) {
                $invalidValues[] = is_object($arrayOfCanConverterAddressCanConverterAddressItem) ? get_class($arrayOfCanConverterAddressCanConverterAddressItem) : sprintf('%s(%s)', gettype($arrayOfCanConverterAddressCanConverterAddressItem), var_export($arrayOfCanConverterAddressCanConverterAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CanConverterAddress property can only contain items of type \StructType\CanConverterAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CanConverterAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\CanConverterAddress[] $canConverterAddress
     * @return \ArrayType\ArrayOfCanConverterAddress
     */
    public function setCanConverterAddress(array $canConverterAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($canConverterAddressArrayErrorMessage = self::validateCanConverterAddressForArrayConstraintsFromSetCanConverterAddress($canConverterAddress))) {
            throw new InvalidArgumentException($canConverterAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($canConverterAddress) || (is_array($canConverterAddress) && empty($canConverterAddress))) {
            unset($this->CanConverterAddress);
        } else {
            $this->CanConverterAddress = $canConverterAddress;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\CanConverterAddress|null
     */
    public function current(): ?\StructType\CanConverterAddress
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\CanConverterAddress|null
     */
    public function item($index): ?\StructType\CanConverterAddress
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\CanConverterAddress|null
     */
    public function first(): ?\StructType\CanConverterAddress
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\CanConverterAddress|null
     */
    public function last(): ?\StructType\CanConverterAddress
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\CanConverterAddress|null
     */
    public function offsetGet($offset): ?\StructType\CanConverterAddress
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\CanConverterAddress $item
     * @return \ArrayType\ArrayOfCanConverterAddress
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\CanConverterAddress) {
            throw new InvalidArgumentException(sprintf('The CanConverterAddress property can only contain items of type \StructType\CanConverterAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string CanConverterAddress
     */
    public function getAttributeName(): string
    {
        return 'CanConverterAddress';
    }
}
