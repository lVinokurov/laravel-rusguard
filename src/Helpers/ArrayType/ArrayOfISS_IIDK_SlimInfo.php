<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfISS_IIDK_SlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfISS_IIDK_SlimInfo
 * @subpackage Arrays
 */
class ArrayOfISS_IIDK_SlimInfo extends AbstractStructArrayBase
{
    /**
     * The ISS_IIDK_SlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_IIDK_SlimInfo[]
     */
    protected array $ISS_IIDK_SlimInfo = [];
    /**
     * Constructor method for ArrayOfISS_IIDK_SlimInfo
     * @uses ArrayOfISS_IIDK_SlimInfo::setISS_IIDK_SlimInfo()
     * @param \StructType\ISS_IIDK_SlimInfo[] $iSS_IIDK_SlimInfo
     */
    public function __construct(array $iSS_IIDK_SlimInfo = [])
    {
        $this
            ->setISS_IIDK_SlimInfo($iSS_IIDK_SlimInfo);
    }
    /**
     * Get ISS_IIDK_SlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_IIDK_SlimInfo[]
     */
    public function getISS_IIDK_SlimInfo(): ?array
    {
        return isset($this->ISS_IIDK_SlimInfo) ? $this->ISS_IIDK_SlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setISS_IIDK_SlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setISS_IIDK_SlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateISS_IIDK_SlimInfoForArrayConstraintsFromSetISS_IIDK_SlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfISS_IIDK_SlimInfoISS_IIDK_SlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfISS_IIDK_SlimInfoISS_IIDK_SlimInfoItem instanceof \StructType\ISS_IIDK_SlimInfo) {
                $invalidValues[] = is_object($arrayOfISS_IIDK_SlimInfoISS_IIDK_SlimInfoItem) ? get_class($arrayOfISS_IIDK_SlimInfoISS_IIDK_SlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfISS_IIDK_SlimInfoISS_IIDK_SlimInfoItem), var_export($arrayOfISS_IIDK_SlimInfoISS_IIDK_SlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ISS_IIDK_SlimInfo property can only contain items of type \StructType\ISS_IIDK_SlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ISS_IIDK_SlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ISS_IIDK_SlimInfo[] $iSS_IIDK_SlimInfo
     * @return \ArrayType\ArrayOfISS_IIDK_SlimInfo
     */
    public function setISS_IIDK_SlimInfo(array $iSS_IIDK_SlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($iSS_IIDK_SlimInfoArrayErrorMessage = self::validateISS_IIDK_SlimInfoForArrayConstraintsFromSetISS_IIDK_SlimInfo($iSS_IIDK_SlimInfo))) {
            throw new InvalidArgumentException($iSS_IIDK_SlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($iSS_IIDK_SlimInfo) || (is_array($iSS_IIDK_SlimInfo) && empty($iSS_IIDK_SlimInfo))) {
            unset($this->ISS_IIDK_SlimInfo);
        } else {
            $this->ISS_IIDK_SlimInfo = $iSS_IIDK_SlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ISS_IIDK_SlimInfo|null
     */
    public function current(): ?\StructType\ISS_IIDK_SlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ISS_IIDK_SlimInfo|null
     */
    public function item($index): ?\StructType\ISS_IIDK_SlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ISS_IIDK_SlimInfo|null
     */
    public function first(): ?\StructType\ISS_IIDK_SlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ISS_IIDK_SlimInfo|null
     */
    public function last(): ?\StructType\ISS_IIDK_SlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ISS_IIDK_SlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ISS_IIDK_SlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ISS_IIDK_SlimInfo $item
     * @return \ArrayType\ArrayOfISS_IIDK_SlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ISS_IIDK_SlimInfo) {
            throw new InvalidArgumentException(sprintf('The ISS_IIDK_SlimInfo property can only contain items of type \StructType\ISS_IIDK_SlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ISS_IIDK_SlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ISS_IIDK_SlimInfo';
    }
}
