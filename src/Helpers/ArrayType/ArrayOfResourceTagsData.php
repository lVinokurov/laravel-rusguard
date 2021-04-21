<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfResourceTagsData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfResourceTagsData
 * @subpackage Arrays
 */
class ArrayOfResourceTagsData extends AbstractStructArrayBase
{
    /**
     * The ResourceTagsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ResourceTagsData[]
     */
    protected array $ResourceTagsData = [];
    /**
     * Constructor method for ArrayOfResourceTagsData
     * @uses ArrayOfResourceTagsData::setResourceTagsData()
     * @param \StructType\ResourceTagsData[] $resourceTagsData
     */
    public function __construct(array $resourceTagsData = [])
    {
        $this
            ->setResourceTagsData($resourceTagsData);
    }
    /**
     * Get ResourceTagsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ResourceTagsData[]
     */
    public function getResourceTagsData(): ?array
    {
        return isset($this->ResourceTagsData) ? $this->ResourceTagsData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setResourceTagsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setResourceTagsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateResourceTagsDataForArrayConstraintsFromSetResourceTagsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfResourceTagsDataResourceTagsDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfResourceTagsDataResourceTagsDataItem instanceof \StructType\ResourceTagsData) {
                $invalidValues[] = is_object($arrayOfResourceTagsDataResourceTagsDataItem) ? get_class($arrayOfResourceTagsDataResourceTagsDataItem) : sprintf('%s(%s)', gettype($arrayOfResourceTagsDataResourceTagsDataItem), var_export($arrayOfResourceTagsDataResourceTagsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ResourceTagsData property can only contain items of type \StructType\ResourceTagsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ResourceTagsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ResourceTagsData[] $resourceTagsData
     * @return \ArrayType\ArrayOfResourceTagsData
     */
    public function setResourceTagsData(array $resourceTagsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($resourceTagsDataArrayErrorMessage = self::validateResourceTagsDataForArrayConstraintsFromSetResourceTagsData($resourceTagsData))) {
            throw new InvalidArgumentException($resourceTagsDataArrayErrorMessage, __LINE__);
        }
        if (is_null($resourceTagsData) || (is_array($resourceTagsData) && empty($resourceTagsData))) {
            unset($this->ResourceTagsData);
        } else {
            $this->ResourceTagsData = $resourceTagsData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ResourceTagsData|null
     */
    public function current(): ?\StructType\ResourceTagsData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ResourceTagsData|null
     */
    public function item($index): ?\StructType\ResourceTagsData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ResourceTagsData|null
     */
    public function first(): ?\StructType\ResourceTagsData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ResourceTagsData|null
     */
    public function last(): ?\StructType\ResourceTagsData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ResourceTagsData|null
     */
    public function offsetGet($offset): ?\StructType\ResourceTagsData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ResourceTagsData $item
     * @return \ArrayType\ArrayOfResourceTagsData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ResourceTagsData) {
            throw new InvalidArgumentException(sprintf('The ResourceTagsData property can only contain items of type \StructType\ResourceTagsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ResourceTagsData
     */
    public function getAttributeName(): string
    {
        return 'ResourceTagsData';
    }
}
