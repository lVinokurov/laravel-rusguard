<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsKeyInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsKeyInfo
 * @subpackage Arrays
 */
class ArrayOfAcsKeyInfo extends AbstractStructArrayBase
{
    /**
     * The AcsKeyInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsKeyInfo[]
     */
    protected array $AcsKeyInfo = [];
    /**
     * Constructor method for ArrayOfAcsKeyInfo
     * @uses ArrayOfAcsKeyInfo::setAcsKeyInfo()
     * @param \StructType\AcsKeyInfo[] $acsKeyInfo
     */
    public function __construct(array $acsKeyInfo = [])
    {
        $this
            ->setAcsKeyInfo($acsKeyInfo);
    }
    /**
     * Get AcsKeyInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsKeyInfo[]
     */
    public function getAcsKeyInfo(): ?array
    {
        return isset($this->AcsKeyInfo) ? $this->AcsKeyInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsKeyInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsKeyInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsKeyInfoForArrayConstraintsFromSetAcsKeyInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsKeyInfoAcsKeyInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsKeyInfoAcsKeyInfoItem instanceof \StructType\AcsKeyInfo) {
                $invalidValues[] = is_object($arrayOfAcsKeyInfoAcsKeyInfoItem) ? get_class($arrayOfAcsKeyInfoAcsKeyInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsKeyInfoAcsKeyInfoItem), var_export($arrayOfAcsKeyInfoAcsKeyInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsKeyInfo property can only contain items of type \StructType\AcsKeyInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsKeyInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsKeyInfo[] $acsKeyInfo
     * @return \ArrayType\ArrayOfAcsKeyInfo
     */
    public function setAcsKeyInfo(array $acsKeyInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsKeyInfoArrayErrorMessage = self::validateAcsKeyInfoForArrayConstraintsFromSetAcsKeyInfo($acsKeyInfo))) {
            throw new InvalidArgumentException($acsKeyInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsKeyInfo) || (is_array($acsKeyInfo) && empty($acsKeyInfo))) {
            unset($this->AcsKeyInfo);
        } else {
            $this->AcsKeyInfo = $acsKeyInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsKeyInfo|null
     */
    public function current(): ?\StructType\AcsKeyInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsKeyInfo|null
     */
    public function item($index): ?\StructType\AcsKeyInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsKeyInfo|null
     */
    public function first(): ?\StructType\AcsKeyInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsKeyInfo|null
     */
    public function last(): ?\StructType\AcsKeyInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsKeyInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsKeyInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsKeyInfo $item
     * @return \ArrayType\ArrayOfAcsKeyInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsKeyInfo) {
            throw new InvalidArgumentException(sprintf('The AcsKeyInfo property can only contain items of type \StructType\AcsKeyInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsKeyInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsKeyInfo';
    }
}
