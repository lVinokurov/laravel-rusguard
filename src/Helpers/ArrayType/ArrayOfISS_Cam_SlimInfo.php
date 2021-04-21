<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfISS_Cam_SlimInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfISS_Cam_SlimInfo
 * @subpackage Arrays
 */
class ArrayOfISS_Cam_SlimInfo extends AbstractStructArrayBase
{
    /**
     * The ISS_Cam_SlimInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\ISS_Cam_SlimInfo[]
     */
    protected array $ISS_Cam_SlimInfo = [];
    /**
     * Constructor method for ArrayOfISS_Cam_SlimInfo
     * @uses ArrayOfISS_Cam_SlimInfo::setISS_Cam_SlimInfo()
     * @param \StructType\ISS_Cam_SlimInfo[] $iSS_Cam_SlimInfo
     */
    public function __construct(array $iSS_Cam_SlimInfo = [])
    {
        $this
            ->setISS_Cam_SlimInfo($iSS_Cam_SlimInfo);
    }
    /**
     * Get ISS_Cam_SlimInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\ISS_Cam_SlimInfo[]
     */
    public function getISS_Cam_SlimInfo(): ?array
    {
        return isset($this->ISS_Cam_SlimInfo) ? $this->ISS_Cam_SlimInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setISS_Cam_SlimInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setISS_Cam_SlimInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateISS_Cam_SlimInfoForArrayConstraintsFromSetISS_Cam_SlimInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfISS_Cam_SlimInfoISS_Cam_SlimInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfISS_Cam_SlimInfoISS_Cam_SlimInfoItem instanceof \StructType\ISS_Cam_SlimInfo) {
                $invalidValues[] = is_object($arrayOfISS_Cam_SlimInfoISS_Cam_SlimInfoItem) ? get_class($arrayOfISS_Cam_SlimInfoISS_Cam_SlimInfoItem) : sprintf('%s(%s)', gettype($arrayOfISS_Cam_SlimInfoISS_Cam_SlimInfoItem), var_export($arrayOfISS_Cam_SlimInfoISS_Cam_SlimInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ISS_Cam_SlimInfo property can only contain items of type \StructType\ISS_Cam_SlimInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ISS_Cam_SlimInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Cam_SlimInfo[] $iSS_Cam_SlimInfo
     * @return \ArrayType\ArrayOfISS_Cam_SlimInfo
     */
    public function setISS_Cam_SlimInfo(array $iSS_Cam_SlimInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($iSS_Cam_SlimInfoArrayErrorMessage = self::validateISS_Cam_SlimInfoForArrayConstraintsFromSetISS_Cam_SlimInfo($iSS_Cam_SlimInfo))) {
            throw new InvalidArgumentException($iSS_Cam_SlimInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($iSS_Cam_SlimInfo) || (is_array($iSS_Cam_SlimInfo) && empty($iSS_Cam_SlimInfo))) {
            unset($this->ISS_Cam_SlimInfo);
        } else {
            $this->ISS_Cam_SlimInfo = $iSS_Cam_SlimInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\ISS_Cam_SlimInfo|null
     */
    public function current(): ?\StructType\ISS_Cam_SlimInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\ISS_Cam_SlimInfo|null
     */
    public function item($index): ?\StructType\ISS_Cam_SlimInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\ISS_Cam_SlimInfo|null
     */
    public function first(): ?\StructType\ISS_Cam_SlimInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\ISS_Cam_SlimInfo|null
     */
    public function last(): ?\StructType\ISS_Cam_SlimInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\ISS_Cam_SlimInfo|null
     */
    public function offsetGet($offset): ?\StructType\ISS_Cam_SlimInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\ISS_Cam_SlimInfo $item
     * @return \ArrayType\ArrayOfISS_Cam_SlimInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\ISS_Cam_SlimInfo) {
            throw new InvalidArgumentException(sprintf('The ISS_Cam_SlimInfo property can only contain items of type \StructType\ISS_Cam_SlimInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string ISS_Cam_SlimInfo
     */
    public function getAttributeName(): string
    {
        return 'ISS_Cam_SlimInfo';
    }
}
