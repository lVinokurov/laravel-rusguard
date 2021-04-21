<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTrassirChannelInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTrassirChannelInfo
 * @subpackage Arrays
 */
class ArrayOfTrassirChannelInfo extends AbstractStructArrayBase
{
    /**
     * The TrassirChannelInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TrassirChannelInfo[]
     */
    protected array $TrassirChannelInfo = [];
    /**
     * Constructor method for ArrayOfTrassirChannelInfo
     * @uses ArrayOfTrassirChannelInfo::setTrassirChannelInfo()
     * @param \StructType\TrassirChannelInfo[] $trassirChannelInfo
     */
    public function __construct(array $trassirChannelInfo = [])
    {
        $this
            ->setTrassirChannelInfo($trassirChannelInfo);
    }
    /**
     * Get TrassirChannelInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TrassirChannelInfo[]
     */
    public function getTrassirChannelInfo(): ?array
    {
        return isset($this->TrassirChannelInfo) ? $this->TrassirChannelInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTrassirChannelInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrassirChannelInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrassirChannelInfoForArrayConstraintsFromSetTrassirChannelInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrassirChannelInfoTrassirChannelInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTrassirChannelInfoTrassirChannelInfoItem instanceof \StructType\TrassirChannelInfo) {
                $invalidValues[] = is_object($arrayOfTrassirChannelInfoTrassirChannelInfoItem) ? get_class($arrayOfTrassirChannelInfoTrassirChannelInfoItem) : sprintf('%s(%s)', gettype($arrayOfTrassirChannelInfoTrassirChannelInfoItem), var_export($arrayOfTrassirChannelInfoTrassirChannelInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TrassirChannelInfo property can only contain items of type \StructType\TrassirChannelInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TrassirChannelInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\TrassirChannelInfo[] $trassirChannelInfo
     * @return \ArrayType\ArrayOfTrassirChannelInfo
     */
    public function setTrassirChannelInfo(array $trassirChannelInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($trassirChannelInfoArrayErrorMessage = self::validateTrassirChannelInfoForArrayConstraintsFromSetTrassirChannelInfo($trassirChannelInfo))) {
            throw new InvalidArgumentException($trassirChannelInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($trassirChannelInfo) || (is_array($trassirChannelInfo) && empty($trassirChannelInfo))) {
            unset($this->TrassirChannelInfo);
        } else {
            $this->TrassirChannelInfo = $trassirChannelInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TrassirChannelInfo|null
     */
    public function current(): ?\StructType\TrassirChannelInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TrassirChannelInfo|null
     */
    public function item($index): ?\StructType\TrassirChannelInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TrassirChannelInfo|null
     */
    public function first(): ?\StructType\TrassirChannelInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TrassirChannelInfo|null
     */
    public function last(): ?\StructType\TrassirChannelInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TrassirChannelInfo|null
     */
    public function offsetGet($offset): ?\StructType\TrassirChannelInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\TrassirChannelInfo $item
     * @return \ArrayType\ArrayOfTrassirChannelInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TrassirChannelInfo) {
            throw new InvalidArgumentException(sprintf('The TrassirChannelInfo property can only contain items of type \StructType\TrassirChannelInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TrassirChannelInfo
     */
    public function getAttributeName(): string
    {
        return 'TrassirChannelInfo';
    }
}
