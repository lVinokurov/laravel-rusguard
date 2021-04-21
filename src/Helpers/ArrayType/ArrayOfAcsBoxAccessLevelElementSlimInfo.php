<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsBoxAccessLevelElementSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsBoxAccessLevelElementSlimInfo
 * @subpackage Arrays
 */
class ArrayOfAcsBoxAccessLevelElementSlimInfo extends AbstractStructArrayBase
{
    /**
     * The AcsBoxAccessLevelElementSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsBoxAccessLevelElementSlimInfo[]
     */
    protected array $AcsBoxAccessLevelElementSlimInfo = [];
    /**
     * Constructor method for ArrayOfAcsBoxAccessLevelElementSlimInfo
     * @uses ArrayOfAcsBoxAccessLevelElementSlimInfo::setAcsBoxAccessLevelElementSlimInfo()
     * @param \StructType\AcsBoxAccessLevelElementSlimInfo[] $acsBoxAccessLevelElementSlimInfo
     */
    public function __construct(array $acsBoxAccessLevelElementSlimInfo = [])
    {
        $this
            ->setAcsBoxAccessLevelElementSlimInfo($acsBoxAccessLevelElementSlimInfo);
    }
    /**
     * Get AcsBoxAccessLevelElementSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsBoxAccessLevelElementSlimInfo[]
     */
    public function getAcsBoxAccessLevelElementSlimInfo(): ?array
    {
        return isset($this->AcsBoxAccessLevelElementSlimInfo) ? $this->AcsBoxAccessLevelElementSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsBoxAccessLevelElementSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsBoxAccessLevelElementSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsBoxAccessLevelElementSlimInfoForArrayConstraintsFromSetAcsBoxAccessLevelElementSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsBoxAccessLevelElementSlimInfoAcsBoxAccessLevelElementSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsBoxAccessLevelElementSlimInfoAcsBoxAccessLevelElementSlimInfoItem instanceof \StructType\AcsBoxAccessLevelElementSlimInfo) {
                $invalidValues[] = is_object($arrayOfAcsBoxAccessLevelElementSlimInfoAcsBoxAccessLevelElementSlimInfoItem) ? get_class($arrayOfAcsBoxAccessLevelElementSlimInfoAcsBoxAccessLevelElementSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsBoxAccessLevelElementSlimInfoAcsBoxAccessLevelElementSlimInfoItem), var_export($arrayOfAcsBoxAccessLevelElementSlimInfoAcsBoxAccessLevelElementSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsBoxAccessLevelElementSlimInfo property can only contain items of type \StructType\AcsBoxAccessLevelElementSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsBoxAccessLevelElementSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsBoxAccessLevelElementSlimInfo[] $acsBoxAccessLevelElementSlimInfo
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
     */
    public function setAcsBoxAccessLevelElementSlimInfo(array $acsBoxAccessLevelElementSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsBoxAccessLevelElementSlimInfoArrayErrorMessage = self::validateAcsBoxAccessLevelElementSlimInfoForArrayConstraintsFromSetAcsBoxAccessLevelElementSlimInfo($acsBoxAccessLevelElementSlimInfo))) {
            throw new InvalidArgumentException($acsBoxAccessLevelElementSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsBoxAccessLevelElementSlimInfo) || (is_array($acsBoxAccessLevelElementSlimInfo) && empty($acsBoxAccessLevelElementSlimInfo))) {
            unset($this->AcsBoxAccessLevelElementSlimInfo);
        } else {
            $this->AcsBoxAccessLevelElementSlimInfo = $acsBoxAccessLevelElementSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsBoxAccessLevelElementSlimInfo|null
     */
    public function current(): ?\StructType\AcsBoxAccessLevelElementSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsBoxAccessLevelElementSlimInfo|null
     */
    public function item($index): ?\StructType\AcsBoxAccessLevelElementSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsBoxAccessLevelElementSlimInfo|null
     */
    public function first(): ?\StructType\AcsBoxAccessLevelElementSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsBoxAccessLevelElementSlimInfo|null
     */
    public function last(): ?\StructType\AcsBoxAccessLevelElementSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsBoxAccessLevelElementSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsBoxAccessLevelElementSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsBoxAccessLevelElementSlimInfo $item
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelElementSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsBoxAccessLevelElementSlimInfo) {
            throw new InvalidArgumentException(sprintf('The AcsBoxAccessLevelElementSlimInfo property can only contain items of type \StructType\AcsBoxAccessLevelElementSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsBoxAccessLevelElementSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsBoxAccessLevelElementSlimInfo';
    }
}
