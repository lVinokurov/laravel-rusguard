<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfMapInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfMapInfo
 * @subpackage Arrays
 */
class ArrayOfMapInfo extends AbstractStructArrayBase
{
    /**
     * The MapInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\MapInfo[]
     */
    protected array $MapInfo = [];
    /**
     * Constructor method for ArrayOfMapInfo
     * @uses ArrayOfMapInfo::setMapInfo()
     * @param \StructType\MapInfo[] $mapInfo
     */
    public function __construct(array $mapInfo = [])
    {
        $this
            ->setMapInfo($mapInfo);
    }
    /**
     * Get MapInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\MapInfo[]
     */
    public function getMapInfo(): ?array
    {
        return isset($this->MapInfo) ? $this->MapInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setMapInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMapInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMapInfoForArrayConstraintsFromSetMapInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfMapInfoMapInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfMapInfoMapInfoItem instanceof \StructType\MapInfo) {
                $invalidValues[] = is_object($arrayOfMapInfoMapInfoItem) ? get_class($arrayOfMapInfoMapInfoItem) : sprintf('%s(%s)', gettype($arrayOfMapInfoMapInfoItem), var_export($arrayOfMapInfoMapInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MapInfo property can only contain items of type \StructType\MapInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MapInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\MapInfo[] $mapInfo
     * @return \ArrayType\ArrayOfMapInfo
     */
    public function setMapInfo(array $mapInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($mapInfoArrayErrorMessage = self::validateMapInfoForArrayConstraintsFromSetMapInfo($mapInfo))) {
            throw new InvalidArgumentException($mapInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($mapInfo) || (is_array($mapInfo) && empty($mapInfo))) {
            unset($this->MapInfo);
        } else {
            $this->MapInfo = $mapInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\MapInfo|null
     */
    public function current(): ?\StructType\MapInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\MapInfo|null
     */
    public function item($index): ?\StructType\MapInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\MapInfo|null
     */
    public function first(): ?\StructType\MapInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\MapInfo|null
     */
    public function last(): ?\StructType\MapInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\MapInfo|null
     */
    public function offsetGet($offset): ?\StructType\MapInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\MapInfo $item
     * @return \ArrayType\ArrayOfMapInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\MapInfo) {
            throw new InvalidArgumentException(sprintf('The MapInfo property can only contain items of type \StructType\MapInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string MapInfo
     */
    public function getAttributeName(): string
    {
        return 'MapInfo';
    }
}
