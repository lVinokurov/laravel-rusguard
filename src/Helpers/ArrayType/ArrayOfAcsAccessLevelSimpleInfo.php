<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsAccessLevelSimpleInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsAccessLevelSimpleInfo
 * @subpackage Arrays
 */
class ArrayOfAcsAccessLevelSimpleInfo extends AbstractStructArrayBase
{
    /**
     * The AcsAccessLevelSimpleInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessLevelSimpleInfo[]
     */
    protected array $AcsAccessLevelSimpleInfo = [];
    /**
     * Constructor method for ArrayOfAcsAccessLevelSimpleInfo
     * @uses ArrayOfAcsAccessLevelSimpleInfo::setAcsAccessLevelSimpleInfo()
     * @param \StructType\AcsAccessLevelSimpleInfo[] $acsAccessLevelSimpleInfo
     */
    public function __construct(array $acsAccessLevelSimpleInfo = [])
    {
        $this
            ->setAcsAccessLevelSimpleInfo($acsAccessLevelSimpleInfo);
    }
    /**
     * Get AcsAccessLevelSimpleInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessLevelSimpleInfo[]
     */
    public function getAcsAccessLevelSimpleInfo(): ?array
    {
        return isset($this->AcsAccessLevelSimpleInfo) ? $this->AcsAccessLevelSimpleInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsAccessLevelSimpleInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsAccessLevelSimpleInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsAccessLevelSimpleInfoForArrayConstraintsFromSetAcsAccessLevelSimpleInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsAccessLevelSimpleInfoAcsAccessLevelSimpleInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsAccessLevelSimpleInfoAcsAccessLevelSimpleInfoItem instanceof \StructType\AcsAccessLevelSimpleInfo) {
                $invalidValues[] = is_object($arrayOfAcsAccessLevelSimpleInfoAcsAccessLevelSimpleInfoItem) ? get_class($arrayOfAcsAccessLevelSimpleInfoAcsAccessLevelSimpleInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsAccessLevelSimpleInfoAcsAccessLevelSimpleInfoItem), var_export($arrayOfAcsAccessLevelSimpleInfoAcsAccessLevelSimpleInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsAccessLevelSimpleInfo property can only contain items of type \StructType\AcsAccessLevelSimpleInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsAccessLevelSimpleInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessLevelSimpleInfo[] $acsAccessLevelSimpleInfo
     * @return \ArrayType\ArrayOfAcsAccessLevelSimpleInfo
     */
    public function setAcsAccessLevelSimpleInfo(array $acsAccessLevelSimpleInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsAccessLevelSimpleInfoArrayErrorMessage = self::validateAcsAccessLevelSimpleInfoForArrayConstraintsFromSetAcsAccessLevelSimpleInfo($acsAccessLevelSimpleInfo))) {
            throw new InvalidArgumentException($acsAccessLevelSimpleInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsAccessLevelSimpleInfo) || (is_array($acsAccessLevelSimpleInfo) && empty($acsAccessLevelSimpleInfo))) {
            unset($this->AcsAccessLevelSimpleInfo);
        } else {
            $this->AcsAccessLevelSimpleInfo = $acsAccessLevelSimpleInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsAccessLevelSimpleInfo|null
     */
    public function current(): ?\StructType\AcsAccessLevelSimpleInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsAccessLevelSimpleInfo|null
     */
    public function item($index): ?\StructType\AcsAccessLevelSimpleInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsAccessLevelSimpleInfo|null
     */
    public function first(): ?\StructType\AcsAccessLevelSimpleInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsAccessLevelSimpleInfo|null
     */
    public function last(): ?\StructType\AcsAccessLevelSimpleInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsAccessLevelSimpleInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsAccessLevelSimpleInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessLevelSimpleInfo $item
     * @return \ArrayType\ArrayOfAcsAccessLevelSimpleInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsAccessLevelSimpleInfo) {
            throw new InvalidArgumentException(sprintf('The AcsAccessLevelSimpleInfo property can only contain items of type \StructType\AcsAccessLevelSimpleInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsAccessLevelSimpleInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsAccessLevelSimpleInfo';
    }
}
