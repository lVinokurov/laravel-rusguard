<?php

declare(strict_types=1);

namespace ArrayType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDriverFigureInfo ArrayType
 * Meta information extracted from the WSDL
 * - nillable: true
 * - type: tns:ArrayOfDriverFigureInfo
 * @subpackage Arrays
 */
class ArrayOfDriverFigureInfo extends AbstractStructArrayBase
{
    /**
     * The DriverFigureInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \StructType\DriverFigureInfo[]
     */
    protected array $DriverFigureInfo = [];
    /**
     * Constructor method for ArrayOfDriverFigureInfo
     * @uses ArrayOfDriverFigureInfo::setDriverFigureInfo()
     * @param \StructType\DriverFigureInfo[] $driverFigureInfo
     */
    public function __construct(array $driverFigureInfo = [])
    {
        $this
            ->setDriverFigureInfo($driverFigureInfo);
    }
    /**
     * Get DriverFigureInfo value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \StructType\DriverFigureInfo[]
     */
    public function getDriverFigureInfo(): ?array
    {
        return isset($this->DriverFigureInfo) ? $this->DriverFigureInfo : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDriverFigureInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDriverFigureInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDriverFigureInfoForArrayConstraintsFromSetDriverFigureInfo(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDriverFigureInfoDriverFigureInfoItem) {
            // validation for constraint: itemType
            if (!$arrayOfDriverFigureInfoDriverFigureInfoItem instanceof \StructType\DriverFigureInfo) {
                $invalidValues[] = is_object($arrayOfDriverFigureInfoDriverFigureInfoItem) ? get_class($arrayOfDriverFigureInfoDriverFigureInfoItem) : sprintf('%s(%s)', gettype($arrayOfDriverFigureInfoDriverFigureInfoItem), var_export($arrayOfDriverFigureInfoDriverFigureInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DriverFigureInfo property can only contain items of type \StructType\DriverFigureInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set DriverFigureInfo value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws InvalidArgumentException
     * @param \StructType\DriverFigureInfo[] $driverFigureInfo
     * @return \ArrayType\ArrayOfDriverFigureInfo
     */
    public function setDriverFigureInfo(array $driverFigureInfo = []): self
    {
        // validation for constraint: array
        if ('' !== ($driverFigureInfoArrayErrorMessage = self::validateDriverFigureInfoForArrayConstraintsFromSetDriverFigureInfo($driverFigureInfo))) {
            throw new InvalidArgumentException($driverFigureInfoArrayErrorMessage, __LINE__);
        }
        if (is_null($driverFigureInfo) || (is_array($driverFigureInfo) && empty($driverFigureInfo))) {
            unset($this->DriverFigureInfo);
        } else {
            $this->DriverFigureInfo = $driverFigureInfo;
        }
        
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \StructType\DriverFigureInfo|null
     */
    public function current(): ?\StructType\DriverFigureInfo
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \StructType\DriverFigureInfo|null
     */
    public function item($index): ?\StructType\DriverFigureInfo
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \StructType\DriverFigureInfo|null
     */
    public function first(): ?\StructType\DriverFigureInfo
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \StructType\DriverFigureInfo|null
     */
    public function last(): ?\StructType\DriverFigureInfo
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \StructType\DriverFigureInfo|null
     */
    public function offsetGet($offset): ?\StructType\DriverFigureInfo
    {
        return parent::offsetGet($offset);
    }
    /**
     * Add element to array
     * @see AbstractStructArrayBase::add()
     * @throws InvalidArgumentException
     * @param \StructType\DriverFigureInfo $item
     * @return \ArrayType\ArrayOfDriverFigureInfo
     */
    public function add($item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\DriverFigureInfo) {
            throw new InvalidArgumentException(sprintf('The DriverFigureInfo property can only contain items of type \StructType\DriverFigureInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        return parent::add($item);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DriverFigureInfo
     */
    public function getAttributeName(): string
    {
        return 'DriverFigureInfo';
    }
}
