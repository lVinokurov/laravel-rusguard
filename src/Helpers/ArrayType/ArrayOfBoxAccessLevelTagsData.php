<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfBoxAccessLevelTagsData ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfBoxAccessLevelTagsData
 * @subpackage Arrays
 */
class ArrayOfBoxAccessLevelTagsData extends AbstractStructArrayBase
{
    /**
     * The BoxAccessLevelTagsData
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\BoxAccessLevelTagsData[]
     */
    protected array $BoxAccessLevelTagsData = [];
    /**
     * Constructor method for ArrayOfBoxAccessLevelTagsData
     * @uses ArrayOfBoxAccessLevelTagsData::setBoxAccessLevelTagsData()
     * @param \StructType\BoxAccessLevelTagsData[] $boxAccessLevelTagsData
     */
    public function __construct(array $boxAccessLevelTagsData = [])
    {
        $this
            ->setBoxAccessLevelTagsData($boxAccessLevelTagsData);
    }
    /**
     * Get BoxAccessLevelTagsData value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\BoxAccessLevelTagsData[]
     */
    public function getBoxAccessLevelTagsData(): ?array
    {
        return isset($this->BoxAccessLevelTagsData) ? $this->BoxAccessLevelTagsData : null;
    }
    /**
     * This method is responsible for validating the values passed to the setBoxAccessLevelTagsData method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBoxAccessLevelTagsData method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBoxAccessLevelTagsDataForArrayConstraintsFromSetBoxAccessLevelTagsData(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfBoxAccessLevelTagsDataBoxAccessLevelTagsDataItem) {
            // validation for constraint: itemType
            if (!$arrayOfBoxAccessLevelTagsDataBoxAccessLevelTagsDataItem instanceof \StructType\BoxAccessLevelTagsData) {
                $invalidValues[] = is_object($arrayOfBoxAccessLevelTagsDataBoxAccessLevelTagsDataItem) ? get_class($arrayOfBoxAccessLevelTagsDataBoxAccessLevelTagsDataItem) : sprintf('%s(%s)', gettype($arrayOfBoxAccessLevelTagsDataBoxAccessLevelTagsDataItem), var_export($arrayOfBoxAccessLevelTagsDataBoxAccessLevelTagsDataItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BoxAccessLevelTagsData property can only contain items of type \StructType\BoxAccessLevelTagsData, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BoxAccessLevelTagsData value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\BoxAccessLevelTagsData[] $boxAccessLevelTagsData
     * @return \ArrayType\ArrayOfBoxAccessLevelTagsData
     */
    public function setBoxAccessLevelTagsData(array $boxAccessLevelTagsData = []): self
    {
        // validation for constraint: array
        if ('' !== ($boxAccessLevelTagsDataArrayErrorMessage = self::validateBoxAccessLevelTagsDataForArrayConstraintsFromSetBoxAccessLevelTagsData($boxAccessLevelTagsData))) {
            throw new InvalidArgumentException($boxAccessLevelTagsDataArrayErrorMessage, __LINE__);
        }
        if (is_null($boxAccessLevelTagsData) || (is_array($boxAccessLevelTagsData) && empty($boxAccessLevelTagsData))) {
            unset($this->BoxAccessLevelTagsData);
        } else {
            $this->BoxAccessLevelTagsData = $boxAccessLevelTagsData;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\BoxAccessLevelTagsData|null
     */
    public function current(): ?\StructType\BoxAccessLevelTagsData
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\BoxAccessLevelTagsData|null
     */
    public function item($index): ?\StructType\BoxAccessLevelTagsData
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\BoxAccessLevelTagsData|null
     */
    public function first(): ?\StructType\BoxAccessLevelTagsData
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\BoxAccessLevelTagsData|null
     */
    public function last(): ?\StructType\BoxAccessLevelTagsData
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\BoxAccessLevelTagsData|null
     */
    public function offsetGet($offset): ?\StructType\BoxAccessLevelTagsData
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\BoxAccessLevelTagsData $item
     * @return \ArrayType\ArrayOfBoxAccessLevelTagsData
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\BoxAccessLevelTagsData) {
            throw new InvalidArgumentException(sprintf('The BoxAccessLevelTagsData property can only contain items of type \StructType\BoxAccessLevelTagsData, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string BoxAccessLevelTagsData
     */
    public function getAttributeName(): string
    {
        return 'BoxAccessLevelTagsData';
    }
}
