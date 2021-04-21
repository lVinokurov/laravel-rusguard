<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfISS_Driver_SlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfISS_Driver_SlimInfo
 * @subpackage Arrays
 */
class ArrayOfISS_Driver_SlimInfo extends AbstractStructArrayBase
{
    /**
     * The ISS_Driver_SlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_Driver_SlimInfo[]
     */
    protected array $ISS_Driver_SlimInfo = [];
    /**
     * Constructor method for ArrayOfISS_Driver_SlimInfo
     * @uses ArrayOfISS_Driver_SlimInfo::setISS_Driver_SlimInfo()
     * @param \StructType\ISS_Driver_SlimInfo[] $iSS_Driver_SlimInfo
     */
    public function __construct(array $iSS_Driver_SlimInfo = [])
    {
        $this
            ->setISS_Driver_SlimInfo($iSS_Driver_SlimInfo);
    }
    /**
     * Get ISS_Driver_SlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_Driver_SlimInfo[]
     */
    public function getISS_Driver_SlimInfo(): ?array
    {
        return isset($this->ISS_Driver_SlimInfo) ? $this->ISS_Driver_SlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setISS_Driver_SlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setISS_Driver_SlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateISS_Driver_SlimInfoForArrayConstraintsFromSetISS_Driver_SlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfISS_Driver_SlimInfoISS_Driver_SlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfISS_Driver_SlimInfoISS_Driver_SlimInfoItem instanceof \StructType\ISS_Driver_SlimInfo) {
                $invalidValues[] = is_object($arrayOfISS_Driver_SlimInfoISS_Driver_SlimInfoItem) ? get_class($arrayOfISS_Driver_SlimInfoISS_Driver_SlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfISS_Driver_SlimInfoISS_Driver_SlimInfoItem), var_export($arrayOfISS_Driver_SlimInfoISS_Driver_SlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ISS_Driver_SlimInfo property can only contain items of type \StructType\ISS_Driver_SlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ISS_Driver_SlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Driver_SlimInfo[] $iSS_Driver_SlimInfo
     * @return \ArrayType\ArrayOfISS_Driver_SlimInfo
     */
    public function setISS_Driver_SlimInfo(array $iSS_Driver_SlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($iSS_Driver_SlimInfoArrayErrorMessage = self::validateISS_Driver_SlimInfoForArrayConstraintsFromSetISS_Driver_SlimInfo($iSS_Driver_SlimInfo))) {
            throw new InvalidArgumentException($iSS_Driver_SlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($iSS_Driver_SlimInfo) || (is_array($iSS_Driver_SlimInfo) && empty($iSS_Driver_SlimInfo))) {
            unset($this->ISS_Driver_SlimInfo);
        } else {
            $this->ISS_Driver_SlimInfo = $iSS_Driver_SlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ISS_Driver_SlimInfo|null
     */
    public function current(): ?\StructType\ISS_Driver_SlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ISS_Driver_SlimInfo|null
     */
    public function item($index): ?\StructType\ISS_Driver_SlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ISS_Driver_SlimInfo|null
     */
    public function first(): ?\StructType\ISS_Driver_SlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ISS_Driver_SlimInfo|null
     */
    public function last(): ?\StructType\ISS_Driver_SlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ISS_Driver_SlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ISS_Driver_SlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Driver_SlimInfo $item
     * @return \ArrayType\ArrayOfISS_Driver_SlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ISS_Driver_SlimInfo) {
            throw new InvalidArgumentException(sprintf('The ISS_Driver_SlimInfo property can only contain items of type \StructType\ISS_Driver_SlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ISS_Driver_SlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ISS_Driver_SlimInfo';
    }
}
