<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfPhotoidentificationPersonalData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfPhotoidentificationPersonalData
 * @subpackage Arrays
 */
class ArrayOfPhotoidentificationPersonalData extends AbstractStructArrayBase
{
    /**
     * The PhotoidentificationPersonalData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\PhotoidentificationPersonalData[]
     */
    protected array $PhotoidentificationPersonalData = [];
    /**
     * Constructor method for ArrayOfPhotoidentificationPersonalData
     * @uses ArrayOfPhotoidentificationPersonalData::setPhotoidentificationPersonalData()
     * @param \StructType\PhotoidentificationPersonalData[] $photoidentificationPersonalData
     */
    public function __construct(array $photoidentificationPersonalData = [])
    {
        $this
            ->setPhotoidentificationPersonalData($photoidentificationPersonalData);
    }
    /**
     * Get PhotoidentificationPersonalData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\PhotoidentificationPersonalData[]
     */
    public function getPhotoidentificationPersonalData(): ?array
    {
        return isset($this->PhotoidentificationPersonalData) ? $this->PhotoidentificationPersonalData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setPhotoidentificationPersonalData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPhotoidentificationPersonalData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePhotoidentificationPersonalDataForArrayConstraintsFromSetPhotoidentificationPersonalData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfPhotoidentificationPersonalDataPhotoidentificationPersonalDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfPhotoidentificationPersonalDataPhotoidentificationPersonalDataItem instanceof \StructType\PhotoidentificationPersonalData) {
                $invalidValues[] = is_object($arrayOfPhotoidentificationPersonalDataPhotoidentificationPersonalDataItem) ? get_class($arrayOfPhotoidentificationPersonalDataPhotoidentificationPersonalDataItem) : sprintf('%s(%s)', gettype($arrayOfPhotoidentificationPersonalDataPhotoidentificationPersonalDataItem), var_export($arrayOfPhotoidentificationPersonalDataPhotoidentificationPersonalDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PhotoidentificationPersonalData property can only contain items of type \StructType\PhotoidentificationPersonalData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PhotoidentificationPersonalData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\PhotoidentificationPersonalData[] $photoidentificationPersonalData
     * @return \ArrayType\ArrayOfPhotoidentificationPersonalData
     */
    public function setPhotoidentificationPersonalData(array $photoidentificationPersonalData = []): self
    {
        // validation for constraint: array
        if ('' !== ($photoidentificationPersonalDataArrayErrorMessage = self::validatePhotoidentificationPersonalDataForArrayConstraintsFromSetPhotoidentificationPersonalData($photoidentificationPersonalData))) {
            throw new InvalidArgumentException($photoidentificationPersonalDataArrayErrorMessage, __LINE__);
        }
        if (is_null($photoidentificationPersonalData) || (is_array($photoidentificationPersonalData) && empty($photoidentificationPersonalData))) {
            unset($this->PhotoidentificationPersonalData);
        } else {
            $this->PhotoidentificationPersonalData = $photoidentificationPersonalData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\PhotoidentificationPersonalData|null
     */
    public function current(): ?\StructType\PhotoidentificationPersonalData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\PhotoidentificationPersonalData|null
     */
    public function item($index): ?\StructType\PhotoidentificationPersonalData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\PhotoidentificationPersonalData|null
     */
    public function first(): ?\StructType\PhotoidentificationPersonalData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\PhotoidentificationPersonalData|null
     */
    public function last(): ?\StructType\PhotoidentificationPersonalData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\PhotoidentificationPersonalData|null
     */
    public function offsetGet($offset): ?\StructType\PhotoidentificationPersonalData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\PhotoidentificationPersonalData $item
     * @return \ArrayType\ArrayOfPhotoidentificationPersonalData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\PhotoidentificationPersonalData) {
            throw new InvalidArgumentException(sprintf('The PhotoidentificationPersonalData property can only contain items of type \StructType\PhotoidentificationPersonalData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string PhotoidentificationPersonalData
     */
    public function getAttributeName(): string
    {
        return 'PhotoidentificationPersonalData';
    }
}
