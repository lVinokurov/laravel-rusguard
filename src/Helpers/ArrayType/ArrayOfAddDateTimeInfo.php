<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfAddDateTimeInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfAddDateTimeInfo
 * @subpackage Arrays
 */
class ArrayOfAddDateTimeInfo extends AbstractStructArrayBase
{
    /**
     * The AddDateTimeInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\AddDateTimeInfo[]
     */
    protected array $AddDateTimeInfo = [];
    /**
     * Constructor method for ArrayOfAddDateTimeInfo
     * @uses ArrayOfAddDateTimeInfo::setAddDateTimeInfo()
     * @param \StructType\AddDateTimeInfo[] $addDateTimeInfo
     */
    public function __construct(array $addDateTimeInfo = [])
    {
        $this
            ->setAddDateTimeInfo($addDateTimeInfo);
    }
    /**
     * Get AddDateTimeInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\AddDateTimeInfo[]
     */
    public function getAddDateTimeInfo(): ?array
    {
        return isset($this->AddDateTimeInfo) ? $this->AddDateTimeInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setAddDateTimeInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAddDateTimeInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAddDateTimeInfoForArrayConstraintsFromSetAddDateTimeInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfAddDateTimeInfoAddDateTimeInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfAddDateTimeInfoAddDateTimeInfoItem instanceof \StructType\AddDateTimeInfo) {
                $invalidValues[] = is_object($arrayOfAddDateTimeInfoAddDateTimeInfoItem) ? get_class($arrayOfAddDateTimeInfoAddDateTimeInfoItem) : sprintf('%s(%s)', gettype($arrayOfAddDateTimeInfoAddDateTimeInfoItem), var_export($arrayOfAddDateTimeInfoAddDateTimeInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AddDateTimeInfo property can only contain items of type \StructType\AddDateTimeInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AddDateTimeInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\AddDateTimeInfo[] $addDateTimeInfo
     * @return \ArrayType\ArrayOfAddDateTimeInfo
     */
    public function setAddDateTimeInfo(array $addDateTimeInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($addDateTimeInfoArrayErrorMessage = self::validateAddDateTimeInfoForArrayConstraintsFromSetAddDateTimeInfo($addDateTimeInfo))) {
            throw new InvalidArgumentException($addDateTimeInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($addDateTimeInfo) || (is_array($addDateTimeInfo) && empty($addDateTimeInfo))) {
            unset($this->AddDateTimeInfo);
        } else {
            $this->AddDateTimeInfo = $addDateTimeInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\AddDateTimeInfo|null
     */
    public function current(): ?\StructType\AddDateTimeInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\AddDateTimeInfo|null
     */
    public function item($index): ?\StructType\AddDateTimeInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\AddDateTimeInfo|null
     */
    public function first(): ?\StructType\AddDateTimeInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\AddDateTimeInfo|null
     */
    public function last(): ?\StructType\AddDateTimeInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\AddDateTimeInfo|null
     */
    public function offsetGet($offset): ?\StructType\AddDateTimeInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\AddDateTimeInfo $item
     * @return \ArrayType\ArrayOfAddDateTimeInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AddDateTimeInfo) {
            throw new InvalidArgumentException(sprintf('The AddDateTimeInfo property can only contain items of type \StructType\AddDateTimeInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string AddDateTimeInfo
     */
    public function getAttributeName(): string
    {
        return 'AddDateTimeInfo';
    }
}
