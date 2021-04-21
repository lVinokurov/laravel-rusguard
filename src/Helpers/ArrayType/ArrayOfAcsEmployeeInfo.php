<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeInfo
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeInfo extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeInfo[]
     */
    protected array $AcsEmployeeInfo = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeInfo
     * @uses ArrayOfAcsEmployeeInfo::setAcsEmployeeInfo()
     * @param \StructType\AcsEmployeeInfo[] $acsEmployeeInfo
     */
    public function __construct(array $acsEmployeeInfo = [])
    {
        $this
            ->setAcsEmployeeInfo($acsEmployeeInfo);
    }
    /**
     * Get AcsEmployeeInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeInfo[]
     */
    public function getAcsEmployeeInfo(): ?array
    {
        return isset($this->AcsEmployeeInfo) ? $this->AcsEmployeeInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeInfoForArrayConstraintsFromSetAcsEmployeeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeInfoAcsEmployeeInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeInfoAcsEmployeeInfoItem instanceof \StructType\AcsEmployeeInfo) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeInfoAcsEmployeeInfoItem) ? get_class($arrayOfAcsEmployeeInfoAcsEmployeeInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeInfoAcsEmployeeInfoItem), var_export($arrayOfAcsEmployeeInfoAcsEmployeeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeInfo property can only contain items of type \StructType\AcsEmployeeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeInfo[] $acsEmployeeInfo
     * @return \ArrayType\ArrayOfAcsEmployeeInfo
     */
    public function setAcsEmployeeInfo(array $acsEmployeeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeInfoArrayErrorMessage = self::validateAcsEmployeeInfoForArrayConstraintsFromSetAcsEmployeeInfo($acsEmployeeInfo))) {
            throw new InvalidArgumentException($acsEmployeeInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeInfo) || (is_array($acsEmployeeInfo) && empty($acsEmployeeInfo))) {
            unset($this->AcsEmployeeInfo);
        } else {
            $this->AcsEmployeeInfo = $acsEmployeeInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeInfo|null
     */
    public function current(): ?\StructType\AcsEmployeeInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeInfo|null
     */
    public function item($index): ?\StructType\AcsEmployeeInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeInfo|null
     */
    public function first(): ?\StructType\AcsEmployeeInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeInfo|null
     */
    public function last(): ?\StructType\AcsEmployeeInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeInfo $item
     * @return \ArrayType\ArrayOfAcsEmployeeInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeInfo) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeInfo property can only contain items of type \StructType\AcsEmployeeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeInfo';
    }
}
