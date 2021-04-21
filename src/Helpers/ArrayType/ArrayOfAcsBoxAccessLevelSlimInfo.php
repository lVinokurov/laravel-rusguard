<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsBoxAccessLevelSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsBoxAccessLevelSlimInfo
 * @subpackage Arrays
 */
class ArrayOfAcsBoxAccessLevelSlimInfo extends AbstractStructArrayBase
{
    /**
     * The AcsBoxAccessLevelSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsBoxAccessLevelSlimInfo[]
     */
    protected array $AcsBoxAccessLevelSlimInfo = [];
    /**
     * Constructor method for ArrayOfAcsBoxAccessLevelSlimInfo
     * @uses ArrayOfAcsBoxAccessLevelSlimInfo::setAcsBoxAccessLevelSlimInfo()
     * @param \StructType\AcsBoxAccessLevelSlimInfo[] $acsBoxAccessLevelSlimInfo
     */
    public function __construct(array $acsBoxAccessLevelSlimInfo = [])
    {
        $this
            ->setAcsBoxAccessLevelSlimInfo($acsBoxAccessLevelSlimInfo);
    }
    /**
     * Get AcsBoxAccessLevelSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsBoxAccessLevelSlimInfo[]
     */
    public function getAcsBoxAccessLevelSlimInfo(): ?array
    {
        return isset($this->AcsBoxAccessLevelSlimInfo) ? $this->AcsBoxAccessLevelSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsBoxAccessLevelSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsBoxAccessLevelSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsBoxAccessLevelSlimInfoForArrayConstraintsFromSetAcsBoxAccessLevelSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsBoxAccessLevelSlimInfoAcsBoxAccessLevelSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsBoxAccessLevelSlimInfoAcsBoxAccessLevelSlimInfoItem instanceof \StructType\AcsBoxAccessLevelSlimInfo) {
                $invalidValues[] = is_object($arrayOfAcsBoxAccessLevelSlimInfoAcsBoxAccessLevelSlimInfoItem) ? get_class($arrayOfAcsBoxAccessLevelSlimInfoAcsBoxAccessLevelSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsBoxAccessLevelSlimInfoAcsBoxAccessLevelSlimInfoItem), var_export($arrayOfAcsBoxAccessLevelSlimInfoAcsBoxAccessLevelSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsBoxAccessLevelSlimInfo property can only contain items of type \StructType\AcsBoxAccessLevelSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsBoxAccessLevelSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsBoxAccessLevelSlimInfo[] $acsBoxAccessLevelSlimInfo
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo
     */
    public function setAcsBoxAccessLevelSlimInfo(array $acsBoxAccessLevelSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsBoxAccessLevelSlimInfoArrayErrorMessage = self::validateAcsBoxAccessLevelSlimInfoForArrayConstraintsFromSetAcsBoxAccessLevelSlimInfo($acsBoxAccessLevelSlimInfo))) {
            throw new InvalidArgumentException($acsBoxAccessLevelSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsBoxAccessLevelSlimInfo) || (is_array($acsBoxAccessLevelSlimInfo) && empty($acsBoxAccessLevelSlimInfo))) {
            unset($this->AcsBoxAccessLevelSlimInfo);
        } else {
            $this->AcsBoxAccessLevelSlimInfo = $acsBoxAccessLevelSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    public function current(): ?\StructType\AcsBoxAccessLevelSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    public function item($index): ?\StructType\AcsBoxAccessLevelSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    public function first(): ?\StructType\AcsBoxAccessLevelSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    public function last(): ?\StructType\AcsBoxAccessLevelSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsBoxAccessLevelSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsBoxAccessLevelSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsBoxAccessLevelSlimInfo $item
     * @return \ArrayType\ArrayOfAcsBoxAccessLevelSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsBoxAccessLevelSlimInfo) {
            throw new InvalidArgumentException(sprintf('The AcsBoxAccessLevelSlimInfo property can only contain items of type \StructType\AcsBoxAccessLevelSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsBoxAccessLevelSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsBoxAccessLevelSlimInfo';
    }
}
