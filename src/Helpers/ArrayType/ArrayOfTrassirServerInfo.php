<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfTrassirServerInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfTrassirServerInfo
 * @subpackage Arrays
 */
class ArrayOfTrassirServerInfo extends AbstractStructArrayBase
{
    /**
     * The TrassirServerInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\TrassirServerInfo[]
     */
    protected array $TrassirServerInfo = [];
    /**
     * Constructor method for ArrayOfTrassirServerInfo
     * @uses ArrayOfTrassirServerInfo::setTrassirServerInfo()
     * @param \StructType\TrassirServerInfo[] $trassirServerInfo
     */
    public function __construct(array $trassirServerInfo = [])
    {
        $this
            ->setTrassirServerInfo($trassirServerInfo);
    }
    /**
     * Get TrassirServerInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\TrassirServerInfo[]
     */
    public function getTrassirServerInfo(): ?array
    {
        return isset($this->TrassirServerInfo) ? $this->TrassirServerInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setTrassirServerInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTrassirServerInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTrassirServerInfoForArrayConstraintsFromSetTrassirServerInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfTrassirServerInfoTrassirServerInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfTrassirServerInfoTrassirServerInfoItem instanceof \StructType\TrassirServerInfo) {
                $invalidValues[] = is_object($arrayOfTrassirServerInfoTrassirServerInfoItem) ? get_class($arrayOfTrassirServerInfoTrassirServerInfoItem) : sprintf('%s(%s)', gettype($arrayOfTrassirServerInfoTrassirServerInfoItem), var_export($arrayOfTrassirServerInfoTrassirServerInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TrassirServerInfo property can only contain items of type \StructType\TrassirServerInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TrassirServerInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\TrassirServerInfo[] $trassirServerInfo
     * @return \ArrayType\ArrayOfTrassirServerInfo
     */
    public function setTrassirServerInfo(array $trassirServerInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($trassirServerInfoArrayErrorMessage = self::validateTrassirServerInfoForArrayConstraintsFromSetTrassirServerInfo($trassirServerInfo))) {
            throw new InvalidArgumentException($trassirServerInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($trassirServerInfo) || (is_array($trassirServerInfo) && empty($trassirServerInfo))) {
            unset($this->TrassirServerInfo);
        } else {
            $this->TrassirServerInfo = $trassirServerInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\TrassirServerInfo|null
     */
    public function current(): ?\StructType\TrassirServerInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\TrassirServerInfo|null
     */
    public function item($index): ?\StructType\TrassirServerInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\TrassirServerInfo|null
     */
    public function first(): ?\StructType\TrassirServerInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\TrassirServerInfo|null
     */
    public function last(): ?\StructType\TrassirServerInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\TrassirServerInfo|null
     */
    public function offsetGet($offset): ?\StructType\TrassirServerInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\TrassirServerInfo $item
     * @return \ArrayType\ArrayOfTrassirServerInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\TrassirServerInfo) {
            throw new InvalidArgumentException(sprintf('The TrassirServerInfo property can only contain items of type \StructType\TrassirServerInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string TrassirServerInfo
     */
    public function getAttributeName(): string
    {
        return 'TrassirServerInfo';
    }
}
