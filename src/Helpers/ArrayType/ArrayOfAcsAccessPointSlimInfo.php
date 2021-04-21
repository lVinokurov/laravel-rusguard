<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsAccessPointSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsAccessPointSlimInfo
 * @subpackage Arrays
 */
class ArrayOfAcsAccessPointSlimInfo extends AbstractStructArrayBase
{
    /**
     * The AcsAccessPointSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessPointSlimInfo[]
     */
    protected array $AcsAccessPointSlimInfo = [];
    /**
     * Constructor method for ArrayOfAcsAccessPointSlimInfo
     * @uses ArrayOfAcsAccessPointSlimInfo::setAcsAccessPointSlimInfo()
     * @param \StructType\AcsAccessPointSlimInfo[] $acsAccessPointSlimInfo
     */
    public function __construct(array $acsAccessPointSlimInfo = [])
    {
        $this
            ->setAcsAccessPointSlimInfo($acsAccessPointSlimInfo);
    }
    /**
     * Get AcsAccessPointSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessPointSlimInfo[]
     */
    public function getAcsAccessPointSlimInfo(): ?array
    {
        return isset($this->AcsAccessPointSlimInfo) ? $this->AcsAccessPointSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsAccessPointSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsAccessPointSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsAccessPointSlimInfoForArrayConstraintsFromSetAcsAccessPointSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsAccessPointSlimInfoAcsAccessPointSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsAccessPointSlimInfoAcsAccessPointSlimInfoItem instanceof \StructType\AcsAccessPointSlimInfo) {
                $invalidValues[] = is_object($arrayOfAcsAccessPointSlimInfoAcsAccessPointSlimInfoItem) ? get_class($arrayOfAcsAccessPointSlimInfoAcsAccessPointSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsAccessPointSlimInfoAcsAccessPointSlimInfoItem), var_export($arrayOfAcsAccessPointSlimInfoAcsAccessPointSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsAccessPointSlimInfo property can only contain items of type \StructType\AcsAccessPointSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsAccessPointSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessPointSlimInfo[] $acsAccessPointSlimInfo
     * @return \ArrayType\ArrayOfAcsAccessPointSlimInfo
     */
    public function setAcsAccessPointSlimInfo(array $acsAccessPointSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsAccessPointSlimInfoArrayErrorMessage = self::validateAcsAccessPointSlimInfoForArrayConstraintsFromSetAcsAccessPointSlimInfo($acsAccessPointSlimInfo))) {
            throw new InvalidArgumentException($acsAccessPointSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsAccessPointSlimInfo) || (is_array($acsAccessPointSlimInfo) && empty($acsAccessPointSlimInfo))) {
            unset($this->AcsAccessPointSlimInfo);
        } else {
            $this->AcsAccessPointSlimInfo = $acsAccessPointSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsAccessPointSlimInfo|null
     */
    public function current(): ?\StructType\AcsAccessPointSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsAccessPointSlimInfo|null
     */
    public function item($index): ?\StructType\AcsAccessPointSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsAccessPointSlimInfo|null
     */
    public function first(): ?\StructType\AcsAccessPointSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsAccessPointSlimInfo|null
     */
    public function last(): ?\StructType\AcsAccessPointSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsAccessPointSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsAccessPointSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessPointSlimInfo $item
     * @return \ArrayType\ArrayOfAcsAccessPointSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsAccessPointSlimInfo) {
            throw new InvalidArgumentException(sprintf('The AcsAccessPointSlimInfo property can only contain items of type \StructType\AcsAccessPointSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsAccessPointSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsAccessPointSlimInfo';
    }
}
