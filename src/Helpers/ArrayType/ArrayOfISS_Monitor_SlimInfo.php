<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfISS_Monitor_SlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfISS_Monitor_SlimInfo
 * @subpackage Arrays
 */
class ArrayOfISS_Monitor_SlimInfo extends AbstractStructArrayBase
{
    /**
     * The ISS_Monitor_SlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_Monitor_SlimInfo[]
     */
    protected array $ISS_Monitor_SlimInfo = [];
    /**
     * Constructor method for ArrayOfISS_Monitor_SlimInfo
     * @uses ArrayOfISS_Monitor_SlimInfo::setISS_Monitor_SlimInfo()
     * @param \StructType\ISS_Monitor_SlimInfo[] $iSS_Monitor_SlimInfo
     */
    public function __construct(array $iSS_Monitor_SlimInfo = [])
    {
        $this
            ->setISS_Monitor_SlimInfo($iSS_Monitor_SlimInfo);
    }
    /**
     * Get ISS_Monitor_SlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_Monitor_SlimInfo[]
     */
    public function getISS_Monitor_SlimInfo(): ?array
    {
        return isset($this->ISS_Monitor_SlimInfo) ? $this->ISS_Monitor_SlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setISS_Monitor_SlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setISS_Monitor_SlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateISS_Monitor_SlimInfoForArrayConstraintsFromSetISS_Monitor_SlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfISS_Monitor_SlimInfoISS_Monitor_SlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfISS_Monitor_SlimInfoISS_Monitor_SlimInfoItem instanceof \StructType\ISS_Monitor_SlimInfo) {
                $invalidValues[] = is_object($arrayOfISS_Monitor_SlimInfoISS_Monitor_SlimInfoItem) ? get_class($arrayOfISS_Monitor_SlimInfoISS_Monitor_SlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfISS_Monitor_SlimInfoISS_Monitor_SlimInfoItem), var_export($arrayOfISS_Monitor_SlimInfoISS_Monitor_SlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ISS_Monitor_SlimInfo property can only contain items of type \StructType\ISS_Monitor_SlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ISS_Monitor_SlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Monitor_SlimInfo[] $iSS_Monitor_SlimInfo
     * @return \ArrayType\ArrayOfISS_Monitor_SlimInfo
     */
    public function setISS_Monitor_SlimInfo(array $iSS_Monitor_SlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($iSS_Monitor_SlimInfoArrayErrorMessage = self::validateISS_Monitor_SlimInfoForArrayConstraintsFromSetISS_Monitor_SlimInfo($iSS_Monitor_SlimInfo))) {
            throw new InvalidArgumentException($iSS_Monitor_SlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($iSS_Monitor_SlimInfo) || (is_array($iSS_Monitor_SlimInfo) && empty($iSS_Monitor_SlimInfo))) {
            unset($this->ISS_Monitor_SlimInfo);
        } else {
            $this->ISS_Monitor_SlimInfo = $iSS_Monitor_SlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ISS_Monitor_SlimInfo|null
     */
    public function current(): ?\StructType\ISS_Monitor_SlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ISS_Monitor_SlimInfo|null
     */
    public function item($index): ?\StructType\ISS_Monitor_SlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ISS_Monitor_SlimInfo|null
     */
    public function first(): ?\StructType\ISS_Monitor_SlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ISS_Monitor_SlimInfo|null
     */
    public function last(): ?\StructType\ISS_Monitor_SlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ISS_Monitor_SlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ISS_Monitor_SlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Monitor_SlimInfo $item
     * @return \ArrayType\ArrayOfISS_Monitor_SlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ISS_Monitor_SlimInfo) {
            throw new InvalidArgumentException(sprintf('The ISS_Monitor_SlimInfo property can only contain items of type \StructType\ISS_Monitor_SlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ISS_Monitor_SlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ISS_Monitor_SlimInfo';
    }
}
