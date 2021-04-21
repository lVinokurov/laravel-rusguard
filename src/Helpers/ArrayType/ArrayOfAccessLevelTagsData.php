<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAccessLevelTagsData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAccessLevelTagsData
 * @subpackage Arrays
 */
class ArrayOfAccessLevelTagsData extends AbstractStructArrayBase
{
    /**
     * The AccessLevelTagsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AccessLevelTagsData[]
     */
    protected array $AccessLevelTagsData = [];
    /**
     * Constructor method for ArrayOfAccessLevelTagsData
     * @uses ArrayOfAccessLevelTagsData::setAccessLevelTagsData()
     * @param \StructType\AccessLevelTagsData[] $accessLevelTagsData
     */
    public function __construct(array $accessLevelTagsData = [])
    {
        $this
            ->setAccessLevelTagsData($accessLevelTagsData);
    }
    /**
     * Get AccessLevelTagsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AccessLevelTagsData[]
     */
    public function getAccessLevelTagsData(): ?array
    {
        return isset($this->AccessLevelTagsData) ? $this->AccessLevelTagsData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAccessLevelTagsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccessLevelTagsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccessLevelTagsDataForArrayConstraintsFromSetAccessLevelTagsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAccessLevelTagsDataAccessLevelTagsDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfAccessLevelTagsDataAccessLevelTagsDataItem instanceof \StructType\AccessLevelTagsData) {
                $invalidValues[] = is_object($arrayOfAccessLevelTagsDataAccessLevelTagsDataItem) ? get_class($arrayOfAccessLevelTagsDataAccessLevelTagsDataItem) : sprintf('%s(%s)', gettype($arrayOfAccessLevelTagsDataAccessLevelTagsDataItem), var_export($arrayOfAccessLevelTagsDataAccessLevelTagsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccessLevelTagsData property can only contain items of type \StructType\AccessLevelTagsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccessLevelTagsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AccessLevelTagsData[] $accessLevelTagsData
     * @return \ArrayType\ArrayOfAccessLevelTagsData
     */
    public function setAccessLevelTagsData(array $accessLevelTagsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($accessLevelTagsDataArrayErrorMessage = self::validateAccessLevelTagsDataForArrayConstraintsFromSetAccessLevelTagsData($accessLevelTagsData))) {
            throw new InvalidArgumentException($accessLevelTagsDataArrayErrorMessage, __LINE__);
        }
        if (is_null($accessLevelTagsData) || (is_array($accessLevelTagsData) && empty($accessLevelTagsData))) {
            unset($this->AccessLevelTagsData);
        } else {
            $this->AccessLevelTagsData = $accessLevelTagsData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AccessLevelTagsData|null
     */
    public function current(): ?\StructType\AccessLevelTagsData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AccessLevelTagsData|null
     */
    public function item($index): ?\StructType\AccessLevelTagsData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AccessLevelTagsData|null
     */
    public function first(): ?\StructType\AccessLevelTagsData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AccessLevelTagsData|null
     */
    public function last(): ?\StructType\AccessLevelTagsData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AccessLevelTagsData|null
     */
    public function offsetGet($offset): ?\StructType\AccessLevelTagsData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AccessLevelTagsData $item
     * @return \ArrayType\ArrayOfAccessLevelTagsData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AccessLevelTagsData) {
            throw new InvalidArgumentException(sprintf('The AccessLevelTagsData property can only contain items of type \StructType\AccessLevelTagsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AccessLevelTagsData
     */
    public function getAttributeName(): string
    {
        return 'AccessLevelTagsData';
    }
}
