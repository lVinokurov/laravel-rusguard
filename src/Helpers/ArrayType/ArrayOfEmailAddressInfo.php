<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailAddressInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmailAddressInfo
 * @subpackage Arrays
 */
class ArrayOfEmailAddressInfo extends AbstractStructArrayBase
{
    /**
     * The EmailAddressInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmailAddressInfo[]
     */
    protected array $EmailAddressInfo = [];
    /**
     * Constructor method for ArrayOfEmailAddressInfo
     * @uses ArrayOfEmailAddressInfo::setEmailAddressInfo()
     * @param \StructType\EmailAddressInfo[] $emailAddressInfo
     */
    public function __construct(array $emailAddressInfo = [])
    {
        $this
            ->setEmailAddressInfo($emailAddressInfo);
    }
    /**
     * Get EmailAddressInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmailAddressInfo[]
     */
    public function getEmailAddressInfo(): ?array
    {
        return isset($this->EmailAddressInfo) ? $this->EmailAddressInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailAddressInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailAddressInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailAddressInfoForArrayConstraintsFromSetEmailAddressInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailAddressInfoEmailAddressInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailAddressInfoEmailAddressInfoItem instanceof \StructType\EmailAddressInfo) {
                $invalidValues[] = is_object($arrayOfEmailAddressInfoEmailAddressInfoItem) ? get_class($arrayOfEmailAddressInfoEmailAddressInfoItem) : sprintf('%s(%s)', gettype($arrayOfEmailAddressInfoEmailAddressInfoItem), var_export($arrayOfEmailAddressInfoEmailAddressInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailAddressInfo property can only contain items of type \StructType\EmailAddressInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmailAddressInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmailAddressInfo[] $emailAddressInfo
     * @return \ArrayType\ArrayOfEmailAddressInfo
     */
    public function setEmailAddressInfo(array $emailAddressInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($emailAddressInfoArrayErrorMessage = self::validateEmailAddressInfoForArrayConstraintsFromSetEmailAddressInfo($emailAddressInfo))) {
            throw new InvalidArgumentException($emailAddressInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($emailAddressInfo) || (is_array($emailAddressInfo) && empty($emailAddressInfo))) {
            unset($this->EmailAddressInfo);
        } else {
            $this->EmailAddressInfo = $emailAddressInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmailAddressInfo|null
     */
    public function current(): ?\StructType\EmailAddressInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmailAddressInfo|null
     */
    public function item($index): ?\StructType\EmailAddressInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmailAddressInfo|null
     */
    public function first(): ?\StructType\EmailAddressInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmailAddressInfo|null
     */
    public function last(): ?\StructType\EmailAddressInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmailAddressInfo|null
     */
    public function offsetGet($offset): ?\StructType\EmailAddressInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmailAddressInfo $item
     * @return \ArrayType\ArrayOfEmailAddressInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmailAddressInfo) {
            throw new InvalidArgumentException(sprintf('The EmailAddressInfo property can only contain items of type \StructType\EmailAddressInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailAddressInfo
     */
    public function getAttributeName(): string
    {
        return 'EmailAddressInfo';
    }
}
