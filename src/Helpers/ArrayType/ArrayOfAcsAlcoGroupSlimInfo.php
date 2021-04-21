<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsAlcoGroupSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsAlcoGroupSlimInfo
 * @subpackage Arrays
 */
class ArrayOfAcsAlcoGroupSlimInfo extends AbstractStructArrayBase
{
    /**
     * The AcsAlcoGroupSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAlcoGroupSlimInfo[]
     */
    protected array $AcsAlcoGroupSlimInfo = [];
    /**
     * Constructor method for ArrayOfAcsAlcoGroupSlimInfo
     * @uses ArrayOfAcsAlcoGroupSlimInfo::setAcsAlcoGroupSlimInfo()
     * @param \StructType\AcsAlcoGroupSlimInfo[] $acsAlcoGroupSlimInfo
     */
    public function __construct(array $acsAlcoGroupSlimInfo = [])
    {
        $this
            ->setAcsAlcoGroupSlimInfo($acsAlcoGroupSlimInfo);
    }
    /**
     * Get AcsAlcoGroupSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAlcoGroupSlimInfo[]
     */
    public function getAcsAlcoGroupSlimInfo(): ?array
    {
        return isset($this->AcsAlcoGroupSlimInfo) ? $this->AcsAlcoGroupSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsAlcoGroupSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsAlcoGroupSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsAlcoGroupSlimInfoForArrayConstraintsFromSetAcsAlcoGroupSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsAlcoGroupSlimInfoAcsAlcoGroupSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsAlcoGroupSlimInfoAcsAlcoGroupSlimInfoItem instanceof \StructType\AcsAlcoGroupSlimInfo) {
                $invalidValues[] = is_object($arrayOfAcsAlcoGroupSlimInfoAcsAlcoGroupSlimInfoItem) ? get_class($arrayOfAcsAlcoGroupSlimInfoAcsAlcoGroupSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsAlcoGroupSlimInfoAcsAlcoGroupSlimInfoItem), var_export($arrayOfAcsAlcoGroupSlimInfoAcsAlcoGroupSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsAlcoGroupSlimInfo property can only contain items of type \StructType\AcsAlcoGroupSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsAlcoGroupSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsAlcoGroupSlimInfo[] $acsAlcoGroupSlimInfo
     * @return \ArrayType\ArrayOfAcsAlcoGroupSlimInfo
     */
    public function setAcsAlcoGroupSlimInfo(array $acsAlcoGroupSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsAlcoGroupSlimInfoArrayErrorMessage = self::validateAcsAlcoGroupSlimInfoForArrayConstraintsFromSetAcsAlcoGroupSlimInfo($acsAlcoGroupSlimInfo))) {
            throw new InvalidArgumentException($acsAlcoGroupSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsAlcoGroupSlimInfo) || (is_array($acsAlcoGroupSlimInfo) && empty($acsAlcoGroupSlimInfo))) {
            unset($this->AcsAlcoGroupSlimInfo);
        } else {
            $this->AcsAlcoGroupSlimInfo = $acsAlcoGroupSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsAlcoGroupSlimInfo|null
     */
    public function current(): ?\StructType\AcsAlcoGroupSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsAlcoGroupSlimInfo|null
     */
    public function item($index): ?\StructType\AcsAlcoGroupSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsAlcoGroupSlimInfo|null
     */
    public function first(): ?\StructType\AcsAlcoGroupSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsAlcoGroupSlimInfo|null
     */
    public function last(): ?\StructType\AcsAlcoGroupSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsAlcoGroupSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsAlcoGroupSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsAlcoGroupSlimInfo $item
     * @return \ArrayType\ArrayOfAcsAlcoGroupSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsAlcoGroupSlimInfo) {
            throw new InvalidArgumentException(sprintf('The AcsAlcoGroupSlimInfo property can only contain items of type \StructType\AcsAlcoGroupSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsAlcoGroupSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsAlcoGroupSlimInfo';
    }
}
