<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfEmailDistributionAddressInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfEmailDistributionAddressInfo
 * @subpackage Arrays
 */
class ArrayOfEmailDistributionAddressInfo extends AbstractStructArrayBase
{
    /**
     * The EmailDistributionAddressInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\EmailDistributionAddressInfo[]
     */
    protected array $EmailDistributionAddressInfo = [];
    /**
     * Constructor method for ArrayOfEmailDistributionAddressInfo
     * @uses ArrayOfEmailDistributionAddressInfo::setEmailDistributionAddressInfo()
     * @param \StructType\EmailDistributionAddressInfo[] $emailDistributionAddressInfo
     */
    public function __construct(array $emailDistributionAddressInfo = [])
    {
        $this
            ->setEmailDistributionAddressInfo($emailDistributionAddressInfo);
    }
    /**
     * Get EmailDistributionAddressInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\EmailDistributionAddressInfo[]
     */
    public function getEmailDistributionAddressInfo(): ?array
    {
        return isset($this->EmailDistributionAddressInfo) ? $this->EmailDistributionAddressInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setEmailDistributionAddressInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEmailDistributionAddressInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEmailDistributionAddressInfoForArrayConstraintsFromSetEmailDistributionAddressInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfEmailDistributionAddressInfoEmailDistributionAddressInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfEmailDistributionAddressInfoEmailDistributionAddressInfoItem instanceof \StructType\EmailDistributionAddressInfo) {
                $invalidValues[] = is_object($arrayOfEmailDistributionAddressInfoEmailDistributionAddressInfoItem) ? get_class($arrayOfEmailDistributionAddressInfoEmailDistributionAddressInfoItem) : sprintf('%s(%s)', gettype($arrayOfEmailDistributionAddressInfoEmailDistributionAddressInfoItem), var_export($arrayOfEmailDistributionAddressInfoEmailDistributionAddressInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EmailDistributionAddressInfo property can only contain items of type \StructType\EmailDistributionAddressInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EmailDistributionAddressInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\EmailDistributionAddressInfo[] $emailDistributionAddressInfo
     * @return \ArrayType\ArrayOfEmailDistributionAddressInfo
     */
    public function setEmailDistributionAddressInfo(array $emailDistributionAddressInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($emailDistributionAddressInfoArrayErrorMessage = self::validateEmailDistributionAddressInfoForArrayConstraintsFromSetEmailDistributionAddressInfo($emailDistributionAddressInfo))) {
            throw new InvalidArgumentException($emailDistributionAddressInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($emailDistributionAddressInfo) || (is_array($emailDistributionAddressInfo) && empty($emailDistributionAddressInfo))) {
            unset($this->EmailDistributionAddressInfo);
        } else {
            $this->EmailDistributionAddressInfo = $emailDistributionAddressInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\EmailDistributionAddressInfo|null
     */
    public function current(): ?\StructType\EmailDistributionAddressInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\EmailDistributionAddressInfo|null
     */
    public function item($index): ?\StructType\EmailDistributionAddressInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\EmailDistributionAddressInfo|null
     */
    public function first(): ?\StructType\EmailDistributionAddressInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\EmailDistributionAddressInfo|null
     */
    public function last(): ?\StructType\EmailDistributionAddressInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\EmailDistributionAddressInfo|null
     */
    public function offsetGet($offset): ?\StructType\EmailDistributionAddressInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\EmailDistributionAddressInfo $item
     * @return \ArrayType\ArrayOfEmailDistributionAddressInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\EmailDistributionAddressInfo) {
            throw new InvalidArgumentException(sprintf('The EmailDistributionAddressInfo property can only contain items of type \StructType\EmailDistributionAddressInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string EmailDistributionAddressInfo
     */
    public function getAttributeName(): string
    {
        return 'EmailDistributionAddressInfo';
    }
}
