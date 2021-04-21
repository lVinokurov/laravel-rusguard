<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfISS_DriverEventPlaybackSlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfISS_DriverEventPlaybackSlimInfo
 * @subpackage Arrays
 */
class ArrayOfISS_DriverEventPlaybackSlimInfo extends AbstractStructArrayBase
{
    /**
     * The ISS_DriverEventPlaybackSlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_DriverEventPlaybackSlimInfo[]
     */
    protected array $ISS_DriverEventPlaybackSlimInfo = [];
    /**
     * Constructor method for ArrayOfISS_DriverEventPlaybackSlimInfo
     * @uses ArrayOfISS_DriverEventPlaybackSlimInfo::setISS_DriverEventPlaybackSlimInfo()
     * @param \StructType\ISS_DriverEventPlaybackSlimInfo[] $iSS_DriverEventPlaybackSlimInfo
     */
    public function __construct(array $iSS_DriverEventPlaybackSlimInfo = [])
    {
        $this
            ->setISS_DriverEventPlaybackSlimInfo($iSS_DriverEventPlaybackSlimInfo);
    }
    /**
     * Get ISS_DriverEventPlaybackSlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_DriverEventPlaybackSlimInfo[]
     */
    public function getISS_DriverEventPlaybackSlimInfo(): ?array
    {
        return isset($this->ISS_DriverEventPlaybackSlimInfo) ? $this->ISS_DriverEventPlaybackSlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setISS_DriverEventPlaybackSlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setISS_DriverEventPlaybackSlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateISS_DriverEventPlaybackSlimInfoForArrayConstraintsFromSetISS_DriverEventPlaybackSlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfISS_DriverEventPlaybackSlimInfoISS_DriverEventPlaybackSlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfISS_DriverEventPlaybackSlimInfoISS_DriverEventPlaybackSlimInfoItem instanceof \StructType\ISS_DriverEventPlaybackSlimInfo) {
                $invalidValues[] = is_object($arrayOfISS_DriverEventPlaybackSlimInfoISS_DriverEventPlaybackSlimInfoItem) ? get_class($arrayOfISS_DriverEventPlaybackSlimInfoISS_DriverEventPlaybackSlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfISS_DriverEventPlaybackSlimInfoISS_DriverEventPlaybackSlimInfoItem), var_export($arrayOfISS_DriverEventPlaybackSlimInfoISS_DriverEventPlaybackSlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ISS_DriverEventPlaybackSlimInfo property can only contain items of type \StructType\ISS_DriverEventPlaybackSlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ISS_DriverEventPlaybackSlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ISS_DriverEventPlaybackSlimInfo[] $iSS_DriverEventPlaybackSlimInfo
     * @return \ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo
     */
    public function setISS_DriverEventPlaybackSlimInfo(array $iSS_DriverEventPlaybackSlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($iSS_DriverEventPlaybackSlimInfoArrayErrorMessage = self::validateISS_DriverEventPlaybackSlimInfoForArrayConstraintsFromSetISS_DriverEventPlaybackSlimInfo($iSS_DriverEventPlaybackSlimInfo))) {
            throw new InvalidArgumentException($iSS_DriverEventPlaybackSlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($iSS_DriverEventPlaybackSlimInfo) || (is_array($iSS_DriverEventPlaybackSlimInfo) && empty($iSS_DriverEventPlaybackSlimInfo))) {
            unset($this->ISS_DriverEventPlaybackSlimInfo);
        } else {
            $this->ISS_DriverEventPlaybackSlimInfo = $iSS_DriverEventPlaybackSlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ISS_DriverEventPlaybackSlimInfo|null
     */
    public function current(): ?\StructType\ISS_DriverEventPlaybackSlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ISS_DriverEventPlaybackSlimInfo|null
     */
    public function item($index): ?\StructType\ISS_DriverEventPlaybackSlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ISS_DriverEventPlaybackSlimInfo|null
     */
    public function first(): ?\StructType\ISS_DriverEventPlaybackSlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ISS_DriverEventPlaybackSlimInfo|null
     */
    public function last(): ?\StructType\ISS_DriverEventPlaybackSlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ISS_DriverEventPlaybackSlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ISS_DriverEventPlaybackSlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ISS_DriverEventPlaybackSlimInfo $item
     * @return \ArrayType\ArrayOfISS_DriverEventPlaybackSlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ISS_DriverEventPlaybackSlimInfo) {
            throw new InvalidArgumentException(sprintf('The ISS_DriverEventPlaybackSlimInfo property can only contain items of type \StructType\ISS_DriverEventPlaybackSlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ISS_DriverEventPlaybackSlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ISS_DriverEventPlaybackSlimInfo';
    }
}
