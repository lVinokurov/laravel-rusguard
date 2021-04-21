<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeePhotosInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeePhotosInfo
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeePhotosInfo extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeePhotosInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeePhotosInfo[]
     */
    protected array $AcsEmployeePhotosInfo = [];
    /**
     * Constructor method for ArrayOfAcsEmployeePhotosInfo
     * @uses ArrayOfAcsEmployeePhotosInfo::setAcsEmployeePhotosInfo()
     * @param \StructType\AcsEmployeePhotosInfo[] $acsEmployeePhotosInfo
     */
    public function __construct(array $acsEmployeePhotosInfo = [])
    {
        $this
            ->setAcsEmployeePhotosInfo($acsEmployeePhotosInfo);
    }
    /**
     * Get AcsEmployeePhotosInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeePhotosInfo[]
     */
    public function getAcsEmployeePhotosInfo(): ?array
    {
        return isset($this->AcsEmployeePhotosInfo) ? $this->AcsEmployeePhotosInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeePhotosInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeePhotosInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeePhotosInfoForArrayConstraintsFromSetAcsEmployeePhotosInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeePhotosInfoAcsEmployeePhotosInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeePhotosInfoAcsEmployeePhotosInfoItem instanceof \StructType\AcsEmployeePhotosInfo) {
                $invalidValues[] = is_object($arrayOfAcsEmployeePhotosInfoAcsEmployeePhotosInfoItem) ? get_class($arrayOfAcsEmployeePhotosInfoAcsEmployeePhotosInfoItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeePhotosInfoAcsEmployeePhotosInfoItem), var_export($arrayOfAcsEmployeePhotosInfoAcsEmployeePhotosInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeePhotosInfo property can only contain items of type \StructType\AcsEmployeePhotosInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeePhotosInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeePhotosInfo[] $acsEmployeePhotosInfo
     * @return \ArrayType\ArrayOfAcsEmployeePhotosInfo
     */
    public function setAcsEmployeePhotosInfo(array $acsEmployeePhotosInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeePhotosInfoArrayErrorMessage = self::validateAcsEmployeePhotosInfoForArrayConstraintsFromSetAcsEmployeePhotosInfo($acsEmployeePhotosInfo))) {
            throw new InvalidArgumentException($acsEmployeePhotosInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeePhotosInfo) || (is_array($acsEmployeePhotosInfo) && empty($acsEmployeePhotosInfo))) {
            unset($this->AcsEmployeePhotosInfo);
        } else {
            $this->AcsEmployeePhotosInfo = $acsEmployeePhotosInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeePhotosInfo|null
     */
    public function current(): ?\StructType\AcsEmployeePhotosInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeePhotosInfo|null
     */
    public function item($index): ?\StructType\AcsEmployeePhotosInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeePhotosInfo|null
     */
    public function first(): ?\StructType\AcsEmployeePhotosInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeePhotosInfo|null
     */
    public function last(): ?\StructType\AcsEmployeePhotosInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeePhotosInfo|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeePhotosInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeePhotosInfo $item
     * @return \ArrayType\ArrayOfAcsEmployeePhotosInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeePhotosInfo) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeePhotosInfo property can only contain items of type \StructType\AcsEmployeePhotosInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeePhotosInfo
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeePhotosInfo';
    }
}
