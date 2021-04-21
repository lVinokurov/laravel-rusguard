<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhoneNumberInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPhoneNumberInfo
 * @subpackage Arrays
 */
class ArrayOfPhoneNumberInfo extends AbstractStructArrayBase
{
    /**
     * The PhoneNumberInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhoneNumberInfo[]
     */
    protected array $PhoneNumberInfo = [];
    /**
     * Constructor method for ArrayOfPhoneNumberInfo
     * @uses ArrayOfPhoneNumberInfo::setPhoneNumberInfo()
     * @param \StructType\PhoneNumberInfo[] $phoneNumberInfo
     */
    public function __construct(array $phoneNumberInfo = [])
    {
        $this
            ->setPhoneNumberInfo($phoneNumberInfo);
    }
    /**
     * Get PhoneNumberInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhoneNumberInfo[]
     */
    public function getPhoneNumberInfo(): ?array
    {
        return isset($this->PhoneNumberInfo) ? $this->PhoneNumberInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPhoneNumberInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhoneNumberInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhoneNumberInfoForArrayConstraintsFromSetPhoneNumberInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhoneNumberInfoPhoneNumberInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhoneNumberInfoPhoneNumberInfoItem instanceof \StructType\PhoneNumberInfo) {
                $invalidValues[] = is_object($arrayOfPhoneNumberInfoPhoneNumberInfoItem) ? get_class($arrayOfPhoneNumberInfoPhoneNumberInfoItem) : sprintf('%s(%s)', gettype($arrayOfPhoneNumberInfoPhoneNumberInfoItem), var_export($arrayOfPhoneNumberInfoPhoneNumberInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhoneNumberInfo property can only contain items of type \StructType\PhoneNumberInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhoneNumberInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\PhoneNumberInfo[] $phoneNumberInfo
     * @return \ArrayType\ArrayOfPhoneNumberInfo
     */
    public function setPhoneNumberInfo(array $phoneNumberInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($phoneNumberInfoArrayErrorMessage = self::validatePhoneNumberInfoForArrayConstraintsFromSetPhoneNumberInfo($phoneNumberInfo))) {
            throw new InvalidArgumentException($phoneNumberInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($phoneNumberInfo) || (is_array($phoneNumberInfo) && empty($phoneNumberInfo))) {
            unset($this->PhoneNumberInfo);
        } else {
            $this->PhoneNumberInfo = $phoneNumberInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PhoneNumberInfo|null
     */
    public function current(): ?\StructType\PhoneNumberInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PhoneNumberInfo|null
     */
    public function item($index): ?\StructType\PhoneNumberInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PhoneNumberInfo|null
     */
    public function first(): ?\StructType\PhoneNumberInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PhoneNumberInfo|null
     */
    public function last(): ?\StructType\PhoneNumberInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PhoneNumberInfo|null
     */
    public function offsetGet($offset): ?\StructType\PhoneNumberInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\PhoneNumberInfo $item
     * @return \ArrayType\ArrayOfPhoneNumberInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PhoneNumberInfo) {
            throw new InvalidArgumentException(sprintf('The PhoneNumberInfo property can only contain items of type \StructType\PhoneNumberInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhoneNumberInfo
     */
    public function getAttributeName(): string
    {
        return 'PhoneNumberInfo';
    }
}
