<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMifareProfileTagsData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMifareProfileTagsData
 * @subpackage Arrays
 */
class ArrayOfMifareProfileTagsData extends AbstractStructArrayBase
{
    /**
     * The MifareProfileTagsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MifareProfileTagsData[]
     */
    protected array $MifareProfileTagsData = [];
    /**
     * Constructor method for ArrayOfMifareProfileTagsData
     * @uses ArrayOfMifareProfileTagsData::setMifareProfileTagsData()
     * @param \StructType\MifareProfileTagsData[] $mifareProfileTagsData
     */
    public function __construct(array $mifareProfileTagsData = [])
    {
        $this
            ->setMifareProfileTagsData($mifareProfileTagsData);
    }
    /**
     * Get MifareProfileTagsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MifareProfileTagsData[]
     */
    public function getMifareProfileTagsData(): ?array
    {
        return isset($this->MifareProfileTagsData) ? $this->MifareProfileTagsData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMifareProfileTagsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMifareProfileTagsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMifareProfileTagsDataForArrayConstraintsFromSetMifareProfileTagsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMifareProfileTagsDataMifareProfileTagsDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfMifareProfileTagsDataMifareProfileTagsDataItem instanceof \StructType\MifareProfileTagsData) {
                $invalidValues[] = is_object($arrayOfMifareProfileTagsDataMifareProfileTagsDataItem) ? get_class($arrayOfMifareProfileTagsDataMifareProfileTagsDataItem) : sprintf('%s(%s)', gettype($arrayOfMifareProfileTagsDataMifareProfileTagsDataItem), var_export($arrayOfMifareProfileTagsDataMifareProfileTagsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MifareProfileTagsData property can only contain items of type \StructType\MifareProfileTagsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MifareProfileTagsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\MifareProfileTagsData[] $mifareProfileTagsData
     * @return \ArrayType\ArrayOfMifareProfileTagsData
     */
    public function setMifareProfileTagsData(array $mifareProfileTagsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($mifareProfileTagsDataArrayErrorMessage = self::validateMifareProfileTagsDataForArrayConstraintsFromSetMifareProfileTagsData($mifareProfileTagsData))) {
            throw new InvalidArgumentException($mifareProfileTagsDataArrayErrorMessage, __LINE__);
        }
        if (is_null($mifareProfileTagsData) || (is_array($mifareProfileTagsData) && empty($mifareProfileTagsData))) {
            unset($this->MifareProfileTagsData);
        } else {
            $this->MifareProfileTagsData = $mifareProfileTagsData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\MifareProfileTagsData|null
     */
    public function current(): ?\StructType\MifareProfileTagsData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\MifareProfileTagsData|null
     */
    public function item($index): ?\StructType\MifareProfileTagsData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\MifareProfileTagsData|null
     */
    public function first(): ?\StructType\MifareProfileTagsData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\MifareProfileTagsData|null
     */
    public function last(): ?\StructType\MifareProfileTagsData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\MifareProfileTagsData|null
     */
    public function offsetGet($offset): ?\StructType\MifareProfileTagsData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\MifareProfileTagsData $item
     * @return \ArrayType\ArrayOfMifareProfileTagsData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MifareProfileTagsData) {
            throw new InvalidArgumentException(sprintf('The MifareProfileTagsData property can only contain items of type \StructType\MifareProfileTagsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MifareProfileTagsData
     */
    public function getAttributeName(): string
    {
        return 'MifareProfileTagsData';
    }
}
