<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfISS_Slave_SlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfISS_Slave_SlimInfo
 * @subpackage Arrays
 */
class ArrayOfISS_Slave_SlimInfo extends AbstractStructArrayBase
{
    /**
     * The ISS_Slave_SlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_Slave_SlimInfo[]
     */
    protected array $ISS_Slave_SlimInfo = [];
    /**
     * Constructor method for ArrayOfISS_Slave_SlimInfo
     * @uses ArrayOfISS_Slave_SlimInfo::setISS_Slave_SlimInfo()
     * @param \StructType\ISS_Slave_SlimInfo[] $iSS_Slave_SlimInfo
     */
    public function __construct(array $iSS_Slave_SlimInfo = [])
    {
        $this
            ->setISS_Slave_SlimInfo($iSS_Slave_SlimInfo);
    }
    /**
     * Get ISS_Slave_SlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_Slave_SlimInfo[]
     */
    public function getISS_Slave_SlimInfo(): ?array
    {
        return isset($this->ISS_Slave_SlimInfo) ? $this->ISS_Slave_SlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setISS_Slave_SlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setISS_Slave_SlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateISS_Slave_SlimInfoForArrayConstraintsFromSetISS_Slave_SlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfISS_Slave_SlimInfoISS_Slave_SlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfISS_Slave_SlimInfoISS_Slave_SlimInfoItem instanceof \StructType\ISS_Slave_SlimInfo) {
                $invalidValues[] = is_object($arrayOfISS_Slave_SlimInfoISS_Slave_SlimInfoItem) ? get_class($arrayOfISS_Slave_SlimInfoISS_Slave_SlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfISS_Slave_SlimInfoISS_Slave_SlimInfoItem), var_export($arrayOfISS_Slave_SlimInfoISS_Slave_SlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ISS_Slave_SlimInfo property can only contain items of type \StructType\ISS_Slave_SlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ISS_Slave_SlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Slave_SlimInfo[] $iSS_Slave_SlimInfo
     * @return \ArrayType\ArrayOfISS_Slave_SlimInfo
     */
    public function setISS_Slave_SlimInfo(array $iSS_Slave_SlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($iSS_Slave_SlimInfoArrayErrorMessage = self::validateISS_Slave_SlimInfoForArrayConstraintsFromSetISS_Slave_SlimInfo($iSS_Slave_SlimInfo))) {
            throw new InvalidArgumentException($iSS_Slave_SlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($iSS_Slave_SlimInfo) || (is_array($iSS_Slave_SlimInfo) && empty($iSS_Slave_SlimInfo))) {
            unset($this->ISS_Slave_SlimInfo);
        } else {
            $this->ISS_Slave_SlimInfo = $iSS_Slave_SlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ISS_Slave_SlimInfo|null
     */
    public function current(): ?\StructType\ISS_Slave_SlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ISS_Slave_SlimInfo|null
     */
    public function item($index): ?\StructType\ISS_Slave_SlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ISS_Slave_SlimInfo|null
     */
    public function first(): ?\StructType\ISS_Slave_SlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ISS_Slave_SlimInfo|null
     */
    public function last(): ?\StructType\ISS_Slave_SlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ISS_Slave_SlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ISS_Slave_SlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Slave_SlimInfo $item
     * @return \ArrayType\ArrayOfISS_Slave_SlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ISS_Slave_SlimInfo) {
            throw new InvalidArgumentException(sprintf('The ISS_Slave_SlimInfo property can only contain items of type \StructType\ISS_Slave_SlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ISS_Slave_SlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ISS_Slave_SlimInfo';
    }
}
