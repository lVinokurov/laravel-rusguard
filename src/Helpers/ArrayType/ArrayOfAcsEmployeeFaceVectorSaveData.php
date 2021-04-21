<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAcsEmployeeFaceVectorSaveData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAcsEmployeeFaceVectorSaveData
 * @subpackage Arrays
 */
class ArrayOfAcsEmployeeFaceVectorSaveData extends AbstractStructArrayBase
{
    /**
     * The AcsEmployeeFaceVectorSaveData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AcsEmployeeFaceVectorSaveData[]
     */
    protected array $AcsEmployeeFaceVectorSaveData = [];
    /**
     * Constructor method for ArrayOfAcsEmployeeFaceVectorSaveData
     * @uses ArrayOfAcsEmployeeFaceVectorSaveData::setAcsEmployeeFaceVectorSaveData()
     * @param \StructType\AcsEmployeeFaceVectorSaveData[] $acsEmployeeFaceVectorSaveData
     */
    public function __construct(array $acsEmployeeFaceVectorSaveData = [])
    {
        $this
            ->setAcsEmployeeFaceVectorSaveData($acsEmployeeFaceVectorSaveData);
    }
    /**
     * Get AcsEmployeeFaceVectorSaveData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AcsEmployeeFaceVectorSaveData[]
     */
    public function getAcsEmployeeFaceVectorSaveData(): ?array
    {
        return isset($this->AcsEmployeeFaceVectorSaveData) ? $this->AcsEmployeeFaceVectorSaveData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAcsEmployeeFaceVectorSaveData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAcsEmployeeFaceVectorSaveData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAcsEmployeeFaceVectorSaveDataForArrayConstraintsFromSetAcsEmployeeFaceVectorSaveData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAcsEmployeeFaceVectorSaveDataAcsEmployeeFaceVectorSaveDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfAcsEmployeeFaceVectorSaveDataAcsEmployeeFaceVectorSaveDataItem instanceof \StructType\AcsEmployeeFaceVectorSaveData) {
                $invalidValues[] = is_object($arrayOfAcsEmployeeFaceVectorSaveDataAcsEmployeeFaceVectorSaveDataItem) ? get_class($arrayOfAcsEmployeeFaceVectorSaveDataAcsEmployeeFaceVectorSaveDataItem) : sprintf('%s(%s)', gettype($arrayOfAcsEmployeeFaceVectorSaveDataAcsEmployeeFaceVectorSaveDataItem), var_export($arrayOfAcsEmployeeFaceVectorSaveDataAcsEmployeeFaceVectorSaveDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AcsEmployeeFaceVectorSaveData property can only contain items of type \StructType\AcsEmployeeFaceVectorSaveData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AcsEmployeeFaceVectorSaveData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFaceVectorSaveData[] $acsEmployeeFaceVectorSaveData
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVectorSaveData
     */
    public function setAcsEmployeeFaceVectorSaveData(array $acsEmployeeFaceVectorSaveData = []): self
    {
        // validation for constraint: array
        if ('' !== ($acsEmployeeFaceVectorSaveDataArrayErrorMessage = self::validateAcsEmployeeFaceVectorSaveDataForArrayConstraintsFromSetAcsEmployeeFaceVectorSaveData($acsEmployeeFaceVectorSaveData))) {
            throw new InvalidArgumentException($acsEmployeeFaceVectorSaveDataArrayErrorMessage, __LINE__);
        }
        if (is_null($acsEmployeeFaceVectorSaveData) || (is_array($acsEmployeeFaceVectorSaveData) && empty($acsEmployeeFaceVectorSaveData))) {
            unset($this->AcsEmployeeFaceVectorSaveData);
        } else {
            $this->AcsEmployeeFaceVectorSaveData = $acsEmployeeFaceVectorSaveData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AcsEmployeeFaceVectorSaveData|null
     */
    public function current(): ?\StructType\AcsEmployeeFaceVectorSaveData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AcsEmployeeFaceVectorSaveData|null
     */
    public function item($index): ?\StructType\AcsEmployeeFaceVectorSaveData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AcsEmployeeFaceVectorSaveData|null
     */
    public function first(): ?\StructType\AcsEmployeeFaceVectorSaveData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AcsEmployeeFaceVectorSaveData|null
     */
    public function last(): ?\StructType\AcsEmployeeFaceVectorSaveData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AcsEmployeeFaceVectorSaveData|null
     */
    public function offsetGet($offset): ?\StructType\AcsEmployeeFaceVectorSaveData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AcsEmployeeFaceVectorSaveData $item
     * @return \ArrayType\ArrayOfAcsEmployeeFaceVectorSaveData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AcsEmployeeFaceVectorSaveData) {
            throw new InvalidArgumentException(sprintf('The AcsEmployeeFaceVectorSaveData property can only contain items of type \StructType\AcsEmployeeFaceVectorSaveData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AcsEmployeeFaceVectorSaveData
     */
    public function getAttributeName(): string
    {
        return 'AcsEmployeeFaceVectorSaveData';
    }
}
