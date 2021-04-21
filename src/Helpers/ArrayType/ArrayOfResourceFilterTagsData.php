<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResourceFilterTagsData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfResourceFilterTagsData
 * @subpackage Arrays
 */
class ArrayOfResourceFilterTagsData extends AbstractStructArrayBase
{
    /**
     * The ResourceFilterTagsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ResourceFilterTagsData[]
     */
    protected array $ResourceFilterTagsData = [];
    /**
     * Constructor method for ArrayOfResourceFilterTagsData
     * @uses ArrayOfResourceFilterTagsData::setResourceFilterTagsData()
     * @param \StructType\ResourceFilterTagsData[] $resourceFilterTagsData
     */
    public function __construct(array $resourceFilterTagsData = [])
    {
        $this
            ->setResourceFilterTagsData($resourceFilterTagsData);
    }
    /**
     * Get ResourceFilterTagsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ResourceFilterTagsData[]
     */
    public function getResourceFilterTagsData(): ?array
    {
        return isset($this->ResourceFilterTagsData) ? $this->ResourceFilterTagsData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResourceFilterTagsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResourceFilterTagsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResourceFilterTagsDataForArrayConstraintsFromSetResourceFilterTagsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResourceFilterTagsDataResourceFilterTagsDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfResourceFilterTagsDataResourceFilterTagsDataItem instanceof \StructType\ResourceFilterTagsData) {
                $invalidValues[] = is_object($arrayOfResourceFilterTagsDataResourceFilterTagsDataItem) ? get_class($arrayOfResourceFilterTagsDataResourceFilterTagsDataItem) : sprintf('%s(%s)', gettype($arrayOfResourceFilterTagsDataResourceFilterTagsDataItem), var_export($arrayOfResourceFilterTagsDataResourceFilterTagsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResourceFilterTagsData property can only contain items of type \StructType\ResourceFilterTagsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ResourceFilterTagsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ResourceFilterTagsData[] $resourceFilterTagsData
     * @return \ArrayType\ArrayOfResourceFilterTagsData
     */
    public function setResourceFilterTagsData(array $resourceFilterTagsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($resourceFilterTagsDataArrayErrorMessage = self::validateResourceFilterTagsDataForArrayConstraintsFromSetResourceFilterTagsData($resourceFilterTagsData))) {
            throw new InvalidArgumentException($resourceFilterTagsDataArrayErrorMessage, __LINE__);
        }
        if (is_null($resourceFilterTagsData) || (is_array($resourceFilterTagsData) && empty($resourceFilterTagsData))) {
            unset($this->ResourceFilterTagsData);
        } else {
            $this->ResourceFilterTagsData = $resourceFilterTagsData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ResourceFilterTagsData|null
     */
    public function current(): ?\StructType\ResourceFilterTagsData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ResourceFilterTagsData|null
     */
    public function item($index): ?\StructType\ResourceFilterTagsData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ResourceFilterTagsData|null
     */
    public function first(): ?\StructType\ResourceFilterTagsData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ResourceFilterTagsData|null
     */
    public function last(): ?\StructType\ResourceFilterTagsData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ResourceFilterTagsData|null
     */
    public function offsetGet($offset): ?\StructType\ResourceFilterTagsData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ResourceFilterTagsData $item
     * @return \ArrayType\ArrayOfResourceFilterTagsData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResourceFilterTagsData) {
            throw new InvalidArgumentException(sprintf('The ResourceFilterTagsData property can only contain items of type \StructType\ResourceFilterTagsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ResourceFilterTagsData
     */
    public function getAttributeName(): string
    {
        return 'ResourceFilterTagsData';
    }
}
