<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAscEmployeePhotoModificationDateTimeInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAscEmployeePhotoModificationDateTimeInfo
 * @subpackage Arrays
 */
class ArrayOfAscEmployeePhotoModificationDateTimeInfo extends AbstractStructArrayBase
{
    /**
     * The AscEmployeePhotoModificationDateTimeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AscEmployeePhotoModificationDateTimeInfo[]
     */
    protected array $AscEmployeePhotoModificationDateTimeInfo = [];
    /**
     * Constructor method for ArrayOfAscEmployeePhotoModificationDateTimeInfo
     * @uses ArrayOfAscEmployeePhotoModificationDateTimeInfo::setAscEmployeePhotoModificationDateTimeInfo()
     * @param \StructType\AscEmployeePhotoModificationDateTimeInfo[] $ascEmployeePhotoModificationDateTimeInfo
     */
    public function __construct(array $ascEmployeePhotoModificationDateTimeInfo = [])
    {
        $this
            ->setAscEmployeePhotoModificationDateTimeInfo($ascEmployeePhotoModificationDateTimeInfo);
    }
    /**
     * Get AscEmployeePhotoModificationDateTimeInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo[]
     */
    public function getAscEmployeePhotoModificationDateTimeInfo(): ?array
    {
        return isset($this->AscEmployeePhotoModificationDateTimeInfo) ? $this->AscEmployeePhotoModificationDateTimeInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAscEmployeePhotoModificationDateTimeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAscEmployeePhotoModificationDateTimeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAscEmployeePhotoModificationDateTimeInfoForArrayConstraintsFromSetAscEmployeePhotoModificationDateTimeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAscEmployeePhotoModificationDateTimeInfoAscEmployeePhotoModificationDateTimeInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAscEmployeePhotoModificationDateTimeInfoAscEmployeePhotoModificationDateTimeInfoItem instanceof \StructType\AscEmployeePhotoModificationDateTimeInfo) {
                $invalidValues[] = is_object($arrayOfAscEmployeePhotoModificationDateTimeInfoAscEmployeePhotoModificationDateTimeInfoItem) ? get_class($arrayOfAscEmployeePhotoModificationDateTimeInfoAscEmployeePhotoModificationDateTimeInfoItem) : sprintf('%s(%s)', gettype($arrayOfAscEmployeePhotoModificationDateTimeInfoAscEmployeePhotoModificationDateTimeInfoItem), var_export($arrayOfAscEmployeePhotoModificationDateTimeInfoAscEmployeePhotoModificationDateTimeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AscEmployeePhotoModificationDateTimeInfo property can only contain items of type \StructType\AscEmployeePhotoModificationDateTimeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AscEmployeePhotoModificationDateTimeInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AscEmployeePhotoModificationDateTimeInfo[] $ascEmployeePhotoModificationDateTimeInfo
     * @return \ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo
     */
    public function setAscEmployeePhotoModificationDateTimeInfo(array $ascEmployeePhotoModificationDateTimeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($ascEmployeePhotoModificationDateTimeInfoArrayErrorMessage = self::validateAscEmployeePhotoModificationDateTimeInfoForArrayConstraintsFromSetAscEmployeePhotoModificationDateTimeInfo($ascEmployeePhotoModificationDateTimeInfo))) {
            throw new InvalidArgumentException($ascEmployeePhotoModificationDateTimeInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($ascEmployeePhotoModificationDateTimeInfo) || (is_array($ascEmployeePhotoModificationDateTimeInfo) && empty($ascEmployeePhotoModificationDateTimeInfo))) {
            unset($this->AscEmployeePhotoModificationDateTimeInfo);
        } else {
            $this->AscEmployeePhotoModificationDateTimeInfo = $ascEmployeePhotoModificationDateTimeInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo|null
     */
    public function current(): ?\StructType\AscEmployeePhotoModificationDateTimeInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo|null
     */
    public function item($index): ?\StructType\AscEmployeePhotoModificationDateTimeInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo|null
     */
    public function first(): ?\StructType\AscEmployeePhotoModificationDateTimeInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo|null
     */
    public function last(): ?\StructType\AscEmployeePhotoModificationDateTimeInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AscEmployeePhotoModificationDateTimeInfo|null
     */
    public function offsetGet($offset): ?\StructType\AscEmployeePhotoModificationDateTimeInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AscEmployeePhotoModificationDateTimeInfo $item
     * @return \ArrayType\ArrayOfAscEmployeePhotoModificationDateTimeInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AscEmployeePhotoModificationDateTimeInfo) {
            throw new InvalidArgumentException(sprintf('The AscEmployeePhotoModificationDateTimeInfo property can only contain items of type \StructType\AscEmployeePhotoModificationDateTimeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AscEmployeePhotoModificationDateTimeInfo
     */
    public function getAttributeName(): string
    {
        return 'AscEmployeePhotoModificationDateTimeInfo';
    }
}
