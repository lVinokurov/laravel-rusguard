<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsAccessPointDriverInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsAccessPointDriverInfo
 * @subpackage Arrays
 */
class ArrayOfAcsAccessPointDriverInfo extends AbstractStructArrayBase
{
    /**
     * The AcsAccessPointDriverInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsAccessPointDriverInfo[]
     */
    protected array $AcsAccessPointDriverInfo = [];
    /**
     * Constructor method for ArrayOfAcsAccessPointDriverInfo
     * @uses ArrayOfAcsAccessPointDriverInfo::setAcsAccessPointDriverInfo()
     * @param \StructType\AcsAccessPointDriverInfo[] $acsAccessPointDriverInfo
     */
    public function __construct(array $acsAccessPointDriverInfo = [])
    {
        $this
            ->setAcsAccessPointDriverInfo($acsAccessPointDriverInfo);
    }
    /**
     * Get AcsAccessPointDriverInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsAccessPointDriverInfo[]
     */
    public function getAcsAccessPointDriverInfo(): ?array
    {
        return isset($this->AcsAccessPointDriverInfo) ? $this->AcsAccessPointDriverInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsAccessPointDriverInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsAccessPointDriverInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsAccessPointDriverInfoForArrayConstraintsFromSetAcsAccessPointDriverInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsAccessPointDriverInfoAcsAccessPointDriverInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsAccessPointDriverInfoAcsAccessPointDriverInfoItem instanceof \StructType\AcsAccessPointDriverInfo) {
                $invalidValues[] = is_object($arrayOfAcsAccessPointDriverInfoAcsAccessPointDriverInfoItem) ? get_class($arrayOfAcsAccessPointDriverInfoAcsAccessPointDriverInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsAccessPointDriverInfoAcsAccessPointDriverInfoItem), var_export($arrayOfAcsAccessPointDriverInfoAcsAccessPointDriverInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsAccessPointDriverInfo property can only contain items of type \StructType\AcsAccessPointDriverInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsAccessPointDriverInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessPointDriverInfo[] $acsAccessPointDriverInfo
     * @return \ArrayType\ArrayOfAcsAccessPointDriverInfo
     */
    public function setAcsAccessPointDriverInfo(array $acsAccessPointDriverInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsAccessPointDriverInfoArrayErrorMessage = self::validateAcsAccessPointDriverInfoForArrayConstraintsFromSetAcsAccessPointDriverInfo($acsAccessPointDriverInfo))) {
            throw new InvalidArgumentException($acsAccessPointDriverInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsAccessPointDriverInfo) || (is_array($acsAccessPointDriverInfo) && empty($acsAccessPointDriverInfo))) {
            unset($this->AcsAccessPointDriverInfo);
        } else {
            $this->AcsAccessPointDriverInfo = $acsAccessPointDriverInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsAccessPointDriverInfo|null
     */
    public function current(): ?\StructType\AcsAccessPointDriverInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsAccessPointDriverInfo|null
     */
    public function item($index): ?\StructType\AcsAccessPointDriverInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsAccessPointDriverInfo|null
     */
    public function first(): ?\StructType\AcsAccessPointDriverInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsAccessPointDriverInfo|null
     */
    public function last(): ?\StructType\AcsAccessPointDriverInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsAccessPointDriverInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsAccessPointDriverInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsAccessPointDriverInfo $item
     * @return \ArrayType\ArrayOfAcsAccessPointDriverInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsAccessPointDriverInfo) {
            throw new InvalidArgumentException(sprintf('The AcsAccessPointDriverInfo property can only contain items of type \StructType\AcsAccessPointDriverInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsAccessPointDriverInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsAccessPointDriverInfo';
    }
}
