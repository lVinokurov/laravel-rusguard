<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfSetDevicesAddressBySidResult.FailedAddress
 * ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfSetDevicesAddressBySidResult.FailedAddress
 * @subpackage Arrays
 */
class ArrayOfSetDevicesAddressBySidResult_FailedAddress extends AbstractStructArrayBase
{
    /**
     * The SetDevicesAddressBySidResult_FailedAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\SetDevicesAddressBySidResult_FailedAddress[]
     */
    protected array $SetDevicesAddressBySidResult_FailedAddress = [];
    /**
     * Constructor method for ArrayOfSetDevicesAddressBySidResult.FailedAddress
     * @uses ArrayOfSetDevicesAddressBySidResult_FailedAddress::setSetDevicesAddressBySidResult_FailedAddress()
     * @param \StructType\SetDevicesAddressBySidResult_FailedAddress[] $setDevicesAddressBySidResult_FailedAddress
     */
    public function __construct(array $setDevicesAddressBySidResult_FailedAddress = [])
    {
        $this
            ->setSetDevicesAddressBySidResult_FailedAddress($setDevicesAddressBySidResult_FailedAddress);
    }
    /**
     * Get SetDevicesAddressBySidResult_FailedAddress value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\SetDevicesAddressBySidResult_FailedAddress[]
     */
    public function getSetDevicesAddressBySidResult_FailedAddress(): ?array
    {
        return isset($this->{'SetDevicesAddressBySidResult.FailedAddress'}) ? $this->{'SetDevicesAddressBySidResult.FailedAddress'} : null;
    }
    /**
     * This method is responsible for validating the values passed to the setSetDevicesAddressBySidResult_FailedAddress method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSetDevicesAddressBySidResult_FailedAddress method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSetDevicesAddressBySidResult_FailedAddressForArrayConstraintsFromSetSetDevicesAddressBySidResult_FailedAddress(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfSetDevicesAddressBySidResult_FailedAddressSetDevicesAddressBySidResult_FailedAddressItem) {
            // validation for constraint: itemType
            if (!$arrayOfSetDevicesAddressBySidResult_FailedAddressSetDevicesAddressBySidResult_FailedAddressItem instanceof \StructType\SetDevicesAddressBySidResult_FailedAddress) {
                $invalidValues[] = is_object($arrayOfSetDevicesAddressBySidResult_FailedAddressSetDevicesAddressBySidResult_FailedAddressItem) ? get_class($arrayOfSetDevicesAddressBySidResult_FailedAddressSetDevicesAddressBySidResult_FailedAddressItem) : sprintf('%s(%s)', gettype($arrayOfSetDevicesAddressBySidResult_FailedAddressSetDevicesAddressBySidResult_FailedAddressItem), var_export($arrayOfSetDevicesAddressBySidResult_FailedAddressSetDevicesAddressBySidResult_FailedAddressItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The SetDevicesAddressBySidResult_FailedAddress property can only contain items of type \StructType\SetDevicesAddressBySidResult_FailedAddress, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SetDevicesAddressBySidResult_FailedAddress value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\SetDevicesAddressBySidResult_FailedAddress[] $setDevicesAddressBySidResult_FailedAddress
     * @return \ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress
     */
    public function setSetDevicesAddressBySidResult_FailedAddress(array $setDevicesAddressBySidResult_FailedAddress = []): self
    {
        // validation for constraint: array
        if ('' !== ($setDevicesAddressBySidResult_FailedAddressArrayErrorMessage = self::validateSetDevicesAddressBySidResult_FailedAddressForArrayConstraintsFromSetSetDevicesAddressBySidResult_FailedAddress($setDevicesAddressBySidResult_FailedAddress))) {
            throw new InvalidArgumentException($setDevicesAddressBySidResult_FailedAddressArrayErrorMessage, __LINE__);
        }
        if (is_null($setDevicesAddressBySidResult_FailedAddress) || (is_array($setDevicesAddressBySidResult_FailedAddress) && empty($setDevicesAddressBySidResult_FailedAddress))) {
            unset($this->SetDevicesAddressBySidResult_FailedAddress, $this->{'SetDevicesAddressBySidResult.FailedAddress'});
        } else {
            $this->SetDevicesAddressBySidResult_FailedAddress = $this->{'SetDevicesAddressBySidResult.FailedAddress'} = $setDevicesAddressBySidResult_FailedAddress;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\SetDevicesAddressBySidResult_FailedAddress|null
     */
    public function current(): ?\StructType\SetDevicesAddressBySidResult_FailedAddress
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\SetDevicesAddressBySidResult_FailedAddress|null
     */
    public function item($index): ?\StructType\SetDevicesAddressBySidResult_FailedAddress
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\SetDevicesAddressBySidResult_FailedAddress|null
     */
    public function first(): ?\StructType\SetDevicesAddressBySidResult_FailedAddress
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\SetDevicesAddressBySidResult_FailedAddress|null
     */
    public function last(): ?\StructType\SetDevicesAddressBySidResult_FailedAddress
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\SetDevicesAddressBySidResult_FailedAddress|null
     */
    public function offsetGet($offset): ?\StructType\SetDevicesAddressBySidResult_FailedAddress
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\SetDevicesAddressBySidResult_FailedAddress $item
     * @return \ArrayType\ArrayOfSetDevicesAddressBySidResult_FailedAddress
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\SetDevicesAddressBySidResult_FailedAddress) {
            throw new InvalidArgumentException(sprintf('The SetDevicesAddressBySidResult_FailedAddress property can only contain items of type \StructType\SetDevicesAddressBySidResult_FailedAddress, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string SetDevicesAddressBySidResult.FailedAddress
     */
    public function getAttributeName(): string
    {
        return 'SetDevicesAddressBySidResult.FailedAddress';
    }
}
