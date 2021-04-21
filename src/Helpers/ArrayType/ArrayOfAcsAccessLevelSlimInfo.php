<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsAccessLevelSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsAccessLevelSlimInfo
 * @subpackage Arrays
 */
class ArrayOfAcsAccessLevelSlimInfo extends AbstractStructArrayBase
{
    /**
     * The AcsAccessLevelSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessLevelSlimInfo[]
     */
    protected array $AcsAccessLevelSlimInfo = [];
    /**
     * Constructor method for ArrayOfAcsAccessLevelSlimInfo
     * @uses ArrayOfAcsAccessLevelSlimInfo::setAcsAccessLevelSlimInfo()
     * @param \StructType\AcsAccessLevelSlimInfo[] $acsAccessLevelSlimInfo
     */
    public function __construct(array $acsAccessLevelSlimInfo = [])
    {
        $this
            ->setAcsAccessLevelSlimInfo($acsAccessLevelSlimInfo);
    }
    /**
     * Get AcsAccessLevelSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessLevelSlimInfo[]
     */
    public function getAcsAccessLevelSlimInfo(): ?array
    {
        return isset($this->AcsAccessLevelSlimInfo) ? $this->AcsAccessLevelSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsAccessLevelSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsAccessLevelSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsAccessLevelSlimInfoForArrayConstraintsFromSetAcsAccessLevelSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsAccessLevelSlimInfoAcsAccessLevelSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsAccessLevelSlimInfoAcsAccessLevelSlimInfoItem instanceof \StructType\AcsAccessLevelSlimInfo) {
                $invalidValues[] = is_object($arrayOfAcsAccessLevelSlimInfoAcsAccessLevelSlimInfoItem) ? get_class($arrayOfAcsAccessLevelSlimInfoAcsAccessLevelSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsAccessLevelSlimInfoAcsAccessLevelSlimInfoItem), var_export($arrayOfAcsAccessLevelSlimInfoAcsAccessLevelSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsAccessLevelSlimInfo property can only contain items of type \StructType\AcsAccessLevelSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsAccessLevelSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessLevelSlimInfo[] $acsAccessLevelSlimInfo
     * @return \ArrayType\ArrayOfAcsAccessLevelSlimInfo
     */
    public function setAcsAccessLevelSlimInfo(array $acsAccessLevelSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsAccessLevelSlimInfoArrayErrorMessage = self::validateAcsAccessLevelSlimInfoForArrayConstraintsFromSetAcsAccessLevelSlimInfo($acsAccessLevelSlimInfo))) {
            throw new InvalidArgumentException($acsAccessLevelSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsAccessLevelSlimInfo) || (is_array($acsAccessLevelSlimInfo) && empty($acsAccessLevelSlimInfo))) {
            unset($this->AcsAccessLevelSlimInfo);
        } else {
            $this->AcsAccessLevelSlimInfo = $acsAccessLevelSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsAccessLevelSlimInfo|null
     */
    public function current(): ?\StructType\AcsAccessLevelSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsAccessLevelSlimInfo|null
     */
    public function item($index): ?\StructType\AcsAccessLevelSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsAccessLevelSlimInfo|null
     */
    public function first(): ?\StructType\AcsAccessLevelSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsAccessLevelSlimInfo|null
     */
    public function last(): ?\StructType\AcsAccessLevelSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsAccessLevelSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsAccessLevelSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessLevelSlimInfo $item
     * @return \ArrayType\ArrayOfAcsAccessLevelSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsAccessLevelSlimInfo) {
            throw new InvalidArgumentException(sprintf('The AcsAccessLevelSlimInfo property can only contain items of type \StructType\AcsAccessLevelSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsAccessLevelSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsAccessLevelSlimInfo';
    }
}
